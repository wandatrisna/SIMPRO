<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <a href="<?= base_url() ?>Eksternal/indexeksternal" class="btn btn-info">&larr; Kembali</a>
            <br><br>
            <div class="card">
                <div class="card-header justify-content-center">
                    New Application Form
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Application Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama_eks" class="form-control" id="nama_eks"
                                        placeholder="Insert Application Name">
                                    <?= form_error('nama_eks','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">External Type</label>
                                <div class="col-sm-10">
                                    <select name="jenis_eks" class="form-control" id="jenis_eks">
                                        <option value="">Select External Type...</option>
                                        <?php foreach ($jenis_eks as $p) : ?>
                                        <option value="<?= $p['id_jeniseks']; ?>"><?= $p['jenis_eks']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Document Type</label>
                                <div class="col-sm-10">
                                    <select name="dokumen_eks" class="form-control" id="dokumen_eks">
                                        <option value="">Select Document Type...</option>
                                        <?php foreach ($jenisdok as $p) : ?>
                                        <option value="<?= $p['id_jenisdokumen']; ?>"><?= $p['jenisdokumen']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Version</label>
                                <div class="col-sm-10">
                                    <input type="text" name="versi_eks" class="form-control" id="versi_eks"
                                        placeholder="Insert Version">
                                    <?= form_error('versi_eks','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">PMF Submission Date</label>
                                <div class="col-sm-10">
                                    <input type="date" name="tgl_penyerahan_pmf" class="form-control"
                                        id="tgl_penyerahan_pmf">
                                    <?= form_error('tgl_penyerahan_pmf','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Migration Date</label>
                                <div class="col-sm-10">
                                    <input type="date" name="tgl_migrasi" class="form-control" id="tgl_migrasi"
                                        readonly>
                                    <?= form_error('tgl_migrasi','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea name="keterangan" class="form-control" id="keterangan"
                                        placeholder="Insert Description"></textarea>
                                    <?= form_error('keterangan','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">PIC (Planning)</label>
                                <div class="col-sm-10">
                                    <input type="text" name="pic_plan_eks" class="form-control" id="pic_plan_eks"
                                        placeholder="Insert PIC (Planning)">
                                    <?= form_error('pic_plan_eks','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">PMF By</label>
                                <div class="col-sm-10">
                                    <input type="text" name="pmf_by_eks" class="form-control" id="pmf_by_eks"
                                        placeholder="Insert Name...">
                                    <?= form_error('pmf_by_eks','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Migration Status</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" 
                                        placeholder="Waiting for IT Support..." readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Migration Note</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" 
                                        placeholder="Waiting for IT Support..." readonly>
                                </div>
                            </div>

                            <input type="hidden" name="hapus_eks" class="form-control" id="hapus_in" value="1">

                            <div class="col-md-12">
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Save</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
</div>