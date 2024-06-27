<div class="col-lg-12">
    <!-- Default Card Example -->
    <div class="card mb-12">
        <!-- < class="card shadow mb-12"> -->
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
                                    <br>
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
                    <!-- Approach -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold">Pegawai</h6>
                        </div>

                        <div class="card-body">
                            <?php foreach ($user as $us): ?>
                            <tr>
                                <td><img src="<?= base_url('assets/images/profile/') . $us['gambar']; ?>"
                                        style="width : 50px;" class="img-thumbnail">
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <br>
                            <br>
                            <a href="<?= base_url('User') ?>">Lihat Seluruh Pegawai &rarr;</a>
                        </div>
                    </div>
                </div>


                <?php } else if ($this->session->userdata('role') == 'Development' || $this->session->userdata('role') == 'Planning' || $this->session->userdata('role') == 'Support') { ?>
                <div class="row">
                    <div class="col-xl-4 col-md-6 mb-4" onclick="location.href='<?= base_url('Project/undone/') ?>';">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Sedang Berlangsung</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?= $progrespro ?>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-edit fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-4" onclick="location.href='<?= base_url('Project/done/') ?>';">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Selesai</div>
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

                    <div class="col-xl-4 col-md-6 mb-4" onclick="location.href='<?= base_url('Project/') ?>';">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            SELURUH PROYEK</div>
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
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Aplikasi</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-pie pt-4 pb-2">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div>
                            <canvas id="aplikasi" width="560" height="250"
                                style="display: block; height: 100px; width: 448px;"
                                class="chartjs-render-monitor"></canvas>
                        </div>

                    </div>
                </div>
            </div>
            <?php } else if ($this->session->userdata('role') == 'Pinbag') { ?>
            <div class="row">
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Pinbag</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pinbag ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-user fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        IT Planning</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $planning ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-user fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        IT Development</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $development ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-user fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pending Requests Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        IT Support</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $support ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-user fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6 mb-4" onclick="location.href='<?= base_url('Project/undone/') ?>';">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Sedang Berlangsung</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?= $progrespro ?>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-edit fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4" onclick="location.href='<?= base_url('Project/done/') ?>';">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Selesai</div>
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

                <div class="col-xl-3 col-md-6 mb-4" onclick="location.href='<?= base_url('Project/') ?>';">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        SELURUH PROYEK </div>
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
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Parameter</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-pie pt-4 pb-2">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Aplikasi</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-pie pt-4 pb-2">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas id="aplikasi"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <div class="col-lg-6 mb-4">
                        <a href="<?= base_url('Project/index') ?>">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xl font-weight-bold text-success text-uppercase mb-1">
                                                PROGRES PROYEK</div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h1 mb-0 mr-3 font-weight-bold text-gray-800">
                                                        <?= round(($done / $allpro) * 100) ?>%
                                                    </div>
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
                                        </div>
                                    </a>
                                    <a href="<?= base_url('User/indexusersupport') ?>">
                                        <div class="h6 mb-0  text-gray-800"><?= $support ?> IT SUPPORT USER
                                        </div>
                                    </a>
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
                            <?php foreach ($user as $us): ?>
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

                <script>
                window.onload = function() {
                    var canvas = document.getElementById('myChart');
                    canvas.style.width = '300px';
                    canvas.style.height = '250px';
                }
                </script>


                <?php } else { ?>
                DASHBOARD TIDAK DITEMUKAN
                <?php } ?>


                <!-- Content Column -->

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
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


    //dashboard development
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