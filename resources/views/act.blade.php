{{--活动页面--}}

@extends('layouts.app')

@section('css')
@endsection

@section('content')
    <div class="sum-act">
        <div class="act-title">近期活动</div>
        <div class="toge-act">
            <div class="act-box">
                <div class="act-swipper-cont">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ asset('img/back2.jpg') }}" width="100%" alt="" /></a></div>
                        <div class="swiper-slide"><a href="#"><img src="{{ asset('img/back1.jpg') }}" width="100%" /></a></div>
                        <div class="swiper-slide"><a href="#"><img src="{{ asset('img/back3.jpg') }}" width="100%" /></a></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="act-txt-zx">
                <ul>
                    @foreach($activities as $act)
                    <li><a href="">{{$act['title']}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <!--Begin 校园动态（新闻）-->
    <div class="sun-news">
        <div class="news-title">校园动态</div>
        <div class="news-box">
            <div class="news-list">
                <ul class="news-nav">
                    @foreach($news as $new)
                    <li><a href="">{{$new['title']}}</a> <span class="news-date">{{$new['created_at']}}</span> </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
@endsection

@section('js')
@endsection