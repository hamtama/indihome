<?php  
require_once ('../../login/connection.php');
if ($_POST['rowid']) {
    $id = $_POST['rowid'];
    $sql = "SELECT * FROM tb_kecamatan
    LEFT JOIN tb_provinsi ON tb_kecamatan.id_provinsi = tb_provinsi.id_provinsi
    LEFT JOIN tb_kabupaten ON tb_kecamatan.id_kabupaten = tb_kabupaten.id_kabupaten WHERE id_kecamatan ='$id'";
    $result = $mysqli->query($sql);
    foreach ($result as $baris) {
?>

<form role="form" method="post" action="aksiedit.php">
    <input type="hidden" name="id" value="<?=$baris['id_kecamatan']?>">
    <div class="form-group field item row" >
        <label for="id_provinsi" class="col-form-label col-md-3 col-sm-3 label-align">Provinsi <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <select class="form-control has-feedback-left provinsi" name="id_provinsi" >
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
        <label for="kabupaten" class="col-form-label col-md-3 col-sm-3 label-align">Kabupaten <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <select class="form-control has-feedback-left kabupaten" name="id_kabupaten">
                <option value="<?=$baris['id_kabupaten']?>"><?=$baris['nama_kabupaten']?></option>
                <option></option>
            
            </select>
            <span class="fa fa-cogs form-control-feedback left" > </span>
        </div>
    </div>
	<div class="form-group field item row" >
		<label for="kode_kecamatan" class="col-form-label col-md-3 col-sm-3 label-align">Kode Kecamatan<span class="required">*</span></label>
		<div class="col-md-6 col-sm-6">
			<input type="number" name="kode_kecamatan" required="required" class="form-control has-feedback-left" value="<?=$baris['kode_kecamatan']?>">
			<span class="fa fa-cogs form-control-feedback left" > </span>
		</div>
	</div>
    <div class="form-group field item row" >
        <label for="nama_kecamatan" class="col-form-label col-md-3 col-sm-3 label-align">Nama Kecamatan<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <input type="text" name="nama_kecamatan" required="required" class="form-control has-feedback-left" value="<?=$baris['nama_kecamatan']?>">
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
$(document).ready(function() {
    $('.provinsi').change(function() {
        var provinsi = $(this).val();
        console.log(provinsi);
        $.ajax({
            type: 'POST',
            url: 'kabupaten.php',
            data: 'provinsi='+provinsi,
            success : function(response){
                $('.kabupaten').html(response);
            }                       
        });
    })
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