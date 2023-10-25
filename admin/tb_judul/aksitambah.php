<?php  
require_once ('../../login/connection.php');
$judul = $_POST['judul'];
$quote = $_POST['quote'];
$logo1 = $_FILES['logo1']['name'];
$logo2 = $_FILES['logo2']['name'];
$logo3 = $_FILES['logo3']['name'];
$logo4 = $_FILES['logo4']['name'];
$logo5 = $_FILES['logo5']['name'];
$logo6 = $_FILES['logo6']['name'];
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$sql = $mysqli->query("INSERT INTO tb_judul SET 
							judul = '$judul',
							quote = '$quote',
							gambar1 = '$logo1',
							gambar2 = '$logo2',
							gambar3 = '$logo3',
							gambar4 = '$logo4',
							gambar5 = '$logo5',
							gambar6 = '$logo6'");
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

