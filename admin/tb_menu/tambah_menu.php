<?php  
if (isset($_POST['id'])) {
	$id = $_POST['id'];
?>
<form action="aksitambah_menu.php" method="post" role="form">
	<input type="hidden" id="judul" value="Tambah Data Menu">
	<div class="form-group field item row" >
		<label for="menu" class="col-form-label col-md-3 col-sm-3 label-align">Menu <span class="required">*</span></label>
		<div class="col-md-6 col-sm-6">
			<input type="text" name="menu" required="required" class="form-control has-feedback-left">
			<span class="fa fa-bars form-control-feedback left" > </span>
		</div>
	</div>
	<div class="form-group field item row" >
		<label for="link" class="col-form-label col-md-3 col-sm-3 label-align">Link <span class="required">*</span></label>
		<div class="col-md-6 col-sm-6">
			<input type="text" name="link" required="required" class="form-control has-feedback-left">
			<span class="fa fa-link form-control-feedback left" > </span>
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
?>