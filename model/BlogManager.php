<?php
namespace Becode\Blog\Model;

require_once('model/Manager.php');

class BlogManager extends Manager{
    public function getArticles(){
        $db = $this->dbConnect();
        $req = $db->query('SELECT id_article, title, content, author, DATE_FORMAT(date_published, \'%d/%m/%Y à %Hh%imin%ss\') AS date_published FROM blog ORDER BY date_published DESC LIMIT 0, 5');
    
        return $req;
    }

    public function getArticlesToDashboard(){
        $db = $this->dbConnect();
        $req = $db->query('SELECT id_article, title, content, author, DATE_FORMAT(date_published, \'%d/%m/%Y à %Hh%imin%ss\') AS date_published FROM blog');
    
        return $req;
    }

    public function getArticlesByAuthor($author){
        $db = $this->dbConnect();
        $filteredArticles = $db->prepare('SELECT title, content, author, DATE_FORMAT(date_published, \'%d/%m/%Y à %Hh%imin%ss\') AS date_published FROM blog WHERE author = ? ORDER BY date_published DESC LIMIT 0, 5');
        $filteredArticles->execute(array($author));

        return $filteredArticles;
    }

    public function getAuthors(){
        $db = $this->dbConnect();
        $authors = $db->query('SELECT DISTINCT author FROM blog');

        return $authors;
    }

    public function getAuthor($authorName){
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT author FROM blog WHERE author = ?');
        $req->execute(array($authorName));
        $author = $req->fetch();

        return $author;
    }

    public function getArticle($articleId){
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT blog.* FROM blog WHERE id_article = ?');
        $req->execute(array($articleId));
        $article = $req->fetch();
    
        return $article;
    }

    public function deleteArticle($articleId){
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM blog WHERE id_article = ?');
        $req->execute(array($articleId));
    }

    public function updateArticle($articleTitle, $articleContent, $articleAuthor, $articleId){
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE blog SET title = ?, content = ?, author = ? WHERE id_article = ?');
        $modifiedArticle = $req->execute(array($articleTitle, $articleContent, $articleAuthor, $articleId));
        
        return $modifiedArticle;
    }

    public function addArticle($articleTitle, $articleContent, $articleAuthor){
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO blog(title, content, author) VALUES(?, ?, ?)');
        $articleAdded = $req->execute(array($articleTitle, $articleContent, $articleAuthor));

        return $articleAdded;
    }
}