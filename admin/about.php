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
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../abcon.css">
    <style type="text/css">
        body{
            font-family: 'Playfair Display', serif;
        }
    </style>
    
    <title>ABOUT US - SANDYAKALA</title>
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
        <div class="container">
            <div class="judul"><center>SANDYAKALA</center></div>
            <div class="slider">
                <div><img src="../images/sandyakala1.png" alt="Image 1"></div>
                <div><img src="../images/sandyakala2.png" alt="Image 2"></div>
                <div><img src="../images/sandyakala3.png" alt="Image 3"></div>
                <div><img src="../images/sandyakala4.png" alt="Image 4"></div>
                <div><img src="../images/sandyakala5.png" alt="Image 5"></div>
            </div>
        </div>

        <div class="container-fluid mt-3">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-11">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-tittle">Filosofi</h5>
                            <hr>
                            <div class="justify-content-center">
                                <div class="spinner-border text-primary" role="status" id="load" style="position: absolute; top: 50%; display: none"></div>
                                <p>Filosofi perusahaan kereta api Sandyakala adalah layanan jasa kereta api lokal yang menghubungkan daerah satu dengan daerah lain.
                                <br>Pada tahun 2022 kami berusaha untuk menjalin kerja sama dengan kereta api indonesia dalam melaksanakan luncuran jasa terbaru kami. Kereta ini ditujukan untuk masyarkat yang menggunakan transportasi umum dengan lintas daerah. Mempermudah akses masyarakat untuk melakukan perjalanan pulang pergi, tanpa khawatir adanya kemacetan. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container-fluid mt-3">
                <div class="row d-flex justify-content-center">
                    <div class="col-sm-11">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-tittle">Tentang kami</h5>
                                <hr>
                                <div class="justify-content-center">
                                    <div class="spinner-border text-primary" role="status" id="load" style="position: absolute; top: 50%; display: none"></div>
                                    <p>SANDYAKALA adalah kata yang kami pilih untuk menjadi sebuah nama perusahaan jasa kereta api lokal yang kami pilih. Sandyakala memiliki arti 'Pertemuan Waktu' yakni mengandung makna perpaduan kekuatan besar yang berbeda dalam sebuah pertemuan ilmiah, sehingga kami bermaksud agar alat transportasi ini dapat memberikan manfaat untuk langkah yang lebih baik dalam kehidupan sosial. Seperti cahaya merah saat senja yang memberikan ketenangan bagi penikmatnya.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <div class="judul"><center>Struktur Jabatan</center></div>   

                <div class="row">
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="profil">
                            <div class="img">
                                <img src="../images/profil1.png" alt="">
                            </div>
                            <div class="tim-content">
                                <h3 class="title">Nanditya Vianti Putri</h3>
                                <span class="post">K3521057</span>
                            </div>
                            <ul class="sosmed">
                                <li><a href="https://www.instagram.com/naviantiii" target="_blank" rel="noopener" class="fab fa-instagram"></a></li>
                                <li><a href="https://twitter.com/potatoskies_" target="_blank" rel="noopener" class="fab fa-twitter"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="profil">
                            <div class="img">
                                <img src="../images/profil2.png" alt="">
                            </div>
                            <div class="tim-content">
                                <h3 class="title">Meidy Yolandia</h3>
                                <span class="post">K3521041</span>
                            </div>
                            <ul class="sosmed">
                                <li><a href="https://www.instagram.com/mybxlws" target="_blank" rel="noopener" class="fab fa-instagram"></a></li>
                                <li><a href="https://twitter.com/lulalolaa_" target="_blank" rel="noopener"class="fab fa-twitter"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="profil">
                            <div class="img">
                                <img src="../images/profil3.png" alt="">
                            </div>
                            <div class="tim-content">
                                <h3 class="title">Lentera Farahdiba</h3>
                                <span class="post">K3521077</span>
                            </div>
                            <ul class="sosmed">
                                <li><a href="https://www.instagram.com/aaretnel" target="_blank" rel="noopener"class="fab fa-instagram" ></a></li>
                                <li><a href="https://twitter.com/aretnel" target="_blank" rel="noopener"class="fab fa-twitter"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="profil">
                            <div class="img">
                                <img src="../images/profil4.png" alt="">
                            </div>
                            <div class="tim-content">
                                <h3 class="title">Febia Nareswara</h3>
                                <span class="post">K3521025</span>
                            </div>
                            <ul class="sosmed">
                                <li><a href="https://www.instagram.com/febiaaa9" target="_blank" rel="noopener" class="fab fa-instagram"></a></li>
                                <li><a href="https://twitter.com/biaaaja"target="_blank" rel="noopener" class="fab fa-twitter"></a></li>
                            </ul>
                        </div>
                    </div>
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- Slick JS --> 
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Our Script -->
    <script>
        $(document).ready(function(){
            $('.slider').slick({
                autoplay: true,
                autoplaySpeed: 2500,
                dots: true
            });
         });
    </script>
 </body>
</html>