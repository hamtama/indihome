<?php  
require_once ('../../login/connection.php');
$kabupaten = $_POST['kabupaten'];

$sql_kecamatan = mysqli_query($mysqli, "SELECT * FROM tb_kecamatan WHERE id_kabupaten='$kabupaten'") 
									or die (mysqli_error($mysqli));
while($row = mysqli_fetch_array($sql_kecamatan)){
	echo '<option value="'.$row['id_kecamatan'].'">'.$row['nama_kecamatan'].'</option>';
	
}
?>