<!-- Mulai Konten Halaman -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="float">
                <a href="<?= base_url('Inhouse/detailinhouse/') . $inhouse1['id_in']; ?>" class="btn btn-secondary">
                    Kembali</a>
            </div>
            <br>
            <div class="card" style="background-color: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); transition: 0.3s;">
                <div class="card-header justify-content-center">
                    <h6 class="m-0 font-weight-bold text-primary">Perbarui Data Inhouse</h6>
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_in" value="<?= $inhouse1['id_in']; ?>">

                        <div class="form-group">

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nomor</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nomor_in" class="form-control form-control-user"
                                        value="<?= $inhouse1['nomor_in']; ?>" id="nomor_in" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jenis Dokumen</label>
                                <div class="col-sm-10">
                                    <input type="text" name="jenis_dokumen" value="<?= $inhouse1['jenis_dokumen']; ?>"
                                        class="form-control form-control-user" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Aplikasi</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama_in" class="form-control" id="nama_in"
                                        value="<?= $inhouse1['nama_in']; ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Versi</label>
                                <div class="col-sm-10">
                                    <input type="text" name="versi_in" class="form-control" id="versi_in"
                                        value="<?= $inhouse1['versi_in']; ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal Penyerahan PMF</label>
                                <div class="col-sm-10">
                                    <input type="date" name="tgl_penyerahan_pmf" class="form-control"
                                        id="tgl_penyerahan_pmf" value="<?= $inhouse1['tgl_penyerahan_pmf']; ?>"
                                        readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal Migrasi Produk</label>
                                <div class="col-sm-10">
                                    <input type="date" name="tgl_migrasi_prod" class="form-control"
                                        id="tgl_migrasi_prod" value="<?= $inhouse1['tgl_migrasi_prod']; ?>">
                                    <?= form_error('tgl_migrasi_prod','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea rows="3" name="keterangan_in" class="form-control" id="keterangan_in"
                                        readonly><?= $inhouse1['keterangan_in']; ?></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">PIC (Planning)</label>
                                <div class="col-sm-10">
                                    <input type="text" name="pic_plan_in" class="form-control" id="pic_plan_in"
                                        value="<?= $inhouse1['pic_plan_in']; ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">PIC (Development)</label>
                                <div class="col-sm-10">
                                    <input type="text" name="pic_dev_in" class="form-control" id="pic_dev_in"
                                        value="<?= $inhouse1['pic_dev_in']; ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">PIC (Migrasi)</label>
                                <div class="col-sm-10">
                                    <input type="text" name="pic_migrasi_in" class="form-control" id="pic_migrasi_in"
                                        placeholder="Masukkan PIC (Migrasi)"
                                        value="<?= $inhouse1['pic_migrasi_in']; ?>">
                                    <?= form_error('pic_migrasi_in','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Owner</label>
                                <div class="col-sm-10">
                                    <input type="text" name="owner_in" class="form-control" id="owner_in"
                                        value="<?= $inhouse1['owner_in']; ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Status Migrasi</label>
                                <div class="col-sm-10">
                                    <select id="note_in" class="form-control" name="note_in">
                                        <?php if ($inhouse1['note_in'] != null) { ?>
                                            <option value="<?= $inhouse1['note_in']; ?>"><?= $inhouse1['note_in']; ?></option>
                                        <?php } else { ?>
                                            <option value="">Pilih Status.. </option>
                                        <?php } ?>
                                        <option value="Pending">Pending</option>
                                        <option value="On Progress">On Progress</option>
                                        <option value="Done">Done</option>
                                    </select>
                                    <?= form_error('note_in','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Catatan Migrasi</label>
                                <div class="col-sm-10">
                                    <textarea rows="3" name="comment_in" class="form-control"
                                        id="comment_in"><?= $inhouse1['comment_in']; ?></textarea>
                                    <?= form_error('comment_in','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Perbarui</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <br>
    </div>
    
</div>

<!-- Akhir Konten Halaman -->
