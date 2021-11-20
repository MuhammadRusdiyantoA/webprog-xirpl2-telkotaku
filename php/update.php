<?php

include './koneksi.php';

$id = $_GET['id'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$gambar = $_POST['gambar'];

$sql = $conn->query("UPDATE artikel SET judul = '$judul', isi = '$isi', link_gambar = '$gambar' where id_artikel = $id");

setcookie('updated', 'a');
header("Location: ./admin-home.php");
$conn->close();
exit;

?>