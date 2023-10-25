<?php  
require_once ('../../login/connection.php');
$id = $_POST['id'];
$kode_kasus = $_POST['kasus'];
$solusi = $_POST['solusi'];
$cek 	= mysqli_num_rows($mysqli->query("SELECT id_kasus FROM tb_kasus WHERE kode_kasus ='$kode_kasus'"));

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	if($cek > 1 ){
	?>	
		<script language="javascript">
			alert('Kode Kasus Sudah Ada. Silahkan Ganti');
			document.location='data.php';
		</script>
		<?php  
	} else{
		$sql = $mysqli->query("UPDATE  tb_solusi SET id_kasus ='$kode_kasus', solusi = '$solusi' WHERE id_solusi ='$id'");
		if ($sql) {
			?>
			<script language="javascript">
				alert('Edit Solusi Data Berhasil');
				document.location='data.php';
			</script>
			<?php
		} else {
			echo "Input Silahkan Ulangi !";
		}
	}
}
?>