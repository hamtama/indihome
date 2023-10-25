<?php  
/* Registration process, inserts user info into the database 
   and sends account confirmation email message
 */

// Set session variables to be used on profile.php page
$_SESSION['email'] 			= $_POST['email'];
$_SESSION['nama'] 			= $_POST['nama'];
$_SESSION['username'] 		= $_POST['username'];

// Escape all $_POST variables to protect against SQL injections
$nama          	= $mysqli->escape_string($_POST['nama']);
$username	 	= $mysqli->escape_string($_POST['username']);	
$email 			= $mysqli->escape_string($_POST['email']);
$password 		= $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
$hash 			= $mysqli->escape_string(md5( rand(0,1000)));

// Check if user with that email already exists
$result = $mysqli->query("SELECT * FROM users WHERE username='$username'") or die($mysqli->error());


// We know user email exists if the rows returned are more than 0

if ( $result->num_row > 0){
	$_SESSION['message']	= 'User Ini Tidak Terdaftar';
	header("location: error.php");
}
else {
	// Email doesn't already exist in a database, proceed...

    // active is 0 by DEFAULT (no need to include it here)
    $sql 	="INSERT INTO users (nama, email, username, password, hash)"
    		."VALUES ('$nama','$email','$username','$password','$hash')";

     // Add user to the database
     if ($mysqli->query($sql) ){
        
     	$_SESSION['active'] = 0;
     	$_SESSION['logged_in'] = true;
     	$_SESSION['message'] = 

     					"Silahkan Anda Konfirmasi Akun $nama , minta lah untuk diaktifkan agar anda dapat login";
     	
     	 // Send registration confirmation link (verify.php)
        $to      = $email;
        $subject = 'Account Verification ( teguhsadewo12@gmail.com )';
        $message_body = '
        Hello '.$name.',

        Thank you for signing up!

        Please click this link to activate your account:

        http://localhost/sikk/login/verify.php?email='.$email.'&hash='.$hash;                         
        
        mail( $to, $subject, $message_body );

        header("location: profile.php"); 

    }

    else {
        $_SESSION['message'] = 'Registration failed!';
        header("location: error.php");

     }

}
?>