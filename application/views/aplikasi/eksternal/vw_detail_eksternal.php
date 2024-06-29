<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <?php if ($user1['role'] == 'Planning') { ?>
            <div class="float">
                <a href="<?= base_url('Eksternal/subeksternal/'). $eksternal['nama_eks']; ?>"
                    class="btn btn-secondary">Kembali</a>
            </div>
            <?php } elseif ($user1['role'] == 'Support' | $user1['role'] == 'Development') { ?>
            <div class="float">
                <a href="<?= base_url() ?>Eksternal/sup_indexeksternal" class="btn btn-secondary">Kembali</a>
            </div>
            <?php } ?>
            <br>
            <div class="card"
                style="background-color: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); transition: 0.3s;">
                <div class="card-header justify-content-center text-primary">
                    <h6 class="m-0 font-weight-bold text-primary">Detail Eksternal</h6>
                </div>
                <?= $this->session->flashdata('message') ?>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_eks" value="<?= $eksternal['id_eks']; ?>">
                        <div class="form-group">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label"><strong>&emsp;Nama Aplikasi</strong></label>
                                <div class="col-sm-8 col-form-label">: <?= $eksternal['nama_eks']; ?></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label"><strong>&emsp;Tanggal Penyerahan
                                        PMF</strong></label>
                                <div class="col-sm-8 col-form-label">: <?= $eksternal['tgl_penyerahan_pmf']; ?></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label"><strong>&emsp;Tanggal Migrasi</strong></label>
                                <div class="col-sm-8 col-form-label">: <?= $eksternal['tgl_migrasi']; ?></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label"><strong>&emsp;PIC (Planning)</strong></label>
                                <div class="col-sm-8 col-form-label">: <?= $eksternal['pic_plan_eks']; ?></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label"><strong>&emsp;PMF Oleh</strong></label>
                                <div class="col-sm-8 col-form-label">: <?= $eksternal['pmf_by_eks']; ?></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label"><strong>&emsp;PIC (Migrasi)</strong></label>
                                <div class="col-sm-8 col-form-label">: <?= $nama_pic['nama'] ?></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label"><strong>&emsp;Form PMF</strong></label>
                                <div class="col-sm-8 col-form-label">
                                    : <?= $eksternal['doc_form_pmf']; ?>
                                    <?php if ($eksternal['doc_form_pmf'] != null) { ?>
                                    <a href="<?= base_url('./assets/dokumeneksternal/') . $eksternal['doc_form_pmf']; ?>"
                                        class="badge badge-info" target="_blank">Lihat</a>
                                    <a href="<?= base_url('Eksternal/downloadpmf1/') . $eksternal['doc_form_pmf']; ?>"
                                        class="badge badge-success">Unduh</a>
                                    <?php } else { ?>
                                    <span class="badge badge-secondary">Tidak tersedia</span>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label"><strong>&emsp;Dokumen Library</strong></label>
                                <div class="col-sm-8 col-form-label">
                                    : <?= $eksternal['doc_library']; ?>
                                    <?php if ($eksternal['doc_library'] != null) { ?>
                                    <a href="<?= base_url('./assets/dokumeneksternal/') . $eksternal['doc_library']; ?>"
                                        class="badge badge-info" target="_blank">Lihat</a>
                                    <a href="<?= base_url('Eksternal/downloadlib1/') . $eksternal['doc_library']; ?>"
                                        class="badge badge-success">Unduh</a>
                                    <?php } else { ?>
                                    <span class="badge badge-secondary">Tidak tersedia</span>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label"><strong>&emsp;Dokumen Checklist</strong></label>
                                <div class="col-sm-8 col-form-label">
                                    : <?= $eksternal['doc_check_list']; ?>
                                    <?php if ($eksternal['doc_check_list'] != null) { ?>
                                    <a href="<?= base_url('./assets/dokumeneksternal/') . $eksternal['doc_check_list']; ?>"
                                        class="badge badge-info" target="_blank">Lihat</a>
                                    <a href="<?= base_url('Eksternal/downloadcheck1/') . $eksternal['doc_check_list']; ?>"
                                        class="badge badge-success">Unduh</a>
                                    <?php } else { ?>
                                    <span class="badge badge-secondary">Tidak tersedia</span>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label"><strong>&emsp;Dokumen Lain</strong></label>
                                <div class="col-sm-8 col-form-label">
                                    : <?= $eksternal['doc_lain']; ?>
                                    <?php if ($eksternal['doc_lain'] != null) { ?>
                                    <a href="<?= base_url('./assets/dokumeneksternal/') . $eksternal['doc_lain']; ?>"
                                        class="badge badge-info" target="_blank">Lihat</a>
                                    <a href="<?= base_url('Eksternal/downloadlain/') . $eksternal['doc_lain']; ?>"
                                        class="badge badge-success">Unduh</a>
                                    <?php } else { ?>
                                    <span class="badge badge-secondary">Tidak tersedia</span>
                                    <?php } ?>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label"><strong>&emsp;Deskripsi
                                        Perencanaan</strong></label>
                                <div class="col-sm-8 col-form-label">: <?= $eksternal['keterangan']; ?></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label"><strong>&emsp;Status Migrasi</strong></label>
                                <div class="col-sm-8 col-form-label">
                                    :
                                    <?php if ($eksternal['note_eks'] == 'Pending') { ?>
                                    <span class="badge badge-danger">Pending</span>
                                    <?php } else if ($eksternal['note_eks'] == 'On Progress') { ?>
                                    <span class="badge badge-warning">On Progress</span>
                                    <?php } else if ($eksternal['note_eks'] == 'Done') { ?>
                                    <span class="badge badge-success">Done</span>
                                    <?php } else if ($eksternal['note_eks'] == null) { ?>
                                    <span class="badge badge-secondary">Null</span>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label"><strong>&emsp;Catatan Migrasi</strong></label>
                                <div class="col-sm-8 col-form-label">: <?= $eksternal['comment_eks']; ?></div>
                            </div>
                        </div>
                        <?php if ($user1['role'] == 'Planning') { ?>
                        <div class="col-md-12">
                            <a href="<?= base_url('Eksternal/editeksternal/'). $eksternal['id_eks']; ?>"
                                class="btn btn-success btn-round btn-block">Perbarui Data (Dokumen)</a>
                        </div>
                        <?php } elseif ($user1['role'] == 'Support' | $user1['role'] == 'Development') { ?>
                        <div class="col-md-12">
                            <a href="<?= base_url('Eksternal/sup_editeksternal/'). $eksternal['id_eks']; ?>"
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