<?php  
require_once ('../../login/connection.php');
$menu = $_POST['menu'];
$link = $_POST['link'];

$cek 	= mysqli_num_rows($mysqli->query("SELECT menu FROM tb_menu WHERE menu ='$menu'"));

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	if($cek >= 1 ){
	?>	
		<script language="javascript">
			alert('Menu Sudah Ada. Silahkan Ganti');
			document.location='data.php';
		</script>
		<?php 
	
	} else{
		$sql = $mysqli->query("INSERT INTO tb_menu SET menu ='$menu', link_menu = '$link', status = '0'");
		if ($sql) {
			?>
			<script language="javascript">
				alert('Input Data Berhasil');
				document.location='data.php';
			</script>
			<?php
		} else {
			?>
			<script>
				alert("Input Silahkan Ulangi !");
				document.location='data.php';
			</script>
			<?php
			echo $mysqli->error($sql);
		}
	}
}
?>