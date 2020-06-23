@foreach($company as $showcompany)
<footer class="footer border-top ptb--40 ptb-md--30">
            <div class="container">
                <div class="row mb--40 mb-md--30">
                    <div class="col-lg-5 col-md-6 mb-md--30">
                        <div class="footer-widget">
                            <h3 class="widget-title">Về Chúng Tôi</h3>
                            <div class="widget-content mb--20">
                                <p>Địa Chỉ : {!! $showcompany ->address!!}</p>
                                <p>Điện Thoại: 0986966813</p>
                                
                                <p>Email: {!! $showcompany ->email!!}</p>
                            </div>
                            <ul class="social social-round">
                                <li class="social__item">
                                    <a class="social__link"
                                        href="https://www.facebook.com/thi.le.925059">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a class="social__link"
                                        href="https://twitter.com">
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
                                    <a class="social__link"
                                        href="https://instagram.com">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a class="social__link"
                                        href="https://google.com">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-md--30">
                        <div class="footer-widget">
                            <h3 class="widget-title">Thông Tin</h3>
                            <ul class="widget-menu">
                                <li><a href="{{asset('') . ''}}">Về Chúng Tôi</a>
                                </li>
                                <li><a href="{{asset('') . ''}}">Thông tin giao hàng</a></li>
                                <li><a href="{{asset('') . ''}}">Chính sách bảo mật</a></li>
                                <li><a href="{{asset('') . ''}}">Điều khoản và điều kiện</a></li>
                                <li><a href="{{asset('') . ''}}">Phiếu quà tặng</a></li>
                                <li><a href="{{asset('') . ''}}">Liên hệ chúng tôi</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-sm--30">
                        <div class="footer-widget">
                            <h3 class="widget-title">Ngoài Ra</h3>
                            <ul class="widget-menu">
                            <li><a href="{{asset('') . ''}}">Trang Chủ</a></li>
                            <li><a href="{{asset('') . ''}}">Sản Phẩm</a>
                            </li>
                            <li><a href="{{asset('') . ''}}">Tin Tức</a></li>
                            <li><a href="{{asset('') . ''}}">Về Chúng Tôi</a>
                            </li>
                            <li><a href="{{asset('') . ''}}">Dịch Vụ $ Bảo Hành</a>
                            </li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <h3 class="widget-title">Sản Phẩm Tùy Chỉnh</h3>
                            <div class="widget-product">
                                <div class="product">
                                    <div class="product-img">
                                        <img src="./giao-dien/images//11-450x450.jpg"
                                            alt="products">
                                    </div>
                                    <div class="product-content">
                                        <div class="product-rating">
                                            <span>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                        <h4 class="product-title">
                                            <a href="https://demo.hasthemes.com/mirora-preview/mirora/product-details.html"
                                                tabindex="0">Acer Aspire E 15</a>
                                        </h4>
                                        <div class="product-price-wrapper">
                                            <span class="money">$550.00</span>
                                            <span class="product-price-old">
                                                <span class="money">$700.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-img">
                                        <img src="./giao-dien/images//11-450x450.jpg"
                                            alt="products">
                                    </div>
                                    <div class="product-content">
                                        <div class="product-rating">
                                            <span>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                        <h4 class="product-title">
                                            <a href="https://demo.hasthemes.com/mirora-preview/mirora/product-details.html"
                                                tabindex="0">Acer Aspire E 15</a>
                                        </h4>
                                        <div class="product-price-wrapper">
                                            <span class="money">$550.00</span>
                                            <span class="product-price-old">
                                                <span class="money">$700.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="row mb--40 mb-md--30">
                    <div class="col-12">
                        <ul class="footer-menu">
                            <li><a href="{{asset('') . ''}}">Trang Chủ</a></li>
                            <li><a href="{{asset('') . ''}}">Sản Phẩm</a>
                            </li>
                            <li><a href="{{asset('') . ''}}">Tin Tức</a></li>
                            <li><a href="{{asset('') . ''}}">Về Chúng Tôi</a>
                            </li>
                            <li><a href="{{asset('') . ''}}">Dịch Vụ $ Bảo Hành</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="copyright-text">Copyright © 2020 <a href="">{!! $showcompany ->name!!}</a> .All Right Reserved.</p>
                        <img src="./giao-dien/images/payment.png"
                            alt="payment">
                    </div>
                </div>
            </div>
        </footer>
        @endforeach