<?php
namespace Application\Controllers;

class Panel extends Controller{
    public function index(){
        return $this->view('panel.index');
    }
}