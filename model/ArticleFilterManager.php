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
}