@extends('layouts.auth')

@section('title','العناصر')

@section('content')
<div class="wrapper-page">

    <div class="card card-pages shadow-none" dir="rtl">

        <div class="card-body">
            <div class="text-center m-t-0 m-b-15 text-center mt-3 mb-5">
                <a href="#" class="logo logo-admin"><img src="{{asset('/assets/images/logo.png')}}" width="280"></a>
            </div>
         
            <a href="{{route('base')}}" class="friends-suggestions-list">
                <div class="border-bottom position-relative">
                    <div class="float-left mb-0 mr-3">
                        <img src="{{asset('/assets/images/sections/4.svg')}}" class="rounded-circle thumb-md">
                    </div>
                    <div class="suggestion-icon float-right mt-2 pt-1">
                        <i class="mdi mdi-arrow-left-bold-circle"></i>
                    </div>
                    <div class="desc">
                        <h5 class="font-14 mb-1 pt-2 text-dark">البيانات الاساسية</h5>
                        <p class="text-muted">Basic Information</p>
                    </div>
                </div>
            </a>



        </div>
    </div>

</div>
</div>
@endsection