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
													<h4 class="title"><strong>BRD</strong></h4><br>
													<div class="card-header-right">
														<i class="icofont icofont-spinner-alt-5"></i>
														<div class="float-right">
															<?php
                                                if ($user1['role'] == 'Planning') {
                                                ?>
															<a href="<?= base_url() ?>Project/editbrd"
																class="btn btn-warning btn-icon-split btn-sm">

																<a href="javascript:;"
																	data-id="<?php echo $project1['id_project'] ?>"
																	data-bobot="<?php echo $project1['bobotbrd'] ?>"
																	data-progres="<?php echo $project1['progresbrd'] ?>"
																	data-planstdate="<?php echo $project1['planstdatebrd'] ?>"
																	data-planendate="<?php echo $project1['planendatebrd'] ?>"
																	data-actualstdate="<?php echo $project1['actualstdatebrd'] ?>"
																	data-actualendate="<?php echo $project1['actualendatebrd'] ?>"
																	data-toggle="modal" data-target="#editModal">
																	<button data-toggle="modal" data-target="#ubah-data"
																		class="btn btn-warning">Ubah</button>
																</a>
																<?php
												}
												?>
																<p></p>
														</div>
													</div>

													<div class="card-block">
														<table class="table table-hover">

															<tbody>
																<tr>
																	<td>
																		<div class="task-contain">
																			<p class="d-inline-block m-l-20">
																				<strong>Bobot</strong>
																			</p>
																		</div>
																	</td>
																	<td>
																		<p class="d-inline-block m-r-20">
																			<?= $project1['bobotbrd'] ?></p>
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
																			<?= $project1['progresbrd'] ?></p>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="task-contain">
																			<p class="d-inline-block m-l-20">
																				<strong>Plan Start
																					Date</strong></p>
																		</div>
																	</td>
																	<td>
																		<p class="d-inline-block m-r-20">
																			<?= $project1['planstdatebrd'] ?></p>

																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="task-contain">
																			<p class="d-inline-block m-l-20">
																				<strong>Plan End
																					date</strong>
																			</p>
																		</div>
																	</td>
																	<td>
																		<p class="d-inline-block m-r-20">
																			<?= $project1['planendatebrd'] ?>
																		</p>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="task-contain">
																			<p class="d-inline-block m-l-20">
																				<strong>Actual Start
																					Date</strong>
																			</p>
																		</div>
																	</td>
																	<td>
																		<p class="d-inline-block m-r-20">
																			<?= $project1['actualstdatebrd'] ?>
																		</p>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="task-contain">
																			<p class="d-inline-block m-l-20">
																				<strong>Actual End
																					Date</strong>
																			</p>
																		</div>
																	</td>
																	<td>
																		<p class="d-inline-block m-r-20">
																			<?= $project1['actualendatebrd'] ?>
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
																		<a class="d-inline-block m-r-20"
																			href="<?php echo base_url('assets/dokumenbrd/' . $project1['filebrd']); ?>"><?= $project1['filebrd'] ?></a>
																		<!-- <img src="<?php echo base_url('assets/dokumenbrd/' . $project1['filebrd']); ?>"> -->
																		<div class="progress d-inline-block">
																			<div class="progress-bar bg-c-blue"
																				role="progressbar" aria-valuemin="0"
																				aria-valuemax="100" style="width:50%">
																			</div>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>

												<form
													action="<?php echo base_url('Project/editbrd/'). $project1['id_project'];?>"
													method="POST" enctype="multipart/form-data" name="frm"
													onsubmit="return validateForm()">
													<div id="editModal" class="modal fade" tabindex="-1" role="dialog"
														aria-labelledby="exampleModalLabel" aria-hidden="true">
														<div class="modal-dialog modal-lg" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalLabel">
																		Edit
																	</h5>
																	<button type="button" class="close"
																		data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>

																<div class="modal-body">
																	<input type="hidden" name="id_project"
																		value="<?= $project1['id_project']; ?>">
																	<div class="form-group row">
																		<label
																			class="col-sm-3 col-form-label">Bobot</label>
																		<div class="col-sm-9">
																			<input type="number" name="bobotbrd"
																				class="form-control" id="bobotbrd"
																				value="10" readonly>
																			<?= form_error('bobotbrd', '<small class="text-danger pl-3">', '</small>'); ?>
																		</div>
																	</div>

																	<div class="form-group row">
																		<label
																			class="col-sm-3 col-form-label">Progres</label>
																		<div class="col-sm-9">
																			<input type="number" name="progresbrd"
																				class="form-control form-control-user"
																				value="<?php echo $project1['progresbrd']; ?>"
																				id="progresbrd"
																				placeholder="Masukkan progres">
																			<?= form_error('progresbrd', '<small class="text-danger pl-3">', '</small>'); ?>
																		</div>
																	</div>

																	<div class="form-group row">
																		<label class="col-sm-3 col-form-label">Plan
																			Start Date</label>
																		<div class="col-sm-9">
																			<input type="date" id="planstdatebrd"
																				name="planstdatebrd"
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
																			<input type="date" id="planendatebrd"
																				name="planendatebrd"
																				class="form-control form-control-user"
																				value="<?php echo $project1['planendatebrd']; ?>"
																				id="planendatebrd">
																			<?= form_error('planendatebrd', '<small class="text-danger pl-3">', '</small>'); ?>
																		</div>
																	</div>

																	<div class="form-group row">
																		<label class="col-sm-3 col-form-label">Actual
																			Start Date
																		</label>
																		<div class="col-sm-9">
																			<input type="date" id="actualstdatebrd"
																				name="actualstdatebrd"
																				class="form-control form-control-user"
																				value="<?php echo $project1['actualstdatebrd']; ?>"
																				id="actualstdatebrd">
																			<?= form_error('actualstdatebrd', '<small class="text-danger pl-3">', '</small>'); ?>
																		</div>
																	</div>

																	<div class="form-group row">
																		<label class="col-sm-3 col-form-label">Actual
																			EndDate
																		</label>
																		<div class="col-sm-9">
																			<input type="date" id="actualendatebrd"
																				name="actualendatebrd"
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
																				value="<?php echo $project1['filebrd']; ?>"
																				id="file" placeholder="Masukkan file">
																			<?= form_error('filebrd', '<small class="text-danger pl-3">', '</small>'); ?>
																		</div>
																	</div>


																	<div class="modal-footer">
																		<button type="button" class="btn btn-secondary"
																			data-dismiss="modal">Close</button>
																		<button type="submit" class="btn btn-primary"
																			onclick="validateForm()"
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
						</div>
					</div>
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
