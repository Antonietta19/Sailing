<?php session_start() ?>
<?php include 'seguridad.php' ?>
<?php include 'header.php'; ?>
        <?php include 'navegador-registrados.php'; ?>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <img class="img-responsive" src="img/bannerhorizontal.png" alt="">
            </div>
          </div>
          <br>
          <h2><p class="text-center">Perfil de Usuario</p></h2>

          <?php
          include 'conexion.php';
          $ident= ($_SESSION['Id']);

          $query="SELECT Id, Nombre, Apellido, Email FROM usuarios WHERE ID='".$ident."'";
          $result = mysqli_query($link,$query);

          if(mysqli_num_rows($result)) {
                  $row = mysqli_fetch_array($result);
                  $id = $row["Id"];
                  $nombre = $row["Nombre"];
                  $apellido = $row["Apellido"];
                  $email = $row["Email"];
          ?>
          <h2><p class="text-center">
                  <strong>Id:</strong> <?=$id?>
                  <br>

                  <strong>Nombre:</strong> <?=$nombre?>
                  <br>

                  <strong>Apellido:</strong> <?=$apellido?>
                  <br>

                  <strong>Email:</strong><?=$email?>
          </p></h2>
          <?php
              }else {
          ?>
                  <p>El perfil seleccionado no existe o ha sido eliminado.</p>
          <?php
              }
          ?>
<?php include 'footer.php' ?>
