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
              <h4>A continuación lee cada una de las oraciones, las palabras están mezcladas. Ordena mentalmente cada una, identifica si el significado de las oracion es verdadero o falso. :</b> 
            <br>
            Ver son para los ojos:
             <br>
            <tr><th>
            <label><h5><input type='radio' checked>Verdadero</h5></label>
            <label><h5><input type='radio' disabled>Falso</h5></label>
        
        </th></tr>
        <br>
        - (Los ojos son para ver)

           <br>
            Comer para son desperdicios los buenos:
             <br>
            <tr><th>
             <label><h5><input type='radio' disabled>Verdadero</h5></label>
            <label><h5><input type='radio' checked>Falso</h5></label>
        </th></tr>  
        <br>  
        - ( Los desperdicios son buenos para comer)
       </div>
           <div class="modal-footer">
          <a href="#" onclick="temporizador()" data-dismiss="modal" class="btn btn-danger">Comenzar</a>
           </div>
      </div>
   </div>
</div>


  <div class="container"> 
   <form id="questionform" method="post" action="<?php echo base_url()?>index.php/Serie8/respS8">
   <div class="container"> 
    <h3>Serie VIII. Mide planeación.</h3>
        <label class="control-label">
          <?php
           $i=1;
          foreach($verSerie8 as $row)
           {
            $aux=$row->id;
  echo "<ul>";
  echo "<li>"."<b>".$i.". ".$row->pregunta."</b>";
  echo "<br>";

foreach ($verRespuestas as $row2) {
        $aux2 = $row2->id_pregunta;
    if($aux==$aux2){
        //echo " <tr><th>";
        echo "&nbsp&nbsp<label><h5><input type='radio' value='".$row2->puntos."' id='8' name='respuesta".$aux2."[]'>".$row2->valor."</h5></label>";
        //echo "</th> </tr>";
    }
}
  echo "</li>";

  echo "</ul>";
  $i++;
    } ?>

  </label>     
    
    <div class="form-group" > <!-- Submit button !-->
        <button class="btn btn-primary "  onclick="cambiar()" type="submit">Enviar</button>
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
          alert('Tu tiempo se ha terminado. Comienza serie 9.');
        $("#questionform").submit();
      }, 180000);
       
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