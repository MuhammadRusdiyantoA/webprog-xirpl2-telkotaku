<?php

include './koneksi.php';
include './navbar.php';

$id = $_GET['id'];

$sql = $conn->query("SELECT * FROM artikel where id_artikel = $id");
$result = mysqli_fetch_array($sql)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telkotaku | <?php echo "$result[1]"?></title>
    <link rel="stylesheet" href="../css/style-articles.css">
</head>
<body>
    <?php
    
    echo "<img src='".$result[3]."'>
    <br><br><br><h1>".$result[1]."</h1>
    <p>".$result[2]."</p>"
    
    ?>
</body>
</html>