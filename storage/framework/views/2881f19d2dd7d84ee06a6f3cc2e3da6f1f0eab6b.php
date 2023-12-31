
<?php $__env->startSection('title','البيانات الاساسية'); ?>

<?php $__env->startSection('Sidebar'); ?>
<?php echo $__env->make('base.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!--  -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-heading p-3">
                    <div class="mini-stat-icon float-right"><i class="mdi mdi-airplane-takeoff bg-primary  text-white"></i></div>
                    <div>
                        <h5 class="font-16">المطارات</h5>
                    </div>
                    <h3 class="mt-2  d-inline"> <?php echo e($airports_count); ?> </h3><small class="text-muted d-inline">مطار</small>
                    <div class="progress mt-2" style="height: 4px;">
                        <div role="progressbar" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-primary" style="width: 100%;"></div>
                    </div>
                    <p class="text-muted mt-2 mb-0"><span class="float-right"><a href="<?php echo e(route('airports')); ?>">عرض الكل</a></span></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-heading p-3">
                    <div class="mini-stat-icon float-right"><i class="mdi mdi-office-building bg-warning  text-white"></i></div>
                    <div>
                        <h5 class="font-16">الشركات</h5>
                    </div>
                    <h3 class="mt-2  d-inline"> <?php echo e($companies_count); ?> </h3><small class="text-muted d-inline">شركة</small>
                    <div class="progress mt-2" style="height: 4px;">
                        <div role="progressbar" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-warning" style="width: 100%;"></div>
                    </div>
                    <p class="text-muted mt-2 mb-0"><span class="float-right"><a href="<?php echo e(route('companies')); ?>">عرض الكل</a></span></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-heading p-3">
                    <div class="mini-stat-icon float-right"><i class="mdi mdi-home-city bg-danger  text-white"></i></div>
                    <div>
                        <h5 class="font-16">القطاعات</h5>
                    </div>
                    <h3 class="mt-2  d-inline"> <?php echo e($itineraries_count); ?> </h3><small class="text-muted d-inline">قطاع</small>
                    <div class="progress mt-2" style="height: 4px;">
                        <div role="progressbar" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-danger" style="width: 100%;"></div>
                    </div>
                    <p class="text-muted mt-2 mb-0"><span class="float-right"><a href="<?php echo e(route('Itinerary')); ?>">عرض الكل</a></span></p>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-heading p-3">
                    <div class="mini-stat-icon float-right"><i class="mdi mdi-airplane bg-success  text-white"></i></div>
                    <div>
                        <h5 class="font-16">الممثلي الجوي</h5>
                    </div>
                    <h3 class="mt-2  d-inline"> <?php echo e($airport_representatives_count); ?> </h3><small class="text-muted d-inline">ممقل جوي</small>
                    <div class="progress mt-2" style="height: 4px;">
                        <div role="progressbar" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-success" style="width: 100%;"></div>
                    </div>
                    <p class="text-muted mt-2 mb-0"><span class="float-right"><a href="<?php echo e(route('Representative')); ?>">عرض الكل</a></span></p>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-heading p-3">
                    <div class="mini-stat-icon float-right"><i class="mdi mdi-road-variant bg-primary  text-white"></i></div>
                    <div>
                        <h5 class="font-16">طراز الطائرات</h5>
                    </div>
                    <h3 class="mt-2  d-inline"> <?php echo e($aircraft_models_count); ?> </h3><small class="text-muted d-inline">طراز مطار</small>
                    <div class="progress mt-2" style="height: 4px;">
                        <div role="progressbar" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-primary" style="width: 100%;"></div>
                    </div>
                    <p class="text-muted mt-2 mb-0"><span class="float-right"><a href="<?php echo e(route('air_m')); ?>">عرض الكل</a></span></p>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-heading p-3">
                    <div class="mini-stat-icon float-right"><i class="mdi mdi-city-variant bg-info  text-white"></i></div>
                    <div>
                        <h5 class="font-16">المدن</h5>
                    </div>
                    <h3 class="mt-2  d-inline"> <?php echo e($cities_count); ?> </h3><small class="text-muted d-inline">مدينة</small>
                    <div class="progress mt-2" style="height: 4px;">
                        <div role="progressbar" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-info" style="width: 100%;"></div>
                    </div>
                    <p class="text-muted mt-2 mb-0"><span class="float-right"><a href="<?php echo e(route('cities')); ?>">عرض الكل</a></span></p>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-heading p-3">
                    <div class="mini-stat-icon float-right"><i class="mdi mdi-account-group bg-dark  text-white"></i></div>
                    <div>
                        <h5 class="font-16">مستخدمي النظام</h5>
                    </div>
                    <h3 class="mt-2  d-inline"> <?php echo e($users_count); ?> </h3><small class="text-muted d-inline">مستخدم</small>
                    <div class="progress mt-2" style="height: 4px;">
                        <div role="progressbar" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-dark" style="width: 100%;"></div>
                    </div>
                    <p class="text-muted mt-2 mb-0"><span class="float-right"><a href="<?php echo e(route('users')); ?>">عرض الكل</a></span></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\libyana\resources\views\base\index.blade.php ENDPATH**/ ?>