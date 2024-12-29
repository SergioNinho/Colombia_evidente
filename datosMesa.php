<?php
   
include_once 'db.php';

$departamento = $_POST['departamento'];
$municipio=$_POST['municipio'];
// $zona=$_POST['zona'];
$puesto = $_POST['puesto'];
$conectarm= coneet();
$consultam=$conectarm->query(" SELECT mesa from mesa where municipio='$municipio' and departamento = '$departamento' and cod_puest='$puesto'");
$contar=$consultam->num_rows; 
$html1="<option value='0'>Seleccione mesa</option>";
echo $html1;
  
         while($mesa=$consultam->fetch_assoc()) {
           
            $html="<option value='".$mesa['mesa']."'>".($mesa['mesa']) ."</option>";     
            echo $html;

         }   

?>