<?php  
require_once ('../../login/connection.php');
$nama_kantor 			= $_POST['nama_kantor'];
$id_provinsi = $_POST['id_provinsi'];
$id_kabupaten = $_POST['id_kabupaten'];
$id_kecamatan = $_POST['id_kecamatan'];
$id_kelurahan = $_POST['id_kelurahan'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$no_telp = $_POST['no_telp'];

$cek = mysqli_num_rows($mysqli->query("SELECT alamat_kantor FROM tb_alamat WHERE alamat_kantor ='$alamat'"));

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	if($cek > 1 ){
	?>	
		<script language="javascript">
			alert('Alamat Sudah Ada. Silahkan Ganti');
			document.location='data.php';
		</script>
	<?php
	} else{
		$sql = $mysqli->query("INSERT INTO tb_kantor SET 
			nama_kantor	='$nama_kantor',
			id_provinsi 	='$id_provinsi',
			id_kabupaten 	='$id_kabupaten',
			id_kecamatan	='$id_kecamatan',
			id_kelurahan 	='$id_kelurahan',
			alamat_kantor 			='$alamat',
			email_kantor			='$email',
			no_telp_kantor			='$no_telp'");
		if ($sql) {
			?>
			<script language="javascript">
				alert('Input Data Kantor Berhasil');
				document.location='data.php';
			</script>
			<?php
		} else {
			echo "Input Silahkan Ulangi !";
		}
	}
}
?>