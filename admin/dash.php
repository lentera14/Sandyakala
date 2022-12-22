<?php
    require_once('koneksi.php');
    session_start();

    if (!isset($_SESSION['login'])) {
        header("location:admin.php");
    }
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
  
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <title>DASHBOARD - SANDYAKALA</title>

    <!-- CSS -->
    <style type="text/css">
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
    </style>

    <!-- Highcharts -->
    <style>
        .highcharts-figure,
.highcharts-data-table table {
    min-width: 310px;
    max-width: 800px;
    margin: 1em auto;
}

#container {
    height: 400px;
}

.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #ebebeb;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}

.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}

.highcharts-data-table th {
    font-weight: 600;
    padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
    padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}

.highcharts-data-table tr:hover {
    background: #f1f7ff;
}
    </style>
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
        <div class="container mt-3" style="margin-bottom: 16px;">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">Grafik Penjualan SANDYAKALA</div>
                            <hr>

                            <?php
                            $info = mysqli_query($koneksi, "SELECT * from infografis");
                            while ($row = mysqli_fetch_array($info)) {
                              $data[] = array(
                                $row['bulan'],
                                floatval($row['jumlah_penjualan'])
                              );
                            }
                            $json = json_encode($data);
                            ?>

                            <div id="grafik"></div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript">
        Highcharts.chart('grafik', {
    chart: {
        type: 'column'
    },
    title: {
        align: 'left',
        text: 'Grafik Penjualan Tiket SANDYAKALA 2022'
    },
    subtitle: {
        align: 'left'
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Jumlah Penjualan Tiket Per Bulan'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y}'
            }
        }
    },

    tooltip: {
        pointFormat: '{point.y} Tiket'
    },

    series: [
        {
            name: 'hdh',
            colorByPoint: true,
            data:<?=$json?>
        }
    ]
});
  </script>
</body>
</html>