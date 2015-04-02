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
		});
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
		});
	});
	
	//guardar dts cliete sin login
 	//funcion para editar usuario por id
	$("body").on("click","#guar", function (event){
		var dtsfrm = $("#frm").serialize();
		$.ajax({
			data: dtsfrm,
			type:"POST",
			url:"php/verificarRegistroUsuario.php",
			cache: false,
			success: function(rspta){
				if(rspta=="registrado"){
					document.getElementById("frm").reset();
					$("#resp").html(rspta);
				}else{
					window.location.href = "index.php";				
				}
				
			}
		});
	});

//funcio iniciar sesion
//funcion para editar usuario por id
	$("body").on("click","#a_ingresar", function (event){
		var dtsfrm = $("#frmLogin").serialize();
		$.ajax({
			data: dtsfrm,
			type:"POST",
			url:"php/verificarUsuarioLogin.php",
			cache: false,
			success: function(rspta){
					window.location.href = "php/logeado.php";				
			}
		});
	});
});

//funcion para cargar div index
//cargar esteticas
$(document).ready(function(){  
    $(".indexesteticas").click(function() {  
		$.ajax({
            url: "html/esteticas.html",
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
            url: "html/registroCliente.html",  
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
		$.ajax({
			data:{ editDt:idRefDos },
			type:"POST",
            url: "html/registroEstilista.html",  
			cache: false,
            success: function(data) {  
                $('#contenedorPrincipal').html(data);  
            }  
        });  
    });
});
//cargar formulario estilista
$(document).ready(function(){  
    $(".submenu3").click(function() {  
        var idRefDos= $(this).attr("id");
		$.ajax({
			data:{ editDt:idRefDos },
			type:"POST",
            url: "html/registroAdministrador.html",  
			cache: false,
            success: function(data) {  
                $('#contenedorPrincipal').html(data);  
            }  
        });  
    });
});