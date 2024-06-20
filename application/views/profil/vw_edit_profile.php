<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="float">
                <a href="<?= base_url('Profile/') ?>" class="btn btn-secondary mb-2">Kembali</a>
            </div>

            <div class="card shadow" style="background-color: rgba(245, 245, 245, 0.9);">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Profil Saya</h6>
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <img id="profileImage" class="img-profile rounded-circle" style="width: 280px;"
                                    src="<?= base_url('assets/images/profile/') . $user1['gambar']; ?>">
                                <div class="custom-file mt-3">
                                    <input type="file" name="gambar" id="gambar"
                                        accept="image/png, image/jpeg, image/jpg, image/gif" onchange="validateImage()">
                                    <br><small id="dimensionsError" class="text-danger"></small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3><strong><?= $user1['nama']; ?></strong></h3>
                                <br>
                                <h6><strong>Nomor Induk Kepegawaian</strong></h6>
                                <p><?= $user1['NIK'] ?></p>
                                <h6><strong>E-mail</strong></h6>
                                <p><?= $user1['email'] ?></p>
                                <h6><strong>Subdivisi</strong></h6>
                                <p><?= $user1['role'] ?></p>

                                <div class="form-group row">
                                    <input type="hidden" name="id_user" value="<?= $user1['id_user']; ?>">
                                    <input type="hidden" name="nama" value="<?= $user1['nama']; ?>">
                                    <input type="hidden" name="NIK" value="<?= $user1['NIK']; ?>">
                                    <input type="hidden" name="role" value="<?= $user1['role']; ?>">
                                    <input type="hidden" name="password1" value="<?= $user1['password']; ?>">
                                    <input type="hidden" name="password2" value="<?= $user1['password']; ?>">
                                    <div class="col-md-12">
                                        <button type="submit" name="tambah" class="btn btn-primary float">Perbarui</button>
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

<script>
    function validateImage() {
        const file = document.getElementById('gambar').files[0];
        const img = new Image();
        const reader = new FileReader();

        reader.onload = function(e) {
            img.src = e.target.result;
            img.onload = function() {
                const width = this.width;
                const height = this.height;
                if (width !== height) {
                    document.getElementById('dimensionsError').innerText = 'Gambar harus memiliki dimensi 1:1 (persegi)';
                    document.getElementById('gambar').value = ''; // Clear the input file
                } else {
                    document.getElementById('dimensionsError').innerText = '';
                }
            };
        };

        reader.readAsDataURL(file);
    }
</script>
