<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>iPortfolio Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v3.9.1
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/kripto/logo2.png" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">CRIPT-KNOW'S</a></h1>
        <!-- <div class="social-links mt-3 text-center">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div> -->
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li>
              <a href="caesar.php" class="dropdown-item">
                <i class="nav-icon fas fa-history">
                </i> Algoritma Caesar Cipher
              </a>
          </li>
          <li><a href="Vigenere.php" class="dropdown-item">
                <i class="nav-icon fas fa-history">
                </i> Algoritma Vigenere Cipher
              </a>
          </li>
          <li><a href="Playfair.php" class="dropdown-item">
                <i class="nav-icon fas fa-history">
                </i> Algoritma Playfair Cipher
              </a>
          </li>
          <li><a href="transposisi.php" class="dropdown-item">
               <i class="nav-icon fas fa-history">
               </i> Algoritma Transposisi Cipher
            </a>
          </li>
           <li><a href="Zigzag.php" class="dropdown-item">
                <i class="nav-icon fas fa-history">
                </i> Algoritma Zigzag Cipher
              </a>
          </li>
          <li><a href="Affine.php" class="dropdown-item">
                <i class="nav-icon fas fa-history">
                </i> Algoritma Affine Cipher
              </a>
          </li>
          <li><a href="Hill.php" class="dropdown-item">
               <i class="nav-icon fas fa-history">
               </i> Algoritma Hill Cipher
            </a>
          </li>
          <li><a href="index.php" class="dropdown-item">
                <i class="nav-icon fas fa-history">
                </i>Latihan
              </a>
            </li>
          <li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <!-- <section id="krip" class="d-flex flex-column justify-content-center align-items-center">
    <div class="krip-container" data-aos="fade-in">
      <h1>Alex Smith</h1>
      <p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer"></span></p>
    </div>
  </section> -->
  <!-- End Hero -->
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Algoritma Affine Cipher</h2>
          <p>Kali ini kita akan mempelajari tentang Affine Cipher</p>
        </div>
   
        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <!-- <img src="assets/img/kripto/caesar.jpg" class="img-fluid" alt=""> -->
          </div>
          <!-- <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left"> -->
            <p class="fst-italic">
              Affine Cipher merupakan perluasan dari Caesar Chiper. Pada Affine Cipher plainteks P
              dikalikan dengan sebuah nilai m dan menambahkannya dengan sebuah pergeseran b. 
            </p>
          <!-- </div> -->
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <!-- <h3>Kaisar Romawi Julius Caesar</h3> -->
            
            
          </div>
          
        </div>
        <div class="row">
        
    </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
  <section id="skills" class="skills section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Rumus</h2>
        <ul>
          <li><strong>Enkripsi: C =</strong> <span>E(P) = (mP + b) mod n</span></li>
          <li><strong>Dekripsi: E =</strong> <span>D(P) = m<sup>-1</sup> (C – b) mod n</span></li>
          <li><strong>Kunci: m dan b</strong></li>
        </ul>
        <h6>Keterangan:</h6>
        <ul>
          <i class="bi bi-chevron-right"></i> <strong>n : </strong> <span>adalah ukuran alfabet</span><br>
          <i class="bi bi-chevron-right"></i> <strong>m : </strong> <span>bilangan bulat yang relatif prima dengan n</span><br>
          <i class="bi bi-chevron-right"></i> <strong>b : </strong> <span>adalah jumlah pergeseran</span><br>
          <i class="bi bi-chevron-right"></i> <strong>m<sup>-1</sup> : </strong> <span>adalah inversi m (mod n), yaitu m . m<sup>-1</sup> = 26 . q + 1</span></li>
        </ul>
        <h6>Cara Mencari Relatif Prima:</h6>
        <p>Dua bilangan bulat a dan b dikatakan relatif prima atau saling prima apabila FPB kedua bilangan adalah 1.</p>
        <p>Untuk mengetahui apakah angka tersebut merupakan relatif prima dari 26 maka kita harus mencoba mencari FBBnya terlebih dahulu.</p>
      <p>
        Karena faktor dari 26 adalah 1,2,13 dan 26 sehingga kita tidak perlu mecoba angka tersebut maupun kelipatan dari angka tersebut.
      </p>

      </div>

    </div>
  </section><!-- End Skills Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
      <div class="container">
        <div class="section-title">
            <h2>Contoh</h2>
            <p>plainteks :BUKU, enkripsikanlah dengan Affine cipher b=2 dan m=5</p>
            <!-- <img src="assets/img/kripto/3.jpg" class="img-fluid" alt=""> -->
          </div>
        
          <div class="row">
            <div class="col-lg-6" data-aos="fade-up">
              <h3 class="resume-title">Enkripsi</h3>
              <div class="resume-item pb-0">
                <ul>
                <span>Pertama ubahlah huruf menjadi angka dengan pedoman tabel di atas:</span></br>
                  <span>B = 1, U = 20, K = 10, U = 20. Kemudian hitung dengan rumus enkripsi:</span></br>
                  <span>C = E(1) = (5.1+2) mod 26 = 7(H)</span></br>
                  <span>C = E(20) = (5.20+2) mod 26 = 24(Y)</span></br>
                  <span>C = E(10) = (5.10+2) mod 26 = 0(A)</span></br>
                  <span>C = E(20) = (5.20+2) mod 26 = 24(Y)</span></br>
                  <span>Cipherteks keseluruhan adalah <strong>HYAY</strong></span></br>
                </ul>
              </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Dekripsi</h3>
              <div class="resume-item">
                <span>Persamaan Eucledean : m . m<sup>-1</sup> = 26 . q + 1</span></br>
                <span>Caranya kita harus mencari try and errornya</span></br>
                <span>𝑚.<sup>-1</sup>=1 (𝑚𝑜𝑑 𝑛)</span></br>
                <span>𝑚.𝑚<sup>-1</sup>=1 (𝑚𝑜𝑑 26)</span></br></br>
                <span>Persamaan eucledian</span></br>
                <span>𝑚.𝑚<sup>-1</sup>=26.𝑞+1</span></br>
                <span>𝑚<sup>-1</sup>=(26.𝑞+1)/5</span></br></br>
                <span>Try and error</span></br>
                <span>q=1 →  (26.1+1)/5 = 27/5</span></br>
                <span>q=2 →  (26.2+1)/5 = 53/5</span></br>
                <span>q=3 →  (26.3+1)/5 = 79/5</span></br>
                <span>q=4 →  (26.4+1)/5 = 105/5 = 21</span></br></br>
                <span>Gunakan rumus deskripsi D(P) = m<sup>-1</sup> (C – b) mod n</span></br>
                <span>P = D(7)  = 21.(7-2) mod 26 = 105 mod 26 = 1(B)</span></br>
                <span>P = D(24) = 21.(24-2) mod 26 = 462 mod 26 = 20(U)</span></br>
                <span>P = D(0) = 21.(0-2) mod 26 = 42 mod 26 = 10(K)</span></br>
                <span>P = D(24) = 21.(24-2) mod 26 = 462 mod 26 = 20(U)</span></br>
                <span>Maka didapatlah plainteks kembali yaitu <strong>BUKU</strong></span>
              </div>
            </div>
          </div>
  
        </div>
      </section><!-- End Resume Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>iPortfolio</span></strong>
      </div>
      <div class="credits"> -->
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div> -->
  <!-- </footer> -->
  <!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>