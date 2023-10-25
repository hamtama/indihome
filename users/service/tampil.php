<?php 
require_once ('../../login/connection.php');

$kategori = $_POST['kategori'];
$sql_kategori = mysqli_query($mysqli, "SELECT * FROM tb_kategori WHERE id_kategori = '$kategori'") or die (mysqli_error($mysqli));
while ($row = mysqli_fetch_array($sql_kategori)) {
$judul = $row['kategori'];
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Form Data Gejala</title>
        <meta content="" name="descriptison">
        <meta content="" name="keywords">
        <!-- Favicons -->
        <link href="../assets/images/wesngonotok.jpg" rel="icon">
        <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <!-- Vendor CSS Files -->
        <link href="../../assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
        <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
        <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
        <!-- Custom Theme Style -->
        <!-- <link href="../../assets/build/css/custom.min.css" rel="stylesheet"> -->
        <!-- Template Main CSS File -->
        <link href="../assets/css/style.css" rel="stylesheet">
        <!-- =======================================================
        * Template Name: Bethany - v2.1.0
        * Template URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
    </head>
    <body>
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top d-flex align-items-center">
            <div class="container">
                <div class="header-container d-flex align-items-center">
                    <div class="logo mr-auto">
                        <h1 class="text-light"><a href="index.php"><span><img src="../../assets/images/wesngonotok3.png" alt=""></span></a></h1>
                        <!-- Uncomment below if you prefer to use an image logo -->
                        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
                    </div>
                    <nav class="nav-menu d-none d-lg-block">
                        <ul>
                            <li class="active"><a href="../index.php#header">Home</a></li>
                            <li><a href="../index.php#about">About</a></li>
                            <li><a href="../index.php#services">Services</a></li>
                            <li><a href="../index.php#portfolio">Portfolio</a></li>
                            <li><a href="../index.php#team">Team</a></li>
                            <li><a href="../index.php#contact">Contact</a></li>
                            <li class="get-started"><a href="../panduan.php">Panduan</a></li>
                        </ul>
                        </nav><!-- .nav-menu -->
                        </div><!-- End Header Container -->
                    </div>
                    </header><!-- End Header -->
                    <main id="main">
                        <!-- ======= Breadcrumbs ======= -->
                        <section class="breadcrumbs">
                            <div class="container">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h2>Form Report Layanan</h2>
                                    <ol>
                                        <li><a href="../index.php">Home</a></li>
                                        <li>Inner Page</li>
                                    </ol>
                                </div>
                                <?php  
                                		$sql_rekap = mysqli_query($mysqli, "SELECT * FROM tb_rekap 
                                											LEFT JOIN tb_pengguna ON tb_rekap.id_pengguna = tb_pengguna.id_pengguna		
                                											LEFT JOIN tb_kasus ON tb_rekap.id_kasus = tb_kasus.id_kasus
                                											LEFT JOIN tb_kategori ON tb_rekap.id_kategori = tb_kategori.id_kategori
                                											LEFT JOIN tb_teknisi ON tb_rekap.id_teknisi = tb_teknisi.id_teknisi
                                			WHERE 1 ORDER BY id_rekap DESC LIMIT 1") or die (mysqli_error($mysqli));
											while ($row_p = mysqli_fetch_array($sql_rekap)) {
												$kasus = $row_p['kasus'];
												$kategori = $row_p['kategori'];
												$laporan = $row_p['laporan_kerusakan'];
												$teknisi = $row_p['nama_teknisi'];
												$no_telp_teknisi = $row_p['no_telp_teknisi'];
												$nama_pengguna = $row_p['nama_pengguna'];
											}
                                ?>
                                <div class="card bg " >
                        			<div class="card-header" style="background: #009970">
                            			<h4 class="col-md-12 text-center  text-white">Report Layanan</h4>
                        			</div>
                        				<div class="card-body">
              								<div class="alert alert-primary" role="alert">Terima Kasih <?=$nama_pengguna?> telah menggunakan layanan kami laporan kerusakan anda telah kami proses. Untuk informasi lebih lanjut dapat menghubungi kontak yang telah tertera pada tabel di bawah ini.
              								</div>
              								<table class="table table-hover">
              									<thead>
              										<tr>
              											<th scope="col">Kolom</th>
              											<th scope="col">Data</th>
              										</tr>
              									</thead>
              									<tbody>
              										<tr>
              											<td>Kasus</td>
              											<td><?=$kasus?></td>
              										</tr>
              										<tr>
              											<td>Kategori Kerusakan</td>
              											<td><?=$kategori?></td>
              										</tr>
              										<tr>
              											<td>Laporan Kerusakan</td>
              											<td><?=$laporan?></td>
              										</tr>
              										<tr>
              											<td>Teknisi</td>
              											<td><?=$teknisi?></td>
              										</tr>
              										<tr>
              											<td>No Telp Teknisi</td>
              											<td><?=$no_telp_teknisi?></td>
              										</tr>
              									</tbody>
              								</table>
                        				</div>
                            	<!-- /page content -->
                            	</div>
                        </section><!-- End Breadcrumbs -->
                        
                    
                    </main><!-- End #main -->
                    <!-- ======= Footer ======= -->
                    <footer id="footer">
                        <div class="container">
                            <div class="">
                                <div class="copyright">
                                    &copy; Copyright <strong><span>Bethany</span></strong>. All Rights Reserved
                                </div>
                                <div class="credits">
                                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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
                        <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
                        <!-- Vendor JS Files -->
                        <script src="../assets/vendor/jquery/jquery.min.js"></script>
                        <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                        <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
                        <script src="../assets/vendor/php-email-form/validate.js"></script>
                        <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
                        <script src="../assets/vendor/counterup/counterup.min.js"></script>
                        <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
                        <script src="../assets/vendor/venobox/venobox.min.js"></script>
                        <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
                        <script src="../assets/vendor/aos/aos.js"></script>
                        <!-- Template Main JS File -->
                        <script src="../assets/js/main.js"></script>
                        <?php
                        if(isset($resdiagnosa[0]['ninja'])){
                            echo "<script type='text/javascript'>
                                    $(document).ready(function(){
                                        $('#myModal').modal('show');
                                    });
                                  </script>";
                        }
                    ?>
                    </body>
                </html>
                