<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <title>@yield('title', "Pjorect laravel By Lê Thi")</title>
    <base href="{{asset('')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('font-end.layouts.css')
    @yield('css')
</head>
<body>
    <div class="wrapper bg--shaft">
        @include('font-end.layouts.header')
        <!-- Main Content Wrapper Start -->
        
        @yield('content')
        <!-- Main Content Wrapper Start -->

        <!-- Footer Start -->
        @include('font-end.layouts.footer')
        <!-- Footer End -->

        <!-- Scroll To Top Start -->
        <a class="scroll-to-top" href="https:/demo.hasthemes.com/mirora-preview/mirora/index.html"
            style="opacity: 0;"><i class="fa fa-angle-double-up"></i></a>
        <!-- Scroll To Top End -->

        <!-- Popup Subscribe Box Start -->
        <div class="popup-subscribe-box" id="subscribe-popup" style="display: none;">
            <div class="popup-subscribe-box-content">
                <div class="popup-subscribe-box-body">
                    <a href="subscribe-popup" class="popup-close">close</a>
                    <h3>NEWSLETTER</h3>
                    <p>Subscribe to our newsletters now and stay up-to-date with new collections, the latest lookbooks
                        and exclusive offers.</p>
                    <form class="popup-subscribe-form validate"
                        action="https:/demo.hasthemes.com/mirora-preview/mirora/index.html" method="post">
                        <input type="email" name="popup-subscribe-email" id="popup-subscribe-email"
                            placeholder="Enter your email here...">
                        <input type="submit" value="Subscribe" class="btn subscribe-btn btn-medium btn-style-1">
                        <div class="form-group text-center mt--20">
                            <input type="checkbox" name="hide-popup" id="hide-popup">
                            <label for="hide-popup"> Don't show this popup again </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Popup Subscribe Box End -->

        <!-- Modal Start -->
        <div class="modal fade product-modal" id="productModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">Close</span>
                        </button>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5 col-md-6 mb-sm--20">
                                    <div class="tab-content product-thumb-large">
                                        <div id="thumb1" class="tab-pane active show fade">
                                            <img src="./giao-dien/images/1-1-600x600.jpg"
                                                alt="product thumb">
                                        </div>
                                        <div id="thumb2" class="tab-pane fade">
                                            <img src="./giao-dien/images/2-600x600.jpg"
                                                alt="product thumb">
                                        </div>
                                        <div id="thumb3" class="tab-pane fade">
                                            <img src="./giao-dien/images/10-600x600.jpg"
                                                alt="product thumb">
                                        </div>
                                        <div id="thumb4" class="tab-pane fade">
                                            <img src="./giao-dien/images/11-600x600.jpg"
                                                alt="product thumb">
                                        </div>
                                        <div id="thumb5" class="tab-pane fade">
                                            <img src="./giao-dien/images/12-600x600.jpg"
                                                alt="product thumb">
                                        </div>
                                        <div id="thumb6" class="tab-pane fade">
                                            <img src="./giao-dien/images/13-600x600.jpg"
                                                alt="product thumb">
                                        </div>
                                    </div>
                                    <div class="product-thumbnail">
                                        <div class="thumb-menu slick-initialized slick-slider" id="modal-thumbmenu">
                                            <div class="slick-list draggable">
                                                <div class="slick-track"
                                                    style="opacity: 1; width: 1920px; transform: translate3d(-480px, 0px, 0px);">
                                                    <div class="thumb-menu-item slick-slide slick-cloned"
                                                        data-slick-index="-4" aria-hidden="true" style="width: 120px;"
                                                        tabindex="-1">
                                                        <a href="thumb3" data-toggle="tab" class="nav-link"
                                                            tabindex="-1">
                                                            <img src="./giao-dien/images/10-10-450x450.jpg"
                                                                alt="product thumb">
                                                        </a>
                                                    </div>
                                                    <div class="thumb-menu-item slick-slide slick-cloned"
                                                        data-slick-index="-3" aria-hidden="true" style="width: 120px;"
                                                        tabindex="-1">
                                                        <a href="thumb4" data-toggle="tab" class="nav-link"
                                                            tabindex="-1">
                                                            <img src="./giao-dien/images/11-11-450x450.jpg"
                                                                alt="product thumb">
                                                        </a>
                                                    </div>
                                                    <div class="thumb-menu-item slick-slide slick-cloned"
                                                        data-slick-index="-2" aria-hidden="true" style="width: 120px;"
                                                        tabindex="-1">
                                                        <a href="thumb5" data-toggle="tab" class="nav-link"
                                                            tabindex="-1">
                                                            <img src="./giao-dien/images/12-12-450x450.jpg"
                                                                alt="product thumb">
                                                        </a>
                                                    </div>
                                                    <div class="thumb-menu-item slick-slide slick-cloned"
                                                        data-slick-index="-1" aria-hidden="true" style="width: 120px;"
                                                        tabindex="-1">
                                                        <a href="thumb6" data-toggle="tab" class="nav-link"
                                                            tabindex="-1">
                                                            <img src="./giao-dien/images/13-13-450x450.jpg"
                                                                alt="product thumb">
                                                        </a>
                                                    </div>
                                                    <div class="thumb-menu-item slick-slide slick-current slick-active"
                                                        data-slick-index="0" aria-hidden="false" style="width: 120px;"
                                                        tabindex="0">
                                                        <a href="thumb1" data-toggle="tab" class="nav-link active"
                                                            tabindex="0">
                                                            <img src="./giao-dien/images/1-1-450x450.jpg"
                                                                alt="product thumb">
                                                        </a>
                                                    </div>
                                                    <div class="thumb-menu-item slick-slide slick-active"
                                                        data-slick-index="1" aria-hidden="false" style="width: 120px;"
                                                        tabindex="0">
                                                        <a href="thumb2" data-toggle="tab" class="nav-link"
                                                            tabindex="0">
                                                            <img src="./giao-dien/images/2-2-450x450.jpg"
                                                                alt="product thumb">
                                                        </a>
                                                    </div>
                                                    <div class="thumb-menu-item slick-slide slick-active"
                                                        data-slick-index="2" aria-hidden="false" style="width: 120px;"
                                                        tabindex="0">
                                                        <a href="thumb3" data-toggle="tab" class="nav-link"
                                                            tabindex="0">
                                                            <img src="./giao-dien/images/10-10-450x450.jpg"
                                                                alt="product thumb">
                                                        </a>
                                                    </div>
                                                    <div class="thumb-menu-item slick-slide slick-active"
                                                        data-slick-index="3" aria-hidden="false" style="width: 120px;"
                                                        tabindex="0">
                                                        <a href="thumb4" data-toggle="tab" class="nav-link"
                                                            tabindex="0">
                                                            <img src="./giao-dien/images/11-11-450x450.jpg"
                                                                alt="product thumb">
                                                        </a>
                                                    </div>
                                                    <div class="thumb-menu-item slick-slide" data-slick-index="4"
                                                        aria-hidden="true" style="width: 120px;" tabindex="-1">
                                                        <a href="thumb5" data-toggle="tab" class="nav-link"
                                                            tabindex="-1">
                                                            <img src="./giao-dien/images/12-12-450x450.jpg"
                                                                alt="product thumb">
                                                        </a>
                                                    </div>
                                                    <div class="thumb-menu-item slick-slide" data-slick-index="5"
                                                        aria-hidden="true" style="width: 120px;" tabindex="-1">
                                                        <a href="thumb6" data-toggle="tab" class="nav-link"
                                                            tabindex="-1">
                                                            <img src="./giao-dien/images/13-13-450x450.jpg"
                                                                alt="product thumb">
                                                        </a>
                                                    </div>
                                                    <div class="thumb-menu-item slick-slide slick-cloned"
                                                        data-slick-index="6" aria-hidden="true" style="width: 120px;"
                                                        tabindex="-1">
                                                        <a href="thumb1" data-toggle="tab" class="nav-link active"
                                                            tabindex="-1">
                                                            <img src="./giao-dien/images/1-1-450x450.jpg"
                                                                alt="product thumb">
                                                        </a>
                                                    </div>
                                                    <div class="thumb-menu-item slick-slide slick-cloned"
                                                        data-slick-index="7" aria-hidden="true" style="width: 120px;"
                                                        tabindex="-1">
                                                        <a href="thumb2" data-toggle="tab" class="nav-link"
                                                            tabindex="-1">
                                                            <img src="./giao-dien/images/2-2-450x450.jpg"
                                                                alt="product thumb">
                                                        </a>
                                                    </div>
                                                    <div class="thumb-menu-item slick-slide slick-cloned"
                                                        data-slick-index="8" aria-hidden="true" style="width: 120px;"
                                                        tabindex="-1">
                                                        <a href="thumb3" data-toggle="tab" class="nav-link"
                                                            tabindex="-1">
                                                            <img src="./giao-dien/images/10-10-450x450.jpg"
                                                                alt="product thumb">
                                                        </a>
                                                    </div>
                                                    <div class="thumb-menu-item slick-slide slick-cloned"
                                                        data-slick-index="9" aria-hidden="true" style="width: 120px;"
                                                        tabindex="-1">
                                                        <a href="thumb4" data-toggle="tab" class="nav-link"
                                                            tabindex="-1">
                                                            <img src="./giao-dien/images/11-11-450x450.jpg"
                                                                alt="product thumb">
                                                        </a>
                                                    </div>
                                                    <div class="thumb-menu-item slick-slide slick-cloned"
                                                        data-slick-index="10" aria-hidden="true" style="width: 120px;"
                                                        tabindex="-1">
                                                        <a href="thumb5" data-toggle="tab" class="nav-link"
                                                            tabindex="-1">
                                                            <img src="./giao-dien/images/12-12-450x450.jpg"
                                                                alt="product thumb">
                                                        </a>
                                                    </div>
                                                    <div class="thumb-menu-item slick-slide slick-cloned"
                                                        data-slick-index="11" aria-hidden="true" style="width: 120px;"
                                                        tabindex="-1">
                                                        <a href="thumb6" data-toggle="tab" class="nav-link"
                                                            tabindex="-1">
                                                            <img src="./giao-dien/images/13-13-450x450.jpg"
                                                                alt="product thumb">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>





                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6">
                                    <div class="modal-box product">
                                        <h3 class="product-title">Acer Aspire E 15</h3>
                                        <div class="ratings mb--20">
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <ul class="product-detail-list list-unstyled mb--20">
                                            <li>Brand: <a
                                                    href="https:/demo.hasthemes.com/mirora-preview/mirora/index.html">Apple</a>
                                            </li>
                                            <li>Product Code: Watches</li>
                                            <li>Reward Points: 600</li>
                                            <li>Availability: In Stock</li>
                                        </ul>
                                        <div class="product-price border-bottom pb--20 mb--20">
                                            <span class="regular-price">$100.50</span>
                                            <span class="sale-price">$98.98</span>
                                        </div>
                                        <div class="product-options mb--20">
                                            <h3>Available Options</h3>
                                            <div class="form-group">
                                                <label><sup>*</sup>Color Switch</label>
                                                <select>
                                                    <option> --- Please Select --- </option>
                                                    <option>Black</option>
                                                    <option>Blue</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="product-action-wrapper mb--20">
                                            <div class="product-action-top d-flex align-items-center mb--20">
                                                <div class="quantity">
                                                    <span>Qty: </span>
                                                    <input type="number" class="quantity-input" name="qty" id="qty"
                                                        value="1" min="1">
                                                    <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                </div>
                                                <button type="button" class="btn btn-medium btn-style-2 add-to-cart">
                                                    Add To Cart
                                                </button>
                                            </div>
                                            <div class="product-action-bottom">
                                                <a
                                                    href="https:/demo.hasthemes.com/mirora-preview/mirora/wishlist.html">+Add
                                                    to wishlist</a>
                                                <a href="https:/demo.hasthemes.com/mirora-preview/mirora/compare.html">+Add
                                                    to compare</a>
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

    </div>
    @include('font-end.layouts.script')
    @yield('js')
</body>

</html>