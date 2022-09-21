<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/HTML; charset=ISO-8859-9" />
    <title>@yield('title')</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="msapplication-tap-highlight" content="no">

    <link rel="stylesheet" href="{{URL::asset('css/loader.css')}}">


    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="{{URL::asset('js/loader.js')}}"></script>

    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div class="loader"></div>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        @include('layout.header')
        <div class="app-main">
            @include('layout.sidebar')
            <div class="app-main__outer">
                <div class="app-main__inner">
                    @yield('content')
                </div>

                @include('layout.footer')

                <script type="text/javascript" src="{{URL::asset('js/main.js');}}"></script>
                <script type="text/javascript" src="{{URL::asset('js/jquery-ui.min.js');}}"></script>
                <script type="text/javascript" src="{{URL::asset('js/sweetalert2.all.min.js');}}"></script>

</body>

</html>
