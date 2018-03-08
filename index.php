<?php
session_start();
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
        elseif($_GET['action'] == 'connection'){
            if (isset($_POST["connexion"]) && isset($_POST["password"])){
                adminConnect($_POST["connexion"], $_POST["password"]);
            }
        }
        elseif($_GET['action'] == 'manage'){
            if(isset($_SESSION['connexionAdmin']) && $_SESSION['connexionAdmin']){
                showDashboard();
            }
            else{
                throw new Exception('Vous devez être connecté pour accéder au Dashboard');
            }
        }
        elseif($_GET['action'] == 'disconnection'){
            if(isset($_SESSION['connexionAdmin']) && $_SESSION['connexionAdmin']){ 
            adminDisconnect();
            }
            else{
                throw new Exception('Vous devez être connecté pour effectuer cette action');
            }
        }
        elseif($_GET['action'] == 'deleteArticle'){
            if(isset($_SESSION['connexionAdmin']) && $_SESSION['connexionAdmin']){ 
                if(isset($_GET['id'])){
                    removeArticle($_GET['id']);
                }
                else{
                    throw new Exception('Aucun article spécifié');
                }
            }
            else{
                throw new Exception('Vous devez être connecté pour effectuer cette action');
            }
        }
        elseif($_GET['action'] == 'modifyArticle'){
            if(isset($_SESSION['connexionAdmin']) && $_SESSION['connexionAdmin']){
                if(isset($_GET['id'])){
                    if(isset($_POST["checkbox"]) and $_POST["title"] !="" and $_POST["content"] !="" and $_POST["author"]!=""){
                        modifyArticle($_POST["title"], $_POST["content"], $_POST["author"], $_GET['id'], $_POST["checkbox"]);
                    }
                    else{
                        getModificationForm($_GET['id']);
                    }
                }
                else{
                    throw new Exception('Aucun article spécifié');
                }
            }
            else{
                throw new Exception('Vous devez être connecté pour effectuer cette action');
            }
        }
        elseif($_GET['action'] == 'addArticle'){
            if(isset($_SESSION['connexionAdmin']) && $_SESSION['connexionAdmin']){
                if(isset($_POST["checkbox"]) and $_POST["title"] !="" and $_POST["content"] !="" and $_POST["author"]!="" ){
                    createArticle($_POST["title"], $_POST["content"], $_POST["author"], $_POST["checkbox"]);
                }
                else{
                    getAddForm();
                }
            }
            else{
                throw new Exception('Vous devez être connecté pour ajouter un article');
            }
        }
        elseif($_GET['action'] == 'addCategory'){
            if(isset($_SESSION['connexionAdmin']) && $_SESSION['connexionAdmin']){
                createCategory($_POST['newCat']);
            }
            else{
                throw new Exception('Vous devez être connecté pour ajouter une catégorie');
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