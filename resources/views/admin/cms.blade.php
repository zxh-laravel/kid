@extends('admin.common.app')

@section('css')
    <link rel="stylesheet" href="{{asset('css/pages/admin/cms.css')}}" />
@endsection

@section('content')
    <p>
        <button class="btn btn-primary j_new">添加</button>
    </p>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">名称</th>
            <th scope="col">图片</th>
            <th scope="col">内容</th>
            <th scope="col">操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($list as $item)
        <tr>
            <th scope="row">{{$item['id']}}</th>
            <td>{{$item['name']}}</td>
            <td><img src="{{$item['img']}}" class="img-show"/></td>
            <td>{{$item['content']}}</td>
            <td>
                <button class="btn btn-sm btn-info j_edit" data-id="{{$item['id']}}">编辑</button>
                <button class="btn btn-sm btn-danger j_delete" data-id="{{$item['id']}}">删除</button>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {!! $list->links() !!}

    <div class="modal fade" id="deleteDialog" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">提示</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    确定删除吗？
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                    <button type="button" class="btn btn-primary j_confirm_to_delete">确定删除</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{asset('js/admin/cms.js')}}"></script>
@endsection