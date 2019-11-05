<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Panel de Administrador</title>
  <link href="<?php echo base_url('assets/css/admin.css')?>" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    table, table td {
      text-align: center;
      margin: auto;
      width: 60% !important;    
    }

    .modal-lg{
    max-width: 5000px !important;
  }

  .modal-body{
    max-width: 5000px !important;
  }

  </style>
  <script type="text/javascript">
    $('body').removeClass('modal-open');
    $('.modal-backdrop').remove();
    function myFunction() {

      var r = confirm("¿Seguro que quieres ACEPTAR a este prospecto?");
      if (r == true) {

      } else {
        event.preventDefault();
      }
    }
    function myFunction2() {

      var r = confirm("¿Seguro que quieres RECHAZAR a este prospecto?");
      if (r == true) {

      } else {
        event.preventDefault();
      }
    }

  </script>
</head>
<body>
  <div class="container">
    <div class="table-wrapper">
      <div class="table-title">
        <div class="row">
          <div class="col-sm-8"><h2>Bienvenido <b><?php echo $this->session->userdata('s_nombre');?></b></h2></div>
          <div class="col-sm-4">
            <form action="<?php echo base_url()?>Administrador/cerrar_sesion">
              <button type="submit" class="btn btn-info ">Cerrar Sesión</button>
            </form>
          </div>
        </div>
      </div>
      <table id="resultados" class="table table-bordered table-hover">
       <thead>
        <tr>
          <th>Id</th>
          <th>Nombre</th>
          <th>Curriculum</th>
          <th>Contacto</th>
          <th>Detalles  </th>
          <th>Estado</th>
          <th colspan="2">Estatus</th>
          <!--<li style='display: none;' id='correo'></li>-->
        </tr>
      </thead>
      <tbody>
        <?php 
        $url=base_url();
        foreach ($Usuario as $row2) {
          if ($row2->estatus!='EN PROCESO') {
            echo "<tr>";
            echo "<td>".$row2->id."</td>";
            echo "<td>".$row2->nombre." ".$row2->apellidos."</td>";
            echo "<td><a download target='_blank' href='".$url."uploads/CV".$row2->curp.".pdf'>Descargar \n <i class='material-icons file_download'>&#xe2c4;</a></td>";
            echo "<td class='telefono'>".$row2->telefono."</td>";
            echo "<td><button type='button' onclick=(CargarResultados()); class='btn btn-info selector'  data-toggle='modal' data-backdrop='false' data-dismiss='modal'data-target='#miModal'>Ver detalle</button></td>";
            echo "<td>".$row2->estatus."</td>";
            echo "<td><a class='edit' style='text-decoration:none; pointer-events: none;' title='Aceptar' data-toggle='tooltip'>Aceptar<i class='material-icons'>&#xE876;</i></a></td>";
            echo "<td> <a class='delete' style='text-decoration:none; pointer-events: none;' title='Rechazar' data-toggle='tooltip'>Rechazar<i class='material-icons'>&#xE14C;</i></a></td>";
            echo "</tr>";
            echo "";
          } else{
            echo "<tr>";
            echo "<td>".$row2->id."</td>";
            echo "<td>".$row2->nombre." ".$row2->apellidos."</td>";
            echo "<td><a download target='_blank' href='".$url."uploads/CV".$row2->curp.".pdf'>Descargar \n <i class='material-icons file_download'>&#xe2c4;</a></td>";
            echo "<td>".$row2->telefono."</td>";
            echo "<td><button type='button' class='btn btn-info selector'  data-toggle='modal' data-backdrop='false' data-dismiss='modal'data-target='#miModal'>Ver detalle</button></td>";
            echo "<td>".$row2->estatus."</td>";
            echo "<td>
            <a class='edit' onclick='myFunction()' href='".base_url()."Administrador/CorreoAceptado/".$row2->id."' title='Aceptar' data-toggle='tooltip'>Aceptar  <i class='material-icons'>&#xE876;</i></a></td>";
            echo "<td> <a onclick='myFunction2()' href='".base_url()."Administrador/CorreoRechazado/".$row2->id."' class='delete' title='Rechazar' data-toggle='tooltip'>Rechazar<i class='material-icons'>&#xE14C;</i></a></td>";
            echo "</tr>";
          }


        }


        ?>

      </tbody>
    </table>
  </div>
