<?php
class SaveController{

public function Save(){

    $note = htmlentities($_POST['note']);
    $note_value=$_POST['note'];
    //dd(true,$note_value);
    $page=Validate_note($note_value,$flag_is_valid);
    $hash =Generated_Hash();
    $filePath=Bild_Url_to_note($hash);
    $fileContent = bild_stract_file($note,$hash);
    Save_to_file($filePath , $fileContent);
    $show_url =Show_URL($hash);
    require_once VIEWS_PATH."/master.php";
}


}