<?php  
require_once ('../../login/connection.php');
if (isset($_POST['rowid'] )&& $_POST['id_rule']) {
    $id = $_POST['rowid'];
    $id_rule = $_POST['id_rule'];
    $sql = "SELECT * FROM tb_rule WHERE id_rule ='$id_rule'";
	$result = $mysqli->query($sql);
	foreach ($result as $baris) {
?>
<form role="form" action="aksiedit.php" method="post">
	<input type="hidden" name="id" value="<?=$id?>">
    <input type="hidden" name="id_rule" value="<?=$id_rule?>">
    <div class="form-group field item row" >
		<label for="nama_kategori" class="col-form-label col-md-3 col-sm-3 label-align">Nama Kasus <span class="required">*</span></label>
		<div class="col-md-6 col-sm-6">
			<select class="form-control has-feedback-left" id="rule" disabled>
                <option value="<?=$baris['id_rule']?>"><?=$baris['kode_rule']?></option>
            </select>
			<span class="fa fa-cogs form-control-feedback left" > </span>
		</div>
    </div>
    <div class="tambah_bobot">
    <?php
    $ruleGejala = mysqli_query($mysqli, "SHOW COLUMNS FROM tb_rule WHERE Field LIKE '%gejala%'");
        $tg = 1;
        while($fc = mysqli_fetch_assoc($ruleGejala)){
            $fetchCol[$tg] = $fc['Field'];
            $tg++;
        }

    $ruleBobot = mysqli_query($mysqli, "SHOW COLUMNS FROM tb_pengetahuan WHERE Field LIKE '%gejala%'");
    $th = 1;
    while($fc = mysqli_fetch_assoc($ruleBobot)){
        $fetchCol_1[$th] = $fc['Field'];
        $th++;
    }
    
    
    $jumlah = $ruleGejala->num_rows;
    for ($i=1 ;$i<=$jumlah; $i++){
    $sql_pengetahuan = mysqli_query($mysqli, "SELECT $fetchCol[$i] FROM tb_rule WHERE id_rule='$id_rule'") or die (mysql_error($mysqli));
        while ($row = mysqli_fetch_array($sql_pengetahuan)){
            if ($row[0] != NULL){
                ?>
                <div class="form-group field item row " >
                    <label for="nama_gejala<?=$i?>" class="col-form-label col-md-3 col-sm-3 label-align">Nama Gejala <?=$i?><span class="required">*</span></label>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="nama_gejala" ><?=$row[0]?></label>
                            </div>
                                <?php
                                $sql_pengetahuan = mysqli_query($mysqli, "SELECT $fetchCol_1[$i],id_pengetahuan FROM tb_pengetahuan WHERE id_pengetahuan='$id'") or die (mysql_error($mysqli));
                                while ($row_1 = mysqli_fetch_array($sql_pengetahuan)){
                                    ?>
                                    <select class="custom-select" id="bobot<?=$i?>" name="bobot<?=$i?>">
                                    <?php
                                    echo '<option value="'.$row_1[0].'">'.$row_1[0].'</option>';
                                    $sql_bobot = mysqli_query($mysqli, "SELECT * FROM tb_bobot WHERE 1 ORDER BY id_bobot ASC") or die (mysqli_error($mysqli));
                                    while ($row_2 = mysqli_fetch_array($sql_bobot)) {
                                        
                                    
                                        echo '<option value="'.$row_2['nilai_bobot'].'">'.$row_2['nilai_bobot'].'</option>';
                                    }
                                    ?>
                                    </select>
                                <?php
                                }
                                ?>
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
        
    </div>
	<div class="form-group">
	    <div class="col-md-6 offset-md-3">
        <input type="hidden" id="masuk" name="ninja" value="mbuh">
	        <button type='reset'  class="btn btn-danger" id="reset">Reset</button>
	        <button type='submit' class="btn btn-primary" id="submit">Simpan</button>
	    </div>
	</div>
</form>
<script src="../../assets/vendors/validator/multifield.js"></script>
<script src="../../assets/vendors/validator/validator.js"></script>
<script type="text/javascript">
$('#reset').click(function(){ 
    $('#nama_kasus').removeAttr('disabled');
});

// initialize a validator instance from the "FormValidator" constructor.
// A "<form>" element is optionally passed as an argument, but is not a must
var validator = new FormValidator({ "events": ['blur', 'input', 'change'] }, document.forms[0]);
// on form "submit" event
document.forms[0].onsubmit = function (e) {
    var submit = true,
    validatorResult = validator.checkAll(this);
    console.log(validatorResult);
    return !!validatorResult.valid;
};
// on form "reset" event
document.forms[0].onreset = function (e) {
    validator.reset();
};
// stuff related ONLY for this demo page:
$('.toggleValidationTooltips').change(function () {
    validator.settings.alerts = !this.checked;
    if (this.checked)
        $('form .alert').remove();
    }).prop('checked', false);
</script>
<?php  
}}
?>