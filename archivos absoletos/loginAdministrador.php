<?php
	require_once("general.class.php");
	$admin = new Seleccion;
	$consulta=$admin->verEsteticas();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Login</title>
		<link rel="Stylesheet" href="../css/Style.css" type="text/css" />
		<script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="../js/btnOcultos.js"></script>
		<script type="text/javascript" src="../js/validaciones.js"></script>
	</head>
			<body>
				<!--<img src="image/fw.jpg" id="fondo"/>-->	
				<img src="../image/log.gif" alt="sispaest" height="250" width="610" />
				<!--fieldset se utiliza para agrupar elementos-->
				<fieldset align="center" id="fieldAdmin">
					<!--legend sirve para ponerle el nombre al fieldset-->
					<legend>Login</legend>
						
						<table border="2" align="center" id="tabla">
						<form action="../php/verificarAdminLogin.php" method="post">
								<tr>
									<th id="sis" colspan="2">sispaest</th>
								</tr>
								<tr id="columna1">
									<td id="usuaAdmin">Usuario</td>
									<td id="usuAdmin"><input id="usuarioAdmin" name="usuario" type="text" value="" title="Ingrese su usuario" onpaste="return false"/></td>
									<div id="mensajeLogin1" class="errores">Ingrese su nombre de usuario</div>
								</tr>
								<tr id="columna2">
									<td id="contraAdmin">Contrase&ntilde;a</td>
									<td id="conAdmin"><input id="contrasenaAdmin" name="contrasena" type="password" value="" title="Ingrese su contraseña" onpaste="return false"/></td>
									<div id="mensajeLogin2" class="errores">Ingrese su contrase&ntilde;a</div>
								</tr>
								<div>
									<input id="a_ingresarAdmin" type="submit" value="Iniciar sesion"/></td>
								</div>					
						</form>
						</table>
						<div>
							<a id="logEstetica">Estetica </a>							
						    <select id="tLogEstetica" name="lEstetica" autofocus required>

							<?php 
							if(mysql_num_rows($consulta)>0)
							{
								while ($rows=mysql_fetch_array($consulta))
								{			
							?>
						    	<option name="<?php echo $rows['nombre']?>"><?php echo $rows['nombre'];?></option>
						    <?php
						    	}
						    }else{
						    ?>
					    	<option value="No hay esteticas"></option>
						    <?php
						    }
						    ?>
						    </select>
						
						</div>
									<div class="borrarAdmin" align="center"><input id="a_borrarAdmin" type="reset" value="¿Olvido su contrase&ntilde;a?"/></div>
									<div class="regAdmin" align="center"><input id="a_registrarAdmin" type="submit" value="Registrarse" onclick="visualizarBtn2();"/></div>
						<table id="tabla3">
							<tr>
								<td><a href="../index.html"><img src="../image/invitado.jpg" id="imgInvit"/></a></td>
							</tr>
						</table>
						<div id="subBotRegistroAdmin">
								<div id="rC"><a href="registroCliente.html"><input id="r" type="submit" value="Registro Cliente"/></a></div>
								<div id="rA"><a href="registroAdministrador.html"><input id="r" type="submit" value="Registro Administrador"/></a></div>
								<div id="rE"><a href="registroEstilista.html"><input id="r" type="submit" value="Registro Estilista"/></a></div>
						</div>
				</fieldset>
			</body>
</html>