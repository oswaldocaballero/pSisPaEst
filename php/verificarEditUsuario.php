<?php

if(isset($_POST['id_usuario']) AND isset($_POST['usuario'])){
	require_once("general.class.php");	
    $objetoEdit = new Seleccion;
	
	$row=$_POST['id_usuario'];
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


	$consulta = $objetoEdit->datosIngresadosIguales($row, $usuario, $contrasena, $nombre, $apaterno, $amaterno, $email, $telefono, $sexo, $edad, $puesto ,$colonia, $direccion);
	
	if(mysql_num_rows($consulta)>0)
	{
		echo "no se cambio nigun dato del usuario";
	} else {
		$objetoEdit->editUsuario($row, $usuario, $contrasena, $nombre, $apaterno, $amaterno, $email, $telefono, $sexo, $edad, $puesto ,$colonia, $direccion);				
		header("location: consultaUsuario.php");		
	}
}
?>