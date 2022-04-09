<?php

session_start();

include('dbConnection.php');

$queryOrgs = "SELECT orgID, orgName FROM organization WHERE orgID != '-'";
$orgs = $con->query($queryOrgs);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Add Organization Representative</title>
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
        <h1><a href="index.php"><img src="assets/img/logo.png" class="img-fluid" alt=""> HELP Aid</a></h1>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
          <li><a class="nav-link scrollto" href="contribute.php">Contribute</a></li>
          <li><a class="nav-link scrollto" href="login.php">Login</a></li>
          <li><a class="nav-link scrollto " href="register.php">Register</a></li>
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
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Add Organization Representative</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li><a href="adminDashboard.php">Dashboard</a></li>
            <li>Add Representative</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
    
    
    <section id="add-org-rep" class="section-bg">
      <div class="container">
        <div class="alert alert-danger col-4 text-center mx-auto username-taken" role="alert" style="display:none">
            Username is taken
        </div>
        <div class="alert alert-danger col-4 text-center mx-auto mobile-exists" role="alert" style="display:none">
            Mobile number already in system
        </div>
        <div class="alert alert-danger col-4 text-center mx-auto unknown" role="alert" style="display:none">
            Oops! Something went wrong
        </div>
        <form method="POST" action="procAddOrgRep.php" class="form col-11 col-lg-7 mx-auto add-organization-rep-form needs-validation" novalidate>
          <div class="form-floating mb-3 mt-3">
            <select name="org" id="org" class="form-select" required>
              <option value="" selected>Choose...</option>
              <?php
                  while ($row = $orgs->fetch_assoc()) {
                      echo "<option value='".$row["orgID"].",".$row["orgName"]."'>".$row['orgID']." - ".$row['orgName']."</option>";
                  }
              ?>
            </select>
            <label for="org">Organization</label>
            <div class="invalid-feedback">
              Please select an Organization
            </div>
          </div>
          <div class="form-floating mb-3">
            <input type="text" name="username" class="form-control" id="rep-username" placeholder="Username" required>
            <label for="rep-username">Username</label>
            <div class="invalid-feedback">
              Please enter the representative's username
            </div>
          </div>
    
          <div class="form-floating mb-3">
            <input type="text" name="fullName" class="form-control" id="rep-fullname" placeholder="Full Name" pattern="[a-zA-Z_ ]**" title="Enter alphabets only" required>
            <label for="rep-fullname">Full Name</label>
            <div class="invalid-feedback">
              Please enter alphabets only
            </div>
          </div>
          <div class="form-floating mb-3">
            <input type="tel" name="mobileNo" class="form-control" id="rep-mobile" placeholder="Mobile No." pattern="[0-9]*" required>
            <label for="rep-mobile">Mobile No.</label>
            <div class="invalid-feedback">
              Please a mobile number
            </div>
          </div>
          <div class="form-floating mb-3">
            <input type="text" name="jobTitle" class="form-control" id="rep-job" placeholder="Job Title" required>
            <label for="rep-job">Job Title</label>
            <div class="invalid-feedback">
              Please enter the representative's job title
            </div>
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-secondary">Cancel</button>
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
        </form>

      </div>
    </section>
          

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
              <li><i class="bx bx-chevron-right"></i> <a href="../index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../index.php#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../index.php#services">Services</a></li>
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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/3.0.0/noframework.waypoints.min.js"
    integrity="sha512-lzIDzaYCox5oeC0ymj6ho5fRdMrCYkhHfVEm3fySZStdwG85y9SxTcIFYYEUiW1KYbkfiInVFkGofRlYlkHgLw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->

  <!-- Table sorting using dataTables.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <?php
  // if session set, (org created), display alert
    if(isset($_SESSION['message'])){
        if ($_SESSION['message'] == 'username-taken') {
            echo "<script>showAlert('username-taken')</script>";
        }
        else if ($_SESSION['message'] == 'mobile-exists') {
            echo "<script>showAlert('mobile-exists')</script>";
        }
        else
            echo "<script>showAlert('unknown')</script>";
        unset($_SESSION['message']); // clear the value so that it doesn't display again
    }
  ?>

</body>

</html>