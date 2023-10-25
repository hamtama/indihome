<h4 align="center">Data Gejala Yang Anda Pilih</h4>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Kode Gejala</th>
            <th scope="col">Gejala</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>


        <?php 

$kx = 1;
for ($i=1; $i <= sizeof($cf['bobotuser']); $i++){
    if($i < 10){
       if($cf['bobotuser']['G0'.$i] != 0){
           echo "
            <tr>
                <th scope=\"row\">".$kx."</th>
                <td>".$cf['G0'.$i]['kode_gejala']."</td>
                <td>".$cf['G0'.$i]['gejala']."</td>
                <td>".$cf['bobotuser']['G0'.$i]."</td>
            </tr>";
            $gejala[] = $cf['G0'.$i]['kode_gejala'];
            $bobot[] = $cf['bobotuser']['G0'.$i];
        }
    } else {
        if($cf['bobotuser']['G'.$i] != 0){
            echo "
            <tr>
                <th scope=\"row\">".$kx."</th>
                <td>".$cf['G'.$i]['kode_gejala']."</td>
                <td>".$cf['G'.$i]['gejala']."</td>
                <td>".$cf['bobotuser']['G'.$i]."</td>

            </tr>";
            $gejala[] = $cf['G'.$i]['kode_gejala'];
            $bobot[] = $cf['bobotuser']['G'.$i];
        }
    }
    $kx++;
}
foreach ($gejala as $gejala) {$k_gejala[] = $gejala.'';}
foreach ($bobot as $bobot) {$n_bobot[] = $bobot.'';}
?>
</tbody>
</table>
 

