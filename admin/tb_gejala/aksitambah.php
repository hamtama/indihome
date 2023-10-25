<?php  
require_once ('../../login/connection.php');
$kode = $_POST['kode'];
$gejala = $_POST['gejala'];
$kategori = $_POST['kategori'];
$bobot = $_POST['bobot'];
$cek 	= mysqli_num_rows($mysqli->query("SELECT kode_gejala FROM tb_gejala WHERE kode_gejala ='$kode' AND gejala ='gejala' "));

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	if($cek >= 1 ){
	?>	
		<script language="javascript">
			alert('Kode Gejala Sudah Ada. Silahkan Ganti');
			document.location='data.php';
		</script>
		<?php 
	} else{
		$sql = $mysqli->query("INSERT INTO tb_gejala SET kode_gejala ='$kode',gejala ='$gejala', id_kategori = '$kategori', id_bobot ='$bobot'");
		if ($sql) {
			?>
			<script language="javascript">
				alert('Input Data Berhasil');
				document.location='data.php';
			</script>
			<?php
		} else {
			?>
			<script>
				alert("Input Silahkan Ulangi !");
				document.location='data.php';
			</script>
			<?php
			echo $mysqli->error($sql);
		}
	}
}
?>