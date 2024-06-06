<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 ">
            <div class="float">
                <a href="<?= base_url('Eksternal/subeksternal/'). $eksternal['nama_eks']; ?>"
                    class="btn btn-info">&larr;
                    Kembali</a>
            </div>
            <br>
            <div class="card shadow mb-4">
        <div class="card-header py-3">
                        <center>
                            <h4 class="title"><strong>Eksternal Detail</strong></h4><br><br>
                        </center>
                        <?= $this->session->flashdata('message') ?>

                        <div class="card-block">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id_eks" value="<?= $eksternal['id_eks']; ?>">
                                <div class="form-group">
                                    <div class="form-group">

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;Application
                                                    Name</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td> : <?= $eksternal['nama_eks']; ?></td>
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;PMF Submission
                                                    Date</strong>
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
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;PIC
                                                    (Planning)</strong>
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
                                                <td> : <?= $eksternal['doc_form_pmf']; ?>
                                                    <?php 
                                                                if ($eksternal['doc_form_pmf'] != null) { ?>
                                                    <a href="<?= base_url('Eksternal/downloadpmf1/'). $eksternal['doc_form_pmf']; ?>"
                                                        class="badge badge-success">Download</a>
                                                    <?php  } else { ?>
                                                    <a href="<?= base_url('Eksternal/downloadpmf/'). $eksternal['doc_form_pmf']; ?>"
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
                                                <td> : <?= $eksternal['doc_library']; ?>
                                                    <?php 
                                                                if ($eksternal['doc_library'] != null) { ?>
                                                    <a href="<?= base_url('Eksternal/downloadlib1/'). $eksternal['doc_library']; ?>"
                                                        class="badge badge-success">Download</a>
                                                    <?php  } else { ?>
                                                    <a href="<?= base_url('Eksternal/downloadlib/'). $eksternal['doc_library']; ?>"
                                                        class="badge badge-secondary"
                                                        style="pointer-events: none">Download</a>
                                                    <?php  }?>
                                                </td>
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;Check List
                                                    Dcoument</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td> : <?= $eksternal['doc_check_list']; ?>
                                                    <?php 
                                                                if ($eksternal['doc_check_list'] != null) { ?>
                                                    <a href="<?= base_url('Eksternal/downloadcheck1/'). $eksternal['doc_check_list']; ?>"
                                                        class="badge badge-success">Download</a>
                                                    <?php  } else { ?>
                                                    <a href="<?= base_url('Eksternal/downloadcheck/'). $eksternal['doc_check_list']; ?>"
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
                                                <td> : <?= $eksternal['doc_lain']; ?></td>
                                                <?php 
                                            if ($eksternal['doc_lain'] != null) { ?>
                                                <a href="<?= base_url('Eksternal/downloadlain/'). $eksternal['doc_lain']; ?>"
                                                    class="badge badge-success">Download</a>
                                                <?php  } else { ?>
                                                <a href="<?= base_url('Eksternal/downloadlain/'). $eksternal['doc_lain']; ?>"
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
                                </div>

                                <?php
                                                if ($user1['role'] == 'Planning') {
                                                ?>
                                <div class="col-md-12">
                                    <a href="<?= base_url('Eksternal/editeksternal/'). $eksternal['id_eks']; ?>"
                                        class="btn btn-warning btn-round btn-block">Perbarui Data (Document)</a>
                                </div>
                                <?php
												} elseif ($user1['role'] == 'IT Support') { ?>
                                <div class="col-md-12">
                                    <a href="<?= base_url('Eksternal/sup_editeksternal/'). $eksternal['id_eks']; ?>"
                                        class="btn btn-warning btn-round btn-block">Perbarui Data</a>
                                </div>
                                <?php
                                                }
												?>
                            </form>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>