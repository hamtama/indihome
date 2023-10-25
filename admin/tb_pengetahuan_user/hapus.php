<?php  
include '../../login/connection.php';
if (isset($_GET['delete_id'])) {
	$sql = $mysqli->query("DELETE FROM tb_pengetahuan_user WHERE id_pengetahuan_user = ".$_GET['delete_id']);
	if ($sql){
		echo "<script>alert('Data Berhasil Dihapus'); location.href='data.php';</script>";
	} else {
		echo "<script>alert ('Gagal Hapus Data, Coba Lagi !!!');</script>". $mysqli->error;
	}
}
?>