<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 ">
            <div class="pcoded-content">
                <section class="common-img-bg1">
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">
                                    <div class="float">
                                        <a href="<?= base_url() ?>Project/indexlistproject"
                                            class="btn btn-secondary mb-2">Kembali</a>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card" style="background-color: #ffffff;">

                                                <div class="card-header justify-content-center">
                                                    <strong>Tambah Data Baru</strong>
                                                </div>
                                                <div class="card-body">
                                                    <div class="card-block">
                                                        <form action="" method="POST" enctype="multipart/form-data">
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Nama
                                                                    Aplikasi</label>
                                                                <div class="col-sm-10">
                                                                    <input type="namaaplikasi" name="namaaplikasi"
                                                                        class="form-control form-control-user"
                                                                        value="<?= set_value('namaaplikasi'); ?>"
                                                                        id="namaaplikasi"
                                                                        placeholder="Masukkan nama aplikasi">
                                                                    <?= form_error('namaaplikasi', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jenis
                                                                    Proyek</label>
                                                                <div class="col-sm-10">
                                                                    <select name="jenisproject" class="form-control"
                                                                        id="jenisproject">
                                                                        <?php foreach ($jenisproject as $p) { ?>
                                                                        <option
                                                                            value="<?php echo $p['id_jenisproject']?>">
                                                                            <?php echo $p['namajenisproject']?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                    <?= form_error('jenisproject', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jenis
                                                                    Aplikasi</label>
                                                                <div class="col-sm-10">
                                                                    <select name="jenisaplikasi" class="form-control"
                                                                        id="jenisaplikasi">
                                                                        <?php foreach ($jenisaplikasi as $p) { ?>
                                                                        <option
                                                                            value="<?php echo $p['id_jenisaplikasi']?>">
                                                                            <?php echo $p['namajenisaplikasi']?>
                                                                        </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                    <?= form_error('jenisaplikasi', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                </div>
                                                            </div>


                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Tahun</label>
                                                                <div class="col-sm-10">
                                                                    <select class="form-control" name="tahun">
                                                                        <?php
                                                                        for ($year = (int)date('Y'); 2000 <= $year; $year--): ?>
                                                                        <option value="<?=$year;?>"><?=$year;?></option>
                                                                        <?php endfor; ?>
                                                                    </select>
                                                                    <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Target
                                                                    Selesai</label>
                                                                <div class="col-sm-10">
                                                                    <input type="month" name="target"
                                                                        value="<?= set_value('target'); ?>"
                                                                        class="form-control form-control-user"
                                                                        id="target"
                                                                        placeholder="Target (ex : June 2020)">
                                                                    <?= form_error('target', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Tanggal
                                                                    Mulai</label>
                                                                <div class="col-sm-10">
                                                                    <input type="date" name="tanggalregister"
                                                                        value="<?= set_value('tanggalregister'); ?>"
                                                                        class="form-control form-control-user"
                                                                        id="tanggalregister"
                                                                        placeholder="Masukkan Tanggal register">
                                                                    <?= form_error('tanggalregister', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Dokumen
                                                                    URF</label>
                                                                <div class="col-sm-10">
                                                                <h7>
                                                                        <font color="red">Dokumen URF Harus Diunggah!
                                                                        </font>
                                                                    </h7>
                                                                    <input type="file" name="urf"
                                                                        value="<?= set_value('urf'); ?>"
                                                                        class="form-control form-control-user" id="urf"
                                                                        placeholder="Insert File">
                                                                    
                                                                    <?= form_error('urf', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                </div>

                                                            </div>

                                                            <div class="form-group row">
                                                                <label
                                                                    class="col-sm-2 col-form-label">Keterangan</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="keterangan"
                                                                        value="<?= set_value('keterangan'); ?>"
                                                                        class="form-control form-control-user"
                                                                        id="keterangan" placeholder="Keterangan">
                                                                    <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="float-right">
                                                        <button type="submit" name="tambah"
                                                            class="btn btn-success float-right">Simpan</button>
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
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
function yesnoCheck() {
    if (document.getElementById('noCheck').checked) {
        document.getElementById('ifTidakada').style.visibility = 'visible';
    } else {
        document.getElementById('ifTidakada').style.visibility = 'hidden';
    }
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifAda').style.visibility = 'visible';
    } else {
        document.getElementById('ifAda').style.visibility = 'hidden';
    }
}
</script>