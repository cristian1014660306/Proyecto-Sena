<?php
require 'system/config.php';
require CORE . 'autoload.php';

$router = new Router();
$controller = $router->getController();
$method = $router->getMethod();
$params = $router->getParam();

require_once PATH_CONTROLLER . "{$controller}/{$controller}Controller.php";

$controller .="controller";
$controller_object = new $controller();
$controller_object->$method($params);
