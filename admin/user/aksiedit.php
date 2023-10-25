<?php  

require_once ('../../login/connection.php');
// Escape all $_POST variables to protect against SQL injections
$_SESSION['level']          = $_POST['level'];
$_SESSION['nama']           = $_POST['nama'];
$_SESSION['username']       = $_POST['username']; 
$_SESSION['email']          = $_POST['email']; 

$id 			= $mysqli->escape_string($_POST['id']);
$level          = $mysqli->escape_string($_POST['level']);
$nama           = $mysqli->escape_string($_POST['nama']);
$username	 	= $mysqli->escape_string($_POST['username']);	
$email 			= $mysqli->escape_string($_POST['email']);

$password 		= $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
$hash 			= $mysqli->escape_string(md5( rand(0,1000)));


$cek            = mysqli_num_rows($mysqli->query("SELECT nama FROM users WHERE nama ='$nama'"));
$cek2           = mysqli_num_rows($mysqli->query("SELECT username FROM users WHERE username = '$username'"));
$cek3           = mysqli_num_rows($mysqli->query("SELECT email FROM users WHERE email = '$email'"));



if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if ($cek > 1){
        ?>
            <script language="javascript" >
                alert('Nama Sudah ada Anda Tidak dapat menggunakan nama ini');
                document.location='data.php';
            </script>

        <?php
    } elseif ($cek2 > 1){
        ?>
            <script language="javascript">
                alert('Username yang anda gunakan sudah terpakai, gunakan username lain');
                document.location='data.php';
            </script> 
        <?php
    } elseif ($cek3 > 1){
        ?>
            <script language="javascript">
                alert('Email yang ada sudah terpakai, gunakan email lain');
                document.location='data.php';
            </script>
        <?php
    } else {
        $sql = $mysqli->query("UPDATE  users SET
            id			='$id',
            level       ='$level',
            nama        ='$nama',
            username    ='$username',
            email       ='$email',
            password    ='$password',
            hash        ='$hash' WHERE id=$id ");
        if ($sql) {
            ?>
                <script language="javascript">
                    alert('Edit Data User Berhasil');
                    document.location='data.php';
                </script>
            <?php
        } else {
            echo "Input Silahkan Ulangi !";
        }
    }
}
?>