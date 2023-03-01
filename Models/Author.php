<?php 
class Author{

    private $ma_tgia;
    private $ten_tgia;
    private $hinh_tgia;


    public function __construct($ma_tgia,$ten_tgia,$hinh_tgia){
        $this->$ma_tgia = $ma_tgia;
        $this->ten_tgia = $ten_tgia;
        $this->hinh_tgia = $hinh_tgia;
    }

    // Setter và Getter
    public function getTitle(){
        return $this->ma_tgia;
    }
}