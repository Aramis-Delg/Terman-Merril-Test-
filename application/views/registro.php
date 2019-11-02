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
      color: #fff;
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
      color: #fff;
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
    <form action="<?php echo base_url()?>index.php/Registro/SubirArchivo" method="post" enctype="multipart/form-data">
      <h2>Registro</h2>
      <p class="hint-text">Crea tu cuenta.</p>
      <?php echo "<h6 id='errorstandard' name='errorstandard'>".$errorArch."</h6><br>"; ?>
      <div class="form-group">
        <input id="curp1" oninput="validarInput(this)" type="text" class="form-control" name="curp" placeholder="CURP">
        <button id="enviar" name="enviar" onclick="ObtenerCurp()" type="button" class="btn btn-primary btn-block" data-toggle="collapse" data-target="#campos" aria-expanded="false" aria-controls="collapseExample" disabled>Consultar CURP</button>
      </div>

      <div id="campos" class="collapse" >
        <div class="form-group">
          <div class="row">
            <div class="col-xs-6"><input type="text" id="nombre" class="form-control" readonly name="nombre" placeholder="nombre" required></div>
            <div class="col-xs-6"><input type="text" id="apellidos" class="form-control" readonly name="apellidos" placeholder="apellido" required></div>
          </div>          
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-xs-6"><input type="text" id="edad" class="form-control" readonly name="edad" placeholder="edad" required></div>
            <div class="col-xs-6"><input type="text" id="genero" class="form-control" readonly name="sexo" placeholder="sexo" required></div>
          </div>          
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-xs-6"><input type="text" id="estado" class="form-control" readonly name="estado" placeholder="Estado" required></div>
            <div class="col-xs-6"><input type="email" class="form-control"  name="email" placeholder="Igresa tu email" required></div>
          </div>          
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <div class="col-xs-6"><input type="text" class="form-control" name="telefono" minlength="10" maxlength="10" placeholder="telefono" required></div>
          <div class="col-xs-6">

            <input type="file" name="archivo" id="nombreArchivo" style="display: none" onchange="CambiarINE()" accept="application/pdf" required>
            <button type="button" id="INE" onclick="document.getElementById('nombreArchivo').click();" class="btn btn-primary btn-block">Adjuntar INE</button></div>
          </div>          
        </div>
        
        <div class="form-group">
          <div class="row">
            <div class="col-xs-6">
              <input type="file" name="archivo2" id="nombreArchivo2" style="display: none" onchange="CambiarCV()" accept="application/pdf" required>
              <button type="button" id="CV" onclick="document.getElementById('nombreArchivo2').click();" class="btn btn-primary btn-block">Adjuntar CV</button></div>
              <div class="col-xs-6"><div class="dropdown">

                <div class="form-group">
                  <label for="vacantes">Vacantes</label>
                  <select id="vacantes" class="form-control" name="vacante">

                    <?php foreach ($verVacantes as $value){  

                      echo "<option name='vacante' value='".$value->id."'>".$value->vacante."</option>";

                    } ?>    
                  </select>

                </div>


              </div></div>
            </div>          
          </div>       
          <div class="form-group">
          </div>
          <div class="form-group">
            <button type="submit" id="guardar" class="btn btn-primary btn-block">Registrarse</button>
          </div>
        </form>
      </div>
    </body>
    </html> 
    <script type="text/javascript">
      $(document).ready(function(){
        $('input[type="file"]').change(function(e){
            var fileName = e.target.files[0].name;
            alert('El archivo "' + fileName +  '" ha sido cargado.\nSi deseas cambiar el archivo solo da clic sobre el botón nuevamente.');
        });
    });

      function CambiarINE(){  
        if( document.getElementById("nombreArchivo").files.length == 0 ){
        }else{
          document.getElementById("INE").innerHTML="INE Seleccionado";
        }
      }

      function CambiarCV(){  
        if( document.getElementById("nombreArchivo2").files.length == 0 ){
        }else{
          document.getElementById("CV").innerHTML="CV Seleccionado";
        }
      }

      $("#guardar").attr("disabled", true);  
      function get_datos_curp(_curp){
       $("#area_curp").html(datos)
     }

     function validarInput(input) {
       var curp = input.value.toUpperCase();

       if (curpValida(curp)) {
        $("#enviar").attr("disabled", false); 

      } else {
        $("#enviar").attr("disabled", true);  

      }

        //resultado.innerText = "CURP: " + curp + "\nFormato: " + valido;
      }

      function curpValida(curp) {
        var re = /^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0\d|1[0-2])(?:[0-2]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/,
        validado = curp.match(re);

        if (!validado)  //Coincide con el formato general?
          return false;

        //Validar que coincida el dígito verificador
        function digitoVerificador(curp17) {
          var diccionario  = "0123456789ABCDEFGHIJKLMNÑOPQRSTUVWXYZ",
          lngSuma      = 0.0,
          lngDigito    = 0.0;
          for(var i=0; i<17; i++)
            lngSuma= lngSuma + diccionario.indexOf(curp17.charAt(i)) * (18 - i);
          lngDigito = 10 - lngSuma % 10;
          if(lngDigito == 10)
            return 0;
          return lngDigito;
        }
        if (validado[2] != digitoVerificador(validado[1])) 
          return false;
    return true; //Validado
  }

  var baseURL= "<?php echo base_url();?>";



                // Comment or remove the below change event code if you want send AJAX request from external script file
                function ObtenerCurp(){
                  var curp = $('#curp1').val();
                  $('.collapse').collapse("hide");
                  $('#errorstandard').text('');
                  $.ajax({
                    url:'<?=base_url()?>index.php/Registro/RevisarCurp',
                    method: 'post',
                    data: {curp: curp},
                    dataType: 'json',
                    success: function(response){
                            //var aux = response;

                            if(response != null){
                                // Read values
                                var nombre = response.nombre;
                                var apellidos = response.apellidos;
                                var fecha_nacimiento = response.fecha_nacimiento;
                                var genero = response.genero;
                                var estado = response.estado;
                                var edad = response.edad;
                                $('#nombre').val(nombre);
                                $('#apellidos').val(apellidos);
                                $('#f_nac').val(fecha_nacimiento);
                                $('#genero').val(genero);
                                $('#estado').val(estado);
                                $('#edad').val(edad);
                                $("#guardar").attr("disabled", false);
                                $('.collapse').collapse("show");
                                if (response == 'no hay nada'){
                                  $('#errorstandard').text('Intente nuevamente');
                                  $('.collapse').collapse("hide");
                                  console.log('No pasa datos');
                                }
                                if (response == 'datos incorrectos'){
                                  $('#errorstandard').text('Verifica tu CURP e intenta nuevamente');
                                  $('.collapse').collapse("hide");
                                  console.log('No pasa datos');
                                }
                              }else{
                               $('#error1').attr("display", "block"); 
                               $('.collapse').collapse("hide");
                               console.log('No pasa datos');
                             }


                           }
                         });
                };
              </script>