<?php ob_start(); ?>
<div id="content">
    <div class="inner">
<?php
var_dump($articles);
while ($data = $articles->fetch()){
    ?>
    <article class="box post post-excerpt">
        <header>
            <h2><?= htmlspecialchars($data['title']) ?></h2>
        </header>
        <p>
            <?= nl2br(htmlspecialchars($data['content'])) ?><br />
        </p>
        <p><em><?= htmlspecialchars($data['author']) ?></em></p>
    </article>
    <em>le <?= $data['date_published'] ?></em>
    <?php
}
$articles->closeCursor();
?>
    </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>