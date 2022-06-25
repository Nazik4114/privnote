<?php
class ShowController{
    public function Show(){

        $hash = $_GET['hash'];
        $path_file=NOTES_PATH."\\".$hash.".json";
        $body_f="";
        if(!file_exists($path_file)){
      
            $body_f="Записка була вже прочитана і знищена";
        } else{
        $body_note=file_get_contents($path_file);
        $body=json_decode($body_note);
        $body_f=$body->{'body'};
        deleteFile($path_file);
        }
        $page = 'show';
        require_once VIEWS_PATH."/master.php";

    }
}