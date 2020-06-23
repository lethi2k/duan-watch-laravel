@extends('font-end.base')
@section('content')
<div class="main-content-wrapper">
    <!-- Slider area Start -->
    <div class="slider-area">
        <div class="homepage-slider slick-initialized slick-slider slick-dotted">
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <i class="fa fa-angle-left slick-btn slick-prev slick-arrow" style=""></i>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <i class="fa fa-angle-right slick-btn slick-next slick-arrow" style=""></i>
            </a>
            <!-- Single Slide Start -->
            <div class="slick-list draggable">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <?php $i =0?>4
                        @foreach($slider as $showslider)
                        @if($showslider->status ==1)
                        <div class="carousel-item @if($i ==0) active @endif">
                            <img class="d-block w-100"
                                src="{{asset('') .'giao-dien/images/slider/'.$showslider->images}}" alt="First slide">
                            <div class="container rex-mx">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="slider-content">
                                            <h5 data-animation="rollIn" data-duration=".3s" data-delay=".5s" class=""
                                                style="animation-delay: 0.5s; animation-duration: 0.3s;">
                                                {!! $showslider->name !!}</h5>
                                            <h1 data-animation="fadeInDown" data-duration=".8s" data-delay=".3s"
                                                class="" style="animation-delay: 0.3s; animation-duration: 0.8s;">
                                                {!! $showslider->title !!}</h1>
                                            <p class="mb--30 mb-sm--20" data-animation="fadeInDown" data-duration=".8s"
                                                data-delay=".3s"
                                                style="animation-delay: 0.3s; animation-duration: 0.8s;">{!!
                                                $showslider->content !!}</p>
                                            <p class="mb--50 mb-sm--20" data-animation="fadeInDown" data-duration=".8s"
                                                data-delay=".3s"
                                                style="animation-delay: 0.3s; animation-duration: 0.8s;">Giá Bán
                                                <strong>$1.499.00</strong></p>
                                            <div class="slide-btn-group" data-animation="fadeInUp" data-duration="1s"
                                                data-delay=".3s" style="animation-delay: 0.3s; animation-duration: 1s;">
                                                <a href="{{asset('') . 'giao-dien/sanpham'}}"
                                                    class="btn btn-bordered btn-style-1" tabindex="-1">Mua Ngay</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $i++?>
                        @endif
                        @endforeach
                    </div>

                </div>
            </div>
            <!-- Single Slide End -->

            <!-- Single Slide Start -->

            <!-- Single Slide End -->

            <!-- Single Slide Start -->

            <!-- Single Slide End -->



            <ul class="slick-dots" style="" role="tablist">
                <li class="slick-active" data-target="#carouselExampleIndicators" data-slide-to="0"><button
                        type="button" role="tab" id="slick-slide-control00" aria-controls="slick-slide00"
                        aria-label="1 of 3" tabindex="0" aria-selected="true">1</button></li>
                <li role="presentation" class="" data-target="#carouselExampleIndicators" data-slide-to="1"><button
                        type="button" role="tab" id="slick-slide-control01" aria-controls="slick-slide01"
                        aria-label="2 of 3" tabindex="-1">2</button></li>
                <li role="presentation" class="" data-target="#carouselExampleIndicators" data-slide-to="2"><button
                        type="button" role="tab" id="slick-slide-control02" aria-controls="slick-slide02"
                        aria-label="3 of 3" tabindex="-1">3</button></li>
            </ul>
        </div>
    </div>

    <!-- Slider area End -->

    <!-- Promo Box area Start -->

    <div class="promo-box-area border-bottom ptb--80 ptb-md--60">
        <div class="container">
            <div class="row">
                @foreach($advertisement as $showadvertisement)
                <div class="col-md-4 mb-sm--30">
                    <div class="promo promo-1">
                        <a href="{{asset('') . 'giao-dien/sanpham'}}" class="promo__box">
                            <img src="{{asset('') .'giao-dien/images/advertisement/'.$showadvertisement->images}}"
                                alt="Product Category">
                            <span class="promo__content">
                                <span class="promo__label">{!! $showadvertisement->name!!}</span>
                                <span class="promo__name">{!! $showadvertisement->title!!}</span>
                                <span class="promo__price">{!! number_format($showadvertisement->price)!!} ,VNĐ</span>
                            </span>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row mt--40 mt-md--30">
                <div class="col-12 text-center">
                    <p class="tweet"><i class="fa fa-twitter"></i> Check out "Alice - Multipurpose Responsive
                        #Magento #Theme" on #Envato by @Plazathemes #Themeforest <a href="">t.co/DNdhAwzm88</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Promo Box area End -->

    <!-- Products Tab area Start -->

    <div class="product-tab pt--80 pb--60 pt-md--60 pb-md--45">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <ul class="nav nav-tabs product-tab__head" id="product-tab" role="tablist">
                        <li class="product-tab__item nav-item active">
                            <a class="product-tab__link nav-link active" id="nav-featured-tab" data-toggle="tab"
                                href="#nav-featured" role="tab" aria-selected="true">Mới Nhất</a>
                        </li>
                        <li class="product-tab__item nav-item">
                            <a class="product-tab__link nav-link" id="nav-new-tab" data-toggle="tab" href="#nav-new"
                                role="tab" aria-selected="false">Bán Chạy</a>
                        </li>
                        <li class="product-tab__item nav-item">
                            <a class="product-tab__link nav-link" id="nav-bestseller-tab" data-toggle="tab"
                                href="#nav-bestseller" role="tab" aria-selected="false">Hót Nhất</a>
                        </li>
                        <li class="product-tab__item nav-item">
                            <a class="product-tab__link nav-link" id="nav-onsale-tab" data-toggle="tab"
                                href="#nav-onsale" role="tab" aria-selected="false">Giảm Giá</a>
                        </li>
                    </ul>
                    <div class="tab-content product-tab__content" id="product-tabContent">
                        <div class="tab-pane fade show active" id="nav-featured" role="tabpanel">
                            <div class="product-carousel js-product-carousel slick-initialized slick-slider">
                                <div class="slick-list draggable">
                                    <div class="slick-track">

                                        @foreach($product as $showproduct)
                                        
                                        <div class="product-carousel-group slick-slide slick-current slick-active"
                                            data-slick-index="0" aria-hidden="false" style="width: 240px;" tabindex="0">
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="{{asset('') .'giao-dien/images/product/'.$showproduct->images}}"
                                                        alt="Product" class="primary-image">
                                                    <img src="./giao-dien/images/1-1-450x450.jpg" alt="Product"
                                                        class="secondary-image">
                                                    <div class="product-img-overlay">
                                                    <?php $sale = ceil((($showproduct->sale_price - $showproduct->price)/$showproduct->sale_price)*100) ?>
                                                        <span class="product-label discount">
                                                        {{round($sale,1)}}%
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal"
                                                            class="btn btn-transparent btn-fullwidth btn-medium btn-style-1" id= "btn-style-1"
                                                            tabindex="0">Xem Nhanh</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                <input type="hidden" name="id" value="{{ $showproduct->id}}">
                                                    <span>{{$showproduct->Trademark->name}}</span>
                                                    <h4><a href="{{asset('') . 'giao-dien/ctsp/'.$showproduct->id}}"
                                                            tabindex="0">{{$showproduct->product_name}}</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">{{number_format($showproduct->price)}}.
                                                            VNĐ</span>
                                                        <span class="product-price-old">
                                                            <span
                                                                class="money">{{number_format($showproduct->sale_price)}}.
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
                                                        {!!$showproduct->detail!!}
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action"
                                                            href="demo.hasthemes.com/mirora-preview/mirora/wishlist.html"
                                                            title="wishlist" tabindex="0">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart"
                                                            href="{{asset('') . 'giao-dien/addcart/' . $showproduct->id }}"
                                                            title="wishlist" tabindex="0"><span>Add to
                                                                cart</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal"
                                                            data-target="#productModal"
                                                            href="demo.hasthemes.com/mirora-preview/mirora/compare.html"
                                                            tabindex="0">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>




                                        </div>
                                        @endforeach
                                        <div class="col-12 pagination-wrap mt--15 mt-md--10">
                                            <p class="page-ammount">Show sản phẩm theo trang</p>

                                            {{ $product->links() }}

                                        </div>


                                    </div>
                                </div>




                            </div>
                        </div>




                        <div class="tab-pane fade" id="nav-new" role="tabpanel">
                            <div class="product-carousel js-product-carousel slick-initialized slick-slider">
                                <div class="slick-list draggable">
                                    <div class="slick-track">


                                        @foreach($product as $showproduct)
                                        <div class="product-carousel-group slick-slide slick-current slick-active"
                                            data-slick-index="0" aria-hidden="false" style="width: 240px;" tabindex="0">
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="{{asset('') .'giao-dien/images/product/'.$showproduct->images}}"
                                                        alt="Product" class="primary-image">
                                                    <img src="./giao-dien/images/1-1-450x450.jpg" alt="Product"
                                                        class="secondary-image">
                                                        <?php $sale = ceil((($showproduct->sale_price - $showproduct->price)/$showproduct->sale_price)*100) ?>
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                        {{round($sale,1)}}%
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal"
                                                            class="btn btn-transparent btn-fullwidth btn-medium btn-style-1"
                                                            tabindex="0">Xem Nhanh</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span>{{$showproduct->Trademark->name}}</span>
                                                    <h4><a href="{{asset('') . 'giao-dien/ctsp/'.$showproduct->id}}"
                                                            tabindex="0">{{$showproduct->product_name}}</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">{{number_format($showproduct->price)}}.
                                                            VNĐ</span>
                                                        <span class="product-price-old">
                                                            <span
                                                                class="money">{{number_format($showproduct->sale_price)}}.
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
                                                        {!!$showproduct->detail!!}
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action"
                                                            href="demo.hasthemes.com/mirora-preview/mirora/wishlist.html"
                                                            title="wishlist" tabindex="0">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart"
                                                            href="{{asset('') . 'giao-dien/addcart/' . $showproduct->id }}"
                                                            title="wishlist" tabindex="0"><span>Add to
                                                                cart</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal"
                                                            data-target="#productModal"
                                                            href="demo.hasthemes.com/mirora-preview/mirora/compare.html"
                                                            tabindex="0">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>




                                        </div>
                                        @endforeach
                                        <div class="col-12 pagination-wrap mt--15 mt-md--10">
                                            <p class="page-ammount">Show sản phẩm theo trang</p>

                                            {{ $product->links() }}

                                        </div>

                                    </div>
                                </div>




                            </div>
                        </div>




                        <div class="tab-pane fade" id="nav-bestseller" role="tabpanel">
                            <div class="product-carousel js-product-carousel slick-initialized slick-slider">
                                <div class="slick-list draggable">
                                    <div class="slick-track">
                                        @foreach($product_price as $showproduct)
                                        <div class="product-carousel-group slick-slide slick-current slick-active"
                                            data-slick-index="0" aria-hidden="false" style="width: 240px;" tabindex="0">
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="{{asset('') .'giao-dien/images/product/'.$showproduct->images}}"
                                                        alt="Product" class="primary-image">
                                                    <img src="./giao-dien/images/1-1-450x450.jpg" alt="Product"
                                                        class="secondary-image">
                                                        <?php $sale = ceil((($showproduct->sale_price - $showproduct->price)/$showproduct->sale_price)*100) ?>
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                        {{round($sale,1)}}%
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal"
                                                            class="btn btn-transparent btn-fullwidth btn-medium btn-style-1"
                                                            tabindex="0">Xem Nhanh</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span>{{$showproduct->Trademark->name}}</span>
                                                    <h4><a href="{{asset('') . 'giao-dien/ctsp/'.$showproduct->id}}"
                                                            tabindex="0">{{$showproduct->product_name}}</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">{{number_format($showproduct->price)}}.
                                                            VNĐ</span>
                                                        <span class="product-price-old">
                                                            <span
                                                                class="money">{{number_format($showproduct->sale_price)}}.
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
                                                        {!!$showproduct->detail!!}
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action"
                                                            href="demo.hasthemes.com/mirora-preview/mirora/wishlist.html"
                                                            title="wishlist" tabindex="0">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart"
                                                            href="{{asset('') . 'giao-dien/addcart/' . $showproduct->id }}"
                                                            title="wishlist" tabindex="0"><span>Add to
                                                                cart</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal"
                                                            data-target="#productModal"
                                                            href="demo.hasthemes.com/mirora-preview/mirora/compare.html"
                                                            tabindex="0">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>




                                        </div>
                                        @endforeach
                                        <div class="col-12 pagination-wrap mt--15 mt-md--10">
                                            <p class="page-ammount">Show sản phẩm theo trang</p>

                                            {{ $product->links() }}

                                        </div>

                                    </div>
                                </div>




                            </div>
                        </div>



                        <div class="tab-pane fade" id="nav-onsale" role="tabpanel">
                            <div class="product-carousel js-product-carousel slick-initialized slick-slider">
                                <div class="slick-list draggable">
                                    <div class="slick-track">


                                        @foreach($product_sale_price as $showproduct)
                                        <div class="product-carousel-group slick-slide slick-current slick-active"
                                            data-slick-index="0" aria-hidden="false" style="width: 240px;" tabindex="0">
                                            <div class="mirora-product">
                                                <div class="product-img">
                                                    <img src="{{asset('') .'giao-dien/images/product/'.$showproduct->images}}"
                                                        alt="Product" class="primary-image">
                                                    <img src="./giao-dien/images/1-1-450x450.jpg" alt="Product"
                                                        class="secondary-image">
                                                        <?php $sale = ceil((($showproduct->sale_price - $showproduct->price)/$showproduct->sale_price)*100) ?>
                                                    <div class="product-img-overlay">
                                                        <span class="product-label discount">
                                                        {{round($sale,1)}}%
                                                        </span>
                                                        <a data-toggle="modal" data-target="#productModal"
                                                            class="btn btn-transparent btn-fullwidth btn-medium btn-style-1"
                                                            tabindex="0">Xem Nhanh</a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <span>{{$showproduct->Trademark->name}}</span>
                                                    <h4><a href="{{asset('') . 'giao-dien/ctsp/'.$showproduct->id}}"
                                                            tabindex="0">{{$showproduct->product_name}}</a></h4>
                                                    <div class="product-price-wrapper">
                                                        <span class="money">{{number_format($showproduct->price)}}.
                                                            VNĐ</span>
                                                        <span class="product-price-old">
                                                            <span
                                                                class="money">{{number_format($showproduct->sale_price)}}.
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
                                                        {!!$showproduct->detail!!}
                                                    </p>
                                                    <div class="product-action">
                                                        <a class="same-action"
                                                            href="demo.hasthemes.com/mirora-preview/mirora/wishlist.html"
                                                            title="wishlist" tabindex="0">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a class="add_cart cart-item action-cart"
                                                            href="{{asset('') . 'giao-dien/addcart/' . $showproduct->id }}"
                                                            title="wishlist" tabindex="0"><span>Add to
                                                                cart</span></a>
                                                        <a class="same-action compare-mrg" data-toggle="modal"
                                                            data-target="#productModal"
                                                            href="demo.hasthemes.com/mirora-preview/mirora/compare.html"
                                                            tabindex="0">
                                                            <i class="fa fa-sliders fa-rotate-90"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>




                                        </div>
                                        @endforeach
                                        <div class="col-12 pagination-wrap mt--15 mt-md--10">
                                            <p class="page-ammount">Show sản phẩm theo trang</p>

                                            {{ $product->links() }}

                                        </div>



                                    </div>
                                </div>




                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Products Tab area End -->

    <!-- Banner area Start -->

    <section class="banner-area banner-bg-1 ptb--80 ptb-md--60">
        <div class="banner-box text-center">
            <h5 class="banner__label">Sale Off 20% tất cả sản phẩm</h5>
            <h2 class="banner__name">Giảm Giá Tất Cả Sản Phẩm Nhân Dịp Khai Trương</h2>
            <p class="banner__text mb--50 mb-md--20">Chúng tôi là sự lựa chọn tốt nhất cho bạn</p>
            <a href="{{asset('') . 'giao-dien/sanpham'}}" class="btn btn-bordered btn-style-1">Mua Ngay</a>
        </div>
    </section>

    <!-- Banner area End -->

    <!-- Most Viewed Product area Start -->

    <section class="mostviewed-product-area border-bottom pt--80 pb--60 pt-md--60 pb-md--50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title mb--15">
                        <h2 class="color--white">Sản Phẩm Được Xem Nhiều Nhất</h2>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="product-carousel nav-top js-product-carousel-2 slick-initialized slick-slider">
                        <span class="slick-btn slick-prev slick-arrow" style=""><i class="fa fa-angle-left"></i></span>
                        <div class="slick-list draggable">
                            <div class="slick-track">

                                @foreach($product_view as $showproduct)
                                <div class="product-carousel-group slick-slide slick-current slick-active"
                                    data-slick-index="0" aria-hidden="false" style="width: 240px;" tabindex="0">
                                    <div class="mirora-product">
                                        <div class="product-img">
                                            <img src="{{asset('') .'giao-dien/images/product/'.$showproduct->images}}"
                                                alt="Product" class="primary-image">
                                            <img src="./giao-dien/images/1-1-450x450.jpg" alt="Product"
                                                class="secondary-image">
                                                <?php $sale = ceil((($showproduct->sale_price - $showproduct->price)/$showproduct->sale_price)*100) ?>
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                {{round($sale,1)}}%
                                                </span>
                                                <a data-toggle="modal" data-target="#productModal"
                                                    class="btn btn-transparent btn-fullwidth btn-medium btn-style-1"
                                                    tabindex="0">Xem Nhanh</a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <span>{{$showproduct->Trademark->name}}</span>
                                            <h4><a href="{{asset('') . 'giao-dien/ctsp/'.$showproduct->id}}"
                                                    tabindex="0">{{$showproduct->product_name}}</a></h4>
                                            <div class="product-price-wrapper">
                                                <span class="money">{{number_format($showproduct->price)}}. VNĐ</span>
                                                <span class="product-price-old">
                                                    <span class="money">{{number_format($showproduct->sale_price)}}.
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
                                                {!!$showproduct->detail!!}
                                            </p>
                                            <div class="product-action">
                                                <a class="same-action"
                                                    href="demo.hasthemes.com/mirora-preview/mirora/wishlist.html"
                                                    title="wishlist" tabindex="0">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="add_cart cart-item action-cart"
                                                    href="{{asset('') . 'giao-dien/addcart/' . $showproduct->id }}"
                                                    title="wishlist" tabindex="0"><span>Add to
                                                        cart</span></a>
                                                <a class="same-action compare-mrg" data-toggle="modal"
                                                    data-target="#productModal"
                                                    href="demo.hasthemes.com/mirora-preview/mirora/compare.html"
                                                    tabindex="0">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>




                                </div>
                                @endforeach
                                <div class="col-12 pagination-wrap mt--15 mt-md--10">
                                    <p class="page-ammount">Show sản phẩm theo trang</p>
                                    {{ $product->links() }}
                                </div>

                            </div>
                        </div>

                        <span class="slick-btn slick-next slick-arrow" style=""><i class="fa fa-angle-right"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Most Viewed Product area End -->

    <!-- Blog area Start -->

    <section class="blog-area pt--80 pb--40 pt-md--60 pb-md--30">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title mb--30">
                        <h2>Danh Mục Bài Viết</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="blog-carousel nav-top slick-item-gutter slick-initialized slick-slider">
                        <span class="slick-btn slick-prev slick-arrow" style=""><i class="fa fa-angle-left"></i></span>
                        <div class="slick-list draggable">
                            <div class="slick-track">
                                @foreach($blog as $showblog)
                                <article class="blog slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true"
                                    style="width: 400px;">
                                    <a href="{{asset('') . 'giao-dien/ctbl/'.$showblog->id}}" class="blog__thumb">
                                        <img src="{{asset('') .'giao-dien/images/blog/'.$showblog->images}}" alt="Blog">
                                    </a>
                                    <div class="blog__content">
                                        <div class="blog__meta">
                                            <p class="blog__author">Post By: <a
                                                    href="{{asset('') . 'giao-dien/ctbl/'.$showblog->id}}">{{ $showblog->User->username}}</a>
                                            </p>
                                            <p class="blog__date"><a
                                                    href="{{asset('') . 'giao-dien/ctbl/'.$showblog->id}}">{{ $showblog->created_at}}</a></p>
                                        </div>

                                        <h3 class="blog__title"><a
                                                href="{{asset('') . 'giao-dien/ctbl/'.$showblog->id}}">{!!
                                                $showblog->name_blog !!}</a></h3>
                                        <div class="blog__text">
                                            <p>{!! $showblog->meta !!}
                                            </p>
                                            <a class="read-more"
                                                href="{{asset('') . 'giao-dien/ctbl/'.$showblog->id}}">Xem Thêm</a>
                                        </div>

                                    </div>
                                </article>
                                @endforeach
                            </div>
                        </div>



                        <span class="slick-btn slick-next slick-arrow" style=""><i class="fa fa-angle-right"></i></span>
                    </div>
                </div>
            </div>
            <!-- <div class="row mt--35 mt-md--25">
                <div class="col-12 text-center">
                    <a href="demo.hasthemes.com/mirora-preview/mirora/instagram.com"
                        class="btn btn-medium btn-style-2"><i class="fa fa-instagram"></i>Danh Mục Bài Viết</a>
                </div>
            </div> -->
        </div>
    </section>

    <!-- Blog area End -->

    <!-- Newsletter area End -->

    <div class="newsletter-area pt--40 pb--80 pt-md--30 pb-md--60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-10">
                    <div class="newsletter text-center">
                        <h3 class="color--white">Đến Với Chúng Tôi</h3>
                        <p>Thương hiệu đồng hồ số 1 việt nam.</p>

                        <form class="newsletter-form validate mt--40"
                            
                            method="post" id="mc-embedded-newsletter-form" name="mc-embedded-newsletter-form"
                            target="_blank" novalidate="">
                            <input type="email" name="email" id="sub_email"
                                placeholder="Nhập địa chỉ email" class="newsletter-form__input">
                            <input type="submit" value="Đăng kí" class="btn newsletter-btn btn-style-1">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter area End -->

    <!-- Promo Box area Start -->

    <div class="promo-box-area">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
            @foreach($advertisement_footer as $print_advertisement_footer)
                <div class="col-md-6 mb-sm--20">
                    <div class="promo">
                        <a href="{{asset('') . 'giao-dien/sanpham'}}" class="promo__box promo__box-2">
                            <img src="{{asset('') .'giao-dien/images/advertisement/'.$print_advertisement_footer->images}}" alt="Product Category">
                            <span class="promo__content promo__content-2">
                                <span class="promo__label">{{$print_advertisement_footer->name}}</span>
                                <span class="promo__name">{{$print_advertisement_footer->title}}</span>
                                <span class="promo__price">{{$print_advertisement_footer->content}}</span>
                                <span class="promo__link">Đến sản phẩm</span>
                            </span>
                        </a>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>

    <!-- Promo Box area End -->

