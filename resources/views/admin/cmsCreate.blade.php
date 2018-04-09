@extends('admin.common.app')

@section('css')
    <link rel="stylesheet" href="{{asset('css/pages/admin/cms.css')}}" />
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
        @if ($item['id'])
        <button type="submit" class="btn btn-primary j_save" data-id="{{$item['id']}}">保存</button>
        @else
        <button type="submit" class="btn btn-primary j_save">保存</button>
        @endif
@endsection

@section('js')
    <script src="{{asset('js/admin/cms.js')}}"></script>
@endsection