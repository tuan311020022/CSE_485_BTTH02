<?php 
class ManagerAuthorController{
    public function index(){
        echo "Tương tác với sevices/Models from Author";
        echo "Tương tác với View from Author";
    }
    public function add(){
        include ("View/Author/add_Author.php");
    }
    public function list(){
        include("View/Author/list_Author.php");
    }
}
