<?php

namespace Application\Model;

class Article extends Model
{
    public function all()
    {
        $query = "SELECT * FROM articles;";
        $result = $this->query($query)->fetchAll();
        $this->closeConnection();
        return $result;
    }
}
