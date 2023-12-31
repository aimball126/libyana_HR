<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title><?php echo e(config("global.name")); ?> - <?php echo $__env->yieldContent("title"); ?></title>
    <meta content="MENASA ERP System By Menasa Company" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="<?php echo e(asset('/assets/images/menasa-favicon.png')); ?>">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!-- Styles -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('/assets/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('/assets/css/metismenu.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('/assets/css/icons.css')); ?>" rel="stylesheet" type="text/css">

    <?php echo $__env->yieldContent('styles'); ?>
    <link href="<?php echo e(asset('/assets/css/style.css')); ?>" rel="stylesheet" type="text/css">
    <?php echo $__env->make('layouts.customize', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="<?php echo e(url('/')); ?>" class="logo">
                    <span class="logo-light">
                        <!-- <img src="<?php echo e(config('global.logo')); ?>" alt="" width="140" /> -->
                        <img src="<?php echo e(asset('/assets/images/logo.png')); ?>" width="120" height="85"/>
                    </span>

                    <span class="logo-sm">
                        <img src="<?php echo e(asset('/assets/images/logo.png')); ?>" width="40" />
                    </span>
                </a>
            </div>



            <nav class="navbar-custom">
                <ul class="navbar-right list-inline float-right mb-0">



                    <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                        <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                            <i class="mdi mdi-arrow-expand-all noti-icon"></i>
                        </a>
                    </li>



                    <li class="dropdown notification-list list-inline-item">
                        <div class="dropdown notification-list nav-pro-img">
                            <a class="dropdown-toggle nav-link arrow-none nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="mdi mdi-account-circle" style="font-size: 20px !important;"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                                <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle"></i> حسابي</a>
                                <a class="dropdown-item d-block" href="#"><i class="mdi mdi-settings"></i> الإعدادات</a>
                                <div class="dropdown-divider"></div>
                                <form action="<?php echo e(url('/logout')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <button class="dropdown-item text-danger" type="submit"><i class="mdi mdi-power text-danger"></i> تسجيل الخروج</button>
                                </form>
                            </div>
                        </div>
                    </li>

                </ul>
                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-effect">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>

                </ul>
            </nav>


        </div>
        <!-- Top Bar End -->
br

        <?php echo $__env->yieldContent("Sidebar"); ?>


        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title-box">
                        <div class="row align-items-center">

                            <div class="col-sm-6 text-right">
                                <h4 class="page-title"><?php echo $__env->yieldContent("title"); ?></h4>

                            </div>
                            <div class="col-sm-6" dir="ltr">
                                <ol class="breadcrumb float-right ">
                                    <li class="breadcrumb-item btn-group" dir="rtl">
                                        <?php echo $__env->yieldContent("buttons"); ?>
                                    </li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">لوحة التحكم</a></li>
                                    <?php echo $__env->yieldContent("breadcrumb"); ?>
                                </ol>
                            </div>

                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end page-title -->
                    <div id="app">
                        <div class="my-2"> <?php echo $__env->make('layouts.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
                        <?php echo $__env->yieldContent("content"); ?>
                    </div>

                </div>
                <!-- container-fluid -->

            </div>
            <!-- content -->

            <footer class="footer">
                جميع الحقوق محفوظة © | DMI information technology (Nourdeen) <?php echo e(date('Y')); ?>  <?php echo e(config('global.name')); ?>

            </footer>

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->

    <script src="<?php echo e(asset('/assets/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/app.js')); ?>" ></script>
    <script src="<?php echo e(asset('/assets/js/metismenu.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/js/jquery.slimscroll.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/js/waves.min.js')); ?>"></script>


    <script src="<?php echo e(asset('/assets/pages/dashboard.init.js')); ?>"></script>

    <!-- App js -->
    <script src="<?php echo e(asset('/assets/js/app.js')); ?>"></script>

    <?php echo $__env->yieldContent('scripts'); ?>
    <!-- Scripts -->

</body>

</html>
<?php /**PATH D:\libyana\resources\views\layouts\app.blade.php ENDPATH**/ ?>