<?php
namespace application\controller;

class NavController extends Controller {
    public function themeGet(){
        return "/theme/theme"._EXTENSION_PHP;
    }
    public function localGet(){
        return "/theme/local"._EXTENSION_PHP;
    }
    public function tour_kGet(){
        return "/theme/tour_k"._EXTENSION_PHP;
    }
    public function tour_gGet(){
        return "/theme/tour_g"._EXTENSION_PHP;
    }
}