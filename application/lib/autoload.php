<?php
// autoload.php 
// : 각 디렉토리를 자동으로 분류하는 페이지

// spl_autoload_register() : 클래스 자동 불러오는 함수
// 새로운 클래스가 선언되면 해당 클래스로 새로운 객체가 생성되기 전에 
// 해당 클래스 이름을 인자로 받아 특정 명령을 실행 시킬 수 있는 것

spl_autoload_register( function($path) {
    // $path = url 
    $path = str_replace("\\", "/", $path); // path에서 넘어오는 값 중 \를 /로 바꿈

    // 각 디렉토리 분류
    require_once($path._EXTENSION_PHP);
    // $path.php에 해당하는 파일을 불러오고 해당하는 파일이 없으면 에러 발생
});

?>