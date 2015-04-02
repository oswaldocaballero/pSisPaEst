<?php		
if(isset($uno)){
?>
	<div id="contenedor">
		<div id="slider">
			<div><img src="image/1.jpg"></div>
			<div><img src="image/2.jpg"></div>
			<div><img src="image/3.jpg"></div>
			<div><img src="image/4.jpg"></div>
			<div><img src="image/5.jpg"></div>
			<div><img src="image/6.jpg"></div>
			<div><img src="image/7.jpg"></div>
		</div>
	</div>
<?php
}
if(isset($noticias)){
?>

	<div id="indexNoticias">
		<table>
			<tr>
				<td id="noti">Noticias</td>
			</tr>
			<tr>
				<td id="contNoti">
					<div id="sliderNoti">
						<div id="contendorImagenesNoti">
							<img src="image/promociones/noti1.jpg" id="imagenNoti">
							<img src="image/promociones/noti2.jpg" id="imagenNoti">
							<img src="image/promociones/noti3.jpg" id="imagenNoti">
							<img src="image/promociones/noti4.jpg" id="imagenNoti">
							<img src="image/promociones/noti5.jpg" id="imagenNoti">
							<img src="image/promociones/noti6.jpg" id="imagenNoti">
							<img src="image/promociones/noti7.jpg" id="imagenNoti">
						</div>
					</div>
				</td>
                </tr>
		</table>	
	</div>
<?php
}
if(isset($sliderPromociones)){
?>
<!--Panel de promociones 1-->
	<div id="promociones">
		<table>
			<tr>
				<td id="pro2">Promociones</td>
			</tr>
			<tr>
				<td  id="esp2">
					<div id="sliderPromo">
						<div id="contendorImagenes">
							<img src="" id="imagen">
						</div>
						<div id="btn-iniciar"><a id="start">Iniciar</a></div>
						<div id="btn-parar"><a id="stop">Detener</a></div>
					</div>
				</td>
            </tr>
		</table>			
	</div>

<!--Panel de promociones 2-->
	<div id="promociones2">
		<table>
			<tr>
				<td id="pro3">Promociones</td>
			</tr>
			<tr>
				<td id="esp3"></td>
               </tr>
		</table>			
	</div>
<?php
}
?>