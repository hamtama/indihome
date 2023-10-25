    <?php  
require_once ('../../login/connection.php');
if (isset($_POST['id'])) {
	$id = $_POST['id'];
?>
<form role="form" action="aksitambah.php" method="post" name="add_name" id="add_name">
	<div class="form-group field item row" >
		<label for="nama_kategori" class="col-form-label col-md-3 col-sm-3 label-align">Nama Kasus <span class="required">*</span></label>
		<div class="col-md-6 col-sm-6">
			<select class="form-control has-feedback-left" name="id_rule" id="rule">
                <option value="">-- Pilih Rule --</option>
                <?php  
                    $sql_rule = mysqli_query($mysqli, "SELECT * FROM tb_rule WHERE 1 ORDER BY kode_rule ASC") or die (mysqli_error($mysqli));
                    while ($row = mysqli_fetch_array($sql_rule)) {
                        echo '<option value="'.$row['id_rule'].'">'.$row['kode_rule'].'</option>
                        option>';
                    }
                ?>
            </select>
			<span class="fa fa-cogs form-control-feedback left" > </span>
		</div>
    </div>
    <div class="tambah_bobot">
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
$(document).ready(function() {
    $('#rule').change(function() {
        var rule = $(this).val();
        console.log(rule);
        $.ajax({
            type: 'POST',
            url : 'gejala.php',
            data: 'rule='+rule,
            success : function(response){
                $('.tambah_bobot').html(response);//menampilkan data ke dalam modal
            }
        }); 
    });
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
}
?>