<?php

class DBConnection{
    private $conn=null;

    public function __construct(){
         // B1. Kết nối DB Server
         try {
            // $this->conn = new PDO('mysql:host=localhost;dbname=demo_;port=3306', 'root','');
            //tuan
            $this->conn =new PDO("mysql:host=localhost:3306;dbname=btth01_cse485","root","25122019");

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getConnection(){
        return $this->conn;
    }


}