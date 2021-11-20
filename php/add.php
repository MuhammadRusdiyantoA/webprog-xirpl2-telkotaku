<?php

include './koneksi.php';

$judul = $_POST['judul'];
$isi = $_POST['isi'];
$gambar = $_POST['gambar'];

if($judul == '' || $isi == ''){
    header('Location: ./add-article.php');
    echo '<script type="text/javascript">alert("Tolong isi judul dan konten dari artikel!");</script>';
}
else {
    $conn->query("INSERT INTO artikel (judul, isi, link_gambar) values ('$judul', '$isi', '$gambar')");
    header("Location: ./admin-home.php");
    exit;
}

?>