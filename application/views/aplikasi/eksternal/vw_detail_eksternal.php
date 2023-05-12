<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 ">
            <?php
                            if ($user1['role'] == 'Planning') {?>
            <div class="float">
                <a href="<?= base_url() ?>Aplikasi/indexeksternal" class="btn btn-info">&larr; Kembali</a>
            </div>
            <?php
							} elseif ($user1['role'] == 'IT Support') { ?>
            <div class="float">
                <a href="<?= base_url() ?>Aplikasi/sup_indexeksternal" class="btn btn-info">&larr; Kembali</a>
            </div>
            <?php }?>
            <br>
            <div class="card" style="background-color: rgba(245, 245, 245, 0.9);">
                <div class="row">
                    <div class="card-body">
                        <center>
                            <h4 class="title"><strong>Detail Data Eksternal</strong></h4><br><br>
                        </center>
                        <?= $this->session->flashdata('message') ?>

                        <div class="card-block">

                            <form action="" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id_eks" value="<?= $eksternal['id_eks']; ?>">

                                <div class="form-group">
                                    <div class="form-group">


                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;Nama
                                                    Aplikasi</strong>
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
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;PMF
                                                    Disampaikan Oleh</strong>
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
                                                <td>&emsp;: <?= $eksternal['doc_form_pmf']; ?>
                                                    <?php 
                                                                if ($eksternal['doc_form_pmf'] != null) { ?>
                                                    <a href="<?= base_url('Aplikasi/downloadpmf1/'). $eksternal['doc_form_pmf']; ?>"
                                                        class="badge badge-success">Unduh</a>
                                                    <?php  } else { ?>
                                                    <a href="<?= base_url('Aplikasi/downloadpmf/'). $eksternal['doc_form_pmf']; ?>"
                                                        class="badge badge-secondary"
                                                        style="pointer-events: none">Unduh</a>
                                                    <?php  }?>

                                                </td>
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;Dokumen
                                                    Library</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td>&emsp;: <?= $eksternal['doc_library']; ?>
                                                    <?php 
                                                                if ($eksternal['doc_library'] != null) { ?>
                                                    <a href="<?= base_url('Aplikasi/downloadlib1/'). $eksternal['doc_library']; ?>"
                                                        class="badge badge-success">Unduh</a>
                                                    <?php  } else { ?>
                                                    <a href="<?= base_url('Aplikasi/downloadlib/'). $eksternal['doc_library']; ?>"
                                                        class="badge badge-secondary"
                                                        style="pointer-events: none">Unduh</a>
                                                    <?php  }?>
                                                </td>
                                            </label>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label"><strong>&emsp;Dokumen
                                                    Check List</strong>
                                            </label>
                                            <br>
                                            <label class="col-sm-8 col-form-label">
                                                <td>&emsp;: <?= $eksternal['doc_check_list']; ?>
                                                    <?php 
                                                                if ($eksternal['doc_check_list'] != null) { ?>
                                                    <a href="<?= base_url('Aplikasi/downloadcheck1/'). $eksternal['doc_check_list']; ?>"
                                                        class="badge badge-success">Unduh</a>
                                                    <?php  } else { ?>
                                                    <a href="<?= base_url('Aplikasi/downloadcheck/'). $eksternal['doc_check_list']; ?>"
                                                        class="badge badge-secondary"
                                                        style="pointer-events: none">Unduh</a>
                                                    <?php  }?>
                                                </td>
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

                                <?php
                                                if ($user1['role'] == 'Planning') {
                                                ?>
                                <div class="col-md-12">
                                    <a href="<?= base_url('Aplikasi/editeksternal/'). $eksternal['id_eks']; ?>"
                                        class="btn btn-warning btn-round btn-block">Perbarui Data
                                        Dokumen</a>
                                </div>
                                <?php
												} elseif ($user1['role'] == 'IT Support') { ?>
                                <div class="col-md-12">
                                    <a href="<?= base_url('Aplikasi/sup_editeksternal/'). $eksternal['id_eks']; ?>"
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