@extends('font-end.base')
@section('content')
<div class="container">
    <div class="col-lg-12 mb-md--40 py-5">
        <h2 class="heading-secondary mb--30">Tạo mới mật khẩu user</h2>
        <div class="login-reg-box p-4 bg--2">
            <form class="form" action="" method="post">
                @csrf

                <div class="form__group mb--20">
                    <label class="form__label" for="register_name">
                        Tên tài khoản<span>*</span>
                    </label>
                    <input type="text" name="register_name" value="{{ $username }}" class="form__input form__input--2"
                        disabled>
                </div>


                <div class="form__group mb--20">
                    <label class="form__label" for="register_email">
                        địa chỉ email<span>*</span>
                    </label>
                    <input type="text" name="register_email" value="{{ $email}}" class="form__input form__input--2"
                        disabled>
                </div>
                <div class="form__group mb--20">
                    <label class="form__label" for="register_pass">
                        Mật Khẩu Mới<span>*</span>
                    </label>
                    <input type="password" name="register_pass" class="form__input form__input--2">
                </div>
                @if ($errors->has('register_pass'))
                <p class="help is-danger" style="color:red;">
                    {{ $errors->first('register_pass') }}</p>
                @endif
                <div class="form__group mb--20">
                    <label class="form__label" for="register_reset_pass">
                        Nhập Lại Mật Khẩu Mới<span>*</span>
                    </label>
                    <input type="password" name="register_reset_pass" class="form__input form__input--2">
                </div>
                @if ($errors->has('register_reset_pass'))
                <p class="help is-danger" style="color:red;">
                    {{ $errors->first('register_reset_pass') }}</p>
                @endif
                <div class="form__group d-flex align-items-center">
                    <button type="submit" class="btn btn-5 btn-style-1 color-1">Cập Nhập Mật Khẩu</button>
                </div>
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