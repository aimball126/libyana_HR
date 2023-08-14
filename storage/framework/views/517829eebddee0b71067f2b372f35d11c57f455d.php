<?php $__env->startSection('title','الرئيسية'); ?>

<?php $__env->startSection('Sidebar'); ?>
<?php echo $__env->make('HomePage.Sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-heading p-3">
                    <div class="mini-stat-icon float-right"><i class="mdi mdi-view-dashboard bg-warning  text-white"></i></div>
                    <div>
                        <h5 class="font-16">الطلبات</h5>
                    </div>
                    <h3 class="mt-2  d-inline"> <?php echo e(\App\Sale::count()); ?> </h3><small class="text-muted d-inline">طلب</small>
                    <div class="progress mt-2" style="height: 4px;">
                        <div role="progressbar" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-warning" style="width: 100%;"></div>
                    </div>
                    <p class="text-muted mt-2 mb-0"><span class="float-right"><a href="/sale">عرض الكل</a></span></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-heading p-3">
                    <div class="mini-stat-icon float-right"><i class="mdi mdi-backup-restore bg-primary  text-white"></i></div>
                    <div>
                        <h5 class="font-16">المرتجعات</h5>
                    </div>
                    <h3 class="mt-2  d-inline"> <?php echo e(\App\Returns::count()); ?> </h3><small class="text-muted d-inline">مرتجع</small>
                    <div class="progress mt-2" style="height: 4px;">
                        <div role="progressbar" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-primary" style="width: 100%;"></div>
                    </div>
                    <p class="text-muted mt-2 mb-0"><span class="float-right"><a href="/returns">عرض الكل</a></span></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-heading p-3">
                    <div class="mini-stat-icon float-right"><i class="mdi mdi-archive bg-dark  text-white"></i></div>
                    <div>
                        <h5 class="font-16">المنتجات</h5>
                    </div>
                    <h3 class="mt-2  d-inline"> <?php echo e(\App\Items::count()); ?></h3><small class="text-muted d-inline">منتج</small>
                    <div class="progress mt-2" style="height: 4px;">
                        <div role="progressbar" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-dark" style="width: 100%;"></div>
                    </div>
                    <p class="text-muted mt-2 mb-0"><span class="float-right"><a href="/items">عرض الكل</a></span></p>
                </div>
            </div>
        </div>

    </div>
    <?php if (app('laratrust')->hasRole('super_admin')) : ?>
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-heading p-3">
                    <div class="mini-stat-icon float-right"><i class="mdi mdi-currency-usd bg-success  text-white"></i></div>
                    <div>
                        <h5 class="font-16">اجمالي قيمة المبيعات</h5>
                    </div>

                    <h3 class="mt-2  d-inline"> "" </h3><small class="text-muted d-inline">دينار</small>
                    <div class="progress mt-2" style="height: 4px;">
                        <div role="progressbar" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-success" style="width: 100%;"></div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-heading p-3">
                    <div class="mini-stat-icon float-right"><i class="mdi mdi-cash-refund bg-info  text-white"></i></div>
                    <div>
                        <h5 class="font-16">اجمالي  قيمة المرتجعات</h5>
                    </div>

                    <h3 class="mt-2  d-inline"> <?php echo e($returns_sum); ?> </h3><small class="text-muted d-inline">دينار</small>
                    <div class="progress mt-2" style="height: 4px;">
                        <div role="progressbar" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-info" style="width: 100%;"></div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-heading p-3">
                    <div class="mini-stat-icon float-right"><i class="mdi mdi-cash-register bg-danger  text-white"></i></div>
                    <div>
                        <h5 class="font-16">اجمالي  قيمة المشتريات</h5>
                    </div>

                    <h3 class="mt-2  d-inline"> <?php echo e($purchases_sum); ?> </h3><small class="text-muted d-inline">دينار</small>
                    <div class="progress mt-2" style="height: 4px;">
                        <div role="progressbar" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-danger" style="width: 100%;"></div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <?php endif; // app('laratrust')->hasRole ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\libyana\resources\views\HomePage\home.blade.php ENDPATH**/ ?>