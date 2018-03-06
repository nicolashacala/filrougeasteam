<?php
require('controller/frontend.php');

try{
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listArticles') {
            listPosts();
        }
        elseif ($_GET['action'] == 'filter') {
            if (isset($_GET['category'])) {
                filterByCategory($_GET['category']);
            }
            elseif(isset($_GET['author'])){
                filterByAuthor($_GET['author']);
            }
            else {
                throw new Exception('Aucun filtre spécifié!');
            }
        }
    }
    else {
        listArticles();
    }
}
catch(Exception $e){
    echo 'Error: ' . $e->getMessage();
}