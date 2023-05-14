<?php

// config 파일 불러오기 : require_once(); => 에러가 발생하면 메시지 출력 후 프로그램 중지
require_once("application/lib/config.php"); // config
require_once("application/lib/autoload.php"); // autoload
// echo $_GET["url"]; // > 확인용

// 페이지에 처음 접속하면 index 페이지로 오게됨 -> application 호출
new application\lib\Application(); // Application 호출