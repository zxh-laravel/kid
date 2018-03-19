@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{asset('css/pages/welcome.css')}}" />
@endsection

@section('content')
    <h4>{{$school['name']}}</h4>
    <p>{{$school['content']}}</p>

@endsection

@section('js')
    <script src="{{asset('js/pages/welcome.js')}}"></script>
@endsection