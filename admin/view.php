<?php
include("../admin/connect.php");
include("../admin/templates/header.php");

$id = $_GET['id'];

if ($id) {
    $query = "SELECT * FROM posts WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $title = $row['title'];
            $summary = $row['summery'];
            $content = $row['content'];
            $date = $row['date'];
            ?>
            <div class="container mt-5">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h1><?php echo htmlspecialchars($title); ?></h1>
                    </div>
                    <div class="card-body">
                        <p class="text-muted"><?php echo htmlspecialchars($summary); ?></p>
                        <hr>
                        <p><?php echo nl2br(htmlspecialchars($content)); ?></p>
                    </div>
                    <div class="card-footer text-right">
                        <small class="text-muted"><?php echo htmlspecialchars($date); ?></small>
                    </div>
                </div>
            </div>
            <?php
        }
    } else {
        echo "<div class='container mt-5'><div class='alert alert-danger'>Post not found.</div></div>";
    }
} else {
    echo "<div class='container mt-5'><div class='alert alert-danger'>Invalid post ID.</div></div>";
}

include("../admin/templates/footer.php");
?>
