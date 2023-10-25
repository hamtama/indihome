<?php  
include '../../login/connection.php';
if (isset($_POST['rowid']) && $_POST['table']) {
	$id = $_POST['rowid'];
	$table = $_POST['table'];
	if ($table == "tb_menu") {
		$sql = "SELECT * FROM $table WHERE id_menu = '$id'";
	} else {
		$sql = "SELECT * FROM $table INNER JOIN tb_menu ON tb_menu.id_menu = tb_submenu.id_menu WHERE tb_submenu.id_submenu ='$id'";
	}
	$result = $mysqli->query($sql);
	foreach ($result as $baris) {
?>
<form action="aksiedit.php" method="post" role="form">
	<?php  
	if ($table == "tb_menu") {
		?>
		<input type="hidden" id="judul" value="Edit Data Menu">
		<input type="hidden" name="tabel" value="<?=$table?>">
		<input type="hidden" name="id" value="<?=$baris['id_menu']?>">
		<div class="form-group field item row" >
			<label for="menu" class="col-form-label col-md-3 col-sm-3 label-align">Menu <span class="required">*</span></label>
			<div class="col-md-6 col-sm-6">
				<input type="text" name="menu" required="required" value="<?=$baris['menu'] ?>" class="form-control has-feedback-left">
				<span class="fa fa-bars form-control-feedback left" > </span>
			</div>
		</div>
		<div class="form-group field item row" >
			<label for="link_menu" class="col-form-label col-md-3 col-sm-3 label-align">Link <span class="required">*</span></label>
			<div class="col-md-6 col-sm-6">
				<input type="text" name="link_menu" required="required" value="<?=$baris['link_menu']?>"class="form-control has-feedback-left">
				<span class="fa fa-link form-control-feedback left" > </span>
			</div>
		</div>
		<?php
	} else {
		?>
		<input type="hidden" id="judul" value="Edit Data Submenu">
		<input type="hidden" name="tabel" value="<?=$table?>">
		<input type="hidden" name="id" value="<?=$baris['id_submenu']?>">
		<div class="form-group field item row" >
			<label for="nama_gejala" class="col-form-label col-md-3 col-sm-3 label-align">Sub Menu <span class="required">*</span></label>
			<div class="col-md-6 col-sm-6">
				<input type="text" name="submenu" required="required" value="<?=$baris['submenu'] ?>" class="form-control has-feedback-left">
				<span class="fa fa-bars form-control-feedback left" > </span>
			</div>
		</div>
		<div class="form-group field item row">
			<label for="kategori" class="col-form-label col-md-3 col-sm-3 label-align">Menu <span class="required">*</span></label>
			<div class="col-md-6 col-sm-6">
				<select class="form-control has-feedback-left" name="menu" required="">
					<option value="<?=$baris['id_menu']?>"><?=$baris['menu'] ?></option>
					<?php  
						$sql_menu = mysqli_query($mysqli, "SELECT * FROM tb_menu WHERE 1 ORDER BY id_menu ASC") or die (mysqli_error($mysqli));
						while ($row = mysqli_fetch_array($sql_menu)) {
							echo '<option value="'.$row['id_menu'].'">'.$row['menu'].'</option>
							option>';
						}
					?>
				</select>
				<span class="fa fa-list-ul form-control-feedback left"> </span>
			</div>
		</div>
		<div class="form-group field item row" >
			<label for="link_submenu" class="col-form-label col-md-3 col-sm-3 label-align">Link <span class="required">*</span></label>
			<div class="col-md-6 col-sm-6">
				<input type="text" name="link_submenu" required="required" value="<?=$baris['link_submenu']?>"class="form-control has-feedback-left">
				<span class="fa fa-link form-control-feedback left" > </span>
			</div>
		</div>
		<?php

	}
	?>
	<div class="form-group">
        <div class="col-md-6 offset-md-3">
			<button align="center" type="submit"  class="btn btn-success"><i class="fa fa-send"> Simpan</i></button>
			<button type="reset" class="btn btn-danger"><i class="fa fa-history"> Reset</i></button>
		</div>
	</div>
</form>
<script src="../../assets/vendors/validator/multifield.js"></script>
<script src="../../assets/vendors/validator/validator.js"></script>
<script type="text/javascript">


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
<?php  
}
}
?>