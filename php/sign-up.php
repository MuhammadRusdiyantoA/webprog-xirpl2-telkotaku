<link rel="stylesheet" href="../css/style-sign-up.css">
<link rel="shortcut icon" href="../assets/icon/favicon.ico" type="image/x-icon">
<form class="box" action="./daftar.php" method="post">
<div class='bold-line'></div>
<div class='container'>
  <div class='window'>
    <div class='overlay'></div>
    <div class='content'>
        <div class='welcome'>Hello There!</div>
        <div class='subtitle'>Bikin akun dulu ya~, biar ada notifikasi berita terbaru dari Fanpage Kita nih!.
        <?php
            if(isset($_COOKIE['error'])){
              echo "Tolong isi semua data di bawah!";
              setcookie('error', '', time() - 3600);
            }
        ?>
        </div>
        <div class='input-fields'>
        <form action="./daftar.php" method="post">
            <input type='text' placeholder='Username' name='username' class='input-line full-width'></input>
            <input type='password' placeholder='Password' name="password" class='input-line full-width'></input>
            <div><button type="submit" name="submit" class='ghost-round full-width'>Create Account</button></div>
        </form>
      </div>
    </div>
  </div>
</div>
</form>