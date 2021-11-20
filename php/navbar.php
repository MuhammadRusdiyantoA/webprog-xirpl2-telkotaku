<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../css/navbar.css?v=<?php echo time();?>">
</head>
<body>
    <header>
        <div class="nav">
            <h1>TELKOTAKU</h1>
            <ul class="nav-buttons">
                <li><a href="../landing-page.php">Home</a></li>
                <li><a href="./articles.php">Articles</a></li>
                <li><a href="./about.php">About</a></li>
                <li>
                    <?php
                    
                    if(isset($_COOKIE['username'])){
                        echo "<a href='./sign-out.php'>".$_COOKIE['username']."</a>";
                    }
                    else {
                        echo "<a href='./sign-in.php'>Sign In</a>";
                    }
                    
                    ?>
                </li>
            </ul>
        </div>
    </header>
</body>
</html>