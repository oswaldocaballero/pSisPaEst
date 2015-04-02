<?php
//iniciar sesion
session_start();
if(isset($_SESSION["activo"])){
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>InicioAdmin</title>
		<!--importacion de librerias css-->
		<link rel="Stylesheet" href="../css/Style.css"/>
		<link rel="Stylesheet" href="../css/estStyle.css"/>		
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<!--importacion de librerias js-->		
		<script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="../js/scripCarrusel.js"></script>
		<script type="text/javascript" src="../js/generalLogeado.js"></script>
		<script type="text/javascript" src="../js/general.js"></script>
		<script type="text/javascript" src="../js/btnOcultosLogeado.js"></script>
		<script type="text/javascript" src="../js/validaciones.js"></script>
		<script text="text/javascript" src="../js/jquery_cycle.js"></script>

	</head>

	<body>
		<!--logo-->
		<div id="logotipo">
			<img src="../image/log.gif" alt="sispaest" id="logo" />
		</div>		
		
		<div id="bienv">
			<table>
				<tr>
					<td id="contTabla"><h3>BIENVENIDO AL SISTEMA PARA ESTETICAS</h3></td>
					<td class="cerrarSesion"><div id="sesion" class="sesion"><img id="cerrar" class="cerrar" src="../image/iconos/unlock.ico" /></div></td>
				</tr>
			</table>
		</div>

		<?php
		$menu2 = "menulog";
			require("menu.php");
		?> 

		<!--menu de sociales-->
		<div id="indexSociales">
			<div class="sociales" id="uno"><a href="../index.html"><img class="icon" src="../image/64x64/twitter.png"><p class="texto">twitter</p></a></div>
			<div class="sociales" id="dos"><img class="icon" src="../image/64x64/furl.png"><p class="texto">furl</p></div>
			<div class="sociales" id="tres"><img class="icon" src="../image/64x64/youtube.png"><p class="texto">youtube</p></div>
			<div class="sociales" id="cuatro"><img class="icon" src="../image/64x64/yahoo.png"><p class="texto">yahoo</p></div>
			<div class="sociales" id="cinco"><img class="icon" src="../image/64x64/facebook.png"><p class="texto">facebook</p></div>
		</div>

		<div id="contenedorPrincipal">
		</div>
		
		<!--Slider-->
		<div id="contenedor">
			<div id="slider">
				<div><img src="../image/1.jpg"></div>
				<div><img src="../image/2.jpg"></div>
				<div><img src="../image/3.jpg"></div>
				<div><img src="../image/4.jpg"></div>
				<div><img src="../image/5.jpg"></div>
				<div><img src="../image/6.jpg"></div>
				<div><img src="../image/7.jpg"></div>
			</div>
		</div>

		<!--Panel de noticias-->
		<div id="noticias">
			<table>
				<tr>
					<td id="pro1">Noticias</td>
				</tr>
				<tr>
					<td id="esp"></td>
                 </tr>
			</table>	
		</div>
		</div>

		<div id="contenerdoPromociones">
		<?php
			$sliderPromociones ="promociones";
			require_once("slider.php");
		?>
		</div>
	
		<!--Pie de pagina-->
		<div id="nota">
			<table>
				<tr>
					<td id="pro3">&copy;&nbsp; <?php echo date("Y");?> Derechos Reservados SisPaEst </td>
				</tr>		
			</table>
		</div>
			
	</body>
</html>
<?php
}else{
	header("location: ../index.php");		
}
?>