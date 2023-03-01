<?php
include("services/LoginadminService.php");
class LoginadminController{
    // Hàm xử lý hành động index
    public function index(){
        // Nhiệm vụ 1: Tương tác với Services/Models
        $LoginadminService = new LoginadminService();
        $Loginadmin= $LoginadminService ->getAllLoginadmin();
        return $Loginadmin;
        
    }
}