@extends('back-end.layouts.admin')
@section('content')
<div class="card card-primary">
<div class="card-header">
    <h3 class="card-title">Sửa user</h3>
</div>
</div>
<form id="add-product-form" action="{{ asset('') . 'admin/member/update/'.$data->id}}" method="post"
        enctype="multipart/form-data" style="padding:20px">
        @csrf
        <input type="hidden" name="id" value="{{ $data->id}}">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Tên Tài khoản <span class="text-danger">*</span></label>
                    <input type="text" name="username" class="form-control " value = "{!! $data->username !!}" disabled="">
                </div>
                <div class="form-group">
                    <label for="">Họ tên <span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control " value = "{!! $data->name !!}">
                </div>
                <div class="form-group">
                    <label for="">Email <span class="text-danger">*</span></label>
                    <input type="email" name="email" class="form-control " value = "{!! $data->email !!}">
                </div>
                <div class="form-group">
                    <label for="">Địa Chỉ <span class="text-danger">*</span></label>
                    <input type="text" name="address" class="form-control " value = "{!! $data->address !!}">
                </div>
                <div class="form-group">
                    <label>Vai Trò</label>
                    <select class="form-control" name="level">
                        <option value="0"  @if ($data->level == 0 ) selected="selected" @endif>Thành Viên</option>
                        <option value="1"  @if ($data->level == 1 ) selected="selected" @endif>Quản Trị</option>
                    </select>
                </div>
                <div class="form-group">
                <input type="checkbox" name = "changePass" id = "chanepass">
                    <label for="">Mật Khẩu <span class="text-danger">*</span></label>
                    <input type="password" name="pass" class="form-control password" placeholder="Nhập mật khẩu" disabled="">
                </div>
                <div class="form-group">    
                    <label for="">Nhập Lại Mật Khẩu <span class="text-danger">*</span></label>
                    <input type="password" name="passagain" class="form-control password" placeholder="Nhập lại mật khẩu" disabled="">
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <img src="{{asset('') .'giao-dien/images/user/'.$data->logo}}" class="img-fluid"
                            id="img-preview">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Logo user<span class="text-danger">*</span></label>
                    <input type="file" onchange="encodeImageFileAsURL(this)" name="image" class="form-control">
                </div>

            </div>
            <div class="col-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-sm btn-primary">Tạo</button>&nbsp;
                <a href="{{ asset('').'cars'}}" class="btn btn-sm btn-danger">Hủy</a>
            </div>
        </div>
    </form>
    @if(count($errors)>0)
<div class="alert alert-danger">
    @foreach($errors->all() as $err)
    {{$err}}<br>
    @endforeach
</div>
@endif
@if(session('thongbao'))
<div class="alert alert-success">
    {{session('thongbao')}}
</div>
@endif

@endsection

@section('js')
<script>
    function encodeImageFileAsURL(element) {
        var file = element.files[0];
        if(file === undefined){
            $("#img-preview").attr("src", "{{  asset('') . $data->logo }}");
            return false;
        }
        var reader = new FileReader();
        reader.onloadend = function() {
            $("#img-preview").attr("src", reader.result);
        }
        reader.readAsDataURL(file);
    }
 
</script>
<script>
$(document).ready(function() {
    $('#chanepass').change(function(){
        if ($(this).is(":checked")) {
            $('.password').removeAttr('disabled');
        }
        else{
            $('.password').attr('disabled','');
        }
    });
});
</script>
@endsection