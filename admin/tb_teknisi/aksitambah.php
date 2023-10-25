<?php  
require_once ('../../login/connection.php');
$id_kantor = $_POST['id_kantor'];
$kode_teknisi = $_POST['kode_teknisi'];
$nama_teknisi = $_POST['nama_teknisi'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$job_desk  = $_POST['job_desk'];
 


if ($_SERVER["REQUEST_METHOD"] == "POST"){
	
		$sql = $mysqli->query("INSERT INTO tb_teknisi SET 
			id_kantor 	='$id_kantor',
			kode_teknisi 	='$kode_teknisi',
			nama_teknisi	='$nama_teknisi',
			alamat_teknisi 	='$alamat',
			no_telp_teknisi 	='$no_telp',
			job_disk = '$job_desk'");
		if ($sql) {
			?>
			<script language="javascript">
				alert('Input Data Teknisi Berhasil');
				document.location='data.php';
			</script>
			<?php
		} else {
			echo "Input Silahkan Ulangi !";
		}
	
}
?>