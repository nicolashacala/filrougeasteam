<?php ob_start(); ?>
<form class="add_article" action="index.php?action=addArticle" method="POST">
 		<label for="title">Titre</label><br>
	 	<input name="title" type="text" value="<?php if(isset($_POST['title'])){echo htmlspecialchars($_POST['title']);}?>"><br>

	 	<label for="content">Contenu</label><br>
	 	<textarea name="content"><?php if(isset($_POST['content'])){echo htmlspecialchars($_POST['content']);}?></textarea><br>

	 	<label for="author">Author</label><br>
	 	<input name="author" type="text" value="<?php if(isset($_POST['author'])){echo htmlspecialchars($_POST['author']);}?>"><br>
		
        <?php
        while ($donnees = $categories->fetch()){
            ?>
            <label for="checkbox[]"><?= $donnees["name_category"] ?></label><input name="checkbox[]" type="checkbox" value="<?= $donnees["id_category"] ?>">
            <?php
        }
        $categories->closeCursor();
        ?><br>
	 	<button class="btn btn-secondary">Annuler</button>
	 	<button type="submit" class="btn btn-primary">Sauvegarder</button><br>
</form>
<form action="index.php?action=addCategory" method="POST">
    <label for="newCat">Ajouter une nouvelle catégorie:</label>
    <input type="text" name="newCat">
    <input type="submit" value="Ajouter">
</form>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>