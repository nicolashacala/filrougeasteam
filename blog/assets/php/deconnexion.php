<?php 
session_start();
$_SESSION["connexionAdmin"] = false;
header('Location: ../../index.php');
 ?>