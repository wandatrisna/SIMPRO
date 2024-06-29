<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4" onclick="location.href='<?= base_url('Project/undone/') ?>';">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Sedang Berlangsung</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $progrespro ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-edit fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-4" onclick="location.href='<?= base_url('Project/done/') ?>';">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Selesai</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $donepro ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-check fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-4" onclick="location.href='<?= base_url('Project/') ?>';">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                SELURUH PROYEK</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $allpro ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-list-alt fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card" style="background-color: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); transition: 0.3s;">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Proyek TSI</h6>
            <div class="d-flex justify-content-end align-items-center">

                <?php if ($user1['role'] == 'Pinbag') {   ?>
                <form action="<?= base_url('Project/print') ?>" method="post" target="_blank"
                    class="d-flex align-items-center">
                    <label for="tahun" class="mr-2 mb-0">Pilih tahun yang akan dicetak datanya </label>
                    <div class="form-group mb-0">
                        <select name="tahun" id="tahun" class="form-control">
                            <?php if(!empty($tahun)): ?>
                            <?php foreach ($tahun as $year): ?>
                            <option value="<?= $year['tahun'] ?>"><?= $year['tahun'] ?></option>
                            <?php endforeach; ?>
                            <?php else: ?>
                            <option value="">Tidak ada data tahun</option>
                            <?php endif; ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm ml-2">
                        <i class="fas fa-file"></i> Print
                    </button>
                </form>
                <?php } ?>

                <div class="float-right">
                    <?php if ($user1['role'] == 'Planning') {   ?>
                    <a href="<?= base_url() ?>Project/tambahproject" class="btn btn-success btn-icon-split btn-sm">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus-square"></i>
                        </span>
                        <span class="text">Tambah Data</span> </a><?php } ?>
                </div>

            </div>
        </div>


        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="table-warning">
                            <th width="5%">No</th>
                            <th>Nama Aplikasi</th>
                            <th>Persentase</th>
                            <th>Status</th>
                            <th>Tahun</th>
                            <th>Catatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($project as $pro): ?>
                        <tr>
                            <td><?= $i; ?>.</td>
                            <td><?= $pro['namaaplikasi']; ?></td>
                            <td>
                                <?php if (
                                            $pro['progresbrd'] != null || $pro['bobotbrd'] != null ||
                                            $pro['bobotfsd'] != null || $pro['bobotsit'] != null ||
                                            $pro['bobotuat'] != null || $pro['bobotmigrasi'] != null
                                        ) {
                                            $hasil = $pro['progresbrd'];

                                            if ($pro['progresbrd'] == 0) {
                                                $brd = 0;
                                            } else {
                                                $brd = $pro['progresbrd'] / $pro['bobotbrd'] * 100;
                                            }

                                            if ($pro['progresdev'] == 0) {
                                                $dev = 0;
                                            } else {
                                                $dev = $pro['progresdev'] / $pro['bobotdev'] * 100;
                                            }

                                            if ($pro['progresfsd'] == 0) {
                                                $fsd = 0;
                                            } else {
                                                $fsd = $pro['progresfsd'] / $pro['bobotfsd'] * 100;
                                            }

                                            if ($pro['progressit'] == 0) {
                                                $sit = 0;
                                            } else {
                                                $sit = $pro['progressit'] / $pro['bobotsit'] * 100;
                                            }

                                            if ($pro['progresuat'] == 0) {
                                                $uat = 0;
                                            } else {
                                                $uat = $pro['progresuat'] / $pro['bobotuat'] * 100;
                                            }

                                            if ($pro['progresmigrasi'] == 0) {
                                                $migrasi = 0;
                                            } else {
                                                $migrasi = $pro['progresmigrasi'] / $pro['bobotmigrasi'] * 100;
                                            }

                                            $total = $brd + $fsd + $sit + $uat + $dev + $migrasi;
                                            $persen = ($total / 6);

                                            if ($persen == 100) {
                                                echo '<span class="badge badge-success">' . floor($persen) . '%</span>';
                                            } else if ($persen > 0 && $persen < 100) {
                                                echo '<span class="badge badge-warning">' . floor($persen) . '%</span>';
                                            } else if ($persen == 0) {
                                                echo '<span class="badge badge-danger">0%</span>';
                                            }
                                        }
                                    ?>
                            </td>
                            <td><?= $pro['status']; ?></td>
                            <td><?= $pro['tahun']; ?></td>
                            <td><?= $pro['keterangan']; ?></td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url('assets/js/demo/datatables-demo.js') ?>"></script>
<script src="<?= base_url('assets/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>