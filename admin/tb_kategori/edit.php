<?php 
require_once '../../login/connection.php';
if ($_POST['rowid']) {
	$id = $_POST['rowid'];
	$sql = "SELECT * FROM tb_kategori WHERE id_kategori ='$id'";
	$result = $mysqli->query($sql);
	foreach ($result as $baris) {
	?>
	<form action="aksiedit.php" method="post" role="form">
		<div class="form-group field item row" >
			<input type="hidden" name="id" value="<?php echo $baris['id_kategori'] ?>">
			<label for="nama_kategori" class="col-form-label col-md-3 col-sm-3 label-align">Nama Kategori <span class="required">*</span></label>
			<div class="col-md-6 col-sm-6">
				<input type="text" name="nama_kategori" value="<?php echo $baris['kategori'] ?>" required="required" class="form-control has-feedback-left">
				<span class="fa fa-cubes form-control-feedback left" > </span>
			</div>
		</div>
		
        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <button type='reset'  class="btn btn-danger">Reset</button>
                <button type='submit' class="btn btn-primary">Edit Data</button>
            </div>
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
    </script>
    <?php
	}
}
?>	