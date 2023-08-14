@extends('layouts.app')
@section('title')
 المنتجات    
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
                <div class="row row-xs wd-xl-400p">
                   
                    <div class="col-sm-6 col-md-3"><button class="btn btn-success btn-with-icon btn-block" data-toggle="modal" data-target=".bs-example-modal-center"> اضافة منتج</button></div>
                
                </div>
                <br>
            </div>


            <div class="card-body">
               
                <div class="modal fade bs-example-modal-center" id="create-act" >
                    <div class="modal-dialog" role="document">
                        <div class="modal-content modal-content-demo">
                            <div class="modal-header">
                                <h6 class="modal-title">إضافة منتج</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                               
                                    <form action="{{route('store-items')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        
                                        <div class="form_group">
                                            <label>اسم المنتج
                                            </label>
                                            <input hidden  class="form-control" id="id" name="id" type="text"  step="0.01" id="example-password-input" maxlength="50">
                                            <input   class="form-control"  name="name" type="text" id="example-password-input" maxlength="50">
                                        </div>

                                        <div class="form-group ">
                                            <label>كود المنتج
                                            </label>
                                            <input required class="form-control"  name="code" id="code" type="text" id="example-password-input" maxlength="50" onchange="myFunction();">
                                        </div>

                                        <div class="form-group ">
                                            <label>سعر المنتج
                                            </label>
                                            <input required class="form-control"  name="price" type="number"  step="0.01" id="example-password-input" maxlength="50">
                                        </div>
                                      
                                         
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success" onclick="myFunction();">تاكيد</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                                        </div>
                                        
                                    </form>
                               
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>اسم المنتج</th>
                            <th>كود المنتج</th>
                            <th>السعر</th>
                            <th>الإعدادات</th>
                        </tr>
                    </thead>


                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->code}}</td>
                            <td>{{ $item->price}}</td>
                            
                          

                            <td>


                                <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".edit{{$item->id}}"><i class="fa fa-edit mx-1"></i> تعديل </button>
                                <div class="modal fade edit{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0">تعديل بيانات المنتج
                                                    {{$item->name}}
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="p-3">

                                                    <form action="{{route('update-items',$item->id)}}" method="post">
                                                        @csrf
<!--
                                                        <div class="form-group row">
                                                            <label>الشركة</label>
                                                            <select name="company_id" class="form-control">
                                                         
                                                            </select>
                                                        </div>
                                                    -->
                                                        <div class="form-group row">
                                                            <label>اسم المنتج
                                                            </label>
                                                            <input required class="form-control" value="{{$item->name}}" name="name" type="text" id="example-password-input">
                                                        </div>
                                                        
                
                                                        <div class="form-group row">
                                                            <label>سعر المنتج
                                                            </label>
                                                            <input required class="form-control"  name="price" type="number"  step="0.01" id="example-password-input" maxlength="50" value="{{$item->price}}">
                                                        </div>
                
                                                       
                                                       
                            
                                                        <div class="form-group row">
                                                            <button type="submit" class="btn btn-success waves-effect waves-light" >حفظ</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-target=".destroy{{$item->id}}"><i class="fa fa-edit mx-1"></i> حذف </button>

                                <div class="modal fade destroy{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0">حذف  الصنف
                                                    {{ $item->name }}
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h5>هل انت متاكد من حذف الصنف ؟</h5>
                                                <div class="form-group ">
                                                    <form action="{{route('destroy-items',$item->id)}}" method="post">
                                                        @csrf
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
                        @endforeach
                    </tbody>
                </table>
                {{ $items->appends($_GET)->links() }}
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
@endsection

@section('scripts')




@endsection
@section('js')





@endsection
