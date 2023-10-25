<?php  
require_once ('../../login/connection.php');
$id = $_POST['id'];
$kode_provinsi = $_POST['id_provinsi'];
$kode_kabupaten = $_POST['kode_kabupaten'];
$nama_kabupaten = $_POST['nama_kabupaten'];
$cek = mysqli_num_rows($mysqli->query("SELECT kode_kabupaten FROM tb_kabupaten WHERE kode_kabupaten ='$kode_kabupaten'"));
$cek2 = mysqli_num_rows($mysqli->query("SELECT nama_kabupaten FROM tb_kabupaten WHERE nama_kabupaten ='$nama_kabupaten'"));

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	if($cek > 1 ){
	?>	
		<script language="javascript">
			alert('Kode Kabupaten Sudah Ada. Silahkan Ganti');
			document.location='data.php';
		</script>
	<?php
	} elseif ($cek2 > 1 ){  
	?>	
		<script language="javascript">
			alert('Nama Kabupaten Sudah Ada. Silahkan Ganti');
			document.location='data.php';
		</script>
	<?php
	} else{
		$sql = $mysqli->query("UPDATE tb_kabupaten SET 
			id_provinsi = '$kode_provinsi',
			kode_kabupaten ='$kode_kabupaten',
			nama_kabupaten ='$nama_kabupaten' WHERE id_kabupaten = '$id'");
		if ($sql) {
			?>
			<script language="javascript">
				alert('Update Data Kabupaten Berhasil');
				document.location='data.php';
			</script>
			<?php
		} else {
			echo "Input Silahkan Ulangi !";
		}
	}
}
?>