<?php 
@session_start();
if(@$_SESSION['Admin']){
// Check if user is logged in using the session variable
	
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "Kamu Harus Login Terlebih Dahulu Sebelum Masuk Ke Halaman INi !!";
  header("location:../../login/error.php");    
}
else {
    // Makes it easier to read
    $nama = $_SESSION['nama'];
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
	$level = $_SESSION['level'];
}
if (!$active){
				echo "
				<script>window.location=('../../login/profile.php');</script>";
			}
			if(!@$_SESSION['Admin']){
				?>
					<script>
						alert("Anda tidak dapat masuk ke halaman ini")
					</script>
				<?php
				session_start();
				session_unset();
				session_destroy();
				;
			}
?>
<!DOCTYPE html>
<html lang="id">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!-- Meta, title, CSS, favicons, etc. -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="../../assets/images/wesngonotok.jpg" type="../image/ico" />
		<title>Sistem Pakar</title>
		<!-- Bootstrap -->
		<!-- <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"> -->
		<link href="../../assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- Font Awesome -->
		<link href="../../assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<!-- NProgress -->
    	<link href="../../assets/vendors/nprogress/nprogress.css" rel="stylesheet">
		<!-- iCheck -->
   	 	<link href="../../assets/vendors/bootstrap-icheck/icheck-bootstrap.min.css" rel="stylesheet">
   	 	<link href="../../assets/vendors/bootstrap-icheck/icheck-bootstrap.css" rel="stylesheet">
		<!-- Datatables -->
		<link href="../../assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
	    <link href="../../assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
	    <link href="../../assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
	    <link href="../../assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
	    <!-- Custom Theme Style -->
		<link href="../../assets/build/css/custom.min.css" rel="stylesheet">
		<!-- Data Toggle -->
		<link href="../../assets/vendors/bootstrap-toggle/bootstrap-toggle.css" rel="stylesheet">
		<!-- bootstrap-daterangepicker -->
    	<link href="../../assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    	<!-- bootstrap-datetimepicker -->
    	<link href="../../assets/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
		<!-- date dropdown -->
		<!-- <link rel="stylesheet" href="../../assets/vendors/date-dropdown/css/styles.css"> -->
		
    	<!-- jQuery -->
		<script src="../../assets/vendors/jquery/dist/jquery.min.js"></script>
		
	
	</head>
	<body class="nav-md">
		<div class="container body">
			<div class="main_container">
				<div class="col-md-3 left_col">
					<div class="left_col scroll-view">
						
						<div class="clearfix"></div>
						<!-- menu profile quick info -->
						<div class="profile clearfix">
							<div class="profile_pic">
								<img src="../../assets/images/wesngonotok3.png" alt="..." class="img-circle profile_img">
							</div>
							<div class="profile_info">
								<span>Wesngonotok</span>
								<h2><?php echo $_SESSION['username'] ?></h2>
							</div>
						</div>
						<!-- /menu profile quick info -->
						<br />
						<?php 
} else {
	header("location:../../login/index.php");
}
						 ?>