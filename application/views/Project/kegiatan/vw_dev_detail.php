<div class="pcoded-content">
	<section class="common-img-bg1">
		<div class="pcoded-inner-content">
			<div class="main-body">
				<div class="page-wrapper">
					<div class="page-body">
						<div class="float">
							<!-- <a href="<?= base_url('Project/detail/'). $project1['id_project']; ?>"
								class="btn btn-danger mb-2">Kembali</a> -->
						</div>
                        <form action="" method="post">
											<h5 class="modal-title" id="exampleModalLabel">Tambah Kegiatan Baru</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<div class="form-group row">
											<input type="hidden" name="project_id" value="<?= $project1['id_project']; ?>"readonly>
                                            <!-- <input type="text" name="id_project" value="<?= set_value('id'); ?>" id="bobot"> -->
												
												<label class="col-sm-3 col-form-label">Nama Kegiatan</label>
												<div class="col-sm-9">
													<input type="text" name="namakeg"
														class="form-control form-control-user"
														value="" id="namakeg"
														placeholder="Masukkan nama kegiatan ">
													<?= form_error('namakeg', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Bobot</label>
												<div class="col-sm-9">
													<input type="text" name="bobot"
														class="form-control form-control-user"
														value="" id="bobot"
														placeholder="Masukkan bobot ">
													<?= form_error('bobot', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Progres</label>
												<div class="col-sm-9">
													<input type="text" name="progres"
														class="form-control form-control-user"
														value="" id="progres"
														placeholder="Masukkan progres">
													<?= form_error('progres', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Plan Start Date</label>
												<div class="col-sm-9">
													<input type="date" id="planstartdate" name="planstdate"
														class="form-control form-control-user"
														value="" id="planstdate">
													<?= form_error('planstdate', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>

											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Plan End Date</label>
												<div class="col-sm-9">
													<input type="date" id="planendate" name="planendate"
														class="form-control form-control-user"
														value="" id="planendate">
													<?= form_error('planendate', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>

											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Actual Start Date </label>
												<div class="col-sm-9">
													<input type="date" id="actualstdate" name="actualstdate"
														class="form-control form-control-user"
														value="" id="actualstdate">
													<?= form_error('actualstdate', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Actual End Date </label>
												<div class="col-sm-9">
													<input type="date" id="actualendate" name="actualendate"
														class="form-control form-control-user"
														value="" id="actualendate">
													<?= form_error('actualendate', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
											
											<!-- <div class="form-group row">
													<label class="col-sm-2 col-form-label">Upload File</label>
													<div class="col-sm-10">
														<input type="file" name="file"
															class="form-control form-control-user"
															value="<?= set_value('namaproject'); ?>" id="file"
															placeholder="Masukkan nama aplikasi">
														<?= form_error('file', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>
												</div> -->
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary"
													data-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-primary">Save</button>
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
