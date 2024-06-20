<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="float">
                <a href="<?= base_url('Eksternal/detaileksternal/'). $eksternal['id_eks']; ?>"
                    class="btn btn-secondary">Kembali</a>
            </div>
            <br>
            <div class="card">
                <div class="card-header justify-content-center">
                    Perbarui Data (Support)
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_eks" value="<?= $eksternal['id_eks']; ?>">
                        <div class="form-group">

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Number</label>
                                <div class="col-sm-10">
                                    <input type="nomor_eks" name="nomor_eks" class="form-control form-control-user"
                                        value="<?= $eksternal['nomor_eks']; ?>" id="nomor_eks" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Application Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama_eks" class="form-control" id="nama_eks"
                                        value="<?= $eksternal['nama_eks']; ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">External Type</label>
                                <div class="col-sm-10">
                                    <input type="text" name="jenis_eks" class="form-control" id="jenis_eks"
                                        value="<?= $eksternal['jenis_eks']; ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">External Document</label>
                                <div class="col-sm-10">
                                    <input type="text" name="dokumen_eks" class="form-control" id="dokumen_eks"
                                        value="<?= $eksternal['dokumen_eks']; ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Version</label>
                                <div class="col-sm-10">
                                    <input type="text" name="versi_eks" class="form-control" id="versi_eks"
                                        value="<?= $eksternal['versi_eks']; ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">PMF Submission date</label>
                                <div class="col-sm-10">
                                    <input type="date" name="tgl_penyerahan_pmf" class="form-control"
                                        id="tgl_penyerahan_pmf" value="<?= $eksternal['tgl_penyerahan_pmf']; ?>"
                                        readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Migration Date</label>
                                <div class="col-sm-10">
                                    <input type="date" name="tgl_migrasi" class="form-control" id="tgl_migrasi"
                                        value="<?= $eksternal['tgl_migrasi']; ?>">
                                    <?= form_error('tgl_migrasi','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea rows="4" name="keterangan" class="form-control" id="keterangan"
                                        readonly><?=$eksternal['keterangan']; ?></textarea>
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
                                <label class="col-sm-2 col-form-label">PMF By</label>
                                <div class="col-sm-10">
                                    <input type="text" name="pmf_by_eks" class="form-control" id="pmf_by_eks"
                                        value="<?= $eksternal['pmf_by_eks']; ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Migration Status</label>
                                <div class="col-sm-10">
                                    <select id="note_eks" value="<?= $eksternal['note_eks']; ?>" class="form-control"
                                        name="note_eks">

                                        <?php if ($eksternal['note_eks'] != null) { ?>
                                        <option value="<?= $eksternal['note_eks']; ?>"><?= $eksternal['note_eks']; ?>
                                        </option>
                                        <option value="Pending">Pending</option>
                                        <option value="On Progress">On Progress</option>
                                        <option value="Done">Done</option>
                                        <?php } else { ?>
                                        <option value="">Select Status.. </option>
                                        <option value="Pending">Pending</option>
                                        <option value="On Progress">On Progress</option>
                                        <option value="Done">Done</option>
                                        <?php  }?>
                                    </select>
                                    <?= form_error('note_eks','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Migration Note</label>
                                <div class="col-sm-10">

                                    <textarea rows="3" name="comment_eks" class="form-control"
                                        id="comment_eks"><?=$eksternal['comment_eks'];?></textarea>
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
</div>
<br>
<br>
</div>