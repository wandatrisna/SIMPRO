<div class="col-md-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Document</h6>

        </div>
        <div class="card-body">
        <?= $this->session->flashdata('message') ?>
            <form action="" method="POST">

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Add New Parameter</label>
                    <div class="col-sm-10">
                        <input type="text" name="jenisdokumen" style="padding: 5px 330px;"
                            value="<?= set_value('jenisdokumen'); ?>" id="jenisdokumen"
                            placeholder="Insert New Parameter">
                        <?= form_error('jenisdokumen', '<small class="text-danger pl-3">', '</small>'); ?>
                        <button type="submit" name="tambah" style="padding: 5px 20px;" class="btn btn-primary">Add New
                            Data</button>
                    </div>
                </div>

            </form>
            <br>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="table-warning">
                            <th width="5px">Number</th>
                            <th>Document</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i =1; ?>
                        <?php foreach ($dokumen as $us) : ?>
                        <tr>
                            <td><?= $i; ?>.</td>
                            <td><?= $us['jenisdokumen']; ?></td>
                            <td>
                                <a href="<?= base_url('Parameter/hapusdok/'). $us['id_jenisdokumen']; ?> "
                                    class="badge badge-danger"
                                    onclick="return confirm('Are you sure you want to delete this data?');"
                                    class="ik ik-trash-2 text-red">Delete</a>
                            </td>
                        </tr>

                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <br>
                <div class="card-block">

                </div>
            </div>
        </div>
    </div>
</div>