<div class="container-fluid">
	<!-- Content Row -->
	<div class="row">

		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-4 col-md-6 mb-4" onclick="location.href='<?= base_url('Project/undone/')?>';">
			<div class="card border-left-warning shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
								ONGOING</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">
								<?= $progrespro ?></div>
						</div>
						<div class="col-auto">
                                            <i class="fas fa-edit fa-2x text-gray-300"></i>
                                        </div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-4 col-md-6 mb-4" onclick="location.href='<?= base_url('Project/done/')?>';">
			<div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
								DONE</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $donepro ?>
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-check fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-4 col-md-6 mb-4" onclick="location.href='<?= base_url('Project/')?>';">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
								ALL PROJECT</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $allpro ?>
							</div>
						</div>
						<div class="col-auto">
                                            <i class="fas fa-list-alt fa-2x text-gray-300"></i>
                                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-12">
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">DONE PROJECT</h6>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr class="table-warning">
							<th width="5px">Number</th>
							<th>Application Name</th>
							<th>Progress</th>
							<th>Status</th>
							<th>Note</th>
							<th>Action</th>
							</tr>
						</thead>
						<tbody>
												<?php $i =1; ?>
												<?php foreach ($project as $pro) : ?>
												<tr>
													<td><?= $i; ?>.</td>
													<td><?= $pro['namaaplikasi']; ?></td>
													<td>
														<?php if($pro['progresbrd'] != null || $pro['bobotbrd'] != null ||
														 $pro['bobotfsd']  != null || $pro['bobotsit']  != null ||
														 $pro['bobotuat']  != null || $pro['bobotmigrasi']  != null){
															$hasil= $pro['progresbrd'];

															if ($pro['progresbrd'] == 0) {
																$brd = 0;
															} else { 
																$brd=$pro['progresbrd']/$pro['bobotbrd']*100;
															}

															if ($pro['progresdev'] == 0) {
																$dev = 0;
															} else { 
																$dev=$pro['progresdev']/$pro['bobotdev']*100;
															}

															if ($pro['progresfsd'] == 0) {
																$fsd = 0;
															} else { 
																$fsd=$pro['progresfsd']/$pro['bobotfsd']*100;
															}

															if ($pro['progressit'] == 0) {
																$sit = 0;
															} else { 
																$sit=$pro['progressit']/$pro['bobotsit']*100;
															}

															if ($pro['progresuat'] == 0) {
																$uat = 0;
															} else { 
																$uat=$pro['progresuat']/$pro['bobotuat']*100;
															}
															
															if ($pro['progresmigrasi'] == 0) {
																$migrasi = 0;
															} else { 
																$migrasi=$pro['progresmigrasi']/$pro['bobotmigrasi']*100;
															}

															
														$total=$brd+$fsd+$sit+$uat+$dev+$migrasi;
														echo floor($total/6);	
														// if ($hasil==0){
														// 	echo $totalakhir=0  ;
														// }else{
														// 	echo floor($total/6);
														// }
														 
													}else{
														echo $total=0; 
													}
													
														 
														?>
														%</td>
													<td><?= $pro['status']; ?></td>
													<td><?= $pro['keterangan']; ?></td>
													<td>
														<a href="<?= base_url('Project/detail/'). $pro['id_project']; ?>"
															class="badge badge-warning">Detail</a>
														<a href="<?= base_url('Project/hapusproject/'). $pro['id_project']; ?> "
															class="badge badge-danger"
															onclick="return confirm('Are you sure want to delete this?');"
															class="ik ik-trash-2 text-red">Delete</a>
													</td>
												</tr>
												<?php $i++; ?>
												<?php endforeach; ?>
											</tbody>
											</table>
										</div>
									</div>
								</div>
								</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
