<?php

session_start();

if (empty($_SESSION['username'])) {
    header('location:index.php');
}


include_once ("db.php");


$usuario=$_POST["usuario"];
$email=$_POST["email"];
$pais=$_POST["pais"];
$departamento=$_POST["departamento"];
$municipio=$_POST["municipio"];
$direccion=$_POST["direccion"];
$zona=$_POST["zona"];
$puesto=$_POST["puesto"];
$mesa=$_POST["mesa"];
$inscritos=$_POST["inscritos"];
$votantes=$_POST["votantes"];
$comentario=$_POST["comentario"];
$miembro=$_SESSION['username'];

$conectar= coneet();
$consulta=$conectar->query("SELECT * from registro where usuario='$usuario' ");
$mostrar=$consulta->fetch_assoc();

if ($mostrar['usuario']!==$miembro) {

	header("location:usuario_reporte_Dia-D_3.php");
 }

else{
     // code...
 	$sql= "INSERT INTO `registro_dia-d` ( `usuario`,`email`, `pais`, `departamento`, `municipio`, `direccion`, `zona`, `puesto`, `mesa`,`inscritos`,`votantes`, `comentario`,`fecha`) VALUES ('$usuario','$email', '$pais', '$departamento', '$municipio', '$direccion', '$zona', '$puesto', '$mesa','$inscritos','$votantes', '$comentario',now())";

$resul=mysqli_query($conectar,$sql)or trigger_error("query! failed sql error".mysqli_error($conectar).E_USER_ERROR);

if($resul){
  echo "<script>alert('Su reporte se ha guardado con exito, te espereamos en una hora');window.location='testigoregistrado.php'</script>";

 }
 }

?>