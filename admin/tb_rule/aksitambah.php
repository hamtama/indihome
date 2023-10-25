<?php 
require_once ('../../login/connection.php');

$number = sizeof($_POST['nama_gejala']);
$hitungRule = mysqli_query($mysqli, "SELECT * FROM tb_rule");
$jmlhRule = $hitungRule->num_rows;
$rule = "";
if($jmlhRule < 10){
    $rule .= "'R0".($jmlhRule+1)."'";
} else {
    $rule .= "'R".($jmlhRule+1)."'";
}
$gjl = "";

    for ($i = 0; $i<$number; $i++){
        if($_POST['nama_gejala'][$i] != ''){
            $gjl .= "'".$_POST['nama_gejala'][$i]."'";
            if($i != $number-1){
                $gjl .= ", ";
            }
        } 
    }
    for($i=0; $i<(7-$number); $i++){
        $gjl .= ", NULL";
        // if($i != (7-$number)-1){
        //     $gjl .= ", ";
        // }
    }
$kasus = $_POST['nama_kasus'];
$kategori = mysqli_query($mysqli, "SELECT * FROM tb_kasus WHERE id_kasus='$kasus'");
$id_kategori = "";
while ($row = mysqli_fetch_array($kategori)) {
    $id_kategori = $row['id_kategori'];
}
$jan = "INSERT INTO tb_rule VALUES(NULL, ".$rule.",".$id_kategori.", ".$gjl.", ".$kasus.")";
    $sql = mysqli_query($mysqli, $jan);
    // echo $jan;
    echo "DATA BERHASIL DIINPUTKAN";
// print_r($_POST);
?>