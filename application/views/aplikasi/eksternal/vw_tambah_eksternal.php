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
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .card-header {
            background-color: #f8f9fc;
            border-bottom: 1px solid #e3e6f0;
        }

        .card-body {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-control {
            border-radius: 5px;
        }

        .btn-success {
            background-color: #1cc88a;
            border: none;
        }

        .btn-secondary {
            background-color: #858796;
            border: none;
        }

        .btn {
            border-radius: 5px;
        }
    </style>
    <script>
        $(document).ready(function () {
            $('#role').change(function () {
                var role = $(this).val();
                var selectedRole = $(this).val();
                if (selectedRole === "Development" || selectedRole === "Support") {
                    $.ajax({
                        url: '<?php echo base_url("Eksternal/get_user"); ?>',
                        type: 'post',
                        data: {
                            role: selectedRole
                        },
                        dataType: 'json',
                        success: function (response) {
                            var len = response.length;
                            $("#pic_migrasi_eks").empty();
                            for (var i = 0; i < len; i++) {
                                var id = response[i]['id_user'];
                                var nama = response[i]['nama'];
                                $("#pic_migrasi_eks").append("<option value='" + id + "'>" + nama + "</option>");
                            }
                        }
                    });
                }
            });
            $(document).on('change', '.row .rile', function () {
                var id = $(this).val();
                var parentRow = $(this).closest('.row');
                var stasiunDropdown = parentRow.find('.stasiun');

                var data = {
                    [`${csrf}`]: csrf_hash,
                    id: $(this).val()
                };
                console.log($(this).val());
                ajaxRequst({
                    link: URI.stasiun,
                    data: data,
                    callback: function r(object_origin, resp) {
                        if (resp.status) {
                            var data = resp.data;

                            var temp_html = '<option value="">Pilih Stasiun</option>';
                            for (var i = 0; i < data.length; i++) {
                                temp_html += `<option value="${data[i].id_stasiun}">${data[i].nama_stasiun}</option>`;
                            }
                            stasiunDropdown.html(temp_html);
                        }
                    }
                });
            });
        });
    </script>
</head>

<body>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <a href="<?= base_url() ?>Eksternal/" class="btn btn-secondary">Kembali</a>
                <div class="card">
                    <div class="card-header justify-content-center text-primary">
                        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Eksternal</h6>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Aplikasi</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama_eks" class="form-control" id="nama_eks" placeholder="Masukkan Nama Aplikasi">
                                    <?= form_error('nama_eks', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jenis Eksternal</label>
                                <div class="col-sm-10">
                                    <select name="jenis_eks" class="form-control" id="jenis_eks">
                                        <option value="">Pilih Jenis Eksternal...</option>
                                        <?php foreach ($jenis_eks as $p) : ?>
                                            <option value="<?= $p['id_jeniseks']; ?>"><?= $p['jenis_eks']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jenis Dokumen</label>
                                <div class="col-sm-10">
                                    <select name="dokumen_eks" class="form-control" id="dokumen_eks">
                                        <option value="">Pilih Jenis Dokumen...</option>
                                        <?php foreach ($jenisdok as $p) : ?>
                                            <option value="<?= $p['id_jenisdokumen']; ?>"><?= $p['jenisdokumen']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Versi</label>
                                <div class="col-sm-10">
                                    <input type="text" name="versi_eks" class="form-control" id="versi_eks" placeholder="Masukkan Versi">
                                    <?= form_error('versi_eks', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal Penyerahan PMF</label>
                                <div class="col-sm-10">
                                    <input type="date" name="tgl_penyerahan_pmf" class="form-control" id="tgl_penyerahan_pmf">
                                    <?= form_error('tgl_penyerahan_pmf', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal Migrasi</label>
                                <div class="col-sm-10">
                                    <input type="date" name="tgl_migrasi" class="form-control" id="tgl_migrasi" readonly>
                                    <?= form_error('tgl_migrasi', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea name="keterangan" class="form-control" id="keterangan" placeholder="Masukkan Deskripsi"></textarea>
                                    <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">PIC (Planning)</label>
                                <div class="col-sm-10">
                                    <input type="text" name="pic_plan_eks" class="form-control" id="pic_plan_eks" placeholder="Masukkan PIC (Planning)">
                                    <?= form_error('pic_plan_eks', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <!-- Tujuan Migrasi -->
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

                            <!-- PIC Migrasi -->
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">PIC Migrasi</label>
                                <div class="col-sm-10">
                                    <select name="pic_migrasi_eks" class="form-control" id="pic_migrasi_eks">
                                        <!-- Options will be loaded dynamically based on selected Tujuan Migrasi -->
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">PMF Oleh</label>
                                <div class="col-sm-10">
                                    <input type="text" name="pmf_by_eks" class="form-control" id="pmf_by_eks" placeholder="Masukkan Nama...">
                                    <?= form_error('pmf_by_eks', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Status Migrasi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Menunggu IT Support..." readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Catatan Migrasi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Menunggu IT Support..." readonly>
                                </div>
                            </div>

                            <input type="hidden" name="hapus_eks" class="form-control" id="hapus_in" value="1">

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
