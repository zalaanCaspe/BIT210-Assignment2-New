<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Appeals</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Lumia - v4.7.0
  * Template URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="index.php"><img src="assets/img/logo.png" alt=""> HELP Aid</a></h1>

      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
          <li><a class="nav-link scrollto" href="index.php#services">Services</a></li>
          <li><a class="nav-link scrollto" href="organizations.php">Organizations</a></li>
          <li><a class="nav-link scrollto active" href="#hero">Appeals</a></li>
          <li><a class="nav-link scrollto" href="index.php#testimonials">Testimonials</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="applicants.php">Applicants</a></li>
          <li><a class="nav-link scrollto" href="login.php">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Appeals</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Appeals</li>
          </ol>
        </div>

        <br>

        <p>My organization's appeals</p>
        <label class="switch">
          <input type="checkbox">
          <span class="slider round"></span>
        </label>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">

        <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2 id="waypoint">Browse Appeals</h2>
          <p><strong>Organizations around Malaysia need your help today!</strong></p>
          <br>
          <!--<p><em>Appeal period</em></p>-->
        </div>



        <!--filtering for current/past appeals-->
        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-filters-date">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".current">Current Appeals</li>
              <li data-filter=".past">Past Appeals</li>
            </ul>
          </div>
        </div>



        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item daily-necessities wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/shelterhome-4.jpg" class="img-fluid" alt="">
                <a href="assets/img/portfolio/shelterhome-4.jpg" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox" title="Shelter Home"><i class="bx bx-plus"></i></a>
                <a href="shelterHomeAppeals.php" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="shelterHomeAppeals.php">Shelter Home</a></h4>
                <p>Food and cash aid</p>
                <p class="searchDate">2022-02-01 - 2022-03-01</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item other wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/pwr.png" class="img-fluid" alt="">
                <a href="assets/img/portfolio/pwr.png" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Project Wawasan Rakyat"><i class="bx bx-plus"></i></a>
                <a href="shelterHomeAppeals.php" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="shelterHomeAppeals.php">Project Wawasan Rakyat</a></h4>
                <p>Cash aid</p>
                <p class="searchDate">2022-03-01 - 2022-04-01</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item daily-necessities wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/ngohub.jpg" class="img-fluid" alt="">
                <a href="assets/img/portfolio/ngohub.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="NGOHub"><i class="bx bx-plus"></i></a>
                <a href="shelterHomeAppeals.php" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="shelterHomeAppeals.php">NGOHub</a></h4>
                <p>Cash aid</p>
                <p class="searchDate">2022-01-02 - 2022-02-02</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item medical wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/kkm.jpg" class="img-fluid" alt="">
                <a href="assets/img/portfolio/kkm.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="KKM"><i class="bx bx-plus"></i></a>
                <a href="shelterHomeAppeals.php" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="shelterHomeAppeals.php">KKM</a></h4>
                <p>Supplies and cash aid</p>
                <p class="searchDate">2021-03-02 - 2021-04-02</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item other wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/mmha.jpg" class="img-fluid" alt="">
                <a href="assets/img/portfolio/mmha.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="MMHA"><i class="bx bx-plus"></i></a>
                <a href="shelterHomeAppeals.php" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="shelterHomeAppeals.php">MMHA</a></h4>
                <p>Cash aid</p>
                <p class="searchDate">2022-03-03 - 2022-04-03</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item daily-necessities wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/rftr.jpg" class="img-fluid" alt="">
                <a href="assets/img/portfolio/rftr.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Refuge for the Refugees"><i class="bx bx-plus"></i></a>
                <a href="shelterHomeAppeals.php" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="shelterHomeAppeals.php">Refuge for the Refugees</a></h4>
                <p>Cash aid</p>
                <p class="searchDate">2022-03-03 - 2022-04-03</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item medical wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/mercy.jpg" class="img-fluid" alt="">
                <a href="assets/img/portfolio/mercy.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="MERCY Malaysia"><i class="bx bx-plus"></i></a>
                <a href="shelterHomeAppeals.php" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="shelterHomeAppeals.php">MERCY Malaysia</a></h4>
                <p>Supplies and cash aid</p>
                <p class="searchDate">2022-03-04 - 2022-04-04</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item medical wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/ummc.jpg" class="img-fluid" alt="">
                <a href="assets/img/portfolio/ummc.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="UM Medical Centre"><i class="bx bx-plus"></i></a>
                <a href="shelterHomeAppeals.php" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="shelterHomeAppeals.php">UM Medical Centre</a></h4>
                <p>Supplies and cash aid</p>
                <p class="searchDate">2022-03-05 - 2022-04-05</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item other wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/zoonegara.jpg" class="img-fluid" alt="">
                <a href="assets/img/portfolio/zoonegara.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Zoo Negara"><i class="bx bx-plus"></i></a>
                <a href="shelterHomeAppeals.php" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="shelterHomeAppeals.php">Zoo Negara</a></h4>
                <p>Cash aid</p>
                <p class="searchDate">2022-03-05 - 2022-04-05</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->
      </div>
    </section>

    <!-- Add Appeal button -->
    <a class="add-btn d-flex align-items-center justify-content-center" href="add-appeal.php">
      <i class="bi bi-plus-circle-fill"></i>
      <span>Appeal</span>
    </a>
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>HELP Aid</h3>
            <p>
              HELP Aid Headquarters <br>
              No. 1, Jalan Abu Bakar<br>
              Selangor, Malaysia <br><br>
              <strong>Phone:</strong> +60379847302<br>
              <strong>Email:</strong> info@helpaid.com.my<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Subscribe to be notified about the latest appeals on HELP Aid!</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>HELP Aid</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/lumia-bootstrap-business-template/ -->
          
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/3.0.0/noframework.waypoints.min.js" integrity="sha512-lzIDzaYCox5oeC0ymj6ho5fRdMrCYkhHfVEm3fySZStdwG85y9SxTcIFYYEUiW1KYbkfiInVFkGofRlYlkHgLw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>