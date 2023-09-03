@extends('layouts.app')
@section('title')
طلبات التوظيف
@stop
@section('css')
@section('Sidebar')
@include('HomePage.Sidebar')
@endsection
@section('buttons')
<div class="row">
    <div class="col">

    </div></div>


@endsection

@section('content')
<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-heading p-3">
                <div class="mini-stat-icon float-right"><i class="mdi mdi-view-dashboard bg-warning  text-white"></i></div>
                <div>
                    <h5 class="font-16">طلبات التوظيف</h5>
                </div>
                <h3 class="mt-2  d-inline"> {{\App\Requestt::count()}} </h3><small class="text-muted d-inline">طلب</small>
                <div class="progress mt-2" style="height: 4px;">
                    <div role="progressbar" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-warning" style="width: 100%;"></div>
                </div>

            </div>
        </div>
    </div>


</div>
<div class="row" dir="rtl">
    <div class="col-12">
        <div class="card mg-b-30">
            <div class="card mg-b-20">
            <div class="card-header pb-0">

                <br>
            </div>


            <div class="card-body">


                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>الأسم</th>
                            <th>رقم الهاتف</th>
                            <th>العنوان</th>
                            <th>ناريخ الميلاد</th>
                            <th>المدينة</th>
                            <th>الرقم الوطني</th>

                            <th>الإعدادات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($requests as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->phone }}</td>
                            <td>{{ $product->address }}</td>
                            <td>{{ $product->birth }}</td>
                            <td>{{ $product->city }}</td>
                            <td>{{ $product->nationality }}</td>





                            <td>



                                <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target=".edit{{$product->id}}">
                                    <i class="fa fa-eye mx-1"></i> عرض الملف
                                </button>
                                <div class="modal fade edit{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">

                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="p-3">





                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>الإسم بالكامل</label>
                                                                <input disabled class="form-control" name="name" type="text" value="{{$product->name}}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>رقم الهاتف</label>
                                                                <input disabled class="form-control" name="phone" type="text" value="{{$product->phone}}" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>العنوان</label>
                                                                <input disabled class="form-control" name="name" type="text" value="{{$product->address}}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>تاريخ الميلاد</label>
                                                                <input disabled class="form-control" name="phone" type="text" value="{{$product->birth}}" required>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>المدينة</label>
                                                                <input disabled class="form-control" name="name" type="text" value="{{$product->city}}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>الرقم الوطني</label>
                                                                <input disabled class="form-control" name="phone" type="text" value="{{$product->nationality}}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>الحالة الإجتماعية</label>
                                                                <input disabled class="form-control" name="name" type="text" value="{{$product->martial_status}}" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>نبذة شخصية</label>
                                                                <textarea disabled class="form-control" name="about" rows="4" required>{{$product->about}}</textarea>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="row">
                                                    <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="form-group">

                                                        <a href="{{$product->cv}}" class="btn btn-primary">عرض السيرة الذاتية</a>
                                                        <a href="{{$product->cv}}" class="btn btn-primary" download="resume.pdf">تنزيل السيرة الذاتية</a>
                                                    </div>
                                                        <button type="button" class="btn btn-danger waves-effect waves-light" data-dismiss="modal">اغلاق </button>
                                                    </div></div>
                                                </div>










                                                </div>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                            </td>


                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $requests->appends($_GET)->links() }}
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
@endsection

@section('scripts')




@endsection
@section('js')





@endsection
