<?php


function coneet()
{

	$server="localhost";
	$user="u268740945_tes_elec_2023";
	$pass="Tes:elec:2023;";
	$bd="u268740945_colombia_evide";

	$conectar= mysqli_connect("$server","$user","$pass","$bd");

	if (!$conectar) {
		echo "no se ha podido conectar a la base de datos";
		// code...
	}

	return $conectar;
}



?>