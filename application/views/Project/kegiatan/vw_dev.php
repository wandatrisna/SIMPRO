<section class="common-img-bg1">
	<div class="pcoded-content">
		<div class="pcoded-inner-content">
			<div class="main-body">
				<div class="page-wrapper">
					<div class="page-header card">
						<div class="row align-items-end">
							<div class="col-lg-8">
								<div class="page-header-title">
									<div class="d-inline">
										<h4>Data List Project</h4><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="page-header-breadcrumb">
									<ul class="breadcrumb-title">
										<li class="breadcrumb-item">
											<a href="<?= base_url() ?>Project">
												<i class="icofont icofont-home"></i>
											</a>
										</li>
										<li class="breadcrumb-item"><a
												href="<?= base_url() ?>Project/indexlistproject">List project</a>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="float">
							<br>
							<a data-toggle="modal" data-target="#addModal" class="btn btn-danger mb-2">Tambah
								Kegiatan</a>
						</div>

						<div class="page-body">
							<div class="card">
								<div class="card-header">
									<h5>Data list progres development</h5>
									<div class="card-header-right">
										<ul class="list-unstyled card-option">
											<li><i class="icofont icofont-simple-left "></i></li>
											<li><i class="icofont icofont-maximize full-card"></i></li>
											<li><i class="icofont icofont-minus minimize-card"></i></li>
											<li><i class="icofont icofont-refresh reload-card"></i></li>
											<li><i class="icofont icofont-error close-card"></i></li>
										</ul>
									</div>
								</div>
								<div class="card-block table-border-style">
									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr class="table-warning">
													<th>Nomor</th>
													<th>Nama Kegiatan</th>
													<th>Bobot</th>
													<th>Progres</th>
													<th>Plan Start Date</th>
													<th>Plan End Date</th>
													<th>Actual Start Date</th>
													<th>Actual End Date</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
												<?php $i =1; ?>
												<?php foreach ($dev as $d) : ?>
												<tr>
													<td><?= $i; ?>.</td>
													<td><?php echo $d->namakeg; ?></td>
													<td><?php echo $d->bobot; ?></td>
													<td><?php echo $d->progres; ?></td>
													<td><?php echo $d->planstdate; ?></td>
													<td><?php echo $d->planendate; ?></td>
													<td><?php echo $d->actualstdate; ?></td>
													<td><?php echo $d->actualendate; ?></td>
													<td>
														<a href="javascript:;" data-id="<?php echo $dev1['id'] ?>"
															data-idpro="<?php echo $dev1['project_id'] ?>"
															data-namakeg="<?php echo $dev1['namakeg'] ?>"
															data-bobot="<?php echo $dev1['bobot'] ?>"
															data-progres="<?php echo $dev1['progres'] ?>"
															data-planstdate="<?php echo $dev1['planstdate'] ?>"
															data-planendate="<?php echo $dev1['planendate'] ?>"
															data-actualstdate="<?php echo $dev1['actualstdate'] ?>"
															data-actualendate="<?php echo $dev1['actualendate'] ?>"
															data-file="<?php echo $dev1['file'] ?>" 
														>
															<button type="button" data-toggle="modal" data-target="#editModal"
																class="badge badge-warning">Ubah</button>
														</a>
														
														<a href="" class="badge badge-danger"
															onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');"
															class="ik ik-trash-2 text-red">Hapus</a>
													</td>
												</tr>
												<?php $i++; ?>
												<?php endforeach; ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<!-- Modal Tambah Kegiatan -->
						<form action="<?php echo base_url('Project/editdev/'.$project1['id_project']);?>" method="post">
							<div class="modal fade" id="addModal" tabindex="-1" role="dialog"
								aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Tambah Kegiatan Baru</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">

											<input type="hidden" name="project_id"
												value="<?= $project1['id_project']; ?>" id="project_id">
											<div class="form-group row">
												<label class="col-sm-2 col-form-label">Nama Kegiatan</label>
												<div class="col-sm-10">
													<input type="text" name="namakeg"
														class="form-control form-control-user"
														value="<?= set_value('namakeg'); ?>" id="namakeg"
														placeholder="Masukkan nama kegiatan ">
													<?= form_error('namakeg', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-2 col-form-label">Bobot</label>
												<div class="col-sm-10">
													<input type="text" name="bobot"
														class="form-control form-control-user"
														value="<?= set_value('bobot'); ?>" id="bobot"
														placeholder="Masukkan bobot ">
													<?= form_error('bobot', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-2 col-form-label">Progres</label>
												<div class="col-sm-10">
													<input type="text" name="progres"
														class="form-control form-control-user"
														value="<?= set_value('progres'); ?>" id="progres"
														placeholder="Masukkan progres">
													<?= form_error('progres', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-2 col-form-label">Plan Start Date</label>
												<div class="col-sm-10">
													<input type="date" id="planstartdate" name="planstdate"
														class="form-control form-control-user"
														value="<?= set_value('planstdate'); ?>" id="planstdate">
													<?= form_error('planstdate', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>

											<div class="form-group row">
												<label class="col-sm-2 col-form-label">Plan End Date</label>
												<div class="col-sm-10">
													<input type="date" id="planendate" name="planendate"
														class="form-control form-control-user"
														value="<?= set_value('planendate'); ?>" id="planendate">
													<?= form_error('planendate', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>

											<div class="form-group row">
												<label class="col-sm-2 col-form-label">Actual Start Date </label>
												<div class="col-sm-10">
													<input type="date" id="actualstdate" name="actualstdate"
														class="form-control form-control-user"
														value="<?= set_value('actualstdate'); ?>" id="actualstdate">
													<?= form_error('actualstdate', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-2 col-form-label">Actual End Date </label>
												<div class="col-sm-10">
													<input type="date" id="actualendate" name="actualendate"
														class="form-control form-control-user"
														value="<?= set_value('actualendate'); ?>" id="actualendate">
													<?= form_error('actualendate', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>

											<div class="form-group row">
												<label class="col-sm-2 col-form-label">Upload File</label>
												<div class="col-sm-10">
													<input type="file" name="file"
														class="form-control form-control-user"
														value="<?= set_value('namaproject'); ?>" id="file"
														placeholder="Masukkan nama aplikasi">
													<?= form_error('file', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary"
													data-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-primary">Save</button>
											</div>
										</div>
									</div>
								</div>
						</form>
						
						<!-- Modal Ubah Kegiatan -->
						<form action="<?php echo base_url('Project/ubahdev/'). $dev1['id'];?>" method="POST"
							enctype="multipart/form-data" name="frm" onsubmit="return validateForm()">
							<div class="modal fade" id="editModal" tabindex="-1" role="dialog"
								aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Edit
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>

										<div class="modal-body">
											<input type="hidden" name="id_project"
												value="<?= $project1['id_project']; ?>">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Bobot</label>
												<div class="col-sm-9">
													<input type="number" name="bobotbrd" class="form-control"
														id="bobotbrd" value="10" readonly>
													<?= form_error('bobotbrd', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>

											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Progres</label>
												<div class="col-sm-9">
													<input type="number" name="progresbrd"
														class="form-control form-control-user"
														value="<?php echo $project1['progresbrd']; ?>" id="progresbrd"
														placeholder="Masukkan progres">
													<?= form_error('progresbrd', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>

											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Plan
													Start Date</label>
												<div class="col-sm-9">
													<input type="date" id="planstdatebrd" name="planstdatebrd"
														class="form-control form-control-user"
														value="<?php echo $project1['planstdatebrd']; ?>"
														id="planstdatebrd">
													<?= form_error('planstdatebrd', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>

											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Plan
													End Date</label>
												<div class="col-sm-9">
													<input type="date" id="planendatebrd" name="planendatebrd"
														class="form-control form-control-user"
														value="<?php echo $project1['planendatebrd']; ?>"
														id="planendatebrd">
													<?= form_error('planendatebrd', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>

											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Actual Start Date
												</label>
												<div class="col-sm-9">
													<input type="date" id="actualstdatebrd" name="actualstdatebrd"
														class="form-control form-control-user"
														value="<?php echo $project1['actualstdatebrd']; ?>"
														id="actualstdatebrd">
													<?= form_error('actualstdatebrd', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>

											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Actual EndDate
												</label>
												<div class="col-sm-9">
													<input type="date" id="actualendatebrd" name="actualendatebrd"
														class="form-control form-control-user"
														value="<?php echo $project1['actualendatebrd']; ?>"
														id="actualendatebrd">
													<?= form_error('actualendatebrd', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>


											<!-- <div class="form-group row">
																<label class="col-sm-3 col-form-label">PIC</label>
																<div class="col-sm-9">
																	<select name="pic" class="form-control" id="pic">
																		<?php foreach ($user as $us) { ?>
																		<option value="<?php echo $us['nama']?>">
																			<?php echo $us['nama']?></option>
																		<?php } ?>
																	</select>
																	<?= form_error('pic', '<small class="text-danger pl-3">', '</small>'); ?>
																</div>
															</div> -->
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Upload
													File</label>
												<div class="col-sm-9">
													<?php echo $project1['filebrd']; ?>
													<input type="file" name="filebrd"
														class="form-control form-control-user"
														value="<?php echo $project1['filebrd']; ?>" id="file"
														placeholder="Masukkan file">
													<?= form_error('filebrd', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>
											</div>


											<div class="modal-footer">
												<button type="button" class="btn btn-secondary"
													data-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-primary" onclick="validateForm()"
													id="btn-ok">Update</button>
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
	<script>
										$(document).ready(function () {
											// Untuk sunting
											$('#edit-data').on('show.bs.modal', function (event) {
												var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
												var modal = $(this)

												// Isi nilai pada field
												modal.find('#id_project').attr("value", div.data('id_project'));
												modal.find('#bobotbrd').attr("value", div.data('bobotbrd'));
												modal.find('#progresbrd').html(div.data('progresbrd'));
												modal.find('#planstdatebrd').html(div.data('planstdatebrd'));
												modal.find('#planendatebrd').html(div.data('planendatebrd'));
												modal.find('#actualstdatebrd').html(div.data('actualstdatebrd'));
												modal.find('#actualendatebrd').html(div.data('actualendatebrd'));
											});

										});

										function validateForm() {
											let x = document.forms["frm"]["progresbrd"].value;
											if (x > 10) {
												alert("Progres tidak boleh lebih dari 10%");
												return false;
											}
										}

									</script>