</div>    


  <div id="miModal" class="modal" role="dialog" width= 70>
    <div class="modal-dialog  modal-lg">
      <!-- Contenido del modal -->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" onclick="limpiar()" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
         <h3 class="modal-title" id="exampleModalLongTitle">Detalles.</h3>
         <br>
         <br>
        <div class=".form-horizontal">
          <table class="table table-striped">
            <thead >
              <tr>
                <th scope="col">Serie I</th>
                <th scope="col">Serie II</th>
                <th scope="col">Serie III</th>
                <th scope="col">Serie IV</th>
                <th scope="col">Serie V</th>
                <th scope="col">Serie VI</th>
                <th scope="col">Serie VII</th>
                <th scope="col">Serie VIII</th>
                <th scope="col">Serie IX</th>
                <th scope="col">Serie X</th>
                <th scope="col">Total CI</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class="serie1" id="serie1" name="serie1" scope="row"></th>
                <th class="serie2" id="serie2" name="serie2" scope="row"></th>
                <th class="serie3" id="serie3" name="serie3" scope="row"></th>
                <th class="serie4" id="serie4" name="serie4" scope="row"></th>
                <th class="serie5" id="serie5" name="serie5" scope="row"></th>
                <th class="serie6" id="serie6" name="serie6" scope="row"></th>
                <th class="serie7" id="serie7" name="serie7" scope="row"></th>
                <th class="serie8" id="serie8" name="serie8" scope="row"></th>
                <th class="serie9" id="serie9" name="serie9" scope="row"></th>
                <th class="serie10" id="serie10" name="serie10" scope="row"></th>
                <th class="total" id="total" name="total" scope="row"></th>
                

              </tr>
            </tbody>
          </table>
        </div>

      </div>

  </div>
  <div class="modal-footer">


  </div>
</div>
</div> 
<script type="text/javascript">
  function limpiar(){
    $('#serie1').text('');
    $('#serie2').text('');
    $('#serie3').text('');
    $('#serie4').text('');
    $('#serie5').text('');
    $('#serie6').text('');
    $('#serie7').text('');
    $('#serie8').text('');
    $('#serie9').text('');
    $('#serie10').text('');
    $('#total').text('');
  }
  $("#resultados").on('click','.selector',function(){
         // get the current row
         var currentRow=$(this).closest("tr"); 
         var id=currentRow.find("td:eq(0)").text(); // get current row 1st TD value
         $.ajax({
          url:'<?=base_url()?>Administrador/Resultados',
          method: 'post',
          data: {id: id},
          dataType: 'json',
          success: function(response){
            if(response=='Nada'){ 
              alert('No existen resultados para mostrar de esta persona.');
              console.log(response);
            }else{
              var ser1 = response[0].nombre;
              var ser2 = response[1].nombre;
              var ser3 = response[2].nombre;
              var ser4 = response[3].nombre;
              var ser5 = response[4].nombre;
              var ser6 = response[5].nombre;
              var ser7 = response[6].nombre;
              var ser8 = response[7].nombre;
              var ser9 = response[8].nombre;
              var ser10 = response[9].nombre;
              var ser11 = response[9].CI;
              
              if(!ser1){
                $('#serie1').text('No finalizó o interrumpió la prueba.');  
              }else{
                $('#serie1').text(ser1);
              }
              if(!ser2){
                $('#serie2').text('No finalizó o interrumpió la prueba.');  
              }else{
                $('#serie2').text(ser2);
              }
              if(!ser3){
                $('#serie3').text('No finalizó o interrumpió la prueba.');  
              }else{
                $('#serie3').text(ser3);
              }
              if(!ser4){
                $('#serie4').text('No finalizó o interrumpió la prueba.');  
              }else{
                $('#serie4').text(ser4);
              }
              if(!ser5){
                $('#serie5').text('No finalizó o interrumpió la prueba.');  
              }else{
                $('#serie5').text(ser5);
              }
              if(!ser6){
                $('#serie6').text('No finalizó o interrumpió la prueba.');  
              }else{
                $('#serie6').text(ser6);
              }
              if(!ser7){
                $('#serie7').text('No finalizó o interrumpió la prueba.');  
              }else{
                $('#serie7').text(ser7);
              }
              if(!ser8){
                $('#serie8').text('No finalizó o interrumpió la prueba.');  
              }else{
                $('#serie8').text(ser8);
              }
              if(!ser9){
                $('#serie9').text('No finalizó o interrumpió la prueba.');  
              }else{
                $('#serie9').text(ser9);
              }
              if(!ser10){
                $('#serie10').text('No finalizó o interrumpió la prueba.');  
              }else{
                $('#serie10').text(ser10);
              }
              if(!ser11){
                $('#total').text('No finalizó o interrumpió la prueba.');  
              }else{
                $('#total').text(ser11);
              }

            }
          }
        });
       });

  /*function CargarResultados(){
    //var codigo = $('#codigo').val();
   
  };*/
</script>
</body>
</html>                            