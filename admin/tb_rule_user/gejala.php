<?php
require_once ('../../login/connection.php');

$kasus = $_POST['kasus'];
$sql_kasus = mysqli_query($mysqli, "SELECT * FROM tb_kasus_user WHERE id_kasus_user='$kasus'") or die (mysql_error($mysqli));
$id = mysqli_fetch_array($sql_kasus) ;
$kategori = $id['id_kategori'];

$sql_gejala = mysqli_query($mysqli, "SELECT * FROM tb_gejala_user WHERE id_kategori = '$kategori'") or die (mysql_error($mysqli));
while ($row = mysqli_fetch_array($sql_gejala)){
     echo '<option value="'.$row['kode_gejala_user'].'">'.$row['kode_gejala_user'].' ('.$row['gejala_user'].') </option>';
}
?>                
          