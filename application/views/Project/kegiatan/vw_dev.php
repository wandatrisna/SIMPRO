<div class="col-md-12">
    <div class="float">
        <?php
                                            $previous_url = $this->session->userdata('previous_url');
                                            ?>
        <a href="<?= $previous_url ?>" class="btn btn-secondary">Kembali</a>
    </div>
    <!-- <div class="float">
        <a href="<?= base_url('Project/detail/'). $project1['id_project']; ?>"
            class="btn btn-secondary mb-2">Kembali</a>
    </div> -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <?php if ($this->session->flashdata('acc')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= $this->session->flashdata('acc') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php elseif ($this->session->flashdata('err')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= $this->session->flashdata('err') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php endif ?>
            <?php if ($user1['role'] == 'Development') {   ?>
            <div class="float-right">
                <br>
                <a data-toggle="modal" data-target="#modalAdd1" class="btn btn-success mb-2">Tambah Activity</a>
                <a data-toggle="modal" data-target="#modalSub2" class="btn btn-success mb-2">Tambah Sub-Activity</a>
            </div>
            <?php } ?>


            <h6 class="m-0 font-weight-bold text-primary">Development</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="table-warning">
                            <th width="5px">No</th>
                            <th>Nama Aktivitas</th>
                            <th>Nilai</th>
                            <th>Progres</th>
                            <th>Persentase</th>
                            <th>Perencanaan Tanggal Mulai</th>
                            <th>Perencanaan Tanggal Selesai</th>
                            <th>Aktual Tanggal Mulai</th>
                            <th>Aktual Tanggal Selesai</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($dev as $d): ?>
                        <tr>
                            <td>
                                <?= $i; ?>.
                            </td>
                            <td>
                                <?php echo $d->namakeg; ?>
                            </td>
                            <td>
                                <?php echo $d->bobot; ?>
                            </td>
                            <td>
                                <?php echo $d->progres; ?>
                            </td>
                            <td>
                                <?php echo floor($d->progres/$d->bobot*100); ?> %
                            </td>
                            <td>
                                <?php echo $d->planstdate; ?>
                            </td>
                            <td>
                                <?php echo $d->planendate; ?>
                            </td>
                            <td>
                                <?php echo $d->actualstdate; ?>
                            </td>
                            <td>
                                <?php echo $d->actualendate; ?>
                            </td>

                            <td>
                                <center>

                                    <a href="javascript:;" data-toggle="modal"
                                        data-target="#subdevModal_<?php echo $d->id ?>">
                                        <button class="badge badge-primary">Detail Sub-Activity</button>
                                    </a>
                                    <?php if ($user1['role'] == 'Development') {   ?>
                                    <a href="javascript:;" data-id="<?php echo $d->id ?>"
                                        data-idpro="<?php echo $d->project_id ?>"
                                        data-namakeg="<?php echo $d->namakeg ?>" data-bobot="<?php echo $d->bobot ?>"
                                        data-progres="<?php echo $d->progres ?>"
                                        data-planstdate="<?php echo $d->planstdate ?>"
                                        data-planendate="<?php echo $d->planendate ?>"
                                        data-actualstdate="<?php echo $d->actualstdate ?>"
                                        data-actualendate="<?php echo $d->actualendate ?>"
                                        data-file="<?php echo $d->file ?>" data-toggle="modal"
                                        data-target="#editModal_<?php echo $d->id ?>">
                                        <button class="badge badge-success">Perbarui</button>
                                    </a>
                                    <?php } ?>
                                    <?php if ($user1['role'] == 'Development') {   ?>
                                    <a href="<?= base_url('Project/hapuskeg/') . $d->id; ?>" class="badge badge-danger"
                                        onclick="return confirm('Apakah yakin ingin menghapus?');"
                                        class="ik ik-trash-2 text-red">Hapus</a>
                                    <?php } ?>
                                </center>
                            </td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <!-- Modal Tambah Kegiatan -->

                <div class="modal fade" id="modalAdd1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Activity</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?php echo base_url('Project/editdev/' . $project1['id_project']); ?>"
                                method="post" enctype="multipart/form-data" name="frm">
                                <div class="modal-body">

                                    <input type="hidden" name="project_id" value="<?= $project1['id_project']; ?>"
                                        id="project_id">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nama Activity</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="namakeg" class="form-control form-control-user"
                                                value="<?= set_value('namakeg'); ?>" id="namakeg"
                                                placeholder="Insert Activity Name ">
                                            <?= form_error('namakeg', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Bobot</label>
                                        <div class="col-sm-10">
                                            <input type="number" name="bobot" class="form-control form-control-user"
                                                value="" id="bobot" max=60 title="Bobot maksimal adalah 60">
                                            <small class="text-danger">Bobot tidak boleh lebih dari 60</small>
                                            <!-- Tulisan kecil merah -->
                                            <?= form_error('bobot', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Perencanaan Tanggal Mulai</label>
                                        <div class="col-sm-10">
                                            <input type="date" id="planstartdate" name="planstdate"
                                                class="form-control form-control-user"
                                                value="<?= set_value('planstdate'); ?>" id="planstdate">
                                            <?= form_error('planstdate', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Perencanaan Tanggal Selesai</label>
                                        <div class="col-sm-10">
                                            <input type="date" id="planendate" name="planendate"
                                                class="form-control form-control-user"
                                                value="<?= set_value('planendate'); ?>" id="planendate">
                                            <?= form_error('planendate', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Aktual Tanggal Mulai</label>
                                        <div class="col-sm-10">
                                            <input type="date" id="actualstdate" name="actualstdate"
                                                class="form-control form-control-user"
                                                value="<?= set_value('actualstdate'); ?>" id="actualstdate">
                                            <?= form_error('actualstdate', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Aktual Tanggal Selesai</label>
                                        <div class="col-sm-10">
                                            <input type="date" id="actualendate" name="actualendate"
                                                class="form-control form-control-user"
                                                value="<?= set_value('actualendate'); ?>" id="actualendate">
                                            <?= form_error('actualendate', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal Tambah Sub Kegiatan -->

                <div class="modal fade" id="modalSub2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <form action="<?php echo base_url('Project/subdev/' . $project1['id_project']); ?>"
                                method="post" enctype="multipart/form-data">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambahkan Data Sub-Activity
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" name="project_id" value="<?= $project1['id_project']; ?>"
                                        id="project_id">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Activity</label>
                                        <div class="col-sm-10">
                                            <select name="id_dev" id="id_dev" class="form-control">
                                                <option hidden>Pilih Activity Yang Tersedia</option>
                                                <?php foreach ($dev as $k): ?>
                                                <option value="<?= $k->id; ?>"><?= $k->namakeg?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <?= form_error('sumber', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Sub Activity</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="namakeg" class="form-control form-control-user"
                                                value="<?= set_value('namakeg'); ?>" id="namakeg"
                                                placeholder="Masukkan anak dari activity induk">
                                            <?= form_error('namakeg', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Bobot</label>
                                        <div class="col-sm-10">
                                            <input type="number" name="bobot" class="form-control form-control-user"
                                                value="<?= set_value('bobot'); ?>" id="bobot"
                                                placeholder="Masukkan bobot">
                                            <small class="text-danger">Bobot tidak boleh lebih besar dari bobot activity
                                                induk</small> <!-- Tulisan kecil merah -->
                                            <?= form_error('bobot', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Perencanaan Tanggal Mulai</label>
                                        <div class="col-sm-10">
                                            <input type="date" id="planstartdate" name="planstdate"
                                                class="form-control form-control-user"
                                                value="<?= set_value('planstdate'); ?>" id="planstdate">
                                            <?= form_error('planstdate', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Perencanaan Tanggal Selesai</label>
                                        <div class="col-sm-10">
                                            <input type="date" id="planendate" name="planendate"
                                                class="form-control form-control-user"
                                                value="<?= set_value('planendate'); ?>" id="planendate">
                                            <?= form_error('planendate', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Aktual Tanggal Mulai</label>
                                        <div class="col-sm-10">
                                            <input type="date" id="actualstdate" name="actualstdate"
                                                class="form-control form-control-user"
                                                value="<?= set_value('actualstdate'); ?>" id="actualstdate">
                                            <?= form_error('actualstdate', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Aktual Tanggal Selesai</label>
                                        <div class="col-sm-10">
                                            <input type="date" id="actualendate" name="actualendate"
                                                class="form-control form-control-user"
                                                value="<?= set_value('actualendate'); ?>" id="actualendate">
                                            <?= form_error('actualendate', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Keterangan </label>
                                        <div class="col-sm-10">
                                            <input type="text" name="keterangan" class="form-control form-control-user"
                                                value="<?= set_value('keterangan'); ?>" id="keterangan"
                                                placeholder="Masukkan keterangan ">
                                            <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Modal Ubah Kegiatan -->

                <?php foreach ($dev as $d): ?>
                <form action="<?php echo site_url('Project/ubahdev/') . $d->id ?>" method="POST"
                    enctype="multipart/form-data" name="frm" onsubmit="return validateForm()">
                    <div class="modal fade" id="editModal_<?php echo $d->id ?>" role="dialog" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <input type="hidden" name="project_id" value="<?= $project1['id_project']; ?>"
                                    id="project_id">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Perbarui Data Activity
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <input type="hidden" name="id_project">
                                    <input type="hidden" name="updated_by" value="<?= $user1['NIK']; ?>">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Bobot</label>
                                        <div class="col-sm-9">
                                            <input type="number" name="bobotbrd" class="form-control" id="bobotbrd"
                                                value="<?php echo $d->bobot; ?>">
                                            <small class="text-danger">Bobot total tidak boleh lebih dari 60</small>
                                            <!-- Tulisan kecil merah -->
                                            <?= form_error('bobotbrd', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Perencanaan Tanggal Mulai</label>
                                        <div class="col-sm-9">
                                            <input type="date" id="planstdatebrd" name="planstdatebrd"
                                                value="<?php echo $d->planstdate; ?>"
                                                class="form-control form-control-user" id="planstdatebrd">
                                            <?= form_error('planstdatebrd', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Perencanaan Tanggal Selesai</label>
                                        <div class="col-sm-9">
                                            <input type="date" id="planendatebrd" name="planendatebrd"
                                                class="form-control form-control-user"
                                                value="<?php echo $d->planendate; ?>" id="planendatebrd">
                                            <?= form_error('planendatebrd', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Aktual Tanggal Mulai
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="date" id="actualstdatebrd" name="actualstdatebrd"
                                                class="form-control form-control-user"
                                                value="<?php echo $d->actualstdate; ?>" id="actualstdatebrd">
                                            <?= form_error('actualstdatebrd', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Aktual Tanggal Selesai
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="date" id="actualendatebrd" name="actualendatebrd"
                                                class="form-control form-control-user"
                                                value="<?php echo $d->actualendate; ?>" id="actualendatebrd">
                                            <?= form_error('actualendatebrd', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-success" id="btn-ok">Perbarui</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="modal fade" id="subdevModal_<?php echo $d->id ?>" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Daftar Sub-Activity
                                    (<?php echo $d->namakeg ?>)
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <table class="table">
                                    <thead>
                                        <tr class="table-warning">
                                            <th>Nama Sub-Activity</th>
                                            <th>Bobot</th>
                                            <th>Perencanaan Tanggal Mulai</th>
                                            <th>Perencanaan Tanggal Selesai</th>
                                            <th>Aktual Tanggal Mulai</th>
                                            <th>Aktual Tanggal Selesai</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; $sub = $this->Development_model->getSub($d->id);?>
                                        <?php foreach ($sub as $d): ?>
                                        <tr>
                                            <td>
                                                <?php echo $d['namakeg']; ?>
                                            </td>
                                            <td>
                                                <?php echo $d['bobot']; ?>
                                            </td>
                                            <td>
                                                <?php echo $d['planstdate']; ?>
                                            </td>
                                            <td>
                                                <?php echo $d['planendate']; ?>
                                            </td>
                                            <td>
                                                <?php echo $d['actualstdate']; ?>
                                            </td>
                                            <td>
                                                <?php echo $d['actualendate']; ?>
                                            </td>
                                            <td>
                                                <?php echo $d['keterangan']; ?>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>

</div>
<script src="<?= base_url('assets/js/demo/datatables-demo.js') ?>"></script>
<script src="<?= base_url('assets') ?>/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets') ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- <script>
	function validateForm1() {
		let x = document.forms["frm"]["progresbrd"].value;
		bobot=$('#bobotbrd').val();
		if (x >> bobot) {
			alert("Progress is not more than Value");
			
			$('#modalAdd1').show();
		}return false;
	}

</script> -->