<?php
namespace application\controller;
use application\util\UrlUtil;
use \AllowDynamicProperties;
// AllowDynamicProperties; => 동적 속성을 허용

#[AllowDynamicProperties]

class Controller {
    protected $model;
    // protected : 상속 클래스 내에서만 접근 가능
    private static $modelList = [];
    private static $arrNeedAuth = ["product/list"];
    // private : 현재 클래스 내에서만 접근 가능
    // static : 정적 메소드 / 함수 안에서만 쓰이는 지역 범위의 변수이면서 값을 전역 범위 변수처럼 유지하는 변수

    // 생성자
    // 생성자는 클래스를 실행하는 것만으로도 자동으로 실행되는 메소드(가장 처음으로 실행됨)
    public function __construct($identityName, $action) {
        // session start
        if(!isset($_SESSION)){ 
        // $_SESSION 메서드에 값이 설정되어 있지 않으면 session을 시작함
            session_start();
        }

        // 유저 로그인 및 권한 체크
        $this->chkAuthorization(); // Controller 클래스 내의 chkAuthorization() 함수 호출 후 실행
        // $this-> | this : 현재 자신을 나타내는 표현, -> : 객체 내의 속성이나 메소드를 가리킬 때 사용

        // model 호출
        $this->model = $this->getModel($identityName);
        // Controller 클래스 내의 model 변수에 getModel($identityName)의 실행 값을 저장함

        // 해당 controller의 메소드 호출
        $view = $this->$action(); 

        if(empty($view)){
            echo "해당 Controller에 메소드가 없습니다 : ".$action;
            exit();
        }

        // view 호출
        require_once $this->getView($view);
        // Controller 클래스 내의 getView() 함수의 리턴 값을 통해 view 페이지로 이동
    }

    // model 호출하고 결과를 리턴
    protected function getModel($identityName){
        // model 생성 체크
        if(!in_array($identityName, self::$modelList)){
            // self::$modelList 안에 identityName이 없을 경우
            $modelName = UrlUtil::replaceSlashToBackSlash(_PATH_MODEL.$identityName._BASE_FILENAME_MODEL);
            // replaceSlashToBackSlash() 함수를 통해 \를 /로 변환
            self::$modelList[$identityName] = new $modelName(); // model class 호출
            // new ?? 
        }
        return self::$modelList[$identityName];
    }

    // 파라미터를 확인해서 해당하는 view를 리턴하거나, redirect
    protected function getView($view){
        // view를 체크
        if(strpos($view, _BASE_REDIRECT) === 0){
        // strpos() : 특정 문자 검색
        // $view에 "Location: "이 없을 경우
            header($view);
            // header()를 통해 $view 실행 후 그 후의 실행들을 종료
            exit();
        }
        return _PATH_VIEW.$view;
        // 값이 있다면 "application/view/" + $view 형식을 리턴하여 view 호출로 이동
    }

    // 동적 속성(DynamicProperty)를 셋팅하는 메소드
    protected function addDynamicProperty($key, $value){
        $this->$key = $value;
        // 현재 함수(=addDynamicProperty)의 $key 매개 변수에 $value 값을 저장함
    }

    // 유저 권한 체크 메소드
    protected function chkAuthorization(){
        $urlPath = UrlUtil::getUrl();
        // UrlUtil 클래스의 getUrl() 함수 실행한 값을 저장
        foreach (self::$arrNeedAuth as $authPath) {
            // self:: 명령이 실행되는 위치의 클래스 자체에 속하는 함수 또는 변수를 가리킬 때 사용
            // https://velog.io/@jazzyfact95/PHP-this-self-  :: this,self 정의,차이점
            if(!isset($_SESSION[_STR_LOGIN_ID]) && strpos($urlPath, $authPath) === 0){
                // $_SESSION에 _STR_LOGIN_ID 값이 설정되어 있지 않고 $urlPath에 $authPath가 없다면
                header(_BASE_REDIRECT."/user/login");
                // header("Location: /user/login"); 을 실행한 후에 그 뒤의 실행 종료
                exit();
            }
        }
    }
}
?>