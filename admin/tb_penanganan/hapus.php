<?php  
include '../../login/connection.php';
if (isset($_GET['delete_id'])) {
	$sql = $mysqli->query("DELETE FROM tb_wil_penanganan WHERE id_wil_penanganan = ".$_GET['delete_id']);
	if ($sql){
		echo "<script>alert('Data Wilayah Penanganan Berhasil Dihapus'); location.href='data.php';</script>";
	} else {
		echo "<script>alert ('Gagal Hapus Data, Coba Lagi !!!');</script>". $mysqli->error;
	}
}
?>