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

function post(){
    $postManager = new \Openclassroom\Blog\Model\ArticleManager();
    $post = $postManager->getPost($_GET['id']);
    
    $commentManager = new \Openclassroom\Blog\Model\CommentManager();
    $comments = $commentManager->getComments($_GET['id']);

    require('view/frontend/postView.php');
}

function addComment($postId, $author, $comment){
    $commentManager = new \Openclassroom\Blog\Model\CommentManager();
    $affectedLines = $commentManager->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}

function comment(){
    $commentManager = new \Openclassroom\Blog\Model\CommentManager();
    $comment = $commentManager->getComment($_GET['id']);

    require('view/frontend/modifyCommentView.php');
}

function modifyComment($newComment, $commentId){
    $commentManager = new \Openclassroom\Blog\Model\CommentManager();
    $newComment = $commentManager->insertNewComment($newComment, $commentId);
    
    header('location: index.php?action=modifyComment&id=' . $commentId);
}