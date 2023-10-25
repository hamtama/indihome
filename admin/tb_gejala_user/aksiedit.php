<?php  
require_once ('../../login/connection.php');
$id = $_POST['id'];
$kode = $_POST['kode'];
$gejala = $_POST['gejala'];
$kategori = $_POST['kategori'];
$bobot = $_POST['bobot'];
$cek 	= mysqli_num_rows($mysqli->query("SELECT kode_gejala_user FROM tb_gejala_user WHERE kode_gejala_user ='$kode' AND gejala_user ='gejala' "));

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	if($cek > 1 ){
	?>	
		<script language="javascript">
			alert('Gejala User Sudah Ada. Silahkan Ganti');
			document.location=


			'data.php';
		</script>
		<?php  
	} else{
		$sql = $mysqli->query("UPDATE tb_gejala_user SET kode_gejala_user ='$kode', gejala_user ='$gejala', id_kategori = '$kategori', id_bobot = '$bobot' WHERE id_gejala_user ='$id'");
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