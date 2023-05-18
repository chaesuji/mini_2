<?php
namespace application\controller;

class NavController extends Controller {
    public function themeGet(){
        return "/theme/theme"._EXTENSION_PHP;
    }
    public function localGet(){
        return "local"._EXTENSION_PHP;
    }
    public function tour_kGet(){
        return "tour_k"._EXTENSION_PHP;
    }
    public function tour_gGet(){
        return "tour_g"._EXTENSION_PHP;
    }
    public function boardGet(){
        return "board"._EXTENSION_PHP;
    }
}