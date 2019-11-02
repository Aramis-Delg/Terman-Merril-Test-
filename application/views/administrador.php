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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    table, table td {
    text-align: center;
    margin: auto;
    width: 50% !important;    
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
      <table class="table table-bordered table-hover">
       <thead>
        <tr>
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
            echo "<td>".$row2->nombre." ".$row2->apellidos."</td>";
            echo "<td><a download target='_blank' href='".$url."uploads/CV".$row2->curp.".pdf'>Descargar \n <i class='material-icons file_download'>&#xe2c4;</a></td>";
            echo "<td>".$row2->telefono."</td>";
            echo "<td><button type='button' class='btn btn-info'  data-toggle='modal' data-backdrop='false' data-dismiss='modal'data-target='#miModal'>Ver detalle</button></td>";
            echo "<td>".$row2->estatus."</td>";
            echo "<td><a class='edit' style='text-decoration:none; pointer-events: none;' title='Aceptar' data-toggle='tooltip'>Aceptar<i class='material-icons'>&#xE876;</i></a></td>";
            echo "<td> <a class='delete' style='text-decoration:none; pointer-events: none;' title='Rechazar' data-toggle='tooltip'>Rechazar<i class='material-icons'>&#xE14C;</i></a></td>";
            echo "</tr>";
            echo "";
          } else{
            echo "<tr>";
            echo "<td>".$row2->nombre." ".$row2->apellidos."</td>";
            echo "<td><a download target='_blank' href='".$url."uploads/CV".$row2->curp.".pdf'>Descargar \n <i class='material-icons file_download'>&#xe2c4;</a></td>";
            echo "<td>".$row2->telefono."</td>";
            echo "<td><button type='button' class='btn btn-info'  data-toggle='modal' data-backdrop='false' data-dismiss='modal'data-target='#miModal'>Ver detalle</button></td>";
            echo "<td>".$row2->estatus."</td>";
            echo "<td>
            <a class='edit confirmation' onclick='myFunction()' href='".base_url()."Administrador/CorreoAceptado/".$row2->id."' title='Aceptar' data-toggle='tooltip'>Aceptar  <i class='material-icons'>&#xE876;</i></a></td>";
            echo "<td> <a class='confirmation' onclick='myFunction2()' href='".base_url()."Administrador/CorreoRechazado/".$row2->id."' class='delete' title='Rechazar' data-toggle='tooltip'>Rechazar<i class='material-icons'>&#xE14C;</i></a></td>";
            echo "</tr>";
          }


        }


        ?>

      </tbody>
    </table>
  </div>
</div>    

<div class="container">

  <div id="miModal" class="modal " role="dialog" width= 70>
    <div class="modal-dialog">
      <!-- Contenido del modal -->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
         <h5 class="modal-title" id="exampleModalLongTitle">Detalles.</h5>
         <br>
         <br>
         <form action="">
          <table class="table table-striped">
            <thead>
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
                <th scope="row"></th>
                <th scope="row"></th>
                <th scope="row"></th>
                <th scope="row"></th>
                <th scope="row"></th>
                <th scope="row"></th>
                <th scope="row"></th>
                <th scope="row"></th>
                <th scope="row"></th>
                <th scope="row"></th>
                <th scope="row"></th>
                <td></td>

              </tr>
            </tbody>
          </table>
          


        </form>
      </div>

    </div>

  </div>
  <div class="modal-footer">


  </div>
</div>
</div> 
</body>
</html>                            