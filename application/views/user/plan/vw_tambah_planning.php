<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <a href="<?= base_url() ?>User/indexuserplanning" class="btn btn-info">&larr; Back</a>
            <br><br>
            <div class="card">
                <div class="card-header justify-content-center">
                Add Data Form </div>
                <div class="card-body">
                <form action="" method="POST">
                        <div class="form-group">
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="col-sm-2 col-form-label">Image</label>
                                    <img src="<?= base_url('assets/images/profile/default.png') ?>"
                                        style="width : 250px;" class="img-thumbnail">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-10">
                                <input type="NIK" name="NIK" class="form-control form-control-user"
                                    value="<?= set_value('NIK'); ?>" id="NIK" placeholder="Masukkan NIK">
                                <?= form_error('NIK', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Full Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control" id="nama"
                                    placeholder="Your Full Name">
                                <?= form_error('nama','<small class="text-danger pl-3">','</small>'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Gender</label>
                            <div class="col-sm-10">
                                <select name="jk" class="form-control" id="jk">
                                    <option value="">Select Gender...</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                <?= form_error('jk','<small class="text-danger pl-3">','</small>'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Role</label>
                            <div class="col-sm-10">
                                <input type="text" name="role" class="form-control" id="role" value="Planning"
                                    readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-5">
                                <input type="password" name="password1" value="<?= set_value('password1'); ?>"
                                    class="form-control form-control-user" id="password1"
                                    placeholder="Insert Password">
                                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="col-sm-5">
                                <input type="password" name="password2" value="<?= set_value('password2'); ?>"
                                    class="form-control form-control-user" id="password2" placeholder="Repeat Password">
                                <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <button type="submit" name="tambah" class="btn btn-primary float-right">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>