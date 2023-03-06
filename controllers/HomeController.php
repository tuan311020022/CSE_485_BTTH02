<?php
include("../services/BaiVietService.php");
class HomeController{
    public function getAll(){
        $bai_viet = new BaiVietService();
        $bai_viet_s = $bai_viet->getAllBaiViet();
        return $bai_viet_s;
    }
}