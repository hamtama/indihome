<?php  
require_once ('../../login/connection.php');
$id = $_POST['id'];
$judul = $_POST['judul'];
$quote = $_POST['quote'];
$logo1 = $_FILES['logo1']['name'];
$logo2 = $_FILES['logo2']['name'];
$logo3 = $_FILES['logo3']['name'];
$logo4 = $_FILES['logo4']['name'];
$logo5 = $_FILES['logo5']['name'];
$logo6 = $_FILES['logo6']['name'];

$sql_check = $mysqli->query("SELECT * FROM tb_judul WHERE id_judul = '$id'") or die (mysqli_error($query));
if (mysqli_num_rows($sql_check) > 0) {
 	while ($row = mysqli_fetch_array($sql_check)) {
 		$img1 = $row['gambar1'];
 		$img2 = $row['gambar2'];
 		$img3 = $row['gambar3'];
 		$img4 = $row['gambar4'];
 		$img5 = $row['gambar5'];
 		$img6 = $row['gambar6'];
 	}
 } 

for ($i=1; $i <= 6; $i++) { 
	$tmp = $_FILES['logo'.$i]['tmp_name'] ;
	if($tmp == "" || $tmp ==null){ break; }
	$dir = 'logo/';
	$direktori = $dir.$_FILES['logo'.$i]['name'];
	if (move_uploaded_file($tmp, $direktori)) {
	     ?>
	     <script>
	     	alert("Data Berhasil Diinputkkan");
	     </script>
	     <?php
	} else {
	     ?>
	     	<script>
	     		alert("Silahkan Ulangi input data");
	     	</script>
	     <?php
	}
}

if (!empty($logo1)) {
	$gambar1 = "gambar1 = '$logo1',";
} else {
	$gambar1 = "gambar1 = '$img1',";
}

if (!empty($logo2)) {
	$gambar2 = "gambar2 = '$logo2',";
} else {
	$gambar2 = "gambar2 = '$img2',";
}

if (!empty($logo3)) {
	$gambar3 = "gambar3 = '$logo3',";
} else {
	$gambar3 = "gambar3 ='$img3',";
}

if (!empty($logo4)) {
	$gambar4 = "gambar4 = '$logo4',";
} else {
	$gambar4 = "gambar4 = '$img4',";
}
if (!empty($logo5)) {
	$gambar5 = "gambar5 = '$logo5',";
} else {
	$gambar5 = "gambar5 = '$img5',";
}
if (!empty($logo6)) {
	$gambar6 = "gambar6 = '$logo6',";
} else {
	$gambar6 = "gambar6 = '$img6'";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$sql = $mysqli->query("UPDATE tb_judul SET 
							judul = '$judul',
							quote = '$quote',
							$gambar1
							$gambar2
							$gambar3
							$gambar4
							$gambar5
							$gambar6 WHERE id_judul = '$id'");
	if ($sql) {
		?>
		<script>
			alert('Input Data berhasil');
			document.location='data.php';
		</script>
		<?php
	} else {
		
	echo 'Data Tidak Berhasil di Inputkan'.$mysqli->error();		
		
	}
}

?>

