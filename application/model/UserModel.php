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
                ." u_id = :id "
                ." AND "
                ." d_flg = '0' ";

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

    public function getgetUser( $id ){
        $sql = " SELECT "
                ." * "
                ." FROM "
                ." user_info "
                ." WHERE "
                ." u_id = :id ";

        $prepare = array(
            ":id" => $id
        );

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
    public function setUser( $arrUserInfo, $pwFlg = true ){
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
        // ." , based64_encode( :pw ) "
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

    // update user(mypage)
    public function updateUser( $arrUserInfo ){
        $sql = " UPDATE "
            ." user_info "
            ." SET "
            ." u_name = :name "
            ." , u_pw = :pw "
            ." WHERE "
            ." u_no = :no ";

        $prepare = array(
            ":name" => $arrUserInfo["name"]
            ,":pw" => $arrUserInfo["pw"]
            ,":no" => $arrUserInfo["no"]
        );

        try {
            $stmt = $this->conn->prepare($sql);
            $result = $stmt->execute($prepare);
            return $result;
        } catch (Exception $e) {
            return false;
        }
    }

    // delete user(mypage)
    // public function deleteUser( $id ){
    //     $sql = " UPDATE "
    //         ." user_info "
    //         ." SET "
    //         ." d_flg = '1' "
    //         ." WHERE "
    //         ." u_id = :id ";

    //     $prepare = array(
    //         ":id" => $id
    //     );
    
    //     try {
    //         $stmt = $this->conn->prepare($sql);
    //         $stmt->execute($prepare);
    //         $result = $stmt->fetchAll();
    //     } catch (Exception $e) {
    //         echo "USER MODEL -> DELETE USER ERROR : ".$e->getMessage();
    //         exit();
    //     }
    //     return $result;
    // }
}
?>