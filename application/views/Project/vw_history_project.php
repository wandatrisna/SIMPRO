<div class="col-md-12">
<div class="card shadow mb-4">
    <div class="card-header py-3">
       
        <h6 class="m-0 font-weight-bold text-primary">TABEL PROJECT SELESAI</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
												<tr class="table-warning">
												<th width="5px">Nomor</th>
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
													<td><?php ?></td>
													<td><?= $pro['keterangan']; ?></td>
													<td>
														<a href="<?= base_url('Project/detail/'). $pro['id_project']; ?>"
															class="badge badge-warning">Detail</a>
															<?php if ($user1['role'] == 'Planning') {   ?> 
														<a href="<?= base_url('Project/hapusproject/'). $pro['id_project']; ?> "
															class="badge badge-danger"
															onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');"
															class="ik ik-trash-2 text-red">Hapus</a>
															<?php } ?>
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
</div>