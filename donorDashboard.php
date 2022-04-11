<?php

session_start();

include('dbConnection.php');

if (isset($_SESSION['admin']) && $_SESSION['admin'] == 0) {
  $queryCAppeals = "SELECT * FROM appeal WHERE toDate > SYSDATE() AND orgID = '".$_SESSION['orgID']."'";
  $curAppeals = $con->query($queryCAppeals);

  $queryPAppeals = "SELECT * FROM appeal WHERE toDate <= SYSDATE() AND orgID = '".$_SESSION['orgID']."'";
  $pastAppeals = $con->query($queryPAppeals);
} else {
  $queryCAppeals = "SELECT * FROM appeal WHERE toDate > SYSDATE() ";
  $curAppeals = $con->query($queryCAppeals);

  $queryPAppeals = "SELECT * FROM appeal WHERE toDate <= SYSDATE() ";
  $pastAppeals = $con->query($queryPAppeals);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>
    <?php
      if (isset($_SESSION['admin']) && $_SESSION['admin'] == 0) echo "Select an appeal"; else echo "Dashboard";
    ?>
  </title>
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
          <li><a class="nav-link scrollto" href="contribute.php">Contribute</a></li>
          <li><a class="nav-link scrollto toHide" href="login.php">Login</a></li>
          <li><a class="nav-link scrollto toHide" href="register.php">Register</a></li>
          <li><a class="nav-link scrollto toShow" href="logout.php" style="display:none">Log out</a></li>
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
          <h2>
            <?php
              if (isset($_SESSION['admin']) && $_SESSION['admin'] == 0) echo "Select an appeal"; else echo "Dashboard";
            ?>
          </h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <?php
              if (isset($_SESSION['admin']) && $_SESSION['admin'] == 0) {
                echo "<li><a href=orgRepDashboard.php>Dashboard</a></li>"; 
                echo "<li>Record Contribution</li>";                 
              }
              else echo "<li>Donor Dashboard</li>";
            ?>
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
                <h2>Viewing Appeals</h2>
                <p>Select a current appeal to contribute to</p>
                <div class="alert alert-success col-4 text-center mx-auto" role="alert" style="display:none">
                    Disbursed successfully
                </div>
                <div class="alert alert-danger col-4 text-center mx-auto" role="alert" style="display:none">
                    Something went wrong. Please try again
                </div>
            </div>
            <div class="tab">
                <button class="tablinks" id="defaultOpen" onclick="openTable(event, 'Current')">Current</button>
                <button class="tablinks" onclick="openTable(event, 'Past')">Past</button>
            </div>
            <div id="Current" class="tabcontent">
                <div class="row justify-content-center">
                    <div class="col mt-5 large-table text-center">
                        <table id="current" class="table sortable-table" data-table-for="Current Appeal">
                            <thead class="table-primary">
                                <tr>
                                    <th scope="col" class="col-1">ID</th>
                                    <th scope="col" class="col-3">Title</th>
                                    <th scope="col" class="col-1">From</th>
                                    <th scope="col" class="col-1">To</th>
                                    <th scope="col" class="col-6">Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = $curAppeals->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td><a href='appeal.php?id=".$row['appealID']."'>".$row['appealID']."</a></td>";
                                    echo "<td>".$row['title']."</td>";
                                    echo "<td>".$row['fromDate']."</td>";
                                    echo "<td>".$row['toDate']."</td>";
                                    echo "<td>".$row['description']."</td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="Past" class="tabcontent">
                <div class="row justify-content-center">
                    <div class="col-lg mt-5 large-table text-center">
                        <table id="past" class="table sortable-table" data-table-for="Past Appeal">
                        <thead class="table-primary">
                            <tr>
                            <th scope="col" class="col-1">ID</th>
                            <th scope="col" class="col-2">Title</th>
                            <th scope="col" class="col-1">From</th>
                            <th scope="col" class="col-1">To</th>
                            <th scope="col" class="col-6">Description</th>
                            <th scope="col" class="col-1">Outcome</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                              while ($row = $pastAppeals->fetch_assoc()) {
                                echo "<tr class='appealRow'>";
                                echo "<td><a href='appeal.php?id=".$row['appealID']."'>".$row['appealID']."</a></td>";
                                echo "<td>".$row['title']."</td>";
                                echo "<td>".$row['fromDate']."</td>";
                                echo "<td>".$row['toDate']."</td>";
                                echo "<td>".$row['description']."</td>";
                                echo "<td>".$row['outcome']."</td>";
                                echo "</tr>";
                              }
                            ?>
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
  <?php
    if (isset($_SESSION['username']))
      echo "<script>hideLogin()</script>";

  // if session set, (org created), display alert
  // echo "<script>alert('success')</script>";
    if(isset($_SESSION['message'])){
        if ($_SESSION['message'] == 'success') {
            echo "<script>showAlert('alert-success')</script>";
        }
        else {
            echo "<script>showAlert('alert-danger')</script>";
        }
        unset($_SESSION['message']); // clear the value so that it doesn't display again
    }
  ?>

</body>

</html>