<?php 
	session_start();
		
	if (!isset($_SESSION['username'])) {
		header("location:login.php");
	}

	function dateToString($tanggalWaktu)
    {
        $date = strtotime($tanggalWaktu);
        // bulan
        $months = array(1 => "Januari",    //January
                     2 => "Februari", //February
                     3 => "Maret",      //March
                     4 => "April", //April
                     5 => "Mei", //May
                     6 => "Juni",         //Jun
                     7 => "Juli",      //July
                     8 => "Agustus", //August
                     9 => "September",       //September
                     10=> "Oktober",    //October
                     11=> "November", //November
                     12=> "Desember");      //December
 
        $mnt = date("n", $date);
        $bulan = $months[$mnt];

        // hari
        $days = array(1 => "Senin", // Monday
             2 => "Selasa",      //Thuesday
             3 => "Rabu",     //Wensday
             4 => "Kamis",    //Thursday
             5 => "Jumat",        // Friday
             6 => "Sabtu",       //Saturday
             7 => "Minggu");   //Sunday
        
        $dy = date("N", $date);
    	$hari = $days[$dy];

        // all
    	echo $hari .", ". date('d', $date) . " " . $bulan . " " . date('Y', $date);
    }
    
	if (isset($_POST['logout'])) {
		session_destroy();
			
		if (isset($_COOKIE['username'])) {
			setcookie("username", $_SESSION['username'], time() - 3600);
			setcookie("password", $_SESSION['password'], time() - 3600);
		}
		header("location:login.php");
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
	<link rel="stylesheet" type="text/css" href="profil.css">
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
							<a class="nav-link" href="profil.php" id="login"><?= $_SESSION['username'] ?></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<main>
		<div class="profil">
			<div class="container">
				<center>
					<h4><b>Selamat Datang <?= $_SESSION['username'] ?>!</b></h4>
				</center>

				<br>

				<div class="row mt-3">
					<table class="table table-bordered">
						<?php
							require_once('koneksi.php');

							$result = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$_SESSION[username]'");
							while ($item = mysqli_fetch_array($result)) {
						?>
							<tr>
								<th>Nama</th>
								<td><?= $item['nama']; ?></td>
							</tr>
							<tr>
								<th>Tempat Lahir</th>
								<td><?= $item['tempat']; ?></td>
							</tr>
							<tr>
								<th>Tanggal Lahir</th>
								<td><?= dateToString($item['tanggal']); ?></td>
							</tr>
							<tr>
								<th>Alamat</th>
								<td><?= $item['alamat']; ?></td>
							</tr>
							<tr>
								<th>Telepon</th>
								<td><?= $item['telepon']; ?></td>
							</tr>
							<tr>
								<th>Email</th>
								<td><?= $item['email']; ?></td>
							</tr>
							<tr>
								<th>Jenis Kelamin</th>
								<td><?= $item['jenis']; ?></td>
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