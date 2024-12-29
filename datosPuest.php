<?php
   
include_once 'db.php';

$departamento = $_POST['departamento'];
$municipio=$_POST['municipio'];
$zona=$_POST['zona'];
$conectarm= coneet();
$consultam=$conectarm->query(" SELECT * from puesto where municipio='$municipio' and departamento = '$departamento' and cod_zon = '$zona' ORDER BY puesto ASC");
$contar=$consultam->num_rows; 
$html1="<option value='0'>Seleccione puesto</option>";
echo $html1;
  
         while($puesto=$consultam->fetch_assoc()) {
           
            $html="<option value='".$puesto['puesto']."'>".$puesto['puesto'] ."</option>";     
            echo $html;

         }   

?>