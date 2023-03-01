<?php
include("../configs/DBConnection.php");
include("../models/Loginuser.php");
class LoginuserService
{
    public function getAllLoginUser()
    {
        // 4 bước thực hiện
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();

        // B2. Truy vấn
   

            $sql = "select * from users where user_name = ? and password = ?";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
        

        // B3. Xử lý kết quả
        $Loginusers = [];
        while ($row = $stmt->fetch()) {
            $loginuser = new Loginuser($row['id'], $row['user_name'], $row['password']);
            array_push($Loginusers, $loginuser);
        }
        // Mảng (danh sách) các đối tượng Article Model

        return $Loginusers;
    }
}
