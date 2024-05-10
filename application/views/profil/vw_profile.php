<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8 ">

            <div class="card" style="background-color: rgba(245, 245, 245, 0.9);">
                <div class="row">
                    <div class="card-body">
                        <center>
                            <h4 class="title"><strong>Profil Saya</strong></h4><br><br>
                        </center>


                        <div class="page-header-title">
                            <div class="row">
                                <div class="col-md-6">
                                    &emsp;&emsp;&emsp;<img class="img-profile rounded-circle" style="width : 280px;"
                                        src="<?= base_url('assets/images/profile/') . $user1['gambar']; ?>">

                                    <div class="custom-file">
                                        <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a
                                            href="<?= base_url('Profile/edit/').$user1['id_user']; ?>"
                                            class="badge badge-warning">Ubah Foto</a>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <!-- <div class="card-body"> -->
                                    <h3>&emsp;<strong><?= $user1['nama']; ?></strong></h3>
                                    <br>

                                    <h6>&emsp;&emsp;<strong>Nomor Induk Kepegawaian</strong></h6>
                                    <p>&emsp;&emsp;<?= $user1['NIK'] ?> </p>

                                    <h6>&emsp;&emsp;<strong>Subdivisi</strong></h6>
                                    <p>&emsp;&emsp;<?= $user1['role'] ?></p>

                                    <br>
                                    <?= $this->session->flashdata('message') ?>
                                    <!-- </div> -->
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