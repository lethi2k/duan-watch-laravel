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
                <th>#</th>
                <th>Name</th>
                <th>email</th>
                <th>content</th>
                <th>edit</th>
            </tr>
        </thead>
        <tbody>
        @foreach($data as $showdata)
            <tr role="row" class="odd">
                <td class="sorting_1">{{$showdata->id}}</td>
                <td>{{$showdata->name}}</td>
                <td>{{$showdata->email}}</td>
                <td>{{$showdata->content}}</td>
                <td>
                <a href="{{asset('').'admin/phanhoi/delete/'.$showdata->id}}" class="btn btn-sm btn-danger btn-remove"><i class="fas fa-trash"></i></a>
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