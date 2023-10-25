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
					<h2>Data Relasi Teknisi</h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
						
						<li><a class="close-link"><i class="fa fa-close"></i></a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<button class="btn btn-success tambah" id="1" ><i class="fa fa-plus">  Tambah</i></button>
				<a class="btn btn-success" href="../tb_rule_user/data.php" id="1" ><i class="fa fa-link">  Rule User</i></a>
				<div class="x_content">
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th style="text-align: center;"><i class="fa fa-cog"></i></th>
											<th>No </th>
											<th>Kode Rule</th>
											<th>Kategori</th>
											<th>Gejala 1 </th>
											<th>Gejala 2 </th>
											<th>Gejala 3 </th>
											<th>Gejala 4 </th>
											<th>Gejala 5 </th>
											<th>Gejala 6 </th>
											<th>Gejala 7 </th>
											<th>Kasus</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										$query = "SELECT * FROM tb_rule 
										INNER JOIN tb_kasus ON tb_kasus.id_kasus = tb_rule.id_kasus 
										INNER JOIN tb_kategori ON tb_rule.id_kategori = tb_kategori.id_kategori
										";
										
										$sql_relasi = mysqli_query($mysqli, $query) or die(mysqli_error($query));
										if(mysqli_num_rows($sql_relasi) > 0) {
										while ($row = mysqli_fetch_array($sql_relasi)){
										?>
										<tr>
											<td style="width:10%">
												<button class="btn btn-danger btn-xs" onclick="javascript:delete_id(<?=$row['id_rule']?>)" ><i class="fa fa-trash"></i></button>
											</td>
											<td><?=$no++?>.</td>
											<td><?=$row['kode_rule']?></td>
											<td><?=$row['kategori']?></td>
											<td><?=$row['gejala1']?></td>
											<td><?=$row['gejala2']?></td>
											<td><?=$row['gejala3']?></td>
											<td><?=$row['gejala4']?></td>
											<td><?=$row['gejala5']?></td>
											<td><?=$row['gejala6']?></td>
											<td><?=$row['gejala7']?></td>
											<td><?=$row['kasus']?></td>

										</tr>
										<?php
										}
										} else {
											echo "<tr><td colspan=\"11\" align=\"center\"> Data Tidak Ditemukan </td></tr>";
										}
										?>
									</tbody>
								</table>
								
								<div class="modal fade bs-example-modal-lg"  id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
									<div class="modal-dialog modal-lg" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="judul" ></h4>
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
				document.getElementById("judul").innerHTML = "Tambah Data Relasi";
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

