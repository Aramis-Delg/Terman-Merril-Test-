<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/js/bootstrap.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>



    <style type="text/css">
       .login-form {
          width: 340px;
          margin: 50px auto;
      }
      .login-form form {
       margin-bottom: 15px;
       background: #f7f7f7;
       box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
       padding: 30px;
   }
   .login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
</style>
</head>

<body>
    <div class="login-form" width= 340px >
        <form action="<?php echo base_url()?>Login/ingresar" method="post">
            <h2 class="text-center">Log in</h2>       
            <div class="form-group">
                <input type="text" name="usuario" class="form-control" placeholder="Nombre de usuario" required="required">
            </div>
            <div class="form-group">
                <input type="password" name="contrasena" class="form-control" placeholder="contraseña" required="required">
            </div>
            <div class="form-group">
                <button action="" type="submit" class="btn btn-primary btn-block">Entrar</button>
            </div>
            
            <div class="clearfix">
             
            </div>        
        </form>
        <p class="text-center"><a href="<?php echo base_url()?>Registro/">Registrarse</a></p>
        <?php if ($errorArch!='') {
            echo "<div class='alert alert-warning'><strong>Aviso:</strong> ".$errorArch."</div>";
        }else{
            
        }
        ?>
    </div>

</body>
</html>