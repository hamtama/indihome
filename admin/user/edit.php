<?php
require_once '../../login/connection.php';
if ($_POST['rowid']){
    $id = $_POST['rowid'];
    //mengambil data berdasarkan id
    //dan menampilkan data ke dalam form modal bootstrap
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $mysqli->query($sql);
    foreach ($result as $baris){
?>
<!-- page content -->
<form role="form" class=""  action="aksiedit.php" method="post" novalidate>
    <div class="field item form-group">
        <input type="hidden" name="id" id="id_user"  value=" <?php echo $baris['id'] ?>"/>
        <label class="col-form-label col-md-3 col-sm-3  label-align">Level<span class="required">*</span></label>
        <div name="level"   class="col-md-6 col-sm-6">
            <select value="" name="level" class="form-control">
                <option ><?php echo $baris['level']; echo isset ($_POST['level'])? $_POST['level']:''; ?></option>
                <option value="Admin">Admin</option>
                <option value="User">User</option>
            </select>
        </div>
    </div>
    <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Nama<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <input class="form-control" class='text' required="required" name="nama" data-validate-length-range="5,15" type="text" value="<?php echo $baris['nama']; echo isset($_POST['nama']) ? $_POST['nama']:'';?>" />
        </div>
    </div>
    <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">email<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <input class="form-control" name="email" class='email' required="required" type="email" value="<?php echo $baris['email']; echo isset($_POST['email'])? $_POST['email']:''; ?>" />
        </div>
    </div>
    <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Username<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <input class="form-control" type="text" class='name' name="username" data-validate-minmax="10" required='required' value="<?php echo $baris['username']; echo isset($_POST['username'])? $_POST['username']:''; ?>">
        </div>
    </div>
    <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">password<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <input class="form-control" type="password" class='password' name="password"  />
        </div>
    </div>
    <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Active <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <input class="form-control" type="text" disabled value="<?php  if ($baris['active'] == "1") {echo 'Active';} else {echo 'Deactive';} ?>">
            
        </div>
    </div>
    <div class="ln_solid">
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
<!-- /page content -->
<?php
}
}
?>