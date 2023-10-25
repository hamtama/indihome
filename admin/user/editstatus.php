<?php 
require_once '../../login/connection.php';

if(isset($_POST['id']) && $_POST['status']){
    $id = $_POST['id'];
    $status = $_POST['status'];
    //user request o torn off
    $sql = "UPDATE users SET active =(CASE WHEN (active = '0') THEN '1' ELSE '0' END ) WHERE id='$id'";
    
    $query = $mysqli->query($sql);


}

 ?>