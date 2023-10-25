<?php  
require_once ('../../login/connection.php');
$id = $_POST['id'];
$id_provinsi = $_POST['id_provinsi'];
$id_kabupaten = $_POST['id_kabupaten'];
$kode_kecamatan = $_POST['kode_kecamatan'];
$nama_kecamatan = $_POST['nama_kecamatan'];
$cek = mysqli_num_rows($mysqli->query("SELECT nama_kecamatan,kode_kecamatan FROM tb_kecamatan WHERE nama_kecamatan ='$nama_kecamatan' AND kode_kecamatan='$kode_kecamatan'"));

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	if($cek > 1 ){
	?>	
		<script language="javascript">
			alert('Kode Kecamatan Sudah Ada. Silahkan Ganti');
			document.location='data.php';
		</script>
	<?php
	} else{
		$sql = $mysqli->query("UPDATE tb_kecamatan SET 
			id_provinsi 	='$id_provinsi',
			id_kabupaten	='$id_kabupaten',
			kode_kecamatan 	='$kode_kecamatan',
			nama_kecamatan 	='$nama_kecamatan' WHERE id_kecamatan = '$id'");
		if ($sql) {
			?>
			<script language="javascript">
				alert('Update Data Kecamatan Berhasil');
				document.location='data.php';
			</script>
			<?php
		} else {
			echo "Input Silahkan Ulangi !".mysqli_error($sql);
		}
	}
}
?>