<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">

  <!-- Styling dataTable -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
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
          <li><a class="nav-link scrollto" href="index.php#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
          <li><a class="nav-link scrollto" href="index.php#services">Services</a></li>
          <li><a class="nav-link scrollto" href="organizations.php">Organizations</a></li>
          <li><a class="nav-link scrollto " href="appeals.php">Appeals</a></li>
          <li><a class="nav-link scrollto" href="index.php#testimonials">Testimonials</a></li>
          <li><a class="nav-link scrollto" href="index.php#contact">Contact</a></li>
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
          <h2>Dashboard</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Dashboard</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page section-bg">
      <div class="container">

        <!-- ======= Applicants Section ======= -->
        <section style="padding: 0px 0px;">
          <div class="container">

            <div class="section-title">
              <h2>Welcome, 
                    <?php                                        
                        echo $_SESSION["fullName"];
                    ?>
                </h2>
            </div>

            <div class="tab">
                <button class="tablinks" onclick="openTable(event, 'Appeals')">Appeals</button>
                <button class="tablinks" onclick="openTable(event, 'Contributions')">Contributions</button>
                <button class="tablinks" onclick="openTable(event, 'Applicants')">Applicants</button>
                <button class="tablinks" onclick="openTable(event, 'Disbursements')">Disbursements</button>
            </div>

            <div id="Appeals" class="tabcontent">
                <div class="row justify-content-center">
                    <div class="col-md col-lg-7 mt-5 large-table text-center">
                        <button class="btn btn-primary mb-3" onclick="window.location.href='add-appeal.php'">Organize Aid Appeal</button>
                        <table id="appeals" class="table sortable-table" data-table-for="Appeal">
                        <thead class="table-primary">
                            <tr>
                            <th scope="col" class="col-2">From</th>
                            <th scope="col" class="col-2">To</th>
                            <th scope="col" class="col-6">Description</th>
                            <th scope="col" class="col-2">Outcome</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="Contributions" class="tabcontent">
                <div class="row justify-content-center">
                    <div class="col-lg mt-5 large-table text-center">
                        <button class="btn btn-primary mb-3" onclick="window.location.href='contribute.php'">Record Contribution</button>
                        <table id="contributions" class="table sortable-table" data-table-for="Contribution">
                        <thead class="table-primary">
                            <tr>
                            <th scope="col" class="col-1">ID</th>
                            <th scope="col" class="col-1">Amount</th>
                            <th scope="col" class="col-2">Estimated Value</th>
                            <th scope="col" class="col-4">Description</th>
                            <th scope="col" class="col-2">Appeal ID</th>
                            <th scope="col" class="col-2">Date Received</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="Applicants" class="tabcontent">
                <div class="row justify-content-center">
                    <div class="col-md col-lg-7 mt-5 large-table text-center">
                        <button class="btn btn-primary mb-3" onclick="window.location.href='registerByOrgRep.php'">Register an Applicant</button>
                        <table id="applicants" class="table sortable-table" data-table-for="Applicant">
                        <thead class="table-primary">
                            <tr>
                            <th scope="col" class="col-3">ID Number</th>
                            <th scope="col" class="col-5">Full Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row"><a href="users/syed.jahari0749.php">711016-13-7381</a></th>
                            <td>Ganapathy Jacob A/L Balasubramanyam</td>
                            </tr>
                            <tr>
                            <th scope="row"><a href="users/syed.jahari0749.php">601012-06-6125</a></th>
                            <td>Lam Kao Tee</td>
                            </tr>
                            <tr>
                            <th scope="row"><a href="users/syed.jahari0749.php">720326-15-7296</a></th>
                            <td>Shoba Ponnusamy A/P Rama</td>
                            </tr>
                            <tr>
                            <th scope="row"><a href="users/syed.jahari0749.php">880919-01-6148</a></th>
                            <td>Aleeza Salehudin binti Muhaimen</td>
                            </tr>
                            <tr>
                            <th scope="row"><a href="users/syed.jahari0749.php">600217-05-7784</a></th>
                            <td>Nuur Nurnazhimah binti Pa'aing</td>
                            </tr>
                            <tr>
                            <th scope="row"><a href="users/syed.jahari0749.php">990210-44-0676</a></th>
                            <td>Amy Leung Chaw Ming</td>
                            </tr>
                            <tr>
                            <th scope="row"><a href="users/syed.jahari0749.php">000424-09-0749</a></th>
                            <td>Syed Ahmed bin Jahari</td>
                            </tr>
                            <tr>
                            <th scope="row"><a href="users/syed.jahari0749.php">851108-38-6832</a></th>
                            <td>Rani Mogan</td>
                            </tr>
                            <tr>
                            <th scope="row"><a href="users/syed.jahari0749.php">670119-61-5283</a></th>
                            <td>Batman bin Suparman</td>
                            </tr>
                            <tr>
                            <th scope="row"><a href="users/syed.jahari0749.php">001509-91-0275</a></th>
                            <td>Benjamin Dover</td>
                            </tr>
                            <tr>
                            <th scope="row"><a href="users/syed.jahari0749.php">011215-90-0266</a></th>
                            <td>Filet Minyon</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="Disbursements" class="tabcontent">
                <div class="row justify-content-center">
                    <div class="col-lg mt-5 large-table text-center">
                    <button class="btn btn-primary mb-3" onclick="window.location.href='disbursement.php'">Record Disbursement</button>
                    <table id="disbursements" class="table sortable-table" data-table-for="Disbursement">
                    <thead class="table-primary">
                        <tr>
                        <th scope="col" class="col-1">Date</th>
                        <th scope="col" class="col-1">ID</th>
                        <th scope="col" class="col-2">Cash Amount</th>
                        <th scope="col" class="col-4">Goods</th>
                        <th scope="col" class="col-2">Appeal ID</th>
                        <th scope="col" class="col-2">Applicant ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                    </table>
                </div>
                </div>
            </div>

          </div>
        </section><!-- End Applicants Section -->
      </div>
    </section>

      <!-- Add applicant button (leads to registration) -->
      <a href="#" class="add-btn d-flex align-items-center justify-content-center">
        <i class="bi bi-plus-circle-fill"></i>
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
                <li><i class="bx bx-chevron-right"></i> <a href="index.php#services">Services</a>
                </li>
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

  <!-- Table sorting using dataTables.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>