<?php
require_once ('../../layout/wrapperadmin/head.php');
require_once ('../../layout/wrapperadmin/sidebar.php');
require_once ('../../layout/wrapperadmin/header.php');
require_once ('../../layout/wrapperadmin/content.php');
?>
<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Data Tambah Rekap</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <li class="dropdown">
                            
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <form role="form" class=""  action="aksitambah.php" method="post">
                                <div class="field item form-group">
                                    
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">No Internet<span class="required">*</span></label>
                                    <div   class="col-md-6 col-sm-6">
                                        <select name="no_internet" id="no_internet" required="required" class="form-control">
                                            <option value="">-- No Internet --</option>
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
                                            <option value="">-- Jenis Kasus --</option>
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
                                            <option value="">-- Pilih Kantor --</option>
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
                                            <option value="">-- Pilih Teknisi --</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Laporan Kerusakan<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <textarea name="laporan" class="form-control" cols="5" rows="10"></textarea>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../../assets/vendors/validator/multifield.js"></script>
<script src="../../assets/vendors/validator/validator.js"></script>
<script type="text/javascript">

$(document).ready(function() {
    $('.kantor').change(function() {
        var id_kantor = $(this).val();
        console.log(id_kantor);
        $.ajax({
            type: 'POST',
            url: 'teknisi.php',
            data: 'id_kantor='+id_kantor,
            success : function(response){
                $('.teknisi').html(response);
            }                       
        });
    })
});

$(document).ready(function(){
    $('#status').bootstrapToggle('off');
    $('#status').change(function(){
        if($(this).prop('checked'))
        {
            $('#hidden_status').val('1');
        }
        else
        {
            $('#hidden_status').val('0');
        }
    });
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
require_once ('../../layout/wrapperadmin/footer.php');
?>
