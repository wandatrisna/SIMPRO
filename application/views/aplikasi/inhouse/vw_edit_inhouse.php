<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="float">
                <a href="<?= base_url('Inhouse/detailinhouse/'). $inhouse['id_in']; ?>"
                    class="btn btn-secondary">Kembali</a>
            </div>
            <br>
            <div class="card shadow mb-4">
                <div class="card-header justify-content-center text-primary">
                    <h6 class="m-0 font-weight-bold text-primary">Perbarui Data Inhouse</h6>
                </div>
                <?= $this->session->flashdata('message') ?>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_in" value="<?= $inhouse['id_in']; ?>">

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label"><strong>&emsp;Nama Aplikasi</strong></label>
                            <div class="col-sm-8 col-form-label">: <?= $inhouse['nama_in']; ?></div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label"><strong>&emsp;Tanggal Penyerahan PMF</strong></label>
                            <div class="col-sm-8 col-form-label">: <?= $inhouse['tgl_penyerahan_pmf']; ?></div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label"><strong>&emsp;Tanggal Migrasi</strong></label>
                            <div class="col-sm-8 col-form-label">: <?= $inhouse['tgl_migrasi_prod']; ?></div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label"><strong>&emsp;PIC (Planning)</strong></label>
                            <div class="col-sm-8 col-form-label">: <?= $inhouse['pic_plan_in']; ?></div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label"><strong>&emsp;PIC (Development​)</strong></label>
                            <div class="col-sm-8 col-form-label">: <?= $inhouse['pic_dev_in']; ?></div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label"><strong>&emsp;PIC (Migrasi)</strong></label>
                            <div class="col-sm-8 col-form-label">: <?= $nama_pic['nama'] ?></div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label"><strong>&emsp;Form PMF</strong></label>
                            <div class="col-sm-8">
                                <div class="col-form-label">: <?= $inhouse['doc_form_pmf']; ?></div>
                                <input type="file" name="doc_form_pmf" id="doc_form_pmf"
                                    accept="image/png, image/jpeg, image/jpg, image/gif">
                                <?= form_error('doc_form_pmf','<small class="text-danger pl-3">','</small>'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label"><strong>&emsp;Dokumen Library</strong></label>
                            <div class="col-sm-8">
                                <div class="col-form-label">: <?= $inhouse['doc_library']; ?></div>
                                <input type="file" name="doc_library" id="doc_library"
                                    accept="image/png, image/jpeg, image/jpg, image/gif">
                                <?= form_error('doc_library','<small class="text-danger pl-3">','</small>'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label"><strong>&emsp;Dokumen Checklist</strong></label>
                            <div class="col-sm-8">
                                <div class="col-form-label">: <?= $inhouse['doc_check_list']; ?></div>
                                <input type="file" name="doc_check_list" id="doc_check_list"
                                    accept="image/png, image/jpeg, image/jpg, image/gif">
                                <?= form_error('doc_check_list','<small class="text-danger pl-3">','</small>'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label"><strong>&emsp;Dokumen Lain</strong></label>
                            <div class="col-sm-8">
                                <div class="col-form-label">: <?= $inhouse['doc_lain']; ?></div>
                                <input type="file" name="doc_lain" id="doc_lain"
                                    accept="image/png, image/jpeg, image/jpg, image/gif">
                                <?= form_error('doc_lain','<small class="text-danger pl-3">','</small>'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label"><strong>&emsp;Deskripsi Perencanaan</strong></label>
                            <div class="col-sm-8 col-form-label">: <?= $inhouse['keterangan_in']; ?></div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label"><strong>&emsp;Status Migrasi (diisi oleh PIC
                                    Migrasi)</strong></label>
                            <div class="col-sm-8 col-form-label">:
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

                        <div class="form-group row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-success btn-round btn-block" data-toggle="modal"
                                    data-target="#confirmModal">Perbarui</button>
                            </div>
                        </div>

                        <input type="hidden" name="nomor_in" value="<?= $inhouse['nomor_in']; ?>">
                        <input type="hidden" name="jenis_dokumen" value="<?= $inhouse['jenis_dokumen']; ?>">
                        <input type="hidden" name="nama_in" value="<?= $inhouse['nama_in']; ?>">
                        <input type="hidden" name="versi_in" value="<?= $inhouse['versi_in']; ?>">
                        <input type="hidden" name="tgl_penyerahan_pmf" value="<?= $inhouse['tgl_penyerahan_pmf']; ?>">
                        <input type="hidden" name="tgl_migrasi_prod" value="<?= $inhouse['tgl_migrasi_prod']; ?>">
                        <input type="hidden" name="keterangan_in" value="<?= $inhouse['keterangan_in']; ?>">
                        <input type="hidden" name="pic_plan_in" value="<?= $inhouse['pic_plan_in']; ?>">
                        <input type="hidden" name="pic_dev_in" value="<?= $inhouse['pic_dev_in']; ?>">
                        <input type="hidden" name="pic_migrasi_in" value="<?= $inhouse['pic_migrasi_in']; ?>">
                        <input type="hidden" name="owner_in" value="<?= $inhouse['owner_in']; ?>">
                        <input type="hidden" name="hapus_in" value="<?= $inhouse['hapus_in']; ?>">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmModalLabel">Konfirmasi Pengiriman Dokumen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah dokumen sudah benar? Dokumen akan dikirimkan ke email <?= $pic_email; ?>.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" id="confirmSubmit">Kirim</button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<script>
document.getElementById('confirmSubmit').addEventListener('click', function() {
    document.querySelector('form').submit();
});
</script>