<?php
define('CONTROLLERS_PATH', __DIR__."/controllers");
define('VIEWS_PATH', __DIR__."/views");
define('BASE_URL', "http://localhost:8181");


$routesMap = [
    'home' => 'HomeController',
    'save' => 'SaveController',
    'show' => 'ShowController',
]; 
?>