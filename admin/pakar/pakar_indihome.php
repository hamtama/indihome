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
					<h2>Diagnosis Gangguan Layanan Indihome Teknisi</h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
						<li class="dropdown">
							
						</li>
						<li><a class="close-link"><i class="fa fa-close"></i></a></li>
					</ul>

					<div class="clearfix"></div>
				</div>

					<div class="card bg border-success" >
						 <div class="card-header bg bg-success">
						 	<h4 class="col-md-12 text-center  text-white">GEJALA INDIHOME </h4>
						 </div>
						 <div class="card-body">
						 	<form action="#" method="post">
							 <?php
								$no = 0;  
								$sql_gejala = mysqli_query($mysqli, "SELECT * FROM tb_gejala WHERE id_kategori = '4' ORDER BY id_gejala ASC") or die (mysqli_error($mysqli));
								while ($row = mysqli_fetch_array($sql_gejala)) {
								$no = $no+1
								?><div class="input-group mb-3">
									<div class="input-group-prepend">
										<label style="width:700px" class="input-group-text" for="nama_gejala" ><?=$row['gejala']?></label>
									</div>
										<select class="custom-select" id="gejala_<?=$no?>" name="gejala<?=$no?>">
										<?php
										$sql_bobot = mysqli_query($mysqli, "SELECT * FROM tb_bobot WHERE 1 ORDER BY id_bobot ASC") or die (mysqli_error($mysqli));
										while ($row_2 = mysqli_fetch_array($sql_bobot)) {
											echo '<option value="'.$row_2['nilai_bobot'].'">'.$row_2['status_bobot'].'</option>';
										}
										?>
										</select>
								</div>
								<?php
								}
							?> 
							<button type="submit" class="btn btn-success diagnosis" id="1">Diagnosa</button>
							<input type="hidden" id="masuk" name="ninja" value="mbuh">
							</form>
						 </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
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
					<?php 
						require_once('hitung_3.php');
						require_once('hasil_3.php');
					?>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<?php
	if(isset($resdiagnosa[0]['ninja'])){
		echo "<script type='text/javascript'>
				$(document).ready(function(){
					$('#myModal').modal('show');
				});
			  </script>";
	}
?>
<?php
require_once ('../../layout/wrapperadmin/footer.php');
?>