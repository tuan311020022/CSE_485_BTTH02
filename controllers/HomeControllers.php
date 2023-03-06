<?php
include("../services/AuthorService.php");
class HomeController{
    // Hàm xử lý hành động index
    public function index(){
        $authorServices = new authorServices();
        $author = $authorServices->getAllAuthor();
        return $authorServices;
       
    }
}