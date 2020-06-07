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
        <h3 class="card-title">Thêm sản phẩm </h3>
    </div>
    <form id="add-product-form" action="{{ asset('') . 'admin/advertisement/update/'.$cate->id}}" method="post"
        enctype="multipart/form-data" style="padding:20px">
        @csrf
        <input type="hidden" name="id" value="{{ $cate->id}}">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Tên advertisement <span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control " value="{{$cate->name}}">
                </div>
                <div class="form-group">
                    <label for="">Tiêu Đề <span class="text-danger">*</span></label>
                    <input type="text" name="title" class="form-control " value="{{$cate->title}}">
                </div>
                <div class="form-group">
                    <label for="">Giá <span class="text-danger">*</span></label>
                    <input type="text" name="price" class="form-control " value="{{$cate->price}}">
                </div>
                <div class="form-group">
                    <label for="">Nội dung <span class="text-danger">*</span></label>
                    <textarea name="area1" cols="110" class="ha">
                        {{$cate->content}}
                     </textarea>
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <img src="{{ asset(''). $cate->images }}" class="img-fluid" id="img-preview">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Logo sản phẩm<span class="text-danger">*</span></label>
                    <input type="file" onchange="encodeImageFileAsURL(this)" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label>Trạng Thái</label>
                    <select class="form-control" name="status">
                        
                        <option value="0" @if ($cate->status == 0 ) selected="selected" @endif>Ẩn</option>
                        <option value="1" @if ($cate->status == 1 ) selected="selected" @endif>Hiện</option>
                    </select>
                </div>

            </div>
            <div class="col-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-sm btn-primary">Tạo</button>&nbsp;
                <a href="{{ asset('').'admin/advertisement/index'}}" class="btn btn-sm btn-danger">Hủy</a>
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
//<![CDATA[
bkLib.onDomLoaded(function() {
    nicEditors.allTextAreas()
});
//]]>
function encodeImageFileAsURL(element) {
    var file = element.files[0];
    if (file === undefined) {
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
    $('#add-product-form').validate({
        rules: {
            name: {
                required: true,
                minlength: 2,
                remote: {
                    url: "{{ asset('') . 'admin/advertisement/check-name'}}",
                    type: "post",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        name: function() {
                            return $("input[name='name']").val();
                        },
                        id: function() {
                            return $("input[name='id']").val();
                        }
                    }
                }
            },
            title: {
                required: true,
                minlength: 2
            },
            price: {
                required: true,
                number: true,
                min: 1
            },
            area1: {
                required: true,
                minlength: 2
            },
            image: {

                extension: "jpg|png|jpeg|gif|svg"
            }
        },

        messages: {
            name: {
                required: "Nhập tên sản phẩm",
                minlength: "Tối thiểu 2 ký tự",
                remote: "Tên sản phẩm đã tồn tại, vui lòng chọn tên khác",

            },
            title: {
                required: "nhập tiêu đề",
                minlength: "nhập tối thiểu 2 kí tự"
            },
            price: {
                required: "nhập Giá",
                number: "yêu cầu nhập số",
                min: "giá trị thấp nhất là 1"
            },
            area1: {
                required: "nhập nội dung",
                minlength: "nhập tối thiểu 2 kí tự"
            },
            image: {

                extension: "Hãy chọn file định dạng ảnh (jpg|png|jpeg|gif|svg)"
            }
        }
    });
});
</script>
@endsection