<?php
   
include_once 'db.php';

$departamento = $_POST['departamento'];
$municipio=$_POST['municipio'];
$puesto=$_POST['puesto'];
$mesa=$_POST['mesa'];
$conectarm= coneet();
$consultam=$conectarm->query(" SELECT * from mesa where municipio='$municipio' and departamento = '$departamento' and puesto = '$puesto' and mesa ='$mesa' ORDER BY cod_zon ASC");
$contar=$consultam->num_rows; 
// $html1="<option value='0'>Seleccione puesto</option>";
// echo $html1;
  
         while($zona=$consultam->fetch_assoc()) {
           
            $html=$zona['cod_zon'];
            echo $html;

         }   

?>