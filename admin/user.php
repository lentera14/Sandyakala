<?php 
	session_start();
	if (!isset($_SESSION['login'])) {
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

	<title>USER - SANDYAKALA</title>
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
			$user = mysqli_query($koneksi, "SELECT * FROM user ORDER BY id_user DESC");
		?>

		<div class="profil">
			<div class="container">
				<center>
					<h4><b>Data User SANDYAKALA</b></h4>
				</center>

				<br>

				<div class="row mt-3" style="overflow-x:auto;">
					<table class="table table-bordered">
						<tr>
							<th>Nama</th>
							<th>Username</th>
							<th>Alamat</th>
							<th>Telepon</th>
							<th>Email</th>
							<th>Jenis Kelamin</th>
						</tr>


						<?php
							while ($data = mysqli_fetch_array($user)) {
						?>
							<tr>
								<td><?= $data['nama']; ?></td>
								<td><?= $data['username']; ?></td>
								<td><?= $data['alamat']; ?></td>
								<td><?= $data['telepon']; ?></td>
								<td><?= $data['email']; ?></td>
								<td><?= $data['jenis']; ?></td>
							</tr>
						<?php	} ?>
					</table>
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