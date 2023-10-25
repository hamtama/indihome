<?php  
require_once ('../../login/connection.php');
$nama_kategori = $_POST['nama_kategori'];
$id = $_POST['id'];
$cek = mysqli_num_rows($mysqli->query("SELECT kategori FROM tb_kategori WHERE kategori ='$nama_kategori'"));

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	if($cek >= 1 ){
	?>	
		<script language="javascript">
			alert('Nama Jenis Sudah Ada. Silahkan Ganti');
			document.location='data.php';
		</script>
		<?php  
	} else{
		$sql = $mysqli->query("UPDATE tb_kategori SET kategori ='$nama_kategori' WHERE id_kategori ='$id'");
		if ($sql) {
			?>
			<script language="javascript">
				alert('Edit Data Berhasil');
				document.location='data.php';
			</script>
			<?php
		} else {
			echo "Input Silahkan Ulangi !";
		}
	}
}
?>