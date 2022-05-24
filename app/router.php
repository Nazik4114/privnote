<?php

$action = "home";
if(isset($_GET['action'])) {
    $action = $_GET['action'];
}

$routesMap = [
    'home' => 'HomeController',
    'save' => 'SaveController',
    'show' => 'ShowController',
]; 

if (array_key_exists($action, $routesMap)) {
    //$controllerPath = CONTROLLERS_PATH."/{$routesMap[$action]}.php";
    $controllerPath = sprintf("%s/%s.php", CONTROLLERS_PATH, $routesMap[$action]);
    if (is_readable($controllerPath)) {
        require_once $controllerPath;
    } else {
        die("Undefined Controller {$controllerPath}");
    }
}

/*
switch ($action) {
    case 'home':
        require_once __DIR__.'/controllers/HomeController.php';
        break;
    case 'save':
        require_once __DIR__.'/controllers/SaveController.php';
        break;
    case 'show':
        require_once __DIR__.'/controllers/ShowController.php';
        break;
}
*/