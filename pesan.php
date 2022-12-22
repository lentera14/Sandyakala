<?php
require_once('koneksi.php');
session_start();

$id = $_GET['id'];

$result = mysqli_query($koneksi, "SELECT * FROM jadwal_kereta WHERE id_jadwal=$id");

while($item = mysqli_fetch_array($result)){
    $_SESSION['kodeTiket'] = $item['kode_tiket'];
    $_SESSION['hariWaktu'] = $item['tanggal_waktu'];
    $_SESSION['gerbong'] = $item['gerbong'];
    $_SESSION['kodeKereta'] = $item['kode_kereta'];
    $_SESSION['stasiunBrgkt'] = $item['stasiun_berangkat'];
    $_SESSION['stasiunTujuan'] = $item['stasiun_tujuan'];
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
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <title>FORMULIR RESERVASI - SANDYAKALA</title>
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
            .row{
                margin: 0;
            }
        </style>
        </style>
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
        
        <div class="row d-flex justify-content-center">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        <center>Form Reservasi SANDYAKALA</center>
                        <hr>
                    </h4>

                    <table class="table table-borderless">
                        <tr>
                            <td><b>Kode Tiket : </b><?= $_SESSION['kodeTiket']; ?></td>
                            <td><b>Kode Kereta : </b><?= $_SESSION['kodeKereta']; ?></td>
                        </tr>
                        <tr>
                            <td><b>Hari, Tanggal Keberangkatan : </b><?= dateToString($_SESSION['hariWaktu'])?></td>
                            <td><b>Stasiun Keberangkatan : </b><?= $_SESSION['stasiunBrgkt']; ?></td>
                        </tr>
                        <tr>
                            <td><b>Gerbong Kereta : </b><?= $_SESSION['gerbong']; ?></td>
                            <td><b>Stasiun Tujuan : </b><?= $_SESSION['stasiunTujuan']; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                    </table>
                    <hr>

                    <h5 class="card-title">
                        <center>Identitas Penumpang</center>
                        <br>
                    </h5>

                    <form method="post" action="pesanToDB.php" enctype="multipart/form-data">
                        <table class="table table-borderless">
                            <tr>
                                <td><label for="name" class="form-label">Nama</label></td>
                                <td><div class="input-group">
                                        <input type="text" placeholder="Nama Depan" name="namaDepan" class="form-control" required>
                                        <input type="text" placeholder="Nama Belakang" name="namaBelakang" class="form-control" required>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="nik" class="form-label">NIK</label></td>
                                <td><input type="number" id="nik" name="nik" class="form-control" required></td>
                            </tr>
                            <tr>
                                <td><label for="jenisKelamin" class="form-label">Jenis Kelamin</label></td>
                                <td><div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenisKelamin" id="perempuan" value="perempuan" required>
                                            <label class="form-check-label" for="perempuan">
                                                Perempuan
                                            </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenisKelamin" id="laki-laki" value="laki-laki" required>
                                            <label class="form-check-label" for="aki-laki">
                                                Laki-Laki
                                            </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="kategori" class="form-label">Kategori</label></td>
                                <td><div class="form-check">
                                        <input class="form-check-input" type="radio" name="kategori" id="dewasa" value="Dewasa" required>
                                            <label class="form-check-label" for="dewasa">
                                                Dewasa
                                            </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="kategori" id="anak" value="Anak" required>
                                            <label class="form-check-label" for="anak">
                                                Anak
                                            </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="email" class="form-label">Email</label></td>
                                <td><input type="email" id="email" name="email" class="form-control" required></td>
                            </tr>
                            <tr>
                                <td><label for="telepon" class="form-label">No.Telepon</label></td>
                                <td><input type="tel" id="telepon" name="telepon" class="form-control" required></td>
                            </tr>
                            <tr>
                                <td colspan="2"><center><input type="submit" name="identitasPenumpang" value="Lanjut Pembayaran" class="btn btn-primary"></center></td>
                            </tr>
                        </table>
                    </form>
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