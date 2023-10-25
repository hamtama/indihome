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
					<h2>Data Solusi Teknisi</h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
						<li class="dropdown">
							
						</li>
						<li><a class="close-link"><i class="fa fa-close"></i></a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<button class="btn btn-success tambah" id="1"><i class="fa fa-plus">  Tambah</i></button>
				<a class="btn btn-success" href="../tb_solusi_user/data.php" id="1"><i class="fa fa-key">  Solusi User</i></a>
				<div class="x_content">
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
									<thead>
										<tr>
											<th style="text-align: center;"><i class="fa fa-cog"></i></th>
											<th>No </th>
											<th>Kode Kasus</th>
											<th>Nama Kasus</th>
											<th>Solusi</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										$query = "SELECT * FROM tb_solusi 
												LEFT JOIN tb_kasus ON tb_kasus.id_kasus = tb_solusi.id_kasus ORDER BY id_solusi ASC";
										$sql_solusi = mysqli_query($mysqli, $query) or die(mysqli_error($query));
										if(mysqli_num_rows($sql_solusi) > 0) {
										while ($row = mysqli_fetch_array($sql_solusi)){
										?>
										<tr>
											<td style="width:10%">
												<button class="btn btn-warning btn-xs edit" data-id="<?=$row['id_solusi'] ?>"><i class="fa fa-pencil"></i></a>
												<button class="btn btn-danger btn-xs" onclick="javascript:delete_id(<?=$row['id_solusi']?>)" ><i class="fa fa-trash"></i></button>
											</td>
											<td><?=$no++?>.</td>
											<td><?=$row['kode_kasus']?></td>
											<td><?=$row['kasus']?></td>
											<td style=" word-wrap: break-word;"><?=substr($row['solusi'],0,151)?>...</td>
										</tr>
										<?php
										}
										} else {
											echo "<tr><td colspan=\"6\" align=\"center\"> Data Tidak Ditemukan </td></tr>";
										}
										?>
									</tbody>
								</table>
								
								<div class="modal fade bs-example-modal-lg"  id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
									<div class="modal-dialog modal-lg" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="judul"></h4>
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
<script type="text/javascript">

// EDIT DATA
$(document).ready(function(){
	$('.edit').click( function (){
		$('#myModal').modal('show');
		var rowid = $(this).attr('data-id');
		//Menggunakan fungsi Ajax untuk Pengambilan Data
		$.ajax({
			type: 'post',
			url : 'edit.php',
			data: 'rowid=' + rowid,
			success : function(data){
				$('.fetched-data').html(data);//menampilkan data ke dalam modal
				document.getElementById("judul").innerHTML = "Edit Data Solusi";
			}
		});
	});
});
// TAMBAH DATA
$(document).ready(function(){
	$('.tambah').click( function (){
		var id = $(this).attr('id');
		
		//Menggunakan fungsi Ajax untuk Pengambilan Data
		$.ajax({
			type: 'post',
			url : 'tambah.php',
			data: {id:id},
			success : function(data){
				$('.fetched-data').html(data);//menampilkan data ke dalam modal
				$('#myModal').modal('show');
				document.getElementById("judul").innerHTML = "Tambah Data Solusi";
			}
		});
	});
});


function delete_id(id) {
	if(confirm ('Anda Serius Untuk Menghapus Data ?')){
		window.location.href='hapus.php?delete_id=' + id;
	}
}

</script>

<?php
require_once ('../../layout/wrapperadmin/footer.php');
?>

