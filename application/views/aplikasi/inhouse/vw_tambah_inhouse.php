<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>New Application Form</title>
	<!-- Load jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function () {
			$('#role').change(function () {
				var role = $(this).val();
				// alert(role);
				var selectedRole = $(this).val(); // Ubah 'department' menjadi 'role'
				if (selectedRole === "Development" || selectedRole === "IT Support") {
					$.ajax({
						url: '<?php echo base_url("Inhouse/get_user"); ?>', // Sesuaikan dengan nama controller Anda
						type: 'post',
						data: {
							role: selectedRole
						}, // Ubah 'department' menjadi 'role'
						dataType: 'json',
						success: function (response) {
							var len = response.length;
							$("#pic_migrasi_in").empty();
							for (var i = 0; i < len; i++) {
								var id = response[i]['id_user'];
								var nama = response[i]['nama']; // Sesuaikan dengan nama kolom di tabel user
								$("#pic_migrasi_in").append("<option value='" + id + "'>" + nama + "</option>");
							}
						}
					});
				}
			});
			$(document).on('change', '.row .rile', function () {
				var id = $(this).val();
				var parentRow = $(this).closest('.row'); // Dapatkan elemen .row terdekat
				var stasiunDropdown = parentRow.find('.stasiun'); // Cari dropdown stasiun di dalam baris tersebut

				data = {
					[`${csrf}`]: csrf_hash,
					id: $(this).val()
				}
				console.log($(this).val());
				ajaxRequst({
					link: URI.stasiun,
					data: data,
					callback: function r(object_origin, resp) {
						if (resp.status) {
							data = resp.data

							var temp_html = '<option value="">Pilih Stasiun</option>';
							for (i = 0; i < data.length; i++) {
								temp_html += `<option value="${data[i].id_stasiun}">${data[i].nama_stasiun}</option>`;
							}
							stasiunDropdown.html(temp_html);
						}
					}
				})
			})
		});

	</script>
</head>

<body>

	<!-- Begin Page Content -->
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<a href="<?= base_url() ?>Inhouse" class="btn btn-info">&larr; Kembali</a>
				<br><br>
				<div class="card">
					<div class="card-header justify-content-center">
						New Application Form
					</div>
					<div class="card-body">
						<form action="" method="POST">
							<div class="form-group">

								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Number</label>
									<div class="col-sm-10">
										<input type="nomor_in" name="nomor_in" class="form-control form-control-user"
											value="<?php echo $nomor; ?>" id="nomor_in" readonly>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Document Type</label>
									<div class="col-sm-10">
										<select name="jenis_dokumen" class="form-control" id="jenis_dokumen">
											<option value="">Select Document Type..</option>
											<?php foreach ($jenisdok as $p): ?>
												<option value="<?= $p['id_jenisdokumen']; ?>"><?= $p['jenisdokumen']; ?>
												</option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Application Name</label>
									<div class="col-sm-10">
										<input type="text" name="nama_in" class="form-control" id="nama_in"
											placeholder="Insert Application Name">
										<?= form_error('nama_in', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Version</label>
									<div class="col-sm-10">
										<input type="text" name="versi_in" class="form-control" id="versi_in"
											placeholder="Insert Version">
										<?= form_error('versi_in', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-sm-2 col-form-label">PMF Submission Date</label>
									<div class="col-sm-10">
										<input type="date" name="tgl_penyerahan_pmf" class="form-control"
											id="tgl_penyerahan_pmf">
										<?= form_error('tgl_penyerahan_pmf', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Migration Date</label>
									<div class="col-sm-10">
										<input type="date" name="tgl_migrasi_prod" class="form-control"
											id="tgl_migrasi_prod" readonly>
										<?= form_error('tgl_migrasi_prod', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Description</label>
									<div class="col-sm-10">
										<textarea name="keterangan_in" class="form-control" id="keterangan_in"
											placeholder="Insert Description..."></textarea>
										<?= form_error('keterangan_in', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-sm-2 col-form-label">PIC (Planning)</label>
									<div class="col-sm-10">
										<input type="text" name="pic_plan_in" class="form-control" id="pic_plan_in"
											placeholder="Insert PIC (Planning)">
										<?= form_error('pic_plan_in', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-sm-2 col-form-label">PIC (Development)</label>
									<div class="col-sm-10">
										<input type="text" name="pic_dev_in" class="form-control" id="pic_dev_in"
											placeholder="Insert PIC (Development)">
										<?= form_error('pic_dev_in', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
								</div>

								<!-- Tujuan Migrasi -->
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Tujuan Migrasi</label>
									<div class="col-sm-10">
										<select name="role" class="form-control" id="role">
											<option value="">Select Tujuan Migrasi..</option>
											<option value="Development">IT Development</option>
											<option value="IT Support">IT Support</option>
											<!-- Add other options if needed -->
										</select>
									</div>
								</div>

								<!-- PIC Migrasi -->
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">PIC Migrasi</label>
									<div class="col-sm-10">
										<select name="pic_migrasi_in" class="form-control" id="pic_migrasi_in">
											<!-- Options will be loaded dynamically based on selected Tujuan Migrasi -->
										</select>
									</div>
								</div>


								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Owner</label>
									<div class="col-sm-10">
										<select name="owner_in" class="form-control" id="owner_in">
											<option value="">Select Owner</option>
											<?php foreach ($namadivisi as $p): ?>
												<option value="<?= $p['id_divisi']; ?>"><?= $p['namadivisi']; ?></option>
											<?php endforeach; ?>
										</select>
										<?= form_error('owner_in', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Migration Status</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" placeholder="Waiting for IT Support..."
											readonly>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Migration Note</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" placeholder="Waiting for IT Support..."
											readonly>
									</div>
								</div>

								<input type="hidden" name="hapus_in" class="form-control" id="hapus_in" value="1">


								<div class="col-md-12">
									<button type="submit" name="tambah" class="btn btn-primary float-right">Save
									</button>
								</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div><br>
	<br>
	</div>