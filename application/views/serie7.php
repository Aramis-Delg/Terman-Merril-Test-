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
              <h4>Selecciona la contestación correcta como como lo muestran los ejemplos:</b> 
            <br>
            El oído es a oir como el ojo es a:
             <br>
            <tr><th>
            <label><h5><input type='radio' disabled>Mesa</h5></label>
            <label><h5><input type='radio' checked>Ver</h5></label>
            <label><h5><input type='radio' disabled>Mano</h5></label>
            <label><h5><input type='radio' disabled>Jugar</h5></label>
        </th></tr>
           <br>
            El sombrero es a la cabeza como el zapato es a:
             <br>
            <tr><th>
            <label><h5><input type='radio' disabled>Brazo</h5></label>
            <label><h5><input type='radio' disabled>Abrigo</h5></label>
            <label><h5><input type='radio' checked>Pie</h5></label>
            <label><h5><input type='radio' disabled>Pierna</h5></label>
        </th></tr>    
       </div>
           <div class="modal-footer">
          <a href="#" onclick="temporizador()" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
           </div>
      </div>
   </div>
</div>


  <div class="container"> 
   <form id="questionform" method="post" action="<?php echo base_url()?>index.php/Serie7/respS7">
   <div class="container"> 
    <h3>Serie VII. Mide abstracción.</h3>
        <label class="control-label">
          <?php
           $i=1;
          foreach($verSerie7 as $row)
           {
            $aux=$row->id;
  echo "<ul>";
  echo "<li>"."<b>".$i.". ".$row->pregunta."</b>";
  echo "<br>";

foreach ($verRespuestas as $row2) {
        $aux2 = $row2->id_pregunta;
    if($aux==$aux2){
        //echo " <tr><th>";
        echo "&nbsp&nbsp<label><h5><input type='radio' value='".$row2->puntos."' id='7' name='respuesta".$aux2."[]'>".$row2->valor."</h5></label>";
        //echo "</th> </tr>";
    }
}
  echo "</li>";

  echo "</ul>";
  $i++;
    } ?>

  </label>     
    
    <div class="form-group" > <!-- Submit button !-->
        <button class="btn btn-primary " onclick="cambiar()" name="submit"  type="submit">Enviar</button>
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
        setTimeout(function() {
          cambio=1;
          alert('Tu tiempo se ha terminado. Comienza serie 8.');
        $("#questionform").submit();
      }, 120000);
       
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