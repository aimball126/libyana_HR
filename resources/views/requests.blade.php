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


                                <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target=".destroy{{$product->id}}">
                                    <i class="fa fa-eye mx-1"></i> عرض الملف
                                </button>


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
