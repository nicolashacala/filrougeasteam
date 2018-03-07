<?php 
//charger la base de données
try{
$bdd = new PDO('mysql:host=localhost;dbname=filrougeasteam;charset=utf8', 'root', '');
}
catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
}
// creation des catégorie
$reponse = $bdd->query('SELECT * FROM categories');

$checkboxHTML='';
while ($donnees = $reponse->fetch())
{
	$checkboxHTML .= '<label for="checkbox[]">'.$donnees["name_category"].'</label><input name="checkbox[]" type="checkbox" value='.$donnees["id_category"].'>';
};
	
	
	 if(isset($_POST["checkbox"]) and $_POST["title"] !="" and $_POST["content"] !="" and $_POST["author"]!="" ){
		
		
	 	// ajout table article
		$title = htmlspecialchars($_POST["title"]);
		$content = htmlspecialchars($_POST["content"]);
		$author = htmlspecialchars($_POST["author"]);

		$bdd->exec("INSERT INTO blog(title, content, author) VALUES('$title', '$content', '$author')");

		

		// ajout table blog_categories
		$idArticle = $bdd->query("SELECT id_article FROM blog WHERE title = '$title'");
		$idArticle = $idArticle->fetch();
		echo($idArticle[0]);
		foreach ($_POST["checkbox"] as $cat) {
		$bdd->exec("INSERT INTO blog_categories(id_article, id_category) VALUES($idArticle[0], $cat)");
		}

		header('Location: dashboard.php');



	}



 ?>
 <!DOCTYPE html>
 <html lang="fr">
 <head>
 	<meta charset="UTF-8">
 	<title>dashboard modifier</title>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
 </head>
 <body>
 	<form action="" method="POST">
 		<label for="title">Titre</label><br>
	 	<input name="title" type="text"><br>

	 	<label for="content">Contenu</label><br>
	 	<textarea name="content"></textarea><br>

	 	<label for="author">Author</label><br>
	 	<input name="author" type="text"><br>
		
		<?=$checkboxHTML ?><br>

	 	<button class="btn btn-secondary">Annuler</button>
	 	<button type="submit" class="btn btn-primary">Sauvergarder</button><br>
 	</form>
 	
 	
<style>
	textarea {
		width: 90%;
		height: 350px;
	}
</style>
 </body>
 </html>