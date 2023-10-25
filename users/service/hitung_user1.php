<?php  
require_once ('../../login/connection.php');
if(isset($_POST['kera'])){
$cf = array();
$nilaiCF = array();
$datauser = array();
$resdiagnosa = array();
$id_rule  = $_POST['id_rule'];

$kategori = mysqli_query($mysqli, "SELECT * FROM tb_rule_user WHERE id_rule_user='$id_rule'");
$id_kategori = "";
while ($row = mysqli_fetch_array($kategori)) {
    $id_kategori = $row['id_kategori'];
}

$ruleGejala_2 = mysqli_query($mysqli, "SHOW COLUMNS FROM tb_pengetahuan_user WHERE Field LIKE '%gejala%'");
    $th = 1;
    while($fc_2 = mysqli_fetch_assoc($ruleGejala_2)){
        $fetchCol_2[$th] = $fc_2['Field'];
        $th++;
    }

$ruleGejala = mysqli_query($mysqli, "SHOW COLUMNS FROM tb_rule_user WHERE Field LIKE '%gejala%'");
$tg = 1;
while($fc = mysqli_fetch_assoc($ruleGejala)){
    $fetchCol[$tg] = $fc['Field'];
    $tg++;
}
// $cf['namauser'] = 'teguh';
$maxgejala = $ruleGejala->num_rows;
for ($i=1 ;$i<=$maxgejala; $i++){
$sql_rule = mysqli_query($mysqli, "SELECT $fetchCol[$i] FROM tb_rule_user WHERE id_rule_user='$id_rule'") or die (mysql_error($mysqli));
   
    while ($row = mysqli_fetch_array($sql_rule)){
        if ($row[0] != NULL){
            $cf['G'.$i]['gejala'] = $row[0]; 
        } else {
            $cf['G'.$i]['gejala'] = 0;
        }
    }
}

for ($i=1 ;$i<=sizeof($cf); $i++){
    $id[$i] = $cf['G'.$i]['gejala'];
    if ($id[$i] != NULL){
        $querybobot = $mysqli->query("SELECT * FROM tb_gejala_user JOIN tb_bobot ON tb_bobot.id_bobot = tb_gejala_user.id_bobot WHERE kode_gejala_user = '$id[$i]' AND id_kategori = '$id_kategori'");
        while ($q = mysqli_fetch_array($querybobot)){
                $cf['G'.$i]['kode_gejala'] = $q[1];
                $cf['G'.$i]['gejala'] = $q[2];
                $cf['G'.$i]['nilai_bobot'] = $q[6];
                $cf['G'.$i]['status_bobot'] = $q[7];
        }
    } else {
        $cf['G'.$i]['nilai_bobot'] = 0;
    }
}
// print_r($cf);
$sql  = mysqli_query($mysqli, "SELECT * FROM tb_gejala_user");
$jumlah = mysqli_num_rows($sql);
$cf['namauser'] = $_POST['no_internet'];
$maxgejala = $ruleGejala->num_rows;
for ($i=1 ;$i<=$maxgejala; $i++){
    $cf['bobotuser']['G'.$i] = $_POST['gejala'.$i];
}

$query_kasus = $mysqli->query("SELECT * FROM tb_rule_user WHERE id_rule_user='$id_rule'");
$o = 1;
while ($qq = mysqli_fetch_array($query_kasus)){
    $cf['R'.$o]['kode_rule'] = $qq[1];
    $resdiagnosa['Rule'.$o]['kode_rule'] = $qq[1];
    for($i=1; $i<=$maxgejala; $i++){
        $cf['R'.$o]['gejala'.$i] = $qq[($i+1)];
    }
    $cf['R'.$o]['id_kasus'] = $qq[10];
    $resdiagnosa['Rule'.$o]['id_kasus'] = $qq[10];
    $resdiagnosa['Rule'.$o]['kera'] = $_POST['kera'];
    $o++;
}

$jumlah_kasus = $query_kasus->num_rows;
    for($i=1; $i<=$jumlah_kasus; $i++){
        $cf['Rule'.$i] = count(array_filter($cf['R'.$i], function($x) { return !empty($x); })) - 2;
}

// hitung cf[H,E]
for ($i =1; $i <= sizeof($cf['bobotuser']); $i++){
        $nilaiCF['G'.$i]['nilaiHE'] = $cf['G'.$i]['nilai_bobot']*$cf['bobotuser']['G'.$i];
        // echo "nilaiCF['Combine'".$i."] = ".$cf['G'.$i]['nilai_bobot']." x ".$cf['bobotuser']['G'.$i]." ";
    }   
// print_r($nilaiCF);


$myQuery = array();
$tesQuery = "SELECT ";
for($i=1; $i<=$maxgejala; $i++){
    $tesQuery .= $fetchCol[$i];
    if($i != $maxgejala){
        $tesQuery .= ", ";
    }
}
$tesQuery .= " FROM tb_rule_user WHERE ";
// echo "<br><br>";
//hitung nilai CF Kombinasi
$xyz = 1;
for ($i=1; $i <= $jumlah_kasus; $i++){
    $myQuery[$i] = $tesQuery."kode_rule_user = '".$cf['R'.$i]['kode_rule']."'";
    $gQue = mysqli_query($mysqli, $myQuery[$i]);
    while($qg = mysqli_fetch_assoc($gQue)){
        for($j=1; $j <= $cf['Rule'.$i]; $j++){
            
            if($j == 1){
                
                
                $nilaiCF['Combine'.$xyz] = $nilaiCF['G'.$j]['nilaiHE'] + $nilaiCF['G'.($j+1)]['nilaiHE'] * (1 - $nilaiCF['G'.$j]['nilaiHE']);
                $resdiagnosa['Rule'.$i]['persentase'] = $nilaiCF['Combine'.$xyz]*100;
                // echo "nilaiCF['Combine'".$xyz."] = ".$nilaiCF['G'.$j]['nilaiHE']." + ".$nilaiCF['G'.($j+1)]['nilaiHE']." x (1 - ".$nilaiCF['G'.$j]['nilaiHE'].")";
                // echo "<br>   resdiagnosa['Rule'".$i."]['persentase'] = ".$nilaiCF['Combine'.$xyz]." x 100";
                $xyz++;
            } else if ($j == $cf['Rule'.$i]){
                break;
            } else {
                $nilaiCF['Combine'.$xyz] = $nilaiCF['Combine'.($xyz-1)] + $nilaiCF['G'.($j+1)]['nilaiHE'] * (1 - $nilaiCF['Combine'.($xyz-1)]);
                $resdiagnosa['Rule'.$i]['persentase']= $nilaiCF['Combine'.$xyz]*100;
                // echo "nilaiCF['Combine'".$xyz."] = ".$nilaiCF['Combine'.($xyz-1)]." + ".$nilaiCF['G'.($j+1)]['nilaiHE']." x (1 - ".$nilaiCF['Combine'.($xyz-1)].")";
                // echo "<br>resdiagnosa['Rule'".$i."]['persentase']= ".$nilaiCF['Combine'.$xyz]." x 100";
                $xyz++;
                // echo $j;
            }
            // echo $cf['Rule'.$i];
            // echo "<br>";
        }
    }
    // echo $myQuery[$i]."<br>";
}

usort($resdiagnosa, function($item2, $item1){
        $retval = $item1['persentase'] <=> $item2['persentase'];
        if ($retval == 0){
            $retval = $item1['kode_rule'] <=> $item2['kode_rule'];
            if ($retval == 0) {
                $retval = $item1['id_kasus'] <=> $item2['id_kasus'];
            }
        }
        return $retval;
    });
if ($resdiagnosa[0]['persentase'] == 0){
         ?>
            <script>
                alert('Data Kosong Silahkan Pilih Gejala Terlebih Dahulu !!!');
                window.location = 'konsultasi.php';
             </script>
         <?php
    }

}

