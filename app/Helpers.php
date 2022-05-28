<?php

function dd($flag = true, ...$arguments) {

    if (count($arguments)) {
    
    echo "<pre>";
    
    foreach($arguments as $arg) {
    
    var_dump($arg);
    
    }
    
    echo "</pre>";
    
    if ($flag) exit;
    
    }
    
    }

    function route(array $routes, $action) {
        if (array_key_exists($action, $routes)) {
            $controllerPath = CONTROLLERS_PATH . "/" . $routes[$action] . '.php';
    
            $controllerPath = sprintf("%s/%s.php", CONTROLLERS_PATH, $routes[$action]);
            if (is_readable($controllerPath)) {
                require_once $controllerPath;
            } else {
                die("Undefined Controller {$controllerPath}");
            }
        }
    }
?>