<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/js/bootstrap.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.css" rel="stylesheet" type="text/css" />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

</head>


<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
<<<<<<< HEAD
    <li class="breadcrumb-item"><a id='enlace' onclick="myFunction();" href="#">Cerrar Sesión</a></li>
=======
    <li class="breadcrumb-item"><a href="<?php echo base_url()?>Administrador/cerrar_sesion">Cerrar Sesión</a></li>
>>>>>>> 43280dbc1dffbdb392c5cc5143daa2a59412d2c4
    <li class="breadcrumb-item active" aria-current="page"><?php echo $this->session->userdata('s_nombre');?></li>
  </ol>
</nav>

</html>
<script type="text/javascript">

function myFunction() {

  var r = confirm("¿Estás seguro de que quieres salir de la prueba?, tu avance se perderá. ");
  if (r == true) {
    document.getElementById('enlace').setAttribute('href',"<?php echo base_url()?>index.php/Administrador/cerrar_sesion/");

  } else {
    
  }
  //document.getElementById("demo").innerHTML = txt;
}

</script>