<?php

$hash = $_GET['hash'];
$Path_file=NOTES_PATH."\\".$hash.".json";
$body_f="";
//dd(false,$hash);
if(file_get_contents($Path_file)===false){
    $body_f="Записка була вже прочитана і знищена";
}
else{
$body_note=file_get_contents($Path_file);
$body=json_decode($body_note);
$body_f=$body->{'body'};
}

unlink($Path_file);
//dd(true,$body->{'body'});
$page = 'show';
require_once VIEWS_PATH."/master.php";