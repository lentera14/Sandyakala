<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/blog.css">
    <style type="text/css">
        #nav{
            font-size: 17px;
            background-color: #98C1D9;
        }
        .nav-link{
            color: #3D5A80;
        }
        .navbar-nav:hover{
            --bs-nav-link-hover-color: #ffffff;
        }
        .page-footer{
			background-color: #98C1D9;
		}
		.cr{
			color: #3D5A80;
			font-size: 12pt;
			padding: 25px;
		}
    </style>

    <!-- Button -->
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>

    <title>BLOG - SANDYAKALA</title>
</head>
<body>
    <!-- Header -->
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
                            <?php
                                if (!isset($_SESSION['username'])) {?>
                                    <a class="nav-link" href="login.php" id="login">Login</a>
                                <?php }
                                else{ ?>
                                    <a class="nav-link" href="profil.php" id="login"><?= $_SESSION['username'] ?></a>
                                <?php }
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>    

	<main class="main">

	<section class="blog">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-5">
				<div class="col-md-7 heading-section text-center">
					<br><span class="subheading">Blog</span>
					<h2 class="mb-4">Berita</h2>
				</div>
			</div>
			<div class="row d-flex">
				<div class="col-md-4 d-flex">
					<div class="blog-entry justify-content-end">
						<a href="#" class="block-20" style="background-image: url('images/gallery1.jpeg');">
						</a>
						<div class="text mt-3 float-right d-block">
							<h3 class="heading"><a href="#">Kereta Api Sandyakala Sumut Akan Sediakan 95.688 Tiket untuk Angkutan Libur Nataru 2023</a>
							</h3>
							<div class="d-flex align-items-center mt-4 meta">
								<p class="mb-0"><a href="#" class="btn btn-warning">Read More <iconify-icon icon="ion:arrow-forward-circle-outline"></iconify-icon></a></p>
								<p class="ml-auto mb-0">
									<a href="#" class="mr-2" style="color: gray;"><iconify-icon icon="subway:admin"></iconify-icon> Admin </a>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex">
					<div class="blog-entry justify-content-end">
						<a href="#" class="block-20" style="background-image: url('images/gallery2.jpeg');">
						</a>
						<div class="text mt-3 float-right d-block">
							<h3 class="heading"><a href="#">Veteran, Nakes, dan Guru Diajak Traveling by KAIS ala Kereta Api Sandyakala Sumut di Hari Pahlawan</a>
							</h3>
							<div class="d-flex align-items-center mt-4 meta">
								<p class="mb-0"><a href="#" class="btn btn-warning">Read More <iconify-icon icon="ion:arrow-forward-circle-outline"></iconify-icon></a></p>
								<p class="ml-auto mb-0">
									<a href="#" class="mr-2" style="color: gray;"><iconify-icon icon="subway:admin"></iconify-icon> Admin </a>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex">
					<div class="blog-entry">
						<a href="#" class="block-20" style="background-image: url('images/gallery3.png');">
						</a>
						<div class="text mt-3 float-right d-block">
							<h3 class="heading"><a href="#">Tiap Hari, Kereta Api di Sumatera Utara Angkut 3.000 Ton Logistik</a>
							</h3>
							<div class="d-flex align-items-center mt-4 meta">
								<p class="mb-0"><a href="#" class="btn btn-warning">Read More <iconify-icon icon="ion:arrow-forward-circle-outline"></iconify-icon></a></p>
								<p class="ml-auto mb-0">
									<a href="#" class="mr-2" style="color: gray;"><iconify-icon icon="subway:admin"></iconify-icon> Admin </a>
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4 d-flex">
					<div class="blog-entry justify-content-end">
						<a href="#" class="block-20" style="background-image: url('images/gallery4.jpeg');">
						</a>
						<div class="text mt-3 float-right d-block">
							<h3 class="heading"><a href="#">Siap-siap, Kereta Api Sandyakala Wisata Bakal Tebar Promo Tiket Kereta dalam Expo 2023</a>
							</h3>
							<div class="d-flex align-items-center mt-4 meta">
								<p class="mb-0"><a href="#" class="btn btn-warning">Read More <iconify-icon icon="ion:arrow-forward-circle-outline"></iconify-icon></a></p>
								<p class="ml-auto mb-0">
									<a href="#" class="mr-2" style="color: gray;"><iconify-icon icon="subway:admin"></iconify-icon> Admin </a>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex">
					<div class="blog-entry justify-content-end">
						<a href="#" class="block-20" style="background-image: url('images/gallery5.jpeg');">
						</a>
						<div class="text mt-3 float-right d-block">
							<h3 class="heading"><a href="#">Sambut Natal dan Tahun Baru, Kereta Api Sandyakala Akan Siapkan 5,5 Juta Tempat Duduk</a>
							</h3>
							<div class="d-flex align-items-center mt-4 meta">
								<p class="mb-0"><a href="#" class="btn btn-warning">Read More <iconify-icon icon="ion:arrow-forward-circle-outline"></iconify-icon></a></p>
								<p class="ml-auto mb-0">
									<a href="#" class="mr-2" style="color: gray;"><iconify-icon icon="subway:admin"></iconify-icon> Admin </a>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex">
					<div class="blog-entry">
						<a href="#" class="block-20" style="background-image: url('images/gallery6.jpeg');">
						</a>
						<div class="text mt-3 float-right d-block">
							<h3 class="heading"><a href="#">Ramai soal Aplikasi Kereta Api Sandyakala Access Dikeluhkan "Down" Saat Promo Tiket 12.12</a>
							</h3>
							<div class="d-flex align-items-center mt-4 meta">
								<p class="mb-0"><a href="#" class="btn btn-warning">Read More <iconify-icon icon="ion:arrow-forward-circle-outline"></iconify-icon></a></p>
								<p class="ml-auto mb-0">
									<a href="#" class="mr-2" style="color: gray;"><iconify-icon icon="subway:admin"></iconify-icon> Admin </a>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex">
					<div class="blog-entry justify-content-end">
						<a href="#" class="block-20" style="background-image: url('images/gallery7.jpeg');">
						</a>
						<div class="text mt-3 float-right d-block">
							<h3 class="heading"><a href="#">Antisipasi Keadaan Darurat, Kereta Api Sandyakala Siapkan Material di Sepanjang Jalur KA</a>
							</h3>
							<div class="d-flex align-items-center mt-4 meta">
								<p class="mb-0"><a href="#" class="btn btn-warning">Read More <iconify-icon icon="ion:arrow-forward-circle-outline"></iconify-icon></a></p>
								<p class="ml-auto mb-0">
									<a href="#" class="mr-2" style="color: gray;"><iconify-icon icon="subway:admin"></iconify-icon> Admin </a>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex">
					<div class="blog-entry justify-content-end">
						<a href="#" class="block-20" style="background-image: url('images/gallery8.jpeg');">
						</a>
						<div class="text mt-3 float-right d-block">
							<h3 class="heading"><a href="#">Kereta Api Sandyakala Sumbar Akan Beroperasi 2 Jam Lebih Selama Musim Mudik Lebaran 2022</a>
							</h3>
							<div class="d-flex align-items-center mt-4 meta">
								<p class="mb-0"><a href="#" class="btn btn-warning">Read More <iconify-icon icon="ion:arrow-forward-circle-outline"></iconify-icon></a></p>
								<p class="ml-auto mb-0">
									<a href="#" class="mr-2" style="color: gray;"><iconify-icon icon="subway:admin"></iconify-icon> Admin </a>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex">
					<div class="blog-entry">
						<a href="#" class="block-20" style="background-image: url('images/gallery9.png');">
						</a>
						<div class="text mt-3 float-right d-block">
							<h3 class="heading"><a href="#">Demi Kepentingan Bangsa dan Negara, PT Kereta Api Sandyakala Divre I Sumut Komitmen Jaga Aset</a>
							</h3>
							<div class="d-flex align-items-center mt-4 meta">
								<p class="mb-0"><a href="#" class="btn btn-warning">Read More <iconify-icon icon="ion:arrow-forward-circle-outline"></iconify-icon></a></p>
								<p class="ml-auto mb-0">
									<a href="#" class="mr-2" style="color: gray;"><iconify-icon icon="subway:admin"></iconify-icon> Admin </a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	</main>
    <!-- End of Main Section -->

    <!-- Footer -->
    <footer class="page-footer">
		<div class="copy">
			<center>
				<div class="cr">Copyright &copy; 2022 SANDYAKALA</div>
			</center>
		</div>
	</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>