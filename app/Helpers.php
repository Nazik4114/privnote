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

            list($controlerClass,$method)=explode('@',$routes[$action]);
            $controllerPath = CONTROLLERS_PATH . "/" . $controlerClass . '.php';
            if (is_readable($controllerPath)) {
                require_once $controllerPath;

                $objControler=new $controlerClass;
                $objControler->$method();

            } else {
                die("Undefined Controller {$controllerPath}");
            }
        }
    }
    
function generated_Hash(){
    return  bin2hex(random_bytes(HASH_SIZE));
 }

 function bild_Url_to_note($hash){
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
 function save_to_file($filePath , $fileContent){
     if(file_exists(NOTES_PATH)){
   file_put_contents($filePath , $fileContent);
     } else{

         mkdir(NOTES_PATH);
         file_put_contents($filePath , $fileContent);
     }
 }

 function validate_note($post,&$flag){
        if (!empty($post)&&strlen($post<=1000)){
                $page = 'save';
                $flag=true;
            } else{
                $page = 'home';  

                $flag=false;
            }
            return $page;
    }

function show_URL($hash){
    $show_url = BASE_URL . "?action=show&hash=".$hash;
    return $show_url;
}
function deleteFile($path_file){
    unlink($path_file);
}
?>