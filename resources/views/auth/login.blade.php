@extends('layouts.auth')

@section('title','تسجيل الدخول')
@section('content')
<div class="wrapper-page">

    <div class="card card-pages shadow-none" dir="rtl">

        <div class="card-body" style="height: 60ch">
            <div class="text-center m-t-0 m-b-15 text-center mt-3" >
                <a href="#" class="logo logo-admin"><img src="{{asset('/assets/images/logo.png')}}" width="180" height="120" ></a>
            </div>

            <form class="form-horizontal m-t-30" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <div class="col-12">
                        <label>اسم المستخدم</label>
                        <input class="form-control" name="name" type="text" value="{{ old('name') }}" placeholder="أدخل اسم المستخدم  هنا" required autocomplete="email" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-12">
                        <label>كلمة المرور</label>
                        <input class="form-control" id="password" type="password" name="password" required autocomplete="current-password" placeholder="أدخل كلمة المرور هنا">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>



                <div class="form-group text-center m-t-20">
                    <div class="col-12">
                        <button class="btn btn-primary btn-lg waves-effect waves-light" type="submit">تسجيل الدخـــول</button>
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                   {{--  <div class="col-12">
                        <small>جميع الحقوق محفوظة © 2022 | مصلحة المطارات - وزارة المواصلات</small>
                    </div> --}}
                </div>
            </form>
        </div>

    </div>
</div>

@endsection