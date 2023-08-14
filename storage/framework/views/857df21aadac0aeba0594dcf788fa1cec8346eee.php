<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>ecommercegroup- <?php echo $__env->yieldContent("title"); ?></title>
    <meta content="Menasa Erp" name="description" />
    <meta content="Themesdesign" name="Menasa Team" />
    <link rel="shortcut icon" href="<?php echo e(asset('/assets/images/menasa-favicon.png')); ?>">

    <link href="<?php echo e(asset('/assets/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('/assets/css/metismenu.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('/css/app.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('/assets/css/icons.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('/assets/css/style.css')); ?>" rel="stylesheet" type="text/css">
    <?php echo $__env->make('layouts.customize', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>

    <!-- Begin page -->
    <div class="accountbg"></div>
    <div id="app">
        
        <?php echo $__env->yieldContent("content"); ?>
    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->
    <script src="<?php echo e(asset('/assets/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/js/metismenu.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/js/jquery.slimscroll.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/js/waves.min.js')); ?>"></script>

    <!-- App js -->
    <script src="<?php echo e(asset('/js/app.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/js/app.js')); ?>"></script>

</body>

</html><?php /**PATH D:\libyana\resources\views\layouts\auth.blade.php ENDPATH**/ ?>