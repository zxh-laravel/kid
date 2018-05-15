@extends('admin.common.app')

@section('css')
    <link rel="stylesheet" href="{{asset('css/base/bootstrap-datetimepicker.min.css')}}" />
@endsection

@section('content')
        @if ($item['id'])
        <div class="form-group">
            <label>ID</label>
            {{$item['id']}}
        </div>
        @endif
        <div class="form-group">
            <label for="inputName">content</label>
            @if ($item['content'])
                <input type="text" name="content" class="form-control j_name" id="inputName"  placeholder="名称" value="{{$item['content']}}">
            @else
                <input type="text" name="content" class="form-control j_name" id="inputName"  placeholder="名称" >
            @endif
        </div>

        <div class="form-group">
            <form action="/upload" method="post" id="imgUpload">
                <label for="exampleFormControlFile1">图片</label>
                <input type="file" name="img" class="form-control-file img-upload-input" id="exampleFormControlFile1">
                @if ($item['img'])
                <p class="img-view">
                    <img src="{{$item['img']}}" class="img-show j_img_show"/>
                </p>
                @else
                <p class="img-view">
                    <img src="" class="img-show j_img_show"/>
                </p>
                @endif
            </form>
        </div>
        <div class="form-group">
            <label for="inputName">餐时</label>
            <select class="form-control j_dateType" name="dateType" >
                <option value="1" {{$item['dateType'] && $item['dateType'] == 1 ? 'checked' : ''}}>早餐</option>
                <option value="2" {{$item['dateType'] && $item['dateType'] == 2 ? 'checked' : ''}}>中餐</option>
                <option value="3" {{$item['dateType'] && $item['dateType'] == 3 ? 'checked' : ''}}>晚餐</option>
            </select>
        </div>
        <div class="form-group">
            <label for="inputName">餐类</label>
            <select class="form-control j_foodType" name="foodType" >
                <option value="1" {{$item['foodType'] && $item['foodType'] == 1 ? 'checked' : ''}}>主食</option>
                <option value="2" {{$item['foodType'] && $item['foodType'] == 2 ? 'checked' : ''}}>配菜</option>
                <option value="3" {{$item['foodType'] && $item['foodType'] == 3 ? 'checked' : ''}}>点心</option>
            </select>
        </div>
        <div class="form-group">
            <label for="inputCloseTime">时间</label>
            <input class="form-control j_time" name="date" value="{{$item['date']}}" />
        </div>
        @if ($item['id'])
        <button type="submit" class="btn btn-primary j_save" data-id="{{$item['id']}}">保存</button>
        @else
        <button type="submit" class="btn btn-primary j_save">保存</button>
        @endif
@endsection

@section('js')
    <script src="{{asset('js/base/moment.js')}}"></script>
    <script src="{{asset('js/base/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{asset('js/admin/food.js')}}"></script>
@endsection