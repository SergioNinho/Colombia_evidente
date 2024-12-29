// window.onload=inicio();

function selectDepar() {	
	let departamento = document.getElementById('departamento').value;	
	
	console.log(departamento)
	if (departamento!=0){
		ajax();
		function ajax(){			
			$.ajax({
				url:"datos.php",
				type:"post",
				data: {departamento},
				success:function(response){
					$('#municipio').html (response);
					console.log(response)
				}
			})
		}
	} 

}
function selectMuni(){
	let departamento = document.getElementById('departamento').value;
	let municipio = document.getElementById('municipio').value;	
	
	console.log(municipio)
	if (municipio!=0 && departamento!=0){
		ajax();
		function ajax(){			
			$.ajax({
				url:"datosMun.php",
				type:"post",
				data: {municipio,departamento},
				success:function(response){
					$('#puesto').html (response);
					console.log(response)
				}
			})
		}
	} 
	 
	
}


// function selectZona(){
// 	let departamento = document.getElementById('departamento').value;
// 	let municipio = document.getElementById('municipio').value;	
// 	let zona = document.getElementById('zona').value;
	
// 	console.log(zona)
// 	if (municipio!=0 && departamento!=0 && zona!=0){
// 		ajax();
// 		function ajax(){			
// 			$.ajax({
// 				url:"datosPuest.php",
// 				type:"post",
// 				data: {municipio,departamento,zona},
// 				success:function(response){
// 					$('#puesto').html (response);
// 					console.log(response)
// 				}
// 			})
// 		}
// 	} 
	 
	
// };

function selectPuesto(){
	let departamento = document.getElementById('departamento').value;
	let municipio = document.getElementById('municipio').value;	
	// let zona = document.getElementById('zona').value;
	let puesto = document.getElementById('puesto').value;
	
	console.log(puesto);
	if (municipio!=0 && departamento!=0 && puesto!=0){
		ajax();
		function ajax(){			
			$.ajax({
				url:"datosMesa.php",
				type:"post",
				data: {municipio,departamento,puesto},
				success:function(response){
					$('#mesa').html (response);
					console.log(response)
				}
			})
		}
	} 

}

function selectMesa(){
	let departamento = document.getElementById('departamento').value;
	let municipio = document.getElementById('municipio').value;	
	let mesa = document.getElementById('mesa').value;
	let puesto = document.getElementById('puesto').value;
	if (municipio!=0 && departamento!=0 && puesto!=0 && mesa!=0){
		ajax();
		function ajax(){			
			$.ajax({
				url:"datosZona.php",
				type:"post",
				data: {municipio,departamento,puesto,mesa},
				success:function(response){
					$('#zona').html (response);
					console.log(response)
				}
			})
		}
	}
}

$(document).ready(function(){
	$('#departamento').select2();
});

$(document).ready(function(){
	$('#municipio').select2();
});

$(document).ready(function(){
	$('#puesto').select2();
});
