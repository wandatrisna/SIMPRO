<!-- Mulai Konten Halaman -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="float">
                <a href="<?= base_url('Eksternal/detaileksternal/') . $eksternal['id_eks']; ?>"
                    class="btn btn-secondary">Kembali</a>
            </div>
            <br>
            <div class="card" style="background-color: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); transition: 0.3s;">
                <div class="card-header justify-content-center">
                    <h6 class="m-0 font-weight-bold text-primary">Perbarui Data Eksternal</h6>
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_eks" value="<?= $eksternal['id_eks']; ?>">
                        <div class="form-group">

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nomor</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nomor_eks" class="form-control form-control-user"
                                        value="<?= $eksternal['nomor_eks']; ?>" id="nomor_eks" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Aplikasi</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama_eks" class="form-control" id="nama_eks"
                                        value="<?= $eksternal['nama_eks']; ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tipe Eksternal</label>
                                <div class="col-sm-10">
                                    <input type="text" name="jenis_eks" class="form-control" id="jenis_eks"
                                        value="<?= $eksternal['jenis_eks']; ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Dokumen Eksternal</label>
                                <div class="col-sm-10">
                                    <input type="text" name="dokumen_eks" class="form-control" id="dokumen_eks"
                                        value="<?= $eksternal['dokumen_eks']; ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Versi</label>
                                <div class="col-sm-10">
                                    <input type="text" name="versi_eks" class="form-control" id="versi_eks"
                                        value="<?= $eksternal['versi_eks']; ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal Penyerahan PMF</label>
                                <div class="col-sm-10">
                                    <input type="date" name="tgl_penyerahan_pmf" class="form-control"
                                        id="tgl_penyerahan_pmf"
                                        value="<?= $eksternal['tgl_penyerahan_pmf']; ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal Migrasi</label>
                                <div class="col-sm-10">
                                    <input type="date" name="tgl_migrasi" class="form-control" id="tgl_migrasi"
                                        value="<?= $eksternal['tgl_migrasi']; ?>">
                                    <?= form_error('tgl_migrasi','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea rows="4" name="keterangan" class="form-control" id="keterangan"
                                        readonly><?= $eksternal['keterangan']; ?></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">PIC (Planning)</label>
                                <div class="col-sm-10">
                                    <input type="text" name="pic_plan_eks" class="form-control" id="pic_plan_eks"
                                        value="<?= $eksternal['pic_plan_eks']; ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">PMF Oleh</label>
                                <div class="col-sm-10">
                                    <input type="text" name="pmf_by_eks" class="form-control" id="pmf_by_eks"
                                        value="<?= $eksternal['pmf_by_eks']; ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Status Migrasi</label>
                                <div class="col-sm-10">
                                    <select id="note_eks" class="form-control" name="note_eks">
                                        <?php if ($eksternal['note_eks'] != null) { ?>
                                            <option value="<?= $eksternal['note_eks']; ?>"><?= $eksternal['note_eks']; ?></option>
                                        <?php } else { ?>
                                            <option value="">Pilih Status.. </option>
                                        <?php } ?>
                                        <option value="Pending">Pending</option>
                                        <option value="On Progress">On Progress</option>
                                        <option value="Done">Done</option>
                                    </select>
                                    <?= form_error('note_eks','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Catatan Migrasi</label>
                                <div class="col-sm-10">
                                    <textarea rows="3" name="comment_eks" class="form-control"
                                        id="comment_eks"><?= $eksternal['comment_eks']; ?></textarea>
                                    <?= form_error('comment_eks','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Perbarui
                                    Data</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Konten Halaman -->
