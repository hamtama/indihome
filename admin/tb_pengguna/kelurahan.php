<?php  
require_once ('../../login/connection.php');
$kecamatan = $_POST['kecamatan'];

$sql_kelurahan = mysqli_query($mysqli, "SELECT * FROM tb_kelurahan WHERE id_kecamatan='$kecamatan'") 
									or die (mysqli_error($mysqli));
echo '<option value="">-- Pilih Kelurahan --</option>';
while($row = mysqli_fetch_array($sql_kelurahan)){
	echo '<option value="'.$row['id_kelurahan'].'">'.$row['nama_kelurahan'].'</option>';
	
}
?>