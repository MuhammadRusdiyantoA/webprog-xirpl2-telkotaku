<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telkotaku | List Artikel</title>
    <link rel="stylesheet" href="../css/articles.css?v=<?php echo time();?>">
    <link rel="shortcut icon" href="../assets/icon/favicon.ico">
</head>
<body>
    <?php
        include './navbar.php';
        include './koneksi.php';

        if(isset($_COOKIE['username'])){
            $username = $_COOKIE['username'];
            $check = $conn->query("SELECT * FROM pengguna where username = '$username'");
            $role = mysqli_fetch_array($check);
    
            if($role[3] == 'admin'){
                header("Location: ./admin-home.php");
                exit;
            }
        }

        // // ini buat ngasih alert kalo pengguna itu log out
        // if(isset($_COOKIE['sign'])){
        //     echo "<script type='text/javascript'>alert('Anda telah log out dari akun');</script>";
        //     setcookie('sign', '', time() - 3600);
        // }
    ?>
    <h1>Article List</h1>
    <div class="container">
        <?php
        $sql = $conn->query("SELECT * FROM artikel");
        while($results = mysqli_fetch_array($sql)){
            echo "<a href='./detail-artikel.php?id=".$results[0]."' class='article'>
            <img src='".$results[3]."' alt='thumbnail'>
            <div class='text'>
                <h3>".$results[1]."</h3>
                <p>".$results[2]."</p>
            </div>
            </a>";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>