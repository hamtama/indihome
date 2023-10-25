<?php  
require_once ('../../login/connection.php');
$id = $_POST['id'];
$kode_kasus = $_POST['kasus'];
$solusi = $_POST['solusi'];
$cek 	= mysqli_num_rows($mysqli->query("SELECT id_kasus_user FROM tb_kasus_user WHERE kode_kasus_user ='$kode_kasus'"));

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	if($cek > 1 ){
	?>	
		<script language="javascript">
			alert('Kode Kasus User Sudah Ada. Silahkan Ganti');
			document.location='data.php';
		</script>
		<?php  
	} else{
		$sql = $mysqli->query("UPDATE  tb_solusi_user SET id_kasus_user ='$kode_kasus', solusi_user = '$solusi' WHERE id_solusi_user ='$id'");
		if ($sql) {
			?>
			<script language="javascript">
				alert('Edit Solusi User Data Berhasil');
				document.location='data.php';
			</script>
			<?php
		} else {
			echo "Input Silahkan Ulangi !";
		}
	}
}
?>