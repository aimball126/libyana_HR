<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>{{config("global.name")}} - @yield("title")</title>
    <meta content="MENASA ERP System By Menasa Company" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="{{asset('/assets/images/menasa-favicon.png')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/assets/css/icons.css')}}" rel="stylesheet" type="text/css">

    @yield('styles')
    <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet" type="text/css">
    @include('layouts.customize')

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="{{url('/')}}" class="logo">
                    <span class="logo-light">
                        <!-- <img src="{{config('global.logo')}}" alt="" width="140" /> -->
                        <img src="{{asset('/assets/images/logo.png')}}" width="100" height="50"/>
                    </span>

                    <span class="logo-sm">
                        <img src="{{asset('/assets/images/logo.png')}}" width="40" />
                    </span>
                </a>
            </div>



            <nav class="navbar-custom">
                <ul class="navbar-right list-inline float-right mb-0">







                    <li class="dropdown notification-list list-inline-item">
                        <div class="dropdown notification-list nav-pro-img">
                            <a class="dropdown-toggle nav-link arrow-none nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="mdi mdi-account-circle" style="font-size: 20px !important;"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">


                                <form action="{{url('/logout')}}" method="post">
                                    @csrf
                                    <button class="dropdown-item text-danger" type="submit"><i class="mdi mdi-power text-danger"></i> تسجيل الخروج</button>
                                </form>
                            </div>
                        </div>
                    </li>

                </ul>
                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-effect">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>

                </ul>
            </nav>


        </div>
        <!-- Top Bar End -->
br

        @yield("Sidebar")


        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title-box">
                        <div class="row align-items-center">

                            <div class="col-sm-6 text-right">
                                <h4 class="page-title">@yield("title")</h4>

                            </div>
                            <div class="col-sm-6" dir="ltr">
                                <ol class="breadcrumb float-right ">
                                    <li class="breadcrumb-item btn-group" dir="rtl">
                                        @yield("buttons")
                                    </li>
                                    <li class="breadcrumb-item"><a href="/dashboard">لوحة التحكم</a></li>
                                    @yield("breadcrumb")
                                </ol>
                            </div>

                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end page-title -->
                    <div id="app">
                        <div class="my-2"> @include('layouts.messages')</div>
                        @yield("content")
                    </div>

                </div>
                <!-- container-fluid -->

            </div>
            <!-- content -->

            <footer class="footer">
                جميع الحقوق محفوظة © | DMI information technology (Nourdeen) {{date('Y')}}  {{config('global.name')}}
            </footer>

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->

    <script src="{{asset('/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="{{asset('/assets/js/metismenu.min.js')}}"></script>
    <script src="{{asset('/assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('/assets/js/waves.min.js')}}"></script>


    <script src="{{asset('/assets/pages/dashboard.init.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('/assets/js/app.js')}}"></script>

    @yield('scripts')
    <!-- Scripts -->

</body>

</html>
