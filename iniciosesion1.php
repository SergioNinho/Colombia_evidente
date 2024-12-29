<?php

session_start();

$miembro=$_SESSION['username'];
$_SESSION['time']= time();


include_once 'db.php';

$usuario=$_POST['usuario'];
$clave=$_POST['clave'];



$conectar= coneet();
$consulta=$conectar->query("SELECT * from registro where usuario='$usuario' " );
$mostrar=$consulta->fetch_assoc();
$contar=$consulta->num_rows;
$pass=$mostrar['clave'];

if (($contar>0)&&(password_verify($clave,$pass))) {
      // code...

      $_SESSION['username']=$usuario;
      $_SESSION['nombre']=$mostrar['nombre'];
      $_SESSION['apellido']=$mostrar['apellido'];


      header ("location:usuario.php");
}
else{

      echo "<script>alert('error de usuario o contraseña');window.location='iniciosesion.php'</script>";
}





?>