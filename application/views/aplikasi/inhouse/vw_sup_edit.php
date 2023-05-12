<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 ">
            <div class="float">
                <a href="<?= base_url('Aplikasi/detailinhouse/'). $inhouse1['id_in']; ?>" class="btn btn-info">&larr;
                    Kembali</a>
            </div>
            <br>
            <div class="card" style="background-color: rgba(245, 245, 245, 0.9);">
                <div class="row">
                    <div class="card-body">
                        <center>
                            <h4 class="title"><strong>Perbarui Data Inhouse</strong></h4><br><br>
                        </center>
                        <?= $this->session->flashdata('message') ?>

                        <div class="card-block">

                            <form action="" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id_in" value="<?= $inhouse1['id_in']; ?>">

                                <div class="form-group">

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nomor</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nomor_in" class="form-control form-control-user"
                                                value="<?= $inhouse1['nomor_in']; ?>" id="nomor_in"
                                                placeholder="Masukkan Nomor" readonly>
                                            <?= form_error('nomor_in', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Jenis</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="jenisaplikasi"
                                                class="form-control form-control-user"
                                                value="<?= $inhouse1['jenisaplikasi']; ?>" id="jenisaplikasi" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nama Aplikasi</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nama_in" class="form-control" id="nama_in"
                                                value="<?= $inhouse1['nama_in']; ?>"
                                                placeholder="Masukkan Nama Aplikasi" readonly>
                                            <?= form_error('nama_in','<small class="text-danger pl-3">','</small>'); ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Versi</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="versi_in" class="form-control" id="versi_in"
                                                placeholder="Masukkan Versi" value="<?= $inhouse1['versi_in']; ?>"
                                                readonly>
                                            <?= form_error('versi_in','<small class="text-danger pl-3">','</small>'); ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tanggal Penyerahan PMF</label>
                                        <div class="col-sm-10">
                                            <input type="date" name="tgl_penyerahan_pmf" class="form-control"
                                                id="tgl_penyerahan_pmf" placeholder="Masukkan Tanggal Penyerahan PMF"
                                                value="<?= $inhouse1['tgl_penyerahan_pmf']; ?>" readonly>
                                            <?= form_error('tgl_penyerahan_pmf','<small class="text-danger pl-3">','</small>'); ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tanggal Migrasi Prod</label>
                                        <div class="col-sm-10">
                                            <input type="date" name="tgl_migrasi_prod" class="form-control"
                                                id="tgl_migrasi_prod" placeholder="Masukkan Tanggal Migrasi Prod"
                                                value="<?= $inhouse1['tgl_migrasi_prod']; ?>">
                                            <?= form_error('tgl_migrasi_prod','<small class="text-danger pl-3">','</small>'); ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Keterangan</label>
                                        <div class="col-sm-10">
                                            <textarea rows="4" name="keterangan_in" class="form-control"
                                                id="keterangan_in" readonly><?=$inhouse1['keterangan_in'];?></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">PIC Planning</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="pic_plan_in" class="form-control" id="pic_plan_in"
                                                value="<?= $inhouse1['pic_plan_in']; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">PIC Development</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="pic_dev_in" class="form-control" id="pic_dev_in"
                                                value="<?= $inhouse1['pic_dev_in']; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">PIC Migrasi</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="pic_migrasi_in" class="form-control"
                                                id="pic_migrasi_in" placeholder="Masukkan PIC Migrasi"
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

                                    <div class="col-md-12">
                                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah
                                            Data</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
