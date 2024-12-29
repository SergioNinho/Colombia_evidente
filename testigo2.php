<?php

session_start();
$miembro=$_SESSION['username'];

if (empty($miembro)) {
    header("location:index.php");
}


include_once 'db.php';




$conectar= coneet();
$consulta=$conectar->query("SELECT * from registro_testigo where usuario='$miembro' ");



$contar=$consulta->num_rows;



if($contar>0){

    header ("location:testigoregistrado.php"); 
}else{

    header ("location:testigo.php");


}



?>