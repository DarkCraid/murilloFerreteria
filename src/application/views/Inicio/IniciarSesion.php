<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Iniciar Sesion</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css');?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css');?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/bower_components/Ionicons/css/ionicons.min.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/dist/css/AdminLTE.min.css');?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/plugins/iCheck/square/blue.css');?>">


  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

<style>
  .login-box-body{background: #fff;
    padding: 30px;
    border-top: 0;
    color: #666;
    border-radius: 10px;
    box-shadow: 0px 0px 30px #000;
    font-size: 20px;}

    input{    border-radius: 5px !important;
    font-size: 20px !important;
    font-weight: bold !important;
    padding: 20px 10px !important;}

    .has-feedback>span{    margin-top: 5px;}
    .centered{margin-top: 10%;}
    .btn{    border-radius: 4px !important;
    font-weight: bold !important;
    font-size: 15px !important;}

    .fondo{position: absolute;z-index: -1;height: 100vh; width: 100%;}
    .error{position: relative;
    top: 20px !important;font-weight: bold;}
</style>


</head>
<body>
  <img src="<?= base_url('assets/sources/img/fondos/login.jpg'); ?>" alt="" class="fondo">
<div class="col-xs-12 col-md-6 col-lg-4 col-md-offset-3 col-lg-offset-4 centered">
  <div class="login-box-body">
    <div class="login-logo">
      <a><b>Iniciar Sesion</b></a>
    </div>
    <p class="login-box-msg">Ferreteria murillo's</p>

      <div class="form-group has-feedback">
        <input type="text" class="form-control inpLogin" placeholder="Usuario o Email" id="user">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control inpLogin" placeholder="Contraseña" id="pssw">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Recordar Contraseña</label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="button" class="btn btn-success btn-block btn-flat">Entrar</button>
        </div>
        <!-- /.col -->
      </div>
    <!-- /.social-auth-links -->
    <a href="#">Recuperar Contraseña</a><br>
    <span class="error text-danger"></span>
  </div>
  <!-- /.login-box-body -->
</div>

<script src="<?php echo base_url('assets/AdminLTE/bower_components/jquery/dist/jquery.min.js');?>"></script>
<script src="<?= base_url('assets/sources/js/generales.js'); ?>"></script>

<script>
  $('.inpLogin').keypress(function(e) {
      if(e.which == 13) {
          dataLogin();
      }
  });

  var dataLogin = function(){
  getAjax('POST','Login/entrar',{
    'user': $('#user').val(),
    'pssw': $('#pssw').val()
    },
    "loginMe"
  );
}

$('.btn-success').click(function(){
  dataLogin();
});


function result(from,data){
  switch(from){
    case "loginMe":
    console.log(data);
      data = JSON.parse(data);
      if(data.type == "error"){
        $('.error').text(data.msg);
      }else
         getAjax('POST','Inicio',{},false);
      break;
  }
}

</script>
</body>
</html>
