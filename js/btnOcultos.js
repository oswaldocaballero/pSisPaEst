function login(){
		$("div#loginSesion").stop().fadeToggle("slow");
		//$("#sesion").stop().fadeToggle();
		$("#btnIniciarSesion").stop().fadeToggle("slow");
		$("#saludo").stop().slideToggle("slow");
}
$(document).ready(function(){
	$("li.indexregistrar").hover(function(){
		$("ul.indexsub").stop().fadeToggle("slow");
	});
});
$(document).ready(function(){
	$("#servicioCortes").hover(function(){
		$(".cortes").stop().fadeToggle();
	});
	$("#servicioPeinados").hover(function(){
		$(".peinados").stop().fadeToggle();
	});
});
function more(){
	$("#more").stop().fadeToggle();
}

//funciones para el menu sin estar logeado
$(document).ready(function(){
	$(".submenu1").click(function(){
		$("#indexPromociones").stop().fadeOut();
		$("#contenedorPrincipal").stop().fadeIn();
	});
});

$(document).ready(function(){
	$(".submenu3").click(function(){
		$("#indexPromociones").stop().fadeOut();
		$("#contenedorPrincipal").stop().fadeIn();
	});
});

$(document).ready(function(){
	$(".submenu2").click(function(){
		$("#indexPromociones").stop().fadeOut();
		$("#contenedorPrincipal").stop().fadeIn();
	});
});

$(document).ready(function(){
	$(".indexeste").click(function(){
		$("#indexPromociones").stop().fadeIn();
		$("#contenedorPrincipal").stop().fadeIn();
	});
});

/*$(document).ready(function(){

	var style = {
		'background' : 'transparent',
		'border-color' : 'rgb(255,255,255)',
		'-webkit-transition':'.6s',
		'-moz-transition' :'.6s',
		'text-shadow':'5px 5px 5px #000'
	}
	var style2 = {
		'color': '#fff',
		'background':'rgb(22,107,152)',
		'-webkit-transition':'.6s',
		'-moz-transition' :'.6s',
		'text-shadow':'5px 5px 5px #000'
	}

	$("#unoC").click(function(){
		$(this).css(style);
		$("dosC").css(style2);
		$("tresC").css(style2);
	});

	$("#dosC").click(function(){
		$(this).css(style);
		$("unoC").css(style2);
		$("tresC").css(style2);
	});

	$("#tresC").click(function(){
		$(this).css(style);
		$("unoC").css(style2);
		$("dosC").css(style2);
	});
	
});*/
