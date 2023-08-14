@extends('layouts.app')
@section('title','الرئيسية')

@section('Sidebar')
@include('HomePage.Sidebar')
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-heading p-3">
                    <div class="mini-stat-icon float-right"><i class="mdi mdi-view-dashboard bg-warning  text-white"></i></div>
                    <div>
                        <h5 class="font-16">الطلبات</h5>
                    </div>
                    <h3 class="mt-2  d-inline"> {{\App\Sale::count()}} </h3><small class="text-muted d-inline">طلب</small>
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
                    <h3 class="mt-2  d-inline"> {{\App\Returns::count()}} </h3><small class="text-muted d-inline">مرتجع</small>
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
                    <h3 class="mt-2  d-inline"> {{\App\Items::count()}}</h3><small class="text-muted d-inline">منتج</small>
                    <div class="progress mt-2" style="height: 4px;">
                        <div role="progressbar" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-dark" style="width: 100%;"></div>
                    </div>
                    <p class="text-muted mt-2 mb-0"><span class="float-right"><a href="/items">عرض الكل</a></span></p>
                </div>
            </div>
        </div>

    </div>
    @role('super_admin')
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

                    <h3 class="mt-2  d-inline"> {{$returns_sum}} </h3><small class="text-muted d-inline">دينار</small>
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

                    <h3 class="mt-2  d-inline"> {{$purchases_sum}} </h3><small class="text-muted d-inline">دينار</small>
                    <div class="progress mt-2" style="height: 4px;">
                        <div role="progressbar" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-danger" style="width: 100%;"></div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    @endrole
</div>
@endsection
