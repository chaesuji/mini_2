<?php
namespace application\controller;

// extends class : class 클래스를 상속 받음
class UserController extends Controller{
    // 로그인 페이지 접속
    public function loginGet() {
        return "login"._EXTENSION_PHP;
    }

    // 로그인
    public function loginPost() {
        $result = $this->model->getUser($_POST);
        if(count($result) === 0){
            $errMsg = "입력하신 회원 정보가 없습니다.";
            $this->addDynamicProperty("errMsg", $errMsg);
            return "login"._EXTENSION_PHP;
        }
        // session에 User ID 저장
        $_SESSION[_STR_LOGIN_ID] = $_POST["id"];

        // 리스트 페이지 리턴
        return _BASE_REDIRECT."/product/list";
    }

    // logout 메소드
    public function logoutGet() {
        session_unset();
        session_destroy();
        return "login"._EXTENSION_PHP;
    }
}
?>