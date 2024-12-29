<?php
include 'cabecera.php';
include 'db.php';
$conectar= coneet();
$consulta=$conectar->query("SELECT * from registro_testigo where usuario='$miembro' ");
$consultaDepart = $conectar->query("SELECT * from departamentos");    

?>
<div class="testigo_regis_encab">
	<img src="imagenes/BANNER23.jpg">
</div>

<main class="main-contenido">

    <section class="menu_testigo animate__animated animate__zoomIn">          

		<form action="actualizar_datos1.php" method="post" id="registro"><strong><h2><center>Modificar registro</center></h2></strong><br>                   
                    <?php
                        $mostrar=$consulta->fetch_assoc();

                        if (("$mostrar[usuario]==$miembro")) {                    

                    ?>               
               
                <div class="fila1">
                    <div class="fila1columna1">
                        <label>Nombre*</label><br>

                        <input class="form-input" type="text" name="nombre" maxlength="50" disabled value="<?php echo $mostrar['nombre'];?>">    <br>
                    </div> 
                
                    <div class="fila1columna2">
                        <label>Apellido*</label><br>
                        <input class="form-input" type="tex" name="apellido"  maxlength="50" disabled value="<?php echo $mostrar['apellido']; ?>"><br>
                    </div> 
                                                    
                </div><br><br> 

                <div class="fila1">
                    <div class="fila1columna1">
                        <label>Usuario*</label><br>
                        <input class="form-input" type="text" name="usuario" maxlength="50" disabled value="<?php echo $mostrar['usuario']; ?>" >   <br>
                    </div> 
                
                    <div class="fila1columna2">
                        <label>Correo electr&oacute;nico*</label><br>
                        <input class="form-input" type="email" name="email"  maxlength="50" disabled value="<?php echo $mostrar['email']; ?>"><br>
                    </div> <br><br><br>
                                                    
                </div><br><br>
                <?php
                    }
                    
                ?>

                <div class="fila1">

  
                    <div class="fila1columna1">
                        <label>Tipo de documento*</label><br>
                        <select class="form-select" name="tdd" id="tipodedocumento"  disabled value="<?php echo $mostrar['tdd']; ?>" >
                            <option value="<?php echo $mostrar['tdd']; ?>"><?php echo $mostrar['tdd']; ?></option>
                            <option>C&eacute;dula de ciudadania</option>
                            <option>C&eacute;dula extranjera</option>
                            <option>Pasaporte</option>
                        </select>
                    </div>
                    <div class="fila1columna2">
                        <label>N&uacute;mero de documento*</label><br>
                        <input class="form-input" type="text" name="documento"  maxlength="50" disabled value="<?php echo $mostrar['documento']; ?>">
                        
                    </div>   
                </div><br><br>
                <div class="fila1">
                    <div class="fila1columna1">
                        <label>N&uacute;mero de tel&eacute;fono*</label><br>
                        <strong>+</strong><input type="tel" name="telf" pattern="[0-9]{2}" value="<?php echo $mostrar['telf']; ?>" maxlength="3" id="indicador">
                        <input type="tel" name="tel" pattern="[0-9]{10}" value="<?php echo $mostrar['tel']; ?>" maxlength="10" id="telefono"><br>
                    </div>
                    <div class="fila1columna2">
                        <label>N&uacute;mero de whatsapp*</label><br>
                        <strong>+</strong><input type="tel" name="telfw" pattern="[0-9]{2}" value="<?php echo $mostrar['telfw']; ?>" maxlength="3" id="indicador">
                        <input type="tel" name="telw" pattern="[0-9]{10}" value="<?php echo $mostrar['telw']; ?>" maxlength="10" id="telefono"><br>
                    </div>
                </div><br><br>
                <div class="fila1">

                    <div class="fila1columna1">
                        <label>Pais*</label><br>
                        <input class="form-input" type="text" name="pais" id="Colombia" disabled value="Colombia" disabled>
                    </div>
                    <div class="fila1columna2">
                        <label>Departamento*</label><br>
                        <select class="form-select" type="text" name="departamento"required id="departamento" onchange="selectDepar()">
                            <option value="0">Seleccione departamento</option>
                                <?php 
                                while ($departamento=$consultaDepart->fetch_assoc()) {?>
                            <option id="<?php echo $departamento['departamento'];?>"><?php echo $departamento['departamento'];}?></option>
                            
                        </select><br>
                    </div>
                </div><br><br>
                <div class="fila1">
                    <div class="fila1columna1">
                        <label>Ciudad o munic&iacute;pio*</label><br>
                        <select class="form-select" name="municipio" id="municipio" onchange="selectMuni()"required>
                            <option>Seleccione munic&iacute;pio</option>                                  
                        </select><br>
                    </div>
                    <div class="fila1columna2">
                        <label>Barrio o sector*</label><br>
                        <input class="form-input" type="text" name="puestodireccion" value="<?php echo $mostrar['direccion']; ?>" maxlength="50"><br>
                    </div>
                </div><br><br>
                <h2>Antes de diligenciar las siguientes celdas consulte su lugar de votación <a target="_blank" href="https://wsp.registraduria.gov.co/censo/consultar">aqui</a> </h2><br><br>
                <div class="fila2">
                    <div class="fila2columna1">
                        <label>Zona(&oacute;pcional)</label><br>
                        <input class="form-input" type="text" name="zona" id="zona">
                    </div> 
                    <div class="fila2columna2">
                        <label>Puesto*</label><br>
                        <select class="form-select" name="puesto"  id="puesto" required onchange="selectPuesto()" >
                            <option value="0" >Seleccione puesto</option>
                        </select>
                    </div>
                    <div class="fila2columna3">
                        <label>Mesa*</label><br>
                        <select class="form-select" name="mesa" id="mesa" required onchange="selectMesa()" >
                            <option value="0" >Seleccione mesa</option>
                        </select><br>
                    </div>   
                </div><br><br>
    
                    <!-- <label id="textarea">¿Quiere ser testigo de otro puesto de votaci&oacute;n?</label><br>
                    <textarea name="comentario" maxlength="200"  value="<?php echo $mostrar['comentario']; ?>" class="fila"></textarea><br> -->

                <div class="autorizacion_usuario_registro_testigo">
                    <section class="checkbox">
                    <input type="checkbox" name="autorizacion" id="autorizacion" required>
                    </section>
                    <section class="auto">
                    <p>Autorizo a <b>COLOMBIA EVIDENTE</b>, para recolectar, almacenar y gestionar mis datos personales con el fin de prestar los servicios inherentes a la defensa legal y pacífica de los principios que inspiran la sociedad occidental y cristiana, <b>conforme a la Ley Estatutaria 1581 de 2012, al Decreto 1377 de 2013</b> y a la correspondiente <b class="color">‘Política de tratamiento de datos Personales’</b> publicado en este website. Entiendo que podré corregir, suprimir, revocar o presentar cualquier reclamo sobre mis datos personales <b class="color">protecciondatos@colombiaevidente.org</b></p>
                    </section>
                </div><br><br> 

                <div style="text-align: center;">
                    <!-- <button style="background: radial-gradient(ellipse, #F4D03F,40%,#F39C12); border-radius: 10px; width: 20%; height: 30px;"><a href="usuario_registrado_testigo.php"  style="text-decoration: none; color: black; font-family:serif ; font-style: italic;font-size: 120%; margin-right: 40px;">Volver</a> </button>   -->
                    
                    <input type="submit" name="modificar" value="Enviar" style="background: radial-gradient(ellipse, #423A3A ,70%,#0B0909 ); border-radius: 10px; width: 20%; height: 30px; text-decoration: none; color: white; font-family:serif ; font-style: italic;font-size: 120%; margin-right: 10px; margin-left: 40px;">
                    
                </div> <br><br>                   


            </form>           

            
	   </section>
  

		

    </main>



<?php
include 'pie.php'
?>