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
          <h2><p class="text-center">Consulta de Usuarios Registrados en Sistema</p></h2>

          <?php
          include 'conexion.php';

          $query="SELECT Id, Nombre, Apellido, Email FROM usuarios";
          $result = mysqli_query($link,$query);

          if ($row = mysqli_fetch_array($result)){
             echo "<table class='table table-striped' border = '1'> \n";
             echo "<tr><td>ID</td><td>Nombre</td><td>Apellido</td><td>E-Mail</td></tr> \n";
             do {
                   echo "<tr><td>".$row["Id"]."</td><td>".$row["Nombre"]."</td><td>".$row["Apellido"]."</td><td>".$row["Email"]."</td></tr> \n";
                } while ($row = mysqli_fetch_array($result));
                echo "</table> \n";

          } else {
          echo "¡ No se ha encontrado ningún registro !";
          }
          ?>

          <br>
          <br>
          <br>
          <h2><p class="text-center">Consulta de Administradores Registrados en Sistema</p></h2>

          <?php
          include 'conexion.php';

          $query="SELECT Id, Nombre,Email FROM administrador";
          $result = mysqli_query($link,$query);

          if ($row = mysqli_fetch_array($result)){
             echo "<table class='table table-striped' border = '1'> \n";
             echo "<tr><td>ID</td><td>Nombre</td><td>E-Mail</td></tr> \n";
             do {
                   echo "<tr><td>".$row["Id"]."</td><td>".$row["Nombre"]."</td><td>".$row["Email"]."</td></tr> \n";
                } while ($row = mysqli_fetch_array($result));
                echo "</table> \n";

          } else {
          echo "¡ No se ha encontrado ningún registro !";
          }
          ?>
