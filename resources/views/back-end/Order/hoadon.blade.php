@extends('back-end.layouts.admin')
@section('style')
<style>
img {
    width: 200px;
}
</style>
@endsection
@section('content')
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
        <thead>
            <tr role="row">
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Số Lượng</th>
                <th>Đơn hàng</th>
                <th>trạng thái</th>
                <th>Eidt</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $order->Product->product_name}}</td>
                <td>{{ $order->price}}</td>
                <td>{{ $order->quantity}}</td>
                <td>
                    <ul>
                    <li>{{ $order->id_order}}</li>
                       
                    </ul>
                </td>
                <td>
                    @if($order->status == 0)
                    Đơn Hàng Trạng Thái Chờ
                    @elseif($order->status == 1)
                    Đã Đặt Hàng
                    @elseif($order->status == 2)
                    Đã Xác Nhận
                    @elseif($order->status == 3)
                    Đặt Hàng Thành Công
                    @endif
                </td>
            </tr>
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
})
</script>
@endsection