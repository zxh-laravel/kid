<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/base/bootstrap.css') }}" rel="stylesheet">
    @yield('css')
</head>
<style>
    /*body{
        background: -moz-linear-gradient(top, #204c71 0%, #83dae3 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #204c71), color-stop(100%,#83dae3));
        background: -webkit-linear-gradient(top, #204c71 0%, #83dae3 100%);
        background: -o-linear-gradient(top, #204c71 0%, #83dae3 100%);
        background: -ms-linear-gradient(top, #204c71 0%, #83dae3 100%);
        background: linear-gradient(to bottom, #204c71 0%, #83dae3 100%);
        }*/

</style>
<body>
     <div>
         <div id="header">

         </div>
     @yield('content')

    </div>

    <!-- Scripts -->
    <script src="{{asset('js/base/jquery.js')}}"></script>
    <script src="{{asset('js/base/bootstrap.js')}}"></script>
    @yield('js')
{{--    <script src="{{ asset('js/app.js') }}"></script>--}}
</body>
</html>
