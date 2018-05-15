@extends('admin.common.app')

@section('css')
@endsection

@section('content')
    <button class="btn btn-primary j_new">增加食谱</button>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <td>内容</td>
                <td>图片</td>
                <td>餐时</td>
                <td>餐类</td>
                <td>日期</td>
                <td>操作</td>
            </tr>
        </thead>
        <tbody>
            @foreach($list as $t)
            <tr>
                <td>{{$t['content']}}</td>
                <td><img src="{{$t['img']}}" /></td>
                <td>
                    @if ($t['dateType'] == 1)
                    早餐
                    @elseif($t['dateType'] ==2)
                    中餐
                    @else
                    晚餐
                    @endif
                </td>
                <td>
                    @if ($t['foodType'] == 1)
                        主食
                    @elseif($t['foodType'] ==2)
                        配菜
                    @else
                        点心
                    @endif
                </td>
                <td>{{$t['date']}}</td>
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
    <script src="{{asset('js/base/moment.js')}}"></script>
    <script src="{{asset('js/base/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{asset('js/admin/food.js')}}"></script>
@endsection