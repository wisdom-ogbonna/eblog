<?php

if(isset($_POST['create'])){
    $title = $_POST['title'];
    $summary = $_POST['summary'];
    $content = $_POST['content'];
    $date = $_POST['date'];


    echo  $title;
    echo "<br>";
    echo  $summary;
    echo "<br>";
    echo  $content;
    echo "<br>";
    echo  $date;
}
?>