<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Baru</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <a href="<?= base_url() ?>User/" class="btn btn-secondary">Kembali</a>
            <br><br>
            <!-- Card dengan shadow -->
            <div class="card shadow">
                <div class="card-header justify-content-center">
                    Tambah Data Baru
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label class="col-sm-2 col-form-label">Gambar Profil</label>
                            <img src="<?= base_url('assets/images/profile/default.png') ?>" style="width : 250px;" class="img-thumbnail">
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-10">
                                <input type="NIK" name="NIK" class="form-control form-control-user" value="<?= set_value('NIK'); ?>" id="NIK" placeholder="Masukkan NIK">
                                <?= form_error('NIK', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <h7><font color="red">Kata sandi akan dikirimkan melalui e-mail, mohon pastikan e-mail valid!</font><br></h7>
                                <input type="text" name="email" class="form-control" id="email" placeholder="Masukkan E-mail">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Subdivisi</label>
                            <div class="col-sm-10">
                                <select name="role" class="form-control" id="role">
                                    <option value="">Pilih Satu...</option>
                                    <option value="Pinbag">Pimpinan Bagian</option>
                                    <option value="Planning">IT Planning</option>
                                    <option value="Development">IT Development</option>
                                    <option value="Support">IT Support</option>
                                </select>
                                <?= form_error('role', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <button type="submit" name="tambah" class="btn btn-success float-right">Simpan Data Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Konfirmasi -->
<div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Email</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah email <span id="emailConfirm"></span> sudah sesuai? Kata sandi akan dikirim ke email ini.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary" id="confirmButton">Konfirmasi</button>
      </div>
    </div>
  </div>
</div>

<!-- jQuery dan Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const emailInput = document.getElementById('email');
    const confirmationModal = document.getElementById('confirmationModal');
    const emailConfirm = document.getElementById('emailConfirm');
    const confirmButton = document.getElementById('confirmButton');

    form.addEventListener('submit', function(event) {
      event.preventDefault(); // Mencegah form dikirim langsung

      // Set email dalam modal konfirmasi
      emailConfirm.textContent = emailInput.value;

      // Tampilkan modal
      $('#confirmationModal').modal('show');
    });

    confirmButton.addEventListener('click', function() {
      // Sembunyikan modal
      $('#confirmationModal').modal('hide');

      // Kirim form setelah konfirmasi
      form.submit();
    });
  });
</script>

</body>
</html>
