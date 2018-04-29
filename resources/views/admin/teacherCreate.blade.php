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
            <label for="inputName">名称</label>
            @if ($item['name'])
                <input type="text" name="name" class="form-control j_name" id="inputName"  placeholder="名称" value="{{$item['name']}}">
            @else
                <input type="text" name="name" class="form-control j_name" id="inputName"  placeholder="名称" >
            @endif
        </div>
        <div class="form-group">
            <label for="inputName">班级</label>
            <select class="form-control j_class" name="class_id" class="1">
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
            <label for="inputContent">留言</label>
            @if ($item['word'])
                <textarea name="word" class="form-control j_word" id="inputContent" rows="3">{{$item['word']}}</textarea>
            @else
                <textarea name="word" class="form-control j_word" id="inputContent" rows="3"></textarea>
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
            <label for="inputContent">置顶首页</label>
            <br />
            @if($item['best'] == 1)
            是：<input type="radio" name="best" value="1" class="j_best" checked>
            否：<input type="radio" name="best" value="0" class="j_best">
            @else
            是：<input type="radio" name="best" value="1" class="j_best" >
            否：<input type="radio" name="best" value="0" class="j_best" checked>
            @endif

        </div>
        @if ($item['id'])
        <button type="submit" class="btn btn-primary j_save" data-id="{{$item['id']}}">保存</button>
        @else
        <button type="submit" class="btn btn-primary j_save">保存</button>
        @endif
@endsection

@section('js')
    <script src="{{asset('js/admin/teacher.js')}}"></script>
@endsection