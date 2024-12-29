<?php
session_start();


include_once ("db.php");

$nombre =$_POST["nombre"];
$apellido =$_POST["apellido"];
$email =$_POST["email"];
$usuario=$_POST["usuario"];
$clave=($_POST["clave"]);
$referido=($_COOKIE['referido']);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require "PHPMailer/Exception.php";
require "PHPMailer/PHPMailer.php";
require "PHPMailer/SMTP.php";
$conectar= coneet();

$consulta=$conectar->query("SELECT * from registro where usuario='$usuario' ");
$contar=$consulta->num_rows;
if ($contar>0) {

	// include 'cabecerainicio.php';

	// 	echo "<br> <br> <br> <br> <br>  ";
	// 	echo "<center><img src=imagenes/logo-CEb.png width=200px></center>";
	// 	echo "<center> <h1><strong>Nombre de usuario ya se encuentra registrado o está siendo usado por otra persona<strong/> </h1> </center><br>";
	// 	echo "<h2><center><a href=registro.php>intente nuevamente</a></center></h2>";
		 echo "<script>alert('Nombre de usuario no disponible');window.location='registro.php'</script>";
    
    // include 'pie.php';
}
else{
$pass_fuerte=password_hash($clave, PASSWORD_DEFAULT);
$sql= "INSERT INTO `registro` (`nombre`, `apellido`, `email`,`usuario`, `clave`,`fecha`,`referido`) VALUES ('$nombre', '$apellido', '$email','$usuario', '$pass_fuerte',now(),'$referido')";

$resul=mysqli_query($conectar,$sql)or trigger_error("query! failed sql error".mysqli_error($conectar).E_USER_ERROR);
//Create an instance; passing `true` enables exceptions
if ($resul) {
	

	// include 'cabecerainicio.php';

	// echo "<br> <br> <br> <br> <br>  ";
	// echo "<center><img src=imagenes/logo-CEb.png width=200px></center>";
	// echo "<center> <h1><strong>Gacias por su registro<strong/> </h1> </center><br>";
	// echo "<h2><center> <a href=iniciosesion.php><h3>iniciar sesión</a> </center></h2>";

	echo "<script>alert('Gracias por su registro');window.location='iniciosesion.php'</script>";

	// include 'pie.php';

	$mail = new PHPMailer(true);
		try {
			
			$mail->SMTPDebug = 0;                     
			$mail->isSMTP();                                          
			$mail->Host       = 'smtp-mail.outlook.com';                    
			$mail->SMTPAuth   = true;                                   
			$mail->Username   = 'ColombiaEvidente@outlook.com';                     
			$mail->Password   = 'Col_Evi_123';                               
			$mail->SMTPSecure = "STARTTLS";           
			$mail->Port       = 587;                                    
			$mail->setFrom('ColombiaEvidente@outlook.com', 'Colombia Evidente');
			$mail->addAddress($email, $nombre);
		
			// //Attachments
			// $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
			// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');
				
			$mail->isHTML(true);                                  //Set email format to HTML
			$mail->Subject = 'Registro testigo electoral';
			$mail->Body    = '<h2>"Gracias por creer en la democracia"</h2><br><br>
				<p>Sus datos de registro son:</p>
				<p><b>Usuario: </b>'.$usuario.'</p>
				<p><b>Contrase&ntilde;a: </b>'.$clave.'</p><br><br>
				<p>La informaci&oacute;n suministrada es personal e intrasferible, por seguridad porfavor no comparta con nadie sus credenciales de registro</p><br><br><br>
				<p>Atentamente;</p>
				<p>Equipo t&eacute;cnico <b>Colombia Evidente</b></p>';
			// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		
			$mail->send();
			echo "<script language='javascript'>alert('Hemos enviado sus datos de usuario y contraseña al correo $email');</script>";
		} catch (Exception $e) {
			// echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}

}



}