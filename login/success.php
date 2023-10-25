<?php
/* Displays all successful messages */
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Success</title>
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
    <body>
        <div>
            <div>
                <a class="hiddenanchor" id="signup"></a>
                <a class="hiddenanchor" id="signin"></a>
                <div class="login_wrapper">
                    <div class="animate form login_form">
                        <section class="login_content">
                            <form>
                                <h1><?= 'Success'; ?></h1>
                                <p>
                                    <?php
                                    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
                                    echo $_SESSION['message'];
                                    else:
                                    header( "location: index.php" );
                                    endif;
                                    ?>
                                </p>
                                <a href="index.php"><button class="btn btn-app"/><i class="fa fa-home">  Home</i></button></a>
                                
                                <div class="clearfix"></div>
                                <div class="separator">
                                    
                                    <div class="clearfix"></div>
                                    <br />
                                    <div>
                                        <h1><i class="fa fa-home"></i>Wesngonotok Apps</h1>
                                        <p>©2020 All Rights Reserved. Wesngonotok is a Bootstrap 3 template. Privacy and Terms</p>
                                    </div>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>