<?php
include 'conexion.php';

$email = $_POST['Email'];
$password = $_POST['Password'];

$query = "SELECT * FROM administrador WHERE Email ='$email' && Password ='$password' ";

$result = mysqli_query($link,$query);

$count = mysqli_num_rows($result);

if($count > 0){
	session_start();

	$array = mysqli_fetch_array($result);

	$_SESSION['Id'] = $array['Id'];
	$_SESSION['Nombre'] = $array['Nombre'];
	$_SESSION['Email'] = $array['Email'];

	Header('Location: administrar.php?usuario='. $array['Nombre']);
}else {
  include 'accederadmin.php';
  ?>
 <script languaje="javascript">
  alert("Nombre de usuario o clave incorrectos!");
 </script>
<?php
}

mysql_free_result($result);

mysql_close();
 ?>
