<?php
   
include_once 'db.php';



$departamento=$_POST['departamento'];
$conectarm= coneet();
$consultam=$conectarm->query(" SELECT municipio from municipios where departamento='$departamento' ORDER BY municipio ASC");
$contar=$consultam->num_rows; 

$html1="<option value='0'>Seleccione município</option>";
echo $html1;
   while($municipio=$consultam->fetch_assoc()) {
     
      $html="<option value='".$municipio['municipio']."'>".($municipio['municipio']) ."</option>"; 

      echo $html;

   };    
   
   

?>

   
 
