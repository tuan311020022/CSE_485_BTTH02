<?php
    include("../configs/DBConnection.php");
    include("../models/Category.php");
    class theloaiService{
        public function getAlltheloai(){
            // 4 bước thực hiện
           $dbConn = new DBConnection();
           $conn = $dbConn->getConnection();
    
            // B2. Truy vấn
            $sql = "SELECT * FROM theloai WHERE ma_tloai=?";
            $stmt = $conn->query($sql);
    
            // B3. Xử lý kết quả
            $theloais = [];
            while($row = $stmt->fetch()){
                $theloai = new Category($row['ma_tloai'], $row['ten_tloai']);
                array_push($theloais,$theloai);
            }
            // Mảng (danh sách) các đối tượng theloai Model
    
            return $theloai;
        }
    }    

?>