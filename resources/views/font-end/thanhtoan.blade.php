@extends('font-end.base')
@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Thanh Toán</h1>
                <ul class="breadcrumb justify-content-center">
                    <li><a href="index.html">Trang Chủ</a></li>
                    <li class="current"><a href="checkout.html">Thanh Toán</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@csrf
<div class="main-content-wrapper">
    <div class="checkout-area pt--40 pb--80 pt-md--30 pb-md--60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- User Action Start -->
                    <div class="user-actions">
                        <div class="row">
                            <div class="col-12">
                               
                                <div class="user-actions__single user-actions__coupon">
                                    <h3><i class="fa fa-cube"></i>Thanh Toán Sản Phẩm</h3>
                                    <div id="coupon_info"
                                        class="user-actions__form user-actions--coupon hide-in-default">
                                        <form action="#" class="form">
                                            <div class="form__group d-flex">
                                                <input type="text" name="coupon" id="coupon"
                                                    class="form__input form__input--2 form__input--w285 mr--20"
                                                    placeholder="Coupon Code">
                                                <button type="submit" class="btn btn-medium btn-style-3">Apply
                                                    Coupon</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- User Action End -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Checkout Area Start -->
                    <div class="checkout-wrapper bg--2">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout-title">
                                    <h2>Chi tiết thanh toán</h2>
                                </div>
                                <div class="checkout-form">
                                    <form action="#" class="form">
                                        <div class="form-row mb--30">
                                            <div class="form__group col-md-12 mb-sm--30">
                                                <label for="billing_fname" class="form__label">Họ Và
                                                    Tên<span>*</span></label>
                                                <input type="text" name="billing_fname" id="billing_fname"
                                                    class="form__input form__input--2">
                                            </div>

                                        </div>
                                        
                                        <div class="form-row mb--30">
                                            <div class="form__group col-12">
                                                <label for="billing_streetAddress" class="form__label">Địa Chỉ</label>
                                                <input type="text" name="billing_streetAddress"
                                                    id="billing_streetAddress" class="form__input form__input--2">
                                            </div>
                                        </div>
                                       
                                        <div class="form-row mb--30">
                                            <div class="form__group col-12">
                                                <label for="billing_city" class="form__label">Town/City
                                                    <span>*</span></label>
                                                <input type="text" name="billing_city" id="billing_city"
                                                    class="form__input form__input--2">
                                            </div>
                                        </div>
                                       
                                        <div class="form-row mb--30">
                                            <div class="form__group col-md-6 mb-sm--30">
                                                <label for="billing_phone" class="form__label">Số điện thoại</label>
                                                <input type="text" name="billing_phone" id="billing_phone"
                                                    class="form__input form__input--2">
                                            </div>
                                            <div class="form__group col-md-6">
                                                <label for="billing_email" class="form__label">Email
                                                    <span>*</span></label>
                                                <input type="email" name="billing_email" id="billing_email"
                                                    class="form__input form__input--2">
                                            </div>
                                        </div>
                                    
                                        <div class="form-row">
                                            <div class="form__group col-12">
                                                <label for="orderNotes" class="form__label">Ghi Chú</label>
                                                <textarea class="form__input form__input--2 form__input--textarea"
                                                    id="orderNotes" name="orderNotes"
                                                    placeholder="Ghi chú về đơn đặt hàng của bạn, ví dụ ghi chú đặc biệt để giao hàng."></textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-md--30">
                                <div class="order-details">
                                    <h3 class="heading-tertiary">Đơn Hàng Của Bạn</h3>
                                    <div class="order-table table-content table-responsive mb--30">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Sản Phẩm</th>
                                                    <th>Giá</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @if(isset($items))
                                                @foreach($items as $showcart)
                                                <tr>
                                                    <td>{{$showcart->associatedModel->product_name}} <strong>x {{$showcart->quantity}}</strong></td>
                                                    <td>{{number_format($showcart->associatedModel->price)}}, VNĐ</td>
                                                </tr>
                                                @endforeach
                                            @endif   
                                            </tbody>
                                            <tfoot>
                                               
                                               
                                                <tr class="order-total">
                                                    <th>Tổng thanh toán</th>
                                                    <td><span class="order-total-ammount">{{ number_format(\Cart::session(Auth::user()->id)->getTotal())}} , VNĐ</span></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="checkout-payment">
                                        <form action="#" class="payment-form">
                                            <!-- <div class="payment-group">
                                                <div class="custom-radio payment-radio">
                                                    <input type="radio" name="payment-method" id="cheque" checked="">
                                                    <label class="payment-label" for="cheque">Thanh Toán Bằng Tài Khoản Ngân Hàng</label>
                                                </div>
                                                <div class="payment-info">
                                                    <p>Please send your cheque to Store Name, Store Street, Store Town,
                                                        Store State / County, Store Postcode.</p>
                                                </div>
                                            </div> -->
                                            <div class="payment-group">
                                                <div class="custom-radio payment-radio">
                                                    <input type="radio" name="payment-method" id="cash" checked>
                                                    <label class="payment-label" for="cash">Thanh Toán Khi Nhận Hàng</label>
                                                </div>
                                                <div class="payment-info">
                                                    <p>Thanh Toán Bằng Tiền Mặt Khi Nhận Hàng</p>
                                                </div>
                                            </div>
                                            <div class="payment-group">
                                                <div class="custom-radio payment-radio">
                                                    <input type="radio" value="paypal" name="payment-method"
                                                        id="paypal">
                                                    <label class="payment-label" for="paypal">
                                                        Thanh toán
                                                        <img src="./giao-dien/images/AM_mc_vs_ms_ae_UK.png"
                                                            alt="payment">
                                                        <!-- <a href="https://www.paypal.com/gb/webapps/mpp/paypal-popup">What
                                                            is PayPal?</a> -->
                                                    </label>
                                                </div>
                                                <!-- <div class="payment-info paypal">
                                                    <p>Pay via PayPal; you can pay with your credit card if you don’t
                                                        have a PayPal account.</p>
                                                </div> -->
                                            </div>
                                            <div class="payment-group">
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" name="termscondition" id="termscondition"
                                                        class="form__checkbox">

                                                    <label for="termscondition"
                                                        class="terms-condition-label payment-label">Tôi đã đọc và đồng ý với các điều khoản</label>
                                                </div>
                                            </div>
                                            <div class="payment-btn-group">
                                                <button type="submit" class="btn btn-style-3">Thanh Toán</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Checkout Area End -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')

@endsection