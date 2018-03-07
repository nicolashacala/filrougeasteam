<?php 
//charger la base de données
try{
$bdd = new PDO('mysql:host=localhost;dbname=filrougeasteam;charset=utf8', 'root', '');
}
catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
}
// recuperation id de l'article
$id= $_GET["id"];

// creation des catégorie
$reponse = $bdd->query('SELECT * FROM categories');
$checked = $bdd->query("SELECT * FROM blog_categories WHERE id_article = $id");
$checkboxHTML='';
while ($donnees = $reponse->fetch())
{
	$checkedOK = false;
	while($checkedF = $checked->fetch()){
			echo"0";
		if($donnees["id_category"] == $checkedF["id_category"]){
			$checkedOK = true;
			echo"1";

		}
	}

	if ($checkedOK) {
		$checkboxHTML .= '<label for="checkbox[]">'.$donnees["name_category"].'</label><input name="checkbox[]" checked="" type="checkbox" value='.$donnees["id_category"].'>';
		echo "2";
	}
	else{
	$checkboxHTML .= '<label for="checkbox[]">'.$donnees["name_category"].'</label><input name="checkbox[]" type="checkbox" value='.$donnees["id_category"].'>';
	}
	echo "3";
};



$reponse = $bdd->query("SELECT blog.id_article id, blog.title title, blog.content content, blog.date_published date_published, blog.author author, GROUP_CONCAT(categories.name_category SEPARATOR ', ') categories FROM blog_categories bc INNER JOIN blog ON bc.id_article = blog.id_article INNER JOIN categories ON bc.id_category = categories.id_category WHERE blog.id_article=$id GROUP BY blog.id_article");

$donnees = $reponse->fetch();



 ?>
 <!DOCTYPE html>
 <html lang="fr">
 <head>
 	<meta charset="UTF-8">
 	<title>dashboard modifier</title>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
 </head>
 <body>
 	<form action="">
 		<label for="title">Titre</label><br>
	 	<input name="title" type="text" value="<?=$donnees["title"]?>"><br>

	 	<label for="content">Contenu</label><br>
	 	<textarea name="content"><?=$donnees["content"]?></textarea><br>

	 	<label for="author">Author</label><br>
	 	<input name="author" type="text" value="<?=$donnees["author"]?>"><br>

	 	<?=$checkboxHTML ?><br>

	 	<button class="btn btn-secondary">Annuler</button>
	 	<button class="btn btn-primary">Sauvergarder</button><br>
 	</form>
 	
 	
<style>
	textarea {
		width: 90%;
		height: 350px;
	}
</style>
 </body>
 </html>