<?php $__env->startSection('title'); ?>
 خصائص المنتج
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>


<?php $__env->startSection('Sidebar'); ?>
<?php echo $__env->make('HomePage.Sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('buttons'); ?>
<div class="row">
    <div class="col">

    </div></div>
    <style>
        .my-carousel .carousel-inner .carousel-item img {
          max-width: 100%; /* تعيين العرض الأقصى للصور */
          max-height: 100%; /* تعيين الارتفاع الأقصى للصور */
          object-fit: contain; /* تغطية الصور بالكامل في carousel */
          max-height: 200px; /* تقليل حجم الصور */
        }
        .carousel-control-prev-icon, .carousel-control-next-icon {
  filter: invert(100%) !important;
}
      </style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row" dir="rtl">
    <div class="col-12">
        <div class="card mg-b-30">
            <div class="card mg-b-20">
            <div class="card-header pb-0">
                <div class="row row-xs wd-xl-400p">

                    <div class="col-sm-6 col-md-3"><button class="btn btn-success btn-with-icon btn-block" data-toggle="modal" data-target=".bs-example-modal-center"> اضافة خاصية جديدة </button></div>

                </div>
                <br>
            </div>

            <div id="carouselExampleControls" class="carousel slide my-carousel" data-ride="carousel">
                <div class="carousel-inner">
                  <?php $__currentLoopData = $sharedDatacolors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="carousel-item <?php echo e($key == 0 ? 'active' : ''); ?>">
                      <img class="d-block w-100" src="<?php echo e(asset($image->name)); ?>" alt="<?php echo e($image->product_name); ?>">
                    </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            <div class="card-body">


                <div class="modal fade bs-example-modal-center" id="create-act" >
                    <div class="modal-dialog" role="document">
                        <div class="modal-content modal-content-demo">
                            <div class="modal-header">
                                <h6 class="modal-title">إضافة خصائص للمنتح</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">

                                <form action="<?php echo e(route('store-features')); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>

                                    <div class="form-group">
                                        <label for="product">المنتج:</label>
                                        <select class="form-control" id="products_id" name="products_id">
                                            <option value="">-- اختر المنتج --</option>
                                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value=<?php echo e($product->id); ?>> <?php echo e($product->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>



                                    <div class="form-group">
                                        <label for="name">اسم الخاصية:</label>
                                        <input type="text" class="form-control" id="name" name="name" style="height: 40px;">
                                    </div>
                                    <div class="form-group">
                                        <label for="image">الصورة:</label>
                                        <input type="file" class="form-control" id="image" name="image" style="height: 40px;">
                                      </div>


                                    <button type="submit" class="btn btn-primary">إضافة الخاصية الإضافية</button>
                                </form>

                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>اسم المنتج</th>
                            <th>الصورة</th>

                            <th>الخاصية</th>
                            <th>الإعدادات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $sharedDatacolors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>

                            <td><?php echo e($product->product_name); ?></td>


                            <td><?php echo e($product->name); ?></td>
                            <td>


                                    <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-target=".destroy<?php echo e($product->id); ?>"><i class="fa fa-edit mx-1"></i> حذف </button>

                                    <div class="modal fade destroy<?php echo e($product->id); ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title mt-0">حذف  الخاصية
                                                        <?php echo e($product->product_name); ?>

                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h5>هل انت متاكد من حذف الخاصية ؟</h5>
                                                    <div class="form-group ">
                                                        <form action="<?php echo e(route('destroy-features',$product->id)); ?>" method="post">
                                                            <?php echo csrf_field(); ?>
                                                            <button type="submit" class="btn btn-danger waves-effect waves-light">نعم</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->

                                <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".edit<?php echo e($product->id); ?>"><i class="fa fa-edit mx-1"></i> تعديل </button>
                                <div class="modal fade edit<?php echo e($product->id); ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0">تعديل بيانات الخاصية
                                                    <?php echo e($product->product_name); ?>

                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="p-3">

                                                   <form action="<?php echo e(route('update-features',$product->id)); ?>" method="post" enctype="multipart/form-data">
                                                        <?php echo csrf_field(); ?>


                                                        <div class="form-group">
                                                            <label for="product_name">اللون:</label>
                                                            <input type="text" class="form-control" id="name" name="name" style="height: 40px;" value="<?php echo e($product->name); ?>">
                                                        </div>





                                                        <button type="submit" class="btn btn-primary">تحديث الخاصية</button>
                                                      </form>
                                                </div>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                </div><!-- /.modal -->
                            </td>


                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>

            </div>

        </div>

    </div>
    </div> <!-- end col -->





<script>
    function myFunction (){

        var code = document.getElementById("code").value;
        document.getElementById("id").setAttribute('value',code);

    }
      </script>



<script>
    $(document).ready(function(){
        $('.slider').slick({
            dots: true,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear'
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>




<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\libyana\resources\views\imagegallery\imagegallery.blade.php ENDPATH**/ ?>