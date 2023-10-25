<?php  
include '../../login/connection.php';
if (isset($_GET['delete_id']) && isset($_GET['t'])) {
	$id =$_GET['delete_id'];
	$table = $_GET['t'];
	if ($table == 'tb_menu'){
		$sql = $mysqli->query("DELETE FROM $table WHERE id_menu = '$id'");
	} else {
		$sql = $mysqli->query("DELETE FROM $table WHERE id_submenu = '$id'");
	}	
	if ($sql){
		echo "<script>alert('Data Berhasil Dihapus'); location.href='data.php';</script>";
	} else {
		echo "<script>alert ('Gagal Hapus Data, Coba Lagi !!!');</script>". $mysqli->error($sql);
	}
}
?>