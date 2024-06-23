<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpw = "";
$dbname = "CMS";

$conn = mysqli_connect($dbhost, $dbuser,$dbpw,$dbname);

if(!$conn){
    die("not working");
}
?>

