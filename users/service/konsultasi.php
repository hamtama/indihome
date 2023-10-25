<?php 
require_once ('../../login/connection.php');
session_start();
$kategori = $_SESSION['kategori'];
$no_internet = $_SESSION['no_internet'];
$sql_check = mysqli_query($mysqli, "SELECT * FROM tb_pengguna WHERE no_internet = '$no_internet'") or die(mysqli_error($query));
if($sql_check->num_rows == 0){
    ?>
     <script type="text/javascript">
         alert('No Tidak Terdaftar Silahkan Masukkan Ulang');
         window.location.href = '../index.php';
     </script>
     <?php
 }



if (strlen($no_internet) == 1){
    $no_internet = $_SESSION['no_internet'];
} else {
    $sql_internet = mysqli_query($mysqli, "SELECT * FROM tb_pengguna WHERE no_internet = '$no_internet'");
    while ($row = mysqli_fetch_array($sql_internet)) {
        $no_internet = $row[0];
    }
}

    

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
        <!-- NProgress -->
        <link href="../../assets/vendors/nprogress/nprogress.css" rel="stylesheet">
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
        <!-- Datatables -->
        <link href="../assets/vendor/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
        <link href="../assets/vendor/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="../assets/vendor/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
        <link href="../assets/vendor/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="../../assets/build/css/custom.min.css" rel="stylesheet">
        <!-- Template Main CSS File -->
        <link href="../assets/css/style.css" rel="stylesheet">
        <!-- Bootstrap -->
        <script src="../assets/vendor/jquery/jquery.min.js"></script>        
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
                        <h1 class="text-light"><a href="../index.php"><span><img src="../../assets/images/wesngonotok3.png" alt=""></span></a></h1>
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
                        <h2>Form Data Gejala</h2>
                        <ol>
                            <li><a href="../index.php">Home</a></li>
                            <li>Inner Page</li>
                        </ol>
                    </div>
                    <div class="card bg " >
                        <div class="card-header" style="background: #009970">
                            <h4 class="col-md-12 text-center  text-white">Gejala Layanan <?=$judul?></h4>
                        </div>
                        <div class="card-body">
                            <?php echo $internet_count = strlen($no_internet); ?>
                            <div class="x_content">
                                <div class="col-md-12">
                                    <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="user-tab" data-toggle="tab" href="#user" role="tab" aria-controls="user" aria-selected="true">Diangnosis User</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="teknisi-tab" data-toggle="tab" href="#teknisi" role="tab" aria-controls="teknisi" aria-selected="false">Diagnosis Teknisi</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="user" role="tabpanel" aria-labelledby="user-tab">
                                            <div class="col-md-12 col-md-12">
                                                <?php 
                                                    require_once('kasus_indihome.php');
                                                    require_once('gejala_indihome.php');
                                                ?>                              
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="teknisi" role="tabpanel" aria-labelledby="teknisi-tab">
                                            <div class="col-sm-12 col-md-12">
                                                <form action="#" method="post">
                                                    <div class="x_content">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="card-box">
                                                                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>No</th>
                                                                                <th>Nama Gejala</th>
                                                                                <th>Pemberian Bobot</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php
                                                                            $no = 0; 
                                                                            $sql_gejala = mysqli_query($mysqli, "SELECT * FROM tb_gejala WHERE id_kategori = '$kategori'  ORDER BY kode_gejala ASC ") or die (mysqli_error($mysqli));
                                                                            while ($row = mysqli_fetch_array($sql_gejala)) {
                                                                                $no = $no+1;
                                                                                ?>
                                                                                <tr>
                                                                                    <td>
                                                                                        <?=$no?>
                                                                                    </td>
                                                                                    <td>
                                                                                        <?=$row['gejala']?>
                                                                                    </td>
                                                                                    <td>
                                                                                        <select  class="custom-select" id="gejala_<?=$no?>" name="gejala<?=$no?>">
                                                                                            <?php
                                                                                            $sql_bobot = mysqli_query($mysqli, "SELECT * FROM tb_bobot WHERE 1 ORDER BY id_bobot ASC") or die (mysqli_error($mysqli));
                                                                                            while ($row_2 = mysqli_fetch_array($sql_bobot)) {
                                                                                                echo '<option value="'.$row_2['nilai_bobot'].'">'.$row_2['status_bobot'].'</option>';
                                                                                            }
                                                                                            ?>
                                                                                        </select>
                                                                                    </td>
                                                                                </tr>
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                        </tbody>
                                                                    </table>
                                                                    <input type="hidden" name="no_internet" value="<?=$no_internet?>">
                                                                    <input type="hidden" name="kategori" value="<?=$kategori?>">
                                                                    <button type="submit" class="btn btn-success diagnosis" id="1">Diagnosa</button>
                                                                    <input type="hidden" id="masuk" name="ninja" value="mbuh">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- /page content -->
                    </div>
                </div>
            </section><!-- End Breadcrumbs -->
            <!-- Proses Eksekusi Diagnosis Gangguan Layanan User -->
            <div class="modal fade bs-example-modal-lg"  id="myModal_user" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="judul" ></h4>
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="fetched-data">
                                <?php 
                                    $kategori = $_POST['kategori'];
                                    if($kategori == 2){
                                        require_once('hitung_user2.php');
                                        require_once('hasil_user2.php');
                                    } elseif ($kategori == 3) {
                                        require_once('hitung_user1.php');
                                        require_once('hasil_user1.php');
                                    } elseif ($kategori == 4) {
                                        require_once('hitung_user3.php');
                                        require_once('hasil_user3.php');
                                    } else {
                                        echo "Data Kosong";
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>            
            <!-- Proses Eksekusi Diagnosis Gangguan Layanan Teknisi -->
            <div class="modal fade bs-example-modal-lg"  id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="judul" ></h4>
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="fetched-data">
                                <?php 
                                    $kategori = $_POST['kategori'];
                                    if($kategori == 2){
                                        require_once('hitung_2.php');
                                        require_once('hasil_2.php');
                                    } elseif ($kategori == 3) {
                                        require_once('hitung_1.php');
                                        require_once('hasil_1.php');
                                    } elseif ($kategori == 4) {
                                        require_once('hitung_3.php');
                                        require_once('hasil_3.php');
                                    } else {
                                        echo "Data Kosong";
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </main><!-- End #main -->
        <!-- ======= Footer ======= -->
        <footer class="ml-0" id="footer">
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>Bethany</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </footer><!-- End Footer -->
        <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
        <!-- Vendor JS Files -->
        
        <!-- <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
        <script src="../../assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
        <script src="../assets/vendor/php-email-form/validate.js"></script>
        <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
        <script src="../assets/vendor/counterup/counterup.min.js"></script>
        <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="../assets/vendor/venobox/venobox.min.js"></script>
        <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="../assets/vendor/aos/aos.js"></script>
        <!-- Template Main JS File -->
        <!-- Datatables -->
        <script src="../assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="../assets/vendor/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <script src="../assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="../assets/vendor/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
        <script src="../assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
        <script src="../assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="../assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="../assets/vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
        <script src="../assets/vendor/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="../assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="../assets/vendor/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
        <!-- Custom Theme Scripts -->
        <script src="../../assets/build/js/custom.min.js"></script>
        <script src="../assets/js/main.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
        
            var kasus = document.getElementById('kasus_hasil').value;
            if (kasus == 0 ){
                $('.gejala').hide('slow');
            } else {
                $('.kasus').hide('slow');
                $('.gejala').show('slow');  
                document.getElementById('judul').innerHTML = 'Pilih Gejala Indihome User';  
            }   
    
        }); 

    </script>
        <?php
        if(isset($resdiagnosa[0]['ninja'])){
            echo "<script type='text/javascript'>
                    $(document).ready(function(){
                        $('#myModal').modal('show');
                    });
                  </script>";
        }
        if(isset($resdiagnosa[0]['kera'])){
            echo "<script type='text/javascript'>
                    $(document).ready(function(){
                        $('#myModal_user').modal('show');
                    });
                  </script>";
        }
        ?>        
        

    </body>
</html>

                