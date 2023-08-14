<?php $__env->startSection('title'); ?>
 المنتجات
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<?php $__env->startSection('Sidebar'); ?>
<?php echo $__env->make('HomePage.Sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('buttons'); ?>

<div class="row">
    <div class="col">

    </div></div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<style>
  .tdwidth {
    color: black;
    overflow: hidden;
    text-overflow: ellipsis;
    width: 50%;
    word-wrap: break-word;
}
    </style>
<div class="row" dir="rtl">
    <div class="col-12">
        <div class="card mg-b-30">
            <div class="card mg-b-20">
            <div class="card-header pb-0">

                <br>
            </div>


            <div class="card-body">
                <div class="row row-xs wd-xl-400p">
                  <h3>اضافة منتج</h3>
                </div>
                <form action="<?php echo e(route('store-products')); ?>" method="post" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                  <div class="form-group">
                    <label for="name">اسم المنتج:</label>
                    <input hidden class="form-control" id="id" name="id" type="text" step="0.01" maxlength="50">
                    <input class="form-control" name="name" type="text" id="name" maxlength="50">
                  </div>
                  <div class="form-group">
                    <label for="name">كود المنتج:</label>
                    <input class="form-control" name="code" type="text" id="code" maxlength="10">
                  </div>
                  <div class="form-group">
                    <label for="image">الصورة:</label>
                    <input type="file" class="form-control" id="image" name="image" style="height: 40px;">
                  </div>
                  <div class="form-group">
                    <label for="price">سعر المنتج:</label>
                    <input required class="form-control" name="price" type="number" step="0.01" id="price" maxlength="50">
                  </div>
                  <div class="form-group">
                    <label for="description">تفاصيل المنتج:</label>
                    <input hidden class="form-control" id="id" name="description" type="text" step="0.01">
                    <textarea class="form-control" name="description" id="description"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="description">تفاصيل اضافية:</label>
                    <input hidden class="form-control" id="id" name="description2" type="text" step="0.01">
                    <textarea class="form-control" name="description2" id="description2"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="video">فيديو:</label>
                    <input type="file" class="form-control" id="video" name="video" accept="video/*" style="height: 40px;">
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group product-color-input" style="display: none;">
                        <label for="product_color">لون المنتج:</label>
                        <input type="text" class="form-control" id="product_color" name="product_color">
                      </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group product-color-input" style="display: none;">
                          <label for="color_code">كود المنتج:</label>
                          <input type="text" class="form-control" id="color_code" name="color_code">
                        </div>
                      </div>
                    <div class="col-md-4">
                      <div class="form-group product-color-input" style="display: none;">
                        <label for="product_image">صورة المنتج:</label>
                        <input type="file" class="form-control" id="product_color_image" name="product_color_image" style="height: 40px;">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group product-size-input" style="display: none;">
                        <label for="product_color">مقاس المنتج:</label>
                        <input type="text" class="form-control" id="product_size" name="product_size">
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group product-size-input" style="display: none;">
                          <label for="size_code">كود المنتج:</label>
                          <input type="text" class="form-control" id="size_code" name="size_code">
                        </div>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group product-other-input" style="display: none;">
                        <label for="product_color">اسم الخاصية :</label>
                        <input type="text" class="form-control" id="product_other" name="product_other">
                      </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group product-other-input" style="display: none;">
                          <label for="other_code">كود المنتج:</label>
                          <input type="text" class="form-control" id="other_code" name="other_code">
                        </div>
                      </div>
                    <div class="col-md-4">
                      <div class="form-group product-other-input" style="display: none;">
                        <label for="product_image">صورة الخاصية:</label>
                        <input type="file" class="form-control" id="product_other_image" name="product_other_image" style="height: 40px;">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div class="form-group product-product_image_gallery-input" style="display: none;">
                        <label for="product_image_gallery">معرض الصور:</label>
                        <input type="file" class="form-control" id="product_image_gallery" name="product_image_gallery[]" multiple style="height: 40px;">
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary add-product-button">إضافة لون</button>
                    <button type="button" class="btn btn-primary add-size-button">إضافة مقاس</button>
                    <button type="button" class="btn btn-primary add-other-button">إضافة خصائص اخري</button>
                    <button type="button" class="btn btn-primary add-image-button ml-auto">معرض الصور</button>
                 <button type="submit" class="btn btn-success btn-lg" onclick="myFunction();">تاكيد</button>
                  </div>
                </form>
              </div>
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
            <th>اسم المنتج</th>
            <th>الصورة</th>
            <th>تفاصيل المنتج</th>

            <th>الإعدادات</th>
                        </tr>
                    </thead>


                    <tbody>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->index + 1); ?></td>
                            <td><?php echo e($item->name); ?></td>
                            <td><img src="<?php echo e(asset($item->image)); ?>" alt="<?php echo e($item->name); ?>" style="width: 100px;"></td>
                            <td class="tdwidth"><?php echo e($item->description); ?></td>








                            <td>


                                <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".edit<?php echo e($item->id); ?>"><i class="fa fa-edit mx-1"></i> تعديل </button>
                                <div class="modal fade edit<?php echo e($item->id); ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0">تعديل بيانات المنتج
                                                    <?php echo e($item->name); ?>

                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="p-3">

                                                   <form action="<?php echo e(route('update-products',$item->id)); ?>" method="post" enctype="multipart/form-data">
                                                        <?php echo csrf_field(); ?>

                                                        <div class="form-group">
                                                            <label for="name">اسم المنتج:</label>
                                                            <input type="text" class="form-control" id="name" name="name" style="height: 40px;" value="<?php echo e($item->name); ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="name">كود المنتج:</label>
                                                            <input class="form-control" name="code" type="text" id="code" maxlength="10" value="<?php echo e($item->code); ?>">
                                                          </div>
                                                        <div class="form-group">
                                                            <label for="image">الصورة:</label>
                                                            <?php if($item->image): ?>
                                                                <div>
                                                                    <img src="<?php echo e(asset($item->image)); ?>" width="50" height="50">
                                                                </div>
                                                            <?php endif; ?>
                                                            <input type="file" class="form-control" id="image" name="image" style="height: 40px;">
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="price">السعر:</label>
                                                          <input type="number" class="form-control" id="price" name="price" step="0.01" min="0" value="<?php echo e($item->price); ?>">
                                                        </div>

                                                          <div class="form-group">
                                                            <label for="description">تفاصيل المنتج:</label>
                                                            <textarea class="form-control" id="description" name="description"><?php echo e($item->description); ?></textarea>
                                                          </div>



                                                        <button type="submit" class="btn btn-primary">تحديث المنتج</button>
                                                      </form>
                                                </div>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-target=".destroy<?php echo e($item->id); ?>"><i class="fa fa-edit mx-1"></i> حذف </button>

                                <div class="modal fade destroy<?php echo e($item->id); ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0">حذف  المنتج
                                                    <?php echo e($item->name); ?>

                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h5>هل انت متاكد من حذف المنتج ؟</h5>
                                                <div class="form-group ">
                                                    <form action="<?php echo e(route('destroy-products',$item->id)); ?>" method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <button type="submit" class="btn btn-danger waves-effect waves-light">نعم</button>
                                                    </form>
                                                </div>
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
                <?php echo e($products->appends($_GET)->links()); ?>

            </div>
        </div>
    </div>
    </div> <!-- end col -->
</div>
<script>
    function myFunction (){

        var code = document.getElementById("code").value;
        document.getElementById("id").setAttribute('value',code);

    }

      </script>
      <script>
        $(document).ready(function() {
            $('.add-product-button').click(function() {
                $('.product-color-input').toggle();
            });
        });
    </script>
      <script>
        $(document).ready(function() {
            $('.add-size-button').click(function() {
                $('.product-size-input').toggle();
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.add-other-button').click(function() {
                $('.product-other-input').toggle();

            });
        });
    </script>
    <script>


    $(document).ready(function() {
        $('.add-image-button').click(function() {
            $('.product-product_image_gallery-input').toggle();
            $('.product-color-input').hide();
            $('.product-size-input').hide();
            $('.product-other-input').hide();
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>




<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\libyana\resources\views\products\products.blade.php ENDPATH**/ ?>