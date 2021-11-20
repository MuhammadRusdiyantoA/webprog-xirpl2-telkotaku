<!Doctype HTML>
<html>
<head>
	<title>Telkotaku - Admin | Dashboard</title>
	<link rel="stylesheet" href="../css/style-admin.css?v=<?php echo time();?>">
	<link rel="shortcut icon" href="../assets/icon/favicon.ico" type="image/x-icon">
</head>
<body>
	<?php
	
	include './admin-nav.php';

	if(isset($_COOKIE['deleted'])){
		echo "<script type='text/javascript'>alert('Artikel telah dihapus!');</script>";
		setcookie('deleted', '', time() -3600);
	}
	elseif(isset($_COOKIE['updated'])){
		echo "<script type='text/javascript'>alert('Artikel telah diubah!');</script>";
		setcookie('updated', '', time() - 3600);
	}

	?>
	<div id="main">
		<div class="head">
			<div class="col-div-6">
				<p class="nav"> Dashboard</p>
			</div>
		</div>
		<div class="container">
			<?php
			include './koneksi.php';
			$sql = $conn->query("SELECT * FROM artikel");
			while($results = mysqli_fetch_array($sql)){
				echo "<div class='article'>
				<img src='".$results[3]."' alt='thumbnail'>
				<div class='text'>
					<h3>".$results[1]."</h3>
					<p>".$results[2]."</p>
					<a href='./form-update.php?id=".$results[0]."' class='update-button'>Ubah Artikel</a>
					<a href='./hapus.php?id=".$results[0]."' class='delete-button'>Hapus Artikel</a>
					<a href='./detail-artikel.php?id=".$results[0]."' class='detail-button'>Detail Artikel</a>
				</div>
				</div>";
			}
			$conn->close();
			?>   
		</div>
	</div>
</body>