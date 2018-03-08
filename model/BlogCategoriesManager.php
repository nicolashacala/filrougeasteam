<?php
namespace Becode\Blog\Model;

require_once('model/Manager.php');

class BlogCategoriesManager extends Manager{
    public function getArticlesAndCategory(){
        $db = $this->dbConnect();
        $req = $db->query('SELECT blog.id_article id, blog.title title, blog.content content, blog.date_published date_published, blog.author author, GROUP_CONCAT(categories.name_category SEPARATOR ", ") categories FROM blog_categories bc INNER JOIN blog ON bc.id_article = blog.id_article INNER JOIN categories ON bc.id_category = categories.id_category GROUP BY blog.id_article');
        
        return $req;
    }

    public function getArticlesByCategory($category){
        $db = $this->dbConnect();
        $filteredArticles = $db->prepare('SELECT blog.* FROM blog INNER JOIN blog_categories ON blog.id_article = blog_categories.id_article WHERE blog_categories.id_category = ?');
        $filteredArticles->execute(array($category));

        return $filteredArticles;
    }
    
    public function getCategoryOfArticle($articleId){
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id_category FROM blog_categories WHERE id_article = ? ORDER BY id_category');
        $req->execute(array($articleId));
        $catOfArticle = $req->fetchAll();

        return $catOfArticle;
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

    public function updateCategories($articleId, $category){
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM blog_categories WHERE id_article = ?');
        $req->execute(array($articleId));

        foreach ($category as $cat) {
            $req = $db->prepare("INSERT INTO blog_categories(id_article, id_category) VALUES(?, ?)");
            $req->execute(array($articleId, $cat));
        }
    }
}