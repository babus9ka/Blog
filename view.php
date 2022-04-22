<?php include "header.php"?>
<?php include "post.php"?>
<?php $post = new Post($db);?>

<div class="container">
    <div class="row"  style="display: block">
        <?php foreach ($post->getSinglePost($_GET['slug']) as $post) { ?>
        <div class="card">
            <img class="card-img-top" src="images/<?=$post['image'] ?>"  alt=""></div>
        <div class="card-body">
            <h4 class="card-title"><?=$post['title'] ?></h4>
            <p class="card-text"><?=$post['description'] ?></p>
        </div>
        <?php } ?>
    </div>
</div>