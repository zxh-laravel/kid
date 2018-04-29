@extends('layouts.app')

@section('css')
@endsection

@section('content')
    <div class="course-box">
        <div class="news-title">父母课堂</div>
        <div class="course-content">
            @foreach($family as $f)
            <div class="fm-course-list">
                <div class="fm-cr-img">
                    <img src="{{$f['banner']}}" />
                </div>
                <div class="fm-cr-intro">
                    <h4 class="cr-title">{{$f['title']}}</h4>
                    <p class="cr-der">{{$f['content']}}</p>
                    <a class="cr-detial" href="#">阅读全文</a>
                </div>
            </div>
            @endforeach
        </div>

    </div>
@endsection

@section('js')
@endsection