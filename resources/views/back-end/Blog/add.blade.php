@extends('back-end.layouts.admin')
@section('style')
<style>
label.error {
        color:red;
    }
 input.error {
        border : 2px solid red;
    }

</style>
@endsection
@section('content')
<div class="card card-primary">
<div class="card-header">
    <h3 class="card-title">Thêm bài viết</h3>
</div>
<form id="add-product-form" action="{{ asset('') . 'admin/blog/save-add'}}" method="post" enctype="multipart/form-data" style="padding:20px">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Danh Mục Blog  <span class="text-danger">*</span></label>

                        <select class="form-control" name = "danhmucbl">
                           @foreach ($catebl as $ca)
                            <option value="{{ $ca->id }}">{{ $ca->cate_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Tên Blog<span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control " placeholder="Nhập tên sản phẩm">
                    </div> 
                    <div class="form-group">
                        <label for="">Mô Tả Ngắn<span class="text-danger">*</span></label>
                        <input type="text" name="mota" class="form-control " placeholder="Nhập tên sản phẩm">
                    </div>
                             
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <img src="{{ asset('').'giao-dien/images/default-image.jpg' }}" class="img-fluid" id="img-preview">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh bài viết<span class="text-danger">*</span></label>
                        <input type="file" onchange="encodeImageFileAsURL(this)"  name="image" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="">User<span class="text-danger">*</span></label>
                        <select class="form-control" name ='user'>
                           @foreach ($userbl as $showus)
                            <option value="{{ $showus->id }}">{{ $showus->username }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nội Dung<span class="text-danger">*</span></label>
                        <textarea name="area1" cols="132" class="ha"></textarea>
                        
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
            if(file === undefined){
                $("#img-preview").attr("src", "{{ asset('').'giao-dien/images/default-image.jpg' }}");
                return false;
            }
            var reader = new FileReader();
            reader.onloadend = function() {
                $("#img-preview").attr("src", reader.result);
            }
            reader.readAsDataURL(file);
        }
        $(document).ready(function() {
            $('#add-product-form').validate({
                rules:{
                    name: {
                    required: true,
                    minlength: 2
                    },
                    mota:{
                        required: true,
                        minlength: 2
                    },
                    image: {
                        required: true,
                        extension: "jpg|png|jpeg|gif|svg"
                    },
                    area1: {
                        required: true,
                        minlength: 2
                    }
                },
                
                messages:{
                    name: {
                        required: "Nhập tên sản phẩm",
                        minlength: "Tối thiểu 2 ký tự"
                       
                    },
                    mota:{
                        required:"nhập mô tả",
                        minlength: "nhập tối thiểu 2 kí tự"
                    },
                    image: {
                        required: "Hãy chọn ảnh sản phẩm",
                        extension: "Hãy chọn file định dạng ảnh (jpg|png|jpeg|gif|svg)"
                    },
                    area1: {
                        required: "Nhập nội dung",
                        minlength: "Tối thiểu 2 ký tự"
                    }
                }
            });
        });
    </script>
@endsection