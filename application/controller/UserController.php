<?php
namespace application\controller;

// extends class : class 클래스를 상속 받음
class UserController extends Controller{
    // 로그인 페이지 접속
    public function loginGet() {
        // get 방식으로 올 경우 login.php 실행
        return "login"._EXTENSION_PHP;
    }

    // 로그인
    public function loginPost() {
        // post 방식(= 로그인 화면에서 버튼을 누를 때)으로 올 경우 로그인 확인
        $result = $this->model->getUser($_POST);
        // getUser -> UserModel.php
        // model을 통해 getUser()를 post로 실행한 값을 $result에 담음
        if(count($result) === 0){
            // $result에 입력한 값이 없는 상태로 넘어온 경우
            $errMsg = "입력하신 회원 정보가 없습니다.";
            $this->addDynamicProperty("errMsg", $errMsg);
            return "login"._EXTENSION_PHP;
        }
        // session에 User ID 저장
        $_SESSION[_STR_LOGIN_ID] = $_POST["id"];

        // 리스트 페이지 리턴
        // return _BASE_REDIRECT."/product/list";
        return _BASE_REDIRECT."/trip/mainl";
    }

    // logout 메소드
    public function logoutGet() {
        // 저장한 해당 userID 삭제
        session_unset();
        // 세션에 등록된 모든 데이터 삭제
        session_destroy();
        return "main"._EXTENSION_PHP;
    }

    // 회원가입 페이지 이동
    public function signupGet() {
        return "signup"._EXTENSION_PHP;
    }

    public function signupPost() {
        $result = $this->model->checkId();
        $_inputID = $_POST["id"];
        foreach ($result as $val) {
            if($val === $_inputID){
                $errMsg = "입력하신 아이디는 사용 불가능한 아이디입니다.";
                $this->addDynamicProperty("errMsg", $errMsg);
                return "signup"._EXTENSION_PHP;
            }else{
                $this->model->setUser($_POST);
                return "login"._EXTENSION_PHP;
            }
        }
    }
}
?>