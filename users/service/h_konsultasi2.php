<?php  
require_once ('../../login/connection.php');


	$kode_kasus = $_POST['kode_kasus_2'];
	echo $id_pengguna = $_POST['id_pengguna_2'];
	$deskripsi = $_POST['deskripsi_2'];
	$sql_rule = mysqli_query($mysqli, "SELECT * FROM tb_rule_user WHERE id_kasus_user = '$kode_kasus'") or die (mysqli_error($mysqli));
	while ($row_rule = mysqli_fetch_array($sql_rule)) {
		$kategori = $row_rule['id_kategori'];
		$id_kasus = $row_rule['id_kasus_user'];
	}

	$sql_pengguna = mysqli_query($mysqli, "SELECT * FROM tb_pengguna WHERE id_pengguna = '$id_pengguna'") or die (mysqli_error($mysqli));
	while ($row_p = mysqli_fetch_array($sql_pengguna)) {
		$id_provinsi = $row_p['id_provinsi'];
		$id_kabupaten = $row_p['id_kabupaten'];
		$id_kecamatan = $row_p['id_kecamatan'];
	}
	$sql_kantor = mysqli_query($mysqli, "SELECT * FROM tb_wil_penanganan 
		WHERE id_provinsi = '$id_provinsi' 
		AND id_kabupaten = '$id_kabupaten' 
		AND id_kecamatan = '$id_kecamatan'") or die (mysqli_error($mysqli));
	while ($row_k = mysqli_fetch_array($sql_kantor)) {
		$id_kantor = $row_k['id_kantor'];
	}
	$sql_teknisi = mysqli_query($mysqli, "SELECT * FROM tb_teknisi WHERE id_kantor = '$id_kantor' AND job_disk = '$kategori'") or die (mysqli_error($mysqli));
	while ($row_t = mysqli_fetch_array($sql_teknisi)) {
		$id_teknisi = $row_t['id_teknisi'];
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$sql = $mysqli->query("INSERT INTO tb_rekap SET 
			id_diagnosis = '1',
			id_pengguna ='$id_pengguna', 
			id_kasus	='$id_kasus',
			id_kategori ='$kategori', 
			id_kantor	='$id_kantor',
			id_teknisi	='$id_teknisi',
			laporan_kerusakan = '$deskripsi',
			status = '0'");
		if ($sql) {
			?>
			<script language="javascript">
				alert('Input Data Berhasil');
				document.location='tampil.php';
			</script>
			<?php
		} else {
			echo "Input Silahkan Ulangi !";
		}
	}



?>
