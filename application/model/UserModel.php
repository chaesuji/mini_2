<?php
namespace application\model;

class UserModel extends Model{
    public function getUser( $arrUserInfo ){
        $sql = " SELECT "
                ." * "
                ." FROM "
                ." user_info "
                ." WHERE "
                ." u_id = :id "
                ." AND "
                ." u_pw = :pw ";

        $prepare = array(
            ":id" => $arrUserInfo["id"]
            ,":pw" => $arrUserInfo["pw"]
        );

        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($prepare);
            $result = $stmt->fetchAll();
        } catch (Exception $e) {
            echo "USER MODEL -> GET USER ERROR : ".$e->getMessage();
            exit();
        } finally {
            $this->closeConn();
        }
        return $result;
    }

    public function checkId(){
        $sql = " SELECT "
        ." u_id "
        ." FROM "
        ." user_info ";

        $prepare = array();

        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($prepare);
            $result = $stmt->fetchAll();
        } catch (Exception $e) {
            echo "USER -> checkid ERROR : ".$e->getMessage();
            ecit();
        } finally {
            $this->closeConn();
        }
        return $result;
    }

    public function setUser( $arrUser ){
        $sql = " INSERT "
        ." INTO "
        ." user_info "
        ." ( "
        ." u_id "
        ." ,u_pw "
        ." ) "
        ." VALUES "
        ." ( "
        ." :id "
        ." , :pw "
        ." ) ";

        $prepare = array(
            ":id" => $arrUser["id"]
            ,":pw" => $arrUser["pw"]
        );

        try {
            $this->conn->beginTransaction();
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($prepare);
            $result = $stmt->fetchAll();
            $this->conn->commit();
        } catch (Exception $e) {
            $this->closeConn();
        }
        return $result;
    }
}
?>