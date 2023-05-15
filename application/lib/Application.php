<?php
namespace application\lib;
// 네임스페이스(= 이름 공간) : 이름 공간을 분리해서 함수, 변수, 클래스를 분리하여 호출
// 네임스페이스를 나누는 기호 : \(역슬래시)
// application 폴더 안의 lib 폴더 호출

use application\util\UrlUtil;
// use : 네임스페이스를 선언한 후에 다른 폴더나 파일을 연결할 때 사용
// application 폴더 안의 util 폴더 안의 UrlUtil 클래스 호출

class Application
{
    // 생성자
    public function __construct() {
        $arrPath = UrlUtil::getUrlArrPath(); // 접속 URL을 배열로 획득
        // UrlUtil::getUrlArrPath() => use를 통해 연결한 UrlUtil 클래스 안의 getUrlArrPath() 함수를 호출 후 실행
        $identityName = empty($arrPath[0]) ? "User" : ucfirst($arrPath[0]);
        // $arrPath에서 실행한 값(배열의 첫 번째)이 비어 있다면 "User"라는 값을 변수에 저장하고 값이 있다면
        // 그 값의 첫 글자를 대문자로 변환하여 저장함
        $action = (empty($arrPath[1]) ? "login" : $arrPath[1]).ucfirst(strtolower($_SERVER["REQUEST_METHOD"]));
        // $arrPath에서 실행한 값(배열의 두번째)이 비어 있다면 "login"라는 값을 변수에 저장하고 값이 있다면
        // $_SERVER["REQUEST_MEHTOD"] 메소드를 통해 GET/POST로 넘어오는 값을 전부 소문자로 변환한 후에 
        // 첫 글자를 대문자로 변환한 값을 저장함
        // $_SERVER["REQUEST_MEHTOD"] == > GET, POST > get, post > Get, Post
        
        // controller명 작성
        $controllerPath = _PATH_CONTROLLER.$identityName._BASE_FILENAME_CONTROLLER._EXTENSION_PHP;
        // lib 폴더 안의 config 파일에서 선언한 상수를 통해 controller 명을 작성함
        // application/controller/(User or arrpath에 저장된 값)Controller.PHP
        // application 폴더 안 controller 폴더 안의 해당 파일로 이동

        // 해당 controller 파일 존재 여부 체크
        if(!file_exists($controllerPath)){ 
            // file_exists : 파일이 있으면 true 없으면 false
            // identityName에 해당하는 컨트롤러 파일이 없을 경우 밑의 echo + 없는 파일의 이름을 출력함
            echo "해당 컨트롤러 파일이 없습니다. : ".$controllerPath;
            // 그 후의 모든 실행 종료
            exit();
        }

        // $idetityName에 해당하는 Controller의 파일이 있을 경우 
        // Controller 호출
        $controllerName = UrlUtil::replaceSlashToBackSlash(_PATH_CONTROLLER.$identityName._BASE_FILENAME_CONTROLLER);
        // UrlUtil 클래스 안의 replaceSlashToBackSlash() 함수 호출 후 실행
        new $controllerName($identityName, $action);
        // new : 인스턴스화(인스턴스화 : 클래스를 호출해 사용)
        // controllerName = application/controller/$identityName Controller
        // ex) controllerName = application/controller/UserController
        // ex) new $controllerName($identityName, $action) 
        // => UserController($identityName, $action);
        // => ('User', 'lofingGet') 
        // > Controller의 생성자에 ($identityName, $action) 값을 넣어 실행 > UserController에서는 실행할 수 없어서 Controller의 생성자에서 실행

        // var_dump($controllerName); > 확인용 var_dump()
        // exit(); > 확인용 exit()
    }
}