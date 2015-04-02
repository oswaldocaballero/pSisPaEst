$(function(){
	//funcion para elimminar usuarios por id
	$("body").on("click", ".elim", function (event){
		var idRef = $(this).attr("id");
	    $.ajax({	
		data: { elimDt: idRef },
		type: "POST",
		url:  "eliminarUsuario.php",
		cache: false,
			//beforeSend: function(){ //codigo; },
			success: function(rspta) {
			    //accion    
			    $("#rm"+idRef).remove();
			    alert("eliminado");
			}    
		});
	});

	//funcion para editar usuario por id
	$("body").on("click",".edit", function (event){
		var idRefDos= $(this).attr("id");
		$.ajax({
			data:{ editDt:idRefDos },
			type:"POST",
			url:"editUsuario.php",
			cache: false,
			success: function(rspta){
				$("#divGral").html(rspta);
			}
		})
	});

	//funcion para cerrar sesion de usuario
	$("body").on("click","#sesion", function (event){
		//alert("click");
		var idRefDos= $(this).attr("id");
		$.ajax({
			data:{ close:idRefDos },
			type:"POST",
			url:"verificarUsuarioLogin.php",
			cache: false,
			success: function(rspta){
				if(rspta=="close"){
					window.location.href = "../index.php"; 
				}
			}
		})
	});
});

/*----------------------------------funcion para cargar div en la pagina logeado----------------------------------------*/
//cargar contenido esteticas
$(document).ready(function(){  
  
    $("#menCinco").click(function() {  
        var idRefDos= $(this).attr("id");
		$.ajax({
			data:{ editDt:idRefDos },
			type:"POST",
            url: "../html/esteticas.html",  
			cache: false,
            success: function(data) {  
                $('#contenedorPrincipal').html(data);  
            }  
        });  
    });
});

//cargar formulario clientes
$(document).ready(function(){  
    $(".submenu1").click(function() {  
        var idRefDos= $(this).attr("id");
		$.ajax({
			data:{ editDt:idRefDos },
			type:"POST",
            url: "../html/registroCliente.html",  
			cache: false,
            success: function(data) {  
                $('#contenedorPrincipal').html(data);  
            }  
        });  
    });
});

//cargar formulario estilista
$(document).ready(function(){  
    $(".submenu2").click(function() {  
        var idRefDos= $(this).attr("id");
		$.ajax({
			data:{ editDt:idRefDos },
			type:"POST",
            url: "../html/registroEstilista.html",  
			cache: false,
            success: function(data) {  
                $('#contenedorPrincipal').html(data);  
            }  
        });  
    });
});

//cargar contenido servicios
$(document).ready(function(){  
    $("#menCuatro").click(function() {  
        var idRefDos= $(this).attr("id");
		$.ajax({
			data:{ editDt:idRefDos },
			type:"POST",
            url: "../html/servicios.html",  
			cache: false,
            success: function(data) {  
                $('#contenedorPrincipal').html(data);  
            }  
        });  
    });
});

//cargar contenido consultaUsuarios
$(document).ready(function(){  
    $("#m5").click(function() {  
        var idRefDos= $(this).attr("id");
		$.ajax({
			data:{ editDt:idRefDos },
			type:"POST",
            url: "consultaUsuario.php",  
			cache: false,
            success: function(data) {  
                $('#contenedorConsultaUsuario').html(data);  
            }  
        });  
    });
});

//funcion del boton mas para obtener los usuarios en la cual se podra interactuar con el crud. 
$(document).ready(function(){
	$("#m5").click(function(){
		$("#contenedorServicios").fadeOut();
		$("#contenedorConsultaUsuario").stop().fadeIn();
	});
});