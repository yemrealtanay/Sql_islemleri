<?php include "header.php"; ?>
<div class="container">
    <form method="post">
        <div class="mb-3">
            <label for="inpTitle" class="form-label">Title</label>
            <input type="text" class="form-control" id="inpTitle" name="title">
        </div>
        <div class="mb-3">
            <label for="txtContent" class="form-label">Content</label>
            <textarea class="form-control" id="txtContent" rows="3" name="content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save New Article</button>
    </form>
</div>
<?php include "footer.php"; ?>