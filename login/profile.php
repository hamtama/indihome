<?php
/* Displays user information and some useful messages */
session_start();
// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
$_SESSION['message'] = "You must log in before viewing your profile page!";
header("location: error.php");
}
else {
// Makes it easier to read
$nama = $_SESSION['nama'];
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$active = $_SESSION['active'];
}
?>
<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome <?= $username.' '.$email ?></title>
        <!-- Bootstrap -->
        <link href="../assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="../assets/vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- Animate.css -->
        <link href="../assets/vendors/animate.css/animate.min.css" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="../assets/build/css/custom.min.css" rel="stylesheet">
        
    </head>
    <body class="login">
        <div>
            <div>
                <a class="hiddenanchor" id="signup"></a>
                <a class="hiddenanchor" id="signin"></a>
                <div class="login_wrapper">
                    <div class="animate form login_form">
                        <section class="login_content">
                            
                                <h1>Welcome</h1>
                                <p>
                                    <?php
                                    
                                    // Display message about account verification link only once
                                    if ( isset($_SESSION['message']) )
                                    {
                                    echo $_SESSION['message'];
                                    
                                    // Don't annoy the user with more messages upon page refresh
                                    unset( $_SESSION['message'] );
                                    }
                                    
                                    ?>
                                </p>
                                
                                <?php
                                
                                // Keep reminding the user this account is not active, until they activate
                                if ( !$active ){
                                echo
                                '<div >
                                    Anda Belum mengonfirmasi Email Anda Silakan Verifikasi dahulu email anda
                                </div>';
                                }
                                
                                ?>
                                
                                <h2><?php echo $username.' '.$nama; ?></h2>
                                <p><?= $email ?></p>
                                
                                <a href="logout.php"><button class="btn btn-app" name="logout"/><i class="fa fa-sign-out">  </i>Log Out</button></a>
                                
                                <div class="clearfix"></div>
                                <div class="separator">
                                    
                                    <div class="clearfix"></div>
                                    <div class="profile_pic">
                                            <img src="../assets/images/wesngonotok3.png"  alt="..." style="height: 100px;">
                                        </div>
                                        <div class="profile_info">
                                            <h1>Wesngonotok Apps</h1>
                                        </div>
                                    <div>
                                        
                                        <p>©2020 All Rights Reserved. Wesngonotok is a Bootstrap 3 template. Privacy and Terms</p>
                                    </div>
                                </div>
                            
                        </section>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>