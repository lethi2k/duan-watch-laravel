@extends('back-end.layouts.admin')
@section('style')
<style>
img{
    width:200px;
}
</style>
@endsection
@section('content')
<div class="card card-primary">
<div class="card-header">
    <h3 class="card-title">Hiện có  Hãng Đồng Hồ</h3>
</div>
<form class="form-inline ml-5 my-3">
    <div class="input-group input-group-sm bg-success">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" id="search" name="search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="button"><i class="fas fa-search"></i></button>
            </div>
    </div>
</form>

<table class="table table-stripped">
        <thead>
            <th>ID</th>
            <th>Danh Mục Bài Viết</th>
            <th>Tên Bài Viết</th>
            <th style ="width:30%">Mô Tả</th>
            <th>Ảnh</th>
            <th>User</th>
            <th>Nội Dung</th>
            <th>Công Cụ</th>
        </thead>
        <tbody>
    @foreach($Cate as $print)
            <tr>
            <td>{{$print->id}}</td>
            <td>{{$print->CateBlog->cate_name}}</td>
            <td>{{$print->name_blog}}</td>
            <td>{{$print->meta}}</td>
            <td><img src="{{asset('') .'giao-dien/images/blog/'.$print->images}}" alt=""></td>
            <td>{{$print->User->username}}</td>
            <td><a href="{{asset('').'admin/blog/chitiet/'.$print->id}}"><button type="button" class="btn btn-sm btn-success">Chi Tiết</button></a></td>
               <td>
                <a href="{{asset('').'admin/blog/edit/'.$print->id}}" class="btn btn-sm btn-primary mb-3"><i class="fas fa-wrench"></i></a> &nbsp;
                <a href="{{asset('').'admin/blog/delete/'.$print->id}}" class="btn btn-sm btn-danger btn-remove"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
      @endforeach
        </tbody>
    </table>
</div>
@endsection
@section('js')
    <script>
        $(document).ready(function(){
            $('.btn-remove').on('click', function(){
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
            $('#search').on('keyup',function(){
                $value = $(this).val();
                $.ajax({
                    type: 'get',
                    url: '{{ URL::to('admin/trademark/search') }}',
                    data: {
                        'search': $value
                    },
                    success:function(data){
                        $('tbody').html(data);
                    }
                });
            })
            $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
        </script>
@endsection