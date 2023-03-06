<?php

class DBConnection{
    private $conn=null;

    public function __construct(){
        
         try {
            $this->conn = new PDO('mysql:host=localhost:3306;dbname=btth01_cse485','root','thang2002');
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getConnection(){
        return $this->conn;
    }


}