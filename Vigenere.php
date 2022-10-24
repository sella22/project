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

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Algoritma Vigenere Cipher</h2>
          <p>Kali ini kita akan mempelajari tentang Vigenere Cipher</p>
        </div>
   
        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/kripto/Vigenere.jpg" height="280" width="280" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Diplomat Perancis Blaise de Vigènere</h3>
            <p class="fst-italic">
            Kode vigènere termasuk kode abjad-majemuk (polyalphabetic substitution cipher). Dipublikasikan oleh diplomat (sekaligus seorang 
            kriptologis) Perancis, Blaise de Vigènere pada abad 16, tahun 1586. Sebenarnya Giovan Batista Belaso telah menggambarkannya untuk 
            pertama kali pada tahun 1533 seperti ditulis di dalam buku La Cifra del Sig. Algoritma ini baru dikenal luas 200 tahun kemudian 
            dan dinamakan kode vigènere. Vigènere merupakan pemicu perang sipil di Amerika dan kode vigènere digunakan oleh Tentara Konfederasi 
            (Confederate Army) pada perang sipil Amerika (American Civil War). Kode vigènere berhasil dipecahkan oleh Babbage dan Kasiski pada 
            pertengahan abad 19. (Ariyus, 2008).
            </p>
            
            <p>
            Algoritma enkripsi jenis ini sangat dikenal karena mudah dipahami dan diimplementasikan. Teknik untuk menghasilkan ciphertext 
            bisa dilakukan menggunakan substitusi angka maupun bujursangkar vigènere. Teknik susbtitusi vigènere dengan menggunakan angka 
            dilakukan dengan menukarkan huruf dengan angka, hampir sama dengan kode geser.
            </p>
          </div>
          
        </div>
        </div>
</div>
    </section><!-- End About Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Rumus</h2>
          <p>Termasuk ke dalam cipher abjad-majemuk (polyalpabetic substitution cipher ). Vigènere Cipher menggunakan Bujursangkar Vigènere 
            untuk melakukan enkripsi. Setiap baris di dalam bujursangkar menyatakan huruf-huruf cipherteks yang diperoleh dengan Caesar 
            Cipher (A = 0, B = 1, C = 2, …., Z = 25)</p>
        </div>

        <div class="row" data-aos="fade-in">
        
          <div class="col-lg-6 d-flex align-items-stretch">
            <div class="info">
              <div class="26">
              <h6>Untuk 26 karakter ASCII, maka:</h6>
                <ul>
                <li><strong>Enkripsi: ci =</strong> <span>E(pi) = (pi + k) mod 26</span></li>
                <li><strong>Dekripsi: pi =</strong> <span>D(ci) = (ci – k) mod 26</span></li>
                <li><strong>k =</strong> <span>Kunci rahasia</span></li>
                </ul>
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-6 d-flex align-items-stretch">
          <div class="info">
              <div class="256">
              <h6>Untuk 256 karakter ASCII, maka:</h6>
                <ul>
                <li><strong>Enkripsi: ci =</strong> <span>E(pi) = (pi + k) mod 256</span></li>
                <li><strong>Dekripsi: pi =</strong> <span>D(ci) = (ci – k) mod 256</span></li>
                <li><strong>k =</strong> <span>Kunci rahasia</span></li>
                </ul>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
    <div class="container">
      <div class="section-title">
          <h2>Contoh</h2>
          <p>plainteks : PLAINTEXT</p>
          <p>Kunci : CIPHER</p>
          <img src="assets/img/kripto/RumusV.jpg" class="img-fluid" alt="">
        </div>
      
        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Enkripsi</h3>
            <div class="resume-item pb-0">
              <ul>
                <span>P = E(15) = (15+2) = 17 mod 26 = 17(R)</span></br>
                <span>L = E(11) = (11+8) = 19 mod 26 = 19(T)</span></br>
                <span>A = E(0) = (0+15) = 15 mod 26 = 15(P)</span></br>
                <span>I = E(8) = (8+7) = 15 mod 26 = 15(P)</span></br>
                <span>N = E(13) = (13+4) = 17 mod 26 = 17(R)</span></br>
                <span>T = E(19) = (19+17) = 10 mod 26 = 10(K)</span></br>
                <span>E = E(4) = (4+2) = 6 mod 26 = 6(G)</span></br>
                <span>X = E(23) = (23+8) = 5 mod 26 = 5(F)</span></br>
                <span>T = E(19) = (19+15) = 8 mod 26 = 8(I)</span></br>
                <span>Maka didapatlah chipertext yaitu <strong>RTPPRKGFI</strong></span></br>
              </ul>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <h3 class="resume-title">Dekripsi</h3>
            <div class="resume-item">
                <span>R = E(17) = (17-2) = 15 mod 26 = 15(P)</span></br>
                <span>T = E(19) = (19-8) = 11 mod 26 = 11(L)</span></br>
                <span>P = E(15) = (15-15) = 0 mod 26 = 0(A)</span></br>
                <span>P = E(15) = (15-7) = 8 mod 26 = 8(I)</span></br>
                <span>R = E(17) = (17-4) = 13 mod 26 = 13(N)</span></br>
                <span>K = E(10) = (10-17) = 19 mod 26 = 19(T)</span></br>
                <span>G = E(6) = (6-2) = 4 mod 26 = 4(E)</span></br>
                <span>F = E(5) = (5-8) = 23 mod 26 = 23(X)</span></br>
                <span>I = E(8) = (8-15) = 19 mod 26 = 19(T)</span></br>
                <span>Maka didapatlah plaintext yaitu <strong>PLAINTEXT</strong></span></br>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->
  </main><!-- End #main -->
    
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