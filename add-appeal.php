<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Add Appeals</title>
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
                    <h2>Add Appeal</h2>
                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="appeals.php">Appeals</a></li>
                        <li>Add Appeal</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page section-bg">
            <div class="container">

                <!-- ======= Profile Section ======= -->
                <section id="portfolio" class="portfolio">
                    <div class="container">
                        <div class="section-title">
                            <h2>Add Appeal</h2>
                            <p>Fill out the form below to add a new appeal</p>
                        </div>

                        <form method="POST" action="procAddAppeal.php" class="form col-11 mx-auto add-organization-form needs-validation" novalidate>
                            <div class="row">
                                <div class="col-lg-4 form-floating mb-3 mt-3">
                                <select name="org-id" id="org-id" class="form-select" value="ORG001" required disabled>
                                    <option value="">Choose</option>
                                    <option value="ORG001" selected>ORG001</option>
                                    <option value="ORG002">ORG002</option>
                                    <option value="ORG003">ORG003</option>
                                    <option value="ORG004">ORG004</option>
                                    <option value="ORG005">ORG005</option>
                                    <option value="ORG006">ORG006</option>
                                    <option value="ORG007">ORG007</option>
                                    <option value="ORG008">ORG008</option>
                                    <option value="ORG009">ORG009</option>
                                </select>
                                <label for="org-id">Organization ID</label>
                                </div>
                                <div class="col-lg-8 form-floating mb-3 mt-lg-3">
                                    <select name="org-name" id="org-name" class="form-select" value="Kementerian Kesihatan Malaysia" required disabled>
                                    <option value="">Choose</option>
                                    <option value="Kementerian Kesihatan Malaysia" selected>Kementerian Kesihatan Malaysia</option>
                                    <option value="MERCY Malaysia">MERCY Malaysia</option>
                                    <option value="MMHA">MMHA</option>
                                    <option value="NGOHub">NGOHub</option>
                                    <option value="Project Wawasan Rakyat">Project Wawasan Rakyat</option>
                                    <option value="Refuge for the Refugees">Refuge for the Refugees</option>
                                    <option value="Shelter Home">Shelter Home</option>
                                    <option value="UM Medical Centre">UM Medical Centre</option>
                                    <option value="Zoo Negara">Zoo Negara</option>
                                    </select>
                                    <label for="org-id">Organization Name</label>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="title" class="form-control" id="appeal-title" placeholder="Title" required>
                                <label for="appeal-title">Title</label>
                                <div class="invalid-feedback">
                                  Please enter the appeal title
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 form-floating mb-3">
                                    <input type="date" name="fromDate" class="form-control" id="appeal-date-from" placeholder="" required>
                                    <label for="appeal-date-from">Starting date</label>
                                    <div class="invalid-feedback">
                                      Please select a starting date (must be before ending date)
                                    </div>
                                </div>
                                <div class="col-lg-6 form-floating mb-3">
                                    <input type="date" name="toDate" class="form-control" id="appeal-date-to" placeholder="" required>
                                    <label for="appeal-date-so">Ending date</label>
                                    <div class="invalid-feedback">
                                      Please select an ending date (must be after starting date)
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="desc" id="appeal-desc" placeholder="Description" style="height: 100px;" required></textarea>
                                <label for="appeal-desc">Description</label>
                                <div class="invalid-feedback">
                                  Please enter an appeal description
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="reset" class="btn btn-secondary">Reset</button>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </form>

                    </div>
                </section><!-- End Profile Section -->
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

    <script>
        let dateFrom = document.getElementById('appeal-date-from');
        let dateTo = document.getElementById('appeal-date-to');
        dateFrom.addEventListener('change', compareDates);
        dateTo.addEventListener('change', compareDates);
        function compareDates() {
            let from = new Date(dateFrom.value);
            let to = new Date(dateTo.value);
            if (from >= to) {
                this.setCustomValidity('wrong');
            }
            else
                this.setCustomValidity('');
        }

    </script>

    <?php
        if (isset($_SESSION['username']))
            echo "<script>hideLogin()</script>";
    ?>
</body>

</html>