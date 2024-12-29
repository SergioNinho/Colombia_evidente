<?php
    session_start();

if (empty($_SESSION['username'])) {
    header('location:index.php');
}

$miembro=$_SESSION['username'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,0">
        <meta name="description" content="Vinculate a la comunidad Colombia Evidente como veedor eléctoral, capacitate con nosotros sobre fraude electoral y participa activamente en la democracia">
        <meta name="keywords" content="únete como veedor electoral y salvemos juntos nuestra democracia">
        <title> COLOMBIA EVIDENTE</title>        
        <link rel="stylesheet" type="text/css" href="iniciosesion.css">
        <link rel="stylesheet" type="text/css" href="registro.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="carnet.css">
        <link rel="shortcut icon" href="imagenes/logo-CEb.png">        
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>    
         <script type="text/javascript" src="js/demo.js"></script>
    
    </head>

    <body>

        <header>
            <div class="encabezado_redes">
                <div class="encabezado_redes1">
                    <div class="encabezado_redes2">
                        <a href="https://web.facebook.com/profile.php?id=100076227669253" target="_blank"><img src="imagenes/facebook.png"></a> 
                        <a href="https://www.instagram.com/colombia_evidente/" target="_blank"><img src="imagenes/twitter.png"></a> 
                        <a href="https://www.instagram.com/colombia_evidente/" target="_blank"><img src="imagenes/instagram.png"></a>
                        <a href="https://t.me/ColombiaEvidente/" target="_blank"><img src="imagenes/telegram.png"></a> 
                    </div>
                </div>
                <div class="encabezado_registro">
                    <a href="index.php"><input type="button" name="encabezado_registro" value="CERRAR SESIÓN" href="cerrar.php"></a> 
                </div>
            </div>
            <div class="encabezado"> 
                <section class="min">
                    <input type="checkbox" id="btn-menu">
                    <label for="btn-menu"><img src="imagenes/logomenu.svg"></label><br>
                    <nav class="desplegable">
                        <ul>
                            <li><a href="usuario.php">Inicio</a> </li>                        
                            <li><a href="quienessomos.php">Quienes somos</a></li>
                            <!-- <li><a href="">Noticias</a> </li>
                            <li><a href="">Reportes de la ciudadanía</a></li> -->
                            <li><a href="cerrar.php">CERRAR SESIÓN</a></li>
                        </ul>
                    </nav>
                </section>  
                <section class="logo">     
                    <img src="imagenes/logo-cabecera.png" alt="logo colombia evidente" class="animation: animate__animated animate__pulse;" id="logo_img">
                  
                 
                    <nav>
                        <a href="usuario.php">INICIO</a>                  
                        <a href="quienessomos.php">QUIENES SOMOS</a>             
                        <!-- <a href="">Noticias</a>  -->
                        <a href="https://www.paypal.com/donate/?hosted_button_id=NQGU85NQKVQBN" target="_blank">DONACIONES</a>
                        
                        <a href="actualizardatos.php" id="inicio_img"><img src="imagenes/iniciosesion.png" ></a>
                        <p><?php echo "$miembro"; ?></p>          
                    </nav>
                </section><br>  
                      
            </div>  

        </header>