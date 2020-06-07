@extends('back-end.layouts.admin')
@section('content')
<div class="card card-primary">
<div class="card-header">
    <h3 class="card-title">Sửa bài viết</h3>
</div>
<form id="edit-product-form" action="{{ asset('') . 'admin/blog/update/'.$cate->id}}" method="post" enctype="multipart/form-data" style="padding:20px">
            @csrf
            <input type="hidden" name="id" value="{{ $cate->id}}">
            <div class="row">
                <div class="col-6">

                <div class="form-group">
                        <label for="">Danh Mục Blog  <span class="text-danger">*</span></label>
                        <select class="form-control" name = "danhmucbl">
                           @foreach ($catebl as $ca)
                            <option value="{{ $ca->id }}" @if ($ca->id == $cate->cate_id ) selected="selected" @endif>{{ $ca->cate_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="">Tên sản phẩm<span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control"
                               value="{{ $cate->name_blog}}"
                            >
                    </div>
                    <div class="form-group">
                        <label for="">Mô tả<span class="text-danger">*</span></label>
                        <input type="text" name="mota" class="form-control"
                               value="{{ $cate->meta}}"
                            >
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                    <div class="col-md-6 offset-md-3">
                            <img src="{{ asset('') . $cate->images }}" class="img-fluid" id="img-preview">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh sản phẩm<span class="text-danger">*</span></label>
                        <input type="file" onchange="encodeImageFileAsURL(this)"  name="image" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="">User<span class="text-danger">*</span></label>
                        <select class="form-control" name ='user'>
                           @foreach ($userbl as $showus)
                            <option value="{{ $showus->id }}" @if ($ca->id == $cate->cate_id ) selected="selected" @endif>{{ $showus->username }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nội Dung<span class="text-danger">*</span></label>
                        <textarea name="area1" cols="132" class="ha">{{$cate->content}}</textarea>
                        
                    </div>

                </div>
                <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-sm btn-primary">Cập nhật</button>&nbsp;
                    <a href="{{ asset('') .'admin/trademark/index' }}" class="btn btn-sm btn-danger">Hủy</a>
                </div>
            </div>
        </form>
        </div>
@endsection
@section('js')
<script>
    function encodeImageFileAsURL(element) {
        var file = element.files[0];
        if(file === undefined){
            $("#img-preview").attr("src", "{{  asset('') . $cate->images }}");
            return false;
        }
        var reader = new FileReader();
        reader.onloadend = function() {
            $("#img-preview").attr("src", reader.result);
        }
        reader.readAsDataURL(file);
    }
    $(document).ready(function() {
            $('#edit-product-form').validate({
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