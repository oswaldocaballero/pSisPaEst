<?php

if(isset($_POST['usuario']) AND isset($_POST['contrasena'])	AND isset($_POST['nombre']) AND isset($_POST['ap']) AND isset($_POST['am']) AND isset($_POST['telf']) AND isset($_POST['email']) AND isset($_POST['gen'])
   AND isset($_POST['edad']) AND isset($_POST['puesto']) AND isset($_POST['colonia']) AND  isset($_POST['direccion'])){	

require_once("general.class.php");	

$objetoRegistro = new Seleccion;

	$usuario = $_POST['usuario'];	
	$contrasena =$_POST['contrasena'];
	$nombre =$_POST['nombre'];
	$apaterno = $_POST['ap'];
	$amaterno = $_POST['am'];
	$telefono = $_POST['telf'];
	$email = $_POST['email'];
	$sexo = $_POST['gen'];
	/*
	$date = date_create($_POST['fecha']);
	$fecha_nacimiento = date_format($date, 'Y-m-d');
	*/
	$varedad = $_POST['edad'];
	 switch ($varedad) {
	 	case 'i':
	 	     $edad = "01-12";
	 		break;
	 	case 'j':
	 		 $edad ="13-17";
 	 		break;
	 	case 'a':
	 		 $edad ="18-55";
	 		break;	 
	 	case 'aM':
	 		 $edad ="56-99";
	 		break;
	 	default:
	 		$edad ="error";
	 		break;
	 }
	$puesto = $_POST['puesto'];
	$colonia = $_POST['colonia'];
	$direccion = $_POST['direccion'];
	
	/*echo $usuario;
	echo $contrasena;
	echo $nombre;
	echo $apaterno;
	echo $amaterno;
	echo $email;
	echo $telefono;
	echo $sexo;
	echo $edad;
	echo $puesto;
	echo $colonia;
	echo $direccion;*/

	$consultaLogin = $objetoRegistro->registroUsuario($usuario,$contrasena,$nombre,$apaterno,$amaterno,$email,$telefono, $sexo, $edad, $puesto ,$colonia, $direccion);
    session_start();	
	if(mysql_num_rows($consultaLogin)>0){
		header('location: ../php/logeado.php');
	} else {		
		$objetoRegistro->regUsuario($usuario,$contrasena,$nombre,$apaterno,$amaterno,$email,$telefono, $sexo, $edad, $puesto ,$colonia, $direccion);
		if(isset($_SESSION["activo"])){
			$_SESSION['mensaje'] = 1;
			echo 'location: ../php/logeado.php';
		} else {
			echo "registrado";
		}
		//header('location: ../html/registroCliente.html');
	}
}
?>