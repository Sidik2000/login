<!DOCTYPE html>
<html>
<head>
	<title>Halaman Pendaftar</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<div class="container">
		<div class="header">
			MARCHING BAND
		</div>
		
		<div class="content">
			<div class="box-daftar">
				<div class="head-daftar">
					Isi Data Diri Anda di Bawah Ini!
				</div>
				<form action="" method="post">
					Nama Lengkap :<br>
					<input type="text" name="nama" required/><br>
					Telepon :<br>
					<input type="text" name="telp" required/><br>
					Email :<br>
					<input type="email" name="email" required/><br>
					Password :<br>
					<input type="password" name="pass" required/><br><br>
					<input type="submit" name="daftar" value="Daftar" /><br>
				</form>
				<?php 
					if(isset($_POST['daftar'])){
						include 'koneksi.php';
						$insert = mysqli_query($conn, "INSERT INTO tb_user VALUES 
							(NULL, 
							'".$_POST['nama']."',
							'".$_POST['telp']."',
							'".$_POST['email']."',
							'".$_POST['pass']."')");
						if($insert){
							header('location:login.php');
						}else{
							echo "gagal daftar";
						}

					}
				 ?><br><br>
				 Sudah Punya Akun? Silahkan Klik
				 <a href="login.php">LOGIN</a>
			</div>
		</div>
		<div class="footer">
			Copyright &copy; 2022 <a href="daftar-online/data-pendaftar.php">Admin</a> Galuh Gita Satria
		</div>
	</div>
</body>
</html>