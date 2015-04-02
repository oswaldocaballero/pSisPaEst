<?php
include_once("conexionClase.php");
class Seleccion
{	
	var $con;
	 
	 //constructor de la clase Seleccion del archivo conexionClase.hp
	 function Seleccion(){
		$this->con = new bd;
	 }
	 
	 //funcion para el logeo de usuarios
	 function sesionUsuario($usuario, $contrasena)
	 {	 			
	    if ($this->con->conectar()==true)
	    {
	 	    return $select=mysql_query("SELECT usuario,contrasena FROM usuarios WHERE usuario='".$usuario."' AND contrasena='".$contrasena."'");
	 	}
	 }
	 
	 
	 //-------------------------------------seccion de registro(insert) de datos-------------------------------------------------

	 //funcion para verificar si los datos ingresados del usuario ya se encuentarn en la bd
	 function registroUsuario($usuario, $contrasena, $nombre, $apaterno, $amaterno, $email, $telefono, $sexo, $edad, $puesto, $colonia, $direccion)
	 {			
	 	if ($this->con->conectar()==true)
	 	{
	 		return $select=mysql_query("SELECT * FROM usuarios WHERE usuario='".$usuario."' AND contrasena='".$contrasena."' AND nombre='".$nombre."' AND apellido_paterno='".$apaterno."' AND apellido_materno='".$amaterno."' 
	 																 AND email='".$email."' AND telefono='".$telefono."' AND sexo='".$sexo."' AND edad='".$edad."'  
	 																 AND tipo_usuario='".$puesto."' AND colonia='".$colonia."' AND direccion='".$direccion."'");
	 	}
	 }
	 
	 //funcion para insertar los datos del usuario en la bd
	 function regUsuario($usuario,$contrasena,$nombre,$apaterno,$amaterno,$email,$telefono, $sexo, $edad, $puesto ,$colonia, $direccion)
	 {
	 	if ($this->con->conectar()==true)
	 	{
	 		return $select=mysql_query("INSERT INTO usuarios (usuario,contrasena,nombre,apellido_paterno,apellido_materno,email,telefono,sexo,edad,tipo_usuario,
	 														  colonia,direccion)
	 									VALUES ('".$usuario."','".$contrasena."','".$nombre."','".$apaterno."','".$amaterno."','".$email."','".$telefono."','".$sexo."','".$edad."', '".$puesto."' ,'".$colonia."','".$direccion."')");
	 	} 
	 }

	 /*funcion para verificar si los datos ingresados del estilista ya se encuentarn en la bd
	 function registroEstilista($usuario, $contrasena, $nombre, $apaterno, $amaterno, $email, $telefono, $sexo, $edad, $puesto, $colonia, $direccion)
	 {			
	 	if ($this->con->conectar()==true)
	 	{
	 		return $select=mysql_query("SELECT * FROM empleados WHERE usuario='".$usuario."' AND contrasena='".$contrasena."' AND nombre='".$nombre."' AND apellido_paterno='".$apaterno."' AND apellido_materno='".$amaterno."' 
	 																 AND email='".$email."' AND telefono='".$telefono."' AND sexo='".$sexo."' AND edad='".$edad."'  
	 																 AND puesto='".$puesto."' AND colonia='".$colonia."' AND direccion='".$direccion."'");
	 	}
	 }
	 
	 funcion para insertar los datos del estilista en la bd
	 function regEstilista($usuario,$contrasena,$nombre,$apaterno,$amaterno,$email,$telefono, $sexo, $edad, $puesto ,$colonia, $direccion)
	 {
	 	if ($this->con->conectar()==true)
	 	{
	 		return $select=mysql_query("INSERT INTO empleados (usuario,contrasena,nombre,apellido_paterno,apellido_materno,email,telefono,sexo,edad,puesto,
	 														  colonia,direccion)
	 									VALUES ('".$usuario."','".$contrasena."','".$nombre."','".$apaterno."','".$amaterno."','".$email."','".$telefono."','".$sexo."','".$edad."', '".$puesto."' ,'".$colonia."','".$direccion."')"); 
	 	}
	 }

	 funcion para verificar si los datos ingresados del administrador ya se encuentarn en la bd
	 function registroAdministrador($usuario, $contrasena, $nombre, $apaterno, $amaterno, $email, $telefono, $sexo, $edad, $puesto, $colonia, $direccion)
	 {			
	 	if ($this->con->conectar()==true)
	 	{
	 		return $select=mysql_query("SELECT * FROM empleados WHERE usuario='".$usuario."' AND contrasena='".$contrasena."' AND nombre='".$nombre."' AND apellido_paterno='".$apaterno."' AND apellido_materno='".$amaterno."' 
	 																 AND email='".$email."' AND telefono='".$telefono."' AND sexo='".$sexo."' AND edad='".$edad."'  
	 																 AND puesto='".$puesto."' AND colonia='".$colonia."' AND direccion='".$direccion."'");
	 	}
	 }
	 
	 funcion para insertar los datos del administrador en la bd
	 function regAdministrador($usuario,$contrasena,$nombre,$apaterno,$amaterno,$email,$telefono, $sexo, $edad, $puesto ,$colonia, $direccion)
	 {
	 	if ($this->con->conectar()==true)
	 	{
	 		return $select=mysql_query("INSERT INTO empleados (usuario,contrasena,nombre,apellido_paterno,apellido_materno,email,telefono,sexo,edad,puesto,
	 														  colonia,direccion)
	 									VALUES ('".$usuario."','".$contrasena."','".$nombre."','".$apaterno."','".$amaterno."','".$email."','".$telefono."','".$sexo."','".$edad."', '".$puesto."' ,'".$colonia."','".$direccion."')"); 
	 	}
	 }
	 */
	 //---------------------seccion para obtener datos de la bd----------------------------------

	 //funcion para ver los usuarios que ya se encuentran registrados
	 function verUsuario()
	 {
	 	if($this->con->conectar()==true)
	 	{
	 		return $select=mysql_query("SELECT id_usuario, usuario,apellido_paterno,apellido_materno,email,telefono, edad, tipo_usuario FROM usuarios 
	 									WHERE id_usuario > 0 AND tipo_usuario = 'estilista' ORDER BY usuario ASC");		
	 	}
	 }
	 
	 //funcion para ver las esteticas que ya se encuentran registradas
	 function verEsteticas()
	 {
	 	if($this->con->conectar()==true)
	 	{
	 		return $select=mysql_query("SELECT esteticas.id_estetica,esteticas.nombre, esteticas.email, ubicaciones.colonia, esteticas.direccion, esteticas.telefono FROM establecimientos INNER JOIN esteticas ON establecimientos.id_estetica = esteticas.id_estetica
										INNER JOIN ubicaciones ON establecimientos.id_ubicacion = ubicaciones.id_ubicacion WHERE esteticas.id_estetica > 0 AND ubicaciones.id_ubicacion > 0");
	 	}
	 }
	
	 /*----------------------------------paginacion de datos de la tabla-------------------------------------
	 /function paginacionDatos($inicio,$resultados){
	 	if($this->con->conectar()==true)
	 	{
	 		return $select=mysql_query("SELECT id_cliente, usuario,apellido_paterno,apellido_materno,email,telefono, edad FROM clientes 
	 									WHERE id_cliente > 0 ORDER BY usuario ASC LIMIT ".$inicio.",".$resultados."");		
	 	}	
	 }*/

	 //funcion para obtener los datos del usuario para editar
	 function verEditUsuario($row)
	 {
	 	if($this->con->conectar()==true)
	 	{
	 		return $select=mysql_query("SELECT id_usuario,usuario,contrasena,nombre,apellido_paterno,apellido_materno,email,telefono,sexo,edad,tipo_usuario,colonia,direccion
	 			FROM usuarios WHERE id_usuario=".$row." LIMIT 1");
	 	}	
	 }
	 	 
	 
	 //---------------------seccion para eliminar(delete) datos de la bd----------------------------

	 //funcion para eliminar los usuarios de la bd
	 function eliUsuario($row)
	 {
	 	if($this->con->conectar()==true)
	 	{
	 		return $select=mysql_query("DELETE FROM usuarios WHERE id_usuario=".$row);
	 	}	
	 }
	 

	 //--------------------seccion para editar(edit) datos de la bd--------------------------------

	 //funcion para verificar si los datos ingresados que se editaran son los mismos datos que se encuentran en la bd
	 function datosIngresadosIguales($row, $usuario, $contrasena, $nombre, $apaterno, $amaterno, $email, $telefono, $sexo, $edad, $puesto ,$colonia, $direccion)
	 {			
	 	if ($this->con->conectar()==true)
	 	{
	 		return $select=mysql_query("SELECT * FROM usuarios WHERE id_usuario='".$row."' AND usuario='".$usuario."' AND contrasena='".$contrasena."'AND nombre='".$nombre."' AND apellido_paterno='".$apaterno."' AND apellido_materno='".$amaterno."' 
	 																 AND email='".$email."' AND telefono='".$telefono."' AND sexo='".$sexo."' AND edad='".$edad."'  
	 																 AND tipo_usuario='".$puesto."' AND colonia='".$colonia."' AND direccion='".$direccion."'");
	 	}
	 }
	 
	 //funcion para editar clientes
	 function editUsuario($row, $usuario, $contrasena, $nombre, $apaterno, $amaterno, $email, $telefono, $sexo, $edad, $puesto ,$colonia, $direccion)
	 {	
	 	if($this->con->conectar()==true)
	 	{
	 	    return $select=mysql_query("UPDATE  usuarios SET  usuario= '".$usuario."' , contrasena='".$contrasena."' , nombre = '".$nombre."' , apellido_paterno = '".$apaterno."' , apellido_materno = '".$amaterno."' , email='".$email."' , telefono=".$telefono." , sexo='".$sexo."' , edad='".$edad."' , tipo_usuario='".$puesto."' , colonia='".$colonia."' , direccion='".$direccion."' WHERE  id_usuario =".$row."");
 	 	}
	 }


	 //------------------------------seccion para obtener los datos de las esteticas las cuales serviran para las reservaciones----------------

	 //funcion para obtener las esteticas 
	 //function verEsteticas()
	 //{
	 	//if ($this->con->conectar()==true) 
	 	//{
	 	//	return $select= mysql_query("SELECT * FROM esteticas WHERE id_estetica>0 ORDER BY nombre ASC");
	 		/*SELECT estetica.nombre, ubicacion.colonia FROM estetica inner join ubicacion
			on estetica.id_ubicacion=ubicacion.id_ubicacion
			where estetica.id_ubicacion=1
			and ubicacion.id_ubicacion=1*/
		//}
	 //}
	 
	 //funcion para ver los servicios de las esteticas			
	 function verServcios($rows)
	 {
	 	if($this->con->conectar()==true)
	 	{
	 		return $select= mysql_query("SELECT servicios.tipo
			FROM catalogos
			INNER JOIN servicios ON catalogos.id_servicio = servicios.id_servicio
			INNER JOIN esteticas ON catalogos.id_estetica = esteticas.id_estetica
			WHERE esteticas.id_estetica = '.rows.'
			AND servicios.id_servicio > 0");
	 		
	 		/*
			"SELECT 'servicios.tipo'
			FROM catalogo
			INNER JOIN servicios ON 'catalogo'.'id_servicio' = 'servicios'.'id_servicio'
			INNER JOIN estetica ON 'catalogo'.'id_estetica' = 'estetica'.'id_estetica'
			WHERE 'estetica'.'id_estetica '='.$row.'
			AND 'servicios'.'id_servicio' > 0
			ORDER BY 'servicios'.'tipo' ASC");


	 		/*SELECT servicios.tipo
			FROM catalogo
			INNER JOIN servicios ON catalogo.id_servicio = servicios.id_servicio
			INNER JOIN estetica ON catalogo.id_estetica = estetica.id_estetica
			WHERE estetica.id_estetica =2
			AND servicios.id_servicio >0
			ORDER BY servicios.tipo ASC */
	 	}

	 }
}
?>