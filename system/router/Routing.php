<?php

namespace System\router;

use ReflectionMethod;

class Routing
{

    private $current_route;

    public function __construct()
    {
        global $current_route;
        $this->current_route = explode('/', $current_route);
    }

    public function run()
    {
        $path = realpath(dirname(__FILE__) . '/../../application/controllers' . $this->current_route[0] . '.php');
        if (!file_exists($path)) {
            echo '404 - not found';
            exit;
        }

        sizeof($this->current_route) == 1 ? $method = 'index' : $method = $this->current_route[1];

        $class = 'Application\Controllers\\' . $this->current_route[0];
        $object = new $class();
        if (method_exists($object, $method)) {
            $reflaction = new ReflectionMethod($class, $method);
            $parameterCount = $reflaction->getNumberOfParameters();
            if ($parameterCount <= count(array_slice($this->current_route, 2))) {
                call_user_func_array([$object, $method], array_slice($this->current_route, 2));
            } else {
                echo '404 - not found';
                exit;
            }
        } else {
            echo '404 - not found';
            exit;
        }
    }
}
