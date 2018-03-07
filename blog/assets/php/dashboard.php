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
	$msgComplet .= '<tr><td>'.$donnees["title"].'</td><td>'.$donnees["author"].'</td><td>'.$donnees["date_published"].'</td><td>'.$donnees["categories"].'</td><td> <a class="btn btn-primary" href="modifier.php?id='.$donnees["id"].'">modifier</a></td><td> <a class="btn btn-primary" href="supprimer.php?id='.$donnees["id"].'">supprimer</a></td></tr>';

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

<!-- modal modifier -->

<div class="modal fade" id="modal-ajout">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
	 		<label for=""></label>
		 	<input type="text">

		 	<label for=""></label>
		 	<input type="text">

		 	<label for=""></label>
		 	<input type="text">

		 	<label for=""></label>
		 	<input type="text">

		 	<label for=""></label>
		 	<input type="text">

		 	<label for=""></label>
		 	<input type="text">
 		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



</body>
</html>