<?php

include './koneksi.php';

$id = $_GET['id'];

$sql = $conn->query("DELETE FROM artikel where id_artikel = $id");

setcookie('deleted', 'a');
header("Location: ./admin-home.php");
$conn->close();
exit;

?>