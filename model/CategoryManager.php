<?php
namespace Becode\Blog\Model;

require_once('model/Manager.php');

class CategoryManager extends Manager{
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

    public function addCategory($category){
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO categories(name_category) VALUES(?)');
        $categoryAdded = $req->execute(array($category));

        return $categoryAdded;
    }
}