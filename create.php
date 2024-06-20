<?php
include("admin/templates/header.php")
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Signup Form</h2>
                </div>
                <div class="card-body">
                    <form action="proccess.php" method="post">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                            <label for="summary">Summary</label>
                            <textarea class="form-control" id="summary" name="summary" placeholder="Enter Summary"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="post">Post</label>
                            <textarea class="form-control" id="post" name="content" placeholder="Enter Post"></textarea>
                        </div>
                        <input type="hidden" name="date" id="date">

                        <button type="submit" class="btn btn-primary btn-block" name="create">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include("admin/templates/footer.php")
?>