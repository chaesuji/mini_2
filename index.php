<?php

// config 파일 불러오기 : require_once(); => 에러가 발생하면 메시지 출력 후 프로그램 중지
require_once("application/lib/config.php"); // config
require_once("application/lib/autoload.php"); // autoload
// echo $_GET["url"]; // > 확인용

// 페이지에 처음 접속하면 index 페이지로 오게됨 -> application 호출
new application\lib\Application(); // Application 호출
// 생성자가 없으면 부모 클래스의 생성자를 찾아가거나 
// 부모 클래스도 없을 경우에는 기본으로 설정되어있는 생성자를 찾아감
// * 기본으로 설정되어있는 생성자는 아무것도 없음