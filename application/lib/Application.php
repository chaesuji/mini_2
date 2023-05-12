<?php
namespace application\lib;
// 네임스페이스 : 이름 공간을 분리해서 같은 이름의 함수, 변수, 클래스를 분리할 수 있음
// 각각의 기능에 이름 공간을 붙여서 구분할 수 있게 해줌
// 네임스페이스를 나누는 기호 : \(역슬래시)

use application\util\UrlUtil;
// use : 

class Application
{
    // 생성자
    public function __construct() {
        $arrPath = UrlUtil::getUrlArrPath(); // 접속 URL을 배열로 획득
        $identityName = empty($arrPath[0]) ? "User" : ucfirst($arrPath[0]);
        $action = (empty($arrPath[1]) ? "login" : $arrPath[1]).ucfirst(strtolower($_SERVER["REQUEST_METHOD"]));
        // $_SERVER["REQUEST_MEHTOD"] == > GET, POST > strtolower : 문자를 소문자로 변환 > ucfirst : 첫 글자만 대문자로 변환
        
        // controller명 작성
        $controllerPath = _PATH_CONTROLLER.$identityName._BASE_FILENAME_CONTROLLER._EXTENSION_PHP;
        
        // 해당 controller 파일 존재 여부 체크
        if(!file_exists($controllerPath)){ // file_exists : 파일이 있으면 true 없으면 false
            echo "해당 컨트롤러 파일이 없습니다. : ".$controllerPath;
            exit();
        }

        // 해당 Controller 호출
        $controllerName = UrlUtil::replaceSlashToBackSlash(_PATH_CONTROLLER.$identityName._BASE_FILENAME_CONTROLLER);
        // var_dump($controllerName);
        new $controllerName($identityName, $action);
        // exit();
    }
}

// new application\lib\Application();