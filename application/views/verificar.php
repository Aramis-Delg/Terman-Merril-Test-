<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<title>Registro</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	<style type="text/css">
		body{
			color: #020307;
			font-family: 'Roboto', sans-serif;
		}
		.form-control{
			height: 40px;
			box-shadow: none;

		}
		.form-control:focus{
			border-color: #5cb85c;
		}

		.signup-form{
			width: 400px;
			margin: 0 auto;
			padding: 30px 0;
		}
		.signup-form h2{
			color: #000000;
			margin: 0 0 15px;
			position: relative;
			text-align: center;
		}
		.signup-form h2:before, .signup-form h2:after{
			content: "";
			height: 2px;
			width: 30%;

			position: absolute;
			top: 50%;
			z-index: 2;
		} 
		.signup-form h2:before{
			left: 0;
		}
		.signup-form h2:after{
			right: 0;
		}
		.signup-form .hint-text{
			color: #999;
			margin-bottom: 30px;
			text-align: center;
		}
		.signup-form form{
			color: #999;
			border-radius: 3px;
			margin-bottom: 15px;
			background: #f2f3f7;
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			padding: 30px;
		}
		.signup-form .form-group{
			margin-bottom: 20px;
		}
		.signup-form input[type="checkbox"]{
			margin-top: 3px;
		}

		.signup-form .row div:first-child{
			padding-right: 10px;
		}
		.signup-form .row div:last-child{
			padding-left: 10px;
		}     
		.signup-form a{
			color: #020307;
			text-decoration: underline;
		}
		.signup-form a:hover{
			text-decoration: none;
		}
		.signup-form form a{
			color: #5cb85c;
			text-decoration: none;
		} 
		.signup-form form a:hover{
			text-decoration: underline;
		}  
	</style>
</head>
<body>
	<div class="signup-form">
		<h2><a style="text-decoration: none;" href="<?php echo base_url()?>Verificar/cerrar_sesion">Cerrar Sesión</a></h2>
		<h4 class="hint-text">Ya casi estás registrado</h4>
		<p class="hint-text">Escribe el código de verificación que ha sido enviado a tu correo.</p>
		<div class="form-group">
			<input id="codigo" maxlength="6" autocomplete="false" minlength="6" type="number" class="form-control" name="codigo" placeholder="######">
			<button id="enviar" name="enviar" onclick="verificarCodigo()" type="button" class="btn btn-primary btn-block"aria-expanded="false" aria-controls="collapseExample" >Verificar Código</button>
		</div>
		<br>

		<button id="enviar" name="enviar" type="button" class="btn btn-primary btn-block" data-toggle="collapse" data-target="#campos" aria-expanded="false" aria-controls="collapseExample" >No tengo un código</button>
		<div id="campos" class="collapse" >
			<div class="form-group">
				<div class="row">
					<p class="hint-text">El correo que tenemos registrado es:</p><?php echo substr($this->session->userdata('s_correo'),0,7);?>******* <br><p class="hint-text">. Si es correcto solo da clic en "Reenviar Código".</p>
					<div class="form-group"><button type="button" onclick="ReenviarCodigo()" id="guardar" class="btn btn-primary btn-block">Reenviar Código</button></div>
					<p class="hint-text">Si es incorrecto o tienes problemas con tu cuenta, por favor registra otra dirección de correo electrónico.</p>
					<div class="col-xs-6"><input type="mail" id="correo" class="form-control" name="correo" placeholder="example@mail" required>
						<input type="password" id="telefono" class="form-control" name="telefono" placeholder="Confirma tu contraseña" required></div>
				</div>          
			</div>

			<div class="form-group">
				<button type="button" onclick="ActualizarCorreo()" id="guardar" class="btn btn-primary btn-block">Actualizar Correo</button>
			</div>



		</div>
	</div>       

</div>
<script type="text/javascript">
	function verificarCodigo(){
		var codigo = $('#codigo').val();
		$.ajax({
			url:'<?=base_url()?>Verificar/verificar',
			method: 'post',
			data: {codigo: codigo},
			dataType: 'text',
			success: function(response){
				if(response!='Código correcto'){ 
					alert('El códogo es incorrecto.');
					console.log(response);
				}else{
					alert('El códogo es correcto. Ahora puedes comenzar el test.');
					window.location.href = '<?php echo base_url()?>';
				}
			}
		});
	};

	function ReenviarCodigo(){
		var correo = '<?php echo $this->session->userdata('s_correo');?>';
		$.ajax({
			url:'<?=base_url()?>Verificar/Reenviar',
			method: 'post',
			data: {correo: correo},
			dataType: 'text',
			success: function(response){
				if(response!='Enviado'){ 
					alert('El correo no ha sido enviado, intente nuevamente.\nSi el error persiste, comunícate con el administrador del sistema.');
					console.log(response);
				}else{
					alert('El correo ha sido enviado nuevamente a tu correo.');
					//window.location.href = '<?php echo base_url()?>';
				}
			}
		});
	};

	function ActualizarCorreo(){
		var contra = $('.telefono').val();
		var correo = $('#correo').val();
		var contra2 = '<?php echo $this->session->userdata('s_telefono');?>';
		if(contra=contra2){
			if (/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(correo)){
			alert("La dirección de email " + correo + " es correcta.");
			$.ajax({
				url:'<?=base_url()?>Verificar/actualizar',
				method: 'post',
				data: {correo: correo},
				dataType: 'text',
				success: function(response){
					if(response!='Correo actualizado'){ 
						alert('Error inesperado, intente nuevamente. \nContacte al administrador de sistemas si el error persiste.');
						console.log(response);
					}else{
						alert('El correo ha sido actualizado.\nSe enviará el código a tu correo nuevamente.');
						location.reload(true);
						console.log(response);
					}
				}
			});
		} else {
			alert("La dirección de email es incorrecta.");
		}
		}else{
			alert('Contraseña erronea');
		}
		console.log(correo);
		

		
	};
</script>
</body>
</html> 

