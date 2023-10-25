<?php
/* Displays user information and some useful messages */
if($_SESSION['Admin'] || $_SESSION['User']){
// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location:login/error.php");    
}
else {
    // Makes it easier to read
    $nama = $_SESSION['nama'];
    $username = $_SESSION['usernmae'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
	$level = $_SESSION['level'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" href="../../assets/images/wesngonotok.png" type="../image/ico" />
	<title>Wesngonotok</title>
</head>
  <body>
  <?php
  // Keep reminding the user this account is not active, until they activate
  if ( !$active ){
      echo
      '<div class="info">
      Account is unverified, please confirm your email by clicking
      on the email link!
      </div>';
    header("location: login/profile.php");
  }
  ?>
  <footer class="container-fluid text-center">
    <p>Footer Text</p>
  </footer>
  </body>
</html>
<?php
} else {
	header("location:users/index.php");
}
?>

