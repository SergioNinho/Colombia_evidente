<?php
   
include_once 'db.php';

$departamento = $_POST['departamento'];
$municipio=$_POST['municipio'];
$conectarm= coneet();
$consultam=$conectarm->query(" SELECT * from puesto where municipio='$municipio' and departamento = '$departamento'  ORDER BY cod_puest ASC");
$contar=$consultam->num_rows; 
$html1="<option value='0'>Seleccione puesto</option>";
echo $html1;
         while($puesto=$consultam->fetch_assoc()) {
           
            $html="<option value='".$puesto['cod_puest']."'>".$puesto['cod_puest']." - ".$puesto['puesto'] ."</option>";     
            echo $html;

         }   

?>

   
 
