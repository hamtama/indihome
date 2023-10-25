<?php  
require_once ('../../login/connection.php');
$no_internet = $_POST['no_internet'];
$kasus      = $_POST['kasus'];
$id = $_POST['id'];
$sql_kategori = mysqli_query($mysqli, "SELECT * FROM tb_kasus WHERE 1 ORDER BY id_kasus='$id_kasus' ASC") or die (mysqli_error($mysqli));
while ($row = mysqli_fetch_array($sql_kategori)) {
    $kategori = $row['id_kategori'];
}
                                                  


$kantor      = $_POST['kantor'];
$teknisi    = $_POST['teknisi'];
$laporan = $_POST['laporan'];
$status     = $_POST['active'];
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $sql = $mysqli->query("UPDATE tb_rekap SET 
        id_pengguna ='$no_internet', 
        id_kasus    ='$kasus',
        id_kategori ='$kategori', 
        id_kantor   ='$kantor',
        id_teknisi  ='$teknisi',
        laporan_kerusakan = '$laporan',
        status = '$status' WHERE id_rekap ='$id'");
    if ($sql) {
        ?>
        <script language="javascript">
            alert('Edit Data Berhasil');
            document.location='data.php';
        </script>
        <?php
    } else {
        echo "Input Silahkan Ulangi !";
    }
}

?>