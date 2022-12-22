<?php
	session_start();
    
    if (isset($_POST['login'])) {

        include "koneksi.php";
        if ($_SESSION['captcha'] != $_POST['captcha']) {
            ?> <script>alert('Kode Captcha TIdak Sesuai')</script> <?php   
        }
        else{
            $nameID = $_SESSION['nameID'] = $_POST['nameID'];
 			$password = $_SESSION['password'] = md5($_POST['password']);
 			$nip = $_SESSION['nip'] = $_POST['nip'];
        
            $query_sql = "SELECT nameID, password, nip FROM admin WHERE nameID='$nameID' AND password='$password' AND nip='$nip'";
        
            $result = mysqli_query($koneksi, $query_sql);
            
            if(mysqli_num_rows($result) > 0){
                    if (isset($_COOKIE['nameID'])) {
                        $_SESSION['nameID'] = $_COOKIE['nameID'];
                        $_SESSION['password'] = $_COOKIE['password'];
                        $_SESSION['nip'] = $_COOKIE['nip'];
                        $_SESSION['login'] = "login";
                        
                    }
                    if (isset($_POST['remember'])) {
                 		setcookie("nameID", $_POST['nameID'], time() + (60 * 60 * 24));
                     	setcookie("password", $_POST['password'], time() + (60 * 60 * 24));
                     	setcookie("nip", $_POST['nip'], time() + (60 * 60 * 24));
                 	}
                 	header("location:profadm.php");
            } else {
                ?> <script>alert('Terdapat Kesalahan Input')</script> <?php
            }
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../logreg.css">
	<style type="text/css">
		body{
			font-family: 'Playfair Display', serif;
		}
	</style>

	<title>LOGIN ADMIN - SANDYAKALA</title>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg" id="nav">
			<div class="container-fluid">
			    <a class="navbar-brand" href="#">
			    	<img src="../images/logo.png" alt="" height="75" class="d-inline-block align-text top">
			    </a>
			    
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			      <span class="navbar-toggler-icon"></span>
			    </button>
			    
			    <div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="index.php">Home</a>
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
							<a class="nav-link" href="dash.php">Dashboard</a>
						</li>
						<li>
							<a class="nav-link" href="konfirmasi.php">Konfirmasi Pembatalan</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="dataReservasi.php">Data Reservasi</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="dataPembatalan.php">Data Pembatalan</a>
						</li>
						<li>
							<a class="nav-link" href="user.php">User</a>
						</li>
						<li>
							<a class="nav-link" href="admin.php" id="login">Login</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<main class="konten">
		<div class="container">
			<center>
				<h4>LOGIN ADMIN SANDYAKALA</h4>

				<hr>
                
				<form action="" method="POST">
					<div class="login">
						<div class="log">
							<span class="ket">ID NAMA</span>
							<input type="text" name="nameID" placeholder="ID Nama" required>
						</div>

						<div class="log">
							<span class="ket">Password</span>
							<input type="password" name="password" placeholder="Password" minlength="7" required>
						</div>

						<div class="log">
							<span class="ket">NIP</span>
							<input type="text" name="nip" placeholder="Nomor Induk Pegawai" required>
						</div>

						<div class="log">
							<span class="ket"><img src="../gambar.php" /></span>
							<input type="text" name="captcha" placeholder="Masukkan Kode Captcha" required>
						</div>

						<div class="log">
							<h6 class="ket">Remember Me <input type="checkbox" name="remember"></h6>
						</div>

						<div class="log">
							<input type="submit" class="btn btn-info" name="login" value="Login">
						</div>
					</div>
				</form>
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