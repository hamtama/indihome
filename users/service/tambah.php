<?php  
require_once ('../../login/connection.php');
if ($_POST['nama'] && $_POST['email'] ){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $kategori = $_POST['kategori'];
    
    
    ?>
    <div class="alert alert-success col-md-12" align="center" role="alert">
        Hai <?php echo $nama ?> Silahkan Pilih Gejala Anda. Kemudian Temukan Solusi Terbaiknya.
    </div>
<form action="">
<div class="card bg border-success" >
                        <div class="card-header bg bg-success">
                            <h4 class="col-md-12 text-center  text-white">GEJALA JARINGAN LAN </h4>
                        </div>
                        <div class="card-body">
                            <form action="#" method="post">
                            <?php
                                
                                $no = 0;  
                                $sql_gejala = mysqli_query($mysqli, "SELECT * FROM tb_gejala  ORDER BY id_gejala ASC") or die (mysqli_error($mysqli));
                                while ($row = mysqli_fetch_array($sql_gejala)) {
                                $no = $no+1
                                ?><div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label style="width:100%" class="input-group-text" for="nama_gejala" ><?=$no.'. '.$row['gejala']?></label>
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
</form>
<?php 
}
 ?>