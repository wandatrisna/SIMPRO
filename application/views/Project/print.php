
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cetak Data Proyek</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 15px;
		}

		.kop-surat {
			position: relative;
			text-align: center;
			line-height: 1.2;
			margin-bottom: 10px;
			/* Reduced margin-bottom for closer alignment */
		}

		.kop-surat h1 {
			margin: 0;
			font-size: 20px;
		}

		.kop-surat p {
			margin: 0;
			font-size: 12px;
		}

		.kop-surat img {
			width: 150px;
			/* Adjusted the width for larger logo */
			height: auto;
			position: absolute;
			top: 20px;
			/* Adjust the top position to vertically align */
		}


		.kop-surat img.right {
			right: 50px;
		}

		.garis {
			border-top: 1px solid black;
			margin: 10px 0;
			/* Reduced margin for closer alignment */
		}

		.judul {
			text-align: center;
			font-size: 18px;
			font-weight: bold;
			margin: 10px 0;
			/* Reduced margin for closer alignment */
		}

		table {
			width: 100%;
			border-collapse: collapse;
		}

		table,
		th,
		td {
			border: 1px solid black;
		}

		th,
		td {
			padding: 8px;
			text-align: center;
		}
	</style>
</head>

<body>
	<div class="kop-surat">
		<img src="<?= base_url('assets/images/Logo_BRK_Syariah.png'); ?>" class="right" width="100">
		<h1>PT Bank Riau Kepri Syariah (Perseroda)</h1>
		<h1>Divisi Teknologi & Sistem Informasi</h1>
		<p>Menara Dang Merdu PT Bank Riau Kepri Syariah (Perseroda)</p>
		<p>Kantor Pusat: Jl. Jend. Sudirman No. 462. Pekanbaru Riau 28116</p>
		<p>Telp: (0761) 47070. Faks. (0761) 42389.</p>
	</div>
	<div class="garis"></div>
	<br>
	<div class="judul">Laporan Proyek Divisi TSI </div>
	<table>
		<thead>
			<tr class="table-warning">
				<th width="5px">No</th>
				<th>Nama Aplikasi</th>
				<th>Persentase</th>
				<th>Jenis proyek</th>
				<th>jenis aplikasi</th>
				<th>tahun </th>
				<!-- <th>tanggal dibuat</th> -->
				<th>tanggal mulai</th>
				<th>target selesai</th>
				<th>status</th>
				<th>keterangan </th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1; ?>
			<?php foreach ($project as $pro): ?>
				<tr>
					<td><?= $i; ?>.</td>
					<td><?= $pro['namaaplikasi']; ?></td>
					<td>
						<?php if (
							$pro['progresbrd'] != null || $pro['bobotbrd'] != null ||
							$pro['bobotfsd'] != null || $pro['bobotsit'] != null ||
							$pro['bobotuat'] != null || $pro['bobotmigrasi'] != null
						) {
							$hasil = $pro['progresbrd'];

							if ($pro['progresbrd'] == 0) {
								$brd = 0;
							} else {
								$brd = $pro['progresbrd'] / $pro['bobotbrd'] * 100;
							}

							if ($pro['progresdev'] == 0) {
								$dev = 0;
							} else {
								$dev = $pro['progresdev'] / $pro['bobotdev'] * 100;
							}

							if ($pro['progresfsd'] == 0) {
								$fsd = 0;
							} else {
								$fsd = $pro['progresfsd'] / $pro['bobotfsd'] * 100;
							}

							if ($pro['progressit'] == 0) {
								$sit = 0;
							} else {
								$sit = $pro['progressit'] / $pro['bobotsit'] * 100;
							}

							if ($pro['progresuat'] == 0) {
								$uat = 0;
							} else {
								$uat = $pro['progresuat'] / $pro['bobotuat'] * 100;
							}

							if ($pro['progresmigrasi'] == 0) {
								$migrasi = 0;
							} else {
								$migrasi = $pro['progresmigrasi'] / $pro['bobotmigrasi'] * 100;
							}


							?>
							<?php $total = $brd + $fsd + $sit + $uat + $dev + $migrasi;
							$persen = ($total / 6); ?>
							<?php if ($persen == 100) { ?>

								<a class="badge badge-success" style="pointer-events: none"><?php echo floor($persen); ?>
									%</a>

							<?php } else if ($persen <= 99) { ?>
									<a class="badge badge-warning" style="pointer-events: none"><?php echo floor($persen); ?>
										%</a>

								<?php
								} ?>

						<?php } else {
							echo $total = 0;
						}


						?>
					</td>
					<td><?= $pro['namajenisproject']; ?></td>
					<td><?= $pro['namajenisaplikasi']; ?></td>
					<td><?= $pro['tahun']; ?></td>
					<!-- <td><?= $pro['date_created']; ?></td> -->
					<td><?= $pro['tanggalregister']; ?></td>
					<td><?= $pro['target']; ?></td>
					<td><?= $pro['status']; ?></td>
					<td><?= $pro['keterangan']; ?></td>
					
				</tr>
				<?php $i++; ?>
			<?php endforeach; ?>
		</tbody>
	</table>
	<script type="text/javascript">
		window.print();
	</script>
</body>

</html>