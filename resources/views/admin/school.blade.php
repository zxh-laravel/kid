@extends('admin.common.app')

@section('css')
    <link rel="stylesheet" href="{{asset('css/base/bootstrap-datetimepicker.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/pages/admin/school.css')}}" />
@endsection

@section('content')
    <div class="form-group">
        <label for="inputName">学校名称</label>
        <input class="form-control" name="name" id="inputName" value="{{$school['name']}}">
    </div>
    <div class="form-group">
        <label for="inputContent">学校简介</label>
        <textarea class="form-control" name="content" id="inputContent">{{$school['content']}}</textarea>
    </div>
    <div class="form-group">
        <label for="inputMobile">联系方式</label>
        <input class="form-control" id="inputMobile" name="mobile" value="{{$school['mobile']}}">
    </div>
    <div class="form-group">
        <label for="inputWeChat">微信</label>
        <input class="form-control" id="inputWeChat" name="wechat" value="{{$school['wechat']}}">
    </div>
    <div class="form-group">
        <label for="inputAddress">地址</label>
        <input class="form-control" id="inputAddress" name="address" value="{{$school['address']}}">
    </div>
    <div class="form-group">
        <label for="inputOpenTime">开园时间</label>
        <input class="form-control j_open_time" id="inputOpenTime" name="open_time" value="{{$school['open_time']}}">
    </div>
    <div class="form-group">
        <label for="inputCloseTime">闭园时间</label>
        <input class="form-control j_close_time" id="inputCloseTime" name="close_time" value="{{$school['close_time']}}">
    </div>
    <div class="form-group">
        <button class="btn btn-primary j_save" >保存</button>
    </div>
@endsection

@section('js')
    <script src="{{asset('js/base/moment.js')}}"></script>
    <script src="{{asset('js/base/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{asset('js/admin/school.js')}}"></script>
@endsection