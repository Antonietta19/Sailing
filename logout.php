<?php

 session_start();

 $_SESSION = array();

 session_destroy();
 ?>
 <script languaje="javascript">
 alert("Hasta Pronto!");
 </script>
 <?php
 header("location: index.php");
?>
