<?php		
if(isset($menu)){
?>
		<div id="indexOpciones">
			<ul id="menu">
				<li class="indexinicio"><a id="indexuno" >Inicio</a>
					<div class="indexinic"><a href="index.php"><img id="indexhome" src="image/iconos/home.ico"></a></div>
				</li>
				<li class="indexregistrar"><a id="indexdos">Registrar</a>
					<div class="indexregi"></div>
					<ul class="indexsub">
						<li id="menu2"><a class="submenu1" >Cliente</a></li>
						<li id="menu2"><a class="submenu2" >Estilista</a></li>
						<li id="menu2"><a class="submenu3" >Administrador</a></li>
					</ul>
				</li>
				<li class="indexservicios"><a id="indextres">Servicios</a>
					<div class="indexserv"><a id="indexmenTres" href="html/servicios.html"><img id="indexservice" src="image/iconos/shopping_cart.ico"/></a></div>
				</li>
				<li class="indexesteticas"><a id="indexcuatro">Esteticas</a>
					<div class="indexeste"><a id="indexmenCuatro" ><img id="indexesthetic" src="image/iconos/esteticas.png"/></a></div>
				</li>
				<li class="indexacerca"><a id="indexseis">Acerca de</a>
					<div class="indexacer"><a id="indexmenSeis" href=""><img id="indexabout" src="image/iconos/comments.ico"/></a></div>
				</li>

				<li class="indexayuda"><a id="indexsiete">Ayuda</a>
					<div class="indexayud"><a id="indexmenSiete" href="html/ayuda.html"><img id="indexhelp" src="image/iconos/question_mark.ico"/></a></div>					
				</li>
			</ul>
		</div>	
<?php
}
if (isset($menu2)) {
?>

		<div id="opciones">			
			<ul id="menu">
				<!--menu opcion Inicio-->
				<li class="inicio"><a id="uno" >Inicio</a>
					<div class="inic"><a id="menUno" href="logeado.php"><img id="home" src="../image/iconos/home.ico"></a></div>
				</li>
				<!--menu opcion Reservacion-->
				<li class="reservacion"><a id="dos">Reservaci&oacute;n</a>
					<div class="rese"><a id="menDos" href="reservacion.php"><img id="reservation" src="../image/iconos/pencil.ico"></a></div>
				</li>
				<!--menu opcion Registrar-->
				<li class="registrar"><a id="tres">Registrar</a>
					<div class="regi"><a id="menTres"></a></div>
					<ul class="sub">
						<li id="menu2"><a class="submenu1" >Cliente</a></li>
						<li id="menu2"><a class="submenu2" >Estilista</a></li>
						<li id="menu2"><a class="submenu3" href="">Estetica</a></li>
						<li id="menu2"><a class="submenu4" href="">Servicio</a></li>
					</ul>
				</li>
				<!--menu opcion Servicios-->
				<li class="servicios"><a id="cuatro">Servicios</a>
					<div class="serv"><a id="menCuatro"><img id="service" src="../image/iconos/shopping_cart.ico"/></a></div>
				</li>
				<!--menu opcion Esteticas-->
				<li class="esteticas"><a id="cinco">Esteticas</a>
					<div class="este"><a id="menCinco"><img id="esthetic" src="../image/iconos/esteticas.png"></a></div>
				</li>				
				<!--menu opcion Perfil-->
				<li class="perfil"><a id="seis">Perfil</a>
					<div class="perf"><a id="menSeis" href=""><img id="profile" src="../image/iconos/business_user.ico"></a></div>
				</li>
				<!--menu opcion Ayuda-->
				<li class="ayuda"><a id="siete">Ayuda</a>
					<div class="ayud"><a id="menSiete" href="../html/ayuda.html"><img id="help" src="../image/iconos/question_mark.ico"></a></div>					
				</li>
			</ul>
		</div>
<?php
}
?>