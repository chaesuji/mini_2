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
        // DB 파기
        $this->model->close();
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

    // 회원가입
    public function signupPost() {
        $arrPost = $_POST;
        $arrChkErr = [];

        // 유효성 체크
        // id 글자 수 체크
        if(mb_strlen($arrPost["id"]) === 0 || mb_strlen($arrPost["id"]) > 12){
            $arrChkErr["id"] = "ID는 12글자 이하로 입력해주세요.";
        }
        // id 영문, 숫자 체크
        // if(preg_match('/[0-9]/',$arrPost["id"]) && preg_match('/[a-z]/i',$arrPost["id"])){
        //     $arrChkErr["id"] = "ID는 숫자와 소문자 영어를 포함한 12글자 이하로 입력해주세요.";
        // }

        // pw 글자 수 체크
        if(mb_strlen($arrPost["pw"]) < 8 || mb_strlen($arrPost["pw"]) > 20){
            $arrChkErr["pw"] = "비밀번호는 8~20글자 사이로 입력해주세요.";
        }

        $no_pattern = ["`",'~','#','$','%','^','&','*','|','\\',"\'",'\"',';',':','\/','?','=','+','_','(',')','<','>'];
        // pw 영문, 숫자, 특수문자 체크
        if(strstr($arrPost["pw"], )){
            $arrChkErr["pw"] = "비밀번호에 사용가능한 특수 문자는 \'!, @ \' 입니다.";
        }

        // 비밀번호 체크
        if($arrPost["pw"] !== $arrPost["pwchk"]){
            $arrChkErr["pwchk"] = "비밀번호와 비밀번호 확인 입력값이 일치하지 않습니다.";
        }

        // name 글자 수 체크
        if(mb_strlen($arrPost["name"]) ===0 || mb_strlen($arrPost["name"]) > 30){
            $arrChkErr["name"] = "이름은 30글자 이하로 입력해주세요.";
        }

        if(!empty($arrChkErr)){
            // 유효성 체크 에러가 있을 경우 에러 메세지 셋팅
            $this->addDynamicProperty('arrError', $arrChkErr);
            return "signup"._EXTENSION_PHP;
        }
        
        $result = $this->model->getUser($arrPost, false);

        // 아이디 중복 체크
        if(count($result) !== 0){
            // $result에 입력한 값이 없는 상태로 넘어온 경우
            $errMsg = "입력하신 ID는 사용중입니다";
            $this->addDynamicProperty("errMsg", $errMsg);

            // 회원가입 페이지 리턴
            return "signup"._EXTENSION_PHP;
        }

        // *** Transaction start
        $this->model->beginTransaction();

        // user insert
        if(!$this->model->setUser($arrPost)){
            echo "User SignIn ERROR";
            $this->model->rollback();
            exit();
        }
        // 정상처리 commit();
        $this->model->commit();
        // *** transaction end

        // 로그인 페이지로 이동
        return _BASE_REDIRECT."/user/login";
    }
}
?>