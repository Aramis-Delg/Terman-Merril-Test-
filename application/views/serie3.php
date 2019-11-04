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

<style type="text/css">
    ul{
        list-style: none;
</style>


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
              <h4>Cuando las dos palabras signifiquen lo mismo selecciona “ Igual ”, cuando signifiquen lo opuesto selecciona la opción “ Opuesto “:</b> 
            <br>
            Ver - Observar
            <tr><th>
            <label><h5><input type='radio' checked>Igual</h5></label>
            <label><h5><input type='radio' disabled>Opuesto</h5></label>
        </th></tr>    
       </div>
           <div class="modal-footer">
          <a href="#" onclick="temporizador()" data-dismiss="modal" class="btn btn-danger">Comenzar</a>
           </div>
      </div>
   </div>
</div>


     <div class="container"> 
   <form id="questionform" method="post" action="<?php echo base_url()?>index.php/Serie3/respS3">
   <div class="container"> 
    <h3>Serie III. Mide vocabulario.</h3>
        <label class="control-label">
          <?php
           $i=1;
          foreach($verSerie3 as $row)
           {
            $aux=$row->id;
  echo "<ul>";
  echo "<li>"."<b>".$i.". ".$row->pregunta."</b>";
  echo "<br>";

foreach ($verRespuestas as $row2) {
        $aux2 = $row2->id_pregunta;
    if($aux==$aux2){
        //echo " <tr><th>";
        echo "&nbsp&nbsp<label><h5><input type='radio' value='".$row2->puntos."' id='3' name='respuesta".$aux2."[]'>".$row2->valor."</h5></label>";
        //echo "</th> </tr>";
    }
}
  echo "</li>";

  echo "</ul>";
  $i++;
    } ?>

  </label>
       
     
    
    <div class="form-group" > <!-- Submit button !-->
        <button class="btn btn-primary "   type="submit">Enviar</button>
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
          alert('Tu tiempo se ha terminado. Comienza serie 4.');
        $("#questionform").submit();
      }, 120000);
       
    }


</script>