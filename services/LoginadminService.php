<?php
include("../configs/DBConnection.php");
include("../models/Loginadmin.php");
class LoginadminService
{
    public function getAllLoginadmin()
    {
        // 4 bước thực hiện
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();

        // B2. Truy vấn
        if (isset($_POST['dangnhap']) == true) {
            $tendangnhap = $_POST['tendangnhap'];
            $matkhau = $_POST['matkhau'];
    
            $conn = new PDO("mysql:host=localhost;dbname=btth01_cse485;charset=utf8", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
           
            $sql = "select * from acountadmin where user = ? and password = ?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$tendangnhap, $matkhau]);

        // B3. Xử lý kết quả
        $Loginadmins = [];
        while ($row = $stmt->fetch()) {
            $loginadmin = new Loginadmin($row['id'], $row['user'], $row['password']);
            array_push($Loginadmins, $loginadmin);
        }
        // Mảng (danh sách) các đối tượng Article Model

        return $Loginadmins;
    }
}
}