<!DOCTYPE html>
<html lang="en" dir="ltr"><head>
    <meta charset="utf-8">
    <title>Telkotaku | Sign In</title>
    <link rel="stylesheet" href="../css/style-sign-In.css">
    <link rel="shortcut icon" href="../assets/icon/favicon.ico">
  </head>
  <body>
    <?php
      include './navbar.php';
    ?>
    <form class="box" action="./masuk.php" method="POST">
      <h1>SIGN IN</h1>
      <input type="text" name="username" placeholder="Username">
      <input type="password" name="pass" placeholder="Password">
      <?php
      
      if(isset($_COOKIE['not-set'])){
        echo '<h6 class="alert" style="color:white; font-size:medium;">tolong isi kolom username dan password!</h6>';
        setcookie("not-set", "", time() - 3600);
      }
      elseif(isset($_COOKIE['false'])){
        echo '<h6 class="alert" style="color:white; font-size:medium;">username atau password yang anda masukkan salah!</h6>';
        setcookie("false", '', time() - 3600);
      }
      
      ?>
      <a href="./sign-up.php">or sign up here</a>
      <input type="submit" name="submit" value="Sign In">
    </form>
  </body>
</html>