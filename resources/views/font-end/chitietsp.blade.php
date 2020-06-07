@extends('font-end.base')
@section('style')
@endsection
@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Chi Tiết Sản Phẩm</h1>
                <ul class="breadcrumb justify-content-center">
                    <li><a href="index.html">Trang Chủ</a></li>
                    <li><a href="shop.html">Sản Phẩm</a></li>
                    <li class="current"><a href="product-details.html">Chi Tiết Sản Phẩm</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="main-content-wrapper">
    <div class="single-products-area section-padding section-md-padding">
        <div class="container">
            <!-- Single Product Start -->
            <section class="mirora-single-product pb--80 pb-md--60">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Tab Content Start -->
                        <div class="tab-content product-details-thumb-large" id="myTabContent-3">

                            <div class="tab-pane fade show active" id="product-large-one">
                                <div class="product-details-img easyzoom is-ready">
                                    <a class="popup-btn"
                                        href="{{asset('') .'giao-dien/images/product/'.$product_detail->images}}">
                                        <img src="{{asset('') .'giao-dien/images/product/'.$product_detail->images}}"
                                            alt="product">
                                    </a>
                                </div>
                            </div>
                            <!-- <div class="tab-pane fade" id="product-large-two">
                                <div class="product-details-img easyzoom">
                                    <a class="popup-btn" href="./giao-dien/images/4-450x450.jpg">
                                        <img src="./giao-dien/images/4-450x450.jpg" alt="product">
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="product-large-three">
                                <div class="product-details-img easyzoom">
                                    <a class="popup-btn" href="./giao-dien/images/5-450x450.jpg">
                                        <img src="./giao-dien/images/5-450x450.jpg" alt="product">
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="product-large-four">
                                <div class="product-details-img easyzoom">
                                    <a class="popup-btn" href="./giao-dien/images/6-450x450.jpg">
                                        <img src="./giao-dien/images/6-450x450.jpg" alt="product">
                                    </a>
                                </div>
                            </div> -->
                        </div>
                        <!-- Tab Content End -->

                        <!-- Product Thumbnail Carousel Start -->
                        <div class="product-details-thumbnail">
                            <div class="thumb-menu product-details-thumb-menu nav-vertical-center slick-initialized slick-slider"
                                id="thumbmenu-horizontal"><i class="fa fa-angle-left slick-prev slick-btn slick-arrow"
                                    style=""></i>
                                <div class="slick-list draggable">
                                    <div class="slick-track" style="opacity: 1; width: 2072px;">

                                        @for ($i = 0; $i < count($product_detail->ShowImages); $i++)
                                            <div class="thumb-menu-item slick-slide slick-current slick-active"
                                                data-slick-index="0" aria-hidden="false" style="width: 128px;">
                                                <a href="#product-large-one" data-toggle="tab" class="nav-link active">
                                                    <img src="{{ asset('') .'giao-dien/images/product/' . $product_detail->ShowImages[$i]->{'images'} }}"
                                                        alt="product thumb">
                                                </a>
                                            </div>
                                            @endfor




                                    </div>
                                </div>




                                <i class="fa fa-angle-right slick-next slick-btn slick-arrow" style=""></i>
                            </div>
                        </div>
                        <!-- Product Thumbnail Carousel End -->
                    </div>
                    <div class="col-lg-6">
                        <!-- Single Product Content Start -->
                        <div class="product-details-content">
                            <div class="product-details-top">
                                <h2 class="product-details-name">{{ $product_detail->product_name }}</h2>
                                <div class="ratings-wrap">
                                    <div class="ratings">
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <!-- <span>
                                        <a class="review-btn" id="nav-desc-tab" data-toggle="tab"
                                    href="#nav-desc" role="tab" aria-controls="nav-desc" aria-selected="true">Mô Tả</a>
                                        <a class="review-btn" role="tab" id="nav-desc-tab" data-toggle="tab" href="#singleProductTab" aria-controls="nav-desc">Bình Luận</a>
                                    </span> -->
                                </div>
                                <ul class="product-details-list list-unstyled">
                                    <li class="my-5">Thương Hiệu: <a href="">{{ $product_detail->Trademark->name }}</a>
                                    </li>
                                    <li class="my-5">Nguồn Gốc: {{ $product_detail->Trademark->country }}</li>
                                    <li class="my-5">Loại Đồng Hồ: {{ $product_detail->Category->name }}</li>
                                    <li class="my-5">Giới Tính: Nam</li>
                                    <li class="my-5">Bảo Hành: 2 Năm</li>
                                </ul>
                                <div class="product-details-price-wrapper">
                                    <span class="money"><b> Giá : </b>{{number_format($product_detail->price)}}.
                                        VNĐ</span>
                                    <span class="product-price-old">
                                        <span class="money"><strike>{{number_format($product_detail->sale_price)}}.
                                                VNĐ</strike></span>
                                    </span>
                                </div>
                            </div>

                            <div class="product-details-bottom">

                                <p class="product-details-availability my-5"><i class="fa fa-check-circle"></i>còn lại
                                    {{$product_detail->quantity}} sản phẩm trong kho
                                </p>
                                <div class="product-details-action-wrapper mb--20">
                                    <div class="product-details-action-top d-flex align-items-center mb--20">
                                        <div class="quantity">
                                            <span>Qty: </span>
                                            <input type="number" name="qty" id="pro_qty"
                                                value="1" min="1" style ="width:50px">

                                        </div>
                                        <button type="button" class="btn btn-medium btn-style-2 add-to-cart">
                                            Thêm Vào Giỏ Hàng
                                        </button>
                                    </div>

                                </div>
                                <p class="product-details-tags mt-5">
                                    Tags: <a href="shop.html">Sport</a>,
                                    <a href="shop.html">Luxury</a>
                                </p>
                                <div class="social-share">
                                    <a href="facebook.com" class="facebook share-button">
                                        <i class="fa fa-facebook"></i>
                                        <span>Like</span>
                                    </a>
                                    <a href="twitter.com" class="twitter share-button">
                                        <i class="fa fa-twitter"></i>
                                        <span>Tweet</span>
                                    </a>
                                    <a href="#" class="share share-button">
                                        <i class="fa fa-plus-square"></i>
                                        <span>Share</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product Content End -->
                    </div>
                </div>
            </section>
            <!-- Single Product End -->

            <!-- Single Product Tab Start -->
            <section class="product-details-tab bg--dark-4 ptb--80 ptb-md--60">
                <div class="row">
                    <div class="col-12">
                        <ul class="product-details-tab-head nav nav-tab" id="singleProductTab" role="tablist">
                            <li class="nav-item product-details-tab-item">
                                <a class="nav-link product-details-tab-link active" id="nav-desc-tab" data-toggle="tab"
                                    href="#nav-desc" role="tab" aria-controls="nav-desc" aria-selected="true">Mô Tả</a>
                            </li>
                            <li class="nav-item product-details-tab-item">
                                <a class="nav-link product-details-tab-link" id="nav-details-tab" data-toggle="tab"
                                    href="#nav-details" role="tab" aria-controls="nav-details"
                                    aria-selected="true">Chính Sách Sản Phẩm</a>
                            </li>

                            <li class="nav-item product-details-tab-item">
                                <a class="nav-link product-details-tab-link" id="nav-review-tab" data-toggle="tab"
                                    href="#nav-review" role="tab" aria-controls="nav-review" aria-selected="true">Bình
                                    Luận</a>
                            </li>
                        </ul>
                        <div class="product-details-tab-content tab-content">
                            <div class="tab-pane fade show active" id="nav-desc" role="tabpanel"
                                aria-labelledby="nav-desc-tab">

                                <p class="product-details-description">
                                    {{$product_detail->metal}}
                                </p>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="nav-details" aria-labelledby="nav-details-tab">
                                <div class="product-details-additional-info">
                                    <h3>Chính Sách Của Chúng Tôi</h3>
                                    <div class="table-content table-responsive">
                                        <table class="shop_attributes">
                                            <tbody>
                                                <tr>
                                                    <th>Chính Sách Công Ty</th>
                                                    <td>
                                                        <b>BẢO HIỂM CẢ LỖI NGƯỜI DÙNG TRONG 5 NĂM</b>
                                                        <p>Chi tiết: <a
                                                                href="https://www.facebook.com/thi.le.925059">Clink Vào
                                                                Đây</a></p>
                                                        <b>TRUNG TÂM BẢO HÀNH LÊ THI</b>
                                                        <P>- Địa chỉ: 89 lê đức thọ mỹ đình nam từ liêm | Hotline:
                                                            01699415988 <br>
                                                            - Giờ làm việc: 10h00 - 18h00</P>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Kí Tên: </th>
                                                    <td>
                                                        <p>Thi <br>Lê Đình Thi</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="nav-review" aria-labelledby="nav-review-tab">
                                <div class="product-details-review-wrap">
                                    <h2 class="mb--20">Ý Kiến Khách Hàng</h2>
                                    <div class="review mb--40">

                                        @foreach($comment_product as $show_comment_product)
                                        <div class="review__single">
                                            <div class="review__meta">
                                            <img src="{{asset('') .'giao-dien/images/user/'.$show_comment_product->User->logo}}" alt="comment" style ="width:50px">
                                                <p class="review__author">{{$show_comment_product->User->username}}</p>
                                                <!-- <p class="review__date">Thứ 2, 20-12-2020</p> -->
                                                <button type="button" class="btn btn-medium btn-style-2 my-2">
                                                    Xóa
                                                </button>
                                            </div>
                                            <div class="review__content">
                                                <p class="review__text">
                                                    {{$show_comment_product->content_comment}}
                                                </p>
                                                <div class="ratings">
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                    <h2 class="mb--20">Đánh Giá Sản Phẩm</h2>
                                    <form class="form form--review"
                                        action="{{ asset('') . 'giao-dien/add-comment-product/'.$product_detail->id}}"
                                        class="form comment-form" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form__group clearfix mb--20">
                                            <label class="form__label d-block mb--10">Đánh Giá</label>
                                            <div class="rating">
                                                <input type="radio" id="star5" name="rating" value="5">
                                                <label class="full" for="star5" title="Awesome - 5 stars">
                                                </label>
                                                <input type="radio" id="star4half" name="rating" value="4 and a half">
                                                <label class="half" for="star4half" title="Pretty good - 4.5 stars">
                                                </label>
                                                <input type="radio" id="star4" name="rating" value="4">
                                                <label class="full" for="star4" title="Pretty good - 4 stars">
                                                </label>
                                                <input type="radio" id="star3half" name="rating" value="3 and a half">
                                                <label class="half" for="star3half" title="Meh - 3.5 stars">
                                                </label>
                                                <input type="radio" id="star3" name="rating" value="3">
                                                <label class="full" for="star3" title="Meh - 3 stars">
                                                </label>
                                                <input type="radio" id="star2half" name="rating" value="2 and a half">
                                                <label class="half" for="star2half" title="Kinda bad - 2.5 stars">
                                                </label>
                                                <input type="radio" id="star2" name="rating" value="2">
                                                <label class="full" for="star2" title="Kinda bad - 2 stars">
                                                </label>
                                                <input type="radio" id="star1half" name="rating" value="1 and a half">
                                                <label class="half" for="star1half" title="Meh - 1.5 stars">
                                                </label>
                                                <input type="radio" id="star1" name="rating" value="1">
                                                <label class="full" for="star1" title="Sucks big time - 1 star">
                                                </label>
                                                <input type="radio" id="starhalf" name="rating" value="half">
                                                <label class="half" for="starhalf" title="Sucks big time - 0.5 stars">
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form__group clearfix mb--20">
                                            <label class="form__label d-block" for="review">Nội Dung
                                                <sup>*</sup></label>
                                            <textarea id="review" name="review"
                                                class="form__input form__input--textarea"></textarea>

                                        </div>
                                        <div class="form__group text-right">
                                            <button type="submit" class="btn btn-medium btn-style-1">Bình Luận</button>
                                        </div>
                                    </form>
                                    <br><br>
                                    @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                {{$err}}<br>
                                @endforeach
                            </div>
                            @endif
                            @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                            @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Single Product Tab End -->

            <!-- Related Product Start -->
            <section class="related-products-area pt--80 pb--20 pb-md--15 pt-md--60">
                <div class="row">
                    <div class="col-12 mb--20">
                        <div class="section-title">
                            <h2>Sản Phẩm Liên Quan</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-carousel nav-top js-product-carousel-2 slick-initialized slick-slider"><span
                                class="slick-btn slick-prev slick-arrow" style=""><i
                                    class="fa fa-angle-left"></i></span>
                            <div class="slick-list draggable">
                                <div class="slick-track">
                                    @foreach($related_product as $show_related_product)
                                    <div class="mirora-product slick-slide slick-cloned" data-slick-index="-5"
                                        aria-hidden="true" style="width: 232px;" tabindex="-1">
                                        <div class="product-img">
                                            <img src="./giao-dien/images/6-450x450.jpg" alt="Product"
                                                class="primary-image">
                                            <img src="./giao-dien/images/6-6-450x450.jpg" alt="Product"
                                                class="secondary-image">
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -7%
                                                </span>
                                                <a data-toggle="modal" data-target="#productModal"
                                                    class="btn btn-transparent btn-fullwidth btn-medium btn-style-1"
                                                    tabindex="-1">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <span>{{ $show_related_product->name }}</span>
                                            <h4><a href="product-details.html"
                                                    tabindex="-1">{{$show_related_product->product_name}}</a></h4>
                                            <div class="product-price-wrapper">
                                                <span class="money">{{number_format($show_related_product->price)}}.
                                                    VNĐ</span>
                                                <span class="product-price-old">
                                                    <span
                                                        class="money">{{number_format($show_related_product->sale_price)}}.
                                                        VNĐ</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="mirora_product_action text-center position-absolute">
                                            <div class="product-rating">
                                                <span>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                            <p>
                                                {{$show_related_product->detail}}
                                            </p>
                                            <div class="product-action">
                                                <a class="same-action" href="wishlist.html" title="wishlist"
                                                    tabindex="-1">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="add_cart cart-item action-cart" href="cart.html"
                                                    title="wishlist" tabindex="-1"><span>Add to cart</span></a>
                                                <a class="same-action compare-mrg" data-toggle="modal"
                                                    data-target="#productModal" href="compare.html" tabindex="-1">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <span class="slick-btn slick-next slick-arrow" style=""><i
                                    class="fa fa-angle-right"></i></span>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Related Product End -->
        </div>
    </div>
</div>

@endsection
@section('js')

@endsection