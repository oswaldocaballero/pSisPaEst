<?php
require_once("general.class.php");	

$objetoRegistroEstilista = new Seleccion;

if(isset($_POST['usuario']) AND isset($_POST['contrasena']) AND isset($_POST['nombre']) AND isset($_POST['ap']) AND isset($_POST['am']) AND isset($_POST['telf']) AND isset($_POST['email']) AND isset($_POST['gen'])
   AND isset($_POST['edad']) AND isset($_POST['puesto']) AND isset($_POST['colonia']) AND  isset($_POST['direccion'])){	


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
	 	case 'a':
	 		 $edad ="18-55";
	 		break;	 
	 	case 'aM':
	 		 $edad ="56-99";
	 		break;
	 	default:
	 		$edad ="edad invalida";
	 		break;
	 }
	$puesto = $_POST['puesto'];
	$colonia = $_POST['colonia'];
	$direccion = $_POST['direccion'];
	
	$consulta = $objetoRegistroEstilista->registroUsuario($usuario,$contrasena,$nombre,$apaterno,$amaterno,$email,$telefono, $sexo, $edad, $puesto ,$colonia, $direccion);
	
	if(mysql_num_rows($consulta)>0){
		header('location: ../html/logeado.html');
	} else {
		 $objetoRegistroEstilista->regUsuario($usuario,$contrasena,$nombre,$apaterno,$amaterno,$email,$telefono, $sexo, $edad, $puesto ,$colonia, $direccion);
		
		header('location: ../html/registroEstilista.html');
	}
/*
	$consulta = $objetoRegistroEstilista->registroEstilista($usuario,$contrasena,$apaterno,$amaterno,$email,$telefono, $sexo, $fecha_nacimiento, $puesto ,$pais, $estado,$localidad, $municipio, $calle, $referencia, $cp);
	
	if(mysql_num_rows($consulta)>0){
		header('location: ../html/logeado.html');
	} else {
		 $objetoRegistroEstilista->regEstilista($usuario, $contrasena, $apaterno, $amaterno,$email,$telefono,$sexo,$fecha_nacimiento,$puesto,$pais,$estado,$localidad,$municipio,$calle,$referencia,$cp);	
			header('location: ../html/registroEstilista.html');
	}*/
}
?>