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
                                            class="btn btn-danger mb-2">Kembali</a>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card shadow mb-4">
                                                <div class="card-header py-3">
                                                    <h4 class="title"><strong>FSD</strong></h4><br>
                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-spinner-alt-5"></i>
                                                        <div class="float-right">
                                                            <?php
                                                if ($user1['role'] == 'Development') {
                                                ?>
                                                            <a href="<?= base_url() ?>Project/editfsd"
                                                                class="btn btn-warning btn-icon-split btn-sm">

                                                                <a href="javascript:;"
                                                                    data-id="<?php echo $project1['id_project'] ?>"
                                                                    data-bobot="<?php echo $project1['bobotfsd'] ?>"
                                                                    data-progres="<?php echo $project1['progresfsd'] ?>"
                                                                    data-planstdate="<?php echo $project1['planstdatefsd'] ?>"
                                                                    data-planendate="<?php echo $project1['planendatefsd'] ?>"
                                                                    data-actualstdate="<?php echo $project1['actualstdatefsd'] ?>"
                                                                    data-actualendate="<?php echo $project1['actualendatefsd'] ?>"
                                                                    data-toggle="modal" data-target="#editModal">
                                                                    <button data-toggle="modal" data-target="#ubah-data"
                                                                        class="btn btn-warning">Perbarui</button>
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
                                                                                <strong>Value</strong>
                                                                            </p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <p class="d-inline-block m-r-20">
                                                                            <?= $project1['bobotfsd'] ?></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="task-contain">
                                                                            <p class="d-inline-block m-l-20">
                                                                                <strong>Progress</strong>
                                                                            </p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <p class="d-inline-block m-r-20">
                                                                            <?= $project1['progresfsd'] ?></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="task-contain">
                                                                            <p class="d-inline-block m-l-20">
                                                                                <strong>Plan Start
                                                                                    Date</strong>
                                                                            </p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <p class="d-inline-block m-r-20">
                                                                            <?= $project1['planstdatefsd'] ?></p>

                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="task-contain">
                                                                            <p class="d-inline-block m-l-20">
                                                                                <strong>Plan End
                                                                                    date</strong>
                                                                            </p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <p class="d-inline-block m-r-20">
                                                                            <?= $project1['planendatefsd'] ?>
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="task-contain">
                                                                            <p class="d-inline-block m-l-20">
                                                                                <strong>Actual Start
                                                                                    Date</strong>
                                                                            </p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <p class="d-inline-block m-r-20">
                                                                            <?= $project1['actualstdatefsd'] ?>
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="task-contain">
                                                                            <p class="d-inline-block m-l-20">
                                                                                <strong>Actual End
                                                                                    Date</strong>
                                                                            </p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <p class="d-inline-block m-r-20">
                                                                            <?= $project1['actualendatefsd'] ?>
                                                                        </p>

                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <div class="task-contain">
                                                                            <p class="d-inline-block m-l-20">
                                                                                <strong>File</strong>
                                                                            </p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a class="d-inline-block m-r-20"
                                                                            href="<?php echo base_url('assets/dokumenfsd/' . $project1['filefsd']); ?>"><?= $project1['filefsd'] ?></a>
                                                                        <!-- <img src="<?php echo base_url('assets/dokumenfsd/' . $project1['filefsd']); ?>"> -->
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
                                                    action="<?php echo base_url('Project/editfsd/'). $project1['id_project'];?>"
                                                    method="POST" enctype="multipart/form-data" name="frm"
                                                    onsubmit="return validateForm()">
                                                    <div id="editModal" class="modal fade" tabindex="-1" role="dialog"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Perbarui
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>

                                                                <div class="modal-body">
                                                                    <input type="hidden" name="id_project"
                                                                        value="<?= $project1['id_project']; ?>">
                                                                    <div class="form-group row">
                                                                        <label
                                                                            class="col-sm-3 col-form-label">Value</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="number" name="bobotfsd"
                                                                                class="form-control" id="bobotfsd"
                                                                                value="5" readonly>
                                                                            <?= form_error('bobotfsd', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label
                                                                            class="col-sm-3 col-form-label">Progress</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="number" name="progresfsd"
                                                                                class="form-control form-control-user"
                                                                                value="<?php echo $project1['progresfsd']; ?>"
                                                                                id="progresfsd"
                                                                                placeholder="Masukkan progres">
                                                                            <?= form_error('progresfsd', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Plan
                                                                            Start Date</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="date" id="planstdatefsd"
                                                                                name="planstdatefsd"
                                                                                class="form-control form-control-user"
                                                                                value="<?php echo $project1['planstdatefsd']; ?>"
                                                                                id="planstdatefsd">
                                                                            <?= form_error('planstdatefsd', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Plan
                                                                            End Date</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="date" id="planendatefsd"
                                                                                name="planendatefsd"
                                                                                class="form-control form-control-user"
                                                                                value="<?php echo $project1['planendatefsd']; ?>"
                                                                                id="planendatefsd">
                                                                            <?= form_error('planendatefsd', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Actual
                                                                            Start Date
                                                                        </label>
                                                                        <div class="col-sm-9">
                                                                            <input type="date" id="actualstdatefsd"
                                                                                name="actualstdatefsd"
                                                                                class="form-control form-control-user"
                                                                                value="<?php echo $project1['actualstdatefsd']; ?>"
                                                                                id="actualstdatefsd">
                                                                            <?= form_error('actualstdatefsd', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Actual
                                                                            End Date
                                                                        </label>
                                                                        <div class="col-sm-9">
                                                                            <input type="date" id="actualendatefsd"
                                                                                name="actualendatefsd"
                                                                                class="form-control form-control-user"
                                                                                value="<?php echo $project1['actualendatefsd']; ?>"
                                                                                id="actualendatefsd">
                                                                            <?= form_error('actualendatefsd', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Upload
                                                                            File</label>
                                                                        <div class="col-sm-9">
                                                                            <?php echo $project1['filefsd']; ?>
                                                                            <input type="file" name="filefsd"
                                                                                class="form-control form-control-user"
                                                                                value="<?php echo $project1['filefsd']; ?>"
                                                                                id="file" placeholder="Masukkan file">
                                                                            <?= form_error('filefsd', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                        </div>
                                                                    </div>


                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                        <button type="submit" onclick="validateForm()"
                                                                            class="btn btn-primary">Perbarui</button>
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
        modal.find('#bobotfsd').attr("value", div.data('bobotfsd'));
        modal.find('#progresfsd').html(div.data('progresfsd'));
        modal.find('#planstdatefsd').html(div.data('planstdatefsd'));
        modal.find('#planendatefsd').html(div.data('planendatefsd'));
        modal.find('#actualstdatefsd').html(div.data('actualstdatefsd'));
        modal.find('#actualendatefsd').html(div.data('actualendatefsd'));
        modal.find('#filefsd').html(div.data('filefsd'));
    });
});

function validateForm() {
    let x = document.forms["frm"]["progresfsd"].value;
    if (x > 5) {
        alert("Progress is not more than 5%");
        return false;
    }
}
</script>