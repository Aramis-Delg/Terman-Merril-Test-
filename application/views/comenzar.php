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

        <script type="text/javascript">
 
    
    $('body').removeClass('modal-open');
    $('.modal-backdrop').remove();
</script>
</head>

<body>
    <div class="card text-center">
      <div class="card-header">
      <font size="4">  Bienvenido <?php echo $this->session->userdata('s_nombre');?></font> 
    </div>
    <div class="card-body">
        <h5 class="card-title"><i><font size="6">“Convierte tu pasión en un proyecto de vida”</font></i></h5>
        <p class="card-text">
            <br>
            <font size="3">
            <h4>RECOMENDACIONES</h4>
            <li> Asegurate de tener buena conexión a internet.</li>
            <li> Mantente lejos de las distracciones y ponte cómodo.</li>
            <li> El tiempo estimado de esta evaluación es de 40 a 45 minutos.</li>
            <br>
            <h4>¡ADVERTENCIA!</h4>
            Una vez comenzada la prueba no podrás comenzar de nuevo.
        </p>
      </font>
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-backdrop="false" data-dismiss="modal"data-target="#miModal"><h3>Empezar Test</h3></button>
        
  </div>
  <div class="card-footer text-muted">

<div class="container">

    <div id="miModal" class="modal " role="dialog" width= 70>
  <div class="modal-dialog">
    <!-- Contenido del modal -->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
         <h5 class="modal-title" id="exampleModalLongTitle">Si deseas realizar tu evaluación en otro momento,inicia sesión
        con tu usuario el cual es; <?php echo $this->session->userdata('s_correo');?>  y tu
        contraseña, la cual es; <?php echo $this->session->userdata('s_telefono');?>.</h5>
         <br>
         <br>
         <form action="">
           <button type="submit" formaction="<?php echo base_url()?>Comenzar/comenzar" class="btn btn-primary">Continuar</button>

        <button   type="submit" formaction="<?php echo base_url()?>Login/cerrar_sesion" class="btn btn-secondary" >Cerrar sesión</button>
        </form>
      </div>
          
      </div>

</div>
      <div class="modal-footer">

   
      </div>
    </div>
  </div>
  </div>
</div>


<!-- Modal -->



</body>
</html>
