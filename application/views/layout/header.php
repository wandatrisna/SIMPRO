<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PROJECT MANAGEMENT SYSTEM BRKS</title>
    <link rel="icon" href="<?=base_url('assets/')?>images/brkslogo.png" type="image/x-icon">
    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="<?= base_url('assets/') ?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="<?= base_url('assets/') ?>  vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />


</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color:#B62327;">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <br>
                    <img style="width : 48px;" src="<?=base_url('assets/')?>images/logoxx.png" />
                </div>
                <div class="sidebar-brand-text mx-3"> <br><img style="width : 140px;"
                        src="<?=base_url('assets/')?>images/tes.png" /></div>
            </a>
            <br>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <br>
            <center>
                <img class="img-profile rounded-circle" style="width : 60px;"
                    src="<?= base_url('assets/images/profile/') . $user1['gambar']; ?>">
    
                <div class="user-details">
                    <font color="white">
                        <b> <span class=""><?= $user1['nama']; ?></span></b>
                        <br>
                        <span class="" id="more-details"><?= $user1['role']; ?></i></span>
                        <br>
                        <span class="" id="more-details"><?= $user1['NIK']; ?></i></span>
                        <br>
                    </font>
                </div>
                <br>
            </center>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <?php
            if ($user1['role'] == 'Superuser') { ?>
            <li class="nav-item <?=$this->uri->segment(2) == 'User' || $this->uri->segment(2) == '' ? ' active"' : '' ?>">
                <a class="nav-link collapsed" href="<?= base_url('User') ?>" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item <?=$this->uri->segment(2) == 'indexuserplanning' || $this->uri->segment(2) == 'indexuserdevelopment' ||
                                $this->uri->segment(2) == 'indexusersupport' || $this->uri->segment(2) == 'indexuserpinbag'
                                || $this->uri->segment(2) == 'tambahdev' || $this->uri->segment(2) == 'tambahpin' 
                                || $this->uri->segment(2) == 'tambahsup' || $this->uri->segment(2) == 'tambahplan'  ? ' active' : '' ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-users"></i>
                    <span>User</span>
                </a>
                <div id="collapsePages" class="collapse <?=$this->uri->segment(2) == 'indexuserplanning' || $this->uri->segment(2) == 'indexuserdevelopment' ||
                                $this->uri->segment(2) == 'indexusersupport' || $this->uri->segment(2) == 'indexuserpinbag' 
                                || $this->uri->segment(2) == 'tambahdev' || $this->uri->segment(2) == 'tambahpin' 
                                || $this->uri->segment(2) == 'tambahsup' || $this->uri->segment(2) == 'tambahplan' ? ' show' : '' ?>" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">User List :</h6>
                        <a class="collapse-item <?=$this->uri->segment(2) == 'indexuserpinbag' ? ' active' : '' ?>" href="<?= base_url('User/indexuserpinbag') ?>">Pinbag</a>
                        <a class="collapse-item <?=$this->uri->segment(2) == 'indexuserplanning' ? ' active' : '' ?>" href="<?= base_url('User/indexuserplanning') ?>">IT Planning</a>
                        <a class="collapse-item <?=$this->uri->segment(2) == 'indexuserdevelopment' ? ' active' : '' ?>" href="<?= base_url('User/indexuserdevelopment') ?>">IT Development</a>
                        <a class="collapse-item <?=$this->uri->segment(2) == 'indexusersupport' ? ' active' : '' ?>" href="<?= base_url('User/indexusersupport') ?>">IT Support</a>
                    </div>
            </li>

            <li class="nav-item <?=$this->uri->segment(2) == 'indexpmf' || $this->uri->segment(2) == 'indexapp' ||
                                $this->uri->segment(2) == 'indexproj' || $this->uri->segment(2) == 'indexdiv' ? ' active' : '' ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages1"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Parameter</span>
                </a>
                <div id="collapsePages1" class="collapse <?=$this->uri->segment(2) == 'indexpmf' || $this->uri->segment(2) == 'indexapp' ||
                                $this->uri->segment(2) == 'indexproj' || $this->uri->segment(2) == 'indexdiv' ? ' show' : '' ?>" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Parameter List :</h6>
                        <a class="collapse-item <?=$this->uri->segment(2) == 'indexdiv' ? ' active' : '' ?>" href="<?= base_url('Parameter/indexdiv') ?>">Division</a>
                        <a class="collapse-item <?=$this->uri->segment(2) == 'indexpmf' ? ' active' : '' ?>" href="<?= base_url('Parameter/indexpmf') ?>">PMF</a>
                        <a class="collapse-item <?=$this->uri->segment(2) == 'indexapp' ? ' active' : '' ?>" href="<?= base_url('Parameter/indexapp') ?>">Application</a>
                        <a class="collapse-item <?=$this->uri->segment(2) == 'indexproj' ? ' active' : '' ?>" href="<?= base_url('Parameter/indexproj') ?>">Project</a>
                    </div>
            </li>


            <?php } else if ($user1['role'] == 'Planning'){ ?>
            <li class="nav-item <?=$this->uri->segment(2) == 'indexinhouse' || $this->uri->segment(2) == 'indexeksternal' || $this->uri->segment(2) == 'sup_indexeksternal' 
            || $this->uri->segment(2) == 'sup_indexinhouse' || $this->uri->segment(2) == 'subinhouse' || $this->uri->segment(2) == 'subeksternal' || $this->uri->segment(2) == 'editinhouse'
            || $this->uri->segment(2) == 'editeksternal' || $this->uri->segment(2) == 'detailinhouse' || $this->uri->segment(2) == 'detaileksternal' 
            || $this->uri->segment(2) == 'tambaheksternal' || $this->uri->segment(2) == 'tambahinhouse' ?  ' active' : '' ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages1"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Application</span>
                </a>
                <div id="collapsePages1" class="collapse <?=$this->uri->segment(2) == 'indexinhouse' || $this->uri->segment(2) == 'indexeksternal' || $this->uri->segment(2) == 'sup_indexeksternal' 
            || $this->uri->segment(2) == 'sup_indexinhouse' || $this->uri->segment(2) == 'subinhouse' || $this->uri->segment(2) == 'subeksternal' || $this->uri->segment(2) == 'editinhouse'
            || $this->uri->segment(2) == 'editeksternal' || $this->uri->segment(2) == 'detailinhouse' || $this->uri->segment(2) == 'detaileksternal' 
            || $this->uri->segment(2) == 'tambaheksternal' || $this->uri->segment(2) == 'tambahinhouse' ? ' show' : '' ?>" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Application List :</h6>
                        <a class="collapse-item <?=$this->uri->segment(2) == 'indexinhouse' || $this->uri->segment(2) == 'sup_indexinhouse' || $this->uri->segment(2) == 'subinhouse' ||
                        $this->uri->segment(2) == 'detailinhouse' || $this->uri->segment(2) == 'tambahinhouse' || $this->uri->segment(2) == 'editinhouse'  ? 
                        'active' : '' ?>" href="<?= base_url('Aplikasi/indexinhouse') ?>">Inhouse</a>
                        
                        <a class="collapse-item <?=$this->uri->segment(2) == 'indexeksternal' || $this->uri->segment(2) == 'sup_indexeksternal' || $this->uri->segment(2) == 'subeksternal' ||
                        $this->uri->segment(2) == 'detaileksternal' || $this->uri->segment(2) == 'tambaheksternal' || $this->uri->segment(2) == 'editeksternal'
                        ? ' active' : '' ?>" href="<?= base_url('Aplikasi/indexeksternal') ?>">Eksternal</a>

                    </div>
            </li>

            <?php } else if ($user1['role'] == 'IT Support'){
            ?>
           <li class="nav-item <?=$this->uri->segment(2) == 'sup_indexinhouse' || $this->uri->segment(2) == 'sup_indexeksternal' ? ' active' : '' ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages1"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Application</span>
                </a>
                <div id="collapsePages1" class="collapse <?=$this->uri->segment(2) == 'sup_indexinhouse' || $this->uri->segment(2) == 'sup_indexeksternal' ? ' show' : '' ?>" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Application List :</h6>
                        <a class="collapse-item <?=$this->uri->segment(2) == 'sup_indexinhouse' ? ' active' : '' ?>" href="<?= base_url('Aplikasi/sup_indexinhouse') ?>">Inhouse</a>
                        <a class="collapse-item <?=$this->uri->segment(2) == 'sup_indexeksternal' ? ' active' : '' ?>" href="<?= base_url('Aplikasi/sup_indexeksternal') ?>">Eksternal</a>

                    </div>
            </li>

            <?php } ?>



            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">

                <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">

                </div>
            </li>


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow"
                    style="background-color:#ffffff;">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-noned-inline p-2  text-black "><?= $user1['nama']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="<?= base_url('assets/images/profile/') . $user1['gambar']; ?>">
                                <i class="ti-angle-down text-black"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?= base_url('Profile/') ?>">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?=base_url('Auth/')?>" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->