{{--活动页面--}}

@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{asset('css/pages/act.css')}}" />
@endsection

@section('content')
    <h3>近期活动</h3>
    <section class="recent-act">
        <div id="recentActCarousel" class="carousel slide recent-act-carousel" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="..." alt="act 11111">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="..." alt="act 22222">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="..." alt="act 33333">
                </div>
            </div>
            <a class="carousel-control-prev" href="#recentActCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#recentActCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="act-info j_act_info">
            <p class="active">info 11111</p>
            <p>info 22222</p>
            <p>info 33333</p>
        </div>
    </section>
    <h3>校园动态</h3>
    <ul>
        <li>1111111111111111111111111</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
        <li>5</li>
        <li>6</li>
    </ul>
@endsection

@section('js')
    <script src="{{asset('js/pages/act.js')}}"></script>
@endsection