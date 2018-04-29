@extends('layouts.app')

@section('css')
@endsection

@section('content')
    <div class="sun-food">
        <div class="food-title">今日食谱</div>
        <div class="food-table">
            <div class="row food-row">
                <div class="col-3">&nbsp;</div>
                <div class="col-3"><span class="f-type">主食</span></div>
                <div class="col-3"><span class="f-type">配菜</span></div>
                <div class="col-3"><span class="f-type">点心</span></div>
            </div>

            <div class="row">
                <div class="col-3"><h4 class="f-time">早</h4><span class="f-time-num">9:30</span></div>
                @foreach($foodA as $f)
                @if($f['foodType'] == 1)
                <div class="col-3"><div class="f-src"><img src="{{$f['img']}}" alt="" /><span class="fd-name">{{$f['content']}}</span></div></div>
                @endif
                @if($f['foodType'] == 2)
                <div class="col-3"><div class="f-src"><img src="{{$f['img']}}" alt="" /><span class="fd-name">{{$f['content']}}</span></div></div>
                @endif
                @if($f['foodType'] == 2)
                    <div class="col-3"><div class="f-src"><img src="{{$f['img']}}" alt="" /><span class="fd-name">{{$f['content']}}</span></div></div>
                @endif
                @endforeach
            </div>

                <div class="row">
                    <div class="col-3"><h4 class="f-time">早</h4><span class="f-time-num">9:30</span></div>
                    @foreach($foodB as $f)
                    @if($f['foodType'] == 1)
                        <div class="col-3"><div class="f-src"><img src="{{$f['img']}}" alt="" /><span class="fd-name">{{$f['content']}}</span></div></div>
                    @endif
                    @if($f['foodType'] == 2)
                        <div class="col-3"><div class="f-src"><img src="{{$f['img']}}" alt="" /><span class="fd-name">{{$f['content']}}</span></div></div>
                    @endif
                    @if($f['foodType'] == 2)
                        <div class="col-3"><div class="f-src"><img src="{{$f['img']}}" alt="" /><span class="fd-name">{{$f['content']}}</span></div></div>
                    @endif
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-3"><h4 class="f-time">早</h4><span class="f-time-num">9:30</span></div>
                    @foreach($foodC as $f)
                    @if($f['foodType'] == 1)
                        <div class="col-3"><div class="f-src"><img src="{{$f['img']}}" alt="" /><span class="fd-name">{{$f['content']}}</span></div></div>
                    @endif
                    @if($f['foodType'] == 2)
                        <div class="col-3"><div class="f-src"><img src="{{$f['img']}}" alt="" /><span class="fd-name">{{$f['content']}}</span></div></div>
                    @endif
                    @if($f['foodType'] == 2)
                        <div class="col-3"><div class="f-src"><img src="{{$f['img']}}" alt="" /><span class="fd-name">{{$f['content']}}</span></div></div>
                    @endif
                    @endforeach
                </div>
        </div>
    </div>
@endsection

@section('js')
@endsection