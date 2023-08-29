<div class="article-image-wrap">
    <div class="article-image-align">
        <?php
        $link = "imgsrc/".$_GET['id'].".jpg";
        echo "<img src=$link class='article-image'>";
        ?>
    </div>
    <div class="article-image-align">
        <div class="article-image-desc">
            <?php echo core($_GET['id'].".txt")[5] ?>
        </div>
    </div>
</div>