@extends('back-end.layouts.admin')
@section('content')
<div class="card card-primary">
<div class="card-header">
    <h3 class="card-title">Sửa sản phẩm</h3>
</div>
<form id="edit-product-form" action="{{ asset('') . 'admin/trademark/update/'.$cate->id}}" method="post" enctype="multipart/form-data" style="padding:20px">
            @csrf
            <input type="hidden" name="id" value="{{ $cate->id}}">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Tên sản phẩm<span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control"
                               value="{{ $cate->name}}"
                            >
                    </div>
                    <div class="form-group">
                        <label for="">Quốc gia<span class="text-danger">*</span></label>
                        <input type="text" name="country" class="form-control"
                               value="{{ $cate->country}}"
                            >
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                    <div class="col-md-6 offset-md-3">
                            <img src="{{ asset('') . $cate->logo }}" class="img-fluid" id="img-preview">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh sản phẩm<span class="text-danger">*</span></label>
                        <input type="file" onchange="encodeImageFileAsURL(this)"  name="image" class="form-control" >
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
            $("#img-preview").attr("src", "{{  asset('') . $cate->logo }}");
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
                    minlength: 2,
                    remote: {
                            url: "{{ asset('') . 'admin/trademark/check-name'}}",
                            type: "post",
                            data: {
                                "_token": "{{ csrf_token() }}", 
                                name: function() {
                                    return $( "input[name='name']" ).val();
                                },
                                id: function() {
                                    return $( "input[name='id']" ).val();
                                },
                            }
                        }
                    },
                    country:{
                        required: true,
                        minlength: 2
                    },
                    image: {
                        extension: "jpg|png|jpeg|gif|svg"
                    }
                },
                
                messages:{
                    name: {
                        required: "Nhập tên sản phẩm",
                        minlength: "Tối thiểu 2 ký tự",
                        remote: "Tên sản phẩm đã tồn tại, vui lòng chọn tên khác",
                       
                    },
                    country:{
                        required: "Nhập tên quốc gia",
                        minlength: "Tối thiểu 2 ký tự"
                    },
                    image: {
                        extension: "Hãy chọn file định dạng ảnh (jpg|png|jpeg|gif|svg)"
                    }
                }
            });
        });
</script>
@endsection