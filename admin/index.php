<?php
session_start();
    
if (!isset($_SESSION['login'])) {
    header("location:admin.php");
}
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
    <link rel="stylesheet" type="text/css" href="../css/index.css">
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

    <!-- jquery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>SANDYAKALA</title>
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

        <!-- Marquee Section -->
        <div class="marquee">
            <h6>Welcome</h6>
            <marquee behavior="" direction="">
                Selamat datang di website Kereta Api SANDYAKALA. Pesan tiket kereta api online dengan harga spesial, jadwal lengkap, dan mitra resmi SANDYAKALA. Transaksi mudah dan aman dengan berbagai pilihan pembayaran.
            </marquee>
            <div class="date-container">
                <h6>Thuesday, Dec 22, 2022</h6>
            </div>
        </div>
        <!-- End of Marquee Section -->
    </header>

    <main class="main">

        <!-- Carousel Section -->
        <section class="carousel">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../images/carousel1.jpg" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="../images/carousel2.jpg" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="../images/carousel3.jpg" class="d-block w-100" alt="">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <!-- End of Carousel Section -->

            <!-- About Section -->
            <section class="about">
                <div class="container">
                    <div class="row justify-content-center mb-5 pb-5">
                        <div class="col-md-7 heading-section text-center">
                            <br><span class="subheading">About</span>
                            <h2 class="mb-4">SANDYAKALA</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-7 col-md-12 col-sm-12">
                            <img src="../images/sandyakala1.png" class="rounded img-fluid d-block mx-auto" alt="App">
                        </div>
                        <div class="right-text col-lg-5 col-md-12 col-sm-12 mobile-top-fix">
                            <div class="left-heading">
                                <h5>Kereta Api Sandyakala</h5>
                            </div>
                            <div class="left-text">
                                <p>Badan Usaha Milik Negara Indonesia yang menyelenggarakan jasa angkutan kereta api. Layanan SANDYAKALA meliputi angkutan penumpang dan barang. Jalur kereta api Trans Sumatera ini rencananya akan menghubungkan beberapa kota di Pulau Sumatera, yakni Pangkalan Brandan - Boekitkoeboe - Balaban - Sungailiput - Karang Baru. <br><br>
                                Meski tak selengkap di pulau Jawa, daftar rute kereta api di Sumatera juga menarik untuk di coba dengan fasilitas yang tak jauh berbeda dengan kereta api di pulau Jawa. Bedanya, kereta api antar provinsi yang bisa Anda naiki sangat terbatas.</p>
                                <a href="about.php" class="btn btn-warning">View More <iconify-icon icon="ion:arrow-forward-circle-outline"></iconify-icon></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End of About Section -->

            <!-- Blog Selection -->
            <section class="blog">
                <div class="container">
                    <div class="row justify-content-center mb-5 pb-5">
                        <div class="col-md-7 heading-section text-center">
                            <span class="subheading">Blog</span>
                            <h2 class="mb-4">Berita</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <h2>Kereta Api Sandyakala Sumut Akan Sediakan 95.688 Tiket untuk Angkutan Libur Nataru 2023</h2>
                            <p>Menghadapi libur Natal 2022 dan Tahun Baru 2023 (Nataru), Kereta Api Sandyakala Divisi Regional I Sumatera Utara akan menyediakan tiket sejumlah 95.688 mulai dari tanggal 18 Desember 2022 hingga tanggal 8 Januari 2023.</p>
                            <p><a class="btn btn-warning" href="blog.php" role="button">View details <iconify-icon icon="ion:arrow-forward-circle-outline"></iconify-icon></a></p>
                        </div>
                        <div class="col-md-4">
                            <h2>Veteran, Nakes, dan Guru Diajak Traveling by KAIS ala Kereta Api Sandyakala Sumut di Hari Pahlawan</h2>
                            <p>Bangsa yang besar adalah bangsa yang menghormati jasa para pahlawan. Slogan tersebut selalu muncul pada momentum Hari Pahlawan. Untuk itu, sebagai generasi penerus bangsa, anak-anak muda masa kini harus bisa meneladani semangat dan nilai kepahlawanan yang telah ditorehkan para pejuang.</p>
                            <p><a class="btn btn-warning" href="blog.php" role="button">View details <iconify-icon icon="ion:arrow-forward-circle-outline"></iconify-icon></a></p>
                        </div>
                        <div class="col-md-4">
                            <h2>Tiap Hari, Kereta Api di Sumatera Utara Angkut 3.000 Ton Logistik</h2>
                            <p>Dalam rangka memperlancar distribusi barang, Kereta Api Sandyakala Divisi Regional (Drive) I Sumatera Utara (Sumut) diketahui telah mengangkut total 3.000 ton logistik setiap hari, dari Belawan maupun Rantauperapat.</p>
                            <p><a class="btn btn-warning" href="blog.php" role="button">View details <iconify-icon icon="ion:arrow-forward-circle-outline"></iconify-icon></a></p>
                        </div>
                    </div>
                </div>   
            </section>
            <!-- End of Blog Selection -->

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

    <!-- Jquery -->
    <script>
        $(document).ready(function () {
            $(function date() {
                const days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
                const months = ['Jan', 'Feb', ' Mar', 'Apr', 'May', 'Jun', 'Jul', ' Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                var now = new Date(Date.now());
                var year = now.getFullYear();
                var date = now.getDate();
                var day = days[now.getDay()];
                var month = months[now.getMonth()];
                $('.date-container').html(
                    day + ', ' + date + ' ' + month + ' ' + year
                )
            })
        })
    </script>
</body>
</html>