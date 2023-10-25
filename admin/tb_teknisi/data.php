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
					<h2>Data Teknisi</h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
						<li class="dropdown">
							
						</li>
						<li><a class="close-link"><i class="fa fa-close"></i></a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<button class="btn btn-success tambah" id="1"><i class="fa fa-plus">  Tambah</i></button>
				<div class="x_content">
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
									<thead>
										<tr>
											<th style="text-align: center;"><i class="fa fa-cog"></i></th>
											<th>No </th>
											<th>Kantor</th>
											<th>Kode Teknisi</th>
											<th>Nama Teknisi</th>
											<th>Alamat</th>
											<th>No Telepon</th>
											<th>Job Desk</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										$query = "SELECT * FROM tb_teknisi 
												LEFT JOIN tb_kantor ON tb_teknisi.id_kantor = tb_kantor.id_kantor
												LEFT JOIN tb_kategori ON tb_teknisi.job_disk = tb_kategori.id_kategori 
												ORDER BY id_teknisi ASC";
										$sql_teknisi = mysqli_query($mysqli, $query) or die(mysqli_error($query));
										if(mysqli_num_rows($sql_teknisi) > 0) {
										while ($row = mysqli_fetch_array($sql_teknisi)){
										?>
										<tr>
											<td style="width:10%">
												<a class="btn btn-warning btn-xs"  data-toggle="modal" href="#myModal" id="custId" data-target="#myModal" data-id="<?=$row['id_teknisi'] ?>"><i class="fa fa-pencil"></i></a>
												<button class="btn btn-danger btn-xs" onclick="javascript:delete_id(<?=$row['id_teknisi']?>)" ><i class="fa fa-trash"></i></button>
											</td>
											<td><?=$no++?>.</td>
											<td><?=$row['nama_kantor']?></td>
											<td><?=$row['kode_teknisi']?></td>
											<td><?=$row['nama_teknisi']?></td>
											<td><?=$row['alamat_teknisi']?></td>
											<td><?=$row['no_telp_teknisi']?></td>
											<td><?=$row['kategori']?></td>
										</tr>
										<?php
										}
										} else {
											echo "<tr><td colspan=\"8\" align=\"center\"> Data Tidak Ditemukan </td></tr>";
										}
										?>
									</tbody>
								</table>
								<div class="modal fade bs-example-modal-lg"  id="modal_add" tabindex="-1" role="dialog" aria-hidden="true">
									<div class="modal-dialog modal-lg" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" >Tambah Data Teknisi</h4>
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
								<div class="modal fade bs-example-modal-lg"  id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
									<div class="modal-dialog modal-lg" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" >Edit Data Teknisi</h4>
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
// TAMBAH DATA
$(document).ready(function(){
	$('.tambah').click(function (){
		$('#modal_add').modal('show');
		var id = $(this).attr('id');
		//Menggunakan fungsi Ajax untuk Pengambilan Data
		$.ajax({
			type: 'post',
			url : 'tambah.php',
			data: {id:id},
			success : function(data){
				$('.fetched-data').html(data);//menampilkan data ke dalam modal
				
			}
		});
	});
});

// EDIT DATA
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


function delete_id(id) {
	if(confirm ('Anda Serius Untuk Menghapus Data ?')){
		window.location.href='hapus.php?delete_id=' + id;
	}
}
</script>
<?php
require_once ('../../layout/wrapperadmin/footer.php');
?>

