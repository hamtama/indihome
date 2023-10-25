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
                    <h2>Data Tambah User</h2>
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
                                    
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Level<span class="required">*</span></label>
                                    <div name="level"   class="col-md-6 col-sm-6">
                                        <select name="level" id="level" required="required" class="form-control">
                                            <option value="">-- Level --</option>
                                            <option value="Admin">Admin</option>
                                            <option value="User">User</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nama<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" class='name' id="nama" name="nama" required="required" type="text" value="" />
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">email<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" name="email" class='email' required="required" type="email" value="" />
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Username<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="text" class='name' name="username" data-validate-minmax="10" required='required' value="">
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">password<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="password" class='password' name="password"  required='required' />
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
