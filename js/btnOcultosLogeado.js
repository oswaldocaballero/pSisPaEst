//funcion para el menu, al pasar el puntero por el menu en la opcion Registrar se desplegara un submenu
$(document).ready(function(){
	$("li.registrar").hover(function(){
		$("ul.sub").stop().fadeToggle("slow");
	});
});

//funcion de la opcion servicios del menu en el cual al pasar el puntero sobre la imagen se mostrara un div en la cual se especifica que tipo de servicio es. 
$(document).ready(function(){
	$("#servicioCortes").hover(function(){
		$(".cortes").stop().fadeToggle();
	});
	$("#servicioPeinados").hover(function(){
		$(".peinados").stop().fadeToggle();
	});
});

//funcion de la opcion servicios del menu en el cual al darle click a la opcion llamado otro se desplegara un div el cual contendra mas servicios. 
function more(){
	$("#more").stop().fadeToggle();
}

//funcion de la pagina logeado el cual al pasar sobre el slider de promociones se mostraran dos botones ocultos los cuales sirven para detener la animacion y para continuar la animacion.
$(document).ready(function(){
	$("td#esp2").hover(function(){
		$("#btn-iniciar").stop().fadeToggle();
		$("#btn-parar").stop().fadeToggle();
	});
});


/*--------------------------------------------------funciones para el menu--------------------------------------------------------------------*/

//funcion para ocultar el contenido de promociones,noticias y slider del la pagina logeado y mostrar contenido del formulario de clientes.
$(document).ready(function(){
	$(".submenu1").click(function(){
		$("#contenerdoPromociones").stop().fadeOut();
		$("#contenedor").stop().fadeOut();
		$("#noticias").stop().fadeOut();
		$("#contenedorPrincipal").stop().fadeIn();
	});
});

//funcion para ocultar el contenido de promociones,noticias y slider del la pagina logeado y mostrar contenido del formulario de estilista
$(document).ready(function(){
	$(".submenu2").click(function(){
		$("#contenerdoPromociones").stop().fadeOut();
		$("#contenedor").stop().fadeOut();
		$("#noticias").stop().fadeOut();
		$("#contenedorPrincipal").stop().fadeIn();
	});
});

//funcion para ocultar el contenido de promociones,noticias y slider del la pagina logeado y mostrar contenido de la pagina servicios
$(document).ready(function(){
	$("#menCuatro").click(function(){
		$("#contenerdoPromociones").stop().fadeOut();
		$("#contenedor").stop().fadeOut();
		$("#noticias").stop().fadeOut();
		$("#contenedorPrincipal").stop().fadeIn();
	});
});

//funcion para ocultar el contenido de promociones,noticias y slider del la pagina logeado y mostrar contenido de la pagina esteticas
$(document).ready(function(){
	$(".este").click(function(){
		$("#contenerdoPromociones").stop().fadeIn();
		$("#contenedor").stop().fadeOut();
		$("#noticias").stop().fadeOut();
		$("#contenedorPrincipal").stop().fadeIn();
	});
});