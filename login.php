<?php
	session_start();
    
    if (isset($_POST['login'])) {

        include "koneksi.php";
        if ($_SESSION['captcha'] != $_POST['captcha']) {
            ?> <script>alert('Terdapat Kesalahan Input')</script> <?php   
        }
        else{
            $username = $_SESSION['username'] = $_POST["username"];
            $password = $_SESSION['password'] = md5($_POST["password"]);
        
            $query_sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        
            $result = mysqli_query($koneksi, $query_sql);
            
            if(mysqli_num_rows($result) > 0){
                    if (isset($_COOKIE['username'])) {
                        $_SESSION['username'] = $_COOKIE['username'];
                        $_SESSION['password'] = $_COOKIE['password'];
                    }
                    if (isset($_POST['remember'])) {
                 		setcookie("username", $_POST['username'], time() + (60 * 60 * 24));
                 		setcookie("password", $_POST['password'], time() + (60 * 60 * 24));
                 	}
                 	header("location:profil.php");
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
	<link rel="stylesheet" type="text/css" href="logreg.css">
	<style type="text/css">
		body{
			font-family: 'Playfair Display', serif;
		}
	</style>

	<title>LOGIN - SANDYAKALA</title>
</head>
<body>
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
				<h4>LOGIN - SANDYAKALA</h4>

				<hr>

				<form action="" method="POST">
					<div class="login">
						<div class="log">
							<span class="ket">Username</span>
							<input type="text" name="username" placeholder="Username" required>
						</div>

						<div class="log">
							<span class="ket">Password</span>
							<input type="password" name="password" placeholder="Password" minlength="8" required>
						</div>

						<div class="log">
							<span class="ket"><img src="gambar.php" /></span>
							<input type="text" name="captcha" placeholder="masukkan kode captcha" required>
						</div>

						<div class="log">
							<h6 class="ket">Remember Me <input type="checkbox" name="remember"></h6>
						</div>

						<div class="log">
							<input type="submit" class="btn btn-info" name="login" value="Login">
						</div>
						
						<div class="log">
							<p class="reg">Belum Memiliki Akun? <a href="regis.php">Registrasi</a></p>
							<hr>
							<p class="reg">Admin Sebagai Admin? <a href="admin/admin.php">Admin</a></p>
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