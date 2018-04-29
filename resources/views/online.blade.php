@extends('layouts.app')

@section('css')
@endsection

@section('content')
    <div class="bm-box">
        <div class="food-title">在线报名</div>
        <div class="bm-box">
            <div class="bm-form">
                <form action="/online" method="post">
                    {{$result}}
                    <div class="input-group">
                        <label class="input-name">宝宝姓名：</label>
                        <div class="input-val"><input type="text" name="name" id="" /></div>
                    </div>

                    <div class="input-group">
                        <label class="input-name">宝宝性别：</label>
                        <select name="sex" class="input-val">
                            <option value="1">男</option>
                            <option value="2">女</option>
                        </select>

                    </div>

                    <div class="input-group">
                        <label class="input-name">您的电话：</label>
                        <div class="input-val"><input type="tel" name="mobile" id="" /></div>
                    </div>

                    <div class="input-group">
                        <label class="input-name">宝宝年龄：</label>
                        <div class="input-val"><input type="text" name="age" id="" /></div>
                    </div>
                    <div class="input-bt">
                        <input class="bmbt" type="submit" value="报名"/>
                    </div>
                </form>

            </div>

        </div>


    </div>
@endsection

@section('js')
@endsection