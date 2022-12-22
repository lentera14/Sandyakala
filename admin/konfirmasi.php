<?php
require_once('koneksi.php');

session_start();

if (!isset($_SESSION['login'])) {
    header("location:admin.php");
}
?>

<!DOCTYPE html>
    <head>
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <link rel="stylesheet"  href="vendor/DataTables/jquery.datatables.min.css"> 
        <script src="vendor/DataTables/jquery.dataTables.min.js" type="text/javascript"></script> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
            .row{
                margin-right: calc(0 * var(--bs-gutter-x));
            }
            table{
                text-align: center;
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

            .col-search-input {
                margin-top: 10px;
                display: block;
                width: 100%;
            }

            .datatable-container
            {  
                padding: 10px;
                width:100%;
                margin: 0 auto;
            }

            tfoot {
                display: table-header-group;
            }
            table.dataTable tfoot th, table.dataTable tfoot td {
                padding: 10px 5px 6px 10px;
            }


            .dataTables_wrapper .dataTables_paginate .paginate_button {
                color: #3D5A80 !important;  
                padding: 0.4em 0.8em;
                border: #eaeaea 1px solid;;
            }

            .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
                color: #3D5A80 !important;
                border-color: #eaeaea !important;
                background-color: #eaeaea !important;
                background:unset;
            }
            .dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
                color: #fff !important;
                background: unset !important;
                border: #3D5A80 1px solid !important;
                background-color: #3D5A80 !important;
                cursor: default;
                border-radius: 5px;
            }
            table.dataTable.row-border tbody th, table.dataTable.row-border tbody td, table.dataTable.display tbody th, table.dataTable.display tbody td {
                border-bottom: 1px solid #ddd;
            }
            table.dataTable.stripe tbody tr.odd, table.dataTable.display tbody tr.odd {
                background-color: #fff;
            }
            table.dataTable.display tbody tr.even>.sorting_1, table.dataTable.order-column.stripe tbody tr.even>.sorting_1 {
                background-color: #eceff2; 
            }
            table.dataTable.display tbody tr.odd>.sorting_1, table.dataTable.order-column.stripe tbody tr.odd>.sorting_1 {
                background-color: #fff; 
            }
            table.dataTable thead th, table.dataTable thead td {
                border-bottom: 1px solid #ddd;
            }
            table.dataTable.stripe tbody tr.even, table.dataTable.display tbody tr.even {
                background-color: #eceff2;
            }
            .datatables_length{
                padding-bottom: 15px;
            }

            .dataTables_wrapper select,.dataTables_wrapper input 
            {
                border:1px solid #ddd;
                border-radius: 10px;
                padding:0.4em;
            }
            #tabel-data_filter {
                margin-bottom: 20px;
            }
            table.dataTable tfoot th, table.dataTable tfoot td {
                border-top: none;
                border-right: #e0e0e0 1px solid;
                border-bottom: #e0e0e0 1px solid;
            }
            .row{
                margin: 0;
            }
        </style>
        <script>
            $(document).ready(function ()
            {
                $('#tabel-data #search').each(function () {
                    var title = $(this).text();
                    $(this).html(title+'<input type="text" class="col-search-input" style="text-align:center" placeholder="Cari ' + title + '"/>');
                });
                
                var table = $('#tabel-data').DataTable({
                        "scrollX": true,
                        "pagingType": "numbers",
                        "processing": true,
                        "serverSide": true,
                        "ajax": "conf.php",
                        order: [[2, 'asc']],
                        columnDefs: [{
                            targets: "_all",
                            orderable: false
                        }]
                    });

                table.columns().every(function () {
                    var table = this;
                    $('input', this.header()).on('keyup change', function () {
                        if (table.search() !== this.value) {
                            table.search(this.value).draw();
                        }
                    });
                });
            });
        </script>
        <script type="text/javascript"> 
            function getInfo(value){
                var id = value
                window.location.href = "detailKonfirmasi.php?id=" + id
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
        <main>
            <div class="row d-flex justify-content-center">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <center><b>Daftar Request Pembatalan Reservasi SANDYAKALA</b></center>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="datatable-container">
                            <table name="tabel-data" id="tabel-data" class="display" cellspacing="0" width="100%">   
                                <thead>
                                    <tr>
                                        <th id="search">Tanggal, Waktu</th>
                                        <th id="search">Stasiun Keberangkatan</th>
                                        <th id="search">Stasiun Tujuan</th>
                                        <th id="search">Gerbong</th>
                                        <th>Nama Depan</th>
                                        <th>Nama Belakang</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                            </table>
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>