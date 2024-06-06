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
										<a href="<?= base_url() ?>Project/indexlistproject"
											class="btn btn-danger mb-2">Kembali</a>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="card" style="background-color: rgba(245, 245, 245, 0.9);">
												<div class="card-header">
													<h4 class="title"><strong>Add Project</strong></h4><br>


													<div class="card-header-right">
														<i class="icofont icofont-spinner-alt-5"></i>
													</div>

													<div class="card-block">
														<form action="" method="POST" enctype="multipart/form-data">
															<div class="form-group row">
																<label class="col-sm-2 col-form-label">Application
																	Name</label>
																<div class="col-sm-10">
																	<input type="namaaplikasi" name="namaaplikasi"
																		class="form-control form-control-user"
																		value="<?= set_value('namaaplikasi'); ?>"
																		id="namaaplikasi"
																		placeholder="Insert Application Name">
																	<?= form_error('namaaplikasi', '<small class="text-danger pl-3">', '</small>'); ?>
																</div>
															</div>

															<div class="form-group row">
																<label class="col-sm-2 col-form-label">Project
																	Type</label>
																<div class="col-sm-10">
																	<select name="jenisproject" class="form-control"
																		id="jenisproject">
																		<?php foreach ($jenisproject as $p) { ?>
																		<option
																			value="<?php echo $p['id_jenisproject']?>">
																			<?php echo $p['namajenisproject']?></option>
																		<?php } ?>
																	</select>
																</div>
															</div>

															<div class="form-group row">
																<label class="col-sm-2 col-form-label">Application
																	Type</label>
																<div class="col-sm-10">
																	<select name="jenisaplikasi" class="form-control"
																		id="jenisaplikasi">
																		<?php foreach ($jenisaplikasi as $p) { ?>
																		<option
																			value="<?php echo $p['id_jenisaplikasi']?>">
																			<?php echo $p['namajenisaplikasi']?>
																		</option>
																		<?php } ?>
																	</select>
																</div>
															</div>


															<div class="form-group row">
																<label class="col-sm-2 col-form-label">Year</label>
																<div class="col-sm-10">
																	<select class="form-control" name="tahun">
																		<?php
                                                                        for ($year = (int)date('Y'); 2000 <= $year; $year--): ?>
																		<option value="<?=$year;?>"><?=$year;?></option>
																		<?php endfor; ?>
																	</select>
																	<?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>
																</div>
															</div>

															<div class="form-group row">
																<label class="col-sm-2 col-form-label">Targets
																	Completed</label>
																<div class="col-sm-10">
																	<input type="month" name="target"
																		value="<?= set_value('target'); ?>"
																		class="form-control form-control-user"
																		id="target"
																		placeholder="Target (ex : June 2020)">
																	<?= form_error('target', '<small class="text-danger pl-3">', '</small>'); ?>
																</div>
															</div>

															<div class="form-group row">
																<label class="col-sm-2 col-form-label">Start
																	Date</label>
																<div class="col-sm-10">
																	<input type="date" name="tanggalregister"
																		value="<?= set_value('tanggalregister'); ?>"
																		class="form-control form-control-user"
																		id="tanggalregister"
																		placeholder="Masukkan Tanggal register">
																	<?= form_error('tanggalregister', '<small class="text-danger pl-3">', '</small>'); ?>
																</div>
															</div>

															<div class="form-group row">
																<label class="col-sm-2 col-form-label">URF</label>
																<div class="col-sm-10">
																	<input type="file" name="urf"
																		value="<?= set_value('urf'); ?>"
																		class="form-control form-control-user" id="urf"
																		placeholder="Insert File">
                                                                        <h6><font color="red">File URF must be insert</font><br></h6>
																	<?= form_error('urf', '<small class="text-danger pl-3">', '</small>'); ?>
																</div>

															</div>

															<div class="form-group row">
																<label class="col-sm-2 col-form-label">Note</label>
																<div class="col-sm-10">
																	<input type="text" name="keterangan"
																		value="<?= set_value('keterangan'); ?>"
																		class="form-control form-control-user"
																		id="keterangan" placeholder="Note">
																	<?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
																</div>
															</div>
													</div>
													<div class="float-right">
														<button type="submit" name="tambah"
															class="btn btn-primary float-right">ADD DATA</button>
                                                                        </div>
                                                                        </form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>
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
