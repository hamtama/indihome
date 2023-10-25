<?php  
require_once ('../../login/connection.php');
$nama 			= $_POST['nama'];
$id_provinsi = $_POST['id_provinsi'];
$id_kabupaten = $_POST['id_kabupaten'];
$id_kecamatan = $_POST['id_kecamatan'];
$id_kelurahan = $_POST['id_kelurahan'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$no_telp = $_POST['no_telp'];
//Kode Provinsi
$kode_prov = mysqli_query($mysqli, "SELECT kode_provinsi FROM tb_provinsi WHERE id_provinsi ='$id_provinsi'") or die (mysqli_error($q));
while ($row = mysqli_fetch_array($kode_prov)){
	$kode_provinsi = $row[0];
}
// Kode Kabupaten
$kode_kab = mysqli_query($mysqli, "SELECT kode_kabupaten FROM tb_kabupaten WHERE id_kabupaten ='$id_kabupaten'") or die (mysqli_error($q));
while ($row = mysqli_fetch_array($kode_kab)){
	$kode_kabupaten = $row[0];
}
// Kode Kecamatan
$kode_kec = mysqli_query($mysqli, "SELECT kode_kecamatan FROM tb_kecamatan WHERE id_kecamatan ='$id_kecamatan'") or die (mysqli_error($q));
while ($row = mysqli_fetch_array($kode_kec)){
	$kode_kecamatan = $row[0];
}
// Kode Kelurahan
$kode_kel = mysqli_query($mysqli, "SELECT kode_kelurahan FROM tb_kelurahan WHERE id_kelurahan ='$id_kelurahan'") or die (mysqli_error($q));
while ($row = mysqli_fetch_array($kode_kel)){
	$kode_kelurahan = $row[0];
}
$cek = mysqli_num_rows($mysqli->query("SELECT alamat FROM tb_pengguna WHERE alamat ='$alamat'"));
$q = mysqli_query($mysqli, "SELECT no_internet FROM tb_pengguna ORDER BY id_pengguna DESC LIMIT 1") or die (mysqli_error($q));
	if(mysqli_num_rows($q) > 0) {
		while ($row = mysqli_fetch_array($q)){
			$no = substr($row[0],8);
		}
	} else {
		$no = 10000;
	}
$no;
$no_i =  $no-1;
$no_internet =$kode_provinsi.''.$kode_kabupaten.''.$kode_kecamatan.''.$kode_kelurahan.''.$no_i;
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	if($cek > 1 ){
	?>	
		<script language="javascript">
			alert('Alamat Sudah Ada. Silahkan Ganti');
			document.location='data.php';
		</script>
	<?php
	} else{
		$sql = $mysqli->query("INSERT INTO tb_pengguna SET 
			nama_pengguna	='$nama',
			id_provinsi 	='$id_provinsi',
			id_kabupaten 	='$id_kabupaten',
			id_kecamatan	='$id_kecamatan',
			id_kelurahan 	='$id_kelurahan',
			alamat 			='$alamat',
			email 			='$email',
			no_telp			='$no_telp',
			no_internet 	='$no_internet'");
		if ($sql) {
			?>
			<script language="javascript">
				alert('Input Data Pengguna Berhasil');
				document.location='data.php';
			</script>
			<?php
		} else {
			echo "Input Silahkan Ulangi !";
		}
	}
}
?>