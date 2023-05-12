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
										<h4>Data List Proyek</h4><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="page-header-breadcrumb">
									<ul class="breadcrumb-title">
										<li class="breadcrumb-item">
											<a href="<?= base_url() ?>User">
												<i class="icofont icofont-home"></i>
											</a>
										</li>
										<li class="breadcrumb-item"><a
												href="<?= base_url() ?>User/indexuserplanning">User
												Planning</a>
										</li>
									</ul>
								</div>
							</div>
						</div>


						<div class="page-body">
							<div class="card">
								<div class="card-header">
									<h5>Menampilkan seluruh data list proyek</h5>
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
								<form action="<?= base_url('Project/indexsearch/') ?>" method="get">
									<div class="col-md-6 col-xl-5">
										<div class="input-group">
											<input type="text" class="form-control" name="keyword"
												placeholder="Masukan Kata Kunci (Nama Aplikasi)">
											<span class="input-group-btn">
												<button class="btn btn-default" type="submit">Cari</button>
												<button class="btn btn-info"
													href="<?= base_url() ?>Project/indexlistproject"><i
														class="ti-reload"></i></button>
											</span>
										</div>
									</div>
									<div class="col-md-12">
										<?php if(!empty($keyword)){ ?>
										<p style="color:orange"><b>Menampilkan data dengan kata kunci :
												"<?= $keyword; ?>"</b></p>
										<?php } ?>
									</div>
								</form>
								<div class="card-block table-border-style">
									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr class="table-warning">
													<th>Nomor</th>
													<th>Nama Aplikasi</th>
													<th>Progres</th>
													<th>Status</th>
													<th>Keterangan</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
												<?php $i =1; ?>
												<?php foreach ($project as $pro) : ?>
												<tr>
													<td><?= $i; ?>.</td>
													<td><?= $pro['namaaplikasi']; ?></td>

													<?php $id = $pro['id_project'] ?>
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

															// $brd=$pro['progresbrd']/$pro['bobotbrd']*100;
															// $fsd=$pro['progresfsd']/$pro['bobotfsd']*100;
															// $sit=$pro['progressit']/$pro['bobotsit']*100;
															// $uat=$pro['progresuat']/$pro['bobotuat']*100;
															// $migrasi=$pro['progresmigrasi']/$pro['bobotmigrasi']*100;

															$development=0;
															// $jumlahkegitan=0;
															$jumlahkegitan= count($dev);
															
															foreach($dev as $item_dev){
																if($pro['id_project'] == $item_dev['project_id']){
																	if($item_dev['bobot']!= 0 && $item_dev['progres'] != 0){
																		$development+=$item_dev['progres']/$item_dev['bobot']*100;
																		
																	}else{
																		$development+=0;
																	}
																	// $jumlahkegitan++;
																}
															$totaldev=$development/$jumlahkegitan;
														
															$total=$brd+$fsd+$sit+$uat+$migrasi+$totaldev;	
														}

														if ($hasil==0){
															echo $totalakhir=0  ;
														}else{
															echo floor($total/6);
														}
														 
													}else{
														echo $total=0; 
													}
													
														 
														?>
													%</td>
													<td></td>
													<td><?= $pro['keterangan']; ?></td>
													<td>
														<a href="<?= base_url('Project/detail/'). $pro['id_project']; ?>"
															class="badge badge-warning">Detail</a>
														<a href="<?= base_url('Project/hapusproject/'). $pro['id_project']; ?> "
															class="badge badge-danger"
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
	</div>
