<?php
include 'conexion.php';

$nombre=$_POST['Nombre'];
$apellido=$_POST['Apellido'];
$email=$_POST['Email'];
$password=$_POST['Password'];
$password2=$_POST['Password2'];

if ($password <> $password2){
  include 'registro.php';
  ?>
  <script languaje="javascript" type="text/javascript">

  alert("Contraseñas no coinciden, rellene correctamente los campos");

  </script>

  <?php
}else {

  $existe = "SELECT Email FROM usuarios WHERE Email ='$email'";

  $result_existe = mysqli_query($link,$existe);

  $count_existe = mysqli_num_rows($result_existe);

  if ($count_existe > 0) {
    include 'registro.php';
    ?>
    <script languaje="javascript" type="text/javascript">

    alert("Su correo ya ha sido registrado");

    </script>

    <?php
  }else {
    $query = "INSERT INTO usuarios (Nombre, Apellido, Email, Password) VALUES('$nombre','$apellido','$email','$password')";
    $result = mysqli_query($link,$query);

    if($result == TRUE){
      include 'acceder.php';
      ?>
      <script languaje="javascript" type="text/javascript">

      alert("Gracias por registrarse correctamente, puede ingresar ahora.");

      </script>

      <?php
  	}else {
  		echo "Ocurrió un error inesperado";
  	}

  }

}

 ?>
