<?php
 
// session_start();

// if (empty($_SESSION['usuarioadmi'])) {
//   header('location:admin.php');
// }

include 'cabeceraadmi.php';
?>
<style type="text/css">
	.selectadmin{
		width: 100%;
		display: flex;
	}
	.selectadmin1{
		width: 80%;
		margin: auto;
		margin-top: 20px;
		height: 40px;
		border-radius: 10px;
	}

	.tabla{
		width: 100%;
		font-family: !important;
		align-content: center;
		justify-items: center;
		text-align: center;		
	}
	
	.tabla1{
		width: 100%;	

	}
	.tabla1col{
		width: 25%;	

	}
</style>
<form action="admin2.php" method="post">
	<div class="selectadmin">
	<select class="selectadmin1" id="selectadmin1" name="selectadmin1" onchange="selectadmi1()">
		<option value="0">Qué desea consultar?</option>
		<option value= '1' >Registro comunidad</option>
		<option value= '2' >Registro testigos</option>
		<option value= '3' >Reporte dia-d</option>
		<option value= '4' >Reporte E-14</option>
	</select>
</div><br>
<div class="selectadmin">
	<input type="submit" name="consultar" class="selectadmin1" value="consultar">
</div>
</form>


<?php
 include 'pie.php';
?>