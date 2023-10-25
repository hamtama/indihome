<?php
require_once ('../../login/connection.php');
$rule = $_POST['rule'];
$ruleGejala = mysqli_query($mysqli, "SHOW COLUMNS FROM tb_rule WHERE Field LIKE '%gejala%'");
    $tg = 1;
    while($fc = mysqli_fetch_assoc($ruleGejala)){
        $fetchCol[$tg] = $fc['Field'];
        $tg++;
    }
$jumlah = $ruleGejala->num_rows;
for ($i=1 ;$i<=$jumlah; $i++){
$sql_rule = mysqli_query($mysqli, "SELECT $fetchCol[$i] FROM tb_rule WHERE id_rule='$rule'") or die (mysql_error($mysqli));
    while ($row = mysqli_fetch_array($sql_rule)){
        if ($row[0] != NULL){
            ?>
            <div class="form-group field item row " >
                <label for="nama_gejala<?=$i?>" class="col-form-label col-md-3 col-sm-3 label-align">Nama Gejala <?=$i?><span class="required">*</span></label>
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="nama_gejala" ><?=$row[0]?></label>
                        </div>
                            <select class="custom-select" id="bobot<?=$i?>" name="bobot<?=$i?>">
                            <?php
                            $sql_bobot = mysqli_query($mysqli, "SELECT * FROM tb_bobot WHERE 1 ORDER BY id_bobot ASC") or die (mysqli_error($mysqli));
                            while ($row_2 = mysqli_fetch_array($sql_bobot)) {
                                echo '<option value="'.$row_2['nilai_bobot'].'">'.$row_2['status_bobot'].'</option>';
                            }
                            ?>
                            </select>
                    </div>
                </div>
            </div>
            <?php
        } else {
            echo '<input type="hidden" name="bobot'.$i.'" value="0">';
        }
   }
}
?>                
          