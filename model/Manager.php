<?php
namespace Becode\Blog\Model;

class Manager{
    protected function dbConnect(){
        $db = new \PDO('mysql:host=localhost;dbname=filrougeasteam;charset=utf8', 'root', 'root');
        
        return $db;
    }
}
