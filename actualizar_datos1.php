<?php
session_start();
$miembro=$_SESSION['username'];

include_once 'db.php';
if (empty($_SESSION['username'])) {
	header('location:index.php');
}



$conectar= coneet();

$consulta=$conectar->query("SELECT * from registro where usuario='$miembro' " ); 
$mostrar=$consulta->fetch_array(); 
 if (("$mostrar[usuario]==$miembro")){
 	$iden=$mostrar['id'];
 	


//$nombre=$conecta->cubrid_real_escape_string($_POST['nombre'])
//$apellido=$conecta->cubrid_real_escape_string($_POST['apellido'])
//$usuario=$conecta->cubrid_real_escape_string($_POST['usuario']);
//$email=$conecta->cubrid_real_escape_string($_POST['email'])
//$tdd=$conecta->cubrid_real_escape_string($_POST['tdd'])
//$documento=$conecta->cubrid_real_escape_string($_POST['documento'])
$telf=$conectar->real_escape_string($_POST['telf']);
$tel=$conectar->real_escape_string($_POST['tel']);
$telfw=$conectar->real_escape_string($_POST['telfw']);
$telw=$conectar->real_escape_string($_POST['telw']);
$pais=$conectar->real_escape_string($_POST['pais']);
$departamento=$conectar->real_escape_string($_POST['departamento']);
$municipio=$conectar->real_escape_string($_POST['municipio']);
$direccion=$conectar->real_escape_string($_POST['direccion']);
$zona=$conectar->real_escape_string($_POST['zona']);
$puesto=$conectar->real_escape_string($_POST['puesto']);
$mesa=$conectar->real_escape_string($_POST['mesa']);
$comentario=$conectar->real_escape_string($_POST['comentario']);
$actualiza="UPDATE registro_testigo SET telf='$telf', tel='$tel', telfw='$telfw', telw='$telw', pais='$pais', departamento='$departamento', municipio='$municipio', direccion='$direccion', zona='$zona', puesto='$puesto', mesa='$mesa', comentario='$comentario' WHERE usuario='$miembro'";
 }
$actualizar=$conectar->query($actualiza);

header('location:usuario_registrado_testigo.php');


?>