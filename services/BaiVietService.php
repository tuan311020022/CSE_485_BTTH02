<?php
include("../configs/DBConnection.php");
include("../models/BaiViet.php");
class BaiVietService{
    public function getAllBaiViet(){
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();

        $sql = "SELECT * from baiviet";
        $data = $conn->query("SELECT * FROM baiviet")->fetchAll();

        $baiviets = [];
        foreach ($data as $row) {
            $baiviet = new BaiViet($row['ma_bviet'],$row['tieude'],$row['ten_bhat'],$row['ma_tloai'],$row['tomtat'],$row['noidung'],$row['ma_tgia'],$row['ngayviet'],$row['hinhanh']);
            array_push($baiviets,$baiviet);
        }

        return $baiviets;
    }
}
?>