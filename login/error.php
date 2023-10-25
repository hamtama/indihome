<?php
/* Displays all error messages */
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Error</title>
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
                            
                                
                                <h1>Error</h1>
                                <p>
                                    <?php
                                    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
                                        echo $_SESSION['message'];
                                    else:
                                        header( "location: index.php" );
                                    endif;
                                    ?>
                                </p>
                                <a href="index.php"><button class="btn btn-app"/><i class="fa fa-home"></i>Home</button></a>
                                
                                <div class="clearfix"></div>
                                <div class="separator">
                                    
                                    <div class="clearfix"></div>
                                    <br />
                                    <div>
                                        <h1><i class="fa fa-university"></i>Wesngonotok</h1>
                                        <p>©2020 All Rights Reserved. Rekso Dyah Utami is a Bootstrap 3 template. Privacy and Terms</p>
                                    </div>
                                </div>
                            </section>
                    </div>
                </div>
            </div>   
        </div>
    </body>
</html>
