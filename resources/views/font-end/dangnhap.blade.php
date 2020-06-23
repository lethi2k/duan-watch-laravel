@extends('font-end.base')
@section('content')
<div class="container">
    <div class="col-lg-12 mb-md--40 py-5">
        <h2 class="heading-secondary mb--30">Đăng Nhập</h2>
        <div class="login-reg-box p-4 bg--2">
            <form class="form" action="{{ asset('') . 'giao-dien/dangnhap'}}" method="post">
                @csrf
                <div class="form__group mb--20">
                    <label class="form__label" for="username_email">
                        Tài Khoản<span>*</span>
                    </label>
                    <input type="text" name="username" id="username_email" class="form__input form__input--2">
                </div>
                @if ($errors->has('username'))
                <p class="help is-danger" style="color:red;">
                    {{ $errors->first('username') }}</p>
                @endif
                <div class="form__group mb--20">
                    <label class="form__label" for="password">
                        Mật Khẩu <span>*</span>
                    </label>
                    <input type="password" name="pass" id="password" class="form__input form__input--2">
                </div>
                @if ($errors->has('pass'))
                <p class="help is-danger" style="color:red;">
                    {{ $errors->first('pass') }}</p>
                @endif
                <div class="form__group mb--20">
                    <input type="checkbox" name="remember" id="sessionStore" class="form__checkbox">
                    <label for="sessionStore" class="form__checkbox--label">Ghi nhớ mật khẩu</label>
                </div>
                <div class="form__group d-flex align-items-center">
                    <button type="submit" class="btn btn-5 btn-style-1 color-1">Đăng Nhập</button>
                </div>
                <a href="giao-dien/laymk" class="forgot-pass mt-5">Quên Mật Khẩu ?</a>
            </form>


            <br><br>

            @if(session('thongbao'))
            <div class="alert alert-success">
                {{session('thongbao')}}
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
@section('js')

@endsection