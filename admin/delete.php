<?php
include("../admin/templates/header.php");

include("connect.php");


$id = $_GET['id'];


if ($id) {
    $query = "DELETE FROM posts WHERE id = $id ";
    $result = mysqli_query($conn, $query);

if($result){
    header("Location:../index.php");
}else{
 echo "somethis is wrong";
}
}
?>
