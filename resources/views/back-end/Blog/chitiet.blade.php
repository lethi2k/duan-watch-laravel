@extends('back-end.layouts.admin')
@section('style')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
    <button class ="col-sm-1 mx-5 my-2 mt-3 btn btn-block btn-success" ><a href="admin/blog/index">về giao diện</a></button>
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
                <th>Chi Tiết</th>
            </tr>
        </thead>
        <tbody>
            <tr role="row" class="odd">
                <td class="sorting_1">{!! $data -> content !!}</td>
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
<script>
function currentDiv(n) {
    showDivs(slideIndex = n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    if (n > x.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = x.length
    }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
    }
    x[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " w3-opacity-off";
}
</script>

@endsection