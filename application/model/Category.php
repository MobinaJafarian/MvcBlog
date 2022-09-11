<?php
namespace Application\Model;

use Application\Model\Model;

class Category extends Model{

    public function all(){
        $query = "SELECT * FROM Categories";
        $result = $this->query($query)->fetchAll();
        $this->closeConnection();
        return $result;
    }

    public function insert($values){
        $query = "INSERT INTO Categories (name , description , created_at) VALUES (? , ? , now());";
        $this->execute($query , array_values($values));
        $this->closeConnection();
    }

    public function find($id){
        $query = "SELECT * FROM Categories WHERE id =?";
        $result = $this->query($query , [$id])->fetch();
        $this->closeConnection();
        return $result;
    }

    public function update($id , $values){
        $query = "UPDATE Categories SET name = ? , description =? , updated_at = now() WHERE id = ?;";
        $this->execute($query , array_merge(array_values($values) , [$id]));
        $this->closeConnection();
    }
    
    public function delete($id){
        $query = "DELETE * FROM Categories WHERE id = ?;";
        $this->execute($query , [$id]);
        $this->closeConnection();
    }
    
    public function articles($cat_id){
        $query = "SELECT * FROM articles WHERE cat_id = ?;";
        $result = $this->query($query , [$cat_id])->fetchAll();
        $this->closeConnection();
        return $result;
    }
}