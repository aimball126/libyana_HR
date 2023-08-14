
<?php $__env->startSection('title', 'مستخدمي النظام'); ?>

<?php $__env->startSection('Sidebar'); ?>
<?php echo $__env->make('HomePage.Sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('buttons'); ?>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row" dir="rtl">
    
    <div class="col-12">
       
        <div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-header pb-0">
                    <div class="row row-xs wd-xl-400p">
                       
                        <a href="<?php echo e(route('add-user')); ?>"  data-target=".bs-example-modal-center" class="btn btn-success btn-with-icon btn-block">
                            اضافة مستخدم جديد
                        </a>
                    
                    </div>
                    <br>
                </div>
    
            <div class="card-body table-responsive">
            
            

                
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>اسم المستخدم</th>
                            <th>تاريخ الإنشاء</th>
                            <th>الصلاحيات</th>
                       
                            <th>الإعدادات</th>
                         
                        </tr>
                    </thead>


                    <tbody>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->index + 1); ?></td>
                            <td><?php echo e($user->name); ?></td>
                       
                          
                            <td><?php echo e($user->created_at); ?></td>
                            <td>
                               
                              
                                <?php $__currentLoopData = $user->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               
                                <?php echo e($role->display_name); ?><?php echo e($index+1 < $user->roles->count() ? ',':''); ?>

                           
                                
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           
                            </td>
                          
                            <td>
                                <a href="<?php echo e(route('edit-user',$user->id)); ?>" class="btn btn-primary waves-effect waves-light"><i class="fa fa-edit"></i> تعديل </a>
                                <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-target=".deleet"><i class="fa fa-trash mx-1"></i> حذف </button>
                                <div class="modal fade deleet" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0">حذف  المستخدم
                                                    <?php echo e($user->name); ?>

                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h5>هل انت متاكد من حذف المستخدم ؟</h5>
                                                <div class="form-group ">
                                                    <form action="<?php echo e(route('destroy-user',$user->id)); ?>" method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <button type="submit" class="btn btn-danger waves-effect waves-light">نعم</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                            </td>

                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <?php echo e($users->appends($_GET)->links()); ?>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\libyana\resources\views\Users\users.blade.php ENDPATH**/ ?>