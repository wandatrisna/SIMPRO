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
                                        <?php $previous_url = $this->session->userdata('previous_url'); ?>
                                        <?php if ($previous_url): ?>
                                        <a href="<?= $previous_url ?>" class="btn btn-secondary">Kembali</a>
                                        <?php else: ?>
                                        <a href="javascript:history.back()" class="btn btn-secondary">Kembali</a>
                                        <?php endif; ?>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card shadow mb-4">
                                                <div class="card-header py-3">
                                                    <h4 class="title"><strong>System Integration Testing</strong></h4><br>
                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-spinner-alt-5"></i>
                                                        <div class="float-right">
                                                            <?php
                                                if ($user1['role'] == 'Development') {
                                                ?>
                                                            <a href="<?= base_url() ?>Project/editsit"
                                                                class="btn btn-success btn-icon-split btn-sm">

                                                                <a href="javascript:;"
                                                                    data-id="<?php echo $project1['id_project'] ?>"
                                                                    data-bobot="<?php echo $project1['bobotsit'] ?>"
                                                                    data-progres="<?php echo $project1['progressit'] ?>"
                                                                    data-planstdate="<?php echo $project1['planstdatesit'] ?>"
                                                                    data-planendate="<?php echo $project1['planendatesit'] ?>"
                                                                    data-actualstdate="<?php echo $project1['actualstdatesit'] ?>"
                                                                    data-actualendate="<?php echo $project1['actualendatesit'] ?>"
                                                                    data-toggle="modal" data-target="#editModal">
                                                                    <button data-toggle="modal" data-target="#ubah-data"
                                                                        class="btn btn-success">Perbarui</button>
                                                                </a>
                                                                <?php
												}?>
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
                                                                                <strong>Bobot Maksimal SIT</strong>
                                                                            </p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <p class="d-inline-block m-r-20">
                                                                            <?= $project1['bobotsit'] ?></p>
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
                                                                            <?= $project1['progressit'] ?></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="task-contain">
                                                                            <p class="d-inline-block m-l-20">
                                                                                <strong>Perencanaan Tanggal
                                                                                Mulai</strong>
                                                                            </p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <p class="d-inline-block m-r-20">
                                                                            <?= $project1['planstdatesit'] ?></p>

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
                                                                            <?= $project1['planendatesit'] ?>
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
                                                                            <?= $project1['actualstdatesit'] ?>
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
                                                                            <?= $project1['actualendatesit'] ?>
                                                                        </p>

                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <div class="task-contain">
                                                                            <p class="d-inline-block m-l-20">
                                                                                <strong>Dokumen (Oleh IT
                                                                                Development)</strong>
                                                                            </p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a class="d-inline-block m-r-20"
                                                                            href="<?php echo base_url('assets/dokumensit/' . $project1['filesit']); ?>"><?= $project1['filesit'] ?></a>
                                                                        <!-- <img src="<?php echo base_url('assets/dokumensit/' . $project1['filesit']); ?>"> -->
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
                                                </div>

                                                <form
                                                    action="<?php echo base_url('Project/editsit/'). $project1['id_project'];?>"
                                                    method="POST" enctype="multipart/form-data" name="frm"
                                                    onsubmit="return validateForm()">
                                                    <div id="editModal" class="modal fade" tabindex="-1" role="dialog"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Perbarui Data SIT
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
                                                                            <input type="number" name="bobotsit"
                                                                                class="form-control" id="bobotsit"
                                                                                value="10" readonly>
                                                                            <?= form_error('bobotsit', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label
                                                                            class="col-sm-3 col-form-label">Progres
                                                                            Pengerjaan</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="number" name="progressit"
                                                                                class="form-control form-control-user"
                                                                                value="<?php echo $project1['progressit']; ?>"
                                                                                id="progressit"
                                                                                placeholder="Masukkan progres">
                                                                            <?= form_error('progressit', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Perencanaan
                                                                        Tanggal Mulai</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="date" id="planstdatesit"
                                                                                name="planstdatesit"
                                                                                class="form-control form-control-user"
                                                                                value="<?php echo $project1['planstdatesit']; ?>"
                                                                                id="planstdatesit">
                                                                            <?= form_error('planstdatesit', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Perencanaan
                                                                        Tanggal Selesai</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="date" id="planendatesit"
                                                                                name="planendatesit"
                                                                                class="form-control form-control-user"
                                                                                value="<?php echo $project1['planendatesit']; ?>"
                                                                                id="planendatesit">
                                                                            <?= form_error('planendatesit', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Aktual
                                                                        Tanggal Mulai
                                                                        </label>
                                                                        <div class="col-sm-9">
                                                                            <input type="date" id="actualstdatesit"
                                                                                name="actualstdatesit"
                                                                                class="form-control form-control-user"
                                                                                value="<?php echo $project1['actualstdatesit']; ?>"
                                                                                id="actualstdatesit">
                                                                            <?= form_error('actualstdatesit', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Aktual
                                                                        Tanggal Selesai
                                                                        </label>
                                                                        <div class="col-sm-9">
                                                                            <input type="date" id="actualendatesit"
                                                                                name="actualendatesit"
                                                                                class="form-control form-control-user"
                                                                                value="<?php echo $project1['actualendatesit']; ?>"
                                                                                id="actualendatesit">
                                                                            <?= form_error('actualendatesit', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Unggah
                                                                        Dokumen</label>
                                                                        <div class="col-sm-9">
                                                                            <?php echo $project1['filesit']; ?>
                                                                            <input type="file" name="filesit"
                                                                                class="form-control form-control-user"
                                                                                value="<?php echo $project1['filesit']; ?>"
                                                                                id="file" placeholder="Masukkan file">
                                                                            <?= form_error('filesit', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                        </div>
                                                                    </div>


                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Tutup</button>
                                                                        <button type="submit" onclick="validateForm()"
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


<script>
$(document).ready(function() {
    // Untuk sunting
    $('#edit-data').on('show.bs.modal', function(event) {
        var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
        var modal = $(this)

        // Isi nilai pada field
        modal.find('#id_project').attr("value", div.data('id_project'));
        modal.find('#bobotsit').attr("value", div.data('bobotsit'));
        modal.find('#progressit').html(div.data('progressit'));
        modal.find('#planstdatesit').html(div.data('planstdatesit'));
        modal.find('#planendatesit').html(div.data('planendatesit'));
        modal.find('#actualstdatesit').html(div.data('actualstdatesit'));
        modal.find('#actualendatesit').html(div.data('actualendatesit'));
        modal.find('#filesit').html(div.data('filesit'));
    });
});

function validateForm() {
    let x = document.forms["frm"]["progressit"].value;
    if (x > 10) {
        alert("Progress is not more than 10%");
        return false;
    }

    let y = document.forms["frm"]["filesit"].value;
    if (y == "") {
        alert("Please insert SIT file!");
        return false;
    }
}
</script>