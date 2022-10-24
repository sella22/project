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
          <h2>Algoritma Caesar Cipher</h2>
          <p>Kali ini kita akan mempelajari tentang Caesar Cipher</p>
        </div>
   
        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/kripto/caesar.jpg" height="330" width="330" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Kaisar Romawi Julius Caesar</h3>
            <p class="fst-italic">
              Julius Caesar merupakan seorang kaisar romawi pada abad pertama masehi.
              Dia dianggap sebagai salah satu dari orang pertama didunia yang menggunakan teknik enkripsi.
              Dengan menggunakan metode subtitusi. Lalu Julius Caesar mengganti setiap huruf 'A' dari suratnya 
              dengan huruf 'D", huruf "B" dengan huruf "E", dan seterusnya.
            </p>
            
            <p>
              Karena pada masa itu hanya para jendralnya yang mengetahui tentang algoritma ini, 
              maka Julius Caesar menganggap mengirim pesan menggunakan metode ini membuat pesannya 
              menjadi aman. Metode enkripsi ini disebut sebagai "Caesar Chipper".

              Kriptografi ini dianggap salah satu teknik enkripsi paling sederhana dan paling terkenal.
            </p>

            <div class="row">
              <div class="col-lg-8">
                <strong>Tiap huruf alfabet digeser 3 huruf ke kanan</strong></li>
                <ul>  
                    <i class="bi bi-chevron-right"></i> <strong>Pi:</strong> A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</br>
                    <i class="bi bi-chevron-right"></i> <strong>Ci:</strong> D E F G H I J K L M N O P Q R S T U V W X Y Z A B C</br>
                </ul>
              </div>
            </div>
            
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
          <p>Jika pergeseran huruf sejauh k, maka:
          <center>
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
        </center>
          </p>
        </div>

        <div class="row" data-aos="fade-in">

        
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
          <p>plainteks : CINTA, enkripsikanlah dengan caesar cipher kunci 5 kemudian lakukan deksripsi terhadap hasil dari enkripsi yang telah didapat</p>
          <img src="assets/img/kripto/3.jpg" class="img-fluid" alt="">
        </div>
      
        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Enkripsi</h3>
            <div class="resume-item pb-0">
              <ul>
              <span>Pertama ubahlah huruf menjadi angka dengan pedoman tabel di atas:</span></br>
                <span>C = 2, I = 8, N = 13, T = 19, A = 0. Kemudian hitung dengan rumus enkripsi:</span></br>
                <span>C = E(2) = (2+5) = 7 mod 26 = 7(H)</span></br>
                <span>C = E(8) = (8+5) = 13 mod 26 = 13(N)</span></br>
                <span>C = E(13) = (13+5) = 18 mod 26 = 18(S)</span></br>
                <span>C = E(19) = (19+5) = 24 mod 26 = 24(Y)</span></br>
                <span>C = E(0) = (0+5) = 5 mod 26 = 5(F)</span></br>
                <span>Cipherteks keseluruhan adalah <strong>HNSYF</strong></span></br>
              </ul>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <h3 class="resume-title">Dekripsi</h3>
            <div class="resume-item">
            <span>Untuk mendekripsikan kembali kita membutuhkan kunci yaitu 5 (kunci yang sama dengan saat enkripsi) dan kembali kita 
                ubah bentuk huruf ke dalam angka dengan pedoman tabel di atas:</span></br>
                <span>H : 7, 13 = N, 18 = S, 24 = Y, 5 = F. Kemudian hitung dengan rumus dekripsi:</span></br>
                <span>P=D(7) = (7-5) = 2 mod 26 = 2(C)</span></br>
                <span>P=D(13) = (13-5) = 8 mod 26 = 8(I)</span></br>
                <span>P=D(18) = (18-5) = 13 mod 26 = 13(N)</span></br>
                <span>P=D(24) = (24-5) = 19 mod 26 = 19(T)</span></br>
                <span>P=D(5) = (5-5) = 0 mod 26 = 0(A)</span></br>
                <span>Maka didapatlah plainteks kembali yaitu <strong>CINTA</strong></span></br>
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