<?php 
//charger la base de données
try{
$bdd = new PDO('mysql:host=localhost;dbname=filrougeasteam;charset=utf8', 'root', '');
}
catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
}

//afficher les articles
$msgComplet ='';
$reponse = $bdd->query('SELECT blog.id_article id, blog.title title, blog.content content, blog.date_published date_published, blog.author author, GROUP_CONCAT(categories.name_category SEPARATOR ", ") categories FROM blog_categories bc INNER JOIN blog ON bc.id_article = blog.id_article INNER JOIN categories ON bc.id_category = categories.id_category GROUP BY blog.id_article');

while ($donnees = $reponse->fetch())

 {
	$msgComplet .= '<tr><td>'.$donnees["title"].'</td><td>'.$donnees["author"].'</td><td>'.$donnees["date_published"].'</td><td>'.$donnees["categories"].'</td><td> <a class="btn btn-primary" href="modifier.php?id='.$donnees["id"].'">modifier</a></td><td> <a class="btn btn-danger" href="supprimer.php?id='.$donnees["id"].'">supprimer</a></td></tr>';

 }

 ?>



<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
	<a href="ajout.php" class="btn btn-success">Ajouter un article</a>
	<table style="width: 100%;">
   <tr>

       <th>titre</th>

       <th>auteur</th>

       <th>date de publication</th>

       <th>catégorie</th>

       <th>modifier</th>

       <th>supprimer</th>



   </tr>


   <?=$msgComplet ?>

   

</table>
	
</body>
</html>