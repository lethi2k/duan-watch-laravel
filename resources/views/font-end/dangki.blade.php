@extends('font-end.base')
@section('content')
<div class="container">
    <div class="col-lg-12 my-5">
        <h2 class="heading-secondary mb--30">Đăng Kí</h2>
        <div class="login-reg-box p-4 bg--2">
            <form class="form" action="giao-dien/dangki" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-row mb--20">
                    <div class="col-md-6 mb-sm--20">
                        <div class="form__group">
                            <label for="account_fname" class="form__label">Tên Đăng Nhập<span>*</span></label>
                            <input type="text" name="account_fname" id="account_fname"
                                class="form__input form__input--2">
                        </div>                
                            @if ($errors->has('account_fname'))          
                            <p class="help is-danger" style ="color:red;">{{ $errors->first('account_fname') }}</p>
                            @endif
                    </div>
                    <div class="col-md-6">
                        <div class="form__group">
                            <label for="account_lname" class="form__label">Họ Và Tên<span>*</span></label>
                            <input type="text" name="account_lname" id="account_lname"
                                class="form__input form__input--2">
                        </div>
                        @if ($errors->has('account_lname'))                        
                            <p class="help is-danger" style ="color:red;">{{ $errors->first('account_lname') }}</p>
                         @endif
                    </div>
                </div>
                <div class="form__group mb--20">
                    <label class="form__label" for="image">
                        Ảnh đại diện<span>*</span>
                    </label>
                    <input type="file" name="image" id="image" class="form__input form__input--2 py-3">
                </div>
                @if ($errors->has('image'))                        
                            <p class="help is-danger" style ="color:red;">{{ $errors->first('image') }}</p>
                @endif

                <div class="form__group mb--20">
                    <label class="form__label" for="register_email">
                        địa chỉ email<span>*</span>
                    </label>
                    <input type="text" name="register_email" id="register_email" class="form__input form__input--2">
                </div>
                @if ($errors->has('register_email'))                        
                    <p class="help is-danger" style ="color:red;">{{ $errors->first('register_email') }}</p>
                @endif
                <div class="form__group mb--20">
                    <label class="form__label" for="register_email">
                        địa chỉ<span>*</span>
                    </label>
                    <input type="text" name="register_address" id="register_address" class="form__input form__input--2">
                </div>
                @if ($errors->has('register_address'))                        
                    <p class="help is-danger" style ="color:red;">{{ $errors->first('register_address') }}</p>
                @endif
                <div class="form__group mb--20">
                    <label class="form__label" for="register_password">
                        mật khẩu <span>*</span>
                    </label>
                    <input type="password" name="register_password" id="register_password"
                        class="form__input form__input--2">
                </div>
                @if ($errors->has('register_password'))                        
                    <p class="help is-danger" style ="color:red;">{{ $errors->first('register_password') }}</p>
                @endif
                <div class="form__group mb--20">
                    <label for="cur_password" class="form__label">Nhập Lại mật khẩu *</label>
                    <input type="password" name="cur_password" id="cur_password" class="form__input form__input--2">
                </div>
                @if ($errors->has('cur_password'))                        
                    <p class="help is-danger" style ="color:red;">{{ $errors->first('cur_password') }}</p>
                @endif
                <div class="form__group">
                    <button type="submit" class="btn btn-5 btn-style-2">Đăng Kí</button>
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