<div class="x_content kasus">
	<form action="#" method="post" id="kasus_useetv">
		<input type="hidden" id="gejala" name="kasus" value="0">
		<div class="row">
			<div class="col-sm-12">
				<div class="card-box table-responsive">
					<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" style="width: 100%" >
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Kasus UseeTV User</th>
								<th align="center">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<script type="text/javascript">
								
								$(document).ready(function(){
									$('.gejala').hide('slow');
									$('.pilih').click( function(){
										var data = this.getAttribute('data-id');
										var gejala = document.getElementById('gejala').value = data;
										document.getElementById('kasus_useetv').submit();
									});
								});	
							</script>							
							<?php
					        $no = 1; 
					        $kategori = 2;
					        $sql_kasus_user = mysqli_query($mysqli, "SELECT * FROM tb_kasus_user WHERE id_kategori = '$kategori'  ORDER BY kode_kasus_user ASC ") or die (mysqli_error($mysqli));
					        while ($row = mysqli_fetch_array($sql_kasus_user)) {
					            
					            ?>
					            <tr>
					                <td>
					                    <?=$no++?>
					                </td>
					                <td>
					                    <?=$row['kasus_user']?>
					                </td>
					                <td align="center"> 
					                    <a class="btn btn-primary btn-xs pilih" href="#" id="pilih<?=$no?>" data-id="<?=$row['id_kasus_user'] ?>"> Pilih</a>
					                </td>
					            </tr>
					        <?php
					        }
					        ?>						 									
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- <button type="submit" class="btn btn-success diagnosis" id="1">Diagnosa</button> -->
		<input type="hidden" id="untuk_gejala" name="untuk_gejala" value="mbuh">								
	</form>	
</div>


