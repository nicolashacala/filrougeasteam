<?php
require_once('model/BlogManager.php');
require_once('model/CategoryManager.php');
require_once('model/BlogCategoriesManager.php');

//Visitor 
function listArticles(){
    $blogManager = new \Becode\Blog\Model\BlogManager();
    $articles = $blogManager->getArticles();

    $categoryManager = new \Becode\Blog\Model\CategoryManager();
    $categories = $categoryManager->getCategories();

    $blogManager = new \Becode\Blog\Model\BlogManager();
    $authors = $blogManager->getAuthors();
    
    require('view/frontend/listArticlesView.php');
    
}

function filterByCategory($category){
    $blogCategoriesManager = new \Becode\Blog\Model\BlogCategoriesManager();
    $articles = $blogCategoriesManager->getArticlesByCategory($category);

    $categoryManager = new \Becode\Blog\Model\CategoryManager();
    $categories = $categoryManager->getCategories();

    $CategoryManager = new \Becode\Blog\Model\CategoryManager();
    $category = $CategoryManager->getCategory($category);

    $blogManager = new \Becode\Blog\Model\BlogManager();
    $authors = $blogManager->getAuthors();
    
    require('view/frontend/filteredByCatArticlesView.php');
}

function filterByAuthor($authorName){
    $blogManager = new \Becode\Blog\Model\BlogManager();
    $articles = $blogManager->getArticlesByAuthor($authorName);
    
    $categoryManager = new \Becode\Blog\Model\CategoryManager();
    $categories = $categoryManager->getCategories();

    $blogManager = new \Becode\Blog\Model\BlogManager();
    $authors = $blogManager->getAuthors();

    $blogManager = new \Becode\Blog\Model\BlogManager();
    $author = $blogManager->getAuthor($authorName);

    require('view/frontend/filteredByAuthArticlesView.php');

}


//Administrator
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
    $blogCategoriesManager = new \Becode\Blog\Model\BlogCategoriesManager();
    $reponse = $blogCategoriesManager->getArticlesAndCategory();

    require('view/frontend/dashboardView.php');
}

function removeArticle($articleId){
    $blogManager = new \Becode\Blog\Model\BlogManager();
    $blogManager->deleteArticle($articleId);

    header('location: index.php?action=manage');
}

function modifyArticle($articleTitle, $articleContent, $articleAuthor, $articleId, $category){
    $blogManager = new \Becode\Blog\Model\BlogManager();
    $blogManager->updateArticle($articleTitle, $articleContent, $articleAuthor, $articleId);

    if($modifiedArticle === false){
        throw new Exception('Impossible de modifier l\'article');
    }

    $categoryManager = new \Becode\Blog\Model\CategoryManager();
    $categoryManager->updateCategories($articleId, $category);

    if($modifiedCategory === false){
        throw new Exception('Impossible de modifier la catégorie');
    }
    
    header('location: index.php?action=modifyArticle&id='.$articleId);
}

function createArticle($articleTitle, $articleContent, $articleAuthor, $cat){
    $blogManager = new \Becode\Blog\Model\BlogManager();
    $blogManager->addArticle($articleTitle, $articleContent, $articleAuthor);

    if($articleAdded === false){
        throw new Exception('Impossible d\'ajouter l\'article');
    }

    $blogCategoriesManager = new \Becode\Blog\Model\BlogCategoriesManager();
    $blogCategoriesManager->addCatToArticle($articleTitle, $cat);

    header('location: index.php?action=addArticle');
}

function createCategory($category){
    $categoryManager = new \Becode\Blog\Model\CategoryManager();
    $categoryManager->addCategory($category);

    header('location: index.php?action=addArticle');
}

function getAddForm(){
    $categoryManager = new \Becode\Blog\Model\CategoryManager();
    $categories = $categoryManager->getCategories();

    require('view/frontend/addFormView.php');
}

function getModificationForm($articleId){
    $blogManager = new \Becode\Blog\Model\BlogManager();
    $article = $blogManager->getArticle($articleId);

    $categoryManager = new \Becode\Blog\Model\CategoryManager();
    $categories = $categoryManager->getCategories();

    $blogCategoriesManager = new \Becode\Blog\Model\BlogCategoriesManager();
    $checkedF = $blogCategoriesManager->getCategoryOfArticle($articleId);

    require('view/frontend/modificationFormView.php');
}