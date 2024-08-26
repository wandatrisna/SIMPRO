<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 ">
            <div class="pcoded-content">
                <section class="common-img-bg1">
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">
                                    <div class="float">
                                        <a href="<?= base_url('Project/indexlistproject/'). $project1['id_project']; ?>"
                                            class="btn btn-secondary mb-2">Kembali</a>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-xl-8">
                                            <div class="card"
                                                style="background-color: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); transition: 0.3s;">
                                                <div
                                                    class="card-header py-3 d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h3 class="mb-0">
                                                            <strong><?= $project1['namaaplikasi']; ?></strong>
                                                        </h3>
                                                        <p>Terakhir diperbarui
                                                            <?= isset($project1['last_updated_time']) ? htmlspecialchars($project1['last_updated_time']) : 'N/A'; ?>
                                                            oleh
                                                            <?= isset($project1['updated_by_name']) ? htmlspecialchars($project1['updated_by_name']) : 'N/A'; ?>
                                                        </p>
                                                    </div>
                                                    <?php if ($user1['role'] == 'Planning') { ?>
                                                    <a href="javascript:;"
                                                        data-id="<?php echo $project1['id_project'] ?>"
                                                        data-namaaplikasi="<?php echo $project1['namaaplikasi'] ?>"
                                                        data-jenisproject="<?php echo $project1['jenisproject'] ?>"
                                                        data-jenisaplikasi="<?php echo $project1['jenisaplikasi'] ?>"
                                                        data-tahun="<?php echo $project1['tahun'] ?>"
                                                        data-keterangan="<?php echo $project1['keterangan'] ?>"
                                                        data-targetp="<?php echo $project1['target'] ?>"
                                                        data-tanggalregister="<?php echo $project1['tanggalregister'] ?>"
                                                        data-urf="<?php echo $project1['urf'] ?>" data-toggle="modal"
                                                        data-target="#editModal">
                                                        <button data-toggle="modal" data-target="#ubah-data"
                                                            class="btn btn-success">Perbarui</button>
                                                    </a>
                                                    <?php } ?>
                                                </div>

                                                <table class="table table-hover">
                                                    <tbody>
                                                        <?php
                                                            $data = [
                                                                ['label' => 'Jenis Proyek', 'value' => $jenisp['jenisproject'], 'color' => 'bg-c-blue', 'width' => '80%'],
                                                                ['label' => 'Jenis Aplikasi', 'value' => $jenisa['jenisaplikasi'], 'color' => 'bg-c-pink', 'width' => '60%'],
                                                                ['label' => 'Dokumen URF', 'value' => $project1['urf'], 'color' => 'bg-c-blue', 'width' => '50%'],
                                                                ['label' => 'Tahun', 'value' => $project1['tahun'], 'color' => 'bg-c-yellow', 'width' => '50%'],
                                                                ['label' => 'Target Selesai', 'value' => $project1['target'], 'color' => 'bg-c-blue', 'width' => '50%'],
                                                                ['label' => 'Tanggal Mulai', 'value' => $project1['tanggalregister'], 'color' => 'bg-c-blue', 'width' => '50%'],
                                                                ['label' => 'Keterangan', 'value' => $project1['keterangan'], 'color' => 'bg-c-blue', 'width' => '50%'],
                                                                ['label' => 'Tanggal Dibuat', 'value' => date('Y-m-d', $project1['date_created']), 'color' => 'bg-c-blue', 'width' => '50%'],
                                                            ];

                                                            foreach ($data as $item) {
                                                                echo '<tr>';
                                                                echo '<td>';
                                                                echo '<div class="task-contain">';
                                                                echo '<p class="d-inline-block m-l-20"><strong>' . $item['label'] . '</strong></p>';
                                                                echo '</div>';
                                                                echo '</td>';
                                                                echo '<td>';
                                                                echo '<p class="d-inline-block m-r-20">' . $item['value'] . '</p>';
                                                                echo '<div class="progress d-inline-block">';
                                                                echo '<div class="progress-bar ' . $item['color'] . '" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:' . $item['width'] . '"></div>';
                                                                echo '</div>';
                                                                echo '</td>';
                                                                echo '</tr>';
                                                            }
                                                            ?>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>


                                        <div class="col-md-12 col-xl-4">
                                            <div class="card"
                                                style="background-color: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); transition: 0.3s;">
                                                <div class="card-header text-center">
                                                    <h5><strong>Activity</strong></h5>
                                                </div>

                                                <div class="card-block">
                                                    <div class="float">
                                                        <table class="table">
                                                            <thead>
                                                                <tr class="table-success">
                                                                    <th>Activity</th>
                                                                    <th>Progres</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><?php echo ($project1['jenisaplikasi'] == 4) ? 'CR' : 'BRD'; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        $hasil = $project1['progresbrd'];
                                                                        if ($project1['bobotbrd'] == 0) {
                                                                            echo '0%';
                                                                        } else {
                                                                            echo round($hasil / $project1['bobotbrd'] * 100) . '%';
                                                                        }
                                                                        ?>
                                                                    </td>
                                                                    <td>
                                                                        <a href="<?= base_url('Project/detailbrd/') . $project1['id_project']; ?>"
                                                                            class="badge badge-success">Detail</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>FSD</td>
                                                                    <td>
                                                                        <?php
                                                                        $hasil = $project1['progresfsd'];
                                                                        echo ($project1['bobotfsd'] == 0) ? '0%' : round($hasil / $project1['bobotfsd'] * 100) . '%';
                                                                        ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php if ($project1['bobotbrd'] != 0 && round($project1['progresbrd'] / $project1['bobotbrd'] * 100) == 100) { ?>
                                                                        <a href="<?= base_url('Project/detailfsd/') . $project1['id_project']; ?>"
                                                                            class="badge badge-success">Detail</a>
                                                                        <?php } else { ?>
                                                                        <a href="#" class="badge badge-secondary"
                                                                            data-toggle="modal"
                                                                            data-target="#errorModal1">Detail</a>
                                                                        <?php } ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Development</td>
                                                                    <td>
                                                                        <?php
                                                                        $hasil = $project1['progresdev'] * 100;
                                                                        if ($project1['bobotdev'] == 0) {
                                                                            echo '0%';
                                                                        } else {
                                                                            echo floor($hasil / $project1['bobotdev']) . '%';
                                                                        }
                                                                        ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php if ($project1['bobotfsd'] != 0 && round($project1['progresfsd'] / $project1['bobotfsd'] * 100) == 100) { ?>
                                                                        <a href="<?= base_url('Project/detaildev/') . $project1['id_project']; ?>"
                                                                            class="badge badge-success">Detail</a>
                                                                        <?php } else { ?>
                                                                            <a href="#" class="badge badge-secondary"
                                                                            data-toggle="modal"
                                                                            data-target="#errorModal1">Detail</a>
                                                                        <?php } ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>SIT</td>
                                                                    <td>
                                                                        <?php
                                                                        $hasil = $project1['progressit'];
                                                                        if ($project1['bobotsit'] == 0) {
                                                                            echo '0%';
                                                                        } else {
                                                                            echo round($hasil / $project1['bobotsit'] * 100) . '%';
                                                                        }
                                                                        ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php if ($project1['bobotdev'] != 0 && round($project1['progresdev'] * 100 / $project1['bobotdev']) == 100) { ?>
                                                                        <a href="<?= base_url('Project/detailsit/') . $project1['id_project']; ?>"
                                                                            class="badge badge-success">Detail</a>
                                                                        <?php } else { ?>
                                                                            <a href="#" class="badge badge-secondary"
                                                                            data-toggle="modal"
                                                                            data-target="#errorModal1">Detail</a>
                                                                        <?php } ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>UAT</td>
                                                                    <td>
                                                                        <?php
                                                                        $hasil = $project1['progresuat'];
                                                                        if ($project1['bobotuat'] == 0) {
                                                                            echo '0%';
                                                                        } else {
                                                                            echo round($hasil / $project1['bobotuat'] * 100) . '%';
                                                                        }
                                                                        ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php if ($project1['bobotsit'] != 0 && round($project1['progressit'] / $project1['bobotsit'] * 100) == 100) { ?>
                                                                        <a href="<?= base_url('Project/detailuat/') . $project1['id_project']; ?>"
                                                                            class="badge badge-success">Detail</a>
                                                                        <?php } else { ?>
                                                                            <a href="#" class="badge badge-secondary"
                                                                            data-toggle="modal"
                                                                            data-target="#errorModal1">Detail</a>
                                                                        <?php } ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Migrasi</td>
                                                                    <td>
                                                                        <?php
                                                                        $hasil = $project1['progresmigrasi'];
                                                                        if ($project1['bobotmigrasi'] == 0) {
                                                                            echo '0%';
                                                                        } else {
                                                                            echo round($hasil / $project1['bobotmigrasi'] * 100) . '%';
                                                                        }
                                                                        ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php if ($project1['bobotuat'] != 0 && round($project1['progresuat'] / $project1['bobotuat'] * 100) == 100) { ?>
                                                                        <a href="<?= base_url('Project/detailmigrasi/') . $project1['id_project']; ?>"
                                                                            class="badge badge-success">Detail</a>
                                                                        <?php } else { ?>
                                                                        <a href="#" class="badge badge-secondary"
                                                                            data-toggle="modal"
                                                                            data-target="#errorModal1">Detail</a>
                                                                        <?php } ?>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>



                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- form edit -->
                                        <form
                                            action="<?php echo base_url('Project/editproject/') . $project1['id_project']; ?>"
                                            method="POST" enctype="multipart/form-data">
                                            <div id="editModal" class="modal fade" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Perbarui
                                                                Project</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <input type="hidden" name="id_project"
                                                                value="<?= $project1['id_project']; ?>">
                                                            <input type="hidden" name="updated_by"
                                                                value="<?= $user1['NIK']; ?>">

                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Nama
                                                                    Aplikasi</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="namaaplikasi"
                                                                        class="form-control"
                                                                        value="<?= $project1['namaaplikasi']; ?>"
                                                                        id="namaaplikasi"
                                                                        placeholder="Masukkan nama aplikasi">
                                                                    <?= form_error('namaaplikasi', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Jenis
                                                                    Proyek</label>
                                                                <div class="col-sm-9">
                                                                    <select name="jenisproject" class="form-control"
                                                                        id="jenisproject">
                                                                        <?php foreach ($jenisproject as $p) { ?>
                                                                        <option value="<?= $p['id_jenisproject'] ?>"
                                                                            <?= ($project1['jenisproject'] == $p['id_jenisproject']) ? 'selected' : ''; ?>>
                                                                            <?= $p['namajenisproject'] ?>
                                                                        </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Jenis
                                                                    Aplikasi</label>
                                                                <div class="col-sm-9">
                                                                    <select name="jenisaplikasi" class="form-control"
                                                                        id="jenisaplikasi">
                                                                        <?php foreach ($jenisaplikasi as $p) { ?>
                                                                        <option value="<?= $p['id_jenisaplikasi'] ?>"
                                                                            <?= ($project1['jenisaplikasi'] == $p['id_jenisaplikasi']) ? 'selected' : ''; ?>>
                                                                            <?= $p['namajenisaplikasi'] ?>
                                                                        </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Tahun</label>
                                                                <div class="col-sm-9">
                                                                    <select class="form-control" name="tahun"
                                                                        id="tahun">
                                                                        <?php
                                                                        for ($year = (int)date('Y'); 2000 <= $year; $year--) {
                                                                        ?>
                                                                        <option value="<?= $year; ?>"
                                                                            <?= ($project1['tahun'] == $year) ? 'selected' : ''; ?>>
                                                                            <?= $year; ?>
                                                                        </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                    <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Target
                                                                    Selesai</label>
                                                                <div class="col-sm-9">
                                                                    <input type="month" name="target"
                                                                        value="<?= $project1['target']; ?>"
                                                                        class="form-control" id="target"
                                                                        placeholder="Masukkan Target">
                                                                    <?= form_error('target', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Tanggal
                                                                    Mulai</label>
                                                                <div class="col-sm-9">
                                                                    <input type="date" name="tanggalregister"
                                                                        value="<?= $project1['tanggalregister']; ?>"
                                                                        class="form-control" id="tanggalregister"
                                                                        placeholder="Masukkan Tanggal register">
                                                                    <?= form_error('tanggalregister', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Unggah
                                                                    Dokumen</label>
                                                                <div class="col-sm-9">
                                                                    <input type="file" name="urf" class="form-control"
                                                                        id="file" placeholder="Masukkan file">
                                                                    <?= form_error('urf', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Catatan</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="keterangan"
                                                                        value="<?= $project1['keterangan']; ?>"
                                                                        class="form-control" id="keterangan"
                                                                        placeholder="Masukkan keterangan">
                                                                    <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Tutup</button>
                                                            <button type="submit"
                                                                class="btn btn-success">Perbarui</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>


                                        <!-- Modal for Error Message -->
                                        <div class="modal fade" id="errorModal1" tabindex="-1" role="dialog"
                                            aria-labelledby="errorModalLabel2" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="errorModalLabel2">Peringatan</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Harap selesaikan aktivitas sebelumnya sebelum melanjutkan
                                                        progres!
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Tutup</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- Include jQuery and Bootstrap JS for modal functionality -->
                                        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                                        <script
                                            src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js">
                                        </script>

                                        <!-- Script for handling modals -->
                                        <script>
                                        $(document).ready(function() {
                                            // Event listener untuk memicu error modal jika progres tidak terpenuhi
                                            $('.badge-secondary').on('click', function() {
                                                $('#errorModal1').modal('show');
                                            });
                                        });

                                        $(document).ready(function() {
                                            // Untuk sunting data
                                            $('#edit-data').on('show.bs.modal', function(event) {
                                                var div = $(event
                                                    .relatedTarget); // Tombol dimana modal di tampilkan
                                                var modal = $(this);

                                                // Isi nilai pada field
                                                modal.find('#id_project').val(div.data('id_project'));
                                                modal.find('#namaaplikasi').val(div.data(
                                                    'namaaplikasi'));
                                                modal.find('#jenisproject').val(div.data(
                                                    'jenisproject'));
                                                modal.find('#jenisaplikasi').val(div.data(
                                                    'jenisaplikasi'));
                                                modal.find('#tahun').val(div.data('tahun'));
                                                modal.find('#keterangan').val(div.data('keterangan'));
                                                modal.find('#target').val(div.data('target'));
                                                modal.find('#tanggalregister').val(div.data(
                                                    'tanggalregister'));
                                                modal.find('#urf').val(div.data('urf'));
                                            });

                                        });
                                        </script>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>