<?php
@session_start();

require '../login/connection.php';
if(@$_SESSION['Admin']){
    header("location:../layout/wrapperadmin/wrapper.php");
}else if(@$_SESSION['User']){
    header("location:../layout/wrapperuser/wrapper.php");

} else {

?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <link rel="icon" href="../assets/images/wesngonotok.jpg" type="../image/ico" />
        <title>Sistem Pakar </title>
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
    <?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') 
    {
        if (isset($_POST['login'])) { //user logging in
            require '../login/login.php';
        }
        elseif (isset($_POST['register'])) { //user registering
            require '../login/register.php';
        }
    }
    ?>
    <body class="login">
        <div>
            <a class="tab active" id="signup"></a>
            <a class="tab active" id="signin"></a>
            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        <div id="login">
                            <form action="index.php" method="post" autocomplete="off">
                                <h1>Login Form</h1>
                                <div>
                                    <input type="text" class="form-control" name="username" placeholder="Username" required="" />
                                </div>
                                <div>
                                    <input type="password" class="form-control" name="password" placeholder="Password" required="" />
                                </div>
                                <div>
                                    <button class="btn btn-app" name="login" ><i class="fa fa-sign-in"></i>Log in</button>
                                    
                                </div>
                                <div class="clearfix"></div>
                                <div class="separator">
                                    <p class="change_link">Ingin Menambah Akun
                                        <a href="#signup" class="to_register"> <u><strong>Buat Akun Baru</strong></u> </a>
                                    </p>
                                    <div class="clearfix"></div>
                                    <div class="profile clearfix">
                                        <div class="profile_pic">
                                            <img src="../assets/images/wesngonotok3.png"  alt="..." style="height: 100px;">
                                        </div>
                                        <div class="profile_info">
                                            <h1>Wesngonotok Apps</h1>
                                        </div>
                                    </div>
                                    <div>
                                        
                                        <p>©2020 All Rights Reserved. Wesngonotok is a Bootstrap 3 template. Privacy and Terms</p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
                <div id="register" class="animate form registration_form">
                    <section class="login_content">
                        <form action="index.php" method="post" autocomplete="off" >
                            <h1>Daftar Akun</h1>
                            <div>
                                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required=""/>
                            </div>
                            <div>
                                <input type="text" class="form-control" name="username" placeholder="Username" required="" />
                            </div>
                            <div>
                                <input type="email" class="form-control" name="email" placeholder="Email" required="" />
                            </div>
                            <div>
                                <input type="password" class="form-control" name="password" placeholder="Password" required="" />
                            </div>
                            <div>
                                <button type="submit" class="btn btn-app" name="register" > <i class="fa fa-sign-in"></i> Simpan</button>
                            </div>
                            <div class="clearfix"></div>
                            <div class="separator">
                                <p class="change_link">Sudah Daftar ?
                                    <a href="#signin" class="to_register"> Log in </a>
                                </p>
                                <div class="clearfix"></div>
                                <div class="profile clearfix">
                                    <div class="profile_pic">
                                        <img src="../assets/images/wesngonotok3.png"  alt="..." style="height: 100px;">
                                    </div>
                                    <div class="profile_info">
                                        <h1>Wesngonotok Apps</h1>
                                    </div>
                                </div>
                                <div>
                                    <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </body>
</html>
<?php   
}
 ?>