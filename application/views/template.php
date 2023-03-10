<!DOCTYPE html>
<html lang="en">


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>D'Tekun Parcel </title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/app.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet"
        href="<?php echo base_url(); ?>/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='<?php echo base_url(); ?>/assets/img/logo.png' />

</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar sticky">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
                                    collapse-btn"> <i data-feather="align-justify"></i></a></li>
                        <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                                <i data-feather="maximize"></i>
                            </a></li>

                    </ul>
                </div>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="<?php echo base_url(); ?>/assets
/img/user.png" class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
                        <div class="dropdown-menu dropdown-menu-right pullDown">
                            <p class="text-center">Hello
                                <?php echo $this->session->userdata('username'); ?>
                            </p>
                            <a href="<?php echo base_url('Login/login'); ?>" class="dropdown-item has-icon text-success"
                                <?php if ($this->session->userdata('username') == 'admin')
                                    echo 'hidden' ?>> <i
                                        class="fas fa-sign-in-alt"></i>
                                    Admin Login
                                </a>
                                <a href="<?php echo base_url('Login/logout');?> "
                                class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"
     
                                ></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="<?php echo base_url(); ?>"> <img alt="image" src="<?php echo base_url(); ?>/assets
/img/logo.png" class="header-logo" /> <span class="logo-name">D'Tekun</span>
                        </a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Main</li>
                        <li class="dropdown">
                            <a href="<?php echo base_url('Dashboard/index'); ?>" class="nav-link" <?php if ($this->session->userdata('username') != 'admin')
                                   echo 'hidden' ?>><i
                                        data-feather="monitor"></i><span>Dashboard</span></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="menu-toggle nav-link has-dropdown" <?php if ($this->session->userdata('username') != 'admin')
                                   echo 'hidden' ?>><i
                                        data-feather="box"></i><span>Parcel</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="<?php echo base_url('Parcel/recordParcel'); ?>">Record
                                        Parcels</a></li>
                                <li><a class="nav-link" href="<?php echo base_url('Parcel/parcelList'); ?>">Parcel
                                        List</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown" <?php if ($this->session->userdata('username') != 'admin')
                                echo 'hidden' ?>><i
                                        data-feather="dollar-sign"></i><span>Financial</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="<?php echo base_url('Finance/recordFinance'); ?>">Record
                                        Finance</a></li>
                                <li><a class="nav-link"
                                        href="<?php echo base_url('Finance/financialHistory'); ?>">Financial History</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown" <?php if ($this->session->userdata('username') == 'admin')
                                echo 'hidden' ?>><i
                                        data-feather="home"></i><span>Home</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="<?php echo base_url('Parcel/index'); ?> ">Track
                                        Parcel</a></li>

                            </ul>
                        </li>
                    </ul>
                </aside>
            </div>
            <!-- Main Content -->
            <div class="main-content">

                <?php
                // This is the main content partial
                echo $this->template->content;
                ?>
                <div class="settingSidebar">
                    <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
                    </a>
                    <div class="settingSidebar-body ps-container ps-theme-default">
                        <div class=" fade show active">
                            <div class="setting-panel-header">Setting Panel
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Select Layout</h6>
                                <div class="selectgroup layout-color w-50">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="value" value="1"
                                            class="selectgroup-input-radio select-layout" checked>
                                        <span class="selectgroup-button">Light</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="value" value="2"
                                            class="selectgroup-input-radio select-layout">
                                        <span class="selectgroup-button">Dark</span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                                <div class="selectgroup selectgroup-pills sidebar-color">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="icon-input" value="1"
                                            class="selectgroup-input select-sidebar">
                                        <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                            data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="icon-input" value="2"
                                            class="selectgroup-input select-sidebar" checked>
                                        <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                            data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Color Theme</h6>
                                <div class="theme-setting-options">
                                    <ul class="choose-theme list-unstyled mb-0">
                                        <li title="white" class="active">
                                            <div class="white"></div>
                                        </li>
                                        <li title="cyan">
                                            <div class="cyan"></div>
                                        </li>
                                        <li title="black">
                                            <div class="black"></div>
                                        </li>
                                        <li title="purple">
                                            <div class="purple"></div>
                                        </li>
                                        <li title="orange">
                                            <div class="orange"></div>
                                        </li>
                                        <li title="green">
                                            <div class="green"></div>
                                        </li>
                                        <li title="red">
                                            <div class="red"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <div class="theme-setting-options">
                                    <label class="m-b-0">
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                            id="mini_sidebar_setting">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="control-label p-l-10">Mini Sidebar</span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <div class="theme-setting-options">
                                    <label class="m-b-0">
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                            id="sticky_header_setting">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="control-label p-l-10">Sticky Header</span>
                                    </label>
                                </div>
                            </div>
                            <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                                    <i class="fas fa-undo"></i> Restore Default
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    <a href="<?php echo base_url(); ?>">D'Tekun Parcel USM</a></a>
                </div>
                <div class="footer-right">
                </div>
            </footer>
        </div>
    </div>
    <!-- General JS Scripts -->
    <script src="<?php echo base_url(); ?>/assets/js/app.min.js"></script>
    <!-- JS Libraies -->
    <script src="<?php echo base_url(); ?>/assets/bundles/apexcharts/apexcharts.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/bundles/datatables/datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/bundles/sweetalert/sweetalert.min.js"></script>

    <script
        src="<?php echo base_url(); ?>/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/bundles/jquery-ui/jquery-ui.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="<?php echo base_url(); ?>/assets/js/page/index.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/page/datatables.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/page/sweetalert.js"></script>
    <!-- Template JS File -->
    <script src="<?php echo base_url(); ?>/assets/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="<?php echo base_url(); ?>/assets/js/custom.js"></script>

    <!-- JS Libraies -->
    <script src="<?php echo base_url(); ?>/assets/bundles/chartjs/chart.min.js"></script>
    <!-- Page Specific JS File -->



</body>

<!-- blank.html  21 Nov 2019 03:54:41 GMT -->

</html>