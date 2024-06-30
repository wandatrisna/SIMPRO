<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
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
                                    
                                    <!-- <div class="float">
                                        <?php 
                                        $previous_url = $this->session->userdata('previous_url'); 
                                        log_message('debug', 'Previous URL in view: ' . $previous_url);
                                        ?>
                                        <?php if ($previous_url): ?>
                                        <a href="<?= $previous_url ?>" class="btn btn-secondary">Kembali</a>
                                        <?php else: ?>
                                        <a href="javascript:history.back()" class="btn btn-secondary">Kembali</a>
                                        <?php endif; ?>
                                    </div> -->
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card shadow mb-4">
                                                <div class="card-header py-3">
                                                    <h4 class="title"><strong>Functional Specification Document</strong>
                                                    </h4><br>
                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-spinner-alt-5"></i>
                                                        <div class="float-right">
                                                            <?php if ($user1['role'] == 'Development') { ?>
                                                            <a href="javascript:;"
                                                                data-id="<?php echo $project1['id_project']; ?>"
                                                                data-bobot="<?php echo $project1['bobotfsd']; ?>"
                                                                data-progres="<?php echo $project1['progresfsd']; ?>"
                                                                data-planstdate="<?php echo $project1['planstdatefsd']; ?>"
                                                                data-planendate="<?php echo $project1['planendatefsd']; ?>"
                                                                data-actualstdate="<?php echo $project1['actualstdatefsd']; ?>"
                                                                data-actualendate="<?php echo $project1['actualendatefsd']; ?>"
                                                                data-toggle="modal" data-target="#editModal">
                                                                <button class="btn btn-success">Perbarui</button>
                                                            </a>
                                                            <?php } ?>
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
                                                                                <strong>Bobot Maksimal</strong>
                                                                            </p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <p class="d-inline-block m-r-20">
                                                                            <?= $project1['bobotfsd']; ?></p>
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
                                                                            <?= $project1['progresfsd']; ?></p>
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
                                                                            <?= $project1['planstdatefsd']; ?></p>
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
                                                                            <?= $project1['planendatefsd']; ?></p>
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
                                                                            <?= $project1['actualstdatefsd']; ?></p>
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
                                                                            <?= $project1['actualendatefsd']; ?></p>
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
                                                                            href="<?php echo base_url('assets/dokumenfsd/' . $project1['filefsd']); ?>"><?= $project1['filefsd']; ?></a>
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
                                                    action="<?php echo base_url('Project/editfsd/') . $project1['id_project']; ?>"
                                                    method="POST" enctype="multipart/form-data" name="frm"
                                                    onsubmit="return validateForm()">
                                                    <div id="editModal" class="modal fade" tabindex="-1" role="dialog"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                                        Perbarui Data FSD</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <input type="hidden" name="id_project"
                                                                        value="<?= $project1['id_project']; ?>">
                                                                    <input type="hidden" name="updated_by"
                                                                        value="<?= $user1['NIK']; ?>">
                                                                    <div class="form-group row">
                                                                        <label
                                                                            class="col-sm-3 col-form-label">Bobot</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="number" name="bobotfsd"
                                                                                class="form-control" id="bobotfsd"
                                                                                value="5" readonly>
                                                                            <?= form_error('bobotfsd', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Progres
                                                                            Pengerjaan</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="number" name="progresfsd"
                                                                                class="form-control"
                                                                                value="<?php echo $project1['progresfsd']; ?>"
                                                                                id="progresfsd" max="5"
                                                                                placeholder="Masukkan progres">
                                                                            <?= form_error('progresfsd', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label
                                                                            class="col-sm-3 col-form-label">Perencanaan
                                                                            Tanggal Mulai</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="date" id="planstdatefsd"
                                                                                name="planstdatefsd"
                                                                                class="form-control form-control-user"
                                                                                value="<?php echo $project1['planstdatefsd']; ?>">
                                                                            <?= form_error('planstdatefsd', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label
                                                                            class="col-sm-3 col-form-label">Perencanaan
                                                                            Tanggal Selesai</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="date" id="planendatefsd"
                                                                                name="planendatefsd"
                                                                                class="form-control form-control-user"
                                                                                value="<?php echo $project1['planendatefsd']; ?>">
                                                                            <?= form_error('planendatefsd', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Aktual
                                                                            Tanggal Mulai</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="date" id="actualstdatefsd"
                                                                                name="actualstdatefsd"
                                                                                class="form-control form-control-user"
                                                                                value="<?php echo $project1['actualstdatefsd']; ?>">
                                                                            <?= form_error('actualstdatefsd', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Aktual
                                                                            Tanggal Selesai</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="date" id="actualendatefsd"
                                                                                name="actualendatefsd"
                                                                                class="form-control form-control-user"
                                                                                value="<?php echo $project1['actualendatefsd']; ?>">
                                                                            <?= form_error('actualendatefsd', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Unggah
                                                                            Dokumen</label>
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
                                                                            data-dismiss="modal">Tutup</button>
                                                                        <button type="submit" onclick="validateForm()"
                                                                            class="btn btn-success">Perbarui</button>
                                                                    </div>
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
                </section>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $('#edit-data').on('show.bs.modal', function(event) {
        var div = $(event.relatedTarget)
        var modal = $(this)

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

$('#progresbrd').on('input', function() {
    var value = parseInt(this.value);
    if (value > 10) {
        this.value = 10;
        alert('Nilai tidak boleh lebih dari 10');
    }
});
</script>