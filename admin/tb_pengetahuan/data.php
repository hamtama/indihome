<?php
require_once('../../layout/wrapperadmin/head.php');
require_once('../../layout/wrapperadmin/sidebar.php');
require_once('../../layout/wrapperadmin/header.php');
require_once('../../layout/wrapperadmin/content.php');
?>
<div class="">
    <div class="clearfix"></div>
    <div class="row">

        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Data Pengetahuan</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>

                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <button class="btn btn-success tambah" id="01"><i class="fa fa-plus"> Tambah</i></button>
                <a class="btn btn-success" href="../tb_pengetahuan_user/data.php" id="01"><i class="fa fa-link"> Data
                        Pengetahuan User</i></a>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <table id="datatable-responsive"
                                    class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                                    width="100%">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;"><i class="fa fa-cog"></i></th>
                                            <th>No </th>
                                            <th>Kode Rule</th>
                                            <th>Gejala 1 </th>
                                            <th>Gejala 2 </th>
                                            <th>Gejala 3 </th>
                                            <th>Gejala 4 </th>
                                            <th>Gejala 5 </th>
                                            <th>Gejala 6 </th>
                                            <th>Gejala 7 </th>
                                            <th>Presentase</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
										$no = 1;
										$query = "SELECT tb_pengetahuan.*,tb_rule.kode_rule FROM tb_pengetahuan LEFT JOIN tb_rule  ON tb_rule.id_rule = tb_pengetahuan.id_rule ORDER BY kode_rule ASC";
										$sql_relasi = mysqli_query($mysqli, $query) or die(mysqli_error($query));
										if (mysqli_num_rows($sql_relasi) > 0) {
											while ($row = mysqli_fetch_array($sql_relasi)) {
										?>
                                        <tr>
                                            <td style="width:10%">
                                                <button class="btn btn-warning btn-xs edit" data-id="<?= $row[0] ?>"
                                                    id="<?= $row[1] ?>"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-danger btn-xs"
                                                    onclick="javascript:delete_id(<?= $row[0] ?>)"><i
                                                        class="fa fa-trash"></i></button>
                                            </td>
                                            <td><?= $no++ ?>.</td>
                                            <td><?= $row['kode_rule'] ?></td>
                                            <td><?= $row['n_gejala1'] ?></td>
                                            <td><?= $row['n_gejala2'] ?></td>
                                            <td><?= $row['n_gejala3'] ?></td>
                                            <td><?= $row['n_gejala4'] ?></td>
                                            <td><?= $row['n_gejala5'] ?></td>
                                            <td><?= $row['n_gejala6'] ?></td>
                                            <td><?= $row['n_gejala7'] ?></td>
                                            <td><?= round($row['presentase'], 2) ?>% </td>

                                        </tr>
                                        <?php
											}
										} else {
											echo "<tr><td colspan=\"11\" align=\"center\"> Data Tidak Ditemukan </td></tr>";
										}
										?>
                                    </tbody>
                                </table>

                                <div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="judul"></h4>
                                                <button type="button" class="close" data-dismiss="modal"><span
                                                        aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="fetched-data">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
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
$(document).ready(function() {
    $('.tambah').click(function() {
        var id = $(this).attr('id');

        //Menggunakan fungsi Ajax untuk Pengambilan Data
        $.ajax({
            type: 'post',
            url: 'tambah.php',
            data: {
                id: id
            },
            success: function(data) {
                $('.fetched-data').html(data); //menampilkan data ke dalam modal
                $('#myModal').modal('show');
                document.getElementById("judul").innerHTML = "Tambah Data Pengetahuan";
            }
        });
    });
});

function delete_id(id) {
    if (confirm('Anda Serius Untuk Menghapus Data ?')) {
        window.location.href = 'hapus.php?delete_id=' + id;
    }
}
$(document).ready(function() {
    $('.edit').click(function() {
        var rowid = $(this).attr('data-id');
        var id_rule = $(this).attr('id');
        console.log(id_rule);
        console.log(rowid);
        //Menggunakan fungsi Ajax untuk Pengambilan Data
        $.ajax({
            type: 'post',
            url: 'edit.php',
            data: {
                rowid: rowid,
                id_rule: id_rule
            },
            success: function(data) {
                $('.fetched-data').html(data); //menampilkan data ke dalam modal
                $('#myModal').modal('show');
                document.getElementById("judul").innerHTML = "Edit Data Relasi";
            }
        });
    });
});
</script>
<?php
require_once('../../layout/wrapperadmin/footer.php');
?>