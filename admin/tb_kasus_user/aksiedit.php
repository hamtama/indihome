<?php  
require_once ('../../login/connection.php');
$kode = $_POST['kode'];
$kasus = $_POST['kasus'];
$kategori = $_POST['kategori'];
$bobot = $_POST['bobot'];
$id = $_POST['id'];
$cek 	= mysqli_num_rows($mysqli->query("SELECT kode_kasus_user,kasus_user FROM tb_kasus_user WHERE kode_kasus_user ='$kode' AND kasus_user ='$kasus'"));
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	if($cek > 1 ){
	?>	
		<script language="javascript">
			alert('Kode Kasus User Sudah Ada. Silahkan Ganti');
			document.location='data.php';
		</script>
		<?php  
	
	} else{
		$sql = $mysqli->query("UPDATE tb_kasus_user SET kode_kasus_user ='$kode', kasus_user = '$kasus', id_kategori='$kategori', id_bobot= '$bobot' WHERE id_kasus_user ='$id'");
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