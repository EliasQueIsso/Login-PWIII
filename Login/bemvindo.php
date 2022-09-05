<?php 
session_start(); 
include("validar_login.php");
?>

<h2> Olá, <?php echo $_SESSION["usuario"];?></h2>