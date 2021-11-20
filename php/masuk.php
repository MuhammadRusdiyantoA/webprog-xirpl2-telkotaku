<?php

include './koneksi.php';

$username = $_POST['username'];
$password = $_POST['pass'];

if($username == '' || $password == ''){
    setcookie("not-set", 'a');
    header("Location: ./sign-in.php");
    $conn->close();
    exit;
}

else {
    $sql = "SELECT * FROM pengguna where username = '$username' AND password = '$password'";
    $query = $conn->query($sql);
    $result = mysqli_fetch_array($query);
    $count = mysqli_num_rows($query);
    
    if($count == 1){
        $role = $result[3];
        if($role == 'admin'){
            header("Location: ./admin-home.php");
            setcookie("username", $username);
        }
        else{
            header("Location: ./articles.php");
            setcookie("username", $username);
        }
    $conn->close();
    exit;
    }
    else {
    setcookie("false", "a");
    header("Location: ./sign-in.php");
    $conn->close();
    exit;
    }
}

?>