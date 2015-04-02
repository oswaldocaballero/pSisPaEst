<?php
require_once("general.class.php");
$objetoVer = new Seleccion;
$cont= $objetoVer->verEsteticas();
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<input list="browsers" name="browser">		
		<?php 
		if(mysql_num_rows($cont)>0)
		{
			while ($rows=mysql_fetch_array($cont))
			{			
		?>
		<datalist id="browsers">
		  <option value="<?php echo $rows['nombre']?>">
		<?php
			}
		}else{
		?>				
		<option value="No hay esteticas">
		<?php	
		}
		?>
		<label id="<?php echo $rows['id_estetica'];?>" class="ver"></label>
		</datalist>
<!-- <div>
<input list="browsers" name="servicio">
		<?php
		//if(isset($_POST['selectEst'])){
		/*	$cont2= $objetoVer2->verServcios($_POST['selectEst']);

		if (mysql_num_rows($cont2)>0) 
		{
			while ( $rows2=mysql_fetch_array($cont2))
			{
		?>
		<datalist id="servicios">
		<option value="<?php echo $rows2['tipo'];?>">
		<?php
			}
		}else{
		?>
		<option value="No hay servicios para esta estetica">
		<?php
		}
		}else{

		}
		?>*/
		//<label id="<?php echo $rows2['id_servicio'];?>" class="ver"></label>
		</datalist>
</div>-->
</body>
</html>