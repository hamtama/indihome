<?php  
require_once ('../../login/connection.php');
$nama_kategori = $_POST['nama_kategori'];
$cek = mysqli_num_rows($mysqli->query("SELECT kategori FROM tb_kategori WHERE kategori ='$nama_kategori'"));

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	if($cek >= 1 ){
	?>	
		<script language="javascript">
			alert('Nama Kategori Sudah Ada. Silahkan Ganti');
			document.location='data.php';
		</script>
		<?php  
	} else{
		$sql = $mysqli->query("INSERT INTO tb_kategori SET kategori ='$nama_kategori'");
		if ($sql) {
			?>
			<script language="javascript">
				alert('Input Data Berhasil');
				document.location='data.php';
			</script>
			<?php
		} else {
			echo "Input Silahkan Ulangi !";
		}
	}
}
?>