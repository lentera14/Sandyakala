<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="logreg.css">
	<style type="text/css">
		body{
			font-family: 'Playfair Display', serif;
		}
	</style>

	<title>REGISTRASI - SANDYAKALA</title>
</head>
<body>
<head>
	<header>
		<nav class="navbar navbar-expand-lg" id="nav">
			<div class="container-fluid">
			    <a class="navbar-brand" href="#">
			    	<img src="images/logo.png" alt="" height="75" class="d-inline-block align-text top">
			    </a>
			    
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			      <span class="navbar-toggler-icon"></span>
			    </button>
			    
			    <div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="reservasi.php">Reservasi</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="transaksi.php">Transaksi</a>
						</li>
						<li>
							<a class="nav-link" href="blog.php">Blog</a>
						</li>
						<li>
							<a class="nav-link" href="about.php">About Us</a>
						</li>
						<li>
							<a class="nav-link" href="contact.php">Contact Us</a>
						</li>
						<li>
							<a class="nav-link" href="login.php" id="login">Login</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<main class="konten">
		<div class="container">
			<center>
				<h4>REGISTRASI SANDYAKALA</h4>

				<hr>
				
				<?php
					require_once('koneksi.php');

					if (isset($_POST['submit'])) {
						$user = mysqli_query($koneksi, "SELECT username FROM user WHERE username = '$_POST[username]'");
						$cek = mysqli_fetch_array($user);
							if (isset($cek['username'])) {
								echo "<h5> Username Sudah Ada! Silahkan Membuat Username Baru </h5>";
								echo "<h5> Kembali Mendaftar? </h5>" . '<a href="regis.php">Registrasi</a>';
							}
							elseif ($_POST['password'] != $_POST['ulangPass']) {
								echo "<h5> Password Tidak Sesuai! Silahkan Ulangi Registrasi </h5> <br>";
								echo "<h5> Kembali Mendaftar? </h5>" . '<a href="regis.php">Registrasi</a>';
							}	
									
							else{
								echo "<center> <h5> Selamat Registrasi Anda Telah Berhasil </h5>";
								echo "<center> <h5> Silahkan Menuju Halaman Login </h5>";

								$username = $_POST['username']; 
								$password = md5($_POST['password']); 
								$ulangPass = md5($_POST['ulangPass']);
								$nik = $_POST['nik'];
								$nama = $_POST['nama'];
								$tempat = $_POST['tempat'];
								$tanggal = $_POST['tanggal'];
								$alamat = $_POST['alamat'];
								$telepon = $_POST['telepon'];
								$email = $_POST['email'];
								$jenis = $_POST['jenis'];

								mysqli_query($koneksi, "INSERT INTO user
									VALUES(NULL, '$username', '$password','$ulangPass', '$nik', '$nama', '$tempat', '$tanggal', '$alamat',  '$telepon', '$email', '$jenis')");
							}
					}
				?>
			</center>
	 	</div>
 	</main>

 	<footer class="page-footer">
		<div class="copy">
			<center>
				<div class="cr">Copyright &copy; 2022 SANDYAKALA</div>
			</center>
		</div>
	</footer>
</body>
</html>