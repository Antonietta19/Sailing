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
          <br>
          <br>
          <div class="row">
            <div class="col-md-2 col-md-offset-4">
              <form class="form-horizontal" method="post" action="consultar-user-simple.php">
                <fieldset>
                  <button type="submit "id="Enviar" name="submit" class="btn btn-primary">Consultar Perfil de Usuario</button>
                </fieldset>
              </form>
            </div>
            <div class="col-md-2">
                <form class="form-horizontal" method="post" action="modificar-perfil.php">
                  <fieldset>
                    <button type="submit "id="Enviar" name="submit" class="btn btn-primary">Modificar Perfil de Usuario</button>
                  </fieldset>
                </form>
            </div>
            </div>
          </div>

<?php include 'footer.php'; ?>
