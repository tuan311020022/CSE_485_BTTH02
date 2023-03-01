<?php 
include("../configs/DBConnection.php");
include("../Models/Author.php");
class AụthorSevices{
    public function getAllAuthors(){
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();
 
         $sql = "SELECT * FROM article INNER JOIN category ON author.category_id=category.id";
         $stmt = $conn->query($sql);
 
         $author = [];
         while($row = $stmt->fetch()){
             $author = new Author($row['Mã tác giả'], $row['Tên tác giả'], $row['Hình tác giả']);
             array_push($author,$author);
         }

 
         return $author;

    }  
}