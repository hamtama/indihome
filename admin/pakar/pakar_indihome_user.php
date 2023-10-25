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
					<h2>Diagnosis Gangguan Layanan Indihome User</h2>
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
						 	<h4 class="col-md-12 text-center  text-white" id="judul">Pilih Kasus Indihome User</h4>
						 </div>
						 <div class="card-body">
								<?php 
 									require_once('kasus_indihome.php');
 									require_once('gejala_indihome.php');
								?>					 		
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
						require_once('hitung_user3.php');
						require_once('hasil_user3.php');
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
	if(isset($resdiagnosa[0]['kera'])){
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