<?php
session_start();
require_once 'connection.php';

if($_SESSION['Admin']){
	header("location:../layout/wrapperadmin/wrapper.php");

}else if($_SESSION['User']){
	header("location:../layout/wrapperuser/wrapper.php");
} else {
	header("location:../index.php");

/* User login process, checks if user exists and password is correct */

// Escape email to protect against SQL injections
$username = $mysqli->escape_string($_POST['username']);
$result = $mysqli->query("SELECT * FROM users WHERE username='$username'");

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "Username Yang Anda Gunakan Belum Terdaftar Siahkan Coba Lagi! Atau Mulai lah Registrasi";
    header("location: error.php");

}
else { // User exists
    $user = $result->fetch_assoc();
	
    if (password_verify($_POST['password'], $user['password']) ) {
        
        $_SESSION['username'] = $user['username'];
        $_SESSION['nama'] = $user['nama'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['active'] = $user['active'];
		$_SESSION['level'] = $user['level'];

        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;
		if($user['level']=="Admin"){
			$_SESSION['Admin']=$user;
			header("location:../layout/wrapperadmin/wrapper.php");
		} else if($user['level']=="User"){
			$_SESSION['User']=$user;
			header("location:../layout/wrapperuser/wrapper.php");
		} else {
			header("location: error.php"); 
		}
	}	
    else {

        $_SESSION['message'] = "Password Yang Anda Masukkan Salah! Silahkan Coba Lagi ";
        header("location: error.php");
		
    }
}
}