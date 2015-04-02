//Funcion solo para admitir letras
function soloLetras(e){
	/*keyCode which para los eventos de mouse o teclado, estea propiedad
	indica la tecla o un boton especifico que se presiono.*/
	var key = e.keyCode || e.which;
	//fromCharCode convierte un numero Unicode en un caracter
	//toLowerCase convierte la cadena en minusculas
	var tecla = String.fromCharCode(key).toLowerCase();
	var letras ="áéíóúabcdefghijklmnopqrstuvwxyz";
	//Arreglo que contiene los valores de las teclas que queremos que no muestren
	var especiales = "8-37-38-46-164";
	var tecla_especial = false;
	//Declaramos un ciclo for que toma los elementos de arreglo especiales
	for(var i in especiales)
	{
		/*Obtenemos la variable key si es igual a lo que este almacenado en el arreglo especiales dependiendo 
		a la posicion que esta recorriendo el ciclo for*/
		if(key == especiales[i])
		{
			tecla_especial==false;
			break;
		}
	}
	/*El metodo indexOf() devuelve l posicion de la primera aparicion de un valor especificado en una cadena.
	Este metodo devuelve -1 si el valor de busqueda nunca ocurre*/
	if(letras.indexOf(tecla)== -1 && !tecla_especial)
	{
		return false;
	}
}

//Funcion solo para admitir numeros
function soloNumeros(e){
	/*keyCode which para los eventos de mouse o teclado, estea propiedad
	indica la tecla o un boton especifico que se presiono.*/
	var key = e.keyCode || e.which;
	//fromCharCode convierte un numero Unicode en un caracter
	//toLowerCase convierte la cadena en minusculas
	var tecla = String.fromCharCode(key).toLowerCase();
	var numeros = "0,1,2,3,4,5,6,7,8,9";
	//Arreglo que contiene los valores de las teclas que queremos que no muestren
	var especiales = "8-37-39-46";
	var tecla_especial = false;
	//Declaramos un ciclo for que toma los elementos de arreglo especiales
	for(var i in especiales)
	{
		/*Obtenemos la variable key si es igual a lo que este almacenado en el arreglo especiales dependiendo 
		a la posicion que esta recorriendo el ciclo for*/
		if(key == especiales[i])
		{
			tecla_especial==false;
			break;
		}
	}
	/*El metodo indexOf() devuelve l posicion de la primera aparicion de un valor especificado en una cadena.
	Este metodo devuelve -1 si el valor de busqueda nunca ocurre*/
	if(numeros.indexOf(tecla)== -1 && !tecla_especial)
	{
		return false;
	}
}

//meotodo para validar email
$(document).ready(function(){
	function validarEmail(email){
		/*Declaramos una variable y le asignamos las expresiones 
		regulares para el email*/
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;	
		/*test() Este metodo devuelve true si se encuentra una 
		coincidencia, de lo contrario, devuelve false*/
		return emailReg.test(email);
	}
	//cuando presionamos el boton verificar
	$("#guar").click(function(){
		//obtenemos la id del campo email
		if($("#tEmail").val()==''){
			$("#mensaje7").fadeIn();
			return false;
		}else 
		if(validarEmail($("#tEmail").val())){
			$("#mensaje7").fadeOut();
		}else{
			$("#mensaje8").fadeIn();
			return false
		}
		$("#mensaje8").fadeOut();		
	});	
});

//meotodo para validar telefono
//$(document).ready(function(){
//	function validarTelefono(telefono){
		/*Declaramos una variable y le asignamos el numero de valores que aceptara para el numero telefonico*/
/*		if($("#tTelf").val()==''){

		};	
		for (var i =0; i >= tel.length; i++) {

		}*/
		/*Ese metodo devuelve true si se encuentra una 
		coincidencia, de lo contrario, devuelve false*/
		//return tel.test(telefono);
//	}
	//cuando presionamos el boton verificar
/*	$("#guar").click(function(){
		//obtenemos la id del campo email
		if($("#tEmail").val()==''){
			$("#mensaje7").fadeIn();
			return false;
		}else 
		if(validarEmail($("#tEmail").val())){
			$("#mensaje7").fadeOut();
		}else{
			$("#mensaje8").fadeIn();
			return false
		}
		$("#mensaje8").fadeOut();		
	});	
});*/

