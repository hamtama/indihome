<?php  
require_once ('../../login/connection.php');
$provinsi = $_POST['provinsi'];

$sql_kabupaten = mysqli_query($mysqli, "SELECT * FROM tb_kabupaten 
	LEFT JOIN tb_provinsi ON tb_kabupaten.id_provinsi = tb_provinsi.id_provinsi WHERE tb_kabupaten.id_provinsi='$provinsi'") or die (mysqli_error($mysqli));

echo '<option value="">-- Pilih Kabupaten --</option>';
while($row = mysqli_fetch_array($sql_kabupaten)){
	echo '<option value="'.$row['id_kabupaten'].'">'.$row['nama_kabupaten'].'</option>';	
}
?>