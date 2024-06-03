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
										<a href="<?= base_url('Project/indexlistproject/'). $project1['id_project']; ?>"
											class="btn btn-danger mb-2">Kembali</a>
									</div>
									<div class="row">

										<div class="col-md-12 col-xl-8">
											<div class="card">
												<div class="card-header">
													<h3><strong><?= $project1['namaaplikasi']; ?></strong></h3>
													Last Updated <?= $project1['last_updated_time'];?>
													<table class="table table-hover">
														<tbody>
															<tr>

																<td>
																	<div class="task-contain">
																		<p class="d-inline-block m-l-20"><strong>Project Type</strong></p>
																		
																	</div>
																</td>
																<td>
																	<p class="d-inline-block m-r-20">
																	<?= $jenisp['jenisproject'] ?></p>
																	<div class="progress d-inline-block">
																		<div class="progress-bar bg-c-blue"
																			role="progressbar" aria-valuemin="0"
																			aria-valuemax="100" style="width:80%">
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="task-contain">
																		<p class="d-inline-block m-l-20"><strong>Application Type</strong></p>
																	</div>
																</td>
																<td>
																	<p class="d-inline-block m-r-20">
																	<?= $jenisa['jenisaplikasi'] ?></p>
																	<div class="progress d-inline-block">
																		<div class="progress-bar bg-c-pink"
																			role="progressbar" aria-valuemin="0"
																			aria-valuemax="100" style="width:60%">
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="task-contain">
																		<p class="d-inline-block m-l-20"><strong>URF Document</strong></p>
																	</div>
																</td>
																<td>
																	<a class="d-inline-block m-r-20"
																		href="<?php echo base_url('assets/dokumenurf/' . $project1['urf']); ?>"><?= $project1['urf'] ?></a>
																	<!-- <img src="<?php echo base_url('assets/dokumenurf/' . $project1['urf']); ?>"> -->
																	<div class="progress d-inline-block">
																		<div class="progress-bar bg-c-blue"
																			role="progressbar" aria-valuemin="0"
																			aria-valuemax="100" style="width:50%">
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="task-contain">
																		<p class="d-inline-block m-l-20">
																			<strong>Year</strong></p>
																	</div>
																</td>
																<td>
																	<p class="d-inline-block m-r-20">
																		<?= $project1['tahun'] ?></p>
																	<div class="progress d-inline-block">
																		<div class="progress-bar bg-c-yellow"
																			role="progressbar" aria-valuemin="0"
																			aria-valuemax="100" style="width:50%">
																		</div>
																	</div>
																</td>
															</tr>
														
															<tr>
																<td>
																	<div class="task-contain">
																		<p class="d-inline-block m-l-20">
																			<strong>Targets Completed</strong></p>
																	</div>
																</td>
																<td>
																	<p class="d-inline-block m-r-20">
																		<?= $project1['target'] ?></p>
																	<div class="progress d-inline-block">
																		<div class="progress-bar bg-c-blue"
																			role="progressbar" aria-valuemin="0"
																			aria-valuemax="100" style="width:50%">
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="task-contain">
																		<p class="d-inline-block m-l-20"><strong>Start Date</strong></p>
																	</div>
																</td>
																<td>
																	<p class="d-inline-block m-r-20">
																		<?= $project1['tanggalregister'] ?></p>
																	<div class="progress d-inline-block">
																		<div class="progress-bar bg-c-blue"
																			role="progressbar" aria-valuemin="0"
																			aria-valuemax="100" style="width:50%">
																		</div>
																	</div>
																</td>
															</tr>

															<tr>
																<td>
																	<div class="task-contain">
																		<p class="d-inline-block m-l-20">
																			<strong>Note</strong>
																		</p>
																	</div>
																</td>
																<td>
																	<p class="d-inline-block m-r-20">
																		<?= $project1['keterangan'] ?>
																	</p>
																	<div class="progress d-inline-block">
																		<div class="progress-bar bg-c-blue"
																			role="progressbar" aria-valuemin="0"
																			aria-valuemax="100" style="width:50%">
																		</div>
																	</div>
																</td>

															</tr>
															<tr>
																<td>
																	<div class="task-contain">
																		<p class="d-inline-block m-l-20">
																			<strong>Created Date</strong>
																		</p>
																	</div>
																</td>
																<td>
																	<p class="d-inline-block m-r-20">
																		<?= date('Y-m-d', $project1['date_created']); ?>
																	</p>
																	<div class="progress d-inline-block">
																		<div class="progress-bar bg-c-blue"
																			role="progressbar" aria-valuemin="0"
																			aria-valuemax="100" style="width:50%">
																		</div>
																	</div>
																</td>
															</tr>
															<?php if ($user1['role'] == 'Planning') {   ?>
															<tr>
																<td>
																	<a href="javascript:;"
																		data-id="<?php echo $project1['id_project'] ?>"
																		data-namaaplikasi="<?php echo $project1['namaaplikasi'] ?>"
																		data-jenisproject="<?php echo $project1['jenisproject'] ?>"
																		data-jenisaplikasi="<?php echo $project1['jenisaplikasi'] ?>"
																		data-tahun="<?php echo $project1['tahun'] ?>"
																		data-keterangan="<?php echo $project1['keterangan'] ?>"
																		data-targetp="<?php echo $project1['target'] ?>"
																		data-tanggalregister="<?php echo $project1['tanggalregister'] ?>"
																		data-urf="<?php echo $project1['urf'] ?>"
																		data-toggle="modal" data-target="#editModal">
																		<button data-toggle="modal"
																			data-target="#ubah-data"
																			class="btn btn-warning">Edit</button>
																	</a>
																	
																</td>
																<td></td>
															</tr>
															<?php } ?>

														</tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="col-md-12 col-xl-4">
											<div class="card ">
												<div class="card-header">

													<div class="d-inline-block">
														<h5>Activity</h5>

													</div>
												</div>
												<div class="card-block ">
													<div class="float">

														<table class="table">
															<thead>
																<tr class="table-warning">
																	<th>Activity Name</th>
																	<th>Progress</th>
																	<th>Action</th>
																</tr>
															</thead>
															<tbody>
																<tr>

																<?php if ($project1['jenisaplikasi'] == 4){   ?>
																	<td>CR</td>
																<?php } else { ?>
																	<td>BRD</td>
																<?php }?>
																	<td><?php $hasil= $project1['progresbrd'];
														if ($hasil==0){
															echo $total=0  ;
														}else{
															echo $total=$hasil/$project1['bobotbrd']*100;
														}

														?>%</td>
																	<td>
																		<a href="<?= base_url('Project/detailbrd/'). $project1['id_project']; ?>"
																			class="badge btn-danger icofont icofont-eye-alt"></i>More</a>
																	</td>
																</tr>
																<tr>
																	<td>FSD</td>
																	<td><?php $hasil= $project1['progresfsd'];
														if ($hasil==0){
															echo $total=0  ;
														}else{
															echo $total=$hasil/$project1['bobotfsd']*100;
														}

														?>%</td>
																	<td>
																		<a href="<?= base_url('Project/detailfsd/'). $project1['id_project']; ?>"
																			class="badge btn-danger icofont icofont-eye-alt"></i>More</a>
																	</td>
																</tr>
																<tr>
														<td>Development</td>
														<td><?php $hasil= $project1['progresdev']*100;
														if ($hasil==0){
															echo $total=0  ;
														}else{
															echo floor($total=$hasil/$project1['bobotdev']);
														}

														?>%</td>
														<td>
															<a href="<?= base_url('Project/detaildev/'). $project1['id_project']; ?>"
																class="badge btn-danger icofont icofont-eye-alt"></i>More</a>
														</td>
													</tr>
																<tr>
																	<td>SIT</td>
																	<td><?php $hasil= $project1['progressit'];
														if ($hasil==0){
															echo $total=0  ;
														}else{
															echo $total=$hasil/$project1['bobotsit']*100;
														}

														?>%</td>
																	<td>
																		<a href="<?= base_url('Project/detailsit/'). $project1['id_project']; ?>"
																			class="badge btn-danger icofont icofont-eye-alt"></i>More</a>
																	</td>
																</tr>
																<tr>
																	<td>UAT</td>
																	<td><?php $hasil= $project1['progresuat'];
														if ($hasil==0){
															echo $total=0  ;
														}else{
															echo $total=$hasil/$project1['bobotuat']*100;
														}

														?>%</td>
																	<td>
																		<a href="<?= base_url('Project/detailuat/'). $project1['id_project']; ?>"
																			class="badge btn-danger icofont icofont-eye-alt"></i>More</a>
																	</td>
																</tr>
																<tr>
																	<td>Migrasi</td>
																	<td><?php $hasil= $project1['progresmigrasi'];
														if ($hasil==0){
															echo $total=0  ;
														}else{
															echo $total=$hasil/$project1['bobotmigrasi']*100;
														}
														?>%</td>
																	<td>
																		<a href="<?= base_url('Project/detailmigrasi/'). $project1['id_project']; ?>"
																			class="badge btn-danger icofont icofont-eye-alt"></i>More</a>
																	</td>
																</tr>

															</tbody>
														</table>
													</div>
												</div></div>
												
												
												


												<!-- form edit -->
											<form
												action="<?php echo base_url('Project/editproject/'). $project1['id_project'];?>"
												method="POST" enctype="multipart/form-data">
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
																<input type="hidden" name="id_project"
																	value="<?= $project1['id_project']; ?>">
																<div class="form-group row">
																	<label class="col-sm-3 col-form-label">Application
																		Name</label>
																	<div class="col-sm-9">
																		<input type="namaaplikasi" name="namaaplikasi"
																			class="form-control form-control-user"
																			value="<?= $project1['namaaplikasi']; ?>"
																			id="namaaplikasi"
																			placeholder="Masukkan nama aplikasi">
																		<?= form_error('namaaplikasi', '<small class="text-danger pl-3">', '</small>'); ?>
																	</div>
													</div>

																	<div class="form-group row">
																	<label class="col-sm-3 col-form-label">Project
																		Type</label>
																	<div class="col-sm-9">

																		<select name="jenisproject" class="form-control"
																			id="jenisproject">
																			<?php foreach ($jenisproject as $p) { ?>
																			<option
																				value="<?php echo $p['id_jenisproject']?>">
																				<?php echo $p['namajenisproject']?>
																			</option>
																			<?php } ?>
																		</select>
																		</div>
																	</div>

																	<div class="form-group row">
																	<label class="col-sm-3 col-form-label">Application
																		Type</label>
																	<div class="col-sm-9">
																		<select name="jenisaplikasi"
																			class="form-control" id="jenisaplikasi">
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
																		<label
																			class="col-sm-3 col-form-label">Year</label>
																		<div class="col-sm-9">
																		<select class="form-control" name="tahun" id="tahun">
																		<?php
                                                                        for ($year = (int)date('Y'); 2000 <= $year; $year--): ?>
																		<option value="<?=$year;?>"><?=$year;?></option>
																		<?php endfor; ?>
																	</select>
																			<?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>
																		</div>
																	</div>


																	<div class="form-group row">
																	<label class="col-sm-3 col-form-label">Targets
																		Completed</label>
																	<div class="col-sm-9">
																		<input type="month" name="target"
																			value="<?= $project1['target']; ?>"
																			class="form-control form-control-user"
																			id="target" placeholder="Masukkan Target">
																		<?= form_error('target', '<small class="text-danger pl-3">', '</small>'); ?></div>
																	</div>

																	<div class="form-group row">
																	<label class="col-sm-3 col-form-label">Start
																		Date</label>
																	<div class="col-sm-9">
																		<input type="date" name="tanggalregister"
																			value="<?= $project1['tanggalregister']; ?>"
																			class="form-control form-control-user"
																			id="tanggalregister"
																			placeholder="Masukkan Tanggal register">
																		<?= form_error('tanggalregister', '<small class="text-danger pl-3">', '</small>'); ?></div>
																	</div>
																	<div class="form-group row">
																	<label class="col-sm-3 col-form-label">Upload
																		File</label>
																	<div class="col-sm-9">
																		<?php echo $project1['urf']; ?>
																		<input type="file" name="urf"
																			class="form-control form-control-user"
																			value="<?php echo $project1['urf']; ?>"
																			id="file" placeholder="Masukkan file">
																		<?= form_error('urf', '<small class="text-danger pl-3">', '</small>'); ?><?= form_error('urf', '<small class="text-danger pl-3">', '</small>'); ?>
																		</div>
																	</div>
																	<div class="form-group row">
																	<label class="col-sm-3 col-form-label">Note</label>
																	<div class="col-sm-9">
																		<input type="text" name="keterangan"
																			value="<?= $project1['keterangan']; ?>"
																			class="form-control form-control-user"
																			id="keterangan"
																			placeholder="Masukkan keterangan">
																		<?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?></div>
																	</div>


																	<div class="modal-footer">
																	<button type="button" class="btn btn-secondary"
																		data-dismiss="modal">Close</button>
																	<button type="submit"
																		class="btn btn-primary">Update</button>
																	</div>
																</div>
															</div>
														</div>
												</form>

												<script>
													$(document).ready(function () {
														// Untuk sunting
														$('#edit-data').on('show.bs.modal', function (event) {
															var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
															var modal = $(this)

															// Isi nilai pada field
															modal.find('#id_project').attr("value", div.data('id_project'));
															modal.find('#namaaplikasi').attr("value", div.data('namaaplikasi'));
															modal.find('#jenisproject').html(div.data('jenisproject'));
															modal.find('#jenisaplikasi').html(div.data('jenisaplikasi'));
															modal.find('#tahun').html(div.data('tahun'));
															modal.find('#keterangan').html(div.data('keterangan'));
															modal.find('#target').html(div.data('target'));
															modal.find('#tanggalregister').html(div.data('tanggalregister'));
															modal.find('#urf').html(div.data('urf'));
														});
													});

												</script>
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
