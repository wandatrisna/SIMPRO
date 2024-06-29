<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Application Form</title>
    <!-- Load jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
    .card {
        margin-top: 20px;
        margin-bottom: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
    }

    .card-header {
        background-color: #f8f9fc;
        padding: 10px 20px;
        border-bottom: 1px solid #e3e6f0;
        border-radius: 5px 5px 0 0;
    }

    .card-body {
        padding: 20px;
    }

    .btn {
        margin-top: 10px;
    }
    </style>
    <script>
    $(document).ready(function() {
        $('#role').change(function() {
            var role = $(this).val();
            var selectedRole = $(this).val();
            if (selectedRole === "Development" || selectedRole === "Support") {
                $.ajax({
                    url: '<?php echo base_url("Inhouse/get_user"); ?>',
                    type: 'post',
                    data: {
                        role: selectedRole
                    },
                    dataType: 'json',
                    success: function(response) {
                        var len = response.length;
                        $("#pic_migrasi_in").empty();
                        for (var i = 0; i < len; i++) {
                            var id = response[i]['id_user'];
                            var nama = response[i]['nama'];
                            $("#pic_migrasi_in").append("<option value='" + id + "'>" +
                                nama + "</option>");
                        }
                    }
                });
            }
        });
        $(document).on('change', '.row .rile', function() {
            var id = $(this).val();
            var parentRow = $(this).closest('.row');
            var stasiunDropdown = parentRow.find('.stasiun');

            data = {
                [`${csrf}`]: csrf_hash,
                id: $(this).val()
            }
            console.log($(this).val());
            ajaxRequst({
                link: URI.stasiun,
                data: data,
                callback: function r(object_origin, resp) {
                    if (resp.status) {
                        data = resp.data

                        var temp_html = '<option value="">Pilih Stasiun</option>';
                        for (i = 0; i < data.length; i++) {
                            temp_html +=
                                `<option value="${data[i].id_stasiun}">${data[i].nama_stasiun}</option>`;
                        }
                        stasiunDropdown.html(temp_html);
                    }
                }
            })
        })
    });
    </script>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <a href="<?= base_url() ?>Inhouse" class="btn btn-secondary">Kembali</a>

                <div class="card">
                    <div class="card-header justify-content-center text-primary">
                        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Inhouse</h6>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nomor Dokumen</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nomor_in" class="form-control"
                                        value="<?php echo $nomor; ?>" id="nomor_in" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jenis Dokumen</label>
                                <div class="col-sm-10">
                                    <select name="jenis_dokumen" class="form-control" id="jenis_dokumen">
                                        <option value="">Pilih Jenis Dokumen</option>
                                        <?php foreach ($jenisdok as $p): ?>
                                        <option value="<?= $p['id_jenisdokumen']; ?>"><?= $p['jenisdokumen']; ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Aplikasi</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama_in" class="form-control" id="nama_in"
                                        placeholder="Masukkan Nama Aplikasi">
                                    <?= form_error('nama_in', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Versi</label>
                                <div class="col-sm-10">
                                    <input type="text" name="versi_in" class="form-control" id="versi_in"
                                        placeholder="Masukkan Versi">
                                    <?= form_error('versi_in', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal Penyerahan PMF</label>
                                <div class="col-sm-10">
                                    <input type="date" name="tgl_penyerahan_pmf" class="form-control"
                                        id="tgl_penyerahan_pmf">
                                    <?= form_error('tgl_penyerahan_pmf', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal Migrasi</label>
                                <div class="col-sm-10">
                                    <input type="date" name="tgl_migrasi_prod" class="form-control"
                                        id="tgl_migrasi_prod" readonly>
                                    <?= form_error('tgl_migrasi_prod', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <textarea name="keterangan_in" class="form-control" id="keterangan_in"
                                        placeholder="Insert Description..."></textarea>
                                    <?= form_error('keterangan_in', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">PIC (Planning)</label>
                                <div class="col-sm-10">
                                    <input type="text" name="pic_plan_in" class="form-control" id="pic_plan_in"
                                        placeholder="Masukkan Nama PIC">
                                    <?= form_error('pic_plan_in', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">PIC (Development)</label>
                                <div class="col-sm-10">
                                    <input type="text" name="pic_dev_in" class="form-control" id="pic_dev_in"
                                        placeholder="Insert Nama PIC">
                                    <?= form_error('pic_dev_in', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tujuan Migrasi</label>
                                <div class="col-sm-10">
                                    <select name="role" class="form-control" id="role">
                                        <option value="">Pilih Tujuan Migrasi..</option>
                                        <option value="Development">IT Development</option>
                                        <option value="Support">IT Support</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">PIC Migrasi</label>
                                <div class="col-sm-10">
                                    <select name="pic_migrasi_in" class="form-control" id="pic_migrasi_in">
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Owner</label>
                                <div class="col-sm-10">
                                    <select name="owner_in" class="form-control" id="owner_in">
                                        <option value="">Pilih Owner Proyek</option>
                                        <?php foreach ($namadivisi as $p): ?>
                                        <option value="<?= $p['id_divisi']; ?>"><?= $p['namadivisi']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('owner_in', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Status Migrasi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Diisi oleh PIC Migrasi"
                                        readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Migration Note</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Diisi oleh PIC Migrasi"
                                        readonly>
                                </div>
                            </div>

                            <input type="hidden" name="hapus_in" class="form-control" id="hapus_in" value="1">

                            <div class="col-md-12">
                                <button type="submit" name="tambah" class="btn btn-success float-right">Simpan Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>