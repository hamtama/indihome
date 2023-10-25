<?php  
require_once ('../../login/connection.php');
if (isset($_POST['rowid'])) {
	$id = $_POST['rowid'];
	$sql = "SELECT * FROM tb_solusi 
	INNER JOIN tb_kasus ON tb_kasus.id_kasus = tb_solusi.id_kasus WHERE id_solusi ='$id'";
	$result = $mysqli->query($sql);
	foreach ($result as $baris) {
?>
<form role="form" method="post" action="aksiedit.php">
	<input type="hidden" name="id" value="<?=$id?>">
	<div class="form-group field item row">
		<label for="kasus" class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kasus <span class="required">*</span></label>
		<div class="col-md-6 col-sm-6">
			<select class="form-control has-feedback-left" name="kasus" required>
				<option value="<?=$baris['id_solusi']?>">(<?=$baris['kode_kasus']?>) <?=$baris['kasus']?></option>
				<?php  
					$sql_kasus = mysqli_query($mysqli, "SELECT * FROM tb_kasus WHERE 1 ORDER BY id_kasus ASC") or die (mysqli_error($mysqli));
					while ($row = mysqli_fetch_array($sql_kasus)) {
						echo '<option value="'.$row['id_kasus'].'">('.$row['kode_kasus'].') '.$row['kasus'].'</option>
						option>';
					}
				?>
			</select>
			<span class="fa fa-list-ul form-control-feedback left"> </span>
		</div>
	</div>
	
	<div class="form-group field item row" >
		<label for="nama_gejala" class="col-form-label col-md-3 col-sm-3 label-align">Solusi <span class="required">*</span></label>
		<div class="col-md-6 col-sm-6">
			<textarea class="form-control" name="solusi" id="" cols="30" rows="5"><?=$baris['solusi']?></textarea>
		</div>
	</div>
	<div class="form-group">
        <div class="col-md-6 offset-md-3">
			<button align="center" type="submit"  class="btn btn-success"><i class="fa fa-send"> Simpan</i></button>
			<button type="reset" class="btn btn-danger"><i class="fa fa-history"> Reset</i></button>
		</div>
	</div>
	
</form>

<script src="../../assets/vendors/validator/multifield.js"></script>
<script src="../../assets/vendors/validator/validator.js"></script>
<script>
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
}
?>