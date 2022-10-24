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
          <h2>Algoritma Hill Cipher</h2>
          <p>Kali ini kita akan mempelajari tentang Hill Cipher</p>
        </div>
   
        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <!-- <img src="assets/img/kripto/Hill.jpg" class="img-fluid" alt=""> -->
            <img src="assets/img/kripto/Hill2.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Lester S. Hill</h3>
            <p class="fst-italic">
            Hill Cipher merupakan penerapan aritmatika modulo pada kriptografi. Teknik kriptografi ini menggunakan sebuah matriks persegi sebagai kunci yang digunakan 
            untuk melakukan enkripsi dan dekripsi.
            </p>
            
            <p>
            Hill Cipher diciptakan oleh Lester S. Hill pada tahun 1929. Teknik kriptografi ini diciptakan dengan maksud untuk dapat menciptakan cipher 
            (kode) yang tidak dapat dipecahkan menggunakan teknik analisis frekuensi. Hill Cipher tidak mengganti setiap abjad yang sama pada plaintext 
            dengan abjad lainnya yang sama pada ciphertext karena menggunakan perkalian matriks pada dasar enkripsi dan dekripsinya.
            </p>

            <!-- <div class="row">
              <div class="col-lg-6">
                <strong>Tiap huruf alfabet digeser 3 huruf ke kanan</strong></li>
                <ul>  
                    <li><i class="bi bi-chevron-right"></i> <strong>Pi:</strong> <span>A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Ci:</strong> <span>D E F G H I J K L M N O P Q R S T U V W X Y Z A B C</span></li>
                </ul>
              </div>
            </div> -->
            
            </div>
      </div>
</div>
    </section><!-- End About Section -->


    <!-- ======= Skills Section ======= -->
  <section id="skills" class="skills section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Rumus</h2>
        <h6>Menggunakan m buah persamaan linier</h6>
        <h6>Untuk m = 3 (enkripsi setiap 3 huruf), maka:</h6>
        <ul>
          <li><strong>C1 = </strong> <span>(k11 p1 + k12p2 + k13 p3) mod 26</span></li>
          <li><strong>C2 = </strong> <span>(k21 p1 + k22p2 + k23 p3) mod 26</span></li>
          <li><strong>C3 = </strong> <span>(k31 p1 + k32p2 + k33 p3) mod 26</span></li>
        </ul>
          <center>
            <h6>Atau :<img src="assets/img/kripto/RumusHill1.png" height="280" width="280" class="img-fluid" alt="">Atau : <strong>C = KP</strong></h6>
          </center>
        <!-- <ul>
          <li><strong>Enkripsi: ci =</strong> <span>E(pi) = (pi + k) mod 256</span></li>
          <li><strong>Dekripsi: pi =</strong> <span>D(ci) = (ci – k) mod 256</span></li>
          <li><strong>k =</strong> <span>Kunci rahasia</span></li>
        </ul> -->
        <p></p>
        <p></p>
        <br>
        <p>Dekripsi perlu menghitung K<sup>-1</sup> sedemikian sehingga: KK<sup>-1</sup> = I   (I matriks identitas).</p>

      </div>

    </div>
  </section><!-- End Skills Section -->

            <!-- ======= Resume Section ======= -->
<section id="resume" class="resume">
  <div class="container">
    <div class="section-title">
        <h2>Contoh</h2>
        <p><strong>Plainteks: PAYMOREMONEY</strong></p>
        <p>Tabel Cipherteks: <img src="assets/img/kripto/3.jpg" height="650" width="650" class="img-fluid" alt=""></P>
        <p>K =  <img src="assets/img/kripto/ContohHill1.png" height="80" width="80" class="img-fluid" alt=""></P>
              <!-- <p>K = <img src="assets/img/kripto/" height="250" width="250" class="img-fluid" alt=""></p> -->
      </div>
    
      <div class="row">
        <div class="col-lg-6" data-aos="fade-up">
          <h3 class="resume-title">Enkripsi</h3>
          <div class="resume-item pb-0">
              <p><img src="assets/img/kripto/ContohHill2.png" class="img-fluid" height="250" width="250" alt=""><strong>= LNS</strong></p>
              <p><strong>Cipherteks selengkapnya: LNSHDLEWMTRW</strong></p>
              <p>K<sup>-1</sup> = <img src="assets/img/kripto/ContohHill3.png" height="80" width="80" class="img-fluid" alt=""></p>
              <p>sebab</p>
              <p><img src="assets/img/kripto/ContohHill4.png" height="350" width="350" class="img-fluid" alt=""></p>
          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <h3 class="resume-title">Dekripsi</h3>
          <div class="resume-item">
            <p><strong> P = K<sup>-1</sup> C</strong></p>
            <p>Cipherteks: LNS  atau C = (11, 13, 18)</p>
            <p>Plainteks: <img src="assets/img/kripto/ContohHill5.png" height="250" width="250" class="img-fluid" alt=""></p>
            <p><strong>C = </strong>(15, 0, 24) = (P, A, Y)</p>
            <p>Kekuatan Hill cipher terletak pada penyembunyian frekuensi huruf tunggal.Huruf plainteks yang sama belum tentu dienkripsi menjadi huruf cipherteks yang sama.
              Hill cipher mudah dipecahkan dengan known-plaintext attack.</p>
            <p>Misalkan untuk Hill cipher dengan m = 2 diketahui :</p>
            <p>-P = (5, 17) dan C = (15, 16)</p>
            <p>-P = (8, 3) dan C = (2, 5)</p>
            <p>-Jadi, K(5, 17) = (15, 16) dan K(8, 3) = (10, 20)</p>
            <p><img src="assets/img/kripto/ContohHill6.png" height="250" width="250" class="img-fluid" alt=""></p>
            <p>Inversi dari X adalah<img src="assets/img/kripto/ContohHill7.png" height="250" width="250" class="img-fluid" alt=""></p>
            <p>Sehingga<img src="assets/img/kripto/ContohHill8.png" height="250" width="250" class="img-fluid" alt=""></p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->

  </main><!-- End #main -->

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