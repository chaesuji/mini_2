<?php

// config 파일 불러오기 : require_once(); 에러가 나면 멈춤
require_once("application/lib/config.php"); // config
require_once("application/lib/autoload.php"); // autoload
// echo $_GET["url"]; // > 확인용

new application\lib\Application(); // Application 호출