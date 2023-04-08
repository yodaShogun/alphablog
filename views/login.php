<?php 
    require '../vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="../public/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../public/assets/css/main.css">
        <link rel="stylesheet" href="../public/assets/css/login.css">
        <noscript><link rel="stylesheet" href="../public/assets/css/noscript.css" /></noscript>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
        <title>AlphaAcademyHT</title>
    </head>
    <body class="is-preload">
        <div id="wrapper">
            <!-- Header -->
            <header id="header" class="alt">
                <a href="index.php" class="logo"><strong>Welcome</strong> <span>Genius</span></a>
                <nav>
                    <a href="#menu">Menu</a>
                </nav>
            </header>
            <!-- Menu -->
				<?php  require './includes/menu.php' ?>
            <div id="main" class="alt">
                <div class="login-box">
                    <h2>Login</h2>
                    <form>
                        <div class="user-box">
                            <input type="text" name="" required="">
                            <label>Username</label>
                        </div>
                        <div class="user-box">
                            <input type="password" name="" required="">
                            <label>Password</label>
                        </div>
                        <a href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Submit
                        </a>
                    </form>
                </div>
            </div>
        </div>
        <?php require './includes/script.php';?>
        <script src="../public/assets/js/userLogin.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    </body>
</html>