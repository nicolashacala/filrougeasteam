<?php
namespace Becode\Blog\Model;

require_once('model/Manager.php');

class ArticleManager extends Manager{
    public function getArticles(){
        $db = $this->dbConnect();
        $req = $db->query('SELECT id_article, title, content, author, DATE_FORMAT(date_published, \'%d/%m/%Y à %Hh%imin%ss\') AS date_published FROM blog ORDER BY date_published DESC LIMIT 0, 5');
    
        return $req;
    }

    public function getArticlesByCategory($category){
        $db = $this->dbConnect();
        $filteredArticles = $db->prepare('SELECT blog.* FROM blog INNER JOIN blog_categories ON blog.id_article = blog_categories.id_article WHERE blog_categories.id_category = ?');
        $filteredArticles->execute(array($category));

        return $filteredArticles;
    }

    public function getArticlesByAuthor($author){
        $db = $this->dbConnect();
        $filteredArticles = $db->prepare('SELECT title, content, author, DATE_FORMAT(date_published, \'%d/%m/%Y à %Hh%imin%ss\') AS date_published FROM blog WHERE author = ? ORDER BY date_published DESC LIMIT 0, 5');
        $filteredArticles->execute(array($author));

        return $filteredArticles;
    }
    
    public function getArticle($postId){
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();
    
        return $post;
    }
}