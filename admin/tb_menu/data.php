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
					<h2>Data Menu</h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
						<li class="dropdown">
						</li>
						<li><a class="close-link"><i class="fa fa-close"></i></a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<button class="btn btn-success tambah_menu" id="1"><i class="fa fa-bars">  Tambah Menu</i></button>
				<button class="btn btn-success tambah_submenu" id="2"><i class="fa fa-bars">  Tambah SubMenu</i></button>
				<div class="x_content">
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
									<thead>
										<tr>
											<th style="text-align: center;"><i class="fa fa-cog"></i></th>
											<th>No </th>
											<th>Menu</th>
											<th>Sub Menu </th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										$query = "SELECT * FROM tb_submenu 
												RIGHT JOIN tb_menu ON tb_submenu.id_menu = tb_menu.id_menu
												ORDER BY tb_menu.id_menu ASC";
										$sql_menu = mysqli_query($mysqli, $query) or die(mysqli_error($query));
										if(mysqli_num_rows($sql_menu) > 0) {
										while ($row = mysqli_fetch_array($sql_menu)){
											
											if (($row[2]) == NULL) {
												$id = $row['5'];
												$table = 'tb_menu';
												$status = $row['8'];
											} else {
												$id = $row['0'];
												$table = 'tb_submenu';
												$status = $row['4'];
											}
										?>
										<tr>
											<td style="width:10%">
												<button class="btn btn-warning btn-xs edit" data-id="<?=$table?>" id="<?=$id?>"><i class="fa fa-pencil"></i></button>
												<button class="btn btn-danger btn-xs hapus" data-id="<?=$table?>"  onclick="javascript:delete_id('<?=$id;?>', '<?=$table?>')" ><i class="fa fa-trash"></i></button>
											</td>
											<td><?=$no++?>.</td>
											<td><?=$row['menu']?></td>
											<td><?=$row['submenu']?></td>
											<td>
												
												<input data-width="100"  class="toggle-class" name="toggle-class"  id="<?=$table?>"   type="checkbox" data-toggle="toggle" data-on="Active" value="<?=$id; ?>" data-off="Deactive" data-onstyle="success" data-offstyle="danger" <?php if ($status == "1") {echo 'checked'; } ?> />
												<input class="form-control" type="hidden"  name="active" data-id="<?=$id; ?>" id="hidden_edit" value="<?=$status; ?>"/>
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
												<h4 class="modal-title" id="judul_data"></h4>
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
												</button>
											</div>
											<div class="modal-body">
												<div class="fetched-data">
													<div class="fetched-data">
													</div>
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


<script type="text/javascript">
$(function(){
	$('.toggle-class').change(function() {
		var id =$(this).val()
		var status = $(this).prop('checked')
		var	table = $(this).attr('id')
		$.ajax({
			url : 'editstatus.php',
			type :'post',
			data: { id:id, status:status, table:table},
			success: function(response){
				document.location='data.php';
				console.log('teguh');
				
			}
		});
	});
});
// TAMBAH DATA SUBMENU
$(document).ready(function(){
	$('.tambah_submenu').click( function (){
		var id = $(this).attr('id');
		//Menggunakan fungsi Ajax untuk Pengambilan Data
		$.ajax({
			type: 'post',
			url : 'tambah_submenu.php',
			data: {id:id},
			success : function(data){
				$('.fetched-data').html(data);//menampilkan data ke dalam modal
				$('#myModal').modal('show');
				document.getElementById("judul_data").innerHTML = document.getElementById("judul").value;
			}
		});
	});
});
// TAMBAH DATA MENU
$(document).ready(function(){
	$('.tambah_menu').click( function (){
		var id = $(this).attr('id');
		//Menggunakan fungsi Ajax untuk Pengambilan Data
		$.ajax({
			type: 'post',
			url : 'tambah_menu.php',
			data: {id:id},
			success : function(data){
				$('.fetched-data').html(data);//menampilkan data ke dalam modal
				$('#myModal').modal('show');
				document.getElementById("judul_data").innerHTML = document.getElementById("judul").value;
			}
		});
	});
});

$(document).ready(function(){
		$('.edit').click( function (){
		var rowid = $(this).attr('id');
		var table = $(this).attr('data-id');
		//Menggunakan fungsi Ajax untuk Pengambilan Data
		$.ajax({
			type: 'post',
			url : 'edit.php',
			data: {rowid:rowid, table:table},
			success : function(data){
				$('.fetched-data').html(data);//menampilkan data ke dalam modal
				$('#myModal').modal('show');
				document.getElementById("judul_data").innerHTML = document.getElementById("judul").value;
			}
		});
	});
});

function delete_id(id, data) {
	
	if(confirm ('Anda Serius Untuk Menghapus Data ?')){
		window.location.href='hapus.php?delete_id=' + id +'&t=' + data ;
	}
}

</script>
<?php
require_once ('../../layout/wrapperadmin/footer.php');
?>