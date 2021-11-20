<?php

include './koneksi.php';
include './admin-nav.php';

$id = $_GET['id'];

$sql = $conn->query("SELECT * FROM artikel where id_artikel = $id");
$result = mysqli_fetch_array($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telkotaku | Update Artikel</title>
    <link rel="shortcut icon" href="../assets/icon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/style-formadd.css">
</head>
<body>
<div class="center">
        <h1>UPDATE ARTICLE</h1>
        <form method="post" action="./update.php?id=<?php echo $id;?>">
            <div class="txt_field">
                <input type="text" name="judul" value="<?php echo $result[1];?>"required>
                <span></span>
                <label>Title</label>
            </div>
            <div class="txt_field">
                <input type="text" name="isi" value="<?php echo $result[2];?>" required>
                <span></span>
                <label>Content</label>
            </div>
            <div class="txt_image">Thumbnail Article</div>
            <div><input type="text" name="gambar" value="<?php echo $result[3]?>" placeholder="Link Gambar"></div>
            <br>
            <input type="submit" name='submit' value= "Upload">
        </form> 
    </div> 
</body>
</html>