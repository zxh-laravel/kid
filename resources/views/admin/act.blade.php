@extends('admin.common.app')

@section('css')
@endsection

@section('content')
    <button class="btn btn-primary j_new">增加活动</button>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <td>标题</td>
                <td>内容</td>
                {{--<td>创建者</td>--}}
                {{--<td>最后修改者</td>--}}
                <td>操作</td>
            </tr>
        </thead>
        <tbody>
            @foreach($list as $t)
            <tr>
                <td>{{$t['title']}}</td>
                <td>{{$t['content']}}</td>
                {{--<td>{{$t['create_user']}}</td>--}}
                {{--<td>{{$t['last_modify_user']}}</td>--}}
                <td>
                    <button class="btn btn-primary j_edit" data-id="{{$t['id']}}">编辑</button>
                    <button class="btn btn-warning j_delete" data-id="{{$t['id']}}">删除</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

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
    <script src="{{asset('js/admin/act.js')}}"></script>
@endsection