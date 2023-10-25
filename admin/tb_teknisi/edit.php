<?php  
require_once ('../../login/connection.php');
if ($_POST['rowid']) {
    $id = $_POST['rowid'];
    $sql = "SELECT * FROM tb_teknisi 
            LEFT JOIN tb_kantor ON tb_teknisi.id_kantor = tb_kantor.id_kantor
            LEFT JOIN tb_kategori ON tb_teknisi.job_disk = tb_kategori.id_kategori 
    WHERE id_teknisi ='$id'";
    $result = $mysqli->query($sql);
    foreach ($result as $baris) {
?>


<form role="form" method="post" action="aksiedit.php">
    <input type="hidden" name="id" value="<?=$baris['id_teknisi']?>">
    <div class="form-group field item row" >
        <label for="id_provinsi" class="col-form-label col-md-3 col-sm-3 label-align">Kontor <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <select class="form-control has-feedback-left provinsi" name="id_kantor" >
                <option value="<?=$baris['id_kantor']?>"><?=$baris['nama_kantor']?></option>
                <?php  
                    $sql_kantor = mysqli_query($mysqli, "SELECT * FROM tb_kantor WHERE 1 ORDER BY id_kantor ASC") or die (mysqli_error($mysqli));
                    while ($row = mysqli_fetch_array($sql_kantor)) {
                        echo '<option value="'.$row['id_kantor'].'">'.$row['nama_kantor'].'</option>
                        option>';
                    }
                ?>
            </select>
            <span class="fa fa-cogs form-control-feedback left" > </span>
        </div>
    </div>
    <div class="form-group field item row" >
        <label for="kode_teknisi" class="col-form-label col-md-3 col-sm-3 label-align">Kode Teknisi<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <input type="text" name="kode_teknisi" required="required" class="form-control has-feedback-left" value="<?=$baris['kode_teknisi']?>">
            <span class="fa fa-cogs form-control-feedback left" > </span>
        </div>
    </div>
    <div class="form-group field item row" >
        <label for="nama_teknisi" class="col-form-label col-md-3 col-sm-3 label-align">Nama Teknisi<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <input type="text" name="nama_teknisi" required="required" class="form-control has-feedback-left" value="<?=$baris['nama_teknisi']?>">
            <span class="fa fa-cogs form-control-feedback left" > </span>
        </div>
    </div>
    <div class="form-group field item row" >
        <label for="alamat_teknisi" class="col-form-label col-md-3 col-sm-3 label-align">Alamat<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <input type="text" name="alamat" required="required" class="form-control has-feedback-left" value="<?=$baris['alamat_teknisi']?>">
            <span class="fa fa-cogs form-control-feedback left" > </span>
        </div>
    </div>
    <div class="form-group field item row" >
        <label for="no_telp" class="col-form-label col-md-3 col-sm-3 label-align">No Telepon<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <input type="number" name="no_telp" required="required" class="form-control has-feedback-left" value="<?=$baris['no_telp_teknisi']?>">
            <span class="fa fa-cogs form-control-feedback left" > </span>
        </div>
    </div>
    <div class="form-group field item row" >
        <label for="kabupaten" class="col-form-label col-md-3 col-sm-3 label-align">Job Desk <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <select class="form-control has-feedback-left kabupaten" name="job_desk">
                <option value="<?=$baris['id_kategori']?>"><?=$baris['kategori']?></option>
                <?php  
                    $sql_kategori = mysqli_query($mysqli, "SELECT * FROM tb_kategori WHERE 1 ORDER BY id_kategori ASC") or die (mysqli_error($mysqli));
                    while ($row = mysqli_fetch_array($sql_kategori)) {
                        echo '<option value="'.$row['id_kategori'].'">'.$row['kategori'].'</option>
                        option>';
                    }
                ?>

            </select>
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

}}
?>