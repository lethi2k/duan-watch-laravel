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
        <h3 class="card-title">Sửa Đơn Hàng </h3>
    </div>
    <form id="edit-product-form" action="{{asset('').'admin/donhang/update/'.$order->id}}" method="post"
        enctype="multipart/form-data" style="padding:20px">
        @csrf
        <input type="hidden" name="id" value="{{ $order->id}}">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Id sản phẩm <span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control " value="{{$order->product_id}}" disabled>
                </div>
                <div class="form-group">
                    <label for="">giá<span class="text-danger">*</span></label>
                    <input type="text" name="title" class="form-control " value="{{$order->price}}" disabled>
                </div>
                <div class="form-group">
                    <label for="">Số lượng<span class="text-danger">*</span></label>
                    <input type="text" name="title" class="form-control " value="{{$order->quantity}}" disabled>
                </div>

            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">id đơn hàng<span class="text-danger">*</span></label>
                    <input type="text" name="title" class="form-control " value="{{$order->id_order}}" disabled>
                </div>

                <div class="form-group">
                    <label>Cập nhập trạng thái đơn hàng</label>
                    <select class="form-control" name = "trangthai">
                        <option value = "0" @if ($order->status == 0 ) selected="selected" @endif>Chuyển tình Trạng Chờ</option>
                        <option value = "1" @if ($order->status == 1 ) selected="selected" @endif>Đang đặt hàng</option>
                        <option value = "2" @if ($order->status == 2 ) selected="selected" @endif>Xác Nhận Đơn hàng</option>
                        <option value = "3" @if ($order->status == 3 ) selected="selected" @endif>Hoàn Thành Đơn Hàng</option>
                    </select>
                </div>

            </div>
            <div class="col-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-sm btn-primary">Cập Nhập</button>&nbsp;
                <a href="{{ asset('').'admin/donhang/index'}}" class="btn btn-sm btn-danger">Hủy</a>
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

// $(document).ready(function() {
//     $('#edit-product-form').validate({
//         rules: {
//             name: {
//                 required: true,
//                 minlength: 2,
//                 remote: {
//                     url: "{{ asset('') . 'admin/slider/check-name'}}",
//                     type: "post",
//                     data: {
//                         "_token": "{{ csrf_token() }}",
//                         name: function() {
//                             return $("input[name='name']").val();
//                         },
//                         id: function() {
//                             return $("input[name='id']").val();
//                         }
//                     }
//                 }
//             },
//             title: {
//                 required: true,
//                 minlength: 2
//             },
//             area1: {
//                 required: true,
//                 minlength: 2
//             },
//             image: {

//                 extension: "jpg|png|jpeg|gif|svg"
//             }
//         },

//         messages: {
//             name: {
//                 required: "Nhập tên sản phẩm",
//                 minlength: "Tối thiểu 2 ký tự",
//                 remote: "Tên sản phẩm đã tồn tại, vui lòng chọn tên khác",

//             },
//             title: {
//                 required: "nhập tiêu đề",
//                 minlength: "nhập tối thiểu 2 kí tự"
//             },
//             area1: {
//                 required: "nhập nội dung",
//                 minlength: "nhập tối thiểu 2 kí tự"
//             },
//             image: {

//                 extension: "Hãy chọn file định dạng ảnh (jpg|png|jpeg|gif|svg)"
//             }
//         }
//     });
// });
</script>
@endsection