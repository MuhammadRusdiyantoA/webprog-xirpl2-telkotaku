<!DOCTYPE html>
<html>
<head>
    <title>Telkotaku | Welcome to telkotaku!</title>
    <link rel="stylesheet" href="./css/style-landing.css">
    <link rel="shortcut icon" href="./assets/icon/favicon.ico">
</head>
<body>
    <?php

    if(isset($_COOKIE['sign'])){
        echo "<script type='text/javascript'>alert('Anda telah log out dari akun');</script>";
        setcookie('sign', '', time() -3600);
    }

    ?>
    <header>
        <div class="main">
            <h1>TELKOTAKU</h1>
            <ul>
                <li><a href="./landing-page.php">Home</a></li>
                <li><a href="./php/articles.php">Articles</a></li>
                <li><a href="./php/about.php">About</a></li>
                <li><a class="sign-in" href="./php/sign-in.php">Sign In</a></li>
            </ul>
        </div>
        <div class="title">
            <h1>TELKOTAKU</h1>
        </div>
        <div class="button">
            <a href="./php/articles.php" class="btn">View Articles</a> 
        </div>
    </header>
</body>
</html>