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

    function Generated_Hash(){
       return  bin2hex(random_bytes(HASH_SIZE));
    }

    function Bild_Url_to_note($hash){
        $fileName = "$hash.json";
        $filePath = NOTES_PATH . "/$fileName";
        return  $filePath;
    } 

    function bild_stract_file($note, $hash){
        $fileContent =[
            'body' => $note,
            'hash' => $hash,
            'ip' => $_SERVER['REMOTE_ADDR'], 
            'created_at' => date("Y/m/d H:i:s")
        ];
        return json_encode($fileContent, JSON_UNESCAPED_SLASHES); ;
    }
    function Save_to_file($filePath , $fileContent){
      file_put_contents($filePath , $fileContent);
    }
    function Show_URL($hash){
        $show_url = BASE_URL . "?action=show&hash=".$hash;
return $show_url;
    }


    function Validate_note($POST,&$flag){
        global $flag_is_valid;
                if (!empty($POST)&&strlen($POST<=1000)){
        $page = 'save';
        $flag=true;
        }
        else{
            $page = 'home';  
            
            $flag=false;
        }
        return $page;
    }
?>