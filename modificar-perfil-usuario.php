<?php session_start() ?>
<?php
include 'conexion.php';

$ident= ($_SESSION['Id']);
$nombre=$_POST['Nombre'];
$apellido=$_POST['Apellido'];
$email=$_POST['Email'];
$password=$_POST['Password'];

$query = "UPDATE usuarios SET Nombre='$nombre', Apellido='$apellido', Email='$email', Password='$password'WHERE id='$ident'";
$result = mysqli_query($link,$query);

if($result == TRUE){
  ?>
  <script languaje="javascript" type="text/javascript">

  alert("Sus datos han sido actualizados");

  </script>

  <?php

}else{
  ?>
  <script languaje="javascript" type="text/javascript">

  alert("Error al actualizar los datos");

  </script>
<?php

}

  Header('Location: modificar-perfil.php');

?>
