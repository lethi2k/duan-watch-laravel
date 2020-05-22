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
    <h3 class="card-title">Hiện có Hãng Đồng Hồ</h3>
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
            <th>Tên công ty</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>email</th>
            <th>Logo</th>
            <th>số tài khoản</th>
            <th>Công Cụ</th>
        </thead>
        <tbody>
    @foreach($show as $print)
            <tr>
            <td>{{$print->id}}</td>
            <td>{{$print->name}}</td>
            <td>{{$print->address}}</td>
            <td>{{$print->phone_number}}</td>
            <td>{{$print->email}}</td>
            <td>{{$print->logo}}</td>
            <td>{{$print->stk}}</td>
            <!-- <td><img src="{{asset('') .$print->logo}}" alt=""></td> -->
               <td>
                <a href="{{asset('').'admin/company/edit/'.$print->id}}" class="btn btn-sm btn-primary"><i class="fas fa-wrench"></i></a> &nbsp;
                <a href="{{asset('').'admin/company/delete/'.$print->id}}" class="btn btn-sm btn-danger btn-remove"><i class="fas fa-trash"></i></a>
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