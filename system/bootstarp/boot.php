<?php

use System\Bootstrap\Autoload;
use System\router\Routing;

session_start();

require_once('system/config.php');
require_once('system/bootstarp/Autoload.php');

$autoload = new Autoload();
$autoload->autoloader();

$router = new Routing();
$router->run();