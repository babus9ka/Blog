<?php
include "db.php";
class Post{
    private $db;
    public function __construct($db)
    {
        $this->db = $db;
    }

    public function addPost($title, $description, $image,$created_at){
    $sql = "INSERT INTO posts(title,description, image, created_at)VALUES('$title', '$description', '$image','$created_at')";
    $result = mysqli_query($this->db, $sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function getPost(){
        $sql="SELECT * FROM posts";
        $result = mysqli_query($this->db, $sql);
        return $result;
    }
}

