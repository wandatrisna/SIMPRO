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
										<a href="<?= base_url('Project/detail/'). $project1['id_project']; ?>"
											class="btn btn-danger mb-2">Kembali</a>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="card" style="background-color: rgba(245, 245, 245, 0.9);">
												<div class="card-header">
													<h4 class="title"><strong>UAT</strong></h4><br>
													<div class="card-header-right">
														<i class="icofont icofont-spinner-alt-5"></i>
														<div class="float-right">
														<?php
                                                if ($user1['role'] == 'Development') {
                                                ?>
															<a href="<?= base_url() ?>Project/edituat"
																class="btn btn-warning btn-icon-split btn-sm">
													
												<a href="javascript:;"
																	data-id="<?php echo $project1['id_project'] ?>"
																	data-bobot="<?php echo $project1['bobotuat'] ?>"
																	data-progres="<?php echo $project1['progresuat'] ?>"
																	data-planstdate="<?php echo $project1['planstdateuat'] ?>"
																	data-planendate="<?php echo $project1['planendateuat'] ?>"
																	data-actualstdate="<?php echo $project1['actualstdateuat'] ?>"
																	data-actualendate="<?php echo $project1['actualendateuat'] ?>"
																	data-toggle="modal" data-target="#editModal">
																	<button data-toggle="modal" data-target="#ubah-data"
																		class="btn btn-warning">Ubah</button>
																</a>
																<?php
															}?>
												</ul>
											</div>
										</div>

										<div class="card-header-right">
											<i class="icofont icofont-spinner-alt-5"></i>
										</div>

										<div class="card-block">
											<table class="table table-hover">

												<tbody>
													<tr>
														<td>
															<div class="task-contain">
																<p class="d-inline-block m-l-20"><strong>Bobot</strong>
																</p>
															</div>
														</td>
														<td>
															<p class="d-inline-block m-r-20">
																<?= $project1['bobotuat'] ?></p>
														</td>
													</tr>
													<tr>
														<td>
															<div class="task-contain">
																<p class="d-inline-block m-l-20">
																	<strong>Progres</strong></p>
															</div>
														</td>
														<td>
															<p class="d-inline-block m-r-20">
																<?= $project1['progresuat'] ?></p>
														</td>
													</tr>
													<tr>
														<td>
															<div class="task-contain">
																<p class="d-inline-block m-l-20"><strong>Plan Start
																		Date</strong></p>
															</div>
														</td>
														<td>
															<p class="d-inline-block m-r-20">
																<?= $project1['planstdateuat'] ?></p>

														</td>
													</tr>
													<tr>
														<td>
															<div class="task-contain">
																<p class="d-inline-block m-l-20"><strong>Plan End
																		date</strong>
																</p>
															</div>
														</td>
														<td>
															<p class="d-inline-block m-r-20">
																<?= $project1['planendateuat'] ?>
															</p>
														</td>
													</tr>
													<tr>
														<td>
															<div class="task-contain">
																<p class="d-inline-block m-l-20"><strong>Actual Start
																		Date</strong>
																</p>
															</div>
														</td>
														<td>
															<p class="d-inline-block m-r-20">
																<?= $project1['actualstdateuat'] ?>
															</p>
														</td>
													</tr>
													<tr>
														<td>
															<div class="task-contain">
																<p class="d-inline-block m-l-20"><strong>Actual End
																		Date</strong>
																</p>
															</div>
														</td>
														<td>
															<p class="d-inline-block m-r-20">
																<?= $project1['actualendateuat'] ?>
															</p>

														</td>
													</tr>

													<tr>
														<td>
															<div class="task-contain">
																<p class="d-inline-block m-l-20">
																	<strong>File</strong>
																</p>
															</div>
														</td>
														<td>
														<a class="d-inline-block m-r-20" href="<?php echo base_url('assets/dokumenuat/' . $project1['fileuat']); ?>"><?= $project1['fileuat'] ?></a>
														<!-- <img src="<?php echo base_url('assets/dokumenuat/' . $project1['fileuat']); ?>"> -->
														<div class="progress d-inline-block">
															<div class="progress-bar bg-c-blue" role="progressbar"
																aria-valuemin="0" aria-valuemax="100" style="width:50%">
															</div>
														</div>
													</td>
													</tr>
												</tbody>
											</table>
										</div></div>

										<form action="<?php echo base_url('Project/edituat/'). $project1['id_project'];?>" method="POST"
										 enctype="multipart/form-data" name="frm" onsubmit="return validateForm()">
											<div id="editModal" class="modal fade" tabindex="-1" role="dialog"
												aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog modal-lg" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLabel">Edit
															</h5>
															<button type="button" class="close" data-dismiss="modal"
																aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														
														<div class="modal-body">
														<input type="hidden" name="id_project" value="<?= $project1['id_project']; ?>">
															<div class="form-group row">
																<label class="col-sm-3 col-form-label">Bobot</label>
																<div class="col-sm-9">
																	<input type="number" name="bobotuat"
																		class="form-control" id="bobotuat" value="10"
																		readonly>
																	<?= form_error('bobotuat', '<small class="text-danger pl-3">', '</small>'); ?>
																</div>
															</div>

															<div class="form-group row">
																<label class="col-sm-3 col-form-label">Progres</label>
																<div class="col-sm-9">
																	<input type="number" name="progresuat"
																		class="form-control form-control-user"
																		value="<?php echo $project1['progresuat']; ?>"
																		id="progresuat" placeholder="Masukkan progres">
																	<?= form_error('progresuat', '<small class="text-danger pl-3">', '</small>'); ?>
																</div>
															</div>

															<div class="form-group row">
																<label class="col-sm-3 col-form-label">Plan
																	Start Date</label>
																<div class="col-sm-9">
																	<input type="date" id="planstdateuat"
																		name="planstdateuat"
																		class="form-control form-control-user"
																		value="<?php echo $project1['planstdateuat']; ?>"
																		id="planstdateuat">
																	<?= form_error('planstdateuat', '<small class="text-danger pl-3">', '</small>'); ?>
																</div>
															</div>

															<div class="form-group row">
																<label class="col-sm-3 col-form-label">Plan
																	End Date</label>
																<div class="col-sm-9">
																	<input type="date" id="planendateuat"
																		name="planendateuat"
																		class="form-control form-control-user"
																		value="<?php echo $project1['planendateuat']; ?>"
																		id="planendateuat">
																	<?= form_error('planendateuat', '<small class="text-danger pl-3">', '</small>'); ?>
																</div>
															</div>

															<div class="form-group row">
																<label class="col-sm-3 col-form-label">Actual Start Date
																</label>
																<div class="col-sm-9">
																	<input type="date" id="actualstdateuat"
																		name="actualstdateuat"
																		class="form-control form-control-user"
																		value="<?php echo $project1['actualstdateuat']; ?>"
																		id="actualstdateuat">
																	<?= form_error('actualstdateuat', '<small class="text-danger pl-3">', '</small>'); ?>
																</div>
															</div>

															<div class="form-group row">
																<label class="col-sm-3 col-form-label">Actual EndDate
																</label>
																<div class="col-sm-9">
																	<input type="date" id="actualendateuat"
																		name="actualendateuat"
																		class="form-control form-control-user"
																		value="<?php echo $project1['actualendateuat']; ?>"
																		id="actualendateuat">
																	<?= form_error('actualendateuat', '<small class="text-danger pl-3">', '</small>'); ?>
																</div>
															</div>

															<div class="form-group row">
																<label class="col-sm-3 col-form-label">Upload
																	File</label>
																<div class="col-sm-9">
																<?php echo $project1['fileuat']; ?>
																	<input type="file" name="fileuat"
																		class="form-control form-control-user"
																		value="<?php echo $project1['fileuat']; ?>" id="file"
																		placeholder="Masukkan file">
																	<?= form_error('fileuat', '<small class="text-danger pl-3">', '</small>'); ?>
																</div>
															</div>


															<div class="modal-footer">
																<button type="button" class="btn btn-secondary"
																	data-dismiss="modal">Close</button>
																<button type="submit" onclick="validateForm()"
																	class="btn btn-primary">Update</button>
															</div>
														</div>
													</div>
												</div>
										</form></div></div>

										<script>
										$(document).ready(function () {
											// Untuk sunting
											$('#edit-data').on('show.bs.modal', function (event) {
												var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
												var modal = $(this)

												// Isi nilai pada field
												modal.find('#id_project').attr("value", div.data('id_project'));
												modal.find('#bobotuat').attr("value", div.data('bobotuat'));
												modal.find('#progresuat').html(div.data('progresuat'));
												modal.find('#planstdateuat').html(div.data('planstdateuat'));
												modal.find('#planendateuat').html(div.data('planendateuat'));
												modal.find('#actualstdateuat').html(div.data('actualstdateuat'));
												modal.find('#actualendateuat').html(div.data('actualendateuat'));
											});
										});

										function validateForm() {
											let x = document.forms["frm"]["progresuat"].value;
											if (x > 10) {
												alert("Progres tidak boleh lebih dari 10%");
												return false;
											}
										}
									</script>
