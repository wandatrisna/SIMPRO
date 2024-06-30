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
                                        <?php
                                            $previous_url = $this->session->userdata('previous_url');
                                            ?>
                                        <a href="<?= $previous_url ?>" class="btn btn-secondary">Kembali</a>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card shadow mb-4">
                                                <div class="card-header py-3">
                                                    <h4 class="title"><strong>Business Requirement Document
                                                            (BRD)</strong></h4><br>
                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-spinner-alt-5"></i>
                                                        <div class="float-right">
                                                            <?php if ($user1['role'] == 'Planning') { ?>
                                                            <a href="<?= base_url() ?>Project/editbrd"
                                                                class="btn btn-success btn-icon-split btn-sm">
                                                                <a href="javascript:;"
                                                                    data-id="<?= $project1['id_project'] ?>"
                                                                    data-bobot="<?= $project1['bobotbrd'] ?>"
                                                                    data-progres="<?= $project1['progresbrd'] ?>"
                                                                    data-planstdate="<?= $project1['planstdatebrd'] ?>"
                                                                    data-planendate="<?= $project1['planendatebrd'] ?>"
                                                                    data-actualstdate="<?= $project1['actualstdatebrd'] ?>"
                                                                    data-actualendate="<?= $project1['actualendatebrd'] ?>"
                                                                    data-toggle="modal" data-target="#editModal">
                                                                    <button data-toggle="modal" data-target="#ubah-data"
                                                                        class="btn btn-success">Perbarui</button>
                                                                </a>
                                                                <?php } ?>
                                                        </div>
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
                                                                            <?= $project1['bobotbrd'] ?></p>
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
                                                                            <?= $project1['progresbrd'] ?></p>
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
                                                                            <?= $project1['planstdatebrd'] ?></p>
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
                                                                            <?= $project1['planendatebrd'] ?>
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
                                                                            <?= $project1['actualstdatebrd'] ?>
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
                                                                            <?= $project1['actualendatebrd'] ?>
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
                                                                            href="<?= base_url('assets/dokumenbrd/' . $project1['filebrd']); ?>"><?= $project1['filebrd'] ?></a>
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
                                                    action="<?= base_url('Project/editbrd/') . $project1['id_project']; ?>"
                                                    method="POST" enctype="multipart/form-data" name="frm">
                                                    <div id="editModal" class="modal fade" tabindex="-1" role="dialog"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                                        Perbarui Data BRD
                                                                    </h5>
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
                                                                            <input type="number" name="bobotbrd"
                                                                                class="form-control" id="bobotbrd"
                                                                                value="10" readonly>
                                                                            <?= form_error('bobotbrd', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Progres
                                                                            Pengerjaan</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="number" name="progresbrd"
                                                                                class="form-control form-control-user"
                                                                                value="<?= $project1['progresbrd']; ?>"
                                                                                id="progresbrd" max="10">
                                                                            <?= form_error('progresbrd', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label
                                                                            class="col-sm-3 col-form-label">Perencanaan
                                                                            Tanggal Mulai</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="date" id="planstdatebrd"
                                                                                name="planstdatebrd"
                                                                                class="form-control form-control-user"
                                                                                value="<?= $project1['planstdatebrd']; ?>">
                                                                            <?= form_error('planstdatebrd', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label
                                                                            class="col-sm-3 col-form-label">Perencanaan
                                                                            Tanggal Selesai</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="date" id="planendatebrd"
                                                                                name="planendatebrd"
                                                                                class="form-control form-control-user"
                                                                                value="<?= $project1['planendatebrd']; ?>">
                                                                            <?= form_error('planendatebrd', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Aktual
                                                                            Tanggal Mulai</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="date" id="actualstdatebrd"
                                                                                name="actualstdatebrd"
                                                                                class="form-control form-control-user"
                                                                                value="<?= $project1['actualstdatebrd']; ?>">
                                                                            <?= form_error('actualstdatebrd', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Aktual
                                                                            Tanggal Selesai</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="date" id="actualendatebrd"
                                                                                name="actualendatebrd"
                                                                                class="form-control form-control-user"
                                                                                value="<?= $project1['actualendatebrd']; ?>">
                                                                            <?= form_error('actualendatebrd', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Unggah
                                                                            Dokumen</label>
                                                                        <div class="col-sm-9">
                                                                            <?= $project1['filebrd']; ?>
                                                                            <input type="file" name="filebrd"
                                                                                class="form-control form-control-user"
                                                                                value="<?= $project1['filebrd']; ?>"
                                                                                id="file" placeholder="Masukkan file">
                                                                            <?= form_error('filebrd', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Tutup</button>
                                                                        <button type="submit" class="btn btn-success"
                                                                            id="btn-ok">Perbarui</button>
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
        modal.find('#id_project').val(div.data('id_project'));
        modal.find('#bobotbrd').val(div.data('bobotbrd'));
        modal.find('#progresbrd').val(div.data('progresbrd'));
        modal.find('#planstdatebrd').val(div.data('planstdatebrd'));
        modal.find('#planendatebrd').val(div.data('planendatebrd'));
        modal.find('#actualstdatebrd').val(div.data('actualstdatebrd'));
        modal.find('#actualendatebrd').val(div.data('actualendatebrd'));
    });

    $('#progresbrd').on('input', function() {
        var value = parseInt(this.value);
        if (value > 10) {
            this.value = 10;
            alert('Nilai tidak boleh lebih dari 10');
        }
    });
});
</script>