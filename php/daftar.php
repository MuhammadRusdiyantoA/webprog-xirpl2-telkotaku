<?php

include './koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

if($username == '' || $password == ''){
    setcookie("error", '');
    header('Location: ./sign-up.php');
    exit;
}
else {
    $sql = "INSERT INTO pengguna (username, password) values ('$username', '$password')";
    $query = $conn->query($sql);
    setcookie("username", $username);
    header("Location: ./articles.php");
    $conn->close();
    exit;
}

?>