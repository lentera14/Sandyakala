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
			</center>

			<hr>

			<form action="input.php" method="POST">
				<div class="user">
					<div class="input">
						<span class="ket">Username</span>
						<input type="text" name="username" placeholder="Username" required>
					</div>

					<div class="input">
						<span class="ket">Password</span>
						<input type="password" id="pwd" name="password" placeholder="Password" pattern="(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
						<div id="syarat">
							<p id = "length" class = "invalid"> Mini 8 karakter </p>
							<p id = "letter" class = "invalid"> Huruf kecil </p>
							<p id = "capital" class = "invalid"> Huruf KAPITAL </p>
							<p id = "number" class = "invalid"> Angka (0-9) </p>
						</div>
					</div>

					<div class="input">
						<span class="ket">Ulang Password</span>
						<input type="password" name="ulangPass" placeholder="Tulis Ulang Password" required>
					</div>

					<div class="input">
						<span class="ket">Nama</span>
						<input type="text" name="nama" placeholder="Nama Lengkap" required>
					</div>

					<div class="input">
						<span class="ket">NIK</span>
						<input type="text" name="nik" placeholder="Nomor Induk Kependudukan" required>
					</div>

					<div class="input">
						<span class="ket">Tempat Lahir</span>
						<input type="text" name="tempat" placeholder="Tempat Lahir" required>
					</div>

					<div class="input">
						<span class="ket">Tanggal Lahir</span>
						<input type="date" name="tanggal" placeholder="Tanggal Lahir" max="2022-12-22" required>
					</div>

					<div class="input">
						<span class="ket">Alamat</span>
						<textarea name="alamat" placeholder="Alamat Rumah" required></textarea>
					</div>

					<div class="input">
						<span class="ket">Telepon</span>
						<input type="number" name="telepon" placeholder="Nomor Aktif" required>
					</div>

					<div class="input">
						<span class="ket">Email</span>
						<input type="email" name="email" placeholder="Email Aktif" required>
					</div>

					<div class="jk">
						<span class="ket">Jenis Kelamin</span>
						<input type="radio" name="jenis" value="pria">Pria
						<input type="radio" name="jenis" value="wanita">Wanita
					</div>

					<div class="button">
						<input id="btn" type="submit" class="btn btn-info" name="submit" value="Registrasi">
					</div>
				</div>
			</form>
		</div>
	</main>

	<footer class="page-footer">
		<div class="copy">
			<center>
				<div class="cr">Copyright &copy; 2022 SANDYAKALA</div>
			</center>
		</div>
	</footer>

	<!-- Java -->
 	<script type="text/javascript">
 		var myInput = document.getElementById("pwd");
		var letter = document.getElementById("letter");
		var capital = document.getElementById("capital");
		var number = document.getElementById("number");
		var length = document.getElementById("length");

		myInput.onfocus = function() {
			document.getElementById("syarat").style.display = "block";
		}
		myInput.onblur = function() {
			document.getElementById("syarat").style.display = "none";
		}
		
		myInput.onkeyup = function() {
			var lowerCaseLetters = /[a-z]/g;
				if(myInput.value.match(lowerCaseLetters)) {  
					letter.classList.remove("invalid");
					letter.classList.add("valid");
				} 
				else {
					letter.classList.remove("valid");
					letter.classList.add("invalid");
				}
			
			var upperCaseLetters = /[A-Z]/g;
				if(myInput.value.match(upperCaseLetters)) {  
					capital.classList.remove("invalid");
					capital.classList.add("valid");
				} 
				else {
					capital.classList.remove("valid");
					capital.classList.add("invalid");
				}

			var numbers = /[0-9]/g;
				if(myInput.value.match(numbers)) {  
					number.classList.remove("invalid");
					number.classList.add("valid");
				} 
				else {
					number.classList.remove("valid");
					number.classList.add("invalid");
				}

			if(myInput.value.length >= 8) {
				length.classList.remove("invalid");
				length.classList.add("valid");
			} 
			else {
				length.classList.remove("valid");
				length.classList.add("invalid");
			}
		}
 	</script>
</body>
</html>