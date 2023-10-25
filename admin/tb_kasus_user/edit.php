<?php 
require_once '../../login/connection.php';
if ($_POST['rowid']) {
	$id = $_POST['rowid'];
	$sql = "SELECT * FROM tb_kasus_user
            INNER JOIN tb_kategori ON tb_kasus_user.id_kategori = tb_kategori.id_kategori
            INNER JOIN tb_bobot ON tb_kasus_user.id_bobot = tb_bobot.id_bobot WHERE id_kasus_user ='$id'";
	$result = $mysqli->query($sql);
	foreach ($result as $baris) {
	?>
	<form action="aksiedit.php" method="post" role="form">
		<div class="form-group field item row" >
			<input type="hidden" name="id" value="<?php echo $baris['id_kasus_user'] ?>">
			<label for="kode_kasus" class="col-form-label col-md-3 col-sm-3 label-align">Kode Kasus User<span class="required">*</span></label>
			<div class="col-md-6 col-sm-6">
				<input type="text" name="kode" value="<?php echo $baris['kode_kasus_user'] ?>" required="required" class="form-control has-feedback-left">
				<span class="fa fa-qrcode form-control-feedback left"></span>
			</div>
		</div>
        <div class="form-group field item row" >
            <label for="nama_gejala" class="col-form-label col-md-3 col-sm-3 label-align">Nama Kasus User<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6">
                <input type="text" name="kasus" value="<?php echo $baris['kasus_user'] ?>" required="required" class="form-control has-feedback-left">
                <span class="fa fa-car form-control-feedback left" > </span>
            </div>
        </div>
        <div class="form-group field item row">
            <label for="kategori" class="col-form-label col-md-3 col-sm-3 label-align">Kategori <span class="required">*</span></label>
            <div class="col-md-6 col-sm-6">
                <select class="form-control has-feedback-left" name="kategori">
                    <option value="<?php echo $baris['id_kategori'];?>"><?php echo $baris['kategori']; ?></option>
                    <?php  
                        $sql_kategori = mysqli_query($mysqli, "SELECT * FROM tb_kategori WHERE 1 ORDER BY id_kategori ASC") or die (mysqli_error($mysqli));
                        while ($row = mysqli_fetch_array($sql_kategori)) {
                            echo '<option value="'.$row['id_kategori'].'">'.$row['kategori'].'</option>
                            option>';
                        }
                    ?>
                </select>
                <span class="fa fa-list-ul form-control-feedback left"> </span>
            </div>
        </div>
        <div class="form-group field item row">
        <label for="bobot" class="col-form-label col-md-3 col-sm-3 label-align">Bobot <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <select class="form-control has-feedback-left" name="bobot">
                <option value="<?php echo $baris['id_bobot']; ?>"><?=$baris['nilai_bobot']?>(<?=$baris['status_bobot']?>)</option>
                <?php  
                $sql_bobot = mysqli_query($mysqli, "SELECT * FROM tb_bobot WHERE 1 ORDER BY id_bobot ASC") or die (mysqli_error($mysqli));
                while ($row = mysqli_fetch_array($sql_bobot)) {
                    echo '<option value="'.$row['id_bobot'].'">'.$row['nilai_bobot'].' ('.$row['status_bobot'].')</option>}
                    option';    
                }
                ?>
            </select>
            <span class="fa fa-bar-chart form-control-feedback left"> </span>
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