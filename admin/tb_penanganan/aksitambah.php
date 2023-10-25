<?php  
require_once ('../../login/connection.php');
$id_kantor = $_POST['id_kantor'];
$id_provinsi = $_POST['id_provinsi'];
$id_kabupaten = $_POST['id_kabupaten'];
$id_kecamatan = $_POST['id_kecamatan'];
$cek = mysqli_num_rows($mysqli->query("SELECT * FROM tb_kelurahan 
	WHERE id_kantor ='$id_kantor' 
	AND id_provinsi ='$id_provinsi' 
	AND id_kabupaten ='$id_kabupaten' 
	AND id_kecamatan ='$id_kecamatan' "));


if ($_SERVER["REQUEST_METHOD"] == "POST"){
	if($cek > 1 ){
	?>	
		<script language="javascript">
			alert('Kode Kelurahan Sudah Ada. Silahkan Ganti');
			document.location='data.php';
		</script>
	<?php
	} else{
		$sql = $mysqli->query("INSERT INTO tb_wil_penanganan SET
			id_kantor 		='$id_kantor',
			id_provinsi 	='$id_provinsi',
			id_kabupaten 	='$id_kabupaten',
			id_kecamatan	='$id_kecamatan'");
		if ($sql) {
			?>
			<script language="javascript">
				alert('Input Data Wilayah Penanganan Berhasil');
				document.location='data.php';
			</script>
			<?php
		} else {
			echo "Input Silahkan Ulangi !";
		}
	}
}
?>