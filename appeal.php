<?php
session_start();
include('dbConnection.php');


if ( !isset($_GET['id']) && !isset($_SESSION['appealID'])) {
    header('Location:accessDenied.php');
}

$appealID = $_GET['id'];
$queryAppeal = "SELECT * FROM appeal WHERE appealID = '".$appealID."'";
// } else {
//     $appealID = $_SESSION['appealID'];
//     echo "<script>alert('".$_SESSION['appealID']."')</script>";
//     $queryAppeal = "SELECT * FROM appeal WHERE appealID = '".$_SESSION['appealID']."'";
// }

$appeal = $con->query($queryAppeal);

if ($appeal) {
    while ($row = $appeal->fetch_assoc()) {
        $_SESSION['appealID'] = $row['appealID'];
        $_SESSION['appealOrgID'] = $row['orgID'];
        $_SESSION['appealFrom'] = $row['fromDate'];
        $_SESSION['appealTo'] = $row['toDate'];
    }
}

$queryOrg = "SELECT * FROM organization WHERE orgID = '".$_SESSION['appealOrgID']."'";
$org = $con->query($queryOrg);
if ($org) {
    while ($row = $org->fetch_assoc()) {
        $_SESSION['appealOrgName'] = $row['orgName'];
        $_SESSION['appealOrgAddress1'] = $row['orgAddress1'];
        $_SESSION['appealOrgAddress2'] = $row['orgAddress2'];
        $_SESSION['appealOrgCity'] = $row['orgCity'];
        $_SESSION['appealOrgState'] = $row['state'];
        $_SESSION['appealOrgZip'] = $row['zip'];
    }
}

if (isset($_SESSION['admin']) && $_SESSION['admin'] == 0) {
    $queryContributions = "SELECT * FROM contribution WHERE appealID = '".$_SESSION['appealID']."'";
    $contributions = $con->query($queryContributions);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Appeal</title>
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
          <h2>Appeal</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li><a href="viewAppeals.php">All Appeals</a></li>
            <li>Appeal <?php echo $_SESSION['appealID']?></li>
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
              <h2>
                    <?php                                        
                        echo $_SESSION["appealID"];
                    ?>
                </h2>
                <h4>
                    <?php
                    echo date("d/m/Y", strtotime($_SESSION['appealFrom']))." - ".date("d/m/Y", strtotime($_SESSION['appealTo']));
                    ?>
                </h4>
                <h5>Organization Details</h5>
                <p>
                  Name: 
                  <?php
                    echo $_SESSION['appealOrgName'];
                  ?>
                </P>
                <p>
                    Address: 
                    <?php 
                        echo $_SESSION['appealOrgAddress1'];
                        if ($_SESSION['appealOrgAddress2'])
                            echo ", ".$_SESSION['appealOrgAddress2'];
                        echo ",<br>".$_SESSION['appealOrgZip']." ".$_SESSION['appealOrgCity'].",<br>".$_SESSION['appealOrgState'];
                    ?>
                </p>
                <br><br>
                <button class="btn btn-secondary" onclick="history.back(-1)">Back</button>
                <?php
                    if (strtotime($_SESSION['appealTo']) > time())
                    echo "<button class='btn btn-primary' onclick=\"location.href='contribute.php'\">Contribute</button>";
                ?>
            </div>
            <div id="for-rep" style="display:none">
                <div id="Contributions">
                    <div class="row justify-content-center">
                        <div class="col-lg mt-5 large-table text-center">
                            <button class="btn btn-secondary mb-3" onclick="location.href='orgRepDashboard.php?d=false'">Dashboard</button>
                            <?php
                                if (strtotime($_SESSION['appealTo']) > time())
                                    echo "<button class=\"btn btn-primary mb-3\" onclick=\"window.location.href='orgRepDashboard.php?d=true'\">View Applicants to Disburse to</button>";
                            ?>
                            <table id="contributions" class="table sortable-table" data-table-for="Contribution">
                                <thead class="table-primary">
                                    <tr>
                                        <th scope="col" class="col-1">Contribution ID</th>
                                        <th scope="col" class="col-4">Goods Description</th>
                                        <th scope="col" class="col-2">Estimated Value</th>
                                        <th scope="col" class="col-2">Cash Amount</th>
                                        <th scope="col" class="col-2">Date Received</th>
                                        <th scope="col" class="col-1">Appeal ID</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                      if (isset($_SESSION['username'])) {
                                        while ($row = $contributions->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>".$row['contributionID']."</td>";
                                            echo "<td>".$row['goodsDescription']."</td>";
                                            echo "<td>".$row['estimatedValue']."</td>";
                                            echo "<td>".$row['cashAmount']."</td>";
                                            echo "<td>".$row['receivedDate']."</td>";
                                            echo "<td>".$row['appealID']."</td>";
                                            echo "</tr>";
                                        }
                                      }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
      </div>
    </section>
    <div class="modal fade" id="modal-form-backdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Update Outcome</h5>
          </div>
          <button id="toggle-modal" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modal-form-backdrop" style="display:none"></button>
          <form method="POST" action="procChangeOutcome.php" id="form" class="form col-11 mx-auto needs-validation" novalidate>
            <div class="form-floating mb-3">
              <select name="outcome" id="outcome" class="form-select" required>
                <option value="" selected>Choose</option>
                <option value="Incomplete">Incomplete</option>
                <option value="Partially Disbursed">Partially Disbursed</option>
                <option value="Completed">Completed</option>
                <option value="Overdraft">Overdraft</option>
              </select>
              <label for="outcome">Outcome</label>
              <div class="invalid-feedback">
                Please select an outocme
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </form>

        </div>
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
    if (isset($_SESSION['username'])) {
      echo "<script>hideLogin()</script>";
      echo "<script>document.getElementById('for-rep').style.display='block'</script>";
    }

    if (isset($_SESSION['update-outcome'])) {
        echo "<script>document.getElementById('toggle-modal').click()</script>";
    }
  ?>

</body>

</html>