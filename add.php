<?php include "header.php"; ?>
<?php include "post.php"; ?>
<?php
$post = new Post($db);

if (isset($_POST['btnSubmit'])){
    if (!empty($_POST['title'])&&!empty($_POST['description'])) {
        $title = strip_tags($_POST['title']);
        $description = $_POST['description'];
        $record = $post->addPost($title, $description);
        if ($record) {
            echo "<div class='text-center alert alert-success'>Post added susccessfuly!</div>";
        }
    } else {
        echo"<div class='text-center alert alert-danger'>Every filed is required!</div>";
    }
}

?>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="add.php" method="POST" >
            <div class="card">
                <div class="card-header">Add Post</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea cols="20" name="description" id="editor" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="btnSubmit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </div>
            </form>
        </div>
    </div>
</div>

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<style type="text/css">
    .card{
        margin-top: 10px;
    }
</style>