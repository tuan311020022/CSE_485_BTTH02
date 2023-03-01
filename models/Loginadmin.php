<?php

class Loginadmin{
    private $id;
    private $user;
    private $password; 

    
    public function __construct($id, $user,$password){
        $this->id = $id;
        $this->user = $user;
        $this->password = $password;
    }

    
    // Setter và Getter
    public function getId(){
        return $this->id;
    }
    public function getUser(){
        return $this->user;
    }
    public function getPassword(){
        return $this->password;
    }


  }