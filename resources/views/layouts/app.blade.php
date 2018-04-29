<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>阳光幼儿园</title>

    <!-- Styles -->
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/base/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/base/kid.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
     <div class="wrapper">
         <div class="home-top">
             <div class="top-visual">
                 <div class="login-tc">
                     @guest
                     <a class="login-go" href="/login">登录</a>
                     @else
                     <a class="login-go" href="" onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();" >{{ Auth::user()->name }}</a>
                     @endguest
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form>
                 </div>
                 <div class="visual-inner">
                     <div class="sild-inner">
                         <h1>
                             <img src="{{ asset('img/visual_logo.png') }}" />
                         </h1>
                         <div class="swiper-container">
                             <div class="swiper-wrapper">
                                 <div class="swiper-slide"><img src="{{ asset('img/back2.jpg') }}" width="100%" alt="" /></div>
                                 <div class="swiper-slide"><img src="{{ asset('img/back1.jpg') }}" width="100%" /> </div>
                                 <div class="swiper-slide"><img src="{{ asset('img/back3.jpg') }}" width="100%" /></div>
                             </div>
                             <!-- Add Arrows -->
                             <div class="swiper-button-next"></div>
                             <div class="swiper-button-prev"></div>
                         </div>

                     </div>
                     <img class="inner-left" src="{{ asset('img/visual_obj_chara_01.png') }}" />
                     <img class="inner-right" src="{{ asset('img/visual_obj_chara_02.png') }}" />
                 </div>
             </div>
         </div>
         <div class="sun-container">
             <!--Begin NavBar-->
             <div class="sun-navbar">
                 <div class="s-ul-box">
                     <ul class="s-ul">
                         <li class="active"><a href="/">官网首页</a>
                         </li>
                         <li><a href="/act">多彩校园</a></li>
                         <li><a href="/food">营养食谱</a></li>
                         <li><a href="/family">父母课堂</a></li>
                         <li><a href="/homework">今日作业</a></li>
                         <li><a href="/online">在线报名</a></li>
                     </ul>
                 </div>
             </div>
             @yield('content')
         </div>
         <footer>
             <div class="sum-footer">
                 <p class="fooer-left">
                     Copyright©  - DingXin
                 </p>
                 <p class="fooer-right">
                     版权所有：阳光幼儿园
                 </p>
             </div>
         </footer>
    </div>

    <!-- Scripts -->
    <script src="{{asset('js/base/jquery.js')}}"></script>
    <script src="{{asset('js/base/swiper.min.js')}}"></script>
    <script src="{{ asset('js/base/kid.js') }}"></script>
     @yield('js')
</body>
</html>
