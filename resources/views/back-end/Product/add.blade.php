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
<form id="add-product-form" action="{{ asset('') . 'admin/product/save-add'}}" method="post" enctype="multipart/form-data" style="padding:20px">
            @csrf
            <div class="row">
                <div class="col-6">

                <div class="form-group">
                        <label for="">Danh mục sản phẩm  <span class="text-danger">*</span></label>

                        <select class="form-control" name = "danhmuc">
                           @foreach ($cate as $ca)
                            <option value="{{ $ca->id }}">{{ $ca->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Thương hiệu sản phẩm  <span class="text-danger">*</span></label>

                        <select class="form-control" name = "thuonghieu">
                           @foreach ($trade as $trade)
                            <option value="{{ $trade->id }}">{{ $trade->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Tên sản phẩm <span class="text-danger">*</span></label>
                        <input type="text" name="tensp" class="form-control " placeholder="Nhập tên sản phẩm">
                    </div>
                    <div class="form-group">
                        <label for="">Giá<span class="text-danger">*</span></label>
                        <input type="number" name="gia" class="form-control " placeholder="Nhập tên sản phẩm">
                    </div> 
                    <div class="form-group">
                        <label for="">Giảm Giá<span class="text-danger">*</span></label>
                        <input type="number" name="giamgia" class="form-control " placeholder="Nhập tên sản phẩm">
                    </div> 

                    <div class="form-group">
                        <label for="">Chi tiết</label>
                        <textarea name="area2" cols="108" class="ha"></textarea>
                    </div> 
                    <div class="form-group">
                        <label for="">Số lượng<span class="text-danger">*</span></label>
                        <input type="number" name="soluong" class="form-control " value = "1" placeholder="Nhập tên sản phẩm">
                    </div>

     
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <img src="{{ asset('').'giao-dien/images/default-image.jpg' }}" class="img-fluid" id="img-preview">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Logo sản phẩm<span class="text-danger">*</span></label>
                        <input type="file" onchange="encodeImageFileAsURL(this)"  name="image" class="form-control" >
                    </div>
                    @for($i = 1 ; $i <=4 ; $i++)
                    <div class="form-group">
                        <label for="">Ảnh chi tiết {!! $i !!}<span class="text-danger">*</span></label>
                        <input type="file" name="imagedetail[]" class="form-control" >
                    </div>
                    @endfor
                    <div class="form-group">
                        <label for="">Số sao<span class="text-danger">*</span></label>
                        <input type="number" name="sosao" class="form-control " value = "1" placeholder="Nhập tên sản phẩm">
                    </div> 

                    <div class="form-group">
                        <label for="">Màu sắc<span class="text-danger">*</span></label>
                        <input type="text" name="mausac" class="form-control " placeholder="Nhập tên sản phẩm">
                    </div> 
                    <div class="form-group">
                        <label for="">Nội dung </label>
                        <textarea name="area1" cols="110" class="ha">
                     </textarea>
                    </div>  
                    
                </div>
                <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-sm btn-primary">Tạo</button>&nbsp;
                    <a href="{{ asset('').'admin/slider/index'}}" class="btn btn-sm btn-danger">Hủy</a>
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
                    remote: {
                            url: "{{ asset('') . 'admin/slider/check-name'}}",
                            type: "post",
                            data: {
                                "_token": "{{ csrf_token() }}",
                                name: function() {
                                    return $( "input[name='name']" ).val();
                                }
                            }
                        }
                    },
                    tensp:{
                        required: true,
                        minlength: 2
                    },
                    gia:{
                        required: true,
                        min: 1,
                        
                    },
                    giamgia:{
                        required: true,
                        min: 1
                    },
                    image: {
                        required: true,
                        extension: "jpg|png|jpeg|gif|svg"
                    },
                    soluong:{
                        required: true,
                        min: 1
                    },
                    sosao:{
                        required: true,
                        min: 1,
                        max: 5
                    },
                    mausac:{
                        required: true
                    }
                },
                
                messages:{
                    tensp: {
                        required: "Nhập tên sản phẩm",
                        minlength: "Tối thiểu 2 ký tự",
                       
                    },
                    gia:{
                        required:"nhập giá sản phẩm",
                        min: "giá trị nhỏ nhất là 1"
                    },
                    giamgia:{
                        required:"nhập giảm giá",
                        min: "giá trị nhỏ nhất là 1"
                    },
                    soluong:{
                        required:"nhập số lượng",
                        min: "giá trị nhỏ nhất là 1"
                    },
                    sosao:{
                        required:"nhập số sao",
                        min: "giá trị nhỏ nhất là 1",
                        max: "số sao không được vượt quá 5"
                    },
                    mausac:{
                        required:"nhập màu sắc"
                       
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