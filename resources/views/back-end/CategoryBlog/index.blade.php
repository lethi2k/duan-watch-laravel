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
    <h3 class="card-title">Hiện có {{$Count}} Hãng Đồng Hồ</h3>
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
            <th>Name</th>
            <th>Logo</th>
            <th>Công Cụ</th>
        </thead>
        <tbody>
    @foreach($Cate as $print)
            <tr>
            <td>{{$print->id}}</td>
            <td>{{$print->cate_name}}</td>
            
            <td><img src="{{asset('') .$print->logo}}" alt=""></td>
               <td>
                <a href="{{asset('').'admin/category-blog/edit/'.$print->id}}" class="btn btn-sm btn-primary"><i class="fas fa-wrench"></i></a> &nbsp;
                <a href="{{asset('').'admin/category-blog/delete/'.$print->id}}" class="btn btn-sm btn-danger btn-remove"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
      @endforeach
        </tbody>
    </table>
    @if(session('thongbao'))
    <div class="alert alert-success">
        {{session('thongbao')}}
    </div>
    @endif
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
                    url: '{{ URL::to('admin/category-blog/search') }}',
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