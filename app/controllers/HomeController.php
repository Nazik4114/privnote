<?php

class HomeController{

    public function Home(){

        $page = 'home';
        $flag_is_valid=true;
        require_once VIEWS_PATH."/master.php";

    }
}

