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
          <h2>Algoritma Zig-Zag Cipher</h2>
          <p>Kali ini kita akan mempelajari tentang Zig-Zag Cipher</p>
        </div>
   
        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/kripto/zigzag.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <!-- <h3>Penemu Playfair Cipher, Sir Charles Wheatstone</h3> -->
            <!-- <p class="fst-italic">
            Zig-zag Cipher (ZzC) adalah algoritma penyandian pesan yang menggunakan model transposisi, model enkripsi dan dekripsi Zig-zag Cipher 
            hampir mirip-mirip seperti algoritma transposisi lainnya yaitu Rail Fence Cipher (RFC).
            </p> -->
            <p>Zig-zag Cipher
adalah salah satu dari algoritma klasik yang menggunakan teknik transposisi. Teknik transposisi menggunakan permutasi karakter, yang mana dengan menggunakan teknik ini pesan 
yang asli tidak dapat dibaca kecuali orang yang memiliki kunci untuk menggembalikan pesan tersebut ke bentuk semula. Model enkripsi dan dekripsi pada Zig-zag Cipher hampir 
mirip-mirip seperti algoritma transposisi lainnya yaitu Rail Fence Cipher (RFC).</p>
            
            <p>
            Teknik yang diterapkan pada metode zig zag cipher adalah teknik transposisi cipher enkripsi dan dekripsi pesan dengan cara mengubah urutan huruf-huruf 
            yang ada didalam plaintext (pesan yang belum dienkripsi) menjadi ciphertext dengan cara tertentu agar isi pesan tersebut tidak dimengerti kecuali oleh 
            orang-orang tertentu. Pada dasarnya prinsip pengubahan pesan mirip dengan anagram seperti kata “melepas” diubah menjadi “saeeplm”, tapi tentu saja transposisi 
            cipher mempunyai rumus atau kunci tertentu yang diperlukan agar pesan bisa dimengerti.
            </p>
            <p></p>
            
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

     <!-- ======= Skills Section ======= -->
 <section id="skills" class="skills section-bg">
  <div class="container">

    <div class="section-title">
      <h2>Rumus</h2>
      <h6>Transposisi zig-zag dapat dilakukan berturut-turut dengan cara membentuk baris atau kolom yang diatur dalam format matriks. 
        Jika zig zag yang transposisi dilakukan baris, maka pesan dibaca dalam model zig-zag berdasarkan angka dalam kunci.</h6>
        <ul>
          <br>
          <p><strong>Jika digit di kuncinya adalah i</strong> maka pesan dibaca sebagai berikut urutan posisi matrix :</p>
          <p>Menurut Baris : (i, 1) (i +1, 2) (i, 3) (i +1, 4) (i, 5)</p>
          <p>missal i = 1 , maka (1,1)(2,2)(1,3)(2,4)(1,5) dst</p>
          <p>Menurut Kolom : (1, i) (2, i +1) (3, i) (4, i +1) (5, i)</p>
          <p>missal i = 1 , maka (1,1) (2,2) (3,1) (4,2) (5,1) dst</p><br>
          <p>Keterengan:</p>
          <p>x = baris</p>
          <p>y = kolom</p>
          <center>
            <p><img src="assets/img/kripto/ZigZagRumus.jpg"  height="530" width="530" class="img-fluid" alt=""></p>
          </center>
          </ul>
      </div>
      <h2>Contoh</h2>
      <h6><strong>Plaintext </strong>: <strong>SELAMAT DATANG HONDRO DI BUDIDARMA</strong></h6>
        <h6>dengan menggunakan Kunci Enkripsi = 3 dan Offset = 0 (artinya dalam 3 baris dimulai dari baris ke-0 atau awal atau paling atas)</h6>
      <!-- <p><img src="assets/img/kripto/ContohV1.jpg" width="400" class="img-fluid" alt=""></p> -->
      <p>Proses Enkripsi Zig-zag Cipher (ZzC): <img src="assets/img/kripto/Zigzag1.png" width="400" class="img-fluid" alt=""></p>
      <!-- <p>Hasil Enkripsi Zig-zag Cipher</p>
      <p><img src="assets/img/kripto/Zigzag2.png" width="400" class="img-fluid" alt=""></p> -->
      <p>maka Ciphertext = <strong>SMAGDIIMEAADTNHNRDBDDRALTAOOUA</strong> </p>
      <p></p>
      <br>
      <br>
      <h6><strong>Contoh 2</strong></h6>
      <h6><strong>Plaintext </strong>: <strong>“ANAK MUDA”</strong></h6>
        <h6>dengan kunci k = 2 , offset = 0 (artinya dalam 2 baris dimulai dari baris ke-0 atau awal atau paling atas). Banyak karakter terdiri dari 8 ,
dalam hal ini karakter spasi tidak disertakan dalam pembentukan ciphertext.</h6>
      <!-- <p><img src="assets/img/kripto/ContohV1.jpg" width="400" class="img-fluid" alt=""></p> -->
      <p>Dari ketentuan diatas maka diperoleh ciphertext: <img src="assets/img/kripto/ZigZagContoh.jpg"  height="530" width="530" class="img-fluid" alt=""></p>
      <p>Maka ciphertext hasil enkripsi dengan membaca karakter yang ada pada tiap barisnya adalah : “AAMDNKUA”</p>

    </div>

  </div>
</section><!-- End Skills Section -->

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