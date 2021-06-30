<?php
$documentTitle = "Edit: " . $article['title'];
include "header.php";
?>
<div class="container">
    <form method="post">
        <input type="hidden" name="id" value="<?= $articleId ?>">
        <div class="mb-3">
            <label for="inpTitle" class="form-label">Title</label>
            <input type="text" class="form-control" id="inpTitle" name="title" value="<?= $article['title'] ?>">
        </div>
        <div class="mb-3">
            <label for="txtContent" class="form-label">Content</label>
            <textarea class="form-control" id="txtContent" rows="3" name="content"><?= $article['content'] ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Article</button>
    </form>
</div>
<?php include "footer.php"; ?>