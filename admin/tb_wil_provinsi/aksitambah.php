<?php  
require_once ('../../login/connection.php');
$kode_provinsi = $_POST['kode_provinsi'];
$nama_provinsi = $_POST['nama_provinsi'];
$cek = mysqli_num_rows($mysqli->query("SELECT kode_provinsi FROM tb_provinsi WHERE kode_provinsi ='$kode_provinsi'"));
$cek2 = mysqli_num_rows($mysqli->query("SELECT nama_provinsi FROM tb_provinsi WHERE nama_provinsi ='$nama_provinsi'"));

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	if($cek > 1 ){
	?>	
		<script language="javascript">
			alert('Kode Provinsi Sudah Ada. Silahkan Ganti');
			document.location='data.php';
		</script>
	<?php
	} elseif ($cek2 > 1 ){  
	?>	
		<script language="javascript">
			alert('Nama Provinsi Sudah Ada. Silahkan Ganti');
			document.location='data.php';
		</script>
	<?php
	} else{
		$sql = $mysqli->query("INSERT INTO tb_provinsi SET 
			kode_provinsi ='$kode_provinsi',
			nama_provinsi ='$nama_provinsi'");
		if ($sql) {
			?>
			<script language="javascript">
				alert('Input Data Provinsi Berhasil');
				document.location='data.php';
			</script>
			<?php
		} else {
			echo "Input Silahkan Ulangi !";
		}
	}
}
?>