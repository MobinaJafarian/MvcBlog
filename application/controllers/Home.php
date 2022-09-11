<?php

namespace Application\Controllers;

use Application\Model\Article;
use Application\Model\Category;

class Home extends Controller
{
        public function index()
        {
                $category = new Category();
                $categories = $category->all();
                $article = new Article();
                $articles = $article->all();
                return $this->view('app.index', compact('categories', 'articles'));
        }

        public function category($id)
        {
                $obj_category = new Category();
                $categories = $obj_category->all();
                $obj_category = new Category();
                $category = $obj_category->find($id);
                $obj_category = new Category();
                $articles = $obj_category->articles($id);

                return $this->view('app.category', compact('categories', 'category', 'articles'));
        }
}