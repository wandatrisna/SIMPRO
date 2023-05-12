<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 ">
            <div class="float">
                <a href="<?= base_url('Aplikasi/detaileksternal/'). $eksternal['id_eks']; ?>"
                    class="btn btn-info">&larr; Kembali</a>
            </div>
            <br>
            <div class="card" style="background-color: rgba(245, 245, 245, 0.9);">
                <div class="row">
                    <div class="card-body">
                        <center>
                            <h4 class="title"><strong>Perbarui Data Eksternal</strong></h4><br><br>
                        </center>
                        <?= $this->session->flashdata('message') ?>
                        
                        <div class="card-block">

                            <form action="" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id_eks" value="<?= $eksternal['id_eks']; ?>">

                                <div class="form-group">
                                    <div class="form-group">


                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;Nama Aplikasi</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td>&emsp;: <?= $eksternal['nama_eks']; ?></td>
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;Tanggal
                                                    Penyerahan PMF</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td>&emsp;: <?= $eksternal['tgl_penyerahan_pmf']; ?></td>
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;Tanggal
                                                    Migrasi</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td>&emsp;: <?= $eksternal['tgl_migrasi']; ?></td>
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;PIC
                                                    Planning</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td>&emsp;: <?= $eksternal['pic_plan_eks']; ?></td>
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;PMF Disampaikan
                                                    Oleh</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td>&emsp;: <?= $eksternal['pmf_by_eks']; ?></td>
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;Form
                                                    PMF</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td>&emsp;: <?= $eksternal['doc_form_pmf']; ?></td>
                                                &emsp;<input type="file" name="doc_form_pmf" id="doc_form_pmf"
                                                    accept="image/png, image/jpeg, image/jpg, image/gif">
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;Dokumen
                                                    Library</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td>&emsp;: <?= $eksternal['doc_library']; ?></td>
                                                &emsp;<input type="file" name="doc_library" id="doc_form_pmf"
                                                    accept="image/png, image/jpeg, image/jpg, image/gif">
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;Dokumen
                                                    Check List</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td>&emsp;: <?= $eksternal['doc_check_list']; ?></td>
                                                &emsp;<input type="file" name="doc_check_list" id="doc_form_pmf"
                                                    accept="image/png, image/jpeg, image/jpg, image/gif">
                                            </label>

                                        </div>

                                        <label class="col-sm-12 col-form-label"><strong>Keterangan</strong>
                                        </label>
                                        <br>
                                        <label class="col-sm-12 col-form-label">
                                            <td><?= $eksternal['keterangan']; ?></td><br>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <input type="hidden" name="id_eks" value="<?= $eksternal['id_eks']; ?>">
                                    <input type="hidden" name="nomor_eks" value="<?= $eksternal['nomor_eks']; ?>">
                                    <input type="hidden" name="nama_eks" value="<?= $eksternal['nama_eks']; ?>">
                                    <input type="hidden" name="jenisaplikasi"
                                        value="<?= $eksternal['jenisaplikasi']; ?>">
                                    <input type="hidden" name="pmf_eks" value="<?= $eksternal['pmf_eks']; ?>">
                                    <input type="hidden" name="versi_eks" value="<?= $eksternal['versi_eks']; ?>">
                                    <input type="hidden" name="tgl_penyerahan_pmf"
                                        value="<?= $eksternal['tgl_penyerahan_pmf']; ?>">
                                    <input type="hidden" name="tgl_migrasi" value="<?= $eksternal['tgl_migrasi']; ?>">
                                    <input type="hidden" name="keterangan" value="<?= $eksternal['keterangan']; ?>">
                                    <input type="hidden" name="pic_plan_eks" value="<?= $eksternal['pic_plan_eks']; ?>">
                                    <input type="hidden" name="pmf_by_eks" value="<?= $eksternal['pmf_by_eks']; ?>">

                                    <div class="col-md-12">
                                        <button type="submit" name="tambah"
                                            class="btn btn-warning btn-round btn-block">Update</button>
                                    </div>
                            </form>

                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>