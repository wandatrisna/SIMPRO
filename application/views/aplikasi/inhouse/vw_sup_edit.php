<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="float">
                <a href="<?= base_url('Inhouse/detailinhouse/'). $inhouse1['id_in']; ?>" class="btn btn-info">&larr;
                    Back</a>
            </div>
            <br>
            <div class="card">
                <div class="card-header justify-content-center">
                    Update Data (Support)
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_in" value="<?= $inhouse1['id_in']; ?>">

                        <div class="form-group">

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Number</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nomor_in" class="form-control form-control-user"
                                        value="<?= $inhouse1['nomor_in']; ?>" id="nomor_in" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Document Type</label>
                                <div class="col-sm-10">
                                    <input type="text" name="jenis_dokumen" value="<?= $inhouse1['jenis_dokumen']; ?>"
                                        class="form-control form-control-user" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Application Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama_in" class="form-control" id="nama_in"
                                        value="<?= $inhouse1['nama_in']; ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Version</label>
                                <div class="col-sm-10">
                                    <input type="text" name="versi_in" class="form-control" id="versi_in"
                                        value="<?= $inhouse1['versi_in']; ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">PMF Submission Date</label>
                                <div class="col-sm-10">
                                    <input type="date" name="tgl_penyerahan_pmf" class="form-control"
                                        id="tgl_penyerahan_pmf" value="<?= $inhouse1['tgl_penyerahan_pmf']; ?>"
                                        readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Migration Date</label>
                                <div class="col-sm-10">
                                    <input type="date" name="tgl_migrasi_prod" class="form-control"
                                        id="tgl_migrasi_prod" value="<?= $inhouse1['tgl_migrasi_prod']; ?>">
                                    <?= form_error('tgl_migrasi_prod','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea rows="3" name="keterangan_in" class="form-control" id="keterangan_in"
                                        readonly><?=$inhouse1['keterangan_in'];?></textarea>
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
                                <label class="col-sm-2 col-form-label">PIC (Migration)</label>
                                <div class="col-sm-10">
                                    <input type="text" name="pic_migrasi_in" class="form-control" id="pic_migrasi_in"
                                        placeholder="Insert PIC (Migration)"
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
                                <label class="col-sm-2 col-form-label">Migration Status</label>
                                <div class="col-sm-10">
                                    <select id="note_in" value="<?= $inhouse1['note_in']; ?>" class="form-control"
                                        name="note_in">
                                        
                                        <?php if ($eksternal['note_in'] != null) { ?>
                                        <option value="<?= $eksternal['note_in']; ?>"><?= $eksternal['note_in']; ?>
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
                                    <?= form_error('note_in','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Migration Note</label>
                                <div class="col-sm-10">

                                    <textarea rows="3" name="comment_in" class="form-control"
                                        id="comment_in"><?=$inhouse1['comment_in'];?></textarea>
                                        <?= form_error('comment_in','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Update</button>
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