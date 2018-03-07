<?php 
	 // Start the session
		session_start();

	if (isset($_POST["connexion"]) && isset($_POST["password"])){
	$user = htmlspecialchars($_POST["connexion"]);
	$password = htmlspecialchars($_POST["password"]);

	if($user == "admin" && $password == "tamere"){
		$_SESSION["connexionAdmin"] = true;

	}




}

	
header('Location: ../../index.php');


 ?>

	
 