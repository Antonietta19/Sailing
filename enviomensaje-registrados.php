<?php
include 'conexion.php';

$nombre=$_POST['Nombre'];
$apellido=$_POST['Apellido'];
$email=$_POST['Email'];
$mensaje=$_POST['Mensaje'];

$query = "INSERT INTO mensajes (Nombre, Apellido, Email, Mensaje) VALUES('$nombre','$apellido','$email','$mensaje')";
$result = mysqli_query($link,$query);

if($result == TRUE){
  include 'index-registrados.php';
  ?>
  <script languaje="javascript" type="text/javascript">

  alert("Gracias por tu Mensaje");

  </script>

  <?php
}


?>