</div>





<!-- Modal Start -->
<div class="modal fade product-modal" id="productModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">Đóng</span>
                        </button>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5 col-md-6 mb-sm--20">
                                    <div class="tab-content product-thumb-large">

                                        <div id="thumb1" class="tab-pane active show fade">
                                            <img class="img_model" alt="product thumb">
                                        </div>
                                       
                                    </div>
                                    <div class="product-thumbnail">
                                        <div class="thumb-menu slick-initialized slick-slider" id="modal-thumbmenu">
                                            <div class="slick-list draggable">
                                                <div class="slick-track">

                                                    <!-- <div class="thumb-menu-item slick-slide slick-cloned"
                                                        data-slick-index="-4" aria-hidden="true" style="width: 120px;"
                                                        tabindex="-1">
                                                        <a href="thumb3" data-toggle="tab" class="nav-link"
                                                            tabindex="-1">
                                                            <img src="./giao-dien/images/10-10-450x450.jpg"
                                                                alt="product thumb">
                                                        </a>
                                                    </div> -->




                                                </div>
                                            </div>





                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6">
                                    <div class="modal-box product">
                                        <h3 class="product-title tieudesp" ></h3>
                                        
                                        <div class="ratings mb--20">
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <ul class="product-detail-list list-unstyled mb--20">
                                        <li class="my-5">Thương Hiệu: <a class="trade"></a></li>
                                        <li class="my-5">Nguồn Gốc: <span class = "source"></span></li>
                                        <li class="my-5">Loại Máy: <span class = "machine"></span></li>
                                        <li class="my-5">Danh Mục: <span class = "sex"></span></li>
                                        <li class="my-5">Số lượng: <span class = "guarantee"></span></li>
                                        </ul>
                                        <div class="product-price border-bottom pb--20 mb--20">
                                            <span class="regular-price"></span>
                                            <span class="sale-price"></span>
                                        </div>
                                        <!-- <div class="product-options mb--20">
                                            <h3>Tùy Chọn</h3>
                                            <div class="form-group">
                                                <label class ="my-3"><sup>*</sup>Chọn màu</label>
                                                <select>
                                                    <option> --- màu sắc--- </option>
                                                    <option>Black</option>
                                                    <option>Blue</option>
                                                </select>
                                            </div>
                                        </div> -->
                                        <div class="product-action-wrapper mb--20">
                                            <div class="product-action-top d-flex align-items-center mb--20">
                                                <div class="quantity">
                                                    <span>Số lượng: </span>
                                                    <input type="number" 
                                                        value="1" min="1" style ="width:100px">

                                                </div>
                                                
                                                <button type="button" class="btn btn-medium btn-style-2 add-to-cart mt-5">
                                                    Thêm Vào Giỏ Hàng
                                                </button>
                                            </div>
                                        </div>
                                        <p class="product-tags">
                                            Tags: <a
                                                href="https:/demo.hasthemes.com/mirora-preview/mirora/shop.html">Sport</a>,
                                            <a
                                                href="https:/demo.hasthemes.com/mirora-preview/mirora/shop.html">Luxury</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->





@endsection
@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script type="text/javascript">
$('.btn-style-1').on('click', function() {
    var id = parseInt($("input[name='id']").val());
    console.log(id);
    $.ajax({
        type: 'get',
        url: '{{ URL::to('giao-dien/viewproduct') }}' + '/'+id,
        data: {
            id: function() {
                return $("input[name='id']").val();
            }
        },
        success: function(data) {
            var obj = JSON.parse(data);
            console.log(obj);
            console.log($('.tieudesp').text());
            
            $('.tieudesp').text(obj.product_name);
            $('.trade').text(obj.category_trade);
            $('.source').text(obj.product_name);
            $('.machine').text();
            $('.sex').text(obj.cate_id);
            $('.guarantee').text(obj.quantity);
            $('.sale-price').text(obj.price);
            $('.regular-price').text(obj.sale_price);
            $('.img_model').attr("src","giao-dien/images/product/"+obj.images);   
        }
    });
})
$.ajaxSetup({
    headers: {
        'csrftoken': '{{ csrf_token() }}'
    }
});
</script>
@endsection