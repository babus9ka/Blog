<?php
include "db.php";
class Post{
    private $db;
    public function __construct($db)
    {
        $this->db = $db;
    }

    public function addPost($title, $description, $image,$created_at,$slug){
    $sql = "INSERT INTO posts(title,description, image, created_at,slug)VALUES('$title', '$description', '$image','$created_at','$slug')";
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

    public function getSinglePost($slug){
        $sql = "SELECT * FROM posts WHERE slug='$slug'";
        $result = mysqli_query($this->db, $sql);
        return $result;
    }
}

