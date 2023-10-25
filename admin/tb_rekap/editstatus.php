<?php 
require_once '../../login/connection.php';

if(isset($_POST['id']) && $_POST['status']){
    $id = $_POST['id'];
    $status = $_POST['status'];
    //user request o torn off
    $sql = "UPDATE tb_rekap SET status =(CASE WHEN (status = '0') THEN '1' ELSE '0' END ) WHERE id_rekap='$id'";
    
    $query = $mysqli->query($sql);


}

 ?>