<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">

                <li>
                    <a href="/home" class="waves-effect">
                        <i class="mdi mdi-home"></i> <span> الرئيسية </span>
                    </a>
                </li>

                <?php if (app('laratrust')->hasRole('super_admin|seller')) : ?>
                <li>


                        <li><a href="/products"><i class="mdi mdi-cart"></i> منتجات الموقع</a></li>
                        <li><a href="/colors"><i class="mdi mdi-palette"></i> الوان المنتجات</a></li>
                        <li><a href="/sizes"><i class="mdi mdi-ruler"></i> مقاسات المنتجات</a></li>
                        <li><a href="/features"><i class="mdi mdi-shape"></i> خصائص اخري</a></li>

                </li>
                <?php endif; // app('laratrust')->hasRole ?>

            </ul>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>
<?php /**PATH D:\libyana\resources\views\HomePage\Sidebar.blade.php ENDPATH**/ ?>