<?php
if(isset($_POST['usuario']) AND isset($_POST['contrasena']))
{
	require_once("general.class.php");
	$objGeneral = new Seleccion;
	$usuario = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];
	$consultaLogin = $objGeneral->sesionUsuario($usuario,$contrasena);
	
	if(mysql_num_rows($consultaLogin)>0){
        session_start();
		$_SESSION["activo"] = true;
		header("location: logeado.php");
	} else {
		header("location: ../index.php");		
	}

	/*if(mysql_num_rows($consultaLogin)>0){
        session_start();
		$_SESSION["activo"] = true;
			if(isset($_SESSION["activo"])){
			echo 'index.php';
			echo "Sesion iniciada";
			}
	} else {
			$menu = "menu";
			require("menu.php");
			echo 'index.php';
			echo "Verifique sus Datos";
	}*/
}
/*Cerrar sesion*/
if (isset($_POST['close'])) {
	session_start();
	session_destroy();
    echo "close";
}
?>