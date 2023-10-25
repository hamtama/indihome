<?php  
require_once ('../../login/connection.php');
if (isset($_POST['id'])) {
	$id = $_POST['id'];
?>

<form role="form" method="post" action="aksitambah.php">
    <div class="form-group field item row" >
        <label for="nama_lengkap" class="col-form-label col-md-3 col-sm-3 label-align">Nama Lengkap<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <input type="text" name="nama" required="required" class="form-control has-feedback-left">
            <span class="fa fa-cogs form-control-feedback left" > </span>
        </div>
    </div>
    <div class="form-group field item row" >
        <label for="id_provinsi" class="col-form-label col-md-3 col-sm-3 label-align">Provinsi <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <select class="form-control has-feedback-left provinsi" name="id_provinsi" >
                <option value="">-- Pilih Provinsi --</option>
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
            </select>
            <span class="fa fa-cogs form-control-feedback left" > </span>
        </div>
    </div>
    <div class="form-group field item row" >
        <label for="kelurahan" class="col-form-label col-md-3 col-sm-3 label-align">Kecamatan <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <select class="form-control has-feedback-left kecamatan" name="id_kecamatan">
            </select>
            <span class="fa fa-cogs form-control-feedback left" > </span>
        </div>
    </div>
    <div class="form-group field item row" >
        <label for="kelurahan" class="col-form-label col-md-3 col-sm-3 label-align">Kelurahan <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <select class="form-control has-feedback-left kelurahan" name="id_kelurahan">
            </select>
            <span class="fa fa-cogs form-control-feedback left" > </span>
        </div>
    </div>
	<div class="form-group field item row" >
		<label for="alamat" class="col-form-label col-md-3 col-sm-3 label-align">Alamat<span class="required">*</span></label>
		<div class="col-md-6 col-sm-6">
			<input type="text" name="alamat" required="required" class="form-control has-feedback-left">
			<span class="fa fa-cogs form-control-feedback left" > </span>
		</div>
	</div>
    <div class="form-group field item row" >
        <label for="email" class="col-form-label col-md-3 col-sm-3 label-align">Email<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <input type="email" name="email" required="required" class="form-control has-feedback-left">
            <span class="fa fa-cogs form-control-feedback left" > </span>
        </div>
    </div>
    <div class="form-group field item row" >
        <label for="no_tel" class="col-form-label col-md-3 col-sm-3 label-align">No Telepon<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <input type="number" name="no_telp" required="required" class="form-control has-feedback-left">
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
$(document).ready(function() {
    $('.kabupaten').change(function() {
        var kabupaten = $(this).val();
        $.ajax({
            type: 'POST',
            url: 'kecamatan.php',
            data: 'kabupaten='+kabupaten,
            success : function(response){
                $('.kecamatan').html(response);
            }                       
        });
    })
});
$(document).ready(function() {
    $('.kecamatan').change(function() {
        var kecamatan = $(this).val();
        console.log(kecamatan);
        $.ajax({
            type: 'POST',
            url: 'kelurahan.php',
            data: 'kecamatan='+kecamatan,
            success : function(response){
                $('.kelurahan').html(response);
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
}
?>