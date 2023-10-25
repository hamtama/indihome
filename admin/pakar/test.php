
<?php  
require_once ('../../login/connection.php');

							$no = 1;
							$kategori = 4;
							$id_kasus = "<script>console.log(data)</script>";
							
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
							print_r($gjl);
									?>
									<table border="1">
										<caption>table title and/or explanatory text</caption>
										<thead>
											<tr>
												<th>No</th>
												<th>Nama Gejala</th>
												<th>Pilih Bobot</th>
											</tr>
										</thead>
										<tbody>
											<?php  
											$sql_rule = mysqli_query($mysqli, "SELECT $gjl FROM tb_rule_user WHERE id_kategori = $kategori AND id_kasus_user ='3'") or die (mysqli_error($mysqli));
												foreach ($sql_rule->fetch_all(MYSQLI_ASSOC) as $b) {
													foreach ($b as $key => $value) {
														$sql_gejala = mysqli_query($mysqli, "SELECT gejala_user FROM tb_gejala_user WHERE id_kategori = '$kategori' AND kode_gejala_user ='$value' ");
														while ($row = mysqli_fetch_array($sql_gejala)) {
															?>
																<tr>
																	<td><?=$no++?></td>
																	<td><?=$row[0]?></td>
																	<td>
																		<select  class="custom-select" id="gejala_<?=$no?>" name="gejala<?=$no?>">
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
													}
												}
																			
											?>
										</tbody>
									</table>
																
								

