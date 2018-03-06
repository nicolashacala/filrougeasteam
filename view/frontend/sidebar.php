<div id="sidebar">
<!-- Logo -->
    <h1 id="logo"><a href="#">LE SYNDICAT DES LOCATAIRES</a></h1>

<!-- Nav -->
    <nav id="nav">
        <ul>
            <li class="current"><a href="#">Dernières Infos</a></li>
            <li><a id="horaire">Horaires</a></li>
            <li><a id="quiSommesNous">Qui sommes nous?</a></li>
            <li><a id="nousContacter">Nous Contacter</a></li>
        </ul>
    </nav>

<!-- Recent Comments -->
    <section class="box recent-comments">
        <header>
            <h2>Catégories</h2>
        </header>
        <ul>
        <?php
            while ($data = $categories->fetch()){
                ?>
                    <li><a href="index.php?action=filter&category=<?= $data['id_category'] ?>"><?= ucfirst(htmlspecialchars($data['name_category'])) ?></a></li>
                <?php
            }
        $categories->closeCursor();
        ?>
        </ul>
    </section>
    <section class="box recent-comments">
        <header>
            <h2>Authors</h2>
        </header>
        <ul>
        <?php
            while ($data = $authors->fetch()){
                ?>
                    <li><a href="index.php?action=filter&author=<?= $data['author'] ?>"><?= ucfirst(htmlspecialchars($data['author'])) ?></a></li>
                <?php
            }
        $authors->closeCursor();
        ?>
        </ul>
    </section>

<!-- Copyright -->
    <ul id="copyright">
        <li>&copy; Untitled.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
    </ul>

</div>