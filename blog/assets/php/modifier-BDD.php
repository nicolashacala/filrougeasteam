<?php 
try{
$bdd = new PDO('mysql:host=localhost;dbname=filrougeasteam;charset=utf8', 'root', '');
}
catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
}


$title = $_POST["title"];
$content = $_POST["content"];
$author = $_POST["author"];
$id = $_GET["id"];

if (isset($_POST["checkbox"]) and $_POST["title"] !="" and $_POST["content"] !="" and $_POST["author"]!="" ) {
	$bdd->exec("UPDATE blog SET title = $title, content = $content, author = $author WHERE id_article = $id");



// ajout table blog_categories
		
		$bdd->exec("DELETE FROM blog_categories WHERE id_article = $id");
		foreach ($_POST["checkbox"] as $cat) {
		$bdd->exec("INSERT INTO blog_categories(id_article, id_category) VALUES($id, $cat)");
		}


header('Location: dashboard.php');
}

 ?>