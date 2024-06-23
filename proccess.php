<?php

if (isset($_POST['create'])) {

    include("admin/connect.php");
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $summary = mysqli_real_escape_string($conn, $_POST['summary']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $current_date = mysqli_real_escape_string($conn, $_POST['current_date']);



    $query = "INSERT INTO posts (title,summary,content,date) VALUES ('$title', '$summary','$content', '$current_date')";

    if (mysqli_query($conn, $query)) {
        header("Location:index.php");
        echo "added to DB Succefully";
    } else {
        die("not working");
    }
}
?>


<?php

if (isset($_POST['update'])) {
    include("admin/connect.php");
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $id = intval($_POST['id']);
    $summary = mysqli_real_escape_string($conn, $_POST['summary']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $current_date = mysqli_real_escape_string($conn, $_POST['current_date']);

    $query = "UPDATE posts SET title='$title', summary='$summary', content='$content', date='$current_date' WHERE id=$id";

    if (mysqli_query($conn, $query)) {
        echo "updated to DB Succefully";
        header("Location:index.php");
    } else {
        die("Update failed: " . mysqli_error($conn));
    }
}
?>



<?php
if (isset($_POST['delete'])) {
    // Handle delete
    if (!empty($_POST['id']) && is_numeric($_POST['id'])) {
        $id = intval($_POST['id']);

        $query = "DELETE FROM posts WHERE id=$id";

        echo "Generated Query: " . $query . "<br>";

        if (mysqli_query($conn, $query)) {
            echo "Deleted from DB Successfully";
        } else {
            die("Delete failed: " . mysqli_error($conn));
        }
    } else {
        die("Invalid ID");
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> you are number <?php echo $id; ?></h1>
    <h1><?php echo $current_date; ?></h1>

</body>

</html>