<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/body.css')?>" rel="stylesheet">
<script src="<?php echo base_url('assets/js/bootstrap.js')?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

<body>
       <div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
          
              <h3>Instrucciones</h3>
           </div>
           <div class="modal-body">
            <br>
              <h4>En cada renglón procura encontrar cómo están hechas las series. Después, escribe los dos números que deban seguir en cada serie:</b> 
                <br>
                <br>
              <div class="form-group row">
                <div class="col-xs-4">
                   <label for="ex1">5   10    15    20    25</label>
                </div>

              <div class="col-xs-2">
            <input class="form-control" id="ex1" type="text" value=30>
           </div>
           <div class="col-xs-2">
            <input class="form-control" id="ex1" type="text" value=35>
           </div>
           </div>
            <br>   
            <br>
                <br>
              <div class="form-group row">
                <div class="col-xs-4">
                   <label for="ex1">20    18    16    14    12 </label>
                </div>

              <div class="col-xs-2">
            <input class="form-control" id="ex1" type="text" value=10>
           </div>
           <div class="col-xs-2">
            <input class="form-control" id="ex1" type="text" value=8>
           </div>
           </div>
       </div>
           <div class="modal-footer">
          <a href="#" onclick="temporizador()" data-dismiss="modal" class="btn btn-danger">Comenzar</a>
           </div>
      </div>
   </div>
</div>


   <div class="container"> 
    <form id="questionform" method="post" action="<?php echo base_url()?>index.php/Serie10/respS10">
    <h3>Serie X.  Mide anticipación, atención o seriación.</h3>
        <label class="control-label">
        <?php
           $i=1;
          foreach($verSerie10 as $row)
           {
            $aux=$row->id;
  echo "<ul>";
  echo "<li>"." - <h4>".$i.". ".$row->pregunta."</h4>";
  
        echo " <tr><th>";
        echo "<label><h5><div class='col-xs-2' align='right'><input type='text' autocomplete='off' id='".$row->id."' name='respuesta".$row->id."' ></div></h5></label>";
        echo "</th> </tr>";
        echo " <tr><th>";
        echo "<label><h5><div class='col-xs-2' align='right'><input type='text' autocomplete='off' id='".$row->id."' name='respuestab".$row->id."' ></div></h5></label>";
        echo "</th> </tr>";
   
  echo "</li>";

  echo "</ul>";
  $i++;
    } ?>

  </label>
       
     

    <div class="form-group"> <!-- Submit button !-->
        <form action="">
 
        <button class="btn btn-primary " onclick="cambiar()"  type="submit">Terminar</button>

    </form>
    </div>
  </form>
    </div>

</body>
</html>

<script type="text/javascript">
    $(document).ready(function()
      {
         $("#mostrarmodal").modal("show");
      });

      function temporizador() {
        cambio=1;
        setTimeout(function() {
          alert('El tiempo ha terminado.');
        $("#questionform").submit();
      }, 240000);
       
    }
    
  var bPreguntar = true;
  window.onbeforeunload = preguntarAntesDeSalir;

  function preguntarAntesDeSalir()

  {

    if (bPreguntar)
      return "¿Seguro que quieres salir?";
  }

  window.onbeforeunload = confirmExit;

  function confirmExit() {
    if (cambio == 1) {
      return "¿Seguro que desea salir de esta página?, sus cambios se perderán si no ha dado cick en el botón de GUARDAR. ";
    }
  }
  function cambiar(){
    cambio=0;
  }


</script>