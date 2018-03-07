<?php
namespace Becode\Blog\Model;

require_once('model/Manager.php');

class ArticleFilterManager extends Manager{
    public function getCategories(){
        $db = $this->dbConnect();
        $req = $db->query('SELECT id_category, name_category FROM categories');
    
        return $req;
    }

    public function getCategory($categoryId){
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT name_category FROM categories WHERE id_category = ?');
        $req->execute(array($categoryId));
        $category = $req->fetch();

        return $category;
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

    public function addCatToArticle($articleTitle, $cat){
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id_article FROM blog WHERE title = ?');
        $req->execute(array($articleTitle));
        $idArticle = $req->fetch();
		foreach ($cat as $category) {
		    $db->exec("INSERT INTO blog_categories(id_article, id_category) VALUES($idArticle[0], $category)");
        }
    }

    public function addCategory($category){
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO categories(name_category) VALUES(?)');
        $categoryAdded = $req->execute(array($category));

        return $categoryAdded;
    }
}