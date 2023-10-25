<?php  
require_once ('../../login/connection.php');
$menu = $_POST['menu'];
$submenu = $_POST['submenu'];
$link = $_POST['link'];

$cek 	= mysqli_num_rows($mysqli->query("SELECT menu FROM tb_menu WHERE menu ='$menu'"));
$cek2 	= mysqli_num_rows($mysqli->query("SELECT submenu FROM tb_submenu WHERE submenu = '$submenu'"));

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	if($cek >= 1 ){
	?>	
		<script language="javascript">
			alert('Menu Sudah Ada. Silahkan Ganti');
			document.location='data.php';
		</script>
		<?php 
	} else if($cek2 >= 1 ){
	?>	
		<script language="javascript">
			alert('Submenu Sudah Ada. Silahkan Ganti');
			document.location='data.php';
		</script>
		<?php 
	
	} else{
		$sql = $mysqli->query("INSERT INTO tb_submenu SET id_menu ='$menu', submenu ='$submenu', link_submenu = '$link', status = '0'");
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