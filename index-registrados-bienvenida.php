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
          <div class="row">
            <div class="col-md-4">
              <span></span>
            </div>
            <div class="col-md-4">
              <h1><p class="text-center">Bienvenido(a) <?php echo $_GET['usuario']; ?></p></h1>
            </div>
            <div class="col-md-4">
              <span></span>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="jumbotron">
                <?php include 'galeria.php'; ?>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="jumbotron">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <img class="img-responsive img-thumbnail"src="img/Antonietta.jpg" alt="Antonietta De Vincenzo">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <p class="text-center"><h2>Conociendo a Sailing Creaciones</h2></p>
                      <p class="text-center"> Sailing Creaciones nació del ocio y el aburrimiento. Hoy en día la creadora de piezas a crochet y tejido
                      amigurumi Antonietta De Vincenzo, se concentra en aumentar sus conocimietos para poder crear
                      piezas con un mayor nivel de detalles y perfección.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="jumbotron">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-12">
                      <h2>Aprendiendo los puntos básicos del Crochet</h2>
                      <img class="img-responsive"src="img/puntosbasicos.jpg" alt="Puntos Basicos">
                      <br>
                      <p><a class="btn btn-primary btn-lg" role="button" href="puntoscrochet.php">Leer más</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <div class="jumbotron">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-12">
                      <form class="form-horizontal" method="post" action="enviomensaje.php">
                      <fieldset>

                      <legend>Comunícate con Nosotros</legend>

                      <div class="form-group">
                        <label class="col-md-4 control-label" for="Nombre">Nombre</label>
                        <div class="col-md-5">
                        <input id="Nombre" name="Nombre" placeholder="Nombre" class="form-control input-md" required maxlenght="25" type="text">

                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-md-4 control-label" for="Apellido">Apellido</label>
                        <div class="col-md-5">
                        <input id="Apellido" name="Apellido" placeholder="Apellido" class="form-control input-md" required maxlenght="25" type="text">

                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-md-4 control-label" for="Email">Email</label>
                        <div class="col-md-5">
                        <input type="email" id="Email" name="Email" placeholder="Email" class="form-control input-md" required maxlenght="40">

                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-md-4 control-label" for="Mensaje">Mensaje</label>
                        <div class="col-md-4">
                          <textarea class="form-control" id="Mensaje" name="Mensaje" rows="7" cols="30" required>Escribe tu mensaje aquí</textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-md-4 control-label" for="Enviar"></label>
                        <div class="col-md-4">
                          <button type="submit "id="Enviar" name="submit" class="btn btn-primary">Enviar</button>
                        </div>
                      </div>

                      </fieldset>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php include 'footer.php'; ?>
