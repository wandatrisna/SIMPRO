<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <a href="<?= base_url() ?>User/indexuserdevelopment" class="btn btn-secondary">Kembali</a>
            <br><br>
            <div class="card">
                <div class="card-header justify-content-center">
                    Ubah Data Pengguna
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_user" value="<?= $user['id_user']; ?>">

                        <div class="form-group">
                            <div class="form-group">
                                <label class="col-sm-2 col-form-label">Gambar</label>
                                <img src="<?= base_url('assets/images/profile/') . $user['gambar']; ?>"
                                    style="width : 250px;" class="img-thumbnail">
                                <label for="gambar"> </label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-10">
                                <input type="text" name="NIK" value="<?= $user['NIK']; ?>" class="form-control"
                                    id="NIK">
                                <?= form_error('NIK','<small class="text-danger pl-3">','</small>'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" value="<?= $user['nama']; ?>" class="form-control"
                                    id="nama">
                                <?= form_error('nama','<small class="text-danger pl-3">','</small>'); ?>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Sub Divisi</label>
                            <div class="col-sm-10">
                                <select name="role" class="form-control form-control-user" id="role">
                                    <?php foreach ($role as $p) : ?>
                                    <?php if($p['role'] == 'Development'){ ?>
                                    <option value="<?= $p['role']; ?>" selected> <?=$p['role']; ?>
                                        <?php }else{ ?>
                                    <option value="<?= $p['role']; ?>"> <?=$p['role']; ?>
                                        <?php } ?>
                                        <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-10">
                                <input type="text" name="email" value="<?= $user['email']; ?>" class="form-control"
                                    id="email" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Kata Sandi</label>
                            <div class="col-sm-10">
                                <input type="password" value="<?= $user['password']; ?>"
                                    class="form-control form-control-user" readonly>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>