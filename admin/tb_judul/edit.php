<?php  
require_once ('../../login/connection.php');
if ($_POST['rowid']) {
	$id = $_POST['rowid'];
	$sql = "SELECT * FROM tb_judul WHERE id_judul ='$id'";
	$result = $mysqli->query($sql);
	foreach ($result as $baris) {
	?>
<form action="aksiedit.php" role="form" method="post" name="form" enctype="multipart/form-data">
	<div class="form-group field item row">
		<label for="judul" class="col-form-label col-md-3 col-sm-3 label-align">Judul <span class="required">*</span></label>
		<div class="col-md-6 col-sm-6">
			<input type="hidden" name="id" value="<?=$baris['id_judul'] ?>">
			<textarea class="form-control" name="judul"  rows="2"><?=$baris['judul'] ?></textarea>
		</div>
	</div>
	<div class="form-group field item row">
		<label for="quote" class="col-form-label col-md-3 col-sm-3 label-align">Quote <span class="required">*</span></label>
		<div class="col-md-6 col-sm-6">
			<textarea class="form-control" name="quote" rows="2"><?=$baris['quote'] ?></textarea>
		</div>
	</div>
  	<div class="form-group field item">
		<label for="logo1" class="col-form-label col-md-3 col-sm-3 label-align">Logo 1 <span class="required">*</span></label>
		<div class="custom-file col-md-6 col-sm-6">
			<input type="file" class="custom-file-input logo" id="logo1" name="logo1">
			<label class="custom-file-label text-secondary" for="logo1" id="label_logo1"><i class=" fa fa-upload "></i></label>
		</div>
	</div>
	<div class="form-group field item">
		<label for="logo2" class="col-form-label col-md-3 col-sm-3 label-align">Logo 2 <span class="required">*</span></label>
		<div class="custom-file col-md-6 col-sm-6">
			<input type="file" class="custom-file-input logo" id="logo2" name="logo2">
			<label class="custom-file-label text-secondary" for="logo2" id="label_logo2"><i class=" fa fa-upload "></i></label>
		</div>
	</div>
	<div class="form-group field item">
		<label for="logo3" class="col-form-label col-md-3 col-sm-3 label-align">Logo 3 <span class="required">*</span></label>
		<div class="custom-file col-md-6 col-sm-6">
			<input type="file" class="custom-file-input logo" id="logo3" name="logo3">
			<label class="custom-file-label text-secondary" for="logo3" id="label_logo3"><i class=" fa fa-upload "></i></label>
		</div>
	</div>
	<div class="form-group field item">
		<label for="logo4" class="col-form-label col-md-3 col-sm-3 label-align">Logo 4 <span class="required">*</span></label>
		<div class="custom-file col-md-6 col-sm-6">
			<input type="file" class="custom-file-input logo" id="logo4" value="" name="logo4">
			<label class="custom-file-label text-secondary" for="logo4" id="label_logo4"><i class=" fa fa-upload "></i></label>
		</div>
	</div>
	<div class="form-group field item">
		<label for="logo5" class="col-form-label col-md-3 col-sm-3 label-align">Logo 5 <span class="required">*</span></label>
		<div class="custom-file col-md-6 col-sm-6">
			<input type="file" class="custom-file-input logo" id="logo5" name="logo5">
			<label class="custom-file-label text-secondary" for="logo5" id="label_logo5"><i class=" fa fa-upload "></i></label>
		</div>
	</div>
	<div class="form-group field item">
		<label for="logo6" class="col-form-label col-md-3 col-sm-3 label-align">Logo 6 <span class="required">*</span></label>
		<div class="custom-file col-md-6 col-sm-6">
			<input type="file" class="custom-file-input logo" id="logo6" name="logo6">
			<label class="custom-file-label text-secondary" for="logo3" id="label_logo6"> <i class=" fa fa-upload "></i></label>
		</div>
	</div>
	<div class="form-group">
        <div class="col-md-6 offset-md-3">
			<button align="center" type="submit"  class="btn btn-success"><i class="fa fa-send"> Simpan</i></button>
			<button type="reset" class="btn btn-danger"><i class="fa fa-history"> Reset</i></button>
		</div>
	</div>

</form>
<?php  
}}
?>
<script>
$(document).ready(function(){
	var label = 0;
		$('.logo').change(function(){
			var id = $(this).attr('id');

			if (id == 'logo1'){
				label = 1;
			} 
			if (id == 'logo2'){
				label = 2;
			} 
			if (id == 'logo3'){
				label = 3;
			} 
			if (id == 'logo4'){
				label = 4;
			} 
			if (id == 'logo5'){
				label = 5;
			} 
			if (id == 'logo6'){
				label = 6;
			} 
			var	logo = document.forms["form"][id].files.item(0).name;
			var	size = document.forms["form"][id].files.item(0).size ;
			document.getElementById("label_logo"+label).innerHTML = logo;
			if (size > 1000000) {
				alert('Gambar Terlalu Besar. Silahkan masukkan Gambar kurang dari 1Mb');
			}
		});
	});

</script>



