<?php
include "header.php";
?>
<div class="container">
    <div class="row">
        <div class="col-12 my-2">
            <div class="list-group">
                <?php foreach ($articles as $article) : ?>
                    <a href="detail.php?id=<?php echo $article['id'] ?>" class="list-group-item list-group-item-action">
                        <?php echo $article['title'] ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>