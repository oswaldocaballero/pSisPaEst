<!--
	autores:
	1.-oswaldo caballero
	2.-jose troncoso
	3.-christian vera
-->
<?php 
require_once("general.class.php");
$objConsultaUsuario= new Seleccion;
$objConsultaEsteticas= new Seleccion;
$conten=$objConsultaUsuario->verUsuario();
$conten2=$objConsultaEsteticas->verEsteticas();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Consulta de usuarios</title>
	</head>

	<body>		
		<!--<div id="bienv">
			<table>
				<tr>
					<td id="contTabla"><h3>CONSULTAR INFORMACION</h3></td>
				</tr>
			</table>
		</div>-->

		
		<!--tabs-->
		<div id="divGral">
			<div id="tabTabla">
				<!--menu tabs-->
				<div id="pestanasTabla">
					<a href="#contenidoTablaUsuarios" id="unoC" class="unoC">Ver Usuarios</a>
					<a href="#contenidoTablaEsteticas" id="dosC" class="dosC">Ver Esteticas</a>
					<a href="#contenidoTablaServicios" id="tresC" class="tresC">Ver Servicios</a>
				</div>
				<!--contenido de los tabs-->
				
				<!--tab de ver usuarios-->
				<div id="contenidoTablaUsuarios" class="oculto">
					<table border="1" id="contenido">			
							<tr align="center">
								<td class="titulo">Nombre</td>
								<td class="titulo">Apellido Materno</td>
								<td class="titulo">Apellido Paterno</td>
								<td class="titulo">Email</td>
								<td class="titulo">Telefono</td>
								<td class="titulo">Rango de Edad</td>
								<td colspan="2" class="titulo">Opciones</td>
							</tr>
								<?php
									if(mysql_num_rows($conten)>0)
									{
										while ($rows=mysql_fetch_array($conten)) {											
								?>
							<tr id="rm<?php echo $rows['id_usuario']; ?>">
								<td><?php echo $rows['usuario']?></td>
								<td><?php echo $rows['apellido_paterno']?></td>
								<td><?php echo $rows['apellido_materno']?></td>
								<td><?php echo $rows['email']?></td>
								<td><?php echo $rows['telefono']?></td>
								<td><?php echo $rows['edad']?></td>
								<td><label id="<?php echo $rows['id_usuario']; ?>" class="elim"><img src="../image//iconos/waste.ico" id="elimina"></label></td>
								<td><label id="<?php echo $rows['id_usuario']; ?>" class="edit"><img src="../image//iconos/tools.ico" id="editar"></label></td>
							</tr>
								<?php
										}

									}else{
								?>
							<tr>
								<td colspan="7" align="center">No hay clientes registrados</td>
							</tr>
								<?php
									}
								?>
					</table>
				</div>

				<!--tab de ver usuarios-->
				<div id="contenidoTablaEsteticas" class="oculto">
					<table border="1" id="contenido2">			
							<tr align="center">
								<td class="titulo">Estetica</td>
								<td class="titulo">Email</td>
								<td class="titulo">Colonia</td>
								<td class="titulo">Direcci&oacute;n</td>
								<td class="titulo">Telefono</td>
								<td colspan="2" class="titulo">Opciones</td>
							</tr>
								<?php
									if(mysql_num_rows($conten2)>0)
									{
										while ($rows=mysql_fetch_array($conten2)) {											
								?>
							<tr id="rm<?php echo $rows['id_estetica']; ?>">
								<td><?php echo $rows['nombre']?></td>
								<td><?php echo $rows['email']?></td>
								<td><?php echo $rows['colonia']?></td>
								<td><?php echo $rows['direccion']?></td>
								<td><?php echo $rows['telefono']?></td>
								<td><label id="<?php echo $rows['id_usuario']; ?>" class="elim"><img src="../image//iconos/waste.ico" id="elimina"></label></td>
								<td><label id="<?php echo $rows['id_usuario']; ?>" class="edit"><img src="../image//iconos/tools.ico" id="editar"></label></td>
							</tr>
								<?php
										}

									}else{
								?>
							<tr>
								<td colspan="7" align="center">No hay esteticas registradas</td>
							</tr>
								<?php
									}
								?>
					</table>
				</div>
			</div>
		</div>
		
	</body>
</html>