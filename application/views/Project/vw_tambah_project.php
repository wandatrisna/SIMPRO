<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="pcoded-content">
                <section class="common-img-bg1">
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">
                                    <div class="float">
                                        <a href="<?= base_url() ?>Project/index"
                                            class="btn btn-secondary mb-2">Kembali</a>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card"
                                                style="background-color: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); transition: 0.3s;">
                                                <div class="card-header justify-content-center">
                                                    <strong>Tambah Data Baru</strong>
                                                </div>
                                                <div class="card-body">
                                                    <div class="card-block">
                                                        <form action="" method="POST" enctype="multipart/form-data">
                                                            <div class="form-group row">
                                                                <label for="namaaplikasi"
                                                                    class="col-sm-2 col-form-label">Nama
                                                                    Aplikasi</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="namaaplikasi"
                                                                        class="form-control form-control-user"
                                                                        value="<?= set_value('namaaplikasi'); ?>"
                                                                        id="namaaplikasi"
                                                                        placeholder="Masukkan nama aplikasi">
                                                                    <?= form_error('namaaplikasi', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="jenisproject"
                                                                    class="col-sm-2 col-form-label">Jenis Proyek</label>
                                                                <div class="col-sm-10">
                                                                    <select name="jenisproject" class="form-control"
                                                                        id="jenisproject">
                                                                        <?php foreach ($jenisproject as $p) : ?>
                                                                        <option value="<?= $p['id_jenisproject'] ?>">
                                                                            <?= $p['namajenisproject'] ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                    <?= form_error('jenisproject', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="jenisaplikasi"
                                                                    class="col-sm-2 col-form-label">Jenis
                                                                    Aplikasi</label>
                                                                <div class="col-sm-10">
                                                                    <select name="jenisaplikasi" class="form-control"
                                                                        id="jenisaplikasi">
                                                                        <?php foreach ($jenisaplikasi as $p) : ?>
                                                                        <option value="<?= $p['id_jenisaplikasi'] ?>">
                                                                            <?= $p['namajenisaplikasi'] ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                    <?= form_error('jenisaplikasi', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="tahun"
                                                                    class="col-sm-2 col-form-label">Tahun</label>
                                                                <div class="col-sm-10">
                                                                    <select class="form-control" name="tahun"
                                                                        id="tahun">
                                                                        <?php for ($year = (int)date('Y'); $year >= 2000; $year--) : ?>
                                                                        <option value="<?= $year ?>"><?= $year ?>
                                                                        </option>
                                                                        <?php endfor; ?>
                                                                    </select>
                                                                    <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="target"
                                                                    class="col-sm-2 col-form-label">Target
                                                                    Selesai</label>
                                                                <div class="col-sm-10">
                                                                    <input type="month" name="target"
                                                                        class="form-control form-control-user"
                                                                        value="<?= set_value('target'); ?>" id="target">
                                                                    <?= form_error('target', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="tanggalregister"
                                                                    class="col-sm-2 col-form-label">Tanggal
                                                                    Mulai</label>
                                                                <div class="col-sm-10">
                                                                    <input type="date" name="tanggalregister"
                                                                        class="form-control form-control-user"
                                                                        value="<?= set_value('tanggalregister'); ?>"
                                                                        id="tanggalregister"
                                                                        placeholder="Masukkan Tanggal register">
                                                                    <?= form_error('tanggalregister', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="urf" class="col-sm-2 col-form-label">Dokumen
                                                                    URF</label>
                                                                <div class="col-sm-10">
                                                                    <h7>
                                                                        <font color="red">Dokumen URF Harus Diunggah!
                                                                        </font>
                                                                    </h7>
                                                                    <input type="file" name="urf"
                                                                        class="form-control form-control-user"
                                                                        value="<?= set_value('urf'); ?>" id="urf"
                                                                        placeholder="Insert File">
                                                                    <?= form_error('urf', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="keterangan"
                                                                    class="col-sm-2 col-form-label">Keterangan</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="keterangan"
                                                                        class="form-control form-control-user"
                                                                        value="<?= set_value('keterangan'); ?>"
                                                                        id="keterangan" placeholder="Keterangan">
                                                                    <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="updated_by"
                                                                value="<?= $user1['NIK']; ?>">
                                                            <div class="float-right">
                                                                <button type="submit" name="tambah"
                                                                    class="btn btn-success float-right">Simpan
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
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
function yesnoCheck() {
    document.getElementById('ifTidakada').style.visibility = document.getElementById('noCheck').checked ? 'visible' :
        'hidden';
    document.getElementById('ifAda').style.visibility = document.getElementById('yesCheck').checked ? 'visible' :
        'hidden';
}
</script>