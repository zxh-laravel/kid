<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>管理后台</title>

    <!-- Styles -->
    {{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/base/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/base.css') }}" rel="stylesheet">
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    @yield('css')
</head>
<body>
<div class="full-container">
    <div id="hd">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/admin">Admin</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link {{Request::getPathInfo() == '/admin' ? 'active' : ''}}" href="/admin">学校信息</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Request::getPathInfo() == '/admin/cms' ? 'active' : ''}}" href="/admin/cms">CMS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                @if (Auth::check())
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">网站首页</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarUserDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{Auth::user()->name}}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarUserDropdown" style="min-width: 100%;">
                                <a class="dropdown-item" href="{{Auth::logout()}}">退出</a>
                            </div>
                        </li>
                    </ul>
                @endif
            </div>
        </nav>
    </div>
    <div class="bd">
        @yield('content')
    </div>
    <div class="ft">
    </div>
</div>

<!-- Scripts -->
<script src="{{asset('js/base/jquery.js')}}"></script>
<script src="{{asset('js/base/bootstrap.js')}}"></script>
@yield('js')
{{--    <script src="{{ asset('js/app.js') }}"></script>--}}
</body>
</html>
