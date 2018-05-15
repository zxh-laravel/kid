@extends('admin.common.app')

@section('css')
@endsection

@section('content')
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <td>姓名</td>
                <td>性别</td>
                <td>电话</td>
                <td>年龄</td>
                {{--<td>最后修改者</td>--}}
            </tr>
        </thead>
        <tbody>
            @foreach($list as $t)
            <tr>
                <td>{{$t['name']}}</td>
                <td>{{$t['sex']}}</td>
                <td>{{$t['mobile']}}</td>
                <td>{{$t['age']}}</td>
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
@endsection