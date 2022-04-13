<?php
session_start();
include('dbConnection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contribute Aid</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
        <h1><a href="index.php"><img src="assets/img/logo.png" class="img-fluid" alt=""> HELP Aid</a></h1>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="index.php#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
          <li><a class="nav-link scrollto active toHide" href="viewAppeals.php">Become a Donor</a></li>
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
          <h2>Contribute Aid to Appeal</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li><a href="viewAppeals.php">Appeals</a></li>
            <li><?php echo "<a href='appeal.php?id=".$_SESSION['appealID']."'>Appeal ".$_SESSION['appealID']."</a>"?></li>
            <li>Contribute Aid</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

        <div class="container hide">
            <div class="py-5 text-center">
              <h2>Aid Contribution Form</h2>
              <p class="lead">Insert contribution details here</p>
            </div>
            <div class="alert alert-danger col-4 text-center mx-auto unknown" role="alert" style="display:none">
                Oops! Something went wrong
            </div>
      
            <div class="row">
              <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3 text-muted">
                  Appeal details
                </h4>
                <ul class="list-group mb-3">
                  <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                      <h6 class="my-0">Organization name</h6>
                      <small class="text-muted"></small>
                    </div>
                    <span class="text-muted"><?php echo $_SESSION['appealOrgName']?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                      <h6 class="my-0">Organization address</h6>
                      <small class="text-muted"></small>
                    </div>
                    <span class="text-muted"><?php echo $_SESSION['appealOrgAddress1']?></span> <!-- is the 1st address alone enough? -->
                  </li>
                  <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                      <h6 class="my-0">Appeal start date</h6>
                      <small class="text-muted"></small>
                    </div>
                    <span class="text-muted"><?php echo date("d M, Y", strtotime($_SESSION['appealFrom']))?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                      <h6 class="my-0">Appeal end date</h6>
                      <small class="text-muted"></small>
                    </div>
                    <span class="text-muted"><?php echo date("d M, Y", strtotime($_SESSION['appealTo']))?></span>
                  </li>
                  
                </ul>
      
                
                
              </div>

              
              <div class="tab">
                  <button class="tablinks" id="defaultOpen" onclick="openTable(event, 'Cash')">Cash Donation</button>
                  <button class="tablinks toShow" onclick="openTable(event, 'Goods')" style="display:none">Goods</button>
              </div>

              <div id="Cash" class="col-md-8 order-md-1 tabcontent">
                <h4 class="mb-3"><strong>Cash contribution</strong></h4>
                <form method="POST" action="procAddContribution.php" class="needs-validation" novalidate>
                  <h5 class="mb-3">Payment channel</h4>
                  <div class="d-block my-3">
                    <div class="custom-control custom-radio">
                        <input id="bankTransfer" name="paymentMethod" value="bank" type="radio" class="custom-control-input" onclick = "hide('second')" checked>
                        <label class="custom-control-label" for="bankTransfer">Bank transfer</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input id="credit" name="paymentMethod" value="credit" type="radio" class="custom-control-input" onclick = "hide('first')">
                      <label class="custom-control-label" for="credit">Credit card</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input id="debit" name="paymentMethod" value="debit" type="radio" class="custom-control-input" onclick = "hide('first')">
                      <label class="custom-control-label" for="debit">Debit card</label>
                    </div>
                  </div>

                  <div class = "row">
                    <div class="mb-3">
                        <label for="cashAmount">Cash amount (RM)<span class="text-muted"></span></label>
                        <input type="number" name="cashAmount" class="form-control" id="cashAmount" required>
                        <div class="invalid-feedback">
                          Please enter a valid cash amount.
                        </div>
                    </div>
                  </div>

            
                  <!--Bank Transfer-->
                  <div id = 'first'>
                    <h5 class="mb-3">Bank transfer</h4>
                    
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <label for="bank-name">Name of account holder</label>
                        <input type="text" name="bankName" class="form-control" id="bank-name" placeholder="">
                        <small class="text-muted">Full name as displayed on NRIC</small>
                        <div class="invalid-feedback">
                          Name of account holder is required
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="bank-number">Bank account number</label>
                        <input type="text" name="bankNo" class="form-control" id="bank-number" placeholder="">
                        <div class="invalid-feedback">
                          Bank account number is required
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div>
                        <label for="referenceNo">Reference Number</label>
                        <input type="text" name="refNo" class="form-control" id="referenceNo" placeholder="">
                        <div class="invalid-feedback">
                          Reference number required
                        </div>
                      </div>
                    </div>
                  </div>

                  <!--Credit or Debit Card-->
                  <div id = 'second' class = 'inactive'>
                    <br>
                    <h5 class="mb-3">Credit or debit card</h4>
                    
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <label for="name">Name on card</label>
                        <input type="text" name="cardName" class="form-control" id="name" placeholder="">
                        <small class="text-muted">Full name as displayed on card</small>
                        <div class="invalid-feedback">
                          Name on card is required
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="number">Credit card number</label>
                        <input type="text" name="cardNo" class="form-control" id="number" placeholder="">
                        <div class="invalid-feedback">
                          Credit card number is required
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="expiration">Expiration</label>
                        <input type="text" name="expDate" class="form-control" id="expiration" placeholder="MM/YY">
                        <div class="invalid-feedback">
                          Expiration date required
                        </div>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="cvv">CVV</label>
                        <input type="text" name="cvv" class="form-control" id="cvv" placeholder="">
                        <div class="invalid-feedback">
                          Security code required
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                  <button class="btn btn-primary btn-lg btn-block" type="submit">Contribute Now</button>
                </form>
              </div>

              <div id="Goods" class="col-md-8 order-md-1 tabcontent">
                <h4 class="mb-3"><strong>Goods contribution</strong></h4>
                <form method="POST" action="procAddContribution.php" class="needs-validation" novalidate>
                  <div class="row">
                    <div class="col-md-3 mb-3">
                      <label for="goodsType">Goods type</label>
                      <select name="goodsType" class="custom-select d-block w-100" id="goodsType" required>
                        <option value="">Choose...</option>
                        <option>Food</option>
                        <option>Toiletries</option>
                        <option>Sanitary Products</option>
                        <option>Stationery</option>
                        <option>Other</option>
                      </select>
                      <div class="invalid-feedback">
                        Please select a valid goods type.
                      </div>
                    </div>
                    <div class="col-md-6 mb-6">
                      <label for="otherGoodsType">Other goods type</label>
                      <input type="text" name="otherType" class="form-control" id="otherGoodsType" placeholder="">
                      <div class="invalid-feedback">
                        Please enter the type of goods.
                      </div>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="quantity">Quantity</label>
                      <input type="number" name="quantity" min="1" class="form-control" id="quantity" placeholder="" required>
                      <div class="invalid-feedback">
                        Please input a valid quantity.
                      </div>
                    </div>
                  </div>
      
                  
      
                  <div class="mb-3">
                    <label for="description">Goods description<span class="text-muted"></span></label>
                    <input type="text" name="goodsDesc" class="form-control" id="description" required>
                    <div class="invalid-feedback">
                      Please enter a valid description.
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="estimatedValue">Estimated value (RM)<span class="text-muted"></span></label>
                    <input type="number" name="value" min="1" class="form-control" id="estimatedValue" required>
                    <div class="invalid-feedback">
                      Please enter a valid estimated value.
                    </div>
                  </div>
                  <button class="btn btn-primary btn-lg btn-block" type="submit">Contribute Now</button>
                </form>
              </div>
            </div>

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

  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>


    <?php
      if (isset($_SESSION['username']))
        echo "<script>hideLogin()</script>";

      if (isset($_SESSION['message'])) {
        if ($_SESSION['message'] == 'unknown')
          echo "<script>showAlert('unknown')</script>";
        unset($_SESSION['message']);
      }
    ?>  

</body>

</html>