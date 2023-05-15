<?php
namespace application\controller;

// extends class : class 클래스를 상속 받음
class TripController extends Controller{
    public function mainGet() {
        return "main"._EXTENSION_PHP;
    }
    public function mainPost() {
        return "login"._EXTENSION_PHP;
    }
    public function mainlGet() {
        return "mainl"._EXTENSION_PHP;
    }
}
?>