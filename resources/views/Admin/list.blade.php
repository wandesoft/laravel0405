@extends('public.public')
@section('public')
<div>
    @include('public.sub')
    我是list页面</br>
    我是list页面</br>
    我是list页面</br>
    我是list页面</br>
    我是list页面</br>
    我是list页面</br>
    我是list页面</br>
    我是list页面</br>
    <form method="post" action="{{ route('aaaaaa') }}">
        {{--<input type="hidden" name="_token" value="<?php echo csrf_token()?>"/>--}}
        {{--@csrf--}}
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">姓名</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="name">密码</label>
            <input type="text" class="form-control" name="password" id="password" value="{{ old('password') }}">
        </div>
        <div class="form-group">
            <label for="name">年龄</label>
            <input type="text" class="form-control" name="age" id="age" value="{{ old('age') }}">
        </div>
        <div class="form-group">
            <label for="name">邮箱</label>
            <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label for="name">头像</label>
            <input type="file" class="form-control" name="file" id="file" >
        </div>
        <button type="submit" class="btn">提交</button>
    </form>
</div>
@endsection
