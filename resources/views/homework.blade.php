@extends('layouts.app')

@section('css')
@endsection

@section('content')
    <div class="workship-box">
        <div class="food-title">今日作业</div>
        <div class="ws-nav">
            @foreach($homework as $w)
            <div class="ws-list">
                <div class="ws-class">{{$w->classInfo['name']}}</div>
                <div class="ws-task">
                    <p>{{$w['content']}}</p>
                </div>
            </div>
            @endforeach

        </div>

    </div>
@endsection

@section('js')
@endsection