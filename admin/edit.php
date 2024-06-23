<?php
include("../admin/templates/header.php");

include("connect.php");


$id = $_GET['id'];


if ($id) {
    $query = "SELECT * FROM posts WHERE id = $id";
    $result = mysqli_query($conn, $query);
}
?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Edit Form</h2>
                </div>
                <div class="card-body">

                    <form action="../proccess.php" method="post">
                        <?php
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="<?php echo $row['title']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="summary">Summary</label>
                                <textarea class="form-control" id="summary" name="summary" placeholder="Enter Summary"><?php echo $row['summary']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="post">Post</label>
                                <textarea class="form-control" id="post" name="content" placeholder="Enter Post"><?php echo $row['content']; ?></textarea>
                            </div>
                            <input name="id" type="hidden" value=" <?php echo $row['id']; ?>">
                            <input type="hidden" name="current_date" value="<?php echo date("y/m/d"); ?>" id="date">
                            <button type="submit" class="btn btn-primary btn-block" name="update">Submit</button>

                        <?php
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>