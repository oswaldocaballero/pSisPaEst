$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle(1000);
    });
});
$(document).ready(function(){
	$("div#div1").click(function(){
		$(this).fadeTo(500,0.2).delay(1000).fadeTo(500,1,function(){
			alert("este fue el efecto fadeTo");
		})
	});
});
$(document).ready(function(){
	$("div#div2").click(function(){
		$(this).animate({height:200},"slow");
		$(this).animate({width:200},"slow");
		$(this).animate({width:100},"slow");
		$(this).animate({height:100},"slow");
		$(this).animate({left:"10%"},"slow");
		$(this).animate({left:"0%"},"slow");
		$(this).animate({fontSize:"40px"},"slow");
	});
});

$(document).ready(function(){
	$("div#div3").click(function(){
		$("p#p1").slideToggle("slow");
	});
});

$(function(){		
		$("#Acordion").accordion();
});

$(function(){		
	$(".calendario").datepicker({
		showButtonPanel:true,
		changeMonth:true,
		numberOfMonths:2,
		shoWeek:true,
		changeWeek:true
	});
});
$(function(){
	$("div#dialogo").dialog();
});