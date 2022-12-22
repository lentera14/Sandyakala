<?php
require_once('koneksi.php');
session_start();

if (!isset($_SESSION['login'])) {
    header("location:admin.php");
}

$id = $_GET['id'];

$result = mysqli_query($koneksi, "SELECT * FROM batal WHERE id_batal=$id");

while($item = mysqli_fetch_array($result)){
    $kodeTiket = $item['kode_tiket'];
    $kodeKereta = $item['kode_kereta'];
    $tanggalWaktu = $item['tanggal_waktu'];
    $gerbong = $item['gerbong'];
    $kodeKereta = $item['kode_kereta'];
    $stasiunBrgkt = $item['stasiun_berangkat'];
    $stasiunTujuan = $item['stasiun_tujuan'];
    $namaDepan = $item['nama_depan'];
    $namaBlkg = $item['nama_belakang'];
    $nik = $item['NIK'];
    $jenisKelamin = $item['jenis_kelamin'];
    $kategori = $item['kategori'];
    $email = $item['email'];
    $telepon = $item['telepon'];
    $buktiBayar = $item['bukti_bayar'];
    $username = $item['username'];
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
function timeToString($tanggalWaktu)
    {
        $time = strtotime($tanggalWaktu);

        echo date('H:i:s', $time);
    }
    if($buktiBayar == "") {
        $status = "Tiket Belum Dibayar";
    } else{
        $status = "Tiket Sudah Dibayar";
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <title>PEMBATALAN RESERVASI - SANDYAKALA</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');
            body{
                font-family: 'Playfair Display', serif;
            }
            #nav{
                font-size: 12.76pt;
                background-color: #98C1D9;
            }
            .nav-link{
                color: #3D5A80;
            }
            .nav-link:hover{
                color: white;
            }

            .page-footer{
                background-color: #98C1D9;
            }
            .cr{
                color: #3D5A80;
                font-size: 12pt;
                padding: 25px;
            }
            card{
                margin: 5px;
            }
            h4{
                padding: 10px;
                text-align: center;
            }
            .roundBorder{
                border-radius: 10px;
            }
            .btn-primary{
                background-color: #3D5A80;
                border: #3D5A80 1px solid;
                --bs-btn-bg: #3D5A80;
                --bs-btn-border-color: #3D5A80;
                --bs-btn-hover-bg: #3D5A80;
                --bs-btn-hover-border-color: #3D5A80;
                --bs-btn-active-bg: #3D5A80;
                --bs-btn-active-border-color: #3D5A80;
                --bs-btn-disabled-bg: #3D5A80;
                --bs-btn-disabled-border-color: #3D5A80;
            }
            .btn-primary:hover{
                background-color: #647b99;
                border: #647b99 1px solid;
            }
            .btn-primary:active{
                background-color: #647b99;
                border: #647b99 1px solid;
            }
            .center{
                align-items: center;
                align-content: center;
                align-self: center;
                text-align: center;
            }
            .row{
                margin:0;
            }
        </style>
        <script type="text/javascript"> 
            function kembali(){
                <?php
                unset($_SESSION['id']);
                unset($_SESSION['kodeTiket']);
                ?>
                window.location.href = "dataPembatalan.php"
            }
        </script>
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

        <div class="row d-flex justify-content-center">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        <center>Pembatalan Reservasi SANDYAKALA</center>
                        <hr>
                    </h4>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <center>Data Diri Penumpang</center>
                                        <hr>
                                    </h5>

                                    <table class="table table-striped">
                                        <tr>
                                            <td>Username</td>
                                            <td><?= $username ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nama</td>
                                            <td><?= $namaDepan . " " .$namaBlkg?></td>
                                        </tr>
                                        <tr>
                                            <td>NIK</td>
                                            <td><?= $nik?></td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Kelamin</td>
                                            <td><?=$jenisKelamin?></td>
                                        </tr>
                                        <tr>
                                            <td>Kategori</td>
                                            <td><?=$kategori?></td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td><?=$email?></td>
                                        </tr>
                                        <tr>
                                            <td>Telepon</td>
                                            <td><?=$telepon?></td>
                                        </tr>
                                        <tr>
                                            <td class="table table-borderless center" colspan="2"><a href="mailto:<?=$email?>" class="btn btn-primary btn-sm">Hubungi Email</a></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <center>Data Perjalanan Penumpang</center>
                                        <hr>
                                    </h5>

                                    <table class="table table-striped">
                                        <tr>
                                            <td>Tanggal</td>
                                            <td><?= dateToString($tanggalWaktu)?></td>
                                        </tr>
                                        <tr>
                                            <td>Waktu</td>
                                            <td><?=timeToString($tanggalWaktu)?></td>
                                        </tr>
                                        <tr>
                                            <td>Kode Tiket</td>
                                            <td><?= $kodeTiket?></td>
                                        </tr>
                                        <tr>
                                            <td>Kode Kereta</td>
                                            <td><?= $kodeKereta?></td>
                                        </tr>
                                        <tr>
                                            <td>Gerbong</td>
                                            <td><?=$gerbong?></td>
                                        </tr>
                                        <tr>
                                            <td>Stasiun Keberangkatan</td>
                                            <td><?=$stasiunBrgkt?></td>
                                        </tr>
                                        <tr>
                                            <td>Stasiun Tujuan</td>
                                            <td><?=$stasiunTujuan?></td>
                                        </tr>
                                        <tr>
                                            <td>Status Pembayaran</td>
                                            <td><?=$status?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <table class="table table-borderless">
                        <tr>
                            <td colspan="2"><center><button onclick="kembali()" class="btn btn-primary">Kembali</button></center></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <footer class="page-footer">
            <div class="copy">
                <center>
                    <div class="cr">Copyright &copy; 2022 SANDYAKALA</div>
                </center>
            </div>
        </footer>

        <?php
        $_SESSION['id'] = $id;
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>