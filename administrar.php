<?php session_start() ?>
<?php include 'seguridad.php' ?>
<?php include 'header.php'; ?>
        <?php include 'navegador-administrador.php'; ?>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <img class="img-responsive" src="img/bannerhorizontal.png" alt="">
            </div>
          </div>
          <br>
          <h1><p class="text-center">Bienvenido(a) <?php echo $_GET['usuario']; ?></p></h1>
          <br>
          <h3><p class="text-center">Ya puedes ingresar al Cpanel</p></h3>
          <br>
          <h3><p class="text-center"><a href="cpanel-admin.php">CPanel</a></p></h3>



<?php include 'footer.php'; ?>
