<?php 
	session_start();
	
	if (!isset($_SESSION['login'])) {
		header("location:admin.php");
	}
	
	if (isset($_POST['logout'])) {
		session_destroy();
		
		if (isset($_COOKIE['nameID'])) {
			setcookie("nameID", $_SESSION['nameID'], time() - 3600);
			setcookie("password", $_SESSION['password'], time() - 3600);
			setcookie("nip", $_SESSION['nip'], time() - 3600);
		}
		header("location:admin.php");
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
	<link rel="stylesheet" type="text/css" href="../profil.css">
	<style type="text/css">
		body{
			font-family: 'Playfair Display', serif;
		}
	</style>

	<title>PROFIL - SANDYAKALA</title>
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
							<a class="nav-link" href="profadm.php" id="login"><?= $_SESSION['nameID'] ?></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	
	<main>
		<?php
			require_once('koneksi.php');
			$admin = mysqli_query($koneksi, "SELECT * FROM admin WHERE nameID='$_SESSION[nameID]'");
		?>

		<div class="profil">
			<div class="container">
				<center>
					<h4><b>Selamat Datang <?= $_SESSION['nameID'] ?>!</b></h4>
				</center>
				
				<br>
					
				<div class="row mt-3">
					<table class="table table-bordered">
						<?php
							while ($data = mysqli_fetch_array($admin)) {
						?>
							<tr>
								<th>Nama</th>
								<td><?= $data['nama']; ?></td>
							</tr>
							<tr>
								<th>NIP</th>
								<td><?= $data['nip']; ?></td>
							</tr>
							<tr>
								<th>Alamat</th>
								<td><?= $data['alamat']; ?></td>
							</tr>
							<tr>
								<th>Telepon</th>
								<td><?= $data['telepon']; ?></td>
							</tr>
							<tr>
								<th>Email</th>
								<td><?= $data['email']; ?></td>
							</tr>
							<tr>
								<th>Status</th>
								<td><?= $data['status']; ?></td>
							</tr>
						<?php	} ?>
					</table>

					<form method="POST">
						<input class="btn btn-danger" type="submit" name="logout" value="Logout">
					</form>
				</div>
			</div>
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