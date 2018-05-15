@extends('admin.common.app')

@section('css')
@endsection

@section('content')
        @if ($item['id'])
        <div class="form-group">
            <label>ID</label>
            {{$item['id']}}
        </div>
        @endif
        <div class="form-group">
            <label for="inputName">标题</label>
            @if ($item['title'])
                <input type="text" name="title" class="form-control j_name" id="inputName"  placeholder="标题" value="{{$item['title']}}">
            @else
                <input type="text" name="title" class="form-control j_name" id="inputName"  placeholder="标题" >
            @endif
        </div>
        <div class="form-group">
            <label for="inputContent">内容</label>
            @if ($item['content'])
                <textarea name="content" class="form-control j_content" id="inputContent" rows="3">{{$item['content']}}</textarea>
            @else
                <textarea name="content" class="form-control j_content" id="inputContent" rows="3"></textarea>
            @endif
        </div>
        @if ($item['id'])
        <button type="submit" class="btn btn-primary j_save" data-id="{{$item['id']}}">保存</button>
        @else
        <button type="submit" class="btn btn-primary j_save">保存</button>
        @endif
@endsection

@section('js')
    <script src="{{asset('js/admin/act.js')}}"></script>
@endsection