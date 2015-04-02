<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Iniciog</title>
		<!--importacion de librerias css-->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<link rel="Stylesheet" href="css/indexStyle.css"/>
		<link rel="Stylesheet" href="css/estStyle.css"/>
		<link rel="Stylesheet" href="css/Style.css"/>


		<!--importacion de librerias js-->
		<script text="text/javascript" src="js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="js/scripCarrusel.js"></script>
		<script type="text/javascript" src="js/btnOcultos.js"></script>
		<script type="text/javascript" src="js/validaciones.js"></script>
		<script type="text/javascript" src="js/general.js"></script>
		<script text="text/javascript" src="js/jquery_cycle.js"></script>

	</head>

	<body>
		<div id="logotipo">
			<img src="image/log.gif" alt="sispaest" id="logo" />
		</div>		
		<div id="indexBienve">
			<table>
				<tr>
					<td id="conteneTabla"><a id="saludo"><h3>BIENVENIDO AL SISTEMA PARA ESTETICAS </h3></a></td>
					<td class="IniciarSesion" onclick="login();"><a id="sesion" >Login</a></td>
				</tr>
			</table>
		</div>
		
		<div id="loginSesion">
			<form action="php/verificarUsuarioLogin.php" method="post" id="frmLogin">
				<table border="2" id="tabla">
					<tr class="user">
						<td id="usua">Usuario *</td>
						<td><input id="usuario" name="usuario" type="text" title="Ingrese su usuario"/></td>
					</tr>
						<div id="mensajeLogin1" class="errores">Ingrese su nombre de usuario</div>

					<tr class="pass">
						<td id="contra">Contrase&ntilde;a *</td>
						<td><input id="contrasena" name="contrasena" type="password" title="Ingrese su contraseña"/></td>
						<div id="mensajeLogin2" class="errores">Ingrese su contrase&ntilde;a</div>
					</tr>			
				</table>
			</form>
			<div id="btnIniciarSesion"><input id="a_ingresar" type="submit" value="Iniciar sesi&oacute;n"/></div>
		</div>	

		<?php
			$menu = "menu";
			require("php/menu.php");
		?>				

		<div id="indexSociales">
			<div class="sociales" id="uno"><img class="icon" src="image/64x64/twitter.png"><p class="texto">twitter</p></div>
			<div class="sociales" id="dos"><img class="icon" src="image/64x64/furl.png"><p class="texto">furl</p></div>
			<div class="sociales" id="tres"><img class="icon" src="image/64x64/youtube.png"><p class="texto">youtube</p></div>
			<div class="sociales" id="cuatro"><img class="icon" src="image/64x64/yahoo.png"><p class="texto">yahoo</p></div>
			<div class="sociales" id="cinco"><img class="icon" src="image/64x64/facebook.png"><p class="texto">facebook</p></div>
		</div>

		<div id="contenedorPrincipal">
			<?php
				$uno = "uno";	
				require_once("php/slider.php");
			?>


			<?php
				$noticias = "uno";	
				require("php/slider.php");
			?>
		</div>

		<div id="indexPromociones">	
			<table>
				<tr>
					<td id="promo">Promociones</td>
				</tr>
				<tr>
					<td id="contPromo"></td>
	            		</tr>
			</table>			
		</div>

		<div id="indexNota">
			<table>
				<tr>
					<td id="contNot">&copy;&nbsp; <?php echo date('Y'); ?> Derechos Reservados SisPaEst <br />
                    <?php
                     if(isset($_SESSION['mensaje'])){
                     	
   ?>
                       <div id="respuesta"><a>Los datos del usuario han sido registrados</a></div>
   <?php
                     	
                     }
                    ?>
					</td>
				</tr>
			</table>
		</div>

	</body>
</html>