//funcion utilizada para validacion de los campos de las paginas de registro
$(document).ready(function(){
	$("#guar").click(function(){
		var usuario = $("#tUser").val();
		var nombre = $("#tNombre").val();
		var paterno = $("#tAp").val();
		var materno = $("#tAm").val();
		var password = $("#tPass").val();
		var telefono = $("#tTelf").val();
		var direccion = $("#tDireccion").val();
		var colonia = $("#tColonia").val();
		
		/*condicion si la variable usuario que obtiene el campo con id #User esta vacio
		mostrara el mensaje.
		En caso contrario no mostrara el mensaje*/
		if (usuario =="") {
			$("#mensaje1").fadeIn();
			return false;
		}else{
			$("#mensaje1").fadeOut();
		}	
		/*condicion si la variable nombre que obtiene el campo con id #tNombre esta vacio
		mostrara el mensaje.
		En caso contrario no mostrara el mensaje*/
		if (nombre=="") {
			$("#mensaje2").fadeIn();
			return false;
		}else{
			$("#mensaje2").fadeOut();
		}		
		/*condicion si la variable paterno que obtiene el campo con id #tAp esta vacio
		mostrara el mensaje.
		En caso contrario no mostrara el mensaje*/
		if(paterno==""){
			$("#mensaje3").fadeIn();
			return false;
		}else{
			$("#mensaje3").fadeOut();
		}		
		/*condicion si la variable materno que obtiene el campo con id #tAp esta vacio
		mostrara el mensaje.
		En caso contrario no mostrara el mensaje*/
		if(materno==""){
			$("#mensaje4").fadeIn();
			return false;
		}else{
			$("#mensaje4").fadeOut();
		}
		/*condicion si la variable passwor que obtiene el campo con id #tPass esta vacio
		mostrara el mensaje.
		En caso contrario no mostrara el mensaje*/
		if(password==""){
			$("#mensaje5").fadeIn();
			return false;
		}else{
			$("#mensaje5").fadeOut();
		}
		/*condicion si la variable telefono que obtiene el campo con id #tTelf esta vacio
		mostrara el mensaje.
		En caso contrario no mostrara el mensaje*/
		if(telefono==""){
			$("#mensaje6").fadeIn();
			return false;
		}else{
			$("#mensaje6").fadeOut();
		}
		/*condicion si la variable direccion que obtiene el campo con id #tDireccion esta vacio
		mostrara el mensaje.
		En caso contrario no mostrara el mensaje*/
		if(direccion==""){
			$("#mensaje11").fadeIn();
			return false;
		}else{
			$("#mensaje11").fadeOut();
		}
		/*condicion si la variable telefono que obtiene el campo con id #tColonia esta vacio
		mostrara el mensaje.
		En caso contrario no mostrara el mensaje*/
		if(colonia==""){
			$("#mensaje12").fadeIn();
			return false;
		}else{
			$("#mensaje12").fadeOut();
		}
	});
});

//funcion utilizada para validacion de los campos de login
$(document).ready(function(){
	$("#a_ingresar").click(function(){
		var usuario = $("#usuario").val();
		var contrasena = $("#contrasena").val();

		/*condicion si la variable usuario que obtiene el campo con id #usuario esta vacio
		mostrara el mensaje.
		En caso contrario no mostrara el mensaje*/
		if (usuario=="") {
			$("#mensajeLogin1").fadeIn();
			return false;
		}else{
			$("#mensajeLogin1").fadeOut();
		}
		/*condicion si la variable contrasena que obtiene el campo con id #contrasena esta vacio
		mostrara el mensaje.
		En caso contrario no mostrara el mensaje*/
		if (contrasena=="") {
			$("#mensajeLogin2").fadeIn();
			return false;
		}else{
			$("#mensajeLogin2").fadeOut();
		}		
	});
});

/*
$(document).ready(function(){
	$("#a_borrar").click(function(){
		var usuario = $("#usuario");
		var contrasena = $("#contrasena");

		if (usuario=!"") {
			usuario=false;
		}

		if (contrasena=!"") {
			contrasena=false;
		}
	});
});*/