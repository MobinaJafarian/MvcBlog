<?php
namespace System\Bootstrap;

class Autoload
{
    public function autoloader()
    {
        spl_autoload_register(function ($className) {
            $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
            include_once $_SERVER['DOCUMENT_ROOT'] . '/MvcBlog/' . $className . '.php';
        });
    }
}
