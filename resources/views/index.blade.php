@extends('layouts.app')

@section('css')

@endsection
@section('content')
<div class="sun-content">
    <div class="sun-left">
        <!--校园介绍+教师介绍-->
        <div class="intro-box">
            <div class="sc-intro">
                <div class="sc-title">
                    <h1>校园介绍</h1></div>
                <div class="sc-text">
                    <img src="{{ asset('img/sc-intro.jpg') }}"/>
                    <p>
                        {{$school['content']}}
                    </p>
                </div>
            </div>

            <div class="tc-intro">
                <h1>教师介绍</h1>
                <div class="tc-intro-container">
                    <div class="swiper-wrapper tc-wrapper">
                        @foreach ($bestTeachers as $teacher)
                        <div class="swiper-slide" style="text-align: left;">
                            <div class="tc-img">
                                <img src="{{$teacher['img']}}" width="100%" alt=""/>
                            </div>
                            <div class="tc-text">
                                <p class="tc-name"><span class="tc-sp">教师：</span>{{$teacher['name']}}</p>
                                <p class="tc-say"><span class="tc-sp">留言：</span>{{$teacher['word']}}</p>
                                <p class="tc-gold">
                                    <span class="tc-sp">荣誉：</span>
                                    <span class="kid-like">{{$teacher['content']}}</span>
                                </p>
                                <p class="tc-now">
                                    <span class="tc-sp">现任：</span>
                                    {{$teacher->classInfo['name']}}老师
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- Add Arrows -->

                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </div>


    </div>

    <div class="sun-right">
        <div class="sun-message">
            <div class="message-box">
                <h1 class="message-title">联系我们</h1>
                <div class="message-list">
                    <span class="me-atr">Tel：</span>
                    <span class="me-val">{{$school['mobile']}}</span>
                </div>

                <div class="message-list">
                    <span class="me-atr">微信：</span>
                    <span class="me-val">{{$school['wechat']}}</span>
                </div>
                <div class="message-list">
                    <span class="me-atr">地址：</span>
                    <span class="me-val">{{$school['address']}}</span>
                </div>
            </div>
        </div>

        <div class="sun-time right-yl-box mar-20">
            <div class="sun-time-box">
                <h1 class="time-tile">幼儿园时间</h1>
                <div class="time-list">
                    <span class="time-atr">开园：</span>
                    <span class="time-val">{{$school['open_time']}}</span>
                </div>
                <div class="time-list">
                    <span class="time-atr">闭园：</span>
                    <span class="time-val">{{$school['close_time']}}</span>
                </div>
            </div>

        </div>

        <div class="sun-time right-yl-box mar-20">
            <div class="sun-time-box">
                <h1 class="course-tile">特制课程</h1>
                <div class="course-list">
                    <ul>
                        @foreach($special as $s)
                        <li><span>{{$s['created_at']}}</span>{{$s['name']}}</li>
                        @endforeach
                    </ul>
                </div>

            </div>

        </div>


    </div>

</div>
@endsection

@section('js')

@endsection