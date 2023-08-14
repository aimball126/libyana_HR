<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>ecommercegroup- @yield("title")</title>
    <meta content="Menasa Erp" name="description" />
    <meta content="Themesdesign" name="Menasa Team" />
    <link rel="shortcut icon" href="{{asset('/assets/images/menasa-favicon.png')}}">

    <link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/app.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet" type="text/css">
    @include('layouts.customize')
</head>

<body>

    <!-- Begin page -->
    <div class="accountbg"></div>
    <div id="app">
        
        @yield("content")
    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->
    <script src="{{asset('/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/assets/js/metismenu.min.js')}}"></script>
    <script src="{{asset('/assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('/assets/js/waves.min.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('/js/app.js')}}"></script>
    <script src="{{asset('/assets/js/app.js')}}"></script>

</body>

</html>