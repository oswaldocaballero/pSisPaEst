//slider principal
$(function(){
	$('#slider div:gt(0)').hide();
	setInterval(function(){
		$('#slider div:first').fadeOut(1000).next('div').fadeIn(1000).end().appendTo('#slider');
	},3000);
}); 

//slider de promociones esteticas
var imagenes =['../image/promociones/pro1.jpg','../image/promociones/pro2.jpg','../image/promociones/pro3.jpg','../image/promociones/pro4.jpg'];
var x = 0;
var tiempo;

var reproducir = function(){
	if (x > imagenes.length) 
	{
		x=0;
	}
	$("#imagen").attr('src',imagenes[x]).stop();
	x++;
	tiempo = setTimeout('reproducir()',3000);
}

var alto = function(){
	clearTimeout(tiempo);
}

$(function(){
	reproducir();
	$("#btn-iniciar").on("click",function(){
		reproducir();
	});

	$("#btn-parar").on("click",function(){
		alto();
	});
});
//slider de promociones sispaest
//slider de noticias
$(document).ready(function(){  
	$('#contendorImagenesNoti').cycle({
	fx:    'scrollDown', 
    sync:  true, 
    delay: -3000 
	});
});
