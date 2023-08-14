
<?php $__env->startSection('title', 'تعديل مستخدم'); ?>

<?php $__env->startSection('Sidebar'); ?>
<?php echo $__env->make('HomePage.Sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<form action="<?php echo e(route('update-user', $users->id)); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="row">

        <div class="col-lg">
            <div class="card m-b-30">
                <div class="card-body">

                    <h4 class="mt-0 mb-3 header-title">بيانات المستخدم </h4>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>اسم المستخدم</label>
                                <input required value="<?php echo e($users->name); ?>" name="name" type="text" class="colorpicker-default form-control" maxlength="50">
                            </div>
                        </div>
                    
                        <div class="col">
                            <div class="form-group">
                                <label>البريد الإلكتروني</label>
                                <input value="<?php echo e($users->email); ?>" name="email" type="email" class="colorpicker-default form-control" maxlength="50">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>الرقم السري</label>
                                <input required name="password" type="password" class="colorpicker-default form-control" maxlength="50">
                            </div>
                        </div>

                    </div>
                    <br>
                  


                      
                       


                     









               

                    <br>
                    <div class="row">
                        <div class="col">
                            <label class="form-check-label" for="flexCheckIndeterminate">
                             بائع
                            </label>
                            <input class="form-check-input" type="radio" value="seller" <?php echo e($users->hasRole('seller') ? 'checked' : ''); ?> id="flexCheckIndeterminate" name="roles[]">
                        </div>
                        <div class="col">
                            <label class="form-check-label" for="flexCheckIndeterminate">
                                مدير النظام
                            </label>
                            <input class="form-check-input" type="radio" value="super_admin" <?php echo e($users->hasRole('super_admin') ? 'checked' : ''); ?> id="flexCheckIndeterminate" name="roles[]">
                        </div>
                        

                        
                      
                       
                    </div>
               
                     

                    <br>
                    <div class="row">
                        <div class="form-group">
                            <div>
                                <button type="submit" class=" btn btn-success waves-effect waves-light">
                                    حفظ
                                </button>
                                <a href="<?php echo e(route('users')); ?>" type="reset" class=" btn btn-danger waves-effect m-l-5">
                                    الغاء
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- end col -->
    </div> <!-- end row -->
</form>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\libyana\resources\views\Users\edit.blade.php ENDPATH**/ ?>