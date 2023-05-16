<?php
namespace application\controller;

// extends class : class 클래스를 상속 받음
class MainController extends Controller{
    public function mainlistGet() {
        return "mainlist"._EXTENSION_PHP;
    }
    public function mainlistPost() {
        return "login"._EXTENSION_PHP;
    }
    public function mainlistlGet() {
        return "mainlistl"._EXTENSION_PHP;
    }
}
?>