<?php
session_start();
if (!isset($_SESSION['Nombre']))
    header("location:acceder.php");
?>
