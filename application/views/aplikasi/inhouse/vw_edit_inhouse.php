<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 ">
            <div class="float">
                <a href="<?= base_url('Inhouse/detailinhouse/'). $inhouse['id_in']; ?>" class="btn btn-info">&larr;
                    Back</a>
            </div>
            <br>
            <div class="card" style="background-color: rgba(245, 245, 245, 0.9);">
                <div class="row">
                    <div class="card-body">
                        <center>
                            <h4 class="title"><strong>Edit Data</strong></h4><br><br>
                        </center>
                        <?= $this->session->flashdata('message') ?>

                        <div class="card-block">

                            <form action="" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id_in" value="<?= $inhouse['id_in']; ?>">

                                <div class="form-group">
                                    <div class="form-group">


                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;Application
                                                    Name</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td>&emsp;: <?= $inhouse['nama_in']; ?></td>
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;PMF Submission
                                                    Date</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td>&emsp;: <?= $inhouse['tgl_penyerahan_pmf']; ?></td>
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;Migration Date</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td>&emsp;: <?= $inhouse['tgl_migrasi_prod']; ?></td>
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;PIC (Planning)</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td>&emsp;: <?= $inhouse['pic_plan_in']; ?></td>
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;PIC
                                                    (Development)</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td>&emsp;: <?= $inhouse['pic_dev_in']; ?></td>
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;PIC
                                                    (Migration)</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td>&emsp;: <?= $inhouse['pic_migrasi_in'];  ?></td>
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;PMF Form</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td>&emsp;: <?= $inhouse['doc_form_pmf']; ?></td>
                                                &emsp;<input type="file" name="doc_form_pmf" id="doc_form_pmf"
                                                    accept="image/png, image/jpeg, image/jpg, image/gif">
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;Library
                                                    Document</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td>&emsp;: <?= $inhouse['doc_library']; ?></td>
                                                &emsp;<input type="file" name="doc_library" id="doc_form_pmf"
                                                    accept="image/png, image/jpeg, image/jpg, image/gif">
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;Check List
                                                    Document</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td>&emsp;: <?= $inhouse['doc_check_list']; ?></td>
                                                &emsp;<input type="file" name="doc_check_list" id="doc_form_pmf"
                                                    accept="image/png, image/jpeg, image/jpg, image/gif">
                                            </label>

                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;Other
                                                    Document</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td>&emsp;: <?= $inhouse['doc_lain']; ?></td>
                                                &emsp;<input type="file" name="doc_lain" id="doc_lain"
                                                    accept="image/png, image/jpeg, image/jpg, image/gif">
                                            </label>

                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-12 col-form-label"><strong>&emsp;Description</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-12 col-form-label">
                                                <td>&emsp;<?= $inhouse['keterangan_in']; ?></td><br>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <input type="hidden" name="id_in" value="<?= $inhouse['id_in']; ?>">
                                        <input type="hidden" name="nomor_in" value="<?= $inhouse['nomor_in']; ?>">
                                        <input type="hidden" name="jenis_dokumen" value="<?= $inhouse['jenis_dokumen']; ?>">
                                        <input type="hidden" name="nama_in" value="<?= $inhouse['nama_in']; ?>">
                                        <input type="hidden" name="versi_in" value="<?= $inhouse['versi_in']; ?>">
                                        <input type="hidden" name="tgl_penyerahan_pmf" value="<?= $inhouse['tgl_penyerahan_pmf']; ?>">
                                        <input type="hidden" name="tgl_migrasi_prod" value="<?= $inhouse['tgl_migrasi_prod']; ?>">
                                        <input type="hidden" name="keterangan_in" value="<?= $inhouse['keterangan_in']; ?>">
                                        <input type="hidden" name="pic_plan_in" value="<?= $inhouse['pic_plan_in']; ?>">
                                        <input type="hidden" name="pic_dev_in" value="<?= $inhouse['pic_dev_in']; ?>">
                                        <input type="hidden" name="pic_migrasi_in" value="<?= $inhouse['pic_migrasi_in']; ?>">
                                        <input type="hidden" name="owner_in" value="<?= $inhouse['owner_in']; ?>">
                                        <input type="hidden" name="hapus_in" value="<?= $inhouse['hapus_in']; ?>">


                                        <div class="col-md-12">
                                            <button type="submit" name="tambah"
                                                class="btn btn-warning btn-round btn-block">Update</button>
                                        </div>
                            </form>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>