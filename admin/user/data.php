<?php
require_once ('../../layout/wrapperadmin/head.php');
require_once ('../../layout/wrapperadmin/sidebar.php');
require_once ('../../layout/wrapperadmin/header.php');
require_once ('../../layout/wrapperadmin/content.php');
?>
<style>
	.hidetext {
		-webkit-text-security:disc;
	}
</style>
<div class="">
	
	<div class="clearfix"></div>
	<div class="row">
		
		<div class="col-md-12 col-sm-12 ">
			<div class="x_panel">
				<div class="x_title">
					<h2>Data Kelola Users</h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
						<li class="dropdown">
							
						</li>
						<li><a class="close-link"><i class="fa fa-close"></i></a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<button class="btn btn-primary"  onclick="javascript:window.location=('tambah.php')" > <i class="fa fa-plus"> </i> Tambah Data</button>
				<div class="x_content">
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box table-responsive">
								<table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
									<thead>
										<tr>
											<th style="text-align: center;"><i class="fa fa-cog"></i></th>
											<th>No </th>
											<th>Level </th>
											<th>Nama</th>
											<th>Email</th>
											<th>Username</th>
											<th>Password</th>
											<th>Active</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										$query = "SELECT * FROM users";
										$sql_user = mysqli_query($mysqli, $query) or die(mysqli_error($query));
										if(mysqli_num_rows($sql_user) > 0) {
										while ($row = mysqli_fetch_array($sql_user)){
										?>
										<tr>
											<td style="width:10%">
												<a class="btn btn-warning btn-xs"  data-toggle="modal" href="#myModal" id="custId" data-target="#myModal" data-id="<?=$row['id'] ?>"><i class="fa fa-pencil">  Edit</i></a>
												<button class="btn btn-danger btn-xs" onclick="javascript:delete_id(<?=$row['id']?>)" ><i class="fa fa-trash"> Hapus</i></button>
											</td>
											<td><?=$no++?>.</td>
											<td><?=$row['level']?></td>
											<td><?php echo $row['nama']?></td>
											<td><?php echo $row['email']?></td>
											<td><?php echo $row['username']?></td>
											<td class="hidetext"><?php echo $row['password']?></td>
											<td>
												
												<input data-width="100"  class="toggle-class" name="toggle-class"  id="toggle-class"   type="checkbox" data-toggle="toggle" data-on="Active" value="<?php echo $row['id']; ?>" data-off="Deactive" data-onstyle="success" data-offstyle="danger" <?php if ($row['active'] == "1") {echo 'checked'; } ?> />
												<input class="form-control" type="hidden"  name="active" data-id="<?php echo $row['id']; ?>" id="hidden_edit" value="<?php echo $row['active']; ?>"/>
											</td>
										</tr>
										<?php
										}
										} else {
											echo "<tr><td colspan=\"5\" align=\"center\"> Data Tidak Ditemukan </td></tr>";
										}
										?>
									</tbody>
								</table>
								<div class="modal fade bs-example-modal-lg"  id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
									<div class="modal-dialog modal-lg" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" >Edit Data User</h4>
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
												</button>
											</div>
											<div class="modal-body">
												<div class="fetched-data">
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							</div>
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
$(function(){
	$('.toggle-class').change(function() {
		$.ajax({
			url : 'editstatus.php',
			type :'post',
			data: {
				id :$(this).val(),
				status : $(this).prop('checked')
			},
			success: function(response){
				document.location='data.php';
			}
		});
	});
});
function delete_id(id) {
	if(confirm ('Anda Serius Untuk Menghapus Data ?')){
		window.location.href='delete.php?delete_id=' + id;
	}
}
$(document).ready(function(){
	$('#myModal').on('show.bs.modal', function (e){
		var rowid = $(e.relatedTarget).data('id');
		//Menggunakan fungsi Ajax untuk Pengambilan Data
		$.ajax({
			type: 'post',
			url : 'edit.php',
			data: 'rowid=' + rowid,
			success : function(data){
				$('.fetched-data').html(data);//menampilkan data ke dalam modal
			}
		});
	});
});
</script>
<?php
require_once ('../../layout/wrapperadmin/footer.php');
?>

