<?php



include_once ("db.php");


$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$usuario=$_POST["usuario"];
$email=$_POST["email"];
$tdd=$_POST["tdd"];
$documento=$_POST["documento"];
$telf=$_POST["telf"];
$tel=$_POST["tel"];
$telfw=$_POST["telfw"];
$telw=$_POST["telw"];
$pais=$_POST["pais"];
$departamento=$_POST["departamento"];
$municipio=$_POST["municipio"];
$direccion=$_POST["puestodireccion"];
$zona=$_POST["zona"];
$puesto=$_POST["puesto"];
$mesa=$_POST["mesa"];
$comentario=$_POST["comentario"];



$conectar= coneet();
$sql= "INSERT INTO `registro_testigo` ( `nombre`,`apellido`,`usuario`,`email`,`tdd`, `documento`, `telf`, `tel`, `telfw`, `telw`, `pais`, `departamento`, `municipio`, `direccion`, `zona`, `puesto`, `mesa`, `comentario`,`fecha`) VALUES ('$nombre','$apellido','$usuario','$email','$tdd', '$documento', '$telf', '$tel', '$telfw', '$telw', '$pais', '$departamento', '$municipio', '$direccion', '$zona', '$puesto', '$mesa', '$comentario',now())";

$resul=mysqli_query($conectar,$sql)or trigger_error("query! failed sql error".mysqli_error($conectar).E_USER_ERROR);

if($resul){
 echo "<script>alert('Se ha regístrado exitosamente');window.location='usuario.php'</script>";

}


?>