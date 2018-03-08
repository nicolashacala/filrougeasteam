<?php ob_start(); ?>
<form class="margin_form" action="index.php?action=modifyArticle&amp;id=<?= $article["id_article"] ?>" method="POST">
<label for="title">Titre</label><br>
<input name="title" type="text" value="<?= $article["title"] ?>"><br>

<label for="content">Contenu</label><br>
<textarea name="content" rows="15"><?= $article["content"] ?></textarea><br>

<label for="author">Author</label><br>
<input name="author" type="text" value="<?= $article["author"] ?>"><br>
<?php
while ($donnees = $categories->fetch())
{
	$checkedOK = false;
	$nb_data = count($checkedF);
	for ($i=0; $i < $nb_data; $i++) { 
		if($donnees["id_category"] == $checkedF[$i]["id_category"]){
			$checkedOK = true;
		}
	}
	if ($checkedOK == true) {
        ?>
		<label for="checkbox[]"><?= htmlspecialchars($donnees["name_category"]) ?></label><input name="checkbox[]" checked="" type="checkbox" value="<?= htmlspecialchars($donnees["id_category"]) ?>">
		<?php
	}
	else{
        ?>
	    <label for="checkbox[]"><?= htmlspecialchars($donnees["name_category"]) ?></label><input name="checkbox[]" type="checkbox" value="<?= htmlspecialchars($donnees["id_category"]) ?>">
        <?php
    }
}
$categories->closeCursor();
?>

<button class="btn btn-secondary">Annuler</button>
<button class="btn btn-primary">Sauvergarder</button><br>
</form>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>