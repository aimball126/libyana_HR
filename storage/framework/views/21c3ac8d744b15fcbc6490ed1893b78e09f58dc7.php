<?php $__env->startSection('title','تسجيل الدخول'); ?>
<?php $__env->startSection('content'); ?>
<div class="wrapper-page">

    <div class="card card-pages shadow-none" dir="rtl">

        <div class="card-body" style="height: 60ch">
            <div class="text-center m-t-0 m-b-15 text-center mt-3" >
                <a href="#" class="logo logo-admin"><img src="<?php echo e(asset('/assets/images/logo.png')); ?>" width="180" height="120" ></a>
            </div>

            <form class="form-horizontal m-t-30" method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <div class="col-12">
                        <label>اسم المستخدم</label>
                        <input class="form-control" name="name" type="text" value="<?php echo e(old('name')); ?>" placeholder="أدخل اسم المستخدم  هنا" required autocomplete="email" autofocus>
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-12">
                        <label>كلمة المرور</label>
                        <input class="form-control" id="password" type="password" name="password" required autocomplete="current-password" placeholder="أدخل كلمة المرور هنا">
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>



                <div class="form-group text-center m-t-20">
                    <div class="col-12">
                        <button class="btn btn-primary btn-lg waves-effect waves-light" type="submit">تسجيل الدخـــول</button>
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                   
                </div>
            </form>
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\libyana\resources\views\auth\login.blade.php ENDPATH**/ ?>