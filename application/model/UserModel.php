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
}
?>