<?php  
if(isset($_POST['untuk_gejala'])){
$id_kasus = $_POST['kasus'];
$r = mysqli_query($mysqli, "SELECT id_rule_user FROM tb_rule_user WHERE id_kasus_user ='$id_kasus'");
$id_rule = '';
while ($q = mysqli_fetch_array($r)) {
	$id_rule = $q[0];
}
	

?>
<div class="x_content gejala">
	<form action="#" method="post" id="gejala_indihome">
		<input type="hidden" id="kasus_hasil" name="kasus_hasil" value="<?=$id_kasus?>">
		<input type="hidden" name="id_rule" value="<?=$id_rule?>">
		<div class="row">
			<div class="col-sm-12">
				<div class="card-box table-responsive">
					<table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="width: 100%" >
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Gejala Indihome User</th>
								<th>Pilih Bobot</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$no = 1;
								$n = 1;
								$kategori = 4;
								$ruleGejala = mysqli_query($mysqli, "SHOW COLUMNS FROM tb_rule_user WHERE Field LIKE '%gejala%'");
							    $tg = 1;
							    while($fc = mysqli_fetch_assoc($ruleGejala)){
							        $fetchCol[$tg] = $fc['Field'];
							        $tg++;
							    }
							    $number = sizeof($fetchCol)+1;
								$gjl = "";
							    for ($i = 1; $i<$number; $i++){
							        if($fetchCol[$i] != ''){
							            $gjl .= "".$fetchCol[$i]."";
							            if($i != $number-1){
							                $gjl .= " , ";
							            }
							        } 
							    }
							    
							   
								
								        
								$sql_rule = mysqli_query($mysqli, "SELECT $gjl FROM tb_rule_user WHERE id_kategori = $kategori AND id_kasus_user ='$id_kasus'") or die (mysqli_error($mysqli));
									
									foreach ($sql_rule->fetch_all(MYSQLI_ASSOC) as $b) {
										
										foreach ($b as $key => $value) {
											$sql_gejala = mysqli_query($mysqli, "SELECT gejala_user FROM tb_gejala_user WHERE id_kategori = '$kategori' AND kode_gejala_user ='$value' ");
											if(mysqli_num_rows($sql_gejala) > 0) {
												while ($row = mysqli_fetch_array($sql_gejala)) {
												?>
													<tr>
														
														<td><?=$no++?></td>
														<td><?=$row[0]?></td>
														<td>
															<select  class="custom-select" id="gejala_<?=$n?>" name="gejala<?=$n?>">
		                                                        <?php
		                                                        $sql_bobot = mysqli_query($mysqli, "SELECT * FROM tb_bobot WHERE 1 ORDER BY id_bobot ASC") or die (mysqli_error($mysqli));
		                                                        while ($row_2 = mysqli_fetch_array($sql_bobot)) {
		                                                            echo '<option value="'.$row_2['nilai_bobot'].'">'.$row_2['status_bobot'].'</option>';
		                                                        }
		                                                        ?>
		                                                    </select>
														</td>
													</tr>

												<?php
												}
											} else {
												echo '<input style="display: none" type="text" name="gejala'.$n.'" value="0">';
											}
											$n++;
										}
									}
								?>						
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<button type="submit" class="btn btn-success diagnosis" id="1">Diagnosa</button>
		<button type="button" class="btn btn-primary" onclick="window.location.href='pakar_indihome_user.php';">Pilih Kasus</button>
		<input type="hidden" id="masuk" name="kera" value="mbuh">								
	</form>	
</div>
<script type="text/javascript">
	$(document).ready(function(){
		
			var kasus = document.getElementById('kasus_hasil').value;
			if (kasus == 0 ){
                $('.gejala').hide('slow');
            } else {
                $('.kasus').hide('slow');
                $('.gejala').show('slow');	
                document.getElementById('judul').innerHTML = 'Pilih Gejala Indihome User';	
            }	
	
	});	
</script>
<?php  
}
?>
