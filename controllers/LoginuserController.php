<?php
include("../services/LoginuserService.php");
class LoginuserController{
    // Hàm xử lý hành động index
    public function index(){
        // Nhiệm vụ 1: Tương tác với Services/Models
        $LoginuserService = new LoginuserService();
        $Loginuser= $LoginuserService ->getAllLoginUser();
        return $Loginuser;
        }
        
       
    }
