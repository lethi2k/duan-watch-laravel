@extends('back-end.layouts.admin')
@section('style')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
img {
    width: 100px;
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
                <th>Danh mục sản phẩm </th>
                <th>thương hiệu</th>
                <th>Tên sản phẩm</th>
                <th style="width:200px">Images</th>
                <th>Giá</th>
                <th>Giảm giá</th>
                <th>Chi tiết</th>
                <th>Số lượng</th>
                <th>Chi tiết</th>
                <th>Số sao</th>
                <th>Màu sắc</th>
                <th>Lượt Xem</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $inra)
            <tr role="row" class="odd">
                <td class="sorting_1">{{$inra -> id}}</td>
                <td>{{$inra ->Category ->name}}</td>
                <td>{{$inra -> Trademark ->name}}</td>
                <td>{{$inra -> product_name}}</td>
                <td>
                    <div class="row">
                        <div class="w3-content" style="max-width:1200px">
                            <img class="mySlides" src="{{asset('') .'giao-dien/images/product/'.$inra->images}}" alt=""
                                style="width:100%">
                            <div class="w3-row-padding w3-section">
                                <?php $i = 1 ?>
                                @foreach($inra->ShowImages as $show)
                                <div class="w3-col s4 my-2">
                                    <img class="demo w3-hover-opacity-off"
                                        src="{{asset('').'giao-dien/images/product/'.$show->images}}"
                                        style="cursor:pointer; width:90%" onclick="currentDiv({!! $i !!})">
                                </div>
                                <?php $i++?>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </td>
                <td>{{$inra -> price}}</td>
                <td>{{$inra -> sale_price}}</td>
                <td>{!!$inra -> detail!!}</td>
                <td>{{$inra -> quantity}}</td>
                <td><a href="{{asset('').'admin/product/chitiet/'.$inra->id}}" class="btn btn-sm btn-success">Chi
                        Tiết</a></td>
                <td>{{$inra -> star}}</td>
                <td>{{$inra -> color}}</td>
                <td>{{$inra -> view_count}}</td>
                <td><a href="{{asset('').'admin/product/edit/'.$inra->id}}" class="btn btn-sm btn-primary my-2"><i
                            class="fas fa-wrench"></i></a> &nbsp;
                    <a href="{{asset('').'admin/product/delete/'.$inra->id}}"
                        class="btn btn-sm btn-danger btn-remove"><i class="fas fa-trash"></i></a></td>
            </tr>
            @endforeach

        </tbody>
    </table>
    {{ $data->links() }}
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
        url: '{{ URL::to('admin/product/search') }}',
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

<script>

</script>
@endsection