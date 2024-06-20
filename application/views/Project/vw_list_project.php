<div class="col-md-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="float-right">
                <?php if ($user1['role'] == 'Planning') {   ?>
                <a href="<?= base_url() ?>Project/tambahproject" class="btn btn-success btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus-square"></i>
                    </span>
                    <span class="text">Tambah Data</span> </a><?php } ?>
            </div>
            <h6 class="m-0 font-weight-bold text-primary">Tabel Proyek - Sedang Berlangsung</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="table-warning">
                            <th width="5px">No</th>
                            <th>Nama Aplikasi</th>
                            <th>Persentase</th>
                            <th>Status</th>
                            <th>Tahun</th>
                            <th>Catatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i =1; ?>
                        <?php foreach ($project as $pro) : ?>
                        <tr>
                            <td><?= $i; ?>.</td>
                            <td><?= $pro['namaaplikasi']; ?></td>
                            <td>
                                <?php if($pro['progresbrd'] != null || $pro['bobotbrd'] != null ||
														 $pro['bobotfsd']  != null || $pro['bobotsit']  != null ||
														 $pro['bobotuat']  != null || $pro['bobotmigrasi']  != null){
															$hasil= $pro['progresbrd'];

															if ($pro['progresbrd'] == 0) {
																$brd = 0;
															} else { 
																$brd=$pro['progresbrd']/$pro['bobotbrd']*100;
															}

															if ($pro['progresdev'] == 0) {
																$dev = 0;
															} else { 
																$dev=$pro['progresdev']/$pro['bobotdev']*100;
															}

															if ($pro['progresfsd'] == 0) {
																$fsd = 0;
															} else { 
																$fsd=$pro['progresfsd']/$pro['bobotfsd']*100;
															}

															if ($pro['progressit'] == 0) {
																$sit = 0;
															} else { 
																$sit=$pro['progressit']/$pro['bobotsit']*100;
															}

															if ($pro['progresuat'] == 0) {
																$uat = 0;
															} else { 
																$uat=$pro['progresuat']/$pro['bobotuat']*100;
															}
															
															if ($pro['progresmigrasi'] == 0) {
																$migrasi = 0;
															} else { 
																$migrasi=$pro['progresmigrasi']/$pro['bobotmigrasi']*100;
															}

															
															?>
                                <?php $total=$brd+$fsd+$sit+$uat+$dev+$migrasi;
																					$persen = ($total/6);?>
                                <?php if($persen == 100){ ?>

                                <a class="badge badge-success" style="pointer-events: none"><?php echo floor($persen);?>
                                    %</a>

                                <?php }else if ($persen <=99){?>
                                <a class="badge badge-warning" style="pointer-events: none"><?php echo floor($persen);?>
                                    %</a>

                                <?php  
																						}?>

                                <?php }else{echo $total=0; 
													}
													
														 
														?>
                            </td>
                            <td><?= $pro['status']; ?></td>
                            <td><?= $pro['tahun']; ?></td>
                            <td><?= $pro['keterangan']; ?></td>
                            <td>
                                <a href="<?= base_url('Project/detail/'). $pro['id_project']; ?>"
                                    class="badge badge-secondary">Detail</a>
                                <?php if ($user1['role'] == 'Planning') {   ?>
                                <!-- <a href="<?= base_url('Project/hapusproject/'). $pro['id_project']; ?> "
															class="badge badge-danger"
															onclick="return confirm('Are you sure want to delete this?');"
															class="ik ik-trash-2 text-red">Delete</a> -->
                                <?php } ?>
                            </td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<script src="<?= base_url('assets/js/demo/datatables-demo.js') ?>"></script>
<script src="<?= base_url('assets') ?>/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets') ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>
