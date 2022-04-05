<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Organizations</title>
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
        <h1><a href="index.php"><img src="assets/img/logo.png" alt=""> HELP Aid</a></h1>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="index.php#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
          <li><a class="nav-link scrollto" href="index.php#services">Services</a></li>
          <li><a class="nav-link scrollto active" href="organizations.php">Organizations</a></li>
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
          <h2>Organizations</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Organizations</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page section-bg">
      <div class="container">

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
          <div class="container">

            <div class="section-title">
              <h2 id="waypoint">Browse Organizations</h2>
              <p>Organizations around Malaysia need your help today!</p>
            </div>

            <div class="row">
              <div class="col-lg-12">
                <ul id="portfolio-flters">
                  <li data-filter="*" class="filter-active">All</li>
                  <li data-filter=".education">Education</li>
                  <li data-filter=".health">Health</li>
                  <li data-filter=".social">Social</li>
                  <li data-filter=".animal">Animal</li>
                  <li data-filter=".general">General</li>
                </ul>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <input type="text" onkeyup="searchFilter()" class="searchFilter form-control" placeholder="Search">
              </div>
            </div>

            <div class="row portfolio-container">

              <!-- Kementerian Kesihatan Malaysia -->
              <div class="col-lg-4 col-md-6 portfolio-item health wow fadeInUp">
                <div class="portfolio-wrap">
                  <figure>
                    <img src="assets/img/organizations/kementerian-kesihatan-malaysia-logo.jpg" class="img-fluid"
                      alt="">
                    <a href="assets/img/organizations/kementerian-kesihatan-malaysia-logo.jpg"
                      class="link-preview portfolio-lightbox" data-gallery="portfolioGallery"
                      data-title="Kementerian Kesihatan Malaysia">
                      <i class="bx bx-plus"></i>
                    </a>
                    <a href="organizations/kementerian-kesihatan-malaysia.php" class="link-details"
                      title="More Details"><i class="bx bx-link"></i></a>
                  </figure>

                  <div class="portfolio-info">
                    <h4>
                      <a href="organizations/kementerian-kesihatan-malaysia.php">
                        <span class="search-id">
                          ORG001
                        </span>
                        Kementerian Kesihatan Malaysia
                      </a>
                    </h4>
                    <p>Health</p>
                  </div>
                </div>
              </div>

              <!-- MERCY Malaysia -->
              <div class="col-lg-4 col-md-6 portfolio-item health wow fadeInUp">
                <div class="portfolio-wrap">
                  <figure>
                    <img src="assets/img/organizations/mercy-malaysia-logo.jpg" class="img-fluid" alt="">
                    <a href="assets/img/organizations/mercy-malaysia-logo.jpg" class="link-preview portfolio-lightbox"
                      data-gallery="portfolioGallery" data-title="MERCY Malaysia">
                      <i class="bx bx-plus"></i>
                    </a>
                    <a href="organizations/mercy-malaysia.php" class="link-details" title="More Details"><i
                        class="bx bx-link"></i></a>
                  </figure>

                  <div class="portfolio-info">
                    <h4>
                      <a href="organizations/mercy-malaysia.php">
                        <span class="search-id">
                          ORG002
                        </span>
                        MERCY Malaysia
                      </a>
                    </h4>
                    <p>Health</p>
                  </div>
                </div>
              </div>

              <!-- MMHA -->
              <div class="col-lg-4 col-md-6 portfolio-item health wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-wrap">
                  <figure>
                    <img src="assets/img/organizations/mmha-logo.jpg" class="img-fluid" alt="">
                    <a href="assets/img/organizations/mmha-logo.jpg" class="link-preview portfolio-lightbox"
                      data-gallery="portfolioGallery" data-title="MalaysianMental Health Association">
                      <i class="bx bx-plus"></i>
                    </a>
                    <a href="organizations/mmha.php" class="link-details" title="More Details"><i
                        class="bx bx-link"></i></a>
                  </figure>

                  <div class="portfolio-info">
                    <h4>
                      <a href="organizations/mmha.php">
                        <span class="search-id">
                          ORG003
                        </span>
                        MMHA
                      </a>
                    </h4>
                    <p>Health</p>
                  </div>
                </div>
              </div>

              <!-- NGOHub -->
              <div class="col-lg-4 col-md-6 portfolio-item general wow fadeInUp" data-wow-delay="0.2s">
                <div class="portfolio-wrap">
                  <figure>
                    <img src="assets/img/organizations/ngohub-logo.jpg" class="img-fluid" alt="">
                    <a href="assets/img/organizations/ngohub-logo.jpg" class="link-preview portfolio-lightbox"
                      data-gallery="portfolioGallery" data-title="NGOHub">
                      <i class="bx bx-plus"></i>
                    </a>
                    <a href="organizations/ngohub.php" class="link-details" title="More Details"><i
                        class="bx bx-link"></i></a>
                  </figure>

                  <div class="portfolio-info">
                    <h4>
                      <a href="organizations/ngohub.php">
                        <span class="search-id">
                          ORG004
                        </span>
                        NGOHub
                      </a>
                    </h4>
                    <p>General</p>
                  </div>
                </div>
              </div>

              <!-- Project Wawasan Rakyat -->
              <div class="col-lg-4 col-md-6 portfolio-item social wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-wrap">
                  <figure>
                    <img src="assets/img/organizations/project-wawasan-rakyat-logo.jpg" class="img-fluid" alt="">
                    <a href="assets/img/organizations/project-wawasan-rakyat-logo.jpg"
                      class="link-preview portfolio-lightbox" data-gallery="portfolioGallery"
                      data-title="Project Wawasan Rakyat">
                      <i class="bx bx-plus"></i>
                    </a>
                    <a href="organizations/project-wawasan-rakyat.php" class="link-details" title="More Details"><i
                        class="bx bx-link"></i></a>
                  </figure>

                  <div class="portfolio-info">
                    <h4>
                      <a href="organizations/project-wawasan-rakyat.php">
                        <span class="search-id">
                          ORG005
                        </span>
                        Project Wawasan Rakyat
                      </a>
                    </h4>
                    <p>Social</p>
                  </div>
                </div>
              </div>

              <!-- Refuge for the Refugees -->
              <div class="col-lg-4 col-md-6 portfolio-item social wow fadeInUp" data-wow-delay="0.2s">
                <div class="portfolio-wrap">
                  <figure>
                    <img src="assets/img/organizations/refuge-for-the-refugees-logo.jpg" class="img-fluid" alt="">
                    <a href="assets/img/organizations/refuge-for-the-refugees-logo.jpg"
                      class="link-preview portfolio-lightbox" data-gallery="portfolioGallery"
                      data-title="Refuge for the Refugees">
                      <i class="bx bx-plus"></i>
                    </a>
                    <a href="organizations/refuge-for-the-refugees.php" class="link-details" title="More Details"><i
                        class="bx bx-link"></i></a>
                  </figure>

                  <div class="portfolio-info">
                    <h4>
                      <a href="organizations/refuge-for-the-refugees.php">
                        <span class="search-id">
                          ORG006
                        </span>
                        Refuge for the Refugees
                      </a>
                    </h4>
                    <p>Social</p>
                  </div>
                </div>
              </div>

              <!-- Shelter Home -->
              <div class="col-lg-4 col-md-6 portfolio-item social wow fadeInUp">
                <div class="portfolio-wrap">
                  <figure>
                    <img src="assets/img/organizations/shelter-home-logo.jpg" class="img-fluid" alt="">
                    <a href="assets/img/organizations/shelter-home-logo.jpg" data-gallery="portfolioGallery"
                      class="link-preview portfolio-lightbox" data-title="Shelter Home for Children"><i
                        class="bx bx-plus"></i></a>
                    <a href="organizations/shelter-home.php" class="link-details" title="More Details"><i
                        class="bx bx-link"></i></a>
                  </figure>

                  <div class="portfolio-info">
                    <h4>
                      <a href="organizations/shelter-home.php">
                        <span class="search-id">
                          ORG007
                        </span>
                        Shelter Home
                      </a>
                    </h4>
                    <p>Social</p>
                  </div>
                </div>
              </div>

              <!-- UM Medical Centre -->
              <div class="col-lg-4 col-md-6 portfolio-item health wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-wrap">
                  <figure>
                    <img src="assets/img/organizations/um-medical-centre-logo.jpg" class="img-fluid" alt="">
                    <a href="assets/img/organizations/um-medical-centre-logo.jpg"
                      class="link-preview portfolio-lightbox" data-gallery="portfolioGallery"
                      data-title="University of Malaya Medical Centre">
                      <i class="bx bx-plus"></i>
                    </a>
                    <a href="organizations/um-medical-centre.php" class="link-details" title="More Details"><i
                        class="bx bx-link"></i></a>
                  </figure>

                  <div class="portfolio-info">
                    <h4>
                      <a href="organizations/um-medical-centre.php">
                        <span class="search-id">
                          ORG008
                        </span>
                        UM Medical Centre
                      </a>
                    </h4>
                    <p>Health</p>
                  </div>
                </div>
              </div>

              <!-- Zoo Negara -->
              <div class="col-lg-4 col-md-6 portfolio-item animal wow fadeInUp" data-wow-delay="0.2s">
                <div class="portfolio-wrap">
                  <figure>
                    <img src="assets/img/organizations/zoo-negara-logo.jpg" class="img-fluid" alt="">
                    <a href="assets/img/organizations/zoo-negara-logo.jpg" class="link-preview portfolio-lightbox"
                      data-gallery="portfolioGallery" data-title="Zoo Negara">
                      <i class="bx bx-plus"></i>
                    </a>
                    <a href="organizations/zoo-negara.php" class="link-details" title="More Details"><i
                        class="bx bx-link"></i></a>
                  </figure>

                  <div class="portfolio-info">
                    <h4>
                      <a href="organizations/zoo-negara.php">
                        <span class="search-id">
                          ORG009
                        </span>
                        Zoo Negara
                      </a>
                    </h4>
                    <p>Animal</p>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </section><!-- End Portfolio Section -->
      </div>
    </section>

    <!-- Add Org button -->
    <a class="add-btn d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#modal-form-backdrop">
      <i class="bi bi-plus-circle-fill"></i>
      <span>Org</span>
    </a>

    <!-- Floatin (Modal) form -->
    <div class="modal fade" id="modal-form-backdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Add Organization</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <form method="POST" action="procAddOrg.php" class="form col-11 mx-auto add-organization-form needs-validation" novalidate>
            <div class="form-floating mb-3 mt-3">
              <input type="text" name="org-name" class="form-control" id="org-name" placeholder="Organization Name" required>
              <label for="org-name">Organization Name</label>
              <div class="invalid-feedback">
                Please enter the organization
              </div>
            </div>

            <div class="form-floating mb-3">
              <input type="text" name="address1" class="form-control" id="org-address1" placeholder="Address 1" required>
              <label for="org-address1">Address 1</label>
              <div class="invalid-feedback">
                Please enter the organization address
              </div>
            </div>
            <div class="form-floating mb-3">
              <input type="text" name="address2" class="form-control" id="org-address2" placeholder="Address 2">
              <label for="org-address2">Address 2</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" name="city" class="form-control" id="org-city" placeholder="City" required>
              <label for="org-city">City</label>
              <div class="invalid-feedback">
                Please enter a city
              </div>
            </div>
            <div class="form-floating mb-3">
              <select name="states" id="org-state" class="form-select" required>
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
              <label for="org-state">State</label>
              <div class="invalid-feedback">
                Please select a state
              </div>
            </div>
            <div class="form-floating mb-3">
              <input type="text" name="zipCode" pattern="[0-9]{5}" title="Field must be 5 digits" class="form-control" id="org-zip" placeholder="Zip" required>
              <label for="org-zip">Zip</label>
              <div class="invalid-feedback">
                Please enter a 5-digit zipcode
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

</body>

</html>