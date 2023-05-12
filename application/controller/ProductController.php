<?php
namespace application\controller;

// extends class : class 클래스를 상속 받음
class ProductController extends Controller{
    public function listGet() {
        return "list"._EXTENSION_PHP;
    }

    // public function listPost() {
    //     return _BASE_REDIRECT."/product/list";
    // }
}
?>