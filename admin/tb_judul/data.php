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
					<h2>Data Judul</h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
						<li class="dropdown">
							
						</li>
						<li><a class="close-link"><i class="fa fa-close"></i></a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<?php 
					$jumlah = $mysqli->query("SELECT * FROM tb_judul") or die ($mysqli->error());
					if ( mysqli_num_rows($jumlah) > 0 ) {
						echo '';
					} else {
						echo '<button class="btn btn-success tambah" id="1"><i class="fa fa-plus">  Tambah</i></button>';
					}
				?>
				
				<div class="x_content">
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" width="100%">
									<thead>
										<tr>
											<th style="text-align: center;"><i class="fa fa-cog"></i></th>
											<th>No </th>
											<th>Judul</th>
											<th>Quote </th>
											<th>Gambar 1</th>
											<th>Gambar 2</th>
											<th>Gambar 3</th>
											<th>Gambar 4</th>
											<th>Gambar 5</th>
											<th>Gambar 6</th>

										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										$query = "SELECT * FROM tb_judul ORDER BY id_judul ASC";
										$sql_gejala = mysqli_query($mysqli, $query) or die(mysqli_error($query));
										if(mysqli_num_rows($sql_gejala) > 0) {
										while ($row = mysqli_fetch_array($sql_gejala)){
										?>
										<tr>
											<td style="width:10%">
												<a class="btn btn-warning btn-xs edit"  data-toggle="modal" href="#myModal" id="custId" data-target="#myModal" data-id="<?=$row['id_judul'] ?>"><i class="fa fa-pencil"></i></a>
												<button class="btn btn-danger btn-xs" onclick="javascript:delete_id(<?=$row['id_judul']?>)" ><i class="fa fa-trash"></i></button>
												
											</td>
											<td><?=$no++?>.</td>
											<td><?=$row['judul']?></td>
											<td><?=$row['quote']?></td>
											<td><img src="logo/<?=$row['gambar1']?>" alt="<?=$row['gambar1']?>" width="10%"></td>
											<td><img src="logo/<?=$row['gambar2']?>" alt="<?=$row['gambar2']?>" width="10%"></td>
											<td><img src="logo/<?=$row['gambar3']?>" alt="<?=$row['gambar3']?>" width="10%"></td>
											<td><img src="logo/<?=$row['gambar4']?>" alt="<?=$row['gambar4']?>" width="10%"></td>
											<td><img src="logo/<?=$row['gambar5']?>" alt="<?=$row['gambar5']?>" width="10%"></td>
											<td><img src="logo/<?=$row['gambar6']?>" alt="<?=$row['gambar6']?>" width="10%"></td>
											
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
												<h4 class="modal-title" >Tambah Data Gejala</h4>
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
												<h4 class="modal-title" >Edit Data Merek</h4>
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
<script src="../style/Jquery.min.js"></script>
<script src="../../assets/vendors/bootstrap-toggle/bootstrap-toggle.js"></script>
<script type="text/javascript">

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
				$('#modal_add').modal('show');
			}
		});
	});
});

function delete_id(id) {
	if(confirm ('Anda Serius Untuk Menghapus Data ?')){
		window.location.href='hapus.php?delete_id=' + id;
	}
}
//test data
function test_id(id) {
	if(confirm ('Anda Serius Untuk Menghapus Data ?')){
		window.location.href='test.php?test_id=' + id;
	}
}

</script>

<?php
require_once ('../../layout/wrapperadmin/footer.php');
?>

