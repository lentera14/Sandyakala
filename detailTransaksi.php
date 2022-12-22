<?php
    require_once('koneksi.php');

    session_start();
        
    if (!isset($_SESSION['username'])) {
        header("location:login.php");
    }
    $result = mysqli_query($koneksi, "SELECT * FROM daftar_reservasi WHERE username='$_SESSION[username]'");
    
    while($item = mysqli_fetch_array($result)){
            $kodeTiket = $item['kode_tiket'];
    }
    
    if (!isset($kodeTiket)){
        header('location:blmTransaksi.php');
    }else{
        $query = mysqli_query($koneksi, "SELECT * FROM daftar_reservasi WHERE username='$_SESSION[username]'");
        while($item = mysqli_fetch_array($query)){
            $_SESSION['id'] = $item['id_reservasi'];
            $kodeTiket = $item['kode_tiket'];
            $gerbong = $item['gerbong'];
            $nik = $item['NIK'];
            $jenisKelamin = $item['jenis_kelamin'];
            $email = $item['email'];
            $telepon = $item['telepon'];
            $tanggalWaktu = $item['tanggal_waktu'];
            $stasiunBrgkt = $item['stasiun_berangkat'];
            $stasiunTujuan = $item['stasiun_tujuan'];
            $namaDepan = $item['nama_depan'];
            $namaBlkg = $item['nama_belakang'];
            $nama = $namaDepan . " " . $namaBlkg;
            $kategori = $item['kategori'];
            $buktiBayar = $item['bukti_bayar'];
            $username = $item['username'];
        }
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
    // status
    if($buktiBayar=="") {
        $status = "Tiket Belum Terbayar";
        $disabled = "";
    } else{
        $status = "Tiket Sudah Terbayar";
        $disabled = "disabled";
    }
    // hitung Harga
    if ($kategori == "Dewasa"){
        $harga = 15000;
    } elseif ($kategori == "Anak"){
        $harga = 10000;
    }

    
    // diskon
    $diskon = "";
    if ($diskon == ""){
        $totalDiskon = 0;
    } else{
        $totalDiskon = "Rp " . $diskon;
    }   
    
    $data = mysqli_query($koneksi, "SELECT * FROM req_batal ORDER BY id_req DESC");
    while($row = mysqli_fetch_array($data)){
        $cekReq = $row['id_req'];
    }
    if(!isset($cekReq)){
        $statusReq="";
    } else{
        $statusReq = "[Pengajuan pembatalan telah diajukan. Silakan tunggu konfirmasi.]";
        $disabled = "disabled";
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <title>DETAIL TRANSAKSI - SANDYAKALA</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');
            body{
                font-family: 'Playfair Display', serif;
            }
            #nav{
                font-size: 17px;
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
            .center{
                text-align: center;
            }
            .table-dark{
                --bs-table-bg: #293241;
            }
            .table-group-divider{
                border-color: #293241;
            }
            caption{
                color: black;
            }
            .table>:not(caption)>*>* {
                padding-left: 0;
            }.roundBorder{
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
        <script type="text/javascript">
            const batal = (value) => {
                const xhttp = new XMLHttpRequest();
                xhttp.onload = function() {
                    alert(this.responseText)
                }
                var id = value
                xhttp.open("GET", "cancel.php?id=<?= $_SESSION['id']?>");
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                let confirmDelete = confirm("Apakah anda yakin ingin mengajukan pembatalan transaksi?")
                if (confirmDelete) {
                    window.location.href = "cancel.php?id=" + <?= $_SESSION['id']?>
                }
            }
        </script>
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
                    <h5 class="card-title">
                        <center>Detail Transaksi</center>
                        <hr>
                    </h5><br>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title center">
                                        Ringkasan Tiket
                                    </h5>
                                    <hr><br>
                                    <p align="right">Status : <?= $status?></p>
                                    <table class="table table-borderless" width="100%">
                                        <tr>
                                            <td>Stasiun <?= $stasiunBrgkt?></td>
                                            <td colspan="2">&#8594</td>
                                            <td align="right">Stasiun <?=$stasiunTujuan?></td>
                                        </tr>
                                        <tr>
                                            <td><?= dateToString($tanggalWaktu); ?></td>
                                            <td colspan="2"></td>
                                            <td align="right"><?= $kodeTiket; ?></td>
                                        </tr>
                                        <tr>
                                            <td><?= timeToString($tanggalWaktu); ?></td>
                                            <td colspan="2"></td>
                                            <td align="right"><?= $nama; ?></td>
                                        </tr>
                                    </table>
                                    <table class="table table-borderless center caption-top" width="100%">
                                        <caption><h6>Ringkasan Pembayaran</h6></caption><br>
                                        <thead class="table-dark">
                                            <tr>
                                                <th scope="col">Item</th>
                                                <th scope="col">Kuantitas</th>
                                                <th scope="col">Harga</th>
                                                <th scope="col">Jumlah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?= $kategori ?></td>
                                                <td>1</td>
                                                <td>Rp <?= $harga?></td>
                                                <td>Rp <?= $harga?></td>
                                            </tr>
                                            <tr class="table-group-divider">
                                                <td>Sub Total</td>
                                                <td></td>
                                                <td></td>
                                                <td>Rp <?= $harga?></td>
                                            </tr>
                                            <tr>
                                                <td>Diskon</td>
                                                <td></td>
                                                <td></td>
                                                <td><?= $totalDiskon; ?></td>
                                            </tr>
                                            <tr class="table-group-divider">
                                                <td>Total Harga</td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <?php
                                                        $totalHarga = $harga - $totalDiskon;
                                                        echo "Rp " . $totalHarga;
                                                    ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table-borderless center" width="100%">
                                        <tr>
                                            <td></td>
                                            <td colspan="2"><a href="" onclick="batal(<?= $_SESSION['id']?>)" class="btn btn-primary <?=$disabled?>">Batalkan Pesanan</a></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title center">
                                        Data Penumpang
                                    </h5>
                                    <hr><br>
                                    <table class="table table-striped center">
                                            <tr>
                                                <td>Kode Tiket</td>
                                                <td><?= $kodeTiket?></td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal</td>
                                                <td><?= dateToString($tanggalWaktu)?></td>
                                            </tr>
                                            <tr>
                                                <td>Waktu</td>
                                                <td><?=timeToString($tanggalWaktu)?></td>
                                            </tr>
                                            <tr>
                                                <td>Gerbong</td>
                                                <td><?=$gerbong?></td>
                                            </tr>
                                            <tr>
                                                <td>Nama Penumpang</td>
                                                <td><?= $nama?></td>
                                            </tr>
                                            <tr>
                                                <td>NIK</td>
                                                <td><?=$nik?></td>
                                            </tr>
                                            <tr>
                                                <td>Jenis Kelamin</td>
                                                <td><?=$jenisKelamin?></td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td><?=$email?></td>
                                            </tr>
                                            <tr>
                                                <td>Telepon</td>
                                                <td><?=$telepon?></td>
                                            </tr>
                                        </table>
                                    <center>
                                        <br><b>Pemberitahuan</b>
                                        <br>
                                        <p>
                                            *) Kode Tiket akan digunakan saat check in online<br>
                                            *) Pastikan untuk mengisikan Kode Tiket ke mesin check in online pada stasiun keberangkatan<br>
                                            *) Lakukan pembayaran paling lambat 1 jam setelah pemesanan, apabila tidak maka pemesanan akan dibatalkan secara otomatis<br>
                                            <?= $statusReq?>
                                        </p>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>