<div id="accordion" >
<?php 
echo sizeof($resdiagnosa);
for ($i=0; $i < sizeof($resdiagnosa); $i++){
    if($resdiagnosa[$i]['persentase'] != 0){
        if ($i==0 ){
            $kode = $resdiagnosa[0]['kode_rule'];
            $persen_user = $resdiagnosa[0]['persentase'];
            $query = $mysqli->query("SELECT * FROM tb_rule INNER JOIN tb_kasus ON tb_kasus.id_kasus = tb_rule.id_kasus WHERE kode_rule = '$kode'");
            foreach ($query as $baris) {
                $id_kasus = $baris['id_kasus'];
                $id_rule = $baris['id_rule'];
            ?>
            
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                aria-controls="collapseOne">
                                 <?=$baris['kasus']?>
                            </button>
                        </h5>
                    </div>
                
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body col-lg-12">
                            <h4>Nilai Persentase User: <?=round($persen_user,2)?>% </h4> 
                            <div class="col-lg-6">
                                <div class="card" style="max-width: 100%;">
                                    <div class="card-header bg-info text-white">
                                        Data Pengetahuan Pakar
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Kode Gejala</th>
                                                    <th scope="col">Nilai Pakar</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php  
                                                
                                                for ($j=1 ;$j<=$maxgejala; $j++){
                                                    $sql_g = $mysqli->query("SELECT $fetchCol[$j] FROM tb_rule WHERE id_rule = '$id_rule'");
                                                    while($row_g = mysqli_fetch_array($sql_g)){
                                                        if ($row_g[0] != NULL){
                                                            echo '<tr><td>'.$row_g[0].'</td>';
                                                        }
                                                        $sql_pakar = $mysqli->query("SELECT `$fetchCol_2[$j]`,MAX(presentase) FROM tb_pengetahuan WHERE id_rule = '$id_rule'");
                                                        while($row_p = mysqli_fetch_array($sql_pakar)){
                                                            $persen = $row_p[1];
                                                            if ($row_p[0] != 0){
                                                                echo '<td>'.$row_p[0].'</td></tr>';
                                                            }
                                                        }
                                                    }
                                                }
                                                echo '<tr><td>Persentase</td>';
                                                echo '<td>'.round($persen,2).'%</td></tr>';
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card" style="max-width: 100%;">
                                    <div class="card-header bg-info text-white">
                                        Data Input User
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Kode Gejala</th>
                                                    <th scope="col">Nilai User</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php  

                                                
                                                // print_r($k_gejala);
                                                for ($j=1 ;$j<=$maxgejala; $j++){
                                                    $sql_g = $mysqli->query("SELECT $fetchCol[$j] FROM tb_rule WHERE id_rule = '$id_rule'");
                                                    while($row_g = mysqli_fetch_array($sql_g)){
                                                        if ($row_g[0] != NULL){
                                                            echo '<tr><td>'.$row_g[0].'</td>';
                                                            $x = $row_g[0];
                                                            $k_gejala[] = $x;
                                                            $index = 0;
                                                            while ($k_gejala[$index++] != $x);
                                                              
                                                            if ($index < count($k_gejala)) {
                                                                echo '<td>'.$n_bobot[$index - 1].'</td></tr>';
                                                                // echo "The value $x found on position " . ($index - 1) . "!";
                                                            } else {
                                                                echo '<td>0</td></tr>';
                                                            }
                                                        }

                                                    }
                                                }
                                                echo '<tr><td>Persentase</td>';
                                                echo '<td>'.round($persen_user,2).'%</td></tr>';
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card text-white bg-info">
                            <div class="card-header">Solution</div>
                            <div class="card-body">
                                <?php  
                                    $sql_solusi = $mysqli->query("SELECT * FROM tb_solusi WHERE id_kasus = '$id_kasus'");
                                    foreach ($sql_solusi as $row) {
                                        echo '<p class="card-text">'.$row['solusi'].'</p>';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

            
            <?php 
            }
        } else {
                $kode = $resdiagnosa[$i]['kode_rule'];
                $persen_user = $resdiagnosa[$i]['persentase'];
                $query = $mysqli->query("SELECT * FROM tb_rule INNER JOIN tb_kasus ON tb_kasus.id_kasus = tb_rule.id_kasus WHERE kode_rule = '$kode'");
                foreach ($query as $baris) {
                    $id_kasus = $baris['id_kasus'];
                $id_rule = $baris['id_rule'];
            ?>
            
                <div class="card">
                    <div class="card-header" id="heading<?=$i?>">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse<?=$i?>" aria-expanded="false" aria-controls="collapse<?=$i?>">
                            <?=$baris['kasus']?>
                            </button>
                        </h5>
                    </div>
                    <div id="collapse<?=$i?>" class="collapse" aria-labelledby="heading<?=$i?>" data-parent="#accordion">
                        <div class="card-body col-lg-12">
                            <h4>Nilai Persentase User: <?=round($persen_user,2)?>% </h4> 
                            <div class="col-lg-6">
                                <div class="card" style="max-width: 100%;">
                                    <div class="card-header bg-info text-white">
                                        Data Pengetahuan Pakar
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Kode Gejala</th>
                                                    <th scope="col">Nilai Pakar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php  
                                                for ($j=1 ;$j<=$maxgejala; $j++){
                                                    $sql_g = $mysqli->query("SELECT $fetchCol[$j] FROM tb_rule WHERE id_rule = '$id_rule'");
                                                    while($row_g = mysqli_fetch_array($sql_g)){
                                                        if ($row_g[0] != NULL){
                                                            echo '<tr><td>'.$row_g[0].'</td>';
                                                        }
                                                        $sql_pakar = $mysqli->query("SELECT `$fetchCol_2[$j]`,MAX(presentase) FROM tb_pengetahuan WHERE id_rule = '$id_rule'");
                                                        while($row_p = mysqli_fetch_array($sql_pakar)){
                                                            $persen = $row_p[1];
                                                            if ($row_p[0] != 0){
                                                                echo '<td>'.$row_p[0].'</td></tr>';
                                                            }
                                                        }
                                                    }
                                                }
                                                echo '<tr><td>Persentase</td>';
                                                echo '<td>'.round($persen,2).'%</td></tr>';
                                                ?> 
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card" style="max-width: 100%;">
                                    <div class="card-header bg-info text-white">
                                        Data Input User
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Kode Gejala</th>
                                                    <th scope="col">Nilai User</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php  

                                               
                                                for ($j=1 ;$j<=$maxgejala; $j++){
                                                    $sql_g = $mysqli->query("SELECT $fetchCol[$j] FROM tb_rule WHERE id_rule = '$id_rule'");
                                                    while($row_g = mysqli_fetch_array($sql_g)){
                                                        if ($row_g[0] != NULL){
                                                            echo '<tr><td>'.$row_g[0].'</td>';
                                                            $x = $row_g[0];
                                                            $k_gejala[] = $x;
                                                            $index = 0;
                                                            while ($k_gejala[$index++] != $x);
                                                              
                                                            if ($index < count($k_gejala)) {
                                                                echo '<td>'.$n_bobot[$index - 1].'</td></tr>';
                                                                // echo "The value $x found on position " . ($index - 1) . "!";
                                                            } else {
                                                                echo '<td>0</td></tr>';
                                                            }
                                                        }

                                                    }
                                                }
                                                echo '<tr><td>Persentase</td>';
                                                echo '<td>'.round($persen_user,2).'%</td></tr>';
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card text-white bg-info">
                            <div class="card-header">Solution</div>
                            <div class="card-body">
                                <?php  
                                    $sql_solusi = $mysqli->query("SELECT * FROM tb_solusi WHERE id_kasus = '$id_kasus'");
                                    foreach ($sql_solusi as $row) {
                                        echo '<p class="card-text">'.$row['solusi'].'</p>';
                                    }
                                ?>
                            </div>
                        </div>   
                    </div>
                </div>
                
            
        <?php 
                }
        }
    }
    
}

?> 
</div>

 