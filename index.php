<?php
include ("header.php");
include ("post.php");
?>

<?php
$post = new Post($db);
$post = $post->getPost();


?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php foreach($post as $item) {?>
            <div class="media">
                <div class="media-left media-top">
                    <img src="images/<?=$item['image']?>" class="media-object" style="width: 200px; " >
                    <p>
                        Author: Admin <br>
                        Created:<?=date('Y-m-d',strtotime($item['created_at']))  ?>
                    </p>
                </div>
                <div class="media-body">
                    <h4 class="media-heading"><a href=""><?=$item['title']?></a></h4>

                    <?=htmlspecialchars_decode($item['description'])?>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</div>
<style>
    body{
        text-align: justify;
    }
    img {
        margin-right: 10px;
    }
    .media{
        margin-top: 10px;
    }

</style>