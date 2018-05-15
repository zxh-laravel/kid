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
            <label for="inputName">作业</label>
            @if ($item['content'])
                <input type="text" name="name" class="form-control j_name" id="inputName"  placeholder="名称" value="{{$item['content']}}">
            @else
                <input type="text" name="name" class="form-control j_name" id="inputName"  placeholder="名称" >
            @endif
        </div>
        <div class="form-group">
            <label for="inputName">班级</label>
            <select class="form-control j_class" name="class_id">
                @foreach($classes as $c)
                    @if ($item['class_id'] && $item['class_id'] == $c['id'])
                    <option value="{{$c['id']}}" selected>{{$c['name']}}</option>
                    @else
                    <option value="{{$c['id']}}" >{{$c['name']}}</option>
                    @endif
                @endforeach
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
    <script src="{{asset('js/admin/homework.js')}}"></script>
@endsection