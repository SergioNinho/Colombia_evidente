<?php

include 'cabecera.php';
include 'db.php';
$conectar= coneet();
$consulta=$conectar->query("SELECT * from registro where usuario='$miembro' ");
$consultaDepart = $conectar->query("SELECT * from departamentos"); 
?>
<div class="testigo_encab">
	<img src="imagenes/BANNER23.jpg">
</div>
<section class="menu_testigo animate__animated animate__zoomIn">
           

			<form action="testigo1.php" method="post" id="registro"><strong><h2><center>REGISTRATE</center></h2></strong><br>                   
                    <?php
                        $mostrar=$consulta->fetch_assoc();

 
                    ?>              
               
                <div class="fila1">
                    <div class="fila1columna1">
                        
                        <input class="form-input" type="text" name="nombre" maxlength="50" hidden value="<?php echo $mostrar['nombre']; ?>" >   <br>
                    </div> 
                
                    <div class="fila1columna2">
                       
                        <input class="form-input" type="tex" name="apellido"  maxlength="50" hidden value="<?php echo $mostrar['apellido']; ?>"><br>
                    </div> <br><br><br>
                                                    
                </div>

                <div class="fila1">
                    <div class="fila1columna1">
                       
                        <input class="form-input" type="text" name="usuario" maxlength="50" hidden value="<?php echo $mostrar['usuario']; ?>" >   <br>
                    </div> 
                
                    <div class="fila1columna2">
                        
                        <input class="form-input" type="email" name="email"  maxlength="50" hidden value="<?php echo $mostrar['email']; ?>"><br>
                    </div> <br><br><br>
                                                    
                </div>
                  <?php
                    // }
                    
                    ?>

                <div class="fila1">

  
                    <div class="fila1columna1">
                        <label>Tipo de documento*</label><br>
                        <select class="form-select" name="tdd" id="tipodedocumento" required>
                            <option selected disabled hidden></option>
                            <option>C&eacute;dula de ciudadania</option>
                            <option>C&eacute;dula extranjera</option>
                            <option>Pasaporte</option>
                        </select>
                    </div>
                    <div class="fila1columna2">
                        <label>N&uacute;mero de documento*</label><br>
                        <input class="form-input" type="text" name="documento" placeholder="Ej:91210510" maxlength="50" required>
                        
                    </div>   
                </div>
                <div class="fila1">
                    <div class="fila1columna1">
                        <label>N&uacute;mero de tel&eacute;fono*</label><br>
                        <strong>+</strong><input type="tel" name="telf" pattern="[0-9]{2}" placeholder="57" maxlength="3" required id="indicador">
                        <input type="tel" name="tel" pattern="[0-9]{10}" placeholder="3101010101" maxlength="10" required id="telefono"><br>
                    </div>
                    <div class="fila1columna2">
                        <label>N&uacute;mero de whatsapp*</label><br>
                        <strong>+</strong><input type="tel" name="telfw" pattern="[0-9]{2}" placeholder="57" maxlength="3" required id="indicador">
                        <input type="tel" name="telw" pattern="[0-9]{10}" placeholder="3101010101" maxlength="10" required id="telefono"><br>
                    </div>
                </div>
                <div class="fila1">

                    <div class="fila1columna1">
                        <label>Pais*</label><br>
                        <input class="form-input" type="text" name="Colombia" id="Colombia" value="Colombia" disabled>
                       
                    </div>
                    <div class="fila1columna2">
                        <label name="departamento" >Departamento*</label><br>                     
                        <select class="form-select" type="text" name="departamento" placeholder="antioqia" maxlength="50" required id="departamento" onchange="selectDepar()">
                            <option value="0">Seleccione departamento</option>
                                <?php 
                                while ($departamento=$consultaDepart->fetch_assoc()) {?>
                            <option id="<?php echo $departamento['departamento'];?>"><?php echo $departamento['departamento'];}?></option>
                            
                        </select>
                          
                        <br>
                    </div>
                </div>
                <div class="fila1">
                    <div class="fila1columna1">
                        <label name="municipio" >Ciudad o munic&iacute;pio*</label><br>
                        <select class="form-select" name="municipio" id="municipio" onchange="selectMuni()"required>
                            <option>Seleccione munic&iacute;pio</option>                                  
                        </select><br>
                    </div>
                    <div class="fila1columna2">
                        <label>Barrio o sector*</label><br>
                        <input class="form-input" type="text" name="puestodireccion" placeholder="cra 123#321-12" maxlength="50" required><br>
                    </div>
                </div><br><br>
                 <h2>Antes de diligenciar las siguientes celdas consulte su lugar de votaci&oacute;n <a target="_blank" href="https://wsp.registraduria.gov.co/censo/consultar">aqui</a> </h2><br><br>
                <div class="fila2">
                    <div class="fila2columna1">
                        <label>Zona(&oacute;pcional)</label><br>
                        <input class="form-input" type="text" name="zona" placeholder="1" maxlength="50" id="zona">
                    </div> 
                    <div class="fila2columna2">
                        <label>Puesto*</label><br>
                        <select class="form-select" name="puesto" placeholder="1" maxlength="100" id="puesto" required onchange="selectPuesto()" >
                            <option value="0" >Seleccione puesto</option>
                        </select><br>
                    </div>
                    <div class="fila2columna3">
                        <label>Mesa*</label><br>
                        <select class="form-select" name="mesa" placeholder="1" maxlength="100" id="mesa" required onchange="selectMesa()" >
                            <option value="0" >Seleccione mesa</option>
                        </select><br>
                    </div>   
                </div><br><br>
    
                   <!--  <label id="textarea">¿Quiere ser testigo de otro puesto de votación?</label><br>
                    <textarea name="comentario" maxlength="200"  placeholder="maximo 200 caracteres" class="fila"></textarea><br> -->

                <div class="autorizacion_usuario">
                    <section class="checkbox">
                    <input type="checkbox" name="autorizacion" id="autorizacion" required>
                    </section>
                    <section class="auto">
                    <p>Autorizo a <b>COLOMBIA EVIDENTE</b>, para recolectar, almacenar y gestionar mis datos personales con el fin de prestar los servicios inherentes a la defensa legal y pacífica de los principios que inspiran la sociedad occidental y cristiana, <b>conforme a la Ley Estatutaria 1581 de 2012, al Decreto 1377 de 2013</b> y a la correspondiente <b class="color">‘Política de tratamiento de datos Personales’</b> publicado en este website. Entiendo que podré corregir, suprimir, revocar o presentar cualquier reclamo sobre mis datos personales <b class="color">protecciondatos@colombiaevidente.org</b></p>
                    </section>
                </div>    
                <div class="registrar">
                	<input type="submit" name="Registro" class="enviar" value="Enviar">
                </div><br><br>
                


            </form>





            

			
	   </section>
<?php
include'pie.php';
?>