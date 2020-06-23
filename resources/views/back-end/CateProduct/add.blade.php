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
    <h3 class="card-title">Thêm danh mục sản phẩm </h3>
</div>
<form id="add-product-form" action="{{ asset('') . 'admin/category-product/save-add'}}" method="post" enctype="multipart/form-data" style="padding:20px">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Tên Danh Mục  <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control " placeholder="Nhập tên sản phẩm">
                    </div>
                    
                </div>
                <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-sm btn-primary">Tạo</button>&nbsp;
                    <a href="{{ asset('').'admin/category-product/index'}}" class="btn btn-sm btn-danger">Hủy</a>
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

        $(document).ready(function() {
            $('#add-product-form').validate({
                rules:{
                    name: {
                    required: true,
                    minlength: 2,
                    remote: {
                            url: "{{ asset('') . 'admin/category-product/check-name'}}",
                            type: "post",
                            data: {
                                "_token": "{{ csrf_token() }}",
                                name: function() {
                                    return $( "input[name='name']" ).val();
                                }
                            }
                        }
                    },
                },
                
                messages:{
                    name: {
                        required: "Nhập tên sản phẩm",
                        minlength: "Tối thiểu 2 ký tự",
                        remote: "Tên sản phẩm đã tồn tại, vui lòng chọn tên khác",
                       
                    },
                }
            });
        });
    </script>
@endsection