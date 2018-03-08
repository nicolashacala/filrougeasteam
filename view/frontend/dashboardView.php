<?php ob_start(); ?>
<a href="index.php?action=addArticle" class="btn btn-success">Ajouter un article</a>
<table style="width: 100%;">
   <tr>
        <th>titre</th>
        <th>auteur</th>
        <th>date de publication</th>
        <th>catégorie</th>
        <th>modifier</th>
        <th>supprimer</th>
    </tr>
<?php
while ($donnees = $reponse->fetch()){
    ?>
    <tr><td><?= htmlspecialchars($donnees['title']) ?></td><td><?= htmlspecialchars($donnees['author']) ?></td><td><?= htmlspecialchars($donnees['date_published']) ?></td><td><?= htmlspecialchars($donnees['categories']) ?></td><td> <a class="btn btn-primary" href="index.php?action=modifyArticle&amp;id=<?= htmlspecialchars($donnees['id']) ?>">modifier</a></td><td> <a class="btn btn-primary" href="index.php?action=deleteArticle&amp;id=<?= htmlspecialchars($donnees['id']) ?>">supprimer</a></td></tr>
    <?php
}
?>
</table>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>