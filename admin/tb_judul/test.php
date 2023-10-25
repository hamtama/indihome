<?php
require_once ('../../layout/wrapperadmin/head.php');
require_once ('../../layout/wrapperadmin/sidebar.php');
require_once ('../../layout/wrapperadmin/header.php');
require_once ('../../layout/wrapperadmin/content.php');
require_once ('../../login/connection.php');
if (isset($_GET['test_id'])) {
	$id = $_GET['test_id'];
	$sql_check = $mysqli->query("SELECT * FROM tb_judul WHERE id_judul = '$id'") or die (mysqli_error($query));
	if (mysqli_num_rows($sql_check) > 0) {
	 	while ($row = mysqli_fetch_array($sql_check)) {
	 		$gambar1 = $row['gambar1'];
	 		$gambar2 = $row['gambar2'];
	 		$gambar3 = $row['gambar3'];
	 		$gambar4 = $row['gambar4'];
	 		$gambar5 = $row['gambar5'];
	 		$gambar6 = $row['gambar6'];

	 	}
	} 
}

echo $gambar6 ,"\n";

echo $gambar1;
require_once ('../../layout/wrapperadmin/footer.php');
?>