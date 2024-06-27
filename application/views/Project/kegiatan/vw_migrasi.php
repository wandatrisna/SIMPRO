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
                                        <a href="<?= base_url('Project/detail/'). $project1['id_project']; ?>"
                                            class="btn btn-secondary mb-2">Kembali</a>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card shadow mb-4">
                                                <div class="card-header py-3">
                                                    <h4 class="title"><strong>MIGRASI</strong></h4><br>
                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-spinner-alt-5"></i>
                                                        <div class="float-right">
                                                            <?php
                                                if ($user1['role'] == 'Planning') {
                                                ?>
                                                            <a href="<?= base_url() ?>Project/editmigrasi"
                                                                class="btn btn-success btn-icon-split btn-sm">

                                                                <a href="javascript:;"
                                                                    data-id="<?php echo $project1['id_project'] ?>"
                                                                    data-bobot="<?php echo $project1['bobotmigrasi'] ?>"
                                                                    data-progres="<?php echo $project1['progresmigrasi'] ?>"
                                                                    data-planstdate="<?php echo $project1['planstdatemigrasi'] ?>"
                                                                    data-planendate="<?php echo $project1['planendatemigrasi'] ?>"
                                                                    data-actualstdate="<?php echo $project1['actualstdatemigrasi'] ?>"
                                                                    data-actualendate="<?php echo $project1['actualendatemigrasi'] ?>"
                                                                    data-toggle="modal" data-target="#editModal">
                                                                    <button data-toggle="modal" data-target="#ubah-data"
                                                                        class="btn btn-success">Perbarui</button>
                                                                </a>
                                                                <?php
												}
												?>
                                                                </ul>
                                                        </div>
                                                    </div>

                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-spinner-alt-5"></i>
                                                    </div>

                                                    <div class="card-block">
                                                        <table class="table table-hover">

                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class="task-contain">
                                                                            <p class="d-inline-block m-l-20">
                                                                                <strong>Bobot Maksimal BRD</strong>
                                                                            </p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <p class="d-inline-block m-r-20">
                                                                            <?= $project1['bobotmigrasi'] ?></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="task-contain">
                                                                            <p class="d-inline-block m-l-20">
                                                                                <strong>Progres Pengerjaan</strong>
                                                                            </p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <p class="d-inline-block m-r-20">
                                                                            <?= $project1['progresmigrasi'] ?></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="task-contain">
                                                                            <p class="d-inline-block m-l-20">
                                                                                <strong>Perencanaan Tanggal
                                                                                Mulai</strong></p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <p class="d-inline-block m-r-20">
                                                                            <?= $project1['planstdatemigrasi'] ?></p>

                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="task-contain">
                                                                            <p class="d-inline-block m-l-20">
                                                                                <strong>Perencanaan Tanggal
                                                                                Selesai</strong>
                                                                            </p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <p class="d-inline-block m-r-20">
                                                                            <?= $project1['planendatemigrasi'] ?>
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="task-contain">
                                                                            <p class="d-inline-block m-l-20">
                                                                                <strong>Aktual Tanggal Mulai</strong>
                                                                            </p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <p class="d-inline-block m-r-20">
                                                                            <?= $project1['actualstdatemigrasi'] ?>
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="task-contain">
                                                                            <p class="d-inline-block m-l-20">
                                                                                <strong>Aktual Tanggal Selesai</strong>
                                                                            </p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <p class="d-inline-block m-r-20">
                                                                            <?= $project1['actualendatemigrasi'] ?>
                                                                        </p>

                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <div class="task-contain">
                                                                            <p class="d-inline-block m-l-20">
                                                                                <strong>Dokumen (Oleh IT
                                                                                Planning)</strong>
                                                                            </p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a class="d-inline-block m-r-20"
                                                                            href="<?php echo base_url('assets/dokumenmigrasi/' . $project1['filemigrasi']); ?>"><?= $project1['filemigrasi'] ?></a>
                                                                        <!-- <img src="<?php echo base_url('assets/dokumenmigrasi/' . $project1['filemigrasi']); ?>"> -->
                                                                        <div class="progress d-inline-block">
                                                                            <div class="progress-bar bg-c-blue"
                                                                                role="progressbar" aria-valuemin="0"
                                                                                aria-valuemax="100" style="width:50%">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <form
                                                        action="<?php echo base_url('Project/editmigrasi/'). $project1['id_project'];?>"
                                                        method="POST" enctype="multipart/form-data" name="frm"
                                                        onsubmit="return validateForm()">
                                                        <div id="editModal" class="modal fade" tabindex="-1"
                                                            role="dialog" aria-labelledby="exampleModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-lg" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                            Perbarui Data Migrasi
                                                                        </h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>

                                                                    <div class="modal-body">
                                                                        <input type="hidden" name="id_project"
                                                                            value="<?= $project1['id_project']; ?>">
                                                                            <input type="hidden" name="updated_by" value="<?= $user1['NIK']; ?>">
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-sm-3 col-form-label">Bobot</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="number" name="bobotmigrasi"
                                                                                    class="form-control"
                                                                                    id="bobotmigrasi" value="5"
                                                                                    readonly>
                                                                                <?= form_error('bobotmigrasi', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-sm-3 col-form-label">Progres Pengerjaan</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="number"
                                                                                    name="progresmigrasi"
                                                                                    class="form-control form-control-user"
                                                                                    value="<?php echo $project1['progresmigrasi']; ?>"
                                                                                    id="progresmigrasi"
                                                                                    placeholder="Masukkan progres">
                                                                                <?= form_error('progresmigrasi', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label class="col-sm-3 col-form-label">Perencanaan
                                                                            Tanggal Mulai</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="date"
                                                                                    id="planstdatemigrasi"
                                                                                    name="planstdatemigrasi"
                                                                                    class="form-control form-control-user"
                                                                                    value="<?php echo $project1['planstdatemigrasi']; ?>"
                                                                                    id="planstdatemigrasi">
                                                                                <?= form_error('planstdatemigrasi', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label class="col-sm-3 col-form-label">Perencanaan
                                                                            Tanggal Selesai</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="date"
                                                                                    id="planendatemigrasi"
                                                                                    name="planendatemigrasi"
                                                                                    class="form-control form-control-user"
                                                                                    value="<?php echo $project1['planendatemigrasi']; ?>"
                                                                                    id="planendatemigrasi">
                                                                                <?= form_error('planendatemigrasi', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-sm-3 col-form-label">Aktual
                                                                                Tanggal Mulai
                                                                            </label>
                                                                            <div class="col-sm-9">
                                                                                <input type="date"
                                                                                    id="actualstdatemigrasi"
                                                                                    name="actualstdatemigrasi"
                                                                                    class="form-control form-control-user"
                                                                                    value="<?php echo $project1['actualstdatemigrasi']; ?>"
                                                                                    id="actualstdatemigrasi">
                                                                                <?= form_error('actualstdatemigrasi', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-sm-3 col-form-label">Aktual
                                                                                Tanggal Selesai
                                                                            </label>
                                                                            <div class="col-sm-9">
                                                                                <input type="date"
                                                                                    id="actualendatemigrasi"
                                                                                    name="actualendatemigrasi"
                                                                                    class="form-control form-control-user"
                                                                                    value="<?php echo $project1['actualendatemigrasi']; ?>"
                                                                                    id="actualendatemigrasi">
                                                                                <?= form_error('actualendatemigrasi', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                            </div>
                                                                        </div>


                                                                        <!-- <div class="form-group row">
																<label class="col-sm-3 col-form-label">PIC</label>
																<div class="col-sm-9">
																	<select name="pic" class="form-control" id="pic">
																		<?php foreach ($user as $us) { ?>
																		<option value="<?php echo $us['nama']?>">
																			<?php echo $us['nama']?></option>
																		<?php } ?>
																	</select>
																	<?= form_error('pic', '<small class="text-danger pl-3">', '</small>'); ?>
																</div>
															</div> -->
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-sm-3 col-form-label">Unggah
                                                                                Dokumen</label>
                                                                            <div class="col-sm-9">
                                                                                <?php echo $project1['filemigrasi']; ?>
                                                                                <input type="file" name="filemigrasi"
                                                                                    class="form-control form-control-user"
                                                                                    value="<?php echo $project1['filemigrasi']; ?>"
                                                                                    id="file"
                                                                                    placeholder="Masukkan file">
                                                                                <?= form_error('filemigrasi', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                            </div>
                                                                        </div>


                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-dismiss="modal">Tutup`</button>
                                                                            <button type="submit"
                                                                                onclick="validateForm()"
                                                                                class="btn btn-success">Perbarui</button>
                                                                        </div>
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
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<script>
$(document).ready(function() {
    // Untuk sunting
    $('#edit-data').on('show.bs.modal', function(event) {
        var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
        var modal = $(this)

        // Isi nilai pada field
        modal.find('#id_project').attr("value", div.data('id_project'));
        modal.find('#bobotmigrasi').attr("value", div.data('bobotmigrasi'));
        modal.find('#progresmigrasi').html(div.data('progresmigrasi'));
        modal.find('#planstdatemigrasi').html(div.data('planstdatemigrasi'));
        modal.find('#planendatemigrasi').html(div.data('planendatemigrasi'));
        modal.find('#actualstdatemigrasi').html(div.data('actualstdatemigrasi'));
        modal.find('#actualendatemigrasi').html(div.data('actualendatemigrasi'));
    });
});

function validateForm() {
    let x = document.forms["frm"]["progresmigrasi"].value;
    if (x > 5) {
        alert("Progress is not more than 5%");
        return false;
    }
    let y = document.forms["frm"]["filemigrasi"].value;
    if (y == "") {
        alert("Please insert Migrasi file!");
        return false;
    }
}
</script>