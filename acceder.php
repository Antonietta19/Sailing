<?php include 'header.php'; ?>
        <?php include 'navegador.php'; ?>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <img class="img-responsive" src="img/bannerhorizontal.png" alt="">
            </div>
          </div>
          <br>

          <div class="row">
            <div class="col-md-4">
              <span></span>
            </div>
            <div class="col-md-4">
              <form class="form-horizontal" method="post" action="validaruser.php">
              <fieldset>

              <legend>Ingresa a Sailing Creaciones</legend>

              <div class="form-group">
                <label class="col-md-4 control-label" for="Email">Email</label>
                <div class="col-md-5">
                <input type="email" id="Email" name="Email" placeholder="Email" class="form-control input-md" required maxlenght="40">

                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4 control-label" for="Password">Contraseña</label>
                <div class="col-md-5">
                  <input id="Password" name="Password" placeholder="Contraseña" class="form-control input-md" required maxlenght="15" type="password">

                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4 control-label" for="Enviar"></label>
                <div class="col-md-4">
                  <button type="submit "id="Enviar" name="submit" class="btn btn-primary">Ingresar</button>
                </div>
              </div>
              <h3><p class="text-center"> ¿No estas registrado? <br> Ingresa <a href="registro.php">Aqui</a></p></h3>
              <h3><p class="text-center"> ¿Eres administrador? <br> Ingresa <a href="accederadmin.php">Aqui</a></p></h3>


              </fieldset>
              </form>
            </div>
            <div class="col-md-4">
              <span></span>
            </div>
          </div>



        </div>


        <?php include 'footer.php'; ?>
