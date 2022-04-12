<?php

session_start();

if(!isset($_SESSION['admin']) || $_SESSION['admin'] != 0)
  header('Location:accessDenied.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register an Applicant</title>
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
          <li><a class="nav-link scrollto" href="index.php#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
          <li><a class="nav-link scrollto toHide" href="donorDashboard.php">Become a Donor</a></li>
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
    <section class="inner-page login">
      <div class="container">
        
        <section id="portfolio" class="portfolio">
          <div class="container col-lg-9">
            <div class="col mx-auto">
                <div class="justify-content-center register-card">
                    <div class="section-title">
                    <h2>Register an Applicant</h2>
                    <div class="alert alert-danger col-4 text-center mx-auto id-exists" role="alert" style="display:none">
                      User ID No. already in the system.
                    </div>
                    <div class="alert alert-danger col-4 text-center mx-auto unknown" role="alert" style="display:none">
                      Oops! Something went wrong
                    </div>
                    </div>
                    <form method="POST" action="procRegistration.php" class="form row px-3 login-form needs-validation" novalidate>
                        <div class="col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="text" name="org" id="org" class="form-control" placeholder="Organization" value="<?php echo $_SESSION['orgID']." - ".$_SESSION['orgName']?>" readonly>
                            <label for="org">Organization</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="fullName" class="form-control" id="fullName" placeholder="Full Name" required>
                            <label for="fullName">Full Name</label>
                            <div class="invalid-feedback">
                            Please enter the full name
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="idNo" class="form-control" id="idNo" placeholder="ID No." required>
                            <label for="idNo">ID No.</label>
                            <div class="invalid-feedback">
                            Please enter an ID number
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" name="householdIncome" class="form-control" id="householdIncome" placeholder="Household Income" min="0" required>
                            <label for="householdIncome">Household Income (RM)</label>
                            <div class="invalid-feedback">
                            Please enter a household income
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="text" name="address1" class="form-control" id="address1" placeholder="Address 1" required>
                            <label for="address1">Address 1</label>
                            <div class="invalid-feedback">
                            Please enter an address
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="address2" class="form-control" id="address2" placeholder="Address 2">
                            <label for="address2">Address 2</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="city" class="form-control" id="city" placeholder="City" required>
                            <label for="city">City</label>
                            <div class="invalid-feedback">
                            Please enter a city
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <select name="state" id="state" class="form-select" required>
                            <option value="" selected>Choose</option>
                            <option value="Johor">Johor</option>
                            <option value="Kedah">Kedah</option>
                            <option value="Kelantan">Kelantan</option>
                            <option value="Kuala Lumpur">Kuala Lumpur</option>
                            <option value="Labuan">Labuan</option>
                            <option value="Melaka">Melaka</option>
                            <option value="Negeri Sembilan">Negeri Sembilan</option>
                            <option value="Pahang">Pahang</option>
                            <option value="Penang">Penang</option>
                            <option value="Perak">Perak</option>
                            <option value="Perlis">Perlis</option>
                            <option value="Putrajaya">Putrajaya</option>
                            <option value="Sabah">Sabah</option>
                            <option value="Sarawak">Sarawak</option>
                            <option value="Selangor">Selangor</option>
                            <option value="Terengganu">Terengganu</option>
                            </select>
                            <label for="state">State</label>
                            <div class="invalid-feedback">
                            Please select a state
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="zipCode" pattern="[0-9]{5}" title="Field must be 5 digits" class="form-control" id="zipCode" placeholder="Zip" required>
                            <label for="zipCode">Zip</label>
                            <div class="invalid-feedback">
                            Please enter a 5-digit zipcode
                            </div>
                        </div>
                        </div>
                        <input type="submit" class="btn" value="Register">
                    </form>
                </div>
            </div>
          </div>
        </section><!-- End Profile Section -->
      </div>
    </section>
  </main>

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
            <form action="/action_page.php" method="post">
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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <?php
    if (isset($_SESSION['username']))
      echo "<script>hideLogin()</script>";

    if (isset($_SESSION['message'])) {
      if ($_SESSION['message'] == 'id-exists')
        echo "<script>showAlert('id-exists')</script>";
      else
        echo "<script>showAlert('unknown')</script>";
        
      unset($_SESSION['message']);
    }
  ?>
</body>
</html>