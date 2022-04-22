<?php
function uploadImage(){
    $image_name = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];

    $allowed = array('jpeg', 'png', 'jpg');

    $ext = pathinfo($image_name,PATHINFO_EXTENSION);

    if (in_array($ext, $allowed)){
        move_uploaded_file($image_tmp, 'images/'.$image_name);

    } else {
        echo "only png, jpg and jped image format allowed";
    }
    return $image_name;
}