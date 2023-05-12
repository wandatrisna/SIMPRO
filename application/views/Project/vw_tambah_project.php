<div class="pcoded-content">
    <section class="common-img-bg1">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">
                        <div class="float">
                            <a href="<?= base_url() ?>User" class="btn btn-danger mb-2">Kembali</a>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card" style="background-color: rgba(245, 245, 245, 0.9);">
                                    <div class="card-header">
                                        <h4 class="title"><strong>Tambah User</strong></h4><br>
                                        <div class="card-header-right"><i class="icofont icofont-spinner-alt-5"></i>
                                            <div class="page-header-breadcrumb">
                                                <ul class="breadcrumb-title">
                                                    <li class="breadcrumb-item">
                                                        <a href="<?= base_url() ?>Project/">
                                                            <i class="icofont icofont-home"></i>
                                                        </a>
                                                    </li>
                                                    <!-- <li class="breadcrumb-item"><a
                                                            href="<?= base_url() ?>User/indexuserplanning">User
                                                            Planning</a>
                                                    </li> -->
                                                    <li class="breadcrumb-item"><a
                                                            href="<?= base_url() ?>Project/tambahproject">Tambah
                                                            Project</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="card-header-right">
                                            <i class="icofont icofont-spinner-alt-5"></i>
                                        </div>

                                        <div class="card-block">
                                            <form action="" method="POST">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Nama Aplikasi</label>
                                                    <div class="col-sm-10">
                                                        <input type="namaaplikasi" name="namaaplikasi"
                                                            class="form-control form-control-user"
                                                            value="<?= set_value('namaaplikasi'); ?>" id="namaaplikasi"
                                                            placeholder="Masukkan nama aplikasi">
                                                        <?= form_error('namaaplikasi', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Jenis Project</label>
                                                    <div class="col-sm-10">
                                                        <select name="jenisproject" class="form-control"
                                                            id="jenisproject">
                                                            <?php foreach ($jenisproject as $p) { ?>
                                                            <option value="<?php echo $p['namajenisproject']?>">
                                                                <?php echo $p['namajenisproject']?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Jenis Aplikasi</label>
                                                    <div class="col-sm-10">
                                                        <select name="jenisaplikasi" class="form-control"
                                                            id="jenisaplikasi">
                                                            <?php foreach ($jenisaplikasi as $p) { ?>
                                                            <option value="<?php echo $p['namajenisaplikasi']?>">
                                                                <?php echo $p['namajenisaplikasi']?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Plan</label>
                                                    <div class="col-sm-10">
                                                        <input type="date" name="plan" value="<?= set_value('plan'); ?>"
                                                            class="form-control form-control-user" id="plan"
                                                            placeholder="Masukkan Plan Date">
                                                        <?= form_error('plan', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Actual</label>
                                                    <div class="col-sm-10">
                                                        <input type="date" name="actual"
                                                            value="<?= set_value('actual'); ?>"
                                                            class="form-control form-control-user" id="actual"
                                                            placeholder="Masukkan Actual Date">
                                                        <?= form_error('actual', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Target</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="target"
                                                            value="<?= set_value('target'); ?>"
                                                            class="form-control form-control-user" id="target"
                                                            placeholder="Masukkan Target">
                                                        <?= form_error('target', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Tanggal register</label>
                                                    <div class="col-sm-10">
                                                        <input type="date" name="tanggalregister"
                                                            value="<?= set_value('tanggalregister'); ?>"
                                                            class="form-control form-control-user" id="tanggalregister"
                                                            placeholder="Masukkan Tanggal register">
                                                        <?= form_error('tanggalregister', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                </div>

												<div class="form-group row">
													<label class="col-sm-2 col-form-label">URF</label>
													<div class="col-sm-10">
														<input type="file"  name="urf" value="<?= set_value('urf'); ?>"
														class="form-control form-control-user" id="urf" placeholder="Masukkan File">
								
														<?= form_error('urf', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>
													<!-- <input type="radio" onclick="javascript:yesnoCheck();"
															name="urf" id="yesCheck" />Ada<br>

														<div id="ifAda" style="visibility:hidden"> -->


													<!-- <input type="file" name="urf" id="urf" value="<?= set_value('urf'); ?>">
																<label for="urf" class="custom-file-label"></label>
																<?= form_error('urf', '<small class="text-danger p1-3">', '</small>'); ?>
															
														</div> -->
													<!-- <input type="radio" onclick="javascript:yesnoCheck();"
															name="urf" id="noCheck" />Tidak Ada
														<div id="ifTidakada" style="visibility:hidden">
															<input type="text" name="urf"
																value="<?= set_value('urf'); ?>"
																class="form-control form-control-user" id="urf"
																placeholder="Masukkan Keterangan Tidak Ada">
															<?= form_error('urf', '<small class="text-danger pl-3">', '</small>'); ?>
														</div> -->
												</div>
										</div>
									</div>


									<div class="col-md-12">
										<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
											Data</button>
									</div>
									</form>
								</div>

								<script type="text/javascript">
									function yesnoCheck() {
										if (document.getElementById('noCheck').checked) {
											document.getElementById('ifTidakada').style.visibility = 'visible';
										} else {
											document.getElementById('ifTidakada').style.visibility = 'hidden';
										}
										if (document.getElementById('yesCheck').checked) {
											document.getElementById('ifAda').style.visibility = 'visible';
										} else {
											document.getElementById('ifAda').style.visibility = 'hidden';
										}
									}

								</script>
