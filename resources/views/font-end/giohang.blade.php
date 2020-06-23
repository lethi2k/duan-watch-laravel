@extends('font-end.base')
@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Giỏ Hàng</h1>
                <ul class="breadcrumb justify-content-center">
                    <li><a href="index.html">Trang Chủ</a></li>
                    <li class="current"><a href="cart.html">Giỏ Hàng</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="cart-area pt--40 pb--80 pt-md--30 pb-md--60">
    <div class="container">
        <div class="cart-wrapper bg--2 mb--80 mb-md--60">
            <div class="row">
                <div class="col-12">
                    <!-- Cart Area Start -->

                        <div class="cart-table table-content table-responsive">
                            <table class="table mb--30">
                                <thead>
                                    <tr>
                                        <th>Xóa</th>
                                        <th>Ảnh</th>
                                        <th>Sản Phẩm</th>
                                        <th>Giá Tiền</th>
                                        <th>Số Lượng</th>
                                        <th>Cập Nhập</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($items))
                                        @foreach($items as $showcart)
                                    
                                        <tr>
                                            <td><a class="delete"
                                                    href="{{asset('') . 'giao-dien/removecart/' . $showcart->id }}"><i
                                                        class="fa fa-times"></i></a></td>
                                            <td>
                                                <img src="{{asset('') .'giao-dien/images/product/'.$showcart->associatedModel->images}}"
                                                    alt="product">
                                            </td>
                                            <td class="wide-column">
                                                <h3>{{$showcart->associatedModel->product_name}}</h3>
                                            </td>
                                            <td class="cart-product-price">
                                                <strong>{{number_format($showcart->associatedModel->price)}},
                                                    VNĐ</strong>
                                            </td>
                                            <form action="{{asset('') . 'giao-dien/updatecart/' . $showcart->id }}" >
                                            <td>
                                                <input type="number" id="soluong" name="soluong"
                                                    value="{{$showcart->quantity}}" min="1">
                                            </td>
                                            <td class="cart-product-price">
                                                <div class="cart-btn-group">
                                                    <button type = "submit"><a class="btn btn-medium btn-style-3">Cập Nhập Sản Phẩm</a></button>
                                                </div>
                                            </td>
                                            </form>
                                        </tr>
                                    
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>

                        <div class="row">
                            <!-- <div class="col-12">
                                <div class="apply-coupon-wrapper">
                                    <div class="form__group d-flex justify-content-between align-items-center">
                                        <input type="text" name="coupon" id="coupon" class="form__input form__input--2"
                                            placeholder="Mã Giảm Giá">
                                        <button type="submit" class="btn btn-medium btn-style-3">Áp dụng mã giảm
                                            giá</button>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-12 text-md-left">
                                <div class="cart-btn-group">
                                    <a href="" class="btn btn-medium btn-style-3">Về Trang Chủ</a>
                                </div>

                            </div>
                            <div class="col-12 text-md-right">
                                <div class="cart-btn-group">
                                @if(\Cart::session(Auth::user()->id)->getTotal() >0)
                                    <a href="giao-dien/deletecart" class="btn btn-medium btn-style-3">Xóa Toàn Bộ Sản Phẩm</a>
                                @endif
                                </div>


                            </div>

                        </div>

                    <!-- Cart Area End -->
                </div>
            </div>
        </div>
        <div class="cart-page-total-wrapper">
            <div class="row justify-content-end">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="cart-page-total bg--dark-3">
                        <h2>Tổng Thanh Toán</h2>
                        <div class="cart-calculator-table table-content table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr class="cart-subtotal">
                                        <th>Tổng Sản Phẩm</th>
                                        <td><span class="price-ammount">{{ number_format(\Cart::session(Auth::user()->id)->getTotal())}} , VNĐ</span></td>
                                    </tr>
                                    <tr class="shipping">
                                        <th>Giảm Giá</th>
                                        <td>
                                            <span class="price-ammount">0 VNĐ</span>

                                        </td>
                                    </tr>
                                    <tr class="cart-total">
                                        <th>Tổng </th>
                                        <!-- {{ \Cart::getContent()->count()}} -->
                                        <td><span class="price-ammount">{{ number_format(\Cart::session(Auth::user()->id)->getTotal())}} , VNĐ</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @if(\Cart::session(Auth::user()->id)->getTotal() >0)
                        <a href="{{asset('') . 'giao-dien/thanhtoan'}}" class="btn btn-medium btn-style-3">Thanh
                            Toán</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
!-- jQuery -->
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/additional-methods.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script>
$(document).ready(function() {
    $('.delete').on('click', function() {
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
@endsection