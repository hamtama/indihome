<?php
require_once ('../login/connection.php');
require_once ('call.php');


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Sistem Pakar</title>
        <meta content="" name="descriptison">
        <meta content="" name="keywords">
        <!-- Favicons -->
        <link href="../assets/images/wesngonotok.jpg" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        
        <!-- Custom Theme Style -->
        <!-- <link href="../assets/build/css/custom.min.css" rel="stylesheet"> -->
        
        <!-- Lunar CSS -->
        <link rel="stylesheet" href="assets/css/lunar.css">
        <link rel="stylesheet" href="assets/css/demo.css">
        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
        <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">
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
                        <h1 class="text-light"><a href="index.html"><span><img src="../assets/images/wesngonotok3.png" alt=""></span></a></h1>
                        <!-- Uncomment below if you prefer to use an image logo -->
                        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
                    </div>
                    <?php  
                    require_once ('navbar.php');
                    ?>
                </div><!-- End Header Container -->
            </div>
        </header><!-- End Header -->
        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center">
            <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
                <h1><?=$judul?></h1>
                <h2><?=$quote?></h2>
                <a href="#demoModal" data-target="#demoModal" class="btn-get-started " data-toggle="modal" >Konsultasi</a>
            </div>
        </section>
        <!-- End Hero -->
        <!-- Modal Data Diri -->
        <div class="modal fade rounded demoModal" id="demoModal"  tabindex="-1" role="dialog" aria-labelledby="demoModal" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered " role="document">
                <div class="modal-content">
                    <button type="button" class="close light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="">
                        <div class="bg-img m-h-30 rounded" style="background-image: url('assets/img/modal.jpg')">
                        </div>
                        <div class="pull-up-lg" >
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-10 mx-auto pb-5">
                                        <div class="bg-white rounded shadow-lg px-5 py-5">
                                            <h2 class="pt-sm-3  text-center">ISI DATA DIRI</h2>
                                            <p class="text-muted" align="center">
                                                Selamat menggunakan Aplikasi Kami. Semoga bermanfaat
                                            </p>
                                            <form name="form" method="post" id="submit" action="service/action.php">
                                                <div class="form-group field item row">
                                                    <label for="no_internet">No Internet</label>
                                                    <input type="text" id="no_internet" name="no_internet" class="form-control" required="required"  data-validate-length="12"  >
                                                    <!-- <select class="form-control" name="no_internet" id="no_internet" required>
                                                        <option value="">-- No Internet --</option>
                                                        <?php
                                                        // $sql_kategori = mysqli_query($mysqli, "SELECT * FROM tb_pengguna WHERE 1 ORDER BY id_pengguna ASC") or die (mysqli_error($mysqli));
                                                        // while ($row = mysqli_fetch_array($sql_kategori)) {
                                                        // echo '<option value="'.$row['id_pengguna'].'">'.$row['no_internet'].'</option>';
                                                        // }
                                                        ?>
                                                    </select> -->
                                                </div>
                                                <div class="form-group field item row">
                                                    <label for="kategori">Kategori</label>
                                                    <select class="form-control" name="kategori" id="kategori" required>
                                                        <option value="">-- Pilih Kategori --</option>
                                                        <?php
                                                        $sql_kategori = mysqli_query($mysqli, "SELECT * FROM tb_kategori WHERE 1 ORDER BY id_kategori ASC") or die (mysqli_error($mysqli));
                                                        while ($row = mysqli_fetch_array($sql_kategori)) {
                                                            echo '<option value="'.$row['id_kategori'].'">'.$row['kategori'].'</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="field item row">
                                                    <input type="button" class="btn btn-success btn-block btn-cta submit"  name="mulai" value="Mulai">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Ends -->
        <main id="main">
            <!-- ======= Clients Section ======= -->
            <section id="clients" class="clients">
                <div class="container">
                    <div class="row">
                        <?php  
                        for ($i=1; $i <= 6 ; $i++) { 
                            ?>
                                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
                                    <img src="../admin/tb_judul/logo/<?=${'img'.$i} ?>" class="img-fluid" alt="">
                                </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </section><!-- End Clients Section -->
            <!-- ======= About Section ======= -->
            <section id="tentang" class="about">
                <div class="container">
                    <div class="row content">
                        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                            <h2>Tentang Aplikasi </h2>
                            <h3>Implementasi Metode Certainty Factor dan Case Based Reasoning pada Sistem Diagnosis Gangguan Layanan Indihome Pada PT.Telkom Yogyakarta Berbasis Web</h3>
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
                            <p>
                                Sistem Diagnosis Gangguan Layanan Indihome ini mampu mendiagnosis kerusakan yang sering terjadi pada layanan Indihome Seperti Telepon, Indihome dan UseeTV. pengguna hanya perlu menginputkan No Internet dan Kategori Kerusakan yang dialami, setelah itu pengguna dapat langsung memilih gejala yang dialami kemudian sistem akan memberikan solusi berdasarkan gejala yang dialami.
                            </p>
                            <ul>
                                <li><i class="ri-check-double-line"></i> Mampu mendiagnosa gangguan kerusakan pada layanan Indihome seperti Indihome, Telepon dan UseeTV</li>
                                <li><i class="ri-check-double-line"></i> memberikan solusi untuk mengatasi permasalahn yang ada</li>
                            </ul>
                            <p class="font-italic">
                                Deskripsi singkat dari sistem diagnosis gangguan layanan Indihome semoga sistem dapat bermanfaat bagi para pengguna layanan Indihome.
                            </p>
                        </div>
                    </div>
                </div>
            </section><!-- End About Section -->
            <!-- ======= Counts Section ======= -->
            <section id="counts" class="counts">
                <div class="container">
                    <div class="row counters">
                        <div class="col-lg-3 col-6 text-center">
                            <span data-toggle="counter-up">232</span>
                            <p>Clients</p>
                        </div>
                        <div class="col-lg-3 col-6 text-center">
                            <span data-toggle="counter-up">521</span>
                            <p>Projects</p>
                        </div>
                        <div class="col-lg-3 col-6 text-center">
                            <span data-toggle="counter-up">1,463</span>
                            <p>Hours Of Support</p>
                        </div>
                        <div class="col-lg-3 col-6 text-center">
                            <span data-toggle="counter-up">15</span>
                            <p>Hard Workers</p>
                        </div>
                    </div>
                </div>
            </section><!-- End Counts Section -->
            <!-- ======= Why Us Section ======= -->
            <section id="deskripsi" class="why-us">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-right">
                            <div class="content">
                                <h3>INTERNET</h3>
                                <p>
                                     sistem jaringan komputer yang saling terhubung secara global dengan menggunakan paket protokol internet (TCP/IP) untuk menghubungkan perangkat di seluruh dunia.
                                     ni adalah jaringan dari jaringan yang terdiri dari jaringan privat, publik, akademik, bisnis, dan pemerintah lokal ke lingkup global, dihubungkan oleh beragam teknologi elektronik, nirkabel, dan jaringan optik.
                                </p>
                                <div class="text-center">
                                    <a href="inner-page.php" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 d-flex align-items-stretch">
                            <div class="icon-boxes d-flex flex-column justify-content-center">
                                <div class="row">
                                    <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                                        <div class="icon-box mt-4 mt-xl-0">
                                            <i class='bx bxs-institution'></i>
                                            <h4>LAN</h4>
                                            <p><b>Local Area Network</b> 
                                            <br>Yang memungkinkan jaringan terhubung antara satu ruang ke ruang yang lain</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                                        <div class="icon-box mt-4 mt-xl-0">
                                            <i class="bx bx-buildings"></i>
                                            <h4>MAN</h4>
                                            <p><b>Metropolitan Area Network</b> 
                                            <br>Yang Memungkinkan Jaringan terhubung dari gedung satu ke gedung lain</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                                        <div class="icon-box mt-4 mt-xl-0">
                                            <i class="bx bx-globe"></i>
                                            <h4>WAN</h4>
                                            <p><b>Wide Area Network</b> 
                                            <br>Yang memungkinkan jaringan terhubung antara benua satu ke benua lain</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End .content-->
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Why Us Section -->
            <!-- ======= Cta Section ======= -->
            <section id="cta" class="cta">
                <div class="container">
                    <div class="text-center" data-aos="zoom-in">
                        <h3>Call To Action</h3>
                        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a class="cta-btn" href="#">Call To Action</a>
                    </div>
                </div>
            </section><!-- End Cta Section -->
            <!-- ======= Services Section ======= -->
            <section id="services" class="services section-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="section-title" data-aos="fade-right">
                                <h2>Layanan</h2>
                                <p>Sistem Diagnosis Gangguan Layanan Indihome dapat mengatasi permasalahan pada layanan Indihome seperti Indihome, Telepon dan UseeTV</p>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-md-6 d-flex align-items-stretch">
                                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                                        <h4><a href="">Konsultasi Gangguan Layanan Indihome</a></h4>
                                        <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                                        <div class="icon"><i class="bx bx-file"></i></div>
                                        <h4><a href="">Konsultasi Gangguan Layanan Telepon</a></h4>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex align-items-stretch mt-4">
                                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                                        <h4><a href="">Konsultasi Gangguan Layanan UseeTV</a></h4>
                                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex align-items-stretch mt-4">
                                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
                                        <div class="icon"><i class="bx bx-world"></i></div>
                                        <h4><a href="">Memeberikan Solusi Dari Permasalahan Para Pengguna Layanan</a></h4>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End Services Section -->
            
            
            <!-- ======= Team Section ======= -->
            <section id="team" class="team">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="section-title" data-aos="fade-right">
                                <h2>Team</h2>
                                <p align="center">
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Leader don't force people to follow. They invite them on a journey.
                                </p>
                                <br>
                                <p align="center">- Charles S.Laurer -</p>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="member" data-aos="zoom-in" data-aos-delay="100">
                                        <div class="pic"><img src="assets/img/team/yumarlin.jpg" class="img-fluid" alt=""></div>
                                        <div class="member-info">
                                            <h4>Yumarlin MZ S.Kom, M.Pd, M.Kom</h4>
                                            <span>Dosen Pembimbing</span>
                                            <p>Dosen Informatika Fakultas Teknik Universitas Janabadra</p>
                                            <div class="social">
                                                <a href=""><i class="ri-twitter-fill"></i></a>
                                                <a href=""><i class="ri-facebook-fill"></i></a>
                                                <a href=""><i class="ri-instagram-fill"></i></a>
                                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-4 mt-lg-0">
                                    <div class="member" data-aos="zoom-in" data-aos-delay="200">
                                        <div class="pic"><img src="assets/img/team/teguh2.jpg" class="img-fluid" alt=""></div>
                                        <div class="member-info">
                                            <h4>Teguh Sadewo Pangestu </h4>
                                            <br>
                                            <span>Programmer</span>
                                            <p>Mahasiswa Informatika Fakultas Teknik Universitas Janabadra</p>
                                            <div class="social">
                                                <a href=""><i class="ri-twitter-fill"></i></a>
                                                <a href=""><i class="ri-facebook-fill"></i></a>
                                                <a href=""><i class="ri-instagram-fill"></i></a>
                                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End Team Section -->
            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4" data-aos="fade-right">
                            <div class="section-title">
                                <h2>Contact</h2>
                                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                            </div>
                        </div>
                        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                            <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
                            <div class="info mt-4">
                                <i class="icofont-google-map"></i>
                                <h4>Location:</h4>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 mt-4">
                                    <div class="info">
                                        <i class="icofont-envelope"></i>
                                        <h4>Email:</h4>
                                        <p>info@example.com</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="info w-100 mt-4">
                                        <i class="icofont-phone"></i>
                                        <h4>Call:</h4>
                                        <p>+1 5589 55488 55s</p>
                                    </div>
                                </div>
                            </div>
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
                                <div class="form-row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                        <div class="validate"></div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                        <div class="validate"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                    <div class="validate"></div>
                                </div>
                                <div class="mb-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit">Send Message</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </section><!-- End Contact Section -->
        </main><!-- End #main -->
        <!-- ======= Footer ======= -->
        <footer id="footer">
            
            <div class="container d-md-flex py-4">
                <div class="mr-md-auto text-center text-md-left">
                    <div class="copyright">
                        &copy; Copyright <strong><span>Bethany</span></strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/ -->
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
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
        <script src="assets/vendor/counterup/counterup.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/venobox/venobox.min.js"></script>
        <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>

        <!-- Form Validator -->
        <script src="../assets/vendors/validator/multifield.js"></script>
        <script src="../assets/vendors/validator/validator.js"></script>
        
                
        <script type="text/javascript">
            // EDIT DATA

            
            $(document).ready(function(){
                $('.submit').click( function (){
                    var nama = document.forms["form"]["no_internet"].value;
                    var kategori = document.forms["form"]["kategori"].value;
                    if (kategori == ''){
                        alert('Data Tidak dapat Tampil, Silahkan Isi Kategori');
                    } else if (nama == ''){
                        alert('Silahkan Isi No Internet Anda');
                    } else if (!/^[0-9]+$/.test(nama)){
                        alert('Data yang diinputkan harus berupa nomor');
                        document.getElementById('no_internet').focus();
                    } else {
                    //Menggunakan fungsi Ajax untuk Pengambilan Data
                        $('#submit').submit();
                    }
                });
            });
            
            
            
            
            // initialize a validator instance from the "FormValidator" constructor.
            // A "<form>" element is optionally passed as an argument, but is not a must
            var validator = new FormValidator({ "events": ['blur', 'input', 'change'] }, document.forms[0]);
            // on form "submit" event
            document.forms[0].onsubmit = function (e) {
                var submit = true,
                validatorResult = validator.checkAll(this);
                console.log(validatorResult);
                return !!validatorResult.valid;
            };
            // on form "reset" event
            document.forms[0].onreset = function (e) {
                validator.reset();
            };
            // stuff related ONLY for this demo page:
            $('.toggleValidationTooltips').change(function () {
                validator.settings.alerts = !this.checked;
                if (this.checked)
                    $('form .alert').remove();
                }).prop('checked', false);
        </script>
    </body>
</html>