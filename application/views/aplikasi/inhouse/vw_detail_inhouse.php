<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 ">
            <?php
                            if ($user1['role'] == 'Planning') {?>
            <div class="float">
                <a href="<?= base_url('Inhouse/subinhouse/'). $inhouse['nama_in']; ?>" class="btn btn-info">&larr;
                    Kembali</a>
            </div>
            <?php
							} elseif ($user1['role'] == 'IT Support') { ?>
            <div class="float">
                <a href="<?= base_url() ?>Inhouse/sup_indexinhouse" class="btn btn-info">&larr; Back</a>
            </div>
            <?php }?>
            <br>
            <div class="card" style="background-color: rgba(245, 245, 245, 0.9);">
                <div class="row">
                    <div class="card-body">
                        <center>
                            <h4 class="title"><strong>Inhouse Detail</strong></h4><br><br>
                        </center>
                        <?= $this->session->flashdata('message') ?>
                        <div class="card-block">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id_in" value="<?= $inhouse['id_in']; ?>">
                                <div class="form-group">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;Application
                                                    Name</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td> : <?= $inhouse['nama_in']; ?></td>
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;PMF Date</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td> : <?= $inhouse['tgl_penyerahan_pmf']; ?></td>
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;Migration Date</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td> : <?= $inhouse['tgl_migrasi_prod']; ?></td>
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;PIC
                                                    (Planning)</strong></label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td> : <?= $inhouse['pic_plan_in']; ?></td>
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;PIC
                                                    (Development)</strong></label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td> : <?= $inhouse['pic_dev_in']; ?></td>
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;PIC
                                                    (Migrasi)</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td> : <?= $inhouse['pic_migrasi_in'];  ?></td>
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;PMF Form</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td> : <?= $inhouse['doc_form_pmf']; ?>
                                                    <?php 
                                                if ($inhouse['doc_form_pmf'] != null) { ?>
                                                    <a href="<?= base_url('Inhouse/downloadpmf/'). $inhouse['doc_form_pmf']; ?>"
                                                        class="badge badge-success">Download</a>
                                                    <?php  } else { ?>
                                                    <a href="<?= base_url('Inhouse/downloadpmf/'). $inhouse['doc_form_pmf']; ?>"
                                                        class="badge badge-secondary"
                                                        style="pointer-events: none">Download</a>
                                                    <?php  }?>

                                                </td>
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;Library
                                                    Document</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td> : <?= $inhouse['doc_library']; ?>
                                                    <?php 
                                            if ($inhouse['doc_library'] != null) { ?>
                                                    <a href="<?= base_url('Inhouse/downloadlib/'). $inhouse['doc_library']; ?>"
                                                        class="badge badge-success">Download</a>
                                                    <?php  } else { ?>
                                                    <a href="<?= base_url('Inhouse/downloadlib/'). $inhouse['doc_library']; ?>"
                                                        class="badge badge-secondary"
                                                        style="pointer-events: none">Download</a>
                                                    <?php  }?>
                                                </td>
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;Check List
                                                    Document</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td> : <?= $inhouse['doc_check_list']; ?>
                                                    <?php 
                                            if ($inhouse['doc_check_list'] != null) { ?>
                                                    <a href="<?= base_url('Inhouse/downloadcheck/'). $inhouse['doc_check_list']; ?>"
                                                        class="badge badge-success">Download</a>
                                                    <?php  } else { ?>
                                                    <a href="<?= base_url('Inhouse/downloadcheck/'). $inhouse['doc_check_list']; ?>"
                                                        class="badge badge-secondary"
                                                        style="pointer-events: none">Download</a>
                                                    <?php  }?>
                                                </td>
                                            </label>

                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;Other
                                                    Document</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td> : <?= $inhouse['doc_lain']; ?></td>
                                                <?php 
                                            if ($inhouse['doc_lain'] != null) { ?>
                                                    <a href="<?= base_url('Inhouse/downloadlain/'). $inhouse['doc_lain']; ?>"
                                                        class="badge badge-success">Download</a>
                                                    <?php  } else { ?>
                                                    <a href="<?= base_url('Inhouse/downloadlain/'). $inhouse['doc_lain']; ?>"
                                                        class="badge badge-secondary"
                                                        style="pointer-events: none">Download</a>
                                                    <?php  }?>
                                                    </td>
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                        <label class="col-sm-4 col-form-label"><strong>&emsp;Planning Description</strong></label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td> : <?= $inhouse['keterangan_in']; ?></td>
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;Migration Status</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td> : 
                                                <?php if ($inhouse['note_in'] == 'Pending') { ?>
                                                    <a class="badge badge-danger" style="pointer-events: none">Pending</a>

                                                        <?php } else if ($inhouse['note_in'] == 'On Progress') { ?>
                                                    <a href="$inhouse1['note_in'];"
                                                        class="badge badge-warning" style="pointer-events: none">On Progress</a>

                                                        <?php } else  if ($inhouse['note_in'] == 'Done')  { ?>
                                                    <a href="$inhouse1['note_in'];"
                                                        class="badge badge-success" style="pointer-events: none">Done</a>

                                                        <?php } else  if ($inhouse['note_in'] == null)  { ?>
                                                    <a href="$inhouse1['note_in'];"
                                                        class="badge badge-secondary" style="pointer-events: none">Null</a>
                                                    <?php  }?></td>
                                            </label>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;Migration Note</strong></label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td> : <?= $inhouse['comment_in']; ?></td>
                                            </label>
                                        </div>
                                    </div>
                                    <?php
                                    if ($user1['role'] == 'Planning') {
                                    ?>
                                    <div class="col-md-12">
                                        <a href="<?= base_url('Inhouse/editinhouse/'). $inhouse['id_in']; ?>"
                                            class="btn btn-warning btn-round btn-block">Update (Document)</a>
                                    </div>
                                    <?php
                                        } elseif ($user1['role'] == 'IT Support') { ?>
                                    <div class="col-md-12">
                                        <a href="<?= base_url('Inhouse/sup_editinhouse/'). $inhouse['id_in']; ?>"
                                            class="btn btn-warning btn-round btn-block">Update Data</a>
                                    </div>
                                    <?php
                                    }
                                    ?>
                            </form>
                        </div>
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