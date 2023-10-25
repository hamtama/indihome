<?php  
require_once ('../../login/connection.php');

$table = $_POST['tabel'];
if ($table == 'tb_menu'){
	$id = $_POST['id'];
	$menu = $_POST['menu'];
	$link = $_POST['link_menu'];
	$cek 	= mysqli_num_rows($mysqli->query("SELECT menu FROM tb_menu WHERE menu ='$menu'"));

	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		if($cek > 1 ){
		?>	
			<script language="javascript">
				alert('Menu Sudah Ada. Silahkan Ganti');
				document.location='data.php';
			</script>
			<?php 
		
		} else{
			$sql = $mysqli->query("UPDATE tb_menu SET menu ='$menu', link_menu ='$link' WHERE id_menu = '$id'");
			if ($sql) {
				?>
				<script language="javascript">
					alert('Edit Data Berhasil');
					document.location='data.php';
				</script>
				<?php
			} else {
				?>
				<script>
					alert("Edit Silahkan Ulangi !");
					document.location='data.php';
				</script>
				<?php
				echo $mysqli->error($sql);
			}
		}
	}
} else {
	$id = $_POST['id'];
	$menu = $_POST['menu'];
	$link = $_POST['link_submenu'];
	$submenu = $_POST['submenu'];
	$cek 	= mysqli_num_rows($mysqli->query("SELECT menu FROM tb_menu WHERE menu ='$menu'"));
	$cek2 	= mysqli_num_rows($mysqli->query("SELECT submenu FROM tb_submenu WHERE submenu = '$submenu'"));

	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		if($cek > 1 ){
		?>	
			<script language="javascript">
				alert('Menu Sudah Ada. Silahkan Ganti');
				document.location='data.php';
			</script>
			<?php 
		} else if($cek2 > 1 ){
		?>	
			<script language="javascript">
				alert('Submenu Sudah Ada. Silahkan Ganti');
				document.location='data.php';
			</script>
			<?php 
		
		} else{
			$sql = $mysqli->query("UPDATE tb_submenu SET id_menu ='$menu', submenu ='$submenu', link_submenu = '$link' WHERE id_submenu = '$id'");
			if ($sql) {
				?>
				<script language="javascript">
					alert('Edit Data Berhasil');
					document.location='data.php';
				</script>
				<?php
			} else {
				?>
				<script>
					alert("Edit Silahkan Ulangi !");
					document.location='data.php';
				</script>
				<?php
				echo $mysqli->error($sql);
			}
		}
	}
}



?>