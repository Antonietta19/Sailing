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
          <h2><p class="text-center">Modificar Perfil</p></h2>

          <?php
          include 'conexion.php';
          $ident= ($_SESSION['Id']);

          $query="SELECT Id, Nombre, Apellido, Email, Password FROM usuarios WHERE ID='".$ident."'";
          $result = mysqli_query($link,$query);

          if(mysqli_num_rows($result)) {
                  $row = mysqli_fetch_array($result);
                  $id = $row["Id"];
                  $nombre = $row["Nombre"];
                  $apellido = $row["Apellido"];
                  $email = $row["Email"];
                  $pass = $row["Password"];
          }
          ?>



          <div class="row">
            <div class="col-md-4">
              <span></span>
            </div>
            <div class="col-md-4">
              <form class="form-horizontal" method="post" action="modificar-perfil-usuario.php">
              <fieldset>

              <div class="form-group">
                <label class="col-md-4 control-label" for="Nombre">Nombre</label>
                <div class="col-md-5">
                <input id="Nombre" value="<?=$nombre?>" name="Nombre" placeholder="Nombre" class="form-control input-md" required maxlenght="25" type="text">

                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4 control-label" for="Apellido">Apellido</label>
                <div class="col-md-5">
                <input id="Apellido" value="<?=$apellido?>" name="Apellido" placeholder="Apellido" class="form-control input-md" required maxlenght="25" type="text">

                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4 control-label" for="Email">Email</label>
                <div class="col-md-5">
                <input type="email" value="<?=$email?>" id="Email" name="Email" placeholder="Email" class="form-control input-md" required maxlenght="40">

                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4 control-label" for="Password">Contraseña</label>
                <div class="col-md-5">
                  <input id="Password" value="<?=$pass?>" name="Password" placeholder="Contraseña" class="form-control input-md" required maxlenght="15" type="password">

                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4 control-label" for="Enviar"></label>
                <div class="col-md-4">
                  <button type="submit "id="Enviar" name="submit" class="btn btn-primary">Modificar Perfil</button>
                </div>
              </div>

              </fieldset>
              </form>
            </div>
            <div class="col-md-4">
              <span></span>
            </div>
          </div>
        </div>
        <?php include 'footer.php'; ?>
