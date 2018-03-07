<?php
require_once('model/ArticleManager.php');
require_once('model/ArticleFilterManager.php');

function listArticles(){
    $articleManager = new \Becode\Blog\Model\ArticleManager();
    $articles = $articleManager->getArticles();

    $articleFilterManager = new \Becode\Blog\Model\ArticleFilterManager();
    $categories = $articleFilterManager->getCategories();

    $articleFilterManager = new \Becode\Blog\Model\ArticleFilterManager();
    $authors = $articleFilterManager->getAuthors();
    
    require('view/frontend/listArticlesView.php');
    
}

function filterByCategory($category){
    $articleManager = new \Becode\Blog\Model\ArticleManager();
    $articles = $articleManager->getArticlesByCategory($category);

    $articleFilterManager = new \Becode\Blog\Model\ArticleFilterManager();
    $categories = $articleFilterManager->getCategories();

    $articleFilterManager = new \Becode\Blog\Model\ArticleFilterManager();
    $category = $articleFilterManager->getCategory($category);

    $articleFilterManager = new \Becode\Blog\Model\ArticleFilterManager();
    $authors = $articleFilterManager->getAuthors();
    
    require('view/frontend/filteredByCatArticlesView.php');
}

function filterByAuthor($authorName){
    $articleManager = new \Becode\Blog\Model\ArticleManager();
    $articles = $articleManager->getArticlesByAuthor($authorName);
    
    $articleFilterManager = new \Becode\Blog\Model\ArticleFilterManager();
    $categories = $articleFilterManager->getCategories();

    $articleFilterManager = new \Becode\Blog\Model\ArticleFilterManager();
    $authors = $articleFilterManager->getAuthors();

    $articleFilterManager = new \Becode\Blog\Model\ArticleFilterManager();
    $author = $articleFilterManager->getAuthor($authorName);

    require('view/frontend/filteredByAuthArticlesView.php');

}

function adminConnect($user, $password){
    if($user == "admin" && $password == "tamere"){
        $_SESSION["connexionAdmin"] = true;

        header('location: index.php');
    }
}

function adminDisconnect(){
    $_SESSION["connexionAdmin"] = false;
    $_SESSION = array();
    session_destroy();

    header('location: index.php');
}

function showDashboard(){
    $articleManager = new \Becode\Blog\Model\ArticleManager();
    $reponse = $articleManager->getArticlesAndCategory();

    require('view/frontend/dashboardView.php');
}

function removeArticle($articleId){
    $articleManager = new \Becode\Blog\Model\ArticleManager();
    $articleManager->deleteArticle($articleId);

    header('location: index.php?action=manage');
}

function createArticle($articleTitle, $articleContent, $articleAuthor, $cat){
    $articleManager = new \Becode\Blog\Model\ArticleManager();
    $articleManager->addArticle($articleTitle, $articleContent, $articleAuthor);

    if($articleAdded == false){
        throw new Exception('Impossible d\'ajouter l\'article');
    }

    $articleFilterManager = new \Becode\Blog\Model\ArticleFilterManager();
    $articleFilterManager->addCatToArticle($articleTitle, $cat);

    header('location: index.php?action=addArticle');
}

function createCategory($category){
    $articleFilterManager = new \Becode\Blog\Model\ArticleFilterManager();
    $articleFilterManager->addCategory($category);

    header('location: index.php?action=addArticle');
}

function getAddForm(){
    $articleFilterManager = new \Becode\Blog\Model\ArticleFilterManager();
    $categories = $articleFilterManager->getCategories();

    require('view/frontend/addFormView.php');
}