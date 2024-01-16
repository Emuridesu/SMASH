<!DOCTYPE html>
<html lang="ja">
<head>

</head>
<body>
    <header>
<?php require("_header_view.php");?>
    </header>
    <main class="container py-4">
        <?php //require("_message_view.php");?>
        <div class="row mt-3">
            <div class="col-6">
                <h3>Sign in</h3>
                <hr>
                <form action="signin_post.php" method="post">
                    <input type="hidden" name="csrf_token" value="<?= h($csrf_token) ?>" />
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-secondary">Sign in</button>
                </form>
                <hr>
                <a href="signup.php">Sign up an account</a>
            </div>
        </div>
    </main>
    <footer class="footer bg-secondary text-white">
<?php require("_footer_view.php")?>
    </footer>
</body>
</html>