<?php


function coneet()
{

	$server="localhost";
	$user="user";
	$pass="password";
	$bd="name_db";

	$conectar= mysqli_connect("$server","$user","$pass","$bd");

	if (!$conectar) {
		echo "no se ha podido conectar a la base de datos";
		// code...
	}

	return $conectar;
}



?>
