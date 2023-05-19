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
        return "mainl"._EXTENSION_PHP;
        return _BASE_REDIRECT."/trip/mainl"; // redirect : 화면 전환이 필요할 때
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
            // $arrPost["id"] = "";
        }
        // id 영문, 숫자 체크
        $pattern = "/[^a-zA-Z0-9]/";
        if(preg_match($pattern, $arrPost["id"]) !== 0){
            $arrChkErr["id"] = "ID는 숫자와 대/소문자 영어를 포함한 12글자 이하로 입력해주세요.";
            // $arrPost["id"] = "";
        }

        // pw 글자 수 체크
        if(mb_strlen($arrPost["pw"]) < 8 || mb_strlen($arrPost["pw"]) > 20){
            $arrChkErr["pw"] = "비밀번호는 8~20글자 사이로 입력해주세요.";
        }

        // pw 영문, 숫자, 특수문자 체크
        $patternPW = '/[^a-zA-Z0-9]/';
        

        $patternsp = '/[\~\!\@\^\*]{3}/';
        if(preg_match($patternsp, $arrPost["pw"]) !== 0){
            $arrChkErr["pw"] = "비밀번호의 특수문자(~,!,@,^,*)는 3글자 이하로 입력해주세요.";
            if(preg_match($patternPW, $arrPost["pw"]) !== 0){
                $arrChkErr["pw"] = "비밀번호는 숫자와 대/소문자 영어, 특수문자(~,!,@,^,*)를 포함한 12글자 이하로 입력해주세요.";
            }
        }
        // phone 
        // $phonepattern = "/^01[0-1]-([0-9]{3,4})-([0-9]{4})/";

        // 비밀번호 체크
        if($arrPost["pw"] !== $arrPost["pwchk"]){
            $arrChkErr["pwchk"] = "비밀번호와 비밀번호 확인 입력값이 일치하지 않습니다.";
            // $arrPost["pw"] = "";
            // $arrPost["pwchk"] = "";
        }

        // name 글자 수 체크
        if(mb_strlen($arrPost["name"]) ===0 || mb_strlen($arrPost["name"]) > 30){
            $arrChkErr["name"] = "이름은 30글자 이하로 입력해주세요.";
            // $arrPost["name"] = "";
        }

        // mariadb에서 대/소문자 유효성 검사
        // CREATE TABLE user_info(
        //     u_no INT PRIMARY KEY auto_increment
        //     ,u_id VARCHAR(12) NOT NULL
        //     ,u_pw VARCHAR(512) binary NOT null
        //     ,u_name varchar(30) not null
        //     ,d_flg char(1) not null default 0
        // );
        // INSERT INTO user_info(u_id, u_pw) VALUES('php506', '506');
        // COMMIT;

        // $result[0]["pw"] === $_POST["pw"]

        if(!empty($arrChkErr)){
            // 유효성 체크 에러가 있을 경우 에러 메세지 셋팅
            $this->addDynamicProperty('arrError', $arrChkErr);
            $this->addDynamicProperty("inputData", $arrPost);
            return "signup"._EXTENSION_PHP;
        }
        
        $result = $this->model->getUser($arrPost, false);

        // 아이디 중복 체크
        if(count($result) !== 0){
            // $result에 입력한 값이 없는 상태로 넘어온 경우
            $errMsg = "입력하신 ID는 사용중입니다";
            $this->addDynamicProperty("errMsg", $errMsg);
            $this->addDynamicProperty("inputData", $arrPost);

            // 회원가입 페이지 리턴
            return "signup"._EXTENSION_PHP;
        }else{
            $errMsg = "";
            $this->addDynamicProperty("errMsg", $errMsg);
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

    // 마이페이지 이동
    public function mypageGet(){
        return "mypage"._EXTENSION_PHP;
    }

    public function mypageinfo(){
        $result = $this->model->getgetUser($_SESSION[_STR_LOGIN_ID]);
        $this->model->close();

        return $result[0];
    }
    
    // 마이페이지 수정
    public function mypagePost(){
        $arrPost = $_POST;
        $arrChkErr = [];

        if(mb_strlen($arrPost["name"]) === 0 || mb_strlen($arrPost["name"]) > 30){
            $arrChkErr["name"] = "이름은 30글자 이하로 입력해주세요.";
        }
        if(mb_strlen($arrPost["pw"]) < 8 || mb_strlen($arrPost["pw"]) > 20){
            $arrChkErr["pw"] = "비밀번호는 8~20글자 사이로 입력해주세요.";
        }
        $pattern = "/[^a-zA-Z0-9]/";
        if(preg_match($pattern, $arrPost["pw"]) !== 0){
            $arrChkErr["pw"] = "PW는 숫자와 대/소문자 영어를 포함한 12글자 이하로 입력해주세요.";
            // $arrPost["id"] = "";
        }
        if($arrPost["pw"] !== $arrPost["pwchk"]){
            $arrChkErr["pwchk"] = "비밀번호와 비밀번호 확인 입력값이 일치하지 않습니다.";
        }
        if(!empty($arrChkErr)){
            // 유효성 체크 에러가 있을 경우 에러 메세지 셋팅
            $this->addDynamicProperty('arrError', $arrChkErr);
            return "mypage"._EXTENSION_PHP;
        }

        $result = $this->model->updateUser($arrPost);
        // *** Transaction start
        $this->model->beginTransaction();

        // user insert
        if(!$this->model->updateUser($arrPost)){
            echo "User UPDATE ERROR";
            $this->model->rollback();
            exit();
        }
        // 정상처리 commit();
        $this->model->commit();
        // *** transaction end

        return "mainl"._EXTENSION_PHP;
    }

    // 탈퇴 페이지로 이동
    public function d_userGet(){
        return "signout"._EXTENSION_PHP;
    }

    // 회원 탈퇴
    public function d_userPOST() {
        $result = $this->model->updateUser($_SESSION[_STR_LOGIN_ID], false);
        // *** Transaction start
        $this->model->beginTransaction();

        // user insert
        if(!$this->model->udpateUser($_SESSION[_STR_LOGIN_ID], false)){
            echo "User DELETE ERROR";
            $this->model->rollback();
            exit();
        }
        // 정상처리 commit();
        $this->model->commit();
        // *** transaction end

        return "main"._EXTENSION_PHP;
    }
}
?>