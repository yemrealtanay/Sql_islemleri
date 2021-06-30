<?php
$documentTitle = $article['title'];
$documentContent = $article['content'];
include "header.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md-3  my-2">
            <div class="list-group">
                <?php foreach ($articles as $article) : ?>
                    <a href="detail.php?id=<?php echo $article['id'] ?>" class="list-group-item list-group-item-action <?php if ($_GET['id'] == $article['id']) echo "active" ?>">
                        <?php echo $article['title'] ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-md-9  my-2">
            <div class="card">
                <div class="card-body">
                    <h1><?php echo $documentTitle; ?></h1>
                    <p><?php echo $documentContent; ?></p>
                    <?php if (isset($_SESSION['username'])) : ?>
                        <hr>
                        <a href="editarticle.php?id=<?= $articleId ?>" class="btn btn-outline-info">Edit</a>
                        <a href="deletearticle.php?id=<?= $articleId ?>" class="btn btn-outline-danger">Delete</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>