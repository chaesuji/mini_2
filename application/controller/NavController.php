<?php
namespace application\controller;

class NavController extends Controller {
    public function themeGet(){
        return "theme"._EXTENSION_PHP;
    }
    public function localGet(){
        return "local"._EXTENSION_PHP;
    }
    public function tourGet(){
        return "tour"._EXTENSION_PHP;
    }
    public function boardGet(){
        return "board"._EXTENSION_PHP;
    }
}