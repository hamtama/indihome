<?php
require_once ('../../login/connection.php');

$kasus = $_POST['kasus'];
$sql_kasus = mysqli_query($mysqli, "SELECT * FROM tb_kasus WHERE id_kasus='$kasus'") or die (mysql_error($mysqli));
$id = mysqli_fetch_array($sql_kasus) ;
$kategori = $id['id_kategori'];

$sql_gejala = mysqli_query($mysqli, "SELECT * FROM tb_gejala WHERE id_kategori = '$kategori'") or die (mysql_error($mysqli));
while ($row = mysqli_fetch_array($sql_gejala)){
     echo '<option value="'.$row['kode_gejala'].'">'.$row['kode_gejala'].' ('.$row['gejala'].') </option>';
}
?>                
          