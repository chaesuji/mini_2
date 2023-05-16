<?php
namespace application\controller;

class ApiController extends Controller{
    public function userGet() {
        $arrGet = $_GET;
        $arrData = [ "flg" => "0" ];

        // model 호출
        $this->model = $this->getModel("User");

        $result = $this->model->getUser($arrGet, false);

        // 아이디 중복 체크
        if(count($result) !== 0){
            $arrData["flg"] = "1";
            $arrData["msg"] = "이미 사용중인 ID입니다.";
        }

        // 배열을 json으로 변경
        $json = json_encode($arrData);
        header('Content-type: application/json');
        echo $json;
        exit();
    }
}