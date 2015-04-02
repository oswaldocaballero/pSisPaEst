<?php
class bd{
	//variables
	var $conexion;
	var $baseDatos;
	var $servidor;
	var $usuario;
	var $contrasena;
	//funcion para asignarle a las variables los datos para la conexion a la bd
	function bd(){
		$this->baseDatos="sispaest1";
		$this->servidor="127.0.0.1";
		$this->usuario="root";
		$this->contrasena="";

	}
	//funcion para los posibles errores al conectarse a la bd
	function conectar(){
		if (!($conex=@mysql_connect($this->servidor,$this->usuario,$this->contrasena))) {
			echo"<h1> [:(] Error al conectar a la base de datos</h1>";	
			exit();
		}
		if (!@mysql_select_db($this->baseDatos,$conex)){
			echo "<h1> [:(] Error al seleccionar la base de datos</h1>";  
			exit();
		}
		$this->conexion=$conex;
		return true;			
	}
}
?>