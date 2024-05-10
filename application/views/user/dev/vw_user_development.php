<div class="col-md-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Pengguna Sub Divisi IT Development</h6>
        </div>
        <div class="card-body">
        <?= $this->session->flashdata('message') ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="table-warning">
                            <th width="5px">No</th>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>Sub Divisi</th>
                            <th>NIK</th>
                            <?php if ($user1['role'] == 'Superuser') {   ?>
                            <th>Aksi</th>
                            <?php } ?>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i =1; ?>
                        <?php foreach ($development as $us) : ?>
                        <tr>
                            <td><?= $i; ?>.</td>
                            <td><img src="<?= base_url('assets/images/profile/') . $us['gambar']; ?>"
                                    style="width : 50px;" class="img-thumbnail">
                            </td>
                            <td><?= $us['nama']; ?></td>
                            <td><?= $us['role']; ?></td>
                            <td><?= $us['NIK']; ?></td>
                            <?php if ($user1['role'] == 'Superuser') {   ?>
                            <td>
                                <a href="<?= base_url('User/hapusdev/'). $us['id_user']; ?> " class="badge badge-danger"
                                    onclick="return confirm('Apakah kamu yakin untuk menghapus data ini?');"
                                    class="ik ik-trash-2 text-red">Hapus</a>
                                <a href="<?= base_url('User/editdev/'). $us['id_user']; ?>"
                                    class="badge badge-warning">Edit</a>
                            </td>
                            <?php } ?>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>