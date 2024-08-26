<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <?php if ($user1['role'] == 'Planning'|| $user1['role'] == 'Pinbag') { ?>
            <div class="float">
                <a href="<?= base_url('Inhouse/subinhouse/') . $inhouse['nama_in']; ?>"
                    class="btn btn-secondary">Kembali</a>
            </div>
            <?php } elseif ($user1['role'] == 'Support' || $user1['role'] == 'Development') { ?>
            <div class="float">
                <a href="<?= base_url() ?>Inhouse/sup_indexinhouse" class="btn btn-secondary">Kembali</a>
            </div>
            <?php } ?>
            <br>
            <div class="card"
                style="background-color: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); transition: 0.3s;">
                <div class="card-header justify-content-center text-primary">
                    <h6 class="m-0 font-weight-bold text-primary">Detail Inhouse</h6>
                </div>
                <?= $this->session->flashdata('message') ?>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_in" value="<?= $inhouse['id_in']; ?>">
                        <div class="form-group">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label"><strong>&emsp;Nama Aplikasi</strong></label>
                                <div class="col-sm-8 col-form-label">: <?= $inhouse['nama_in']; ?></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label"><strong>&emsp;Tanggal PMF</strong></label>
                                <div class="col-sm-8 col-form-label">: <?= $inhouse['tgl_penyerahan_pmf']; ?></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label"><strong>&emsp;Tanggal Migrasi</strong></label>
                                <div class="col-sm-8 col-form-label">: <?= $inhouse['tgl_migrasi_prod']; ?></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label"><strong>&emsp;PIC (Perencanaan)</strong></label>
                                <div class="col-sm-8 col-form-label">: <?= $inhouse['pic_plan_in']; ?></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label"><strong>&emsp;PIC (Pengembangan)</strong></label>
                                <div class="col-sm-8 col-form-label">: <?= $inhouse['pic_dev_in']; ?></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label"><strong>&emsp;PIC (Migrasi)</strong></label>
                                <div class="col-sm-8 col-form-label">: <?= $nama_pic['nama'] ?></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label"><strong>&emsp;Form PMF</strong></label>
                                <div class="col-sm-8 col-form-label">
                                    : <?= $inhouse['doc_form_pmf']; ?>
                                    <?php if ($inhouse['doc_form_pmf'] != null) { ?>
                                    <a href="<?= base_url('/assets/dokumeninhouse/') . $inhouse['doc_form_pmf']; ?>"
                                        class="badge badge-info" target="_blank">Lihat</a>
                                    <a href="<?= base_url('Inhouse/downloadpmf/') . $inhouse['doc_form_pmf']; ?>"
                                        class="badge badge-success">Unduh</a>
                                    <?php } else { ?>
                                    <span class="badge badge-secondary">Tidak tersedia</span>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label"><strong>&emsp;Dokumen Library</strong></label>
                                <div class="col-sm-8 col-form-label">
                                    : <?= $inhouse['doc_library']; ?>
                                    <?php if ($inhouse['doc_library'] != null) { ?>
                                    <a href="<?= base_url('/assets/dokumeninhouse/') . $inhouse['doc_library']; ?>"
                                        class="badge badge-info" target="_blank">Lihat</a>
                                    <a href="<?= base_url('Inhouse/downloadlib/') . $inhouse['doc_library']; ?>"
                                        class="badge badge-success">Unduh</a>
                                    <?php } else { ?>
                                    <span class="badge badge-secondary">Tidak tersedia</span>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label"><strong>&emsp;Dokumen Lain</strong></label>
                                <div class="col-sm-8 col-form-label">
                                    : <?= $inhouse['doc_lain']; ?>
                                    <?php if ($inhouse['doc_lain'] != null) { ?>
                                    <a href="<?= base_url('/assets/dokumeninhouse/') . $inhouse['doc_lain']; ?>"
                                        class="badge badge-info" target="_blank">Lihat</a>
                                    <a href="<?= base_url('Inhouse/downloadlain/') . $inhouse['doc_lain']; ?>"
                                        class="badge badge-success">Unduh</a>
                                    <?php } else { ?>
                                    <span class="badge badge-secondary">Tidak tersedia</span>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label"><strong>&emsp;Berita Acara
                                        Migrasi</strong></label>
                                <div class="col-sm-8 col-form-label">
                                    : <?= $inhouse['doc_check_list']; ?>
                                    <?php if ($inhouse['doc_check_list'] != null) { ?>
                                    <a href="<?= base_url('/assets/dokumeninhouse/') . $inhouse['doc_check_list']; ?>"
                                        class="badge badge-info" target="_blank">Lihat</a>
                                    <a href="<?= base_url('Inhouse/downloadcheck/') . $inhouse['doc_check_list']; ?>"
                                        class="badge badge-success">Unduh</a>
                                    <?php } else { ?>
                                    <span class="badge badge-secondary">Tidak tersedia</span>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label"><strong>&emsp;Deskripsi
                                        Perencanaan</strong></label>
                                <div class="col-sm-8 col-form-label">: <?= $inhouse['keterangan_in']; ?></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label"><strong>&emsp;Status Migrasi</strong></label>
                                <div class="col-sm-8 col-form-label">
                                    :
                                    <?php if ($inhouse['note_in'] == 'Pending') { ?>
                                    <span class="badge badge-danger">Pending</span>
                                    <?php } elseif ($inhouse['note_in'] == 'On Progress') { ?>
                                    <span class="badge badge-warning">On Progress</span>
                                    <?php } elseif ($inhouse['note_in'] == 'Done') { ?>
                                    <span class="badge badge-success">Done</span>
                                    <?php } else { ?>
                                    <span class="badge badge-secondary">Null</span>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label"><strong>&emsp;Catatan Migrasi</strong></label>
                                <div class="col-sm-8 col-form-label">: <?= $inhouse['comment_in']; ?></div>
                            </div>
                        </div>
                        <?php if ($user1['role'] == 'Planning') { ?>
                        <div class="col-md-12">
                            <a href="<?= base_url('Inhouse/editinhouse/') . $inhouse['id_in']; ?>"
                                class="btn btn-success btn-round btn-block">Perbarui (Dokumen)</a>
                        </div>
                        <?php } elseif ($user1['role'] == 'Support' || $user1['role'] == 'Development') { ?>
                        <div class="col-md-12">
                            <a href="<?= base_url('Inhouse/sup_editinhouse/') . $inhouse['id_in']; ?>"
                                class="btn btn-success btn-round btn-block">Perbarui Data</a>
                        </div>
                        <?php } ?>
                    </form>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>