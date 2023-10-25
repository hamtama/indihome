<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy(); 
?>
<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="../assets/images/wesngonotok.png" type="../image/ico" />
        <title>Logout</title>
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
                            
                                
                                 <h1>Logout</h1>
              
          							<p><?= 'Kamu Telah Berhsil Keluar !!'; ?></p>
          
          							<a href="index.php"><button class="btn btn-app"/><i class="fa fa-home"> </i>Home</button></a>
                                <div>
                                    <a class="btn btn-default submit" href="layout/wrapper/wrapper.php">Log in</a>
                                    <a class="reset_pass" href="#">Lupa Password?</a>
                                </div>
                                <div class="clearfix"></div>
                                <div class="separator">
                                    
                                    <div class="clearfix"></div>
                                    <div class="profile clearfix">
                                        <div class="profile_pic">
                                            <img src="../assets/images/wesngonotok3.png"  alt="..." style="height: 100px;">
                                        </div>
                                        <div class="profile_info">
                                            <h1>Wesngonotok</h1>
                                        </div>
                                    </div>
                                    <div>
                                        <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                                    </div>
                                </div>
                        </section>
                    </div>
                </div>
            </div>   
        </div>
</body>
</html>
