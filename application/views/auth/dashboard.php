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

                                        <div class="h6 mb-0  text-gray-800"><?= $count1 ?> INTERNAL APPLICATION
                                        </div>

                                        <div class="h6 mb-0  text-gray-800"><?= $count2 ?> EXTERNAL APPLICATION
                                        </div>


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
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xl font-weight-bold text-success text-uppercase mb-1">
                                            PROJECT PROGRESS</div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="h1 mb-0 mr-3 font-weight-bold text-gray-800">
                                                    <?= $progress / $done ?>%</div>
                                            </div>
                                            <div class="col">
                                                <div class="progress progress-sm mr-2">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: <?= $progress / $done ?>%"
                                                        aria-valuenow="<?= $progress / $done ?>" aria-valuemin="0"
                                                        aria-valuemax="100"></div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="h6 mb-0  text-gray-800"><?= $progress ?> ONGOING PROJECT
                                        </div>
                                        <div class="h6 mb-0  text-gray-800"><?= $done ?> LIVE PROJECT</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-clipboard-list fa-4x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
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
                                        <div class="h6 mb-0  text-gray-800"><?= $pinbag ?> PINBAG USER</div>
                                        <div class="h6 mb-0  text-gray-800"><?= $planning ?> IT PLANNING USER
                                        </div>
                                        <div class="h6 mb-0  text-gray-800"><?= $development ?> IT DEVELOPMENT
                                            USER
                                        </div>
                                        <div class="h6 mb-0  text-gray-800"><?= $support ?> IT SUPPORT USER
                                        </div>
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
                                <a href="<?= base_url('User/dash1') ?>">View All Member &rarr;</a>
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
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito',
    '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ["Direct", "Referral", "Social"],
        datasets: [{
            data: [55, 30, 15],
            backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
            hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
            hoverBorderColor: "rgba(234, 236, 244, 1)",
        }],
    },
    options: {
        maintainAspectRatio: false,
        tooltips: {
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            borderColor: '#dddfeb',
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 10,
        },
        legend: {
            display: false
        },
        cutoutPercentage: 80,
    },
});
</script>