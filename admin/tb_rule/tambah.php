<?php  
require_once ('../../login/connection.php');
if (isset($_POST['id'])) {
	$id = $_POST['id'];
?>

<form role="form" method="post" name="add_name" id="add_name">
	<div class="form-group field item row" >
		<label for="nama_kategori" class="col-form-label col-md-3 col-sm-3 label-align">Nama Kasus <span class="required">*</span></label>
		<div class="col-md-6 col-sm-6">
			<select class="form-control has-feedback-left" name="nama_kasus" id="nama_kasus">
                <option value="">-- Pilih Kasus --</option>
                <?php  
                    $sql_kasus = mysqli_query($mysqli, "SELECT * FROM tb_kasus WHERE 1 ORDER BY id_kasus ASC") or die (mysqli_error($mysqli));
                    while ($row = mysqli_fetch_array($sql_kasus)) {
                        echo '<option value="'.$row['id_kasus'].'">'.$row['kode_kasus'].' ('.$row['kasus'].')</option>
                        option>';
                    }
                ?>
            </select>
			<span class="fa fa-cogs form-control-feedback left" > </span>
		</div>
    </div>
    <div id="dynamic_field">
        <div class="form-group field item row" >
            <label for="gejala" class="col-form-label col-md-3 col-sm-3 label-align">Nama Gejala <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6" >
                <select class="form-control has-feedback-left" name="nama_gejala[]" id="nama_gejala">
                    <option value="">-- Pilih --</option>
                    <option value=""></option>
                </select>
                <span class="fa fa-cogs form-control-feedback left" > </span>
            </div>
            <button type="button" name="add" id="add" class="btn btn-success"><i class="fa fa-plus"></i></button>
        </div>
    </div>
	
	<div class="form-group">
	    <div class="col-md-6 offset-md-3">
	        <button type='reset'  class="btn btn-danger" id="reset">Reset</button>
	        <button type='submit' class="btn btn-primary" id="submit">Simpan</button>
	    </div>
	</div>
</form>
<script src="../../assets/vendors/validator/multifield.js"></script>
<script src="../../assets/vendors/validator/validator.js"></script>
<script type="text/javascript">

$('#reset').click(function(){ 
    $('#nama_kasus').removeAttr('disabled');
});

$(document).ready(function(){  
    var i=1;  
    $('#add').click(function(){  
        
        i++;  
        $('#dynamic_field').append('<div class="form-group field item row" id="row'+i+'" ><label for="gejala" class="col-form-label col-md-3 col-sm-3 label-align">Nama Gejala '+i+'<span class="required">*</span></label><div class="col-md-6 col-sm-6"  ><select class="form-control has-feedback-left" name="nama_gejala[]" id="nama_gejala'+i+'"><option value="">-- Pilih --</option><option value=""></option></select><span class="fa fa-cogs form-control-feedback left" > </span></div><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-close"></i></button></div>');  
            var kasus = document.getElementById("nama_kasus").value;
            
            $.ajax({
                type: 'POST',
                url : 'gejala.php',
                data: 'kasus='+kasus,
                success : function(response){
                    $('#nama_gejala'+i+'').html(response);//menampilkan data ke dalam modal
                }
            }); 
            $('#nama_kasus').change(function() {
            var kasus = $(this).val();
            $.ajax({
                type: 'POST',
                url : 'gejala.php',
                data: 'kasus='+kasus,
                success : function(response){
                    $('#nama_gejala'+i+'').html(response);//menampilkan data ke dalam modal
                    
                }
            }); 
        });
        if (i == 7){
            $('#add').hide('slow');
        } else {
            $('#add').show('slow');
        }
    });  
        $(document).on('click', '.btn_remove', function(){  
            var button_id = $(this).attr("id");   
            $('#row'+button_id+'').remove();  
        });  
        $('#submit').click(function(){            
            $.ajax({  
                url:"aksitambah.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
            });  
        });  
});  

 $(document).ready(function() {
    $('#nama_kasus').change(function() {
        var kasus = $(this).val();
        console.log(kasus);
        $.ajax({
            type: 'POST',
            url : 'gejala.php',
            data: 'kasus='+kasus,
            success : function(response){
                $('#nama_gejala').html(response);//menampilkan data ke dalam modal
                
            }
        }); 
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
}
?>