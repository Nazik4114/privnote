<?php
define('CONTROLLERS_PATH', __DIR__."/controllers");
define('VIEWS_PATH', __DIR__."/views");
define('BASE_URL', "http://localhost:8181");
define('JS_PATH', "http://localhost:8181/JS/");
define('NOTES_PATH', __DIR__."\\notes");
define('HASH_SIZE',10);

$routesMap = [
    'home' => 'HomeController@Home',
    'save' => 'SaveController@Save',
    'show' => 'ShowController@Show',
]; 
?>