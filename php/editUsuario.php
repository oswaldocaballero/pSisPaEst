<!--
	integrantes:
	1.-oswaldo caballero
	2.-jose troncoso
	3.-christian vera
-->
<?php
if(isset($_POST['editDt'])){
	require_once("general.class.php");
	$objEdit= new Seleccion;
	$otro=$objEdit->verEditUsuario($_POST['editDt']);
	$rows = mysql_fetch_array($otro);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Editar Usuario</title>
		<!--importacion de librerias css-->
		<link rel="Stylesheet" href="../css/Style.css"/>
		<!--importacion de librerias js-->
		<script text="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="../js/btnOcultos.js"></script>
	</head>

	<body>
		<!--tabla que contiene el nombre del cliente que se va editar-->
		<div id="bienv">
			<table>
				<tr>
					<td id="contTabla"><h3>EDITAR USUARIO <?php echo $rows['usuario']?></h3></td>
				</tr>
			</table>
		</div>

		<!--formulario para editar usuario-->
		<div id="formulario">
			<form action="verificarEditUsuario.php" method="POST">
				<!--fieldset que contiene los campos que contendran las información personal-->
				<fieldset align="center" id="personales">
				<legend>Datos personales</legend>
						<a><input type="hidden" name="id_usuario" value="<?php echo $rows['id_usuario']; ?>"/></a>	
						<a id="user">usuario: <input type="text" id="tUser" name="usuario" title="Ingrese su usuario" autofocus required value="<?php echo $rows['usuario']; ?>"/></a>
						<a id="nombre">Nombre: <input type="text" id="tNombre" name="nombre" title="Ingrese su nombre" value="<?php echo $rows['nombre']; ?>"/></a>
						<a id="ap">Apellido Paterno: <input type="text" id="tAp" name="ap" title="Ingrese su apellido paterno" required  value="<?php echo $rows['apellido_paterno']; ?>"/></a>
						<a id="am">Apellido Materno: <input type="text" id="tAm" name="am" title="Ingrese su apellido materno" required  value="<?php echo $rows['apellido_materno']; ?>"/></a>
						<a id="pass">Contrase&ntilde;a: <input type="password" id="tPass" name="contrasena" title="Ingrese su contrase&ntilde;a" required value="<?php echo $rows['contrasena']; ?>"/></a>
						<a id="telf">Telefono: <input type="tel" id="tTelf" name="telf" title="Ingrese su numero de telefono" required value="<?php echo $rows['telefono']; ?>"/></a>
						<a id="e_mail">Email: <input type="email" id="tEmail" name="email" title="Ingrese su email" required value="<?php echo $rows['email'];?>" maxlength="10"/></a>						
						<a id="edad">Edad:
						    <select id="tEdad" name="edad" required>
						    	<option></option>
						    	<option value="i" <?php if($rows['edad']=='01-12'){?>SELECTED<?php } ?>>Infantil</option>
						    	<option value="j" <?php if($rows['edad']=='13-17'){?>SELECTED<?php } ?>>Joven</option>
						    	<option value="a" <?php if($rows['edad']=='18-55'){?>SELECTED<?php } ?>>Adulto</option>
						    	<option value="aM" <?php if($rows['edad']=='56-99'){?>SELECTED<?php } ?>>Adulto Mayor</option>
                            </select>
						</a>
						<a id="sx">Sexo:
								<a id = "hmb"><input type="radio" id="gen" name="gen" value="m" <?php if($rows['sexo']=='m'){?>checked<?php } ?> />Masculino</a>
								<a id = "mjr"><input type="radio" id="gen" name="gen" value="f" <?php if($rows['sexo']=='f'){?>checked<?php } ?>/>Femenino</a>
						</a>
						<a id="tp"><input type="hidden" id="tPuesto" name="puesto" value="<?php echo $rows['tipo_usuario'];?>"/></a>
				</fieldset>
				<!--fieldset que contiene los campos para rellenar de su direccion-->
				<fieldset align="center" id="direccion">
					<legend>Direcci&oacute;n</legend>
						<a id="colonia">Colonia: <input type="text" id="tColonia" name="colonia" required value="<?php echo $rows['colonia']; ?>"/></a>
						<a id="direccion">Direcci&oacute;n: <input type="text" id="tDireccion" name="direccion" title="Ingrese su direccion" required required value="<?php echo $rows['direccion']; ?>"/></a>						
				</fieldset>
				<!--fieldset que contiene la información del formulario a rellenar-->
				<fieldset align="center" id="info">
					<legend>Informaci&oacute;n</legend>
					<article id="articulo">El siguiente formulario sirve para que usted edite su informaci&oacute;n, la cual nos proporciono en el momento que se registro</article>
				</fieldset>
				<!--boton para actualizar-->
				<div id="actualizar">
					<input type="submit" value="Actualizar" id="refresh"/>
				</div>
				<!--boton para ir atras-->
				<div id="atras">
					<label id="back"><a href="consultaUsuario.php"  class="back">Cancelar</a></label>
				</div>
			</form>
		</div>
	</body>
</html>
<?php 
} 
?>