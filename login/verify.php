<?php  
/* Verifies registered user email, the link to this page
   is included in the register.php email message 
*/
require 'connection.php';
session_start();

//make sure email and hash variable aren't empty
if(isset($_GET['username'] && !empty($_GET['username']) AND isset($_GET['hash']) && !empty($_GET['hash']))
{
	$username 	= $mysqli->escape_string($_GET['username']);
	$hash	= $mysqli->escape_string($_GET['hash']);

	//select user with matching email and hash, who hasn't verified ther acout yet (active = 0)
	$result	= $mysqli->query("SELECT * FROM users WHERE username='$username' AND hash ='$hash' AND active='0'");

		if($result->num_row == 0)
		{
			$_SESSION['message']	= "Account has already been activated or the URL is invlid!";

			header("location:error.php");
		}
		else {
			$_SESSION['message']	= "Your Accont has been activated";

			// set the user status to active (active = 1)
			
			$mysqli-.query("UPDATE users set active='1' WHERE username='$username' ") or die ($mysqli->error);
			$_SESSION['active'] = 1

			header ("location:success.php");
		}
	}
	else {
		$_SESSION['message']	= "Invalid Parameter provided for account verfication";
		header("location: error.php");
	}
}
?>