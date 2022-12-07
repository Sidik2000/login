<!DOCTYPE html>
<html>
<head>
	<title>Halaman LOGIN</title>
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
					Silahkan Login!!
				</div>
				<form action="" method="post">
					Email :<br>
					<input type="email" name="email" required/><br>
					Password :<br>
					<input type="password" name="pass" required/><br><br>
					<input type="submit" name="login" value="Login" /><br>
				</form>
				<?php 
					if(isset($_POST['login'])){
						include 'koneksi.php';
						$cek = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '".$_POST['email']."' AND password = '".$_POST['pass']."'");
						$row = mysqli_fetch_array($cek);
						$count = mysqli_num_rows($cek);
							if($count > 0){
								session_start();
								$_SESSION['nama'] = $row['nama'];
								header('location:home.php');
							}else{
								echo "Email Dan Password Salah!!";
							}
					}
				 ?><br><br>
				 Belum Punya Akun ? Silahkan Klik
				 <a href="index.php">Daftar</a>
			</div>

		</div>
		<div class="footer">
			Copyright &copy; 2022 Galuh Gita Satria
		</div>
	</div>
</body>
</html>