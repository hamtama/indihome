<?php
require_once '../../login/connection.php';
if ($_POST['rowid']){
    $id = $_POST['rowid'];
    //mengambil data berdasarkan id
    //dan menampilkan data ke dalam form modal bootstrap
    $sql = "SELECT * FROM tb_rekap 
            LEFT JOIN tb_pengguna ON tb_rekap.id_pengguna = tb_pengguna.id_pengguna
            LEFT JOIN tb_kasus ON tb_rekap.id_kasus = tb_kasus.id_kasus
            LEFT JOIN tb_kategori ON tb_rekap.id_kategori = tb_kategori.id_kategori
            LEFT JOIN tb_kantor ON tb_rekap.id_kantor = tb_kantor.id_kantor
            LEFT JOIN tb_teknisi ON tb_rekap.id_teknisi = tb_teknisi.id_teknisi WHERE id_rekap = $id";
    $result = $mysqli->query($sql);
    foreach ($result as $baris){
?>
<!-- page content -->
<form role="form" class=""  action="aksiedit.php" method="post" novalidate>
    <div class="field item form-group">
        <input type="hidden" name="id" value="<?=$baris['id_rekap']?>">
        <label class="col-form-label col-md-3 col-sm-3  label-align">No Internet<span class="required">*</span></label>
        <div   class="col-md-6 col-sm-6">
            <select name="no_internet" id="no_internet" required="required" class="form-control">
                <option value="<?=$baris['id_pengguna']?>"><?=$baris['no_internet']?></option>
                <?php  
                    $sql_no = mysqli_query($mysqli, "SELECT * FROM tb_pengguna WHERE 1 ORDER BY id_pengguna ASC") or die (mysqli_error($mysqli));
                    while ($row = mysqli_fetch_array($sql_no)) {
                        echo '<option value="'.$row['id_pengguna'].'">'.$row['no_internet'].'</option>
                        option>';
                    }
                ?>
            </select>
        </div>
    </div>
    <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Jenis Kasus<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <select name="kasus" id="kasus" required="required" class="form-control">
                <option value="<?=$baris['id_kasus']?>">(<?=$baris['kode_kasus']?>) <?=$baris['kasus']?> </option>
                <?php  
                    $sql_kasus = mysqli_query($mysqli, "SELECT * FROM tb_kasus WHERE 1 ORDER BY kode_kasus ASC") or die (mysqli_error($mysqli));
                    while ($row = mysqli_fetch_array($sql_kasus)) {
                        echo '<option value="'.$row['id_kasus'].'">('.$row['kode_kasus'].') '.$row['kasus'].'</option>
                        option>';
                    }
                ?>
            </select>
        </div>
    </div>
    <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Kantor<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <select name="kantor" id="kantor" required="required" class="form-control kantor">
                <option value="<?=$baris['id_kantor']?>"><?=$baris['nama_kantor']?></option>
                <?php  
                    $sql_kantor = mysqli_query($mysqli, "SELECT * FROM tb_kantor WHERE 1 ORDER BY id_kantor ASC") or die (mysqli_error($mysqli));
                    while ($row = mysqli_fetch_array($sql_kantor)) {
                        echo '<option value="'.$row['id_kantor'].'">'.$row['nama_kantor'].'</option>
                        option>';
                    }
                ?>
            </select>
        </div>
    </div>
    <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Teknisi<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <select name="teknisi" id="teknisi" required="required" class="form-control teknisi">
                <option value="<?=$baris['id_teknisi']?>"><?=$baris['nama_teknisi']?></option>
            </select>
        </div>
    </div>
    <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Laporan Kerusakan<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <textarea name="laporan" class="form-control" cols="5" rows="10"><?=$baris['laporan_kerusakan']?></textarea>
        </div>
    </div>
    <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Active <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <input data-width="100" type="checkbox" data-toggle="toggle" data-on="Active" data-off="Deactive" data-onstyle="success" data-offstyle="danger" checked id="status">
        </div>
    </div>
    <input type="hidden" name="active" id="hidden_status" value="0" />
    <div class="ln_solid">
        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <button type='reset'  class="btn btn-danger">Reset</button>
                <button type="submit"  class="btn btn-success">Simpan</button>
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
<!-- /page content -->
<?php
}
}
?>