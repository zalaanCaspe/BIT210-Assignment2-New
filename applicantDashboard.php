<?php

session_start();

include('dbConnection.php');

// if not applicant logging in nor redirected from registration nor visiting as rep
if (!$_SESSION['applicant'] == 'true' && !isset($_SESSION['self']) && !isset($_GET['applicant'])) {
  // echo "<script>alert('".$_SESSION["applicant"]."')</script>";
  header("Location:accessDenied.php");
}

// to check which applicant's dashboard if org rep visits
if(isset($_GET['applicant']) ){
    $_SESSION['applicant-id']=$_GET['applicant'];
}

if (!isset($_SESSION['applicant'])) {
    header("Location:accessDenied.php");
} elseif ($_SESSION['applicant'] == 'true') {
    $_SESSION['applicantName'] = $_SESSION['fullName'];
    $_SESSION['applicantUName'] = $_SESSION['username'];
    $queryDisbursements = "SELECT * FROM disbursement WHERE idNo = '".$_SESSION['idNo']."'";
    $queryDocs = "SELECT * FROM document WHERE idNo = '".$_SESSION['idNo']."'";
} else {
    $applicantQuery = "SELECT * FROM applicant WHERE idNo = '".$_SESSION['applicant-id']."'";
    $applicant = $con->query($applicantQuery);
    if ($applicant==true) {
        while ($row = $applicant->fetch_assoc()){
            $_SESSION['applicantName'] = $row['fullName'];
            $_SESSION['applicantUName'] = $row['username'];
            $_SESSION['idNo'] = $row['idNo'];
            $_SESSION['income'] = $row['householdIncome'];
            $_SESSION['address1'] = $row['address1'];
            $_SESSION['address2'] = $row['address2'];
            $_SESSION['zip'] = $row['zip'];
            $_SESSION['city'] = $row['city'];
            $_SESSION['state'] = $row['state'];
        }
        $queryDisbursements = "SELECT * FROM disbursement WHERE idNo = '".$_SESSION['applicant-id']."'";
        $queryDocs = "SELECT * FROM document WHERE idNo = '".$_SESSION['applicant-id']."'";
    }
}
$disbursements = $con->query($queryDisbursements);
$docs = $con->query($queryDocs);

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
        <h1><a href="index.php"><img src="assets/img/logo.png" class="img-fluid" alt=""> HELP Aid</a></h1>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="index.php#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
          <li><a class="nav-link scrollto" href="logout.php">Log out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

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
          <h2><?php if ($_SESSION['applicant'] == 'false') echo 'Applicant: '.$_SESSION['applicantName']; else echo 'Dashboard';?></h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <?php if ($_SESSION['applicant'] == 'false') echo '<li><a href="orgRepDashboard.php">Dashboard</a></li>'?>
            <li><?php if ($_SESSION['applicant'] == 'false') echo $_SESSION['applicantName']; else echo 'Dashboard';?></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page section-bg">
      <div class="container">

        <section style="padding: 0px 0px;">
          <div class="container">

            <div class="section-title">
                <h2>
                    <?php
                        if ($_SESSION['applicant'] == 'true')
                            echo 'Welcome, ';
                        echo $_SESSION["applicantName"];
                    ?>
                </h2>
                <p>
                    Username: <?php echo $_SESSION['applicantUName'];?>
                </p>
                <p>
                    Household Income: RM<?php echo $_SESSION['income'];?>
                </p>
                <p>
                    Address: 
                    <?php 
                        echo $_SESSION['address1'];
                        if ($_SESSION['address2'])
                            echo ", ".$_SESSION['address2'];
                        echo ",<br>".$_SESSION['zip']." ".$_SESSION['city'].",<br>".$_SESSION['state'];
                    ?>
                </p>
                <br>
                <button id='back' class="btn btn-secondary mb-3" onclick="location.href='orgRepDashBoard.php'">Back to Dashboard</button>
                <?php
                    if ($_SESSION['applicant'] == 'true')
                        echo "<script>document.getElementById('back').style.display = 'none'</script>";
                ?>
                <div class="alert alert-success col-4 text-center mx-auto" role="alert" style="display:none">
                    Document added successfully
                </div>
                <div class="alert alert-danger col-4 text-center mx-auto" role="alert" style="display:none">
                    Something went wrong. Please try again
                </div>
            </div>

            <div class="tab">
                <button class="tablinks" id="defaultOpen" onclick="openTable(event, 'Disbursements')" id="defaultOpen">Disbursements</button>
                <button class="tablinks" id="docTab" onclick="openTable(event, 'Documents')">Documents</button>
            </div>

            <div id="Disbursements" class="tabcontent">
                <div class="row justify-content-center">
                    <div class="col-lg mt-5 large-table text-center">
                        <?php if ($_SESSION['applicant'] == 'false') echo "<button class='btn btn-primary mb-3' onclick='location.href=\"disbursement.php\"'>Disburse Aid</button>"?>
                        <table id="disbursements" class="table sortable-table" data-table-for="Disbursement">
                        <thead class="table-primary">
                            <tr>
                            <th scope="col" class="col-1">Appeal ID</th>
                            <th scope="col" class="col-1">Date</th>
                            <th scope="col" class="col-2">Cash</th>
                            <th scope="col" class="col-8">Goods Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while ($row = $disbursements->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>".$row["appealID"]."</td>";
                                    echo "<td>".$row["disbursementDate"]."</td>";
                                    echo "<td>".$row["cashAmount"]."</td>";
                                    echo "<td>".$row["goodsDescription"]."</td>";
                                    echo "</tr>";
                                }
                            ?>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div id="Documents" class="tabcontent">
                <div class="row justify-content-center">
                    <div class="col-8 mt-5 large-table text-center">
                        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modal-form-backdrop">Add Documents</button>
                        <table id="documents" class="table sortable-table" data-table-for="Document">
                        <thead class="table-primary">
                            <tr>
                            <th scope="col" class="col-2">ID</th>
                            <th scope="col" class="col-3">Name</th>
                            <th scope="col" class="col-7">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while ($row = $docs->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>".$row["documentID"]."</td>";
                                    echo "<td>".$row["filename"]."</td>";
                                    echo "<td>".$row["description"]."</td>";
                                    echo "</tr>";
                                }
                            ?>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>

          </div>
        </section>
      </div>
    </section>

    <!-- Floatin (Modal) form -->
    <div class="modal fade" id="modal-form-backdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add Document</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> 
          <form method="POST" action="procAddDoc.php" class="form col-11 mx-auto add-doc-form needs-validation" novalidate>
            <div class="form-floating mb-3 mt-3">
              <input type="file" name="file" class="form-control-file" id="file" required>
              <div class="invalid-feedback">
                Please upload a file
              </div>
            </div>

            <div class="form-floating mb-3 mt-3">
              <input type="text" name="filename" class="form-control" id="filename" placeholder="File Name" required>
              <label for="filename">File Name</label>
              <div class="invalid-feedback">
                Please enter a file name
              </div>
            </div>

            <div class="form-floating mb-3">
              <input type="text" name="description" class="form-control" id="description" placeholder="Description" required>
              <label for="description">Description</label>
              <div class="invalid-feedback">
                Please enter the file description
              </div>
            </div>
            <div class="modal-footer">
              <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary">Add</button>
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
    // if session set, display alert
    if(isset($_SESSION['message'])){
        if ($_SESSION['message'] == 'success') {
            echo "<script>showAlert('alert-success')</script>";
        }
        else {
            echo "<script>showAlert('alert-danger')</script>";
        }
        unset($_SESSION['message']); // clear the value so that it doesn't display again
    }
    if ($_SESSION['add-docs'])
        echo "<script>document.getElementById('docTab').click()</script>";
  ?>
</body>

</html>