<?php  
session_start();
$kategori = $_POST['kategori'];
$no_internet = $_POST['no_internet'];


if($kategori !== null && $no_internet !== null){

	$_SESSION['kategori'] = $kategori;
	$_SESSION['no_internet'] = $no_internet;
	header("location:konsultasi.php");
} else {
	header("location:../index.php");
}
?>