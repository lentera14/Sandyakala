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
    
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../abcon.css">
    <style type="text/css">
        body{
            font-family: 'Playfair Display', serif;
        }
    </style>
    
    <title>CONTACT US - SANDYAKALA</title>
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
    <div class="judul"><center>Hubungi kami</center></div>   
      <div class="container mt-5">
        <div class="row">
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="profil">
              <div class="img">
                <a href="https://www.instagram.com/sandyakalaexpress" target="_blank" rel="noopener"> 
                <img src = "../images/instagram.png"  alt = "Instagram" width=""border = "0"/></a>
              </div>
            <div class="tim-content">
              <a href="https://www.instagram.com/sandyakalaexpress" target="_blank" rel="noopener"><h3 class="title">@sandyakalaexpress</h3></a>  
                <span class="post">Instagram Official</span>  
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="profil">
            <div class="img">
              <a href="https://twitter.com/sykalaofc" target="_blank" rel="noopener"> 
              <img src = "../images/twitter.png" alt = "Mbah WP" border = "0"/></a>
            </div>
            <div class="tim-content">
              <a href="https://twitter.com/sykalaofc" target="_blank" rel="noopener">
                <h3 class="title">@sykalaofc</h3></a>  
                <span class="post">Twitter Official</span>  
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="profil">
            <div class="img">
              <a href="mailto:sykalaofc@gmail.com" target="_blank" rel="noopener"> 
              <img src = "../images/gmail.png" alt = "Mbah WP" border = "0"/></a>
            </div>
            <div class="tim-content">
              <a href="mailto:sykalaofc@gmail.com" target="_blank" rel="noopener">
                <h3 class="title">sykala@gmail.com</h3></a>  
                <span class="post">Gmail</span>  
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="profil">
            <div class="img">
              <a href="https://www.facebook.com/profile.php?id=100088809159947" target="_blank" rel="noopener"> 
              <img src = "../images/facebook.png" alt = "Mbah WP" border = "0"/></a>
            </div>
            <div class="tim-content">
              <a href="https://www.facebook.com/profile.php?id=100088809159947" target="_blank" rel="noopener">
                <h3 class="title">@sandyakala</h3></a>  
                <span class="post">Facebook</span>  
            </div>
          </div>
        </div>
       <div class="google-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13619.085569614474!2d98.27378421885233!3d4.019014308265312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30373d6668af7383%3A0x6964667ecf2b2d4!2sPangkalanbrandan%2C%20Puraka%20-%20I%2C%20Kec.%20Sei%20Lepan%2C%20Kabupaten%20Langkat%2C%20Sumatera%20Utara!5e1!3m2!1sid!2sid!4v1671543914443!5m2!1sid!2sid" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    </body>
      <section class="ftco-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="wrapper">
                <div class="col-md-7">
                  <div class="contact-wrap w-100 p-md-5 p-4">
                    <h3 class="mb-4">Kritik dan Saran</h3>
                    <div id="form-message-warning" class="mb-4"></div>
                    <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="label" for="name">Nama</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Nama">
                          </div>
                        </div>
                        <div class="col-md-6"> 
                          <div class="form-group">
                            <label class="label" for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                          </div>
                        </div>
                 
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="label" for="kritik">Kritik & Saran</label>
                          <textarea name="kritik" class="form-control" id="kritik" placeholder="Kritik & Saran"></textarea>
                        </div>
                      </div>
                        <br>
                        <div class="col-md-12">
                          <div class="form-group">
                            <br>
                            <input type="submit" value="Submit" class="btn btn-primary">
                            <div class="submitting"></div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div> 
      </section>
    </div>
  </main>
  
  <footer class="page-footer">
      <div class="copy">
        <center>
          <div class="cr">Copyright &copy; 2022 SANDYAKALA</div>
        </center>
      </div>
  </footer>
</body>
</html>