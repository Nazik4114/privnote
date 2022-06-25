<?php
class SaveController{

public function Save(){

    $note = htmlentities($_POST['note']);
    $note_value=$_POST['note'];
    $page=validate_note($note_value,$flag_is_valid);
    $hash =generated_Hash();
    $filePath=bild_Url_to_note($hash);
    $fileContent = bild_stract_file($note,$hash);
    save_to_file($filePath , $fileContent);
    $show_url =show_URL($hash);
    require_once VIEWS_PATH."/master.php";
}


}