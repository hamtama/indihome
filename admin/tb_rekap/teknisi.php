<?php  
require_once ('../../login/connection.php');
$kantor = $_POST['id_kantor'];

$sql_kabupaten = mysqli_query($mysqli, "SELECT * FROM tb_teknisi WHERE id_kantor='$kantor'") 
									or die (mysqli_error($mysqli));
while($row = mysqli_fetch_array($sql_kabupaten)){
	echo '<option value="'.$row['id_teknisi'].'">'.$row['nama_teknisi'].'</option>';
	
}
?>