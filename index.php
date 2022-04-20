<?php
include ('header.php');
?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php for ($i=0;$i < 100; $i++) {?>
            <div class="media">
                <div class="media-left media-top">
                    <img src="images/tree.jpg" class="media-object" style="width: 200px; " >
                    <p>
                        Author: Admin <br>
                        Created:2020-04-20
                    </p>
                </div>
                <div class="media-body">
                    <h4 class="media-heading"><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h4>
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis deserunt dicta ducimus officia omnis quae rem tempore tenetur veritatis voluptatum. Ab atque dolore eveniet hic iure laboriosam praesentium sequi soluta.
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

</style>