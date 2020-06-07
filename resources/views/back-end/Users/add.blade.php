@extends('back-end.layouts.admin')
@section('style')
<style>
label.error {
    color: red;
}

input.error {
    border: 2px solid red;
}
</style>
@endsection
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Thêm Thành Viên</h3>
    </div>
    <form id="add-product-form" action="{{ asset('') . 'admin/member/save-add'}}" method="post"
        enctype="multipart/form-data" style="padding:20px">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Tên Tài khoản <span class="text-danger">*</span></label>
                    <input type="text" name="username" class="form-control " placeholder="Nhập tên sản phẩm">
                </div>
                <div class="form-group">
                    <label for="">Họ tên <span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control " placeholder="Nhập tên sản phẩm">
                </div>
                <div class="form-group">
                    <label for="">Email <span class="text-danger">*</span></label>
                    <input type="email" name="email" class="form-control " placeholder="Nhập tên sản phẩm">
                </div>
                <div class="form-group">
                    <label for="">Địa Chỉ <span class="text-danger">*</span></label>
                    <input type="text" name="address" class="form-control " placeholder="Nhập tên sản phẩm">
                </div>
                <div class="form-group">
                    <label>Vai Trò</label>
                    <select class="form-control" name="level">
                        <option value="0">Thành Viên</option>
                        <option value="1">Quản Trị</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Mật Khẩu <span class="text-danger">*</span></label>
                    <input type="password" name="pass" class="form-control " placeholder="Nhập tên sản phẩm">
                </div>
                <div class="form-group">
                    <label for="">Nhập Lại Mật Khẩu <span class="text-danger">*</span></label>
                    <input type="password" name="passagain" class="form-control " placeholder="Nhập tên sản phẩm">
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <img src="{{ asset('').'giao-dien/images/default-image.jpg' }}" class="img-fluid"
                            id="img-preview">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Logo sản phẩm<span class="text-danger">*</span></label>
                    <input type="file" onchange="encodeImageFileAsURL(this)" name="image" class="form-control">
                </div>

            </div>
            <div class="col-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-sm btn-primary">Tạo</button>&nbsp;
                <a href="{{ asset('').'cars'}}" class="btn btn-sm btn-danger">Hủy</a>
            </div>
        </div>
    </form>
</div>

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
    if (file === undefined) {
        $("#img-preview").attr("src", "{{ asset('').'giao-dien/images/default-image.jpg' }}");
        return false;
    }
    var reader = new FileReader();
    reader.onloadend = function() {
        $("#img-preview").attr("src", reader.result);
    }
    reader.readAsDataURL(file);
}

</script>
@endsection