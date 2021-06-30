<?php
include "header.php";
?>
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-4">
            <?php if (isset($warning)) : ?>
                <div class="alert alert-warning" role="alert">
                    <?= $warning ?>
                </div>
            <?php endif; ?>
            <form action="login.php" method="post">
                <div class="mb-3">
                    <label for="inpUsername" class="form-label">User Name</label>
                    <input name="username" type="text" class="form-control" id="inpUsername" <?php if (isset($_POST['username'])) : ?>value="<?= $_POST['username'] ?>" <?php endif; ?> autofocus required>
                </div>
                <div class="mb-3">
                    <label for="inpPassword" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="inpPassword" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>