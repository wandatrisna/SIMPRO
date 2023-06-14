<div class="col-lg-12">

	<!-- Default Card Example -->
	<div class="card mb-12">
		<div class="card shadow mb-12">
			<div class="card-header">
				<h6 class="m-0 font-weight-bold text-primary">Welcome Back, <?= $user1['nama']; ?>!</h6>
			</div>
			<div class="card-body">

				<div class="row">

					<div class="col-lg-6 mb-4">
						<div class="card shadow mb-4">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
											ALL APPLICATION</div>
										<div class="h1 mb-0 font-weight-bold text-gray-800">
											<?= $count1 + $count2 ?>
										</div>
										<a href="<?= base_url('Inhouse') ?>">
											<div class="h6 mb-0  text-gray-800"><?= $count1 ?> INTERNAL APPLICATION
											</div>
										</a>
										<a href="<?= base_url('Eksternal') ?>">
											<div class="h6 mb-0  text-gray-800"><?= $count2 ?> EXTERNAL APPLICATION
											</div>
										</a>


									</div>

									<div class="col-auto">
										<i class="fas fa-list fa-4x text-gray-300"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Content Column -->
					<div class="col-lg-6 mb-4">
						<a href="<?= base_url('Project/index') ?>">
							<div class="card shadow mb-4">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xl font-weight-bold text-success text-uppercase mb-1">
												PROJECT PROGRESS</div>
											<div class="row no-gutters align-items-center">
												<div class="col-auto">
													<div class="h1 mb-0 mr-3 font-weight-bold text-gray-800">
														<?= round(($done / $allpro) * 100)?>%</div>
												</div>
												<div class="col">
													<div class="progress progress-sm mr-2">
														<div class="progress-bar bg-success" role="progressbar"
															style="width: <?= round(($done / $allpro) * 100) ?>%"
															aria-valuenow="<?= round(($done / $allpro) * 100) ?>"
															aria-valuemin="0" aria-valuemax="100"></div>

													</div>
												</div>
											</div>
											<div class="h6 mb-0  text-gray-800"><?= $allpro ?> ALL PROJECT
											</div>
											<div class="h6 mb-0  text-gray-800"><?= $done ?> LIVE PROJECT</div>
										</div>
										<div class="col-auto">
											<i class="fas fa-clipboard-list fa-4x text-gray-300"></i>
										</div>
									</div>
								</div>
						</a>
					</div>
				</div>

				<div class="col-lg-6 mb-4">
					<div class="card shadow mb-4">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">

									<div class="text-xl font-weight-bold text-warning text-uppercase mb-1">
										Active Users</div>

									<div class="h1 mb-0 font-weight-bold text-gray-800"><?= $count ?></div>
									<a href="<?= base_url('User/indexuserpinbag') ?>">
										<div class="h6 mb-0  text-gray-800"><?= $pinbag ?> PINBAG USER</div>
									</a>
									<a href="<?= base_url('User/indexuserplanning') ?>">
										<div class="h6 mb-0  text-gray-800"><?= $planning ?> IT PLANNING USER
										</div>
									</a>
									<a href="<?= base_url('User/indexuserdevelopment') ?>">
									<div class="h6 mb-0  text-gray-800"><?= $development ?> IT DEVELOPMENT
										USER
									</div></a>
									<a href="<?= base_url('User/indexusersupport') ?>">
									<div class="h6 mb-0  text-gray-800"><?= $support ?> IT SUPPORT USER
									</div></a>
								</div>
								<div class="col-auto">
									<i class="fas fa-user fa-4x text-gray-300"></i>
								</div>

							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6 mb-4">
					<!-- Approach -->
					<div class="card shadow mb-4">
						<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
							<h6 class="m-0 font-weight-bold">Members</h6>
						</div>

						<div class="card-body">
							<?php foreach ($user as $us) : ?>
							<tr>
								<td><img src="<?= base_url('assets/images/profile/') . $us['gambar']; ?>"
										style="width : 50px;" class="img-thumbnail">
								</td>

							</tr>
							<?php endforeach; ?>
							<br>
							<br>
							<a href="<?= base_url('User') ?>">View All Member &rarr;</a>
						</div>
					</div>

				</div>
			</div>

		</div>
	</div>
</div>
</div>
<br>
</div>
