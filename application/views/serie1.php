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
    }
  </style>

 
<!--

  Veamos ¿en qué íbamos?

  ya añade registros a tabla total segmentos y a usuarios_resp de la serie 1

  Ok, veamos... la serie 2 es parecida a la serie 1 ¿no? 
  si, espera

  como haremos que al terminar el temporizador, nos ejecute la dirección url?, esta 

  He vuelto. Espera, tengo un js para ello

  $("#questionform").submit();

  Esa madre se pone dentro de la función del intervalo
  no hizo nad

  Deja revisar, espera

-->
</head>

<body>
 <div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header">

      <h3>Instrucciones</h3>

    </div>
    <div class="modal-body">
      ( Observaciones generales: esta prueba dura 2 minutos y la cantidad de reactivos son 16.)
      <br>
      <br>
      <h4>Selecciona la respuesta que complete correctamente la oración, tal y como lo
      muestra el siguiente ejemplo:</h4>
      <b>El iniciador de nuestra guerra de independencia fue:</b> 
      <br>
      <tr><th>
        <label><h5><input type='radio' disabled>Benito Juárez</h5></label>
        <label><h5><input type='radio' disabled>Santa Ana</h5></label>
        <label><h5><input type='radio' disabled>Porfirio Díaz</h5></label>
        <label><h5><input type='radio' checked>Hidalgo</h5></label>
      </th></tr>    
    </div>
    <div class="modal-footer">
      <input type="button" value="Comenzar" onclick="temporizador()" data-dismiss="modal" class="btn btn-danger">
    </div>
  </div>
</div>
</div>

<div></div>
<form id="questionform" method="post" name="questionform" action="<?php echo base_url()?>index.php/Comenzar/respS1">
 <div class="container"> 
  <h3>Serie I. Mide información o conocimientos.</h3>
  <label class="control-label">
    <?php
    $i=1;
    foreach($verSerie1 as $row)
    {
      $aux=$row->id;
      echo "<ul>";
      echo "<li>"."<b>".$i.". ".$row->pregunta."</b>";
      echo "<br>";

      foreach ($verRespuestas as $row2) {
        $aux2 = $row2->id_pregunta;
        if($aux==$aux2){
        //echo " <tr><th>";
          echo "<label><h5><input type='radio' value='".$row2->puntos."' id='1' name='respuesta".$aux2."[]'>".$row2->valor."</h5></label>";
        //echo "</th> </tr>";
        }
      }
      echo "</li>";

      echo "</ul>";
      $i++;
    } ?>

  </label>



  <div class="form-group" > <!-- Submit button !-->
    <button class="btn btn-primary " name="submit"  type="submit">Enviar</button>
  </div>
</form>
</div>
 <script type="text/javascript">
    function temporizador() {
      setInterval(function(){
        document.questionform.submit();}, 6000);
    }
    $(document).ready(function()
    {   
     $("#mostrarmodal").modal("show");
   });


  </script>
</body>
</html>