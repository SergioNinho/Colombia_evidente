<?php

	$usuarioadmi=$_POST['usuarioadmi'];
	$claveadmi=$_POST['claveadmi'];

	if (($usuarioadmi =='colombiaevidente') && ($claveadmi =='democraciaactiva')) {

		$_SESSION['usuarioadmi']=$usuarioadmi;

		header('location:administrador.php');
	}
	
	else{

      echo "<script>alert('error de usuario o contraseña');window.location='admin.php'</script>";
	}
?>