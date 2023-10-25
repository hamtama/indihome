<?php 
require_once '../../login/connection.php';

if(isset($_POST['id']) && $_POST['status'] && $_POST['table']){
    echo $id = $_POST['id'];
    echo $status = $_POST['status'];
   echo  $table = $_POST['table'];

    if ($table == "tb_menu") {
		$sql = "UPDATE $table SET status =(CASE WHEN (status = '0') THEN '1' ELSE '0' END ) WHERE id_menu='$id'";
	} if ($table == "tb_submenu") {
		$sql = "UPDATE $table SET status =(CASE WHEN (status = '0') THEN '1' ELSE '0' END ) WHERE id_submenu='$id'";
	}
    //user request o torn off
    
    $query = $mysqli->query($sql);


}

 ?>