<?php
namespace application\model;

class UserModel extends Model{
    // select user (login)
    public function getUser( $arrUserInfo, $pwFlg = true ){
        $sql = " SELECT "
                ." * "
                ." FROM "
                ." user_info "
                ." WHERE "
                ." u_id = :id ";

        if($pwFlg){
            $sql .= " AND u_pw = :pw";
        }

        $prepare = array(
            ":id" => $arrUserInfo["id"]
        );

        // pw를 추가할 경우
        if($pwFlg){
            $prepare[":pw"] = $arrUserInfo["pw"];
        }

        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($prepare);
            $result = $stmt->fetchAll();
        } catch (Exception $e) {
            echo "USER MODEL -> GET USER ERROR : ".$e->getMessage();
            exit();
        }
        return $result;
    }

    // insert user(signin)
    public function setUser( $arrUserInfo ){
        $sql = " INSERT "
        ." INTO "
        ." user_info "
        ." ( "
        ." u_id "
        ." ,u_pw "
        ." ,u_name "
        ." ) "
        ." VALUES "
        ." ( "
        ." :id "
        ." , :pw "
        ." , :name "
        ." ) ";

        $prepare = array(
            ":id" => $arrUserInfo["id"]
            ,":pw" => $arrUserInfo["pw"]
            ,":name" => $arrUserInfo["name"]
        );

        try {
            $stmt = $this->conn->prepare($sql);
            $result = $stmt->execute($prepare);
            return $result;
        } catch (Exception $e) {
            return false;
        }
    }
}
?>