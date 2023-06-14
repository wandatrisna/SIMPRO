<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 ">
            <div class="float">
                <a href="<?= base_url('Eksternal/detaileksternal/'). $eksternal['id_eks']; ?>"
                    class="btn btn-info">&larr; Back</a>
            </div>
            <br>
            <div class="card" style="background-color: rgba(245, 245, 245, 0.9);">
                <div class="row">
                    <div class="card-body">
                        <center>
                            <h4 class="title"><strong>Update Data</strong></h4><br><br>
                        </center>
                        <?= $this->session->flashdata('message') ?>
                        
                        <div class="card-block">

                            <form action="" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id_eks" value="<?= $eksternal['id_eks']; ?>">

                                <div class="form-group">
                                    <div class="form-group">


                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;Application Name</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td> : <?= $eksternal['nama_eks']; ?></td>
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;PMF Submission Date</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td> : <?= $eksternal['tgl_penyerahan_pmf']; ?></td>
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;Migration Date</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td> : <?= $eksternal['tgl_migrasi']; ?></td>
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;PIC (Planning)</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td> : <?= $eksternal['pic_plan_eks']; ?></td>
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;PMF By</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td> : <?= $eksternal['pmf_by_eks']; ?></td>
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;PMF Form</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td> : <?= $eksternal['doc_form_pmf']; ?></td>
                                                &emsp;<input type="file" name="doc_form_pmf" id="doc_form_pmf"
                                                    accept="image/png, image/jpeg, image/jpg, image/gif">
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;Library Document</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td> : <?= $eksternal['doc_library']; ?></td>
                                                &emsp;<input type="file" name="doc_library" id="doc_form_pmf"
                                                    accept="image/png, image/jpeg, image/jpg, image/gif">
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;Check List Document</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td> : <?= $eksternal['doc_check_list']; ?></td>
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
                                                <td> : <?= $eksternal['doc_lain']; ?></td>
                                                &emsp;<input type="file" name="doc_lain" id="doc_lain"
                                                    accept="image/png, image/jpeg, image/jpg, image/gif">
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                        <label class="col-sm-4 col-form-label"><strong>&emsp;Planning Description</strong></label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td> : <?= $eksternal['keterangan']; ?></td>
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;Migration Status</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td> : 
                                                <?php if ($eksternal['note_eks'] == 'Pending') { ?>
                                                    <a class="badge badge-danger" style="pointer-events: none">Pending</a>

                                                        <?php } else if ($eksternal['note_eks'] == 'On Progress') { ?>
                                                    <a href="$eksternal['note_eks'];"
                                                        class="badge badge-warning" style="pointer-events: none">On Progress</a>

                                                        <?php } else  if ($eksternal['note_eks'] == 'Done')  { ?>
                                                    <a href="$eksternal['note_eks'];"
                                                        class="badge badge-success" style="pointer-events: none">Done</a>
                                                        <?php } else  if ($eksternal['note_eks'] == Null)  { ?>
                                                    <a href="$eksternal['note_eks'];"
                                                        class="badge badge-secondary" style="pointer-events: none">Null</a>
                                                    <?php  }?></td>
                                            </label>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;Migration Note</strong></label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td> : <?= $eksternal['comment_eks']; ?></td>
                                            </label>
                                        </div>

                                    </div>

                                <div class="form-group row">
                                    <input type="hidden" name="id_eks" value="<?= $eksternal['id_eks']; ?>">
                                    <input type="hidden" name="nomor_eks" value="<?= $eksternal['nomor_eks']; ?>">
                                    <input type="hidden" name="nama_eks" value="<?= $eksternal['nama_eks']; ?>">
                                    <input type="hidden" name="dokumen_eks"
                                        value="<?= $eksternal['dokumen_eks']; ?>">
                                    <input type="hidden" name="jenis_eks" value="<?= $eksternal['jenis_eks']; ?>">
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
<br>
    <br>
</div>