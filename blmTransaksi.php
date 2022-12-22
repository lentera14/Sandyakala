<?php
    session_start();
        
    if (!isset($_SESSION['username'])) {
        header("location:login.php");
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <title>TRANSAKSI - SANDYAKALA</title>
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
            }
            h5{
                padding: 10px;
            }
            a{
                color: #647b99;
            }
            a:hover{
                color: #3D5A80;
            }
            .middle{
                width: 20px;
                height: auto;
                font-size: large;
            }
            .roundBorder{
                border-radius: 10px;
            }
            .transaksi{
                margin-bottom: 10px;
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
            .btn-primary:default{
                background-color: #3D5A80;
                border: #3D5A80 1px solid;
            }
            .btn.disabled, .btn:disabled, fieldset:disabled .btn {
                background-color: #3D5A80;
                border-color: #3D5A80;
            }
            .center{
                align-items: center;
                align-content: center;
                text-align: center;
            }
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

        <div class="container-fluid mt-3 transaksi">
            <h4>Transaksi Terkini</h4>
            <div class="row d-flex justify-content-center">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="center"><img src="asset/3958830.png"></td>
                            </tr>
                            <tr>
                                <td class="center">Anda Belum Melakukan Reservasi. <br> Silahkan Lakukan Reservasi Terlebih Dahulu.</td>
                            </tr>
                            <tr>
                                <td align="center"><a href="reservasi.php" class="btn btn-primary">Reservasi Sekarang</a></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                        </table>
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