<?php  
require_once ('../../login/connection.php');
$id = $_POST['id'];
$id_provinsi = $_POST['id_provinsi'];
$id_kabupaten = $_POST['id_kabupaten'];
$id_kecamatan = $_POST['id_kecamatan'];
$kode_kelurahan = $_POST['kode_kelurahan'];
$nama_kelurahan = $_POST['nama_kelurahan'];
$cek = mysqli_num_rows($mysqli->query("SELECT kode_kelurahan,nama_kelurahan FROM tb_kelurahan WHERE kode_kelurahan ='$kode_kelurahan' AND nama_kelurahan ='$nama_kelurahan' "));

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	if($cek > 1 ){
	?>	
		<script language="javascript">
			alert('Kode Kelurahan Sudah Ada. Silahkan Ganti');
			document.location='data.php';
		</script>
	<?php
	} else{
		$sql = $mysqli->query("UPDATE tb_kelurahan SET 
			id_provinsi 	='$id_provinsi',
			id_kabupaten	='$id_kabupaten',
			id_kecamatan 	='$id_kecamatan',
			kode_kelurahan 	='$kode_kelurahan',
			nama_kelurahan 	='$nama_kelurahan' WHERE id_kelurahan = '$id'");
		if ($sql) {
			?>
			<script language="javascript">
				alert('Update Data Kelurahan Berhasil');
				document.location='data.php';
			</script>
			<?php
		} else {
			echo "Input Silahkan Ulangi !";
		}
	}
}
?>