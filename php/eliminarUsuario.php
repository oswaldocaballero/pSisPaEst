<?php
require_once("general.class.php");
$objtElimi= new Seleccion;
if(isset($_POST['elimDt'])){
  $otro=$objtElimi->eliUsuario($_POST['elimDt']);
}
?>