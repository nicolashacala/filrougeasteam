<?php 
//charger la base de données
try{
$bdd = new PDO('mysql:host=localhost;dbname=filrougeasteam;charset=utf8', 'root', '');
}
catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
}

$idArticle = $_GET["id"];
$bdd->query("DELETE FROM blog WHERE id_article = $idArticle");

header('Location: dashboard.php');

 ?>