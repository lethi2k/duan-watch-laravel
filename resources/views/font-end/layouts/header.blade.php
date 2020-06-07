<!-- Header Area Start -->
<header class="header headery-style-1">
    <div class="header-top header-top-1">
        <div class="container">
            <div class="row no-gutters align-items-center">
                <div class="col-lg-8 d-flex align-items-center flex-column flex-lg-row">
                    <ul class="social social-round mr--20">
                        <li class="social__item">
                            <a class="social__link" href="https://www.facebook.com/thi.le.925059">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="social__item">
                            <a class="social__link" href="https://twitter.com">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="social__item">
                            <a class="social__link"
                                href="https://www.youtube.com/channel/UC91pe3cphfx2D4KnkDTy1uw?view_as=subscriber">
                                <i class="fa fa-youtube"></i>
                            </a>
                        </li>
                        <li class="social__item">
                            <a class="social__link" href="https://instagram.com">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <li class="social__item">
                            <a class="social__link" href="https://google.com">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                    </ul>
                    <p class="header-text">Thương Hiệu Bán lẻ đồng hồ tiêu chuẩn <span> Việt Nam 2020</span></p>
                </div>
                <div class="col-lg-4">
                    <div class="header-top-nav d-flex justify-content-lg-end justify-content-center">
                        <div class="language-selector header-top-nav__item">
                            <div class="dropdown header-top__dropdown">
                                <a class="dropdown-toggle" id="languageID" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    NGÔN NGỮ
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="languageID">
                                    <a class="dropdown-item" href=""><img src="./giao-dien/images/1.jpg" alt="English">
                                        Việt Nam</a>
                                    <a class="dropdown-item" href=""><img src="./giao-dien/images/2.jpg" alt="Français">
                                        English</a>
                                </div>
                            </div>
                        </div>
                        <div class="currency-selector header-top-nav__item">
                            <div class="dropdown header-top__dropdown">

                                <a class="dropdown-toggle" id="currencyID" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    LOẠI TIỀN
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="currencyID">
                                    <a class="dropdown-item" href="">VN VNĐ</a>
                                    <a class="dropdown-item" href="">$ Us Dollar</a>
                                </div>
                            </div>
                        </div>
                        <div class="user-info header-top-nav__item">
                            <div class="dropdown header-top__dropdown">
                                <a class="dropdown-toggle" id="userID" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if(Auth::user())
                                {{Auth::user()->username}}
                                @else
                                TÀI KHOẢN
                                @endif
                                    
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="userID">
                                    @if(Auth::user())
                                    <a class="dropdown-item" href="giao-dien/dangxuat">Đăng Xuất</a>
                                    @else
                                    <a class="dropdown-item" href="giao-dien/dangnhap">Đăng Nhập</a>
                                    <a class="dropdown-item" href="giao-dien/dangki">Đăng Kí </a>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="currency-selector header-top-nav__item">
                            <div class="dropdown header-top__dropdown">
                            @if(Auth::user())
                                @if (Auth::user()->level == 1)
                                <a href="{{asset('') . 'admin/index'}}" class="dropdown-toggle">                            
                                    QUẢN TRỊ
                                </a>
                                @endif
                            @endif
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach($company as $showcompany)
    <div class="header-middle header-top-1">
        <div class="container">
            <div class="row no-gutters align-items-center">
                <div class="col-md-5 col-sm-6 order-lg-1 order-2">
                    <div class="contact-info">
                        <img src="./giao-dien/images/icon_phone.png" alt="Phone Icon">
                        <p>Hỗ Trợ <br><br> call : 0{!! $showcompany->phone_number!!}</p>
                    </div>
                </div>
                <div class="col-lg-2 col-12 order-lg-2 order-1 text-center">
                    <a href="{{asset('') . ''}}" class="logo-box mb-md--30">
                        <img src="{{asset('') .'giao-dien/images/company/'.$showcompany->logo}}" alt="logo">
                    </a>
                </div>
                <div class="col-lg-5 col-md-7 col-sm-6 order-lg-3 order-3">
                    <div class="header-toolbar">



                        <div class="search-form-wrapper search-hide" style="display: none;">
                            <form action="#" class="search-form">
                                <input type="text" name="search" id="search" class="search-form__input"
                                    placeholder="Nhập sản phẩn cần tìm">
                                <button type="submit" class="search-form__submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>



                        <ul class="header-toolbar-icons">
                            <li class="search-box mr--20" >
                                <a class="bordered-icon search-btn" aria-expanded="false"><i
                                        class="fa fa-search"></i></a>
                            </li>
                            <!-- <li class="wishlist-icon">
                                        <a href="https://demo.hasthemes.com/mirora-preview/mirora/wishlist.html"
                                            class="bordered-icon"><i class="fa fa-heart"></i></a>
                                    </li> -->
                            <li class="mini-cart-icon">
                                <div class="mini-cart mini-cart--1">
                                    <a href="giao-dien/showcart" class="mini-cart__dropdown-toggle bordered-icon" id="cartDropdown">
                                        <span class="mini-cart__count">
                                        @if(Auth::user())
                                            @if(\Cart::session(Auth::user()->id)->getContent())
                                            {{ \Cart::session(Auth::user()->id)->getContent()->count()}}
                                            @else
                                            0
                                            @endif
                                        @endif
                                        </span>
                                        <i class="icon_cart_alt mini-cart__icon fa fa-cart-plus "></i>
                                        <span class="mini-cart__ammount">Giỏ Hàng <i
                                                class="fa fa-angle-down"></i></span>
                                    </a>
                                    <!-- style ="display: block !important;" -->

                                    <!-- <div class="mini-cart__dropdown-menu showspdw" >
                                    
                                        <div class="slimScrollDiv"
                                            style="position: relative; overflow: hidden; width: auto; height: 250px;">
                                            <div class="mini-cart__content" id="miniCart"
                                                style="overflow: hidden; width: auto; height: 250px;">
                                                <div class="mini-cart__item">
                                                    <div class="mini-cart__item--single">
                                                        <div class="mini-cart__item--image">
                                                            <img src="assets/img/products/1-1-450x450.jpg"
                                                                alt="product">
                                                        </div>
                                                        <div class="mini-cart__item--content">
                                                            <h4 class="mini-cart__item--name"><a
                                                                    href="product-details.html">Dell Inspiron 24</a>
                                                            </h4>
                                                            <p class="mini-cart__item--quantity">x1</p>
                                                            <p class="mini-cart__item--price">$100.00</p>
                                                        </div>
                                                        <a class="mini-cart__item--remove" href=""><i
                                                                class="icon_close"></i></a>
                                                    </div>
                                                    <div class="mini-cart__item--single">
                                                        <div class="mini-cart__item--image">
                                                            <img src="assets/img/products/2-2-450x450.jpg"
                                                                alt="product">
                                                        </div>
                                                        <div class="mini-cart__item--content">
                                                            <h4 class="mini-cart__item--name"><a
                                                                    href="product-details.html">Acer Aspire AIO
                                                                    <br>-<small>Color Swatch Black</small></a> </h4>
                                                            <p class="mini-cart__item--quantity">x1</p>
                                                            <p class="mini-cart__item--price">$100.00</p>
                                                        </div>
                                                        <a class="mini-cart__item--remove" href=""><i
                                                                class="icon_close"></i></a>
                                                    </div>
                                                </div>
                                                <div class="mini-cart__calculation">
                                                    <p>
                                                        <span class="mini-cart__calculation--item">Sub-Total :</span>
                                                        <span class="mini-cart__calculation--ammount">$1,070.00</span>
                                                    </p>
                                                    <p>
                                                        <span class="mini-cart__calculation--item">Eco Tax (-2.00)
                                                            :</span>
                                                        <span class="mini-cart__calculation--ammount">$4.00</span>
                                                    </p>
                                                    <p>
                                                        <span class="mini-cart__calculation--item">Eco VAT (20%)
                                                            :</span>
                                                        <span class="mini-cart__calculation--ammount">$214.00</span>
                                                    </p>
                                                    <p>
                                                        <span class="mini-cart__calculation--item">Eco Total :</span>
                                                        <span class="mini-cart__calculation--ammount"> $1,288.00</span>
                                                    </p>
                                                </div>
                                                <div class="mini-cart__btn">
                                                    <a href="cart.html" class="btn btn-fullwidth btn-style-1">View
                                                        Cart</a>
                                                    <a href="checkout.html"
                                                        class="btn btn-fullwidth btn-style-1">Checkout</a>
                                                </div>

                                            </div>
                                           
                                        </div>
                                    </div> -->
                                </div>
                            </li>
                         

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="header-bottom header-top-1 position-relative navigation-wrap fixed-header">
        <div class="container position-static">
            <div class="row">
                <div class="col-12 position-static text-center">
                    <nav class="main-navigation" style="display: block;">
                        <ul class="mainmenu">
                            <li class="mainmenu__item ">
                                <a href="{{asset('') . ''}}" class="mainmenu__link">Trang Chủ</a>
                            </li>
                            <li class="mainmenu__item menu-item-has-children">
                                <a href="{{asset('') . 'giao-dien/sanpham'}}" class="mainmenu__link">Sẩn Phẩm</a>
                                <!-- <ul class="megamenu five-column">
                                            <li>
                                                <a class="megamenu-title" href="">Patek Philippe</a>
                                                <ul>
                                                    <li>
                                                        <a
                                                            href="https://demo.hasthemes.com/mirora-preview/mirora/shop.html">Left
                                                            Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="https://demo.hasthemes.com/mirora-preview/mirora/shop-right-sidebar.html">Right
                                                            Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="https://demo.hasthemes.com/mirora-preview/mirora/shop-fullwidth.html">Three
                                                            Column</a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="https://demo.hasthemes.com/mirora-preview/mirora/shop-fullwidth-4-column.html">Four
                                                            Column</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="megamenu-title" href="">Rolex Swiss Made</a>
                                                <ul>
                                                    <li>
                                                        <a
                                                            href="https://demo.hasthemes.com/mirora-preview/mirora/shop-list-left-sidebar.html">Left
                                                            Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="https://demo.hasthemes.com/mirora-preview/mirora/shop-list-right-sidebar.html">Right
                                                            Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="https://demo.hasthemes.com/mirora-preview/mirora/shop-list.html">Full
                                                            width</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="megamenu-title" href=""> Omega</a>
                                                <ul>
                                                    <li>
                                                        <a
                                                            href="https://demo.hasthemes.com/mirora-preview/mirora/product-details.html">Standard
                                                            Product</a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="https://demo.hasthemes.com/mirora-preview/mirora/product-details-variable.html">Variable
                                                            Product</a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="https://demo.hasthemes.com/mirora-preview/mirora/product-details-group.html">Group
                                                            Product</a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="https://demo.hasthemes.com/mirora-preview/mirora/product-details-affiliate.html">Affiliate
                                                            Product</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="megamenu-title" href="">Longines</a>
                                                <ul>
                                                    <li>
                                                        <a
                                                            href="https://demo.hasthemes.com/mirora-preview/mirora/product-details.html">Tab
                                                            Style One</a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="https://demo.hasthemes.com/mirora-preview/mirora/product-details-tab-style-2.html">Tab
                                                            Style Two</a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="https://demo.hasthemes.com/mirora-preview/mirora/product-details-tab-style-3.html">Tab
                                                            Style Three</a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="https://demo.hasthemes.com/mirora-preview/mirora/product-details-sticky-left.html">Sticky
                                                            Left</a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="https://demo.hasthemes.com/mirora-preview/mirora/product-details-sticky-right.html">Sticky
                                                            Right</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="megamenu-title" href="">Tissot</a>
                                                <ul>
                                                    <li>
                                                        <a
                                                            href="https://demo.hasthemes.com/mirora-preview/mirora/product-details-gallery-left.html">Gallery
                                                            Left</a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="https://demo.hasthemes.com/mirora-preview/mirora/product-details-gallery-right.html">Gallery
                                                            Right</a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="https://demo.hasthemes.com/mirora-preview/mirora/product-details-slider-box.html">Slider
                                                            Box</a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="https://demo.hasthemes.com/mirora-preview/mirora/product-details-slider-full-width.html">Full
                                                            Width Slider</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul> -->
                            </li>
                            <li class="mainmenu__item menu-item-has-children has-children">
                                <a href="#" class="mainmenu__link">Tin Tức</a>
                                <ul class="sub-menu">
                                    @foreach($cateblog as $showcatebl)
                                    <li class="has-children">
                                        <a
                                            href="{{asset('') . 'giao-dien/block/'.$showcatebl->id}}">{{$showcatebl->cate_name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="mainmenu__item">
                                <a href="{{asset('') . 'giao-dien/gt'}}" class="mainmenu__link">Về Chúng Tôi</a>
                            </li>
                            <li class="mainmenu__item">
                                <a href="{{asset('') . 'giao-dien/lienhe'}}" class="mainmenu__link">Liên Hệ &amp; Hỏi
                                    Đáp</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Area End -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(".search-box").click(function(){
    $(".search-form-wrapper").show();
  });
});

</script>


<script>
$(document).ready(function() {
    $('.cartDropdown').on('click', function(e) {
        e.preventDefault();
        $('.bordered-icon').addClass('showsp');
        $(".mini-cart__dropdown-menu").show();
    });
    // $('.showsp').on('click', function(e) {
    //     e.preventDefault();
    //     (".mini-cart__dropdown-menu").hide();
        
    // });
});
</script>