<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <a href="<?= base_url() ?>Aplikasi/indexeksternal" class="btn btn-info">&larr; Kembali</a>
            <br><br>
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Aplikasi
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Aplikasi</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama_eks" class="form-control" id="nama_eks"
                                        placeholder="Masukkan Nama Aplikasi">
                                    <?= form_error('nama_eks','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jenis</label>
                                <div class="col-sm-10">
                                    <select name="jenisaplikasi" class="form-control" id="jenisaplikasi">
                                        <option value="">Pilih Jenis Aplikasi</option>
                                        <?php foreach ($jenisaplikasi as $p) : ?>
                                        <option value="<?= $p['jenisaplikasi']; ?>"><?= $p['jenisaplikasi']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">PMF</label>
                                <div class="col-sm-10">
                                    <select name="pmf_eks" class="form-control" id="pmf_eks">
                                        <option value="">Pilih Jenis Aplikasi</option>
                                        <?php foreach ($jenispmf as $p) : ?>
                                        <option value="<?= $p['jenispmf']; ?>"><?= $p['jenispmf']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Versi</label>
                                <div class="col-sm-10">
                                    <input type="text" name="versi_eks" class="form-control" id="versi_eks"
                                        placeholder="Masukkan Versi">
                                    <?= form_error('versi_eks','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal Penyerahan PMF</label>
                                <div class="col-sm-10">
                                    <input type="date" name="tgl_penyerahan_pmf" class="form-control"
                                        id="tgl_penyerahan_pmf" placeholder="Masukkan Tanggal Penyerahan PMF">
                                    <?= form_error('tgl_penyerahan_pmf','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal Migrasi</label>
                                <div class="col-sm-10">
                                    <input type="date" name="tgl_migrasi" class="form-control" id="tgl_migrasi"
                                        placeholder="Masukkan Tanggal Migrasi" readonly>
                                    <?= form_error('tgl_migrasi','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <textarea name="keterangan" class="form-control" id="keterangan"
                                        placeholder="Masukkan Keterangan"></textarea>
                                    <?= form_error('keterangan','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">PIC Planning</label>
                                <div class="col-sm-10">
                                    <input type="text" name="pic_plan_eks" class="form-control" id="pic_plan_eks"
                                        placeholder="Masukkan PIC Planning">
                                    <?= form_error('pic_plan_eks','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">PMF Disampaikan Oleh</label>
                                <div class="col-sm-10">
                                    <input type="text" name="pmf_by_eks" class="form-control" id="pmf_by_eks"
                                        placeholder="Masukkan PIC Planning">
                                    <?= form_error('pmf_by_eks','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <input type="hidden" name="hapus_eks" class="form-control" id="hapus_in" value="1">

                            <div class="col-md-12">
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
                                    Data</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>