<?php
class Loginuser{
    // Thuộc tính

    private $id;
    private $user_name;
    private $password;


    public function __construct($id, $user_name,$password){
        $this->id = $id;
        $this->user_name = $user_name;
        $this->password = $password;
    }

    // Setter và Getter
    public function getId(){
        return $this->id;
    }
    public function getUser_name(){
        return $this->user_name;
    }
    public function getPassword(){
        return $this->password;
    }
}
  