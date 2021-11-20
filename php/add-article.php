<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telkotaku - Admin | Tambah Article</title>
    <link rel="stylesheet" href="../css/style-formadd.css">
    <link rel="shortcut icon" href="../assets/icon/favicon.ico" type="image/x-icon">
</head>
<body>
    <?php
    
    include './admin-nav.php';
    
    ?>
    <div class="center">
        <h1>ADD ARTICLE</h1>
        <form method="post" action="./add.php">
            <div class="txt_field">
                <input type="text" name="judul" required>
                <span></span>
                <label>Title</label>
            </div>
            <div class="txt_field">
                <input type="text" name="isi" required>
                <span></span>
                <label>Content</label>
            </div>
            <div class="txt_image">Thumbnail Article</div>
            <div><input type="text" name="gambar" placeholder="Link Gambar"></div>
            <br>
            <input type="submit" name='submit' value= "Upload">
        </form> 
    </div>    
</body>
</html>