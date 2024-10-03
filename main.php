<?php
    session_start();
    if(!isset($_SESSION['korisnik_id']) && !isset($_SESSION['korisnik_username'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projekat NRS</title>
    <link rel="stylesheet" href="styles/stylelogin.css">
</head>
<body>
    <section class="section-bg">
        <div class="container">
            <form class="form" action="auth.php" method="post">
                <div class="form-group">
                    <?php if(isset($_GET['error'])){ ?>
                    <div class="error-message">
                        <?=$_GET['error'] ?>
                    </div>
                    <?php } ?>
                    <h1 class="label">Username</h1>
                    <input type="text" name="username" placeholder="Username" class="input-field">
                </div>
                <div class="form-group">
                    <h1 class="label">Password</h1>
                    <input type="password" name="password" placeholder="Password" class="input-field">
                </div>
                <button type="submit" class="submit-btn">Prijavi se</button>
            </form>
        </div>
    </section>
</body>
</html>
<?php
}else{
    header("Location: index.php");
}
?>