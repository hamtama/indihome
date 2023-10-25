<?php  
require_once ('../../login/connection.php');
if ($_POST['rowid']) {
    $id = $_POST['rowid'];
    $sql = "SELECT * FROM tb_kabupaten INNER JOIN tb_provinsi ON tb_provinsi.id_provinsi=tb_kabupaten.id_provinsi WHERE id_kabupaten ='$id'";
    $result = $mysqli->query($sql);
    foreach ($result as $baris) {
?>

<form role="form" method="post" action="aksiedit.php">
	<div class="form-group field item row" >
        <label for="id_provinsi" class="col-form-label col-md-3 col-sm-3 label-align">Provinsi <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <select class="form-control has-feedback-left" name="id_provinsi" id="id_provinsi">
                <option value="<?=$baris['id_provinsi']?>"><?=$baris['nama_provinsi']?></option>
                <?php  
                    $sql_provinsi = mysqli_query($mysqli, "SELECT * FROM tb_provinsi WHERE 1 ORDER BY kode_provinsi ASC") or die (mysqli_error($mysqli));
                    while ($row = mysqli_fetch_array($sql_provinsi)) {
                        echo '<option value="'.$row['id_provinsi'].'">'.$row['nama_provinsi'].'</option>
                        option>';
                    }
                ?>
            </select>
            <span class="fa fa-cogs form-control-feedback left" > </span>
        </div>
    </div>
    <div class="form-group field item row" >
		<label for="kode_kabupaten" class="col-form-label col-md-3 col-sm-3 label-align">Kode Kabupaten<span class="required">*</span></label>
		<div class="col-md-6 col-sm-6">
            <input type="hidden" name="id" value="<?=$baris['id_kabupaten'] ?>">
			<input type="number" name="kode_kabupaten" required="required" class="form-control has-feedback-left" value="<?=$baris['kode_kabupaten']?>">
			<span class="fa fa-cogs form-control-feedback left" > </span>
		</div>
	</div>
    <div class="form-group field item row" >
        <label for="nama_kabupaten" class="col-form-label col-md-3 col-sm-3 label-align">Nama Kabupaten<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <input type="text" name="nama_kabupaten" required="required" class="form-control has-feedback-left" value="<?=$baris['nama_kabupaten']?>">
            <span class="fa fa-cogs form-control-feedback left" > </span>
        </div>
    </div>
	<div class="form-group">
	    <div class="col-md-6 offset-md-3">
	        <button type='reset'  class="btn btn-danger">Reset</button>
	        <button type='submit' class="btn btn-primary">Simpan</button>
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