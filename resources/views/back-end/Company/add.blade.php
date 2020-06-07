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
    <h3 class="card-title">Thêm sản phẩm </h3>
</div>
<form id="add-product-form" action="{{ asset('') . 'admin/company/save-add'}}" method="post" enctype="multipart/form-data" style="padding:20px">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Tên Công Ty  <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control " placeholder="Nhập tên sản phẩm">
                    </div>  
                    <div class="form-group">
                        <label for="">Địa Chỉ  <span class="text-danger">*</span></label>
                        <input type="text" name="address" class="form-control " placeholder="Nhập tên sản phẩm">
                    </div>
                    <div class="form-group">
                        <label for="">Email  <span class="text-danger">*</span></label>
                        <input type="email" name="email" class="form-control " placeholder="Nhập tên sản phẩm">
                    </div>
                    <div class="form-group">
                        <label for="">Số Điện Thoại  <span class="text-danger">*</span></label>
                        <input type="number" name="phone" class="form-control " placeholder="Nhập tên sản phẩm">
                    </div>
                    <div class="form-group">
                        <label for="">Số Tài Khoản  <span class="text-danger">*</span></label>
                        <input type="number" name="accnumber" class="form-control " placeholder="Nhập tên sản phẩm">
                    </div>

                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <img src="{{ asset('').'giao-dien/images/default-image.jpg' }}" class="img-fluid" id="img-preview">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Logo Công Ty<span class="text-danger">*</span></label>
                        <input type="file" onchange="encodeImageFileAsURL(this)"  name="image" class="form-control" >
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
                    minlength: 2,
                    // remote: {
                    //         url: "{{ asset('') . 'admin/company/check-name'}}",
                    //         type: "post",
                    //         data: {
                    //             "_token": "{{ csrf_token() }}",
                    //             name: function() {
                    //                 return $( "input[name='name']" ).val();
                    //             }
                    //         }
                    //     }
                    },
                    address:{
                        required: true,
                        minlength: 2
                    },
                    email:{
                        required: true,
                        email: true
                    },
                    phone:{
                        required: true,
                        minlength: 2,
                        maxlength: 12
                    },
                    accnumber:{
                        required: true,
                        minlength: 2,
                        maxlength: 20
                    },
                    image: {
                        required: true,
                        extension: "jpg|png|jpeg|gif|svg"
                    }
                },
                
                messages:{
                    name: {
                        required: "Nhập tên công ty",
                        minlength: "Tối thiểu 2 ký tự",
                        // remote: "Tên sản phẩm đã tồn tại, vui lòng chọn tên khác",
                       
                    },
                    address:{
                        required:"nhập địa chỉ",
                        minlength: "nhập tối thiểu 2 kí tự"
                    },
                    email:{
                        required:"nhập địa chỉ email",
                        email: "nhập sai định dạng email rồi"
                    },
                    phone:{
                        required:"nhập số điện thoại",
                        minlength: "giá trị nhỏ nhất là 2 kí tự",
                        maxlength: "giá trị lớn nhất là 12 kí tự"
                    },
                    accnumber:{
                        required:"nhập tài khỏan",
                        minlength: "giá trị nhỏ nhất là 2 kí tự",
                        maxlength: "giá trị lớn nhất là 20 kí tự"
                    },
                    image: {
                        required: "Hãy chọn ảnh sản phẩm",
                        extension: "Hãy chọn file định dạng ảnh (jpg|png|jpeg|gif|svg)"
                    }
                }
            });
        });
    </script>
@endsection