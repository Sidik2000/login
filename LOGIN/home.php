<?php 
session_start();
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Utama</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<div class="container">
		<div class="header">
			MARCHING BAND
		</div>
		
		<div class="content">
			<div class="box-welcome">
				<font style="">Selamat Datang,</font><br>

				<font style=""><?php echo $_SESSION['nama'] ?></font><br><br>

				<a href="keluar.php">
					<div class="keluar">
						Keluar
					</div></a>

				<a href="daftar-online/form-daftar.php">
					<div class="keluar">
						Pinjam Barang
					</div></a>
			</div>
		</div>

		<div class="footer">
			Copyright &copy; 2022 Galuh Gita Satria
		</div>
	</div>
</body>
</html>