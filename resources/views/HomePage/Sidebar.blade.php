<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">

                <li>
                    <a href="/dashboard" class="waves-effect">
                        <i class="mdi mdi-home"></i> <span>الرئيسية</span>
                    </a>
                </li>
                <li>
                    <a href="/home" class="waves-effect">
                        <i class="mdi mdi-earth"></i> <span>الموقع</span>
                    </a>
                </li>
                <li>
                    <a href="/requests" class="waves-effect">
                        <i class="mdi mdi-briefcase"></i> <span>طلبات التوظيف</span>
                    </a>
                </li>

                @role('super_admin|seller')
                <li>


                        <li><a href="/products"><i class="mdi mdi-cart"></i> منتجات الموقع</a></li>
                        <li><a href="/colors"><i class="mdi mdi-palette"></i> الوان المنتجات</a></li>
                        <li><a href="/sizes"><i class="mdi mdi-ruler"></i> مقاسات المنتجات</a></li>
                        <li><a href="/features"><i class="mdi mdi-shape"></i> خصائص اخري</a></li>

                </li>
                @endrole

            </ul>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>
