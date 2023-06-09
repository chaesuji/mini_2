<?php

namespace application\util;

class UrlUtil {
    // $_GET["url"]을 분석해서 리턴
    public static function getUrl() {
        return isset($_GET["url"]) ? $_GET["url"] : "";
    }

    // url를 /로 구분해서 배열 형태로 리턴
    public static function getUrlArrPath(){
        $path = self::getUrl();
        return $path !== "" ? explode("/", $path) : "";
    }

    // \를 /로 변환해주는 메소드
    public static function replaceSlashToBackSlash($str){
        return str_replace("/", "\\", $str);
    } 
};

?>