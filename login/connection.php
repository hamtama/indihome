<?php  
date_default_timezone_set('Asia/Jakarta');
@session_start();

/*Database Connection Settings */
$userDB		=TRUE;
$host		= 'localhost';
$user 		= 'root';
$pass 		= 'switchknight123';
$db 		= 'sp_lan';
$mysqli		= new mysqli($host, $user, $pass, $db) or die ($mysqli->error);

function base_url($url = null) {
	$base_url = "http://localhost/sp_lan";
	if($url != null){
		return $base_url."/".$url;
	} else {
		return $base_url;
	}
}
?>