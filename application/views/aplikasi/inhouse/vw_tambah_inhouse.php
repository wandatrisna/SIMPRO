<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <a href="<?= base_url() ?>Inhouse" class="btn btn-info">&larr; Back</a>
            <br><br>
            <div class="card">
                <div class="card-header justify-content-center">
                 New Application Form
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Number</label>
                                <div class="col-sm-10">
                                    <input type="nomor_in" name="nomor_in" class="form-control form-control-user"
                                        value="<?php echo $nomor; ?>" id="nomor_in" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Document Type</label>
                                <div class="col-sm-10">
                                    <select name="jenis_dokumen" class="form-control" id="jenis_dokumen">
                                        <option value="">Select Document Type..</option>
                                        <?php foreach ($jenisdok as $p) : ?>
                                        <option value="<?= $p['jenisdokumen']; ?>"><?= $p['jenisdokumen']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Application Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama_in" class="form-control" id="nama_in"
                                        placeholder="Insert Application Name">
                                    <?= form_error('nama_in','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Version</label>
                                <div class="col-sm-10">
                                    <input type="text" name="versi_in" class="form-control" id="versi_in"
                                        placeholder="Insert Version">
                                    <?= form_error('versi_in','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">PMF Submission Date</label>
                                <div class="col-sm-10">
                                    <input type="date" name="tgl_penyerahan_pmf" class="form-control" id="tgl_penyerahan_pmf" >
                                    <?= form_error('tgl_penyerahan_pmf','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Migration Date</label>
                                <div class="col-sm-10">
                                    <input type="date" name="tgl_migrasi_prod" class="form-control" id="tgl_migrasi_prod" readonly>
                                    <?= form_error('tgl_migrasi_prod','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea name="keterangan_in" class="form-control" id="keterangan_in"
                                        placeholder="Insert Description..."></textarea>
                                    <?= form_error('keterangan_in','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">PIC (Planning)</label>
                                <div class="col-sm-10">
                                    <input type="text" name="pic_plan_in" class="form-control" id="pic_plan_in"
                                        placeholder="Insert PIC (Planning)">
                                    <?= form_error('pic_plan_in','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">PIC (Development)</label>
                                <div class="col-sm-10">
                                    <input type="text" name="pic_dev_in" class="form-control" id="pic_dev_in"
                                        placeholder="Insert PIC (Development)">
                                    <?= form_error('pic_dev_in','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">PIC (Migration)</label>
                                <div class="col-sm-10">
                                    <input type="text" name="pic_migrasi_in" class="form-control" id="pic_migrasi_in"
                                        placeholder="Waiting for IT Support..." readonly>
                                    <?= form_error('pic_migrasi_in','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Owner</label>
                                <div class="col-sm-10">
                                    <select name="owner_in" class="form-control" id="owner_in">
                                        <option value="">Select Owner</option>
                                        <?php foreach ($namadivisi as $p) : ?>
                                        <option value="<?= $p['namadivisi']; ?>"><?= $p['namadivisi']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('owner_in','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <input type="hidden" name="hapus_in" class="form-control" id="hapus_in" value="1">


                            <div class="col-md-12">
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Save
                                    </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><br>
    <br>
</div>