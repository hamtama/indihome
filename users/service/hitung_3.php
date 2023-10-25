<?php
if(isset($_POST['ninja'])){
    $cf = array();
    $nilaiCF = array();
    $datauser = array();
    $resdiagnosa = array();
    
    $ruleGejala = mysqli_query($mysqli, "SHOW COLUMNS FROM tb_rule WHERE Field LIKE '%gejala%'");
    $tg = 1;
    while($fc = mysqli_fetch_assoc($ruleGejala)){
        $fetchCol[$tg] = $fc['Field'];
        $tg++;
    }

    $ruleGejala_2 = mysqli_query($mysqli, "SHOW COLUMNS FROM tb_pengetahuan WHERE Field LIKE '%gejala%'");
    $th = 1;
    while($fc_2 = mysqli_fetch_assoc($ruleGejala_2)){
        $fetchCol_2[$th] = $fc_2['Field'];
        $th++;
    }

    $sql  = mysqli_query($mysqli, "SELECT * FROM tb_gejala WHERE id_kategori = '4'");
    $jumlah = mysqli_num_rows($sql);
    $cf['namauser'] = $_POST['no_internet'];
    
    $maxgejala = $ruleGejala->num_rows;
    for ($i=1 ;$i<=$jumlah; $i++){
        if($i < 10){
            $cf['bobotuser']['G0'.$i] = $_POST['gejala'.$i];
        } else {
            $cf['bobotuser']['G'.$i] = $_POST['gejala'.$i];
        }
    }
    // print_r($cf['bobotuser']);
    $querybobot = $mysqli->query("SELECT * FROM tb_gejala JOIN tb_bobot ON tb_bobot.id_bobot = tb_gejala.id_bobot WHERE id_kategori = '4' ORDER BY id_gejala ASC ");
    $p = 1;
    while ($q = mysqli_fetch_array($querybobot)){
        if($p < 10){
            $cf['G0'.$p]['kode_gejala'] = $q[1];
            $cf['G0'.$p]['gejala'] = $q[2];
            $cf['G0'.$p]['nilai_bobot'] = $q[6];
            $cf['G0'.$p]['status_bobot'] = $q[7];
        } else {
            $cf['G'.$p]['kode_gejala'] = $q[1];
            $cf['G'.$p]['gejala'] = $q[2];
            $cf['G'.$p]['nilai_bobot'] = $q[6];
            $cf['G'.$p]['status_bobot'] = $q[7];
        }
        $p++;
    }
    // print_r($cf);
    
    
    $jumlah_gejala = $querybobot->num_rows;
    
    $query_kasus = $mysqli->query("SELECT * FROM tb_rule WHERE id_kategori='4'");
    $o = 1;
    while ($qq = mysqli_fetch_array($query_kasus)){
        $cf['R'.$o]['kode_rule'] = $qq[1];
        $resdiagnosa['Rule'.$o]['kode_rule'] = $qq[1];
        for($i=2; $i<=$maxgejala; $i++){
            $cf['R'.$o]['gejala'.$i] = $qq[($i+1)];
        }
        $cf['R'.$o]['id_kasus'] = $qq[10];
        $resdiagnosa['Rule'.$o]['id_kasus'] = $qq[10];
        $resdiagnosa['Rule'.$o]['ninja'] = $_POST['ninja'];
        $o++;
    }
    // print_r($cf);
    $jumlah_kasus = $query_kasus->num_rows;
    for($i=1; $i<=$jumlah_kasus; $i++){
        if($i < 10){
           $cf['Rule'.$i] = count(array_filter($cf['R'.$i], function($x) { return !empty($x); })) - 2;
        } else {
           $cf['Rule'.$i] = count(array_filter($cf['R'.$i], function($x) { return !empty($x); })) - 2;
        }
    }
    // echo "Nilai Hitung CF Data Pakar dan Data User","\n";
    // hitung cf[H,E]
    for ($i =1; $i <= sizeof($cf['bobotuser']); $i++){
        if($i < 10){
            $nilaiCF['G0'.$i]['nilaiHE'] = $cf['G0'.$i]['nilai_bobot']*$cf['bobotuser']['G0'.$i];
            // echo "nilai G".$i." = ".$cf['G0'.$i]['nilai_bobot']."*".$cf['bobotuser']['G0'.$i]." = ".$nilaiCF['G0'.$i]['nilaiHE']."\n";
        } else {
            $nilaiCF['G'.$i]['nilaiHE'] = $cf['G'.$i]['nilai_bobot']*$cf['bobotuser']['G'.$i];
            // echo "nilai G".$i." = ".$cf['G'.$i]['nilai_bobot']."*".$cf['bobotuser']['G'.$i]." = ".$nilaiCF['G'.$i]['nilaiHE']."\n";
        }
    }
    // print_r($cf['bobotuser']['G01']);
    
    
    $myQuery = array();
    $tesQuery = "SELECT ";
    for($i=1; $i<=$maxgejala; $i++){
        $tesQuery .= $fetchCol[$i];
        if($i != $maxgejala){
            $tesQuery .= ", ";
        }
    }
    $tesQuery .= " FROM tb_rule WHERE ";
    // echo "<br><br>";
    // echo "hitung nilai CF Kombinasi","\n";
    $xyz = 1;
    for ($i=1; $i <= $jumlah_kasus; $i++){
        $myQuery[$i] = $tesQuery."kode_rule = '".$cf['R'.$i]['kode_rule']."' AND id_kategori ='4'";
        $gQue = mysqli_query($mysqli, $myQuery[$i]);
        while($qg = mysqli_fetch_assoc($gQue)){
            for($j=1; $j <= $cf['Rule'.$i]; $j++){
                if($j == 1){
                    $nilaiCF['Combine'.$xyz] = $nilaiCF[$qg[$fetchCol[$j]]]['nilaiHE'] + $nilaiCF[$qg[$fetchCol[($j+1)]]]['nilaiHE'] * (1 - $nilaiCF[$qg[$fetchCol[$j]]]['nilaiHE']);
                    $resdiagnosa['Rule'.$i]['persentase'] = $nilaiCF['Combine'.$xyz]*100;
                    // echo "nilaiCF Combine".$xyz."] = ".$nilaiCF[$qg[$fetchCol[$j]]]['nilaiHE']." + ".$nilaiCF[$qg[$fetchCol[($j+1)]]]['nilaiHE']." x (1 - ".$nilaiCF[$qg[$fetchCol[$j]]]['nilaiHE'].") = ".$nilaiCF['Combine'.$xyz]."\n";
                    // echo "<br>   resdiagnosa['Rule'".$i."]['persentase'] = ".$nilaiCF['Combine'.$xyz]." x 100";
                    // echo $nilaiCF['Combine'.$xyz];
                    // echo $resdiagnosa['Rule'.$i]['persentase'],"\n";
                    $xyz++;
                } else if ($j == $cf['Rule'.$i]){
                    break;
                } else {
                    $nilaiCF['Combine'.$xyz] = $nilaiCF['Combine'.($xyz-1)] + $nilaiCF[$qg[$fetchCol[($j+1)]]]['nilaiHE'] * (1 - $nilaiCF['Combine'.($xyz-1)]);
                    $resdiagnosa['Rule'.$i]['persentase']= $nilaiCF['Combine'.$xyz]*100;
                    // echo "nilaiCF['Combine'".$xyz."] = ".$nilaiCF['Combine'.($xyz-1)]." + ".$nilaiCF[$qg[$fetchCol[($j+1)]]]['nilaiHE']." x (1 - ".$nilaiCF['Combine'.($xyz-1)].") = ".$nilaiCF['Combine'.$xyz]."\n";
                    // echo "<br>resdiagnosa['Rule'".$i."]['persentase']= ".$nilaiCF['Combine'.$xyz]." x 100";
                    // echo $resdiagnosa['Rule'.$i]['persentase'],"\n";
                    $xyz++;
                    // echo $j;
                }
                // echo $cf['Rule'.$i];
                // echo "<br>";
            }
        }
        // echo $myQuery[$i]."<br>";
    }
    // print_r($resdiagnosa);
    
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
    // $_SESSION['mydata'] = $resdiagnosa[0]['persentase'];
    // $data_user = '';
    // for($i=1; $i<=$jumlah_gejala; $i++){
    // 	$data_user .= $cf['bobotuser']['K'.$i];
    // 	if($i != $jumlah_gejala){
    // 		$data_user .= ', ';
    // 	}
    // }
    

    // print_r ($resd);
    // 	$insertdata = mysqli_query($mysqli, "INSERT INTO tb_diagnosa VALUES (NULL, '".$cf['namauser']."', '".$data_user."','".$resdiagnosa[0]['kode_kasus']."','".$resdiagnosa[0]['persentase']."') ");
    }
?> 