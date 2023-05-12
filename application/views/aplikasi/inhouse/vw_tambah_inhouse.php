<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <a href="<?= base_url() ?>Aplikasi/indexinhouse" class="btn btn-info">&larr; Kembali</a>
            <br><br>
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Aplikasi
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nomor</label>
                                <div class="col-sm-10">
                                    <input type="nomor_in" name="nomor_in" class="form-control form-control-user"
                                        value="<?php echo $nomor; ?>" id="nomor_in" placeholder="Masukkan Nomor"
                                        readonly>
                                    <?= form_error('nomor_in', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jenis</label>
                                <div class="col-sm-10">
                                    <select name="jenisaplikasi" class="form-control" id="jenisaplikasi">
                                        <option value="">Pilih Jenis Aplikasi</option>
                                        <?php foreach ($jenispmf as $p) : ?>
                                        <option value="<?= $p['jenispmf']; ?>"><?= $p['jenispmf']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Aplikasi</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama_in" class="form-control" id="nama_in"
                                        placeholder="Masukkan Nama Aplikasi">
                                    <?= form_error('nama_in','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Versi</label>
                                <div class="col-sm-10">
                                    <input type="text" name="versi_in" class="form-control" id="versi_in"
                                        placeholder="Masukkan Versi">
                                    <?= form_error('versi_in','<small class="text-danger pl-3">','</small>'); ?>
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
                                <label class="col-sm-2 col-form-label">Tanggal Migrasi Prod</label>
                                <div class="col-sm-10">
                                    <input type="date" name="tgl_migrasi_prod" class="form-control"
                                        id="tgl_migrasi_prod" placeholder="Masukkan Tanggal Migrasi Prod" readonly>
                                    <?= form_error('tgl_migrasi_prod','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <input type="text" name="keterangan_in" class="form-control" id="keterangan_in"
                                        placeholder="Masukkan Keterangan">
                                    <?= form_error('keterangan_in','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">PIC Planning</label>
                                <div class="col-sm-10">
                                    <input type="text" name="pic_plan_in" class="form-control" id="pic_plan_in"
                                        placeholder="Masukkan PIC Planning">
                                    <?= form_error('pic_plan_in','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">PIC Development</label>
                                <div class="col-sm-10">
                                    <input type="text" name="pic_dev_in" class="form-control" id="pic_dev_in"
                                        placeholder="Masukkan PIC Development">
                                    <?= form_error('pic_dev_in','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">PIC Migrasi</label>
                                <div class="col-sm-10">
                                    <input type="text" name="pic_migrasi_in" class="form-control" id="pic_migrasi_in"
                                        placeholder="Masukkan PIC Migrasi" readonly>
                                    <?= form_error('pic_migrasi_in','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Owner</label>
                                <div class="col-sm-10">
                                    <select name="owner_in" class="form-control" id="owner_in">
                                        <option value="">Pilih Owner</option>
                                        <?php foreach ($namadivisi as $p) : ?>
                                        <option value="<?= $p['namadivisi']; ?>"><?= $p['namadivisi']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('owner_in','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                            </div>

                            <input type="hidden" name="hapus_in" class="form-control" id="hapus_in" value="1">


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