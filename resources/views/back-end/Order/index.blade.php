@extends('back-end.layouts.admin')
@section('style')
<style>
img {
    width: 200px;
}
</style>
@endsection
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Hiện có Hãng Đồng Hồ</h3>
    </div>
    <form class="form-inline ml-5 my-3">
        <div class="input-group input-group-sm bg-success">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search"
                id="search" name="search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="button"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </form>
    <table id="example1" class="table table-bordered table-striped dataTable" role="grid"
        aria-describedby="example1_info">

        <div class="form-group col-sm-4 ml-2">
            <label>lọc theo</label>
            <form method="get" id="form_order">
                <select class="form-control time" name="time">
                    <option value="0"
                        {{Request::get('time') == "0" || !Request::get('time') ? "selected ='selected'" : ""}}>Mặc định
                    </option>
                    <option value="1" {{Request::get('time') == "1" ? "selected ='selected'" : ""}}>Mới nhất</option>
                    <option value="2" {{Request::get('time') == "2" ? "selected ='selected'" : ""}}>Cũ nhất</option>
                </select>
            </form>
        </div>

        <thead>
            <a href="{{asset('').'admin/donhang/export'}}" class="btn btn-sm btn-primary col-sm-1 my-2 mx-auto">Xuất
                file csv</a>
            <tr role="row">
                <th>id</th>
                <th>Tên sản phẩm</th>
                <th>ảnh sản phẩm</th>
                <th>Giá</th>
                <th>Số Lượng</th>
                <th>Tổng tiền</th>
                <th>Chi tiết đơn hàng</th>
                <th>trạng thái</th>
                <th>Eidt</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $showorder)
            <tr role="row" class="odd">
                <td class="sorting_1">{{ $showorder->id}}</td>
                <td>{{ $showorder->Product->product_name}}</td>
                <td><img class="mySlides" src="{{asset('') .'giao-dien/images/product/'.$showorder->Product->images}}" alt="" style="width:150px"></td>
                <td>{{ number_format($showorder->price)}},VNĐ</td>
                <td>{{ $showorder->quantity}}</td>
                <td>{{number_format($showorder->price * $showorder->quantity)}}</td>
                <td><a href="{{asset('') . 'admin/hoadon/index/'.$showorder->id}}" class="btn btn-sm btn-primary">chi tiết đơn hàng</a></td>
                <td>
                    @if($showorder->status == 0)
                    Đơn Hàng Trạng Thái Chờ
                    @elseif($showorder->status == 1)
                    Đã Đặt Hàng
                    @elseif($showorder->status == 2)
                    Đã Xác Nhận
                    @elseif($showorder->status == 3)
                    Đặt Hàng Thành Công
                    @endif
                </td>
                <!-- <td><a href="{{asset('').'admin/donhang/export/'.$showorder->id}}" class="btn btn-sm btn-primary">Xuất file</a></td> -->
                <td>
                    <a href="{{asset('').'admin/donhang/edit/'.$showorder->id}}" class="btn btn-sm btn-primary"><i
                            class="fas fa-wrench"></i></a> &nbsp;
                    <a href="{{asset('').'admin/donhang/delete/'.$showorder->id}}"
                        class="btn btn-sm btn-danger btn-remove"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>
@if(session('thongbao'))
<div class="alert alert-success">
    {{session('thongbao')}}
</div>
@endif

@endsection
@section('js')
<script>
$(document).ready(function() {
    $('.time').change(function() {
        $('#form_order').submit();
    })
})
</script>


<script>
$(document).ready(function() {
    $('.btn-remove').on('click', function() {
        Swal.fire({
            title: 'Cảnh báo!',
            text: "Bạn chắc chắn muốn xóa sản phẩm này?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Đồng ý!'
        }).then((result) => {
            if (result.value) {
                var url = $(this).attr('href');
                window.location.href = url;
            }
        })
        return false;
    });
});
</script>
<script type="text/javascript">
$('#search').on('keyup', function() {
    $value = $(this).val();
    $.ajax({
        type: 'get',
        url: '{{ URL::to('
        admin / slider / search ') }}',
        data: {
            'search': $value
        },
        success: function(data) {
            $('tbody').html(data);
        }
    });
})
$.ajaxSetup({
    headers: {
        'csrftoken': '{{ csrf_token() }}'
    }
});
</script>
<script>
<!-- jQuery 3 
-->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
$(function() {
    $('#example1').DataTable()
    $('#example2').DataTable({
        'paging': true,
        'lengthChange': false,
        'searching': false,
        'ordering': true,
        'info': true,
        'autoWidth': false
    })
});
</script>

@endsection