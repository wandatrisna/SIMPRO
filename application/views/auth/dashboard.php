<div class="col-lg-12">
    <!-- Default Card Example -->
    <div class="card mb-12 shadow">
        <!-- Tambahkan kelas 'shadow' di sini -->
        <div class="card" style="background-color: #ffffff;">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">Selamat datang kembali, <?= $user1['nama']; ?>!</h6>
            </div>
            <div class="card-body">
                <!-- SUPER USER -->
                <?php if ($this->session->userdata('role') == 'Superuser') { ?>
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold">Jumlah Pegawai</h6>
                            </div>
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="h1 mb-0 font-weight-bold text-gray-800"><?= $count ?> Pegawai</div>
                                        <div class="h6 mb-0  text-gray-800"><?= $pinbag ?> Pimpinan Bagian</div>
                                        <div class="h6 mb-0  text-gray-800"><?= $planning ?> Subdivisi IT Planning</div>
                                        <div class="h6 mb-0  text-gray-800"><?= $development ?> Subdivisi IT Development
                                        </div>
                                        <div class="h6 mb-0  text-gray-800"><?= $support ?> Subdivisi IT Support</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user fa-4x text-gray-400"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold">Pegawai</h6>
                            </div>
                            <div class="card-body">
                                <?php foreach ($user as $us): ?>
                                <tr>
                                    <td><img src="<?= base_url('assets/images/profile/') . $us['gambar']; ?>"
                                            style="width : 50px;" class="img-thumbnail"></td>
                                </tr>
                                <?php endforeach; ?>
                                <br>
                                <br>
                                <br>
                                <a href="<?= base_url('User') ?>">Lihat Seluruh Pegawai &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>

                <?php } else if ($this->session->userdata('role') == 'Development' || 
                       $this->session->userdata('role') == 'Planning' ||
                       $this->session->userdata('role') == 'Support') { ?>
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Proyek TSI</h6>
                            </div>
                            <div class="card-body">
                                <div class="chart-pie pt-4 pb-2">
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Aplikasi</h6>
                            </div>
                            <div class="card-body">
                                <div class="chart-pie pt-4 pb-2">
                                    <canvas id="aplikasi"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold">Jumlah Pegawai</h6>
                            </div>
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="h1 mb-0 font-weight-bold text-gray-800"><?= $count ?> Pegawai</div>

                                        <div class="h6 mb-0  text-gray-800"><?= $pinbag ?> Pimpinan Bagian</div>
                                        <div class="h6 mb-0  text-gray-800"><?= $planning ?> Subdivisi IT Planning</div>
                                        <div class="h6 mb-0  text-gray-800"><?= $development ?> Subdivisi IT Development
                                        </div>
                                        <div class="h6 mb-0  text-gray-800"><?= $support ?> Subdivisi IT Support</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user fa-4x text-gray-400"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold">Pegawai</h6>
                            </div>
                            <div class="card-body">
                                <?php foreach ($user as $us): ?>
                                <tr>
                                    <td><img src="<?= base_url('assets/images/profile/') . $us['gambar']; ?>"
                                            style="width : 50px;" class="img-thumbnail"></td>
                                </tr>
                                <?php endforeach; ?>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>

                    <?php } else if ($this->session->userdata('role') == 'Pinbag') { ?>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="card shadow mb-4">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Proyek TSI</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="card shadow mb-4">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Aplikasi</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="aplikasi"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold">Jumlah Pegawai</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="h1 mb-0 font-weight-bold text-gray-800"><?= $count ?> Pegawai
                                            </div>
                                            <br>
                                            <div class="h6 mb-0  text-gray-800"><?= $pinbag ?> Pimpinan Bagian</div>
                                            <div class="h6 mb-0  text-gray-800"><?= $planning ?> Subdivisi IT Planning
                                            </div>
                                            <div class="h6 mb-0  text-gray-800"><?= $development ?> Subdivisi IT
                                                Development</div>
                                            <div class="h6 mb-0  text-gray-800"><?= $support ?> Subdivisi IT Support
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-4x text-gray-400"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold">Pegawai</h6>
                                </div>
                                <div class="card-body">
                                    <?php foreach ($user as $us): ?>
                                    <tr>
                                        <td><img src="<?= base_url('assets/images/profile/') . $us['gambar']; ?>"
                                                style="width : 50px;" class="img-thumbnail"></td>
                                    </tr>
                                    <?php endforeach; ?>
                                    <br>
                                    <br>
                                    <a href="<?= base_url('User') ?>">Lihat Seluruh Pegawai &rarr;</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php } else { ?>
                    DASHBOARD TIDAK DITEMUKAN
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
// Chart untuk Proyek TSI
const ctx = document.getElementById('myChart');
let progrespro = <?= $progrespro ?>;
let donepro = <?= $donepro ?>;

new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Project Sedang Berlangsung', 'Project Selesai'],
        datasets: [{
            label: '',
            data: [progrespro, donepro],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

// Chart untuk Aplikasi
const ctx1 = document.getElementById('aplikasi');
let inhouse = <?= $inhouse ?>;
let eksternal = <?= $eksternal ?>;

new Chart(ctx1, {
    type: 'bar',
    data: {
        labels: ['Inhouse', 'Eksternal'],
        datasets: [{
            label: '',
            data: [inhouse, eksternal],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>