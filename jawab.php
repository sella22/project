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
        </div>
      </div> -->

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

    
<body>
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Nilai Ujian Anda</h2>
    <table border="0">
        <tbody>
        <?php
    include "koneksi.php";
    if(isset($_POST['submit'])){
        if(empty($_POST['pilihan'])){
        ?>
            <script language="JavaScript">
                alert('Oops! Serius. Anda tidak mengerjakan soal apapun ...');
                document.location='./';
            </script>
        <?php
        }
        
        $pilihan    =$_POST["pilihan"];
        $id_soal    =$_POST["id"];
        $jumlah        =$_POST["jumlah"];
        
        $score    =0;
        $benar    =0;
        $salah    =0;
        $kosong    =0;

        for($i=0;$i<$jumlah;$i++){
            $nomor    =$id_soal[$i];
            
            // jika peserta tidak memilih jawaban
            if(empty($pilihan[$nomor])){
                $kosong++;
            }
            // jika memilih
            else {
                $jawaban    =$pilihan[$nomor];

                // cocokan kunci jawaban dengan database
                $query    =mysqli_query($conn, "SELECT * FROM tbl_soal WHERE id_soal='$nomor' AND kunci='$jawaban'");
                $cek    =mysqli_num_rows($query);
                
                // jika jawaban benar (cocok dengan database)
                if($cek){
                    $benar++;
                }
                // jika jawaban salah (tidak cocok dengan database)
                else {
                    $salah++;
                }
            }
            /*
                ----------
                Nilai 100
                ----------
                Hasil = 100 / jumlah soal * Jawaban Benar
            */
            // script php membuat soal pilihan ganda
            // hitung skor
            $hitung =mysqli_query($conn, "SELECT * FROM tbl_soal WHERE aktif='Y'");
            $jumlah_soal    =mysqli_num_rows($hitung);
            $score    =100 / $jumlah_soal * $benar;
            $hasil    =number_format($score,2);
        }
    }

    // Tampilkan Hasil Ujian Soal Pilihan Ganda
    echo"
    <table border='0'>
        <tbody>
            <tr>
                <td width='80'><u>Benar ✔</u></td>
                <td width='80'><u>Salah ✕</u></td>
                <td width='140'><u>Tidak Terjawab !</u></td>
                <td width='100'><u>Skor Akhir #</u></td>
            </tr>
            <tr>
                <td align='center'>$benar</td>
                <td align='center'>$salah</td>
                <td align='center'>$kosong</td>
                <td align='right'><b>$hasil</b></td>
            </tr>
        </tbody>
    </table>
    ";
?>
       
        <!-- <li><a  class="dropdown-item">
                <i class="nav-icon fas fa-history">
                </i> Cek Jawaban
              </a>
          </li> -->
        </tbody>
    </table>
    
    </div>
      </div>
    </section><!-- End Contact Section --> <td>
            <a href="kunci.php"><i class="fa fa-pencil-alt"></i>Pembahasan</a>
        </td>
</body>

</html>
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