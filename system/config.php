<?php
$base_url = 'http://localhost/MvcBlog/';
$base_dir = '/MvcBlog/';

$tmp = explode('?', $_SERVER['REQUEST_URI']);
$current_route = str_replace($base_dir, '', $tmp[0]);
unset($tmp);

//DataBase config
$dbHost = 'localhost';
$dbName = 'mvc_blog';
$dbUsername = 'root';
$dbPassword = '';
