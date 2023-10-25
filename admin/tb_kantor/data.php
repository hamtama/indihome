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
					<h2>Data Kantor</h2>
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
											<th>Kantor Cabang</th>
											<th>Provinsi</th>
											<th>Kabupaten</th>
											<th>Kecamatan</th>
											<th>Kelurahan</th>
											<th>Alamat</th>
											<th>Email</th>
											<th>No.Telp</th>
											
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										$query = "SELECT * FROM tb_kantor 
												LEFT JOIN tb_provinsi ON tb_kantor.id_provinsi = tb_provinsi.id_provinsi
												LEFT JOIN tb_kabupaten ON tb_kantor.id_kabupaten = tb_kabupaten.id_kabupaten 
												LEFT JOIN tb_kecamatan ON tb_kantor.id_kecamatan = tb_kecamatan.id_kecamatan 
												LEFT JOIN tb_kelurahan ON tb_kantor.id_kelurahan = tb_kelurahan.id_kelurahan
												ORDER BY id_kantor ASC";
										$sql_kantor = mysqli_query($mysqli, $query) or die(mysqli_error($query));
										if(mysqli_num_rows($sql_kantor) > 0) {
										while ($row = mysqli_fetch_array($sql_kantor)){
										?>
										<tr>
											<td style="width:10%">
												<button class="btn btn-success btn-xs wilayah" id="<?=$row['id_kantor']?>"><i class="fa fa-plus"></i></button>
												<a class="btn btn-warning btn-xs"  data-toggle="modal" href="#myModal" id="custId" data-target="#myModal" data-id="<?=$row['id_kantor'] ?>"><i class="fa fa-pencil"></i></a>
												<button class="btn btn-danger btn-xs" onclick="javascript:delete_id(<?=$row['id_kantor']?>)" ><i class="fa fa-trash"></i></button>
											</td>
											<td><?=$no++?>.</td>
											<td><?=$row['nama_kantor']?></td>
											<td><?=$row['nama_provinsi']?></td>
											<td><?=$row['nama_kabupaten']?></td>
											<td><?=$row['nama_kecamatan']?></td>
											<td><?=$row['nama_kelurahan']?></td>
											<td><?=$row['alamat_kantor']?></td>
											<td><?=$row['email_kantor']?></td>
											<td><?=$row['no_telp_kantor']?></td>
											
										</tr>
										<?php
										}
										} else {
											echo "<tr><td colspan=\"10\" align=\"center\"> Data Tidak Ditemukan </td></tr>";
										}
										?>
									</tbody>
								</table>
								<div class="modal fade bs-example-modal-lg"  id="modal_add" tabindex="-1" role="dialog" aria-hidden="true">
									<div class="modal-dialog modal-lg" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title">Tambah Data Kantor</h4>
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
				document.getElementById("judul").innerHTML = "Edit Data kantor";
			}
		});
	});
});

// Tambah DATA Wilayah
$(document).ready(function(){
	$('.wilayah').click(function (){
		$('#myModal').modal('show');
		var id_wil = $(this).attr('id');
		//Menggunakan fungsi Ajax untuk Pengambilan Data
		$.ajax({
			type: 'post',
			url : 'wilayah.php',
			data: 'id_wil=' + id_wil,
			success : function(data){
				$('.fetched-data').html(data);//menampilkan data ke dalam modal
				document.getElementById("judul").innerHTML = "Tambah Data Wilayah";
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
