<?php  
require_once ('../../login/connection.php');
$kode = $_POST['kode'];
$kasus = $_POST['kasus'];
$kategori = $_POST['kategori'];
$bobot = $_POST['bobot'];
$id = $_POST['id'];
$cek = mysqli_num_rows($mysqli->query("SELECT kode_kasus FROM tb_kasus WHERE kode_kasus ='$kode'"));
$cek2 = mysqli_num_rows($mysqli->query("SELECT kasus FROM tb_kasus WHERE kasus ='$kasus'"));
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	if($cek > 1 ){
	?>	
		<script language="javascript">
			alert('Kode Kasus Sudah Ada. Silahkan Ganti');
			document.location='data.php';
		</script>
		<?php  
	} elseif($cek2 > 1 ){
	?>	
		<script language="javascript">
			alert('Kasus Sudah Ada. Silahkan Ganti');
			document.location='data.php';
		</script>
		<?php
	} else{
		$sql = $mysqli->query("UPDATE tb_kasus tb_kasus SET kode_kasus ='$kode', kasus = '$kasus', id_kategori='$kategori', id_bobot= '$bobot' WHERE id_kasus ='$id'");
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