<?php
    require_once('koneksi.php');
    session_start();
    if (!isset($_SESSION['username'])) {
        header("location:login.php");
    }

    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "SELECT * FROM daftar_reservasi WHERE id_reservasi=$id");
    while ($item = mysqli_fetch_array($query)){
        $kodeTiket = $item['kode_tiket'];
        $tanggalWaktu = $item['tanggal_waktu'];
        $stasiunBrgkt = $item['stasiun_berangkat'];
        $stasiunTujuan = $item['stasiun_tujuan'];
        $namaDepan = $item['nama_depan'];
        $namaBlkg = $item['nama_belakang'];
        $nama = $namaDepan . " " . $namaBlkg;
        $kategori = $item['kategori'];
        $buktiBayar = $item['bukti_bayar'];
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
    if($buktiBayar == "") {
        $status = "Tiket Belum Terbayar";
    } else{
        $status = "Tiket Sudah Terbayar";
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
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <title>PEMBAYARAN RESERVASI - SANDYAKALA</title>
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
            }
            .accordion{
                --bs-accordion-btn-color: #212529;
                --bs-accordion-active-color: white;
                --bs-accordion-active-bg: #293241;
                --bs-accordion-btn-focus-border-color: #293241;
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
            ol,ul{
                padding-left: 20px;
            }
            /* .accordion-button:focus{
                background-color: #E0FBFC;
            } */
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
                        <center>Pembayaran Reservasi SANDYAKALA</center>
                        <hr>
                    </h4>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <center>Detail Pembayaran</center>
                                        <hr>
                                    </h5><br>
                                    <p align="right">Status : <?= $status?></p>
                                    <table class="table table-borderless caption-top" width="100%">
                                        <caption><h6>Ringkasan Tiket</h6></caption>
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
                                    <br><br>
                                    <table class="table table-borderless center caption-top" width="100%">
                                        <caption><h6>Ringkasan Pembayaran</h6></caption>
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
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <center>Metode Pembayaran</center>
                                        <hr>
                                    </h5>
                                    <div class="accordion" id="metodeBayar">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="bayarRekening">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                ATM/Mobile/Internet Banking
                                            </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <b>Pembayaran Tiket Kereta Api SANDYAKALA via ATM</b><br>
                                                <ol>
                                                    <li>Masuk ke <b>Menu Utama</b></li>
                                                    <li>Pilih Menu <b>Lainnya</b></li>
                                                    <li>Pilih <b>Bayar/Beli</b> (Pembayaran/Pembelian)</li>
                                                    <li>Pilih <b>Tiket</b></li>
                                                    <li>Pilih <b>Kereta Api SANDYAKALA</b></li>
                                                    <li>Masukkan <b>Kode Pembayaran</b></li>
                                                    <li>Transaksi berhasil</li>
                                                </ol><br>
                                                <b>Pembayaran Tiket Kereta Api SANDYAKALA via Internet Banking</b><br>
                                                <ol>
                                                    <li><b>Login</b> web Internet Banking dengan url <a href="https://bankque.com">https://bankque.com</a></li>
                                                    <li>Masukkan <b>User ID, Password</b> dan <b>Kode Karakter</b> yang muncul</li>
                                                    <li>Pilih menu <b>Pembelian/Pembayaran</b> (Pembayaran/Pembelian)</li>
                                                    <li>Pilih menu <b>Pembayaran Tagihan</b></li>
                                                    <li>Pilih <b>Tiket Kereta Api SANDYAKALA</b>, lalu klik <b>OK</b></li>
                                                    <li>Masukkan <b>Kode Pembayaran</b></li>
                                                    <li>Cek data pemesanan, jika data pemesanan sudah sesuai maka masukkan <b>Password</b> dan klik <b>Bayar</b></li>
                                                    <li>Transaksi berhasil</li>
                                                </ol><br>
                                                <b>Pembayaran Tiket Kereta Api SANDYAKALA via Mobile Banking</b><br>
                                                <ol>
                                                    <li>Masukkan <b>User ID</b> dan <b>Password</b> yang muncul</li>
                                                    <li>Pilih menu <b>Pembelian/Pembayaran</b> (Pembayaran/Pembelian)</li>
                                                    <li>Pilih menu <b>Tiket Kereta Api SANDYAKALA</b></li>
                                                    <li>Masukkan <b>Kode Pembayaran</b>, tekan <b>Lanjut</b></li>
                                                    <li>Cek data pemesanan, jika data pemesanan sudah sesuai maka masukkan <b>Password</b> dan klik <b>Bayar</b></li>
                                                    <li>Transaksi berhasil</li>
                                                </ol><br>
                                                <form method="post" action="bayarToDB.php" enctype="multipart/form-data">
                                                    <div class="mb-1">
                                                        <label for="buktiBayar" class="form-label">Upload bukti pembayaran : <small><small>(*jpg,png,pdf)</small></small></label>
                                                        <input class="form-control form-control-sm" type="file" id="buktiBayar" name="buktiBayar" accept=".png, .jpg, .pdf">
                                                    </div>
                                                    <center><input type="submit" name="submit" value="Selesai" class="btn btn-primary btn-sm"></center>
                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="bayarDana">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                E-Wallet
                                            </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <b>Pembayaran Tiket Kereta Api SANDYAKALA via DANA</b><br>
                                                <ol>
                                                    <li>Masuk ke <b>Menu Utama</b></li>
                                                    <li>Pilih Menu <b>Tampilkan Semua</b></li>
                                                    <li>Cari Bagian <b>Transportasi</b>, pilih <b>Tiket Kereta Api</b></li>
                                                    <li>Pilih <b>Kereta Api SANDYAKALA</b></li>
                                                    <li>Masukkan <b>Kode Pembayaran</b></li>
                                                    <li>Cek data pemesanan, jika data pemesanan sudah sesuai maka masukkan <b>Password</b> dan klik <b>Bayar</b></li>
                                                    <li>Transaksi berhasil</li>
                                                </ol><br>
                                                <form method="post" action="bayarToDB.php" enctype="multipart/form-data">
                                                    <div class="mb-1">
                                                        <label for="buktiBayar" class="form-label">Upload bukti pembayaran : <small><small>(*jpg,png,pdf)</small></small></label>
                                                        <input class="form-control form-control-sm" type="file" id="buktiBayar" name="buktiBayar" accept=".png, .jpg,.pdf">
                                                    </div>
                                                    <center><input type="submit" name="submit" value="Selesai" class="btn btn-primary btn-sm"></center>
                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
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

        <?php
        $_SESSION['id'] = $id;
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>