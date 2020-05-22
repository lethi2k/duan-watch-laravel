@extends('font-end.base')
@section('content')
<div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">Shop</h1>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="index.html">Home</a></li>
                            <li class="current"><a href="shop.html">Shop</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-content-wrapper">
            <div class="shop-area pt--40 pb--80 pt-md--30 pb-md--60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 order-lg-2 mb-md--30">
                            <div class="row">
                                <div class="col-12">
                                    <!-- Refine Search Start -->
                                    <div class="refine-search mb--30">
                                       
                                        <ul class="cat-list">
                                            <li><a href="shop.html">Product Compare (3)</a></li>
                                        </ul>
                                    </div>
                                    <!-- Refine Search End -->

                                    <!-- Shop Toolbar Start -->
                                    <div class="shop-toolbar">
                                       
                                        <span class="product-pages">Showing 1 to 9 of 11 (2 Pages)</span>
                                        <div class="product-showing">
                                            <label class="select-label">Show:</label>
                                            <select class="short-select nice-select" style="display: none;">
                                                <option value="1">9</option>
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="1">5</option>
                                                <option value="1">9</option>
                                            </select>
                                        </div>
                                        <div class="product-short">
                                            <label class="select-label">Short By:</label>
                                            <select class="short-select nice-select" style="display: none;">
                                                <option value="1">Relevance</option>
                                                <option value="2">Name, A to Z</option>
                                                <option value="3">Name, Z to A</option>
                                                <option value="4">Price, low to high</option>
                                                <option value="5">Price, high to low</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Shop Toolbar End -->
                                </div>
                            </div>
                            
                            <!-- Main Shop wrapper Start -->
                            <div class="shop-product-wrap row no-gutters grid gridview-5">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                    <div class="mirora-product mb-md--10">
                                        <div class="product-img">
                                            <img src="./giao-dien/images/1-450x450.jpg" alt="Product" class="primary-image">
                                            <img src="./giao-dien/images/1-1-450x450.jpg" alt="Product" class="secondary-image">
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -7%
                                                </span>
                                                <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <span>Cartier</span>
                                            <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                            <div class="product-price-wrapper">
                                                <span class="money">$550.00</span>
                                                <span class="product-price-old">
                                                    <span class="money">$700.00</span>
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
                                              It is a long established fact that a reader will be distracted by the readable content...
                                            </p>
                                            <div class="product-action">
                                                <a class="same-action" href="wishlist.html" title="wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                                <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mirora-product-list">
                                        <div class="product-img">
                                            <img src="./giao-dien/images/1-450x450.jpg" alt="Product" class="primary-image">
                                            <img src="./giao-dien/images/1-1-450x450.jpg" alt="Product" class="secondary-image">
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -7%
                                                </span>
                                                <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <span>Cartier</span>
                                            <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                            <div class="product-rating">
                                                <span>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                            <p class="product-desc">
                                              It is a long established fact that a reader will be distracted by the readable content...
                                            </p>
                                            <div class="product-price-wrapper">
                                                <span class="money">$550.00</span>
                                                <span class="product-price-old">
                                                    <span class="money">$700.00</span>
                                                </span>
                                            </div>
                                            <div class="product-action">
                                                <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                                <a class="same-action" href="wishlist.html" title="wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                    <div class="mirora-product mb-md--10">
                                        <div class="product-img">
                                            <img src="./giao-dien/images/2-450x450.jpg" alt="Product" class="primary-image">
                                            <img src="./giao-dien/images/2-2-450x450.jpg" alt="Product" class="secondary-image">
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -7%
                                                </span>
                                                <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <span>Cartier</span>
                                            <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                            <div class="product-price-wrapper">
                                                <span class="money">$550.00</span>
                                                <span class="product-price-old">
                                                    <span class="money">$700.00</span>
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
                                              It is a long established fact that a reader will be distracted by the readable content...
                                            </p>
                                            <div class="product-action">
                                                <a class="same-action" href="wishlist.html" title="wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                                <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mirora-product-list">
                                        <div class="product-img">
                                            <img src="./giao-dien/images/2-450x450.jpg" alt="Product" class="primary-image">
                                            <img src="./giao-dien/images/2-2-450x450.jpg" alt="Product" class="secondary-image">
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -7%
                                                </span>
                                                <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <span>Cartier</span>
                                            <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                            <div class="product-rating">
                                                <span>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                            <p class="product-desc">
                                              It is a long established fact that a reader will be distracted by the readable content...
                                            </p>
                                            <div class="product-price-wrapper">
                                                <span class="money">$550.00</span>
                                                <span class="product-price-old">
                                                    <span class="money">$700.00</span>
                                                </span>
                                            </div>
                                            <div class="product-action">
                                                <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                                <a class="same-action" href="wishlist.html" title="wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                    <div class="mirora-product mb-md--10">
                                        <div class="product-img">
                                            <img src="./giao-dien/images/3-450x450.jpg" alt="Product" class="primary-image">
                                            <img src="./giao-dien/images/3-3-450x450.jpg" alt="Product" class="secondary-image">
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -7%
                                                </span>
                                                <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <span>Cartier</span>
                                            <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                            <div class="product-price-wrapper">
                                                <span class="money">$550.00</span>
                                                <span class="product-price-old">
                                                    <span class="money">$700.00</span>
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
                                              It is a long established fact that a reader will be distracted by the readable content...
                                            </p>
                                            <div class="product-action">
                                                <a class="same-action" href="wishlist.html" title="wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                                <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mirora-product-list">
                                        <div class="product-img">
                                            <img src="./giao-dien/images/3-450x450.jpg" alt="Product" class="primary-image">
                                            <img src="./giao-dien/images/3-3-450x450.jpg" alt="Product" class="secondary-image">
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -7%
                                                </span>
                                                <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <span>Cartier</span>
                                            <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                            <div class="product-rating">
                                                <span>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                            <p class="product-desc">
                                              It is a long established fact that a reader will be distracted by the readable content...
                                            </p>
                                            <div class="product-price-wrapper">
                                                <span class="money">$550.00</span>
                                                <span class="product-price-old">
                                                    <span class="money">$700.00</span>
                                                </span>
                                            </div>
                                            <div class="product-action">
                                                <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                                <a class="same-action" href="wishlist.html" title="wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                    <div class="mirora-product mb-md--10">
                                        <div class="product-img">
                                            <img src="./giao-dien/images/4-450x450.jpg" alt="Product" class="primary-image">
                                            <img src="./giao-dien/images/4-4-450x450.jpg" alt="Product" class="secondary-image">
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -7%
                                                </span>
                                                <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <span>Cartier</span>
                                            <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                            <div class="product-price-wrapper">
                                                <span class="money">$550.00</span>
                                                <span class="product-price-old">
                                                    <span class="money">$700.00</span>
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
                                              It is a long established fact that a reader will be distracted by the readable content...
                                            </p>
                                            <div class="product-action">
                                                <a class="same-action" href="wishlist.html" title="wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                                <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mirora-product-list">
                                        <div class="product-img">
                                            <img src="./giao-dien/images/4-450x450.jpg" alt="Product" class="primary-image">
                                            <img src="./giao-dien/images/4-4-450x450.jpg" alt="Product" class="secondary-image">
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -7%
                                                </span>
                                                <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <span>Cartier</span>
                                            <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                            <div class="product-rating">
                                                <span>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                            <p class="product-desc">
                                              It is a long established fact that a reader will be distracted by the readable content...
                                            </p>
                                            <div class="product-price-wrapper">
                                                <span class="money">$550.00</span>
                                                <span class="product-price-old">
                                                    <span class="money">$700.00</span>
                                                </span>
                                            </div>
                                            <div class="product-action">
                                                <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                                <a class="same-action" href="wishlist.html" title="wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                    <div class="mirora-product mb-md--10">
                                        <div class="product-img">
                                            <img src="./giao-dien/images/5-450x450.jpg" alt="Product" class="primary-image">
                                            <img src="./giao-dien/images/5-5-450x450.jpg" alt="Product" class="secondary-image">
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -7%
                                                </span>
                                                <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <span>Cartier</span>
                                            <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                            <div class="product-price-wrapper">
                                                <span class="money">$550.00</span>
                                                <span class="product-price-old">
                                                    <span class="money">$700.00</span>
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
                                              It is a long established fact that a reader will be distracted by the readable content...
                                            </p>
                                            <div class="product-action">
                                                <a class="same-action" href="wishlist.html" title="wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                                <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mirora-product-list">
                                        <div class="product-img">
                                            <img src="./giao-dien/images/5-450x450.jpg" alt="Product" class="primary-image">
                                            <img src="./giao-dien/images/5-5-450x450.jpg" alt="Product" class="secondary-image">
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -7%
                                                </span>
                                                <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <span>Cartier</span>
                                            <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                            <div class="product-rating">
                                                <span>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                            <p class="product-desc">
                                              It is a long established fact that a reader will be distracted by the readable content...
                                            </p>
                                            <div class="product-price-wrapper">
                                                <span class="money">$550.00</span>
                                                <span class="product-price-old">
                                                    <span class="money">$700.00</span>
                                                </span>
                                            </div>
                                            <div class="product-action">
                                                <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                                <a class="same-action" href="wishlist.html" title="wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                    <div class="mirora-product mb-md--10">
                                        <div class="product-img">
                                            <img src="./giao-dien/images/6-450x450.jpg" alt="Product" class="primary-image">
                                            <img src="./giao-dien/images/6-6-450x450.jpg" alt="Product" class="secondary-image">
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -7%
                                                </span>
                                                <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <span>Cartier</span>
                                            <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                            <div class="product-price-wrapper">
                                                <span class="money">$550.00</span>
                                                <span class="product-price-old">
                                                    <span class="money">$700.00</span>
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
                                              It is a long established fact that a reader will be distracted by the readable content...
                                            </p>
                                            <div class="product-action">
                                                <a class="same-action" href="wishlist.html" title="wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                                <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mirora-product-list">
                                        <div class="product-img">
                                            <img src="./giao-dien/images/6-450x450.jpg" alt="Product" class="primary-image">
                                            <img src="./giao-dien/images/6-6-450x450.jpg" alt="Product" class="secondary-image">
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -7%
                                                </span>
                                                <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <span>Cartier</span>
                                            <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                            <div class="product-rating">
                                                <span>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                            <p class="product-desc">
                                              It is a long established fact that a reader will be distracted by the readable content...
                                            </p>
                                            <div class="product-price-wrapper">
                                                <span class="money">$550.00</span>
                                                <span class="product-price-old">
                                                    <span class="money">$700.00</span>
                                                </span>
                                            </div>
                                            <div class="product-action">
                                                <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                                <a class="same-action" href="wishlist.html" title="wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                    <div class="mirora-product mb-md--10">
                                        <div class="product-img">
                                            <img src="./giao-dien/images/7-450x450.jpg" alt="Product" class="primary-image">
                                            <img src="./giao-dien/images/7-7-450x450.jpg" alt="Product" class="secondary-image">
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -7%
                                                </span>
                                                <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <span>Cartier</span>
                                            <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                            <div class="product-price-wrapper">
                                                <span class="money">$550.00</span>
                                                <span class="product-price-old">
                                                    <span class="money">$700.00</span>
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
                                              It is a long established fact that a reader will be distracted by the readable content...
                                            </p>
                                            <div class="product-action">
                                                <a class="same-action" href="wishlist.html" title="wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                                <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mirora-product-list">
                                        <div class="product-img">
                                            <img src="./giao-dien/images/7-450x450.jpg" alt="Product" class="primary-image">
                                            <img src="./giao-dien/images/7-7-450x450.jpg" alt="Product" class="secondary-image">
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -7%
                                                </span>
                                                <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <span>Cartier</span>
                                            <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                            <div class="product-rating">
                                                <span>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                            <p class="product-desc">
                                              It is a long established fact that a reader will be distracted by the readable content...
                                            </p>
                                            <div class="product-price-wrapper">
                                                <span class="money">$550.00</span>
                                                <span class="product-price-old">
                                                    <span class="money">$700.00</span>
                                                </span>
                                            </div>
                                            <div class="product-action">
                                                <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                                <a class="same-action" href="wishlist.html" title="wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                    <div class="mirora-product mb-md--10">
                                        <div class="product-img">
                                            <img src="./giao-dien/images/8-450x450.jpg" alt="Product" class="primary-image">
                                            <img src="./giao-dien/images/8-8-450x450.jpg" alt="Product" class="secondary-image">
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -7%
                                                </span>
                                                <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <span>Cartier</span>
                                            <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                            <div class="product-price-wrapper">
                                                <span class="money">$550.00</span>
                                                <span class="product-price-old">
                                                    <span class="money">$700.00</span>
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
                                              It is a long established fact that a reader will be distracted by the readable content...
                                            </p>
                                            <div class="product-action">
                                                <a class="same-action" href="wishlist.html" title="wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                                <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mirora-product-list">
                                        <div class="product-img">
                                            <img src="./giao-dien/images/8-450x450.jpg" alt="Product" class="primary-image">
                                            <img src="./giao-dien/images/8-8-450x450.jpg" alt="Product" class="secondary-image">
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -7%
                                                </span>
                                                <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <span>Cartier</span>
                                            <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                            <div class="product-rating">
                                                <span>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                            <p class="product-desc">
                                              It is a long established fact that a reader will be distracted by the readable content...
                                            </p>
                                            <div class="product-price-wrapper">
                                                <span class="money">$550.00</span>
                                                <span class="product-price-old">
                                                    <span class="money">$700.00</span>
                                                </span>
                                            </div>
                                            <div class="product-action">
                                                <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                                <a class="same-action" href="wishlist.html" title="wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                    <div class="mirora-product mb-md--10">
                                        <div class="product-img">
                                            <img src="./giao-dien/images/9-450x450.jpg" alt="Product" class="primary-image">
                                            <img src="./giao-dien/images/9-9-450x450.jpg" alt="Product" class="secondary-image">
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -7%
                                                </span>
                                                <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <span>Cartier</span>
                                            <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                            <div class="product-price-wrapper">
                                                <span class="money">$550.00</span>
                                                <span class="product-price-old">
                                                    <span class="money">$700.00</span>
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
                                              It is a long established fact that a reader will be distracted by the readable content...
                                            </p>
                                            <div class="product-action">
                                                <a class="same-action" href="wishlist.html" title="wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                                <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mirora-product-list">
                                        <div class="product-img">
                                            <img src="./giao-dien/images/9-450x450.jpg" alt="Product" class="primary-image">
                                            <img src="./giao-dien/images/9-9-450x450.jpg" alt="Product" class="secondary-image">
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -7%
                                                </span>
                                                <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <span>Cartier</span>
                                            <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                            <div class="product-rating">
                                                <span>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                            <p class="product-desc">
                                              It is a long established fact that a reader will be distracted by the readable content...
                                            </p>
                                            <div class="product-price-wrapper">
                                                <span class="money">$550.00</span>
                                                <span class="product-price-old">
                                                    <span class="money">$700.00</span>
                                                </span>
                                            </div>
                                            <div class="product-action">
                                                <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                                <a class="same-action" href="wishlist.html" title="wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                    <div class="mirora-product mb-md--10">
                                        <div class="product-img">
                                            <img src="./giao-dien/images/5-450x450.jpg" alt="Product" class="primary-image">
                                            <img src="./giao-dien/images/5-5-450x450.jpg" alt="Product" class="secondary-image">
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -7%
                                                </span>
                                                <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <span>Cartier</span>
                                            <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                            <div class="product-price-wrapper">
                                                <span class="money">$550.00</span>
                                                <span class="product-price-old">
                                                    <span class="money">$700.00</span>
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
                                              It is a long established fact that a reader will be distracted by the readable content...
                                            </p>
                                            <div class="product-action">
                                                <a class="same-action" href="wishlist.html" title="wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                                <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mirora-product-list">
                                        <div class="product-img">
                                            <img src="./giao-dien/images/5-450x450.jpg" alt="Product" class="primary-image">
                                            <img src="./giao-dien/images/5-5-450x450.jpg" alt="Product" class="secondary-image">
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -7%
                                                </span>
                                                <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <span>Cartier</span>
                                            <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                            <div class="product-rating">
                                                <span>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                            <p class="product-desc">
                                              It is a long established fact that a reader will be distracted by the readable content...
                                            </p>
                                            <div class="product-price-wrapper">
                                                <span class="money">$550.00</span>
                                                <span class="product-price-old">
                                                    <span class="money">$700.00</span>
                                                </span>
                                            </div>
                                            <div class="product-action">
                                                <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                                <a class="same-action" href="wishlist.html" title="wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                    <div class="mirora-product mb-md--10">
                                        <div class="product-img">
                                            <img src="./giao-dien/images/5-450x450.jpg" alt="Product" class="primary-image">
                                            <img src="./giao-dien/images/5-5-450x450.jpg" alt="Product" class="secondary-image">
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -7%
                                                </span>
                                                <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <span>Cartier</span>
                                            <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                            <div class="product-price-wrapper">
                                                <span class="money">$550.00</span>
                                                <span class="product-price-old">
                                                    <span class="money">$700.00</span>
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
                                              It is a long established fact that a reader will be distracted by the readable content...
                                            </p>
                                            <div class="product-action">
                                                <a class="same-action" href="wishlist.html" title="wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                                <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mirora-product-list">
                                        <div class="product-img">
                                            <img src="./giao-dien/images/5-450x450.jpg" alt="Product" class="primary-image">
                                            <img src="./giao-dien/images/5-5-450x450.jpg" alt="Product" class="secondary-image">
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -7%
                                                </span>
                                                <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <span>Cartier</span>
                                            <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                            <div class="product-rating">
                                                <span>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                            <p class="product-desc">
                                              It is a long established fact that a reader will be distracted by the readable content...
                                            </p>
                                            <div class="product-price-wrapper">
                                                <span class="money">$550.00</span>
                                                <span class="product-price-old">
                                                    <span class="money">$700.00</span>
                                                </span>
                                            </div>
                                            <div class="product-action">
                                                <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                                <a class="same-action" href="wishlist.html" title="wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                    <div class="mirora-product mb-md--10">
                                        <div class="product-img">
                                            <img src="./giao-dien/images/5-450x450.jpg" alt="Product" class="primary-image">
                                            <img src="./giao-dien/images/5-5-450x450.jpg" alt="Product" class="secondary-image">
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -7%
                                                </span>
                                                <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <span>Cartier</span>
                                            <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                            <div class="product-price-wrapper">
                                                <span class="money">$550.00</span>
                                                <span class="product-price-old">
                                                    <span class="money">$700.00</span>
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
                                              It is a long established fact that a reader will be distracted by the readable content...
                                            </p>
                                            <div class="product-action">
                                                <a class="same-action" href="wishlist.html" title="wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                                <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mirora-product-list">
                                        <div class="product-img">
                                            <img src="./giao-dien/images/5-450x450.jpg" alt="Product" class="primary-image">
                                            <img src="./giao-dien/images/5-5-450x450.jpg" alt="Product" class="secondary-image">
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -7%
                                                </span>
                                                <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <span>Cartier</span>
                                            <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                            <div class="product-rating">
                                                <span>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                            <p class="product-desc">
                                              It is a long established fact that a reader will be distracted by the readable content...
                                            </p>
                                            <div class="product-price-wrapper">
                                                <span class="money">$550.00</span>
                                                <span class="product-price-old">
                                                    <span class="money">$700.00</span>
                                                </span>
                                            </div>
                                            <div class="product-action">
                                                <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                                <a class="same-action" href="wishlist.html" title="wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                    <div class="mirora-product mb-md--10">
                                        <div class="product-img">
                                            <img src="./giao-dien/images/5-450x450.jpg" alt="Product" class="primary-image">
                                            <img src="./giao-dien/images/5-5-450x450.jpg" alt="Product" class="secondary-image">
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -7%
                                                </span>
                                                <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <span>Cartier</span>
                                            <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                            <div class="product-price-wrapper">
                                                <span class="money">$550.00</span>
                                                <span class="product-price-old">
                                                    <span class="money">$700.00</span>
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
                                              It is a long established fact that a reader will be distracted by the readable content...
                                            </p>
                                            <div class="product-action">
                                                <a class="same-action" href="wishlist.html" title="wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                                <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mirora-product-list">
                                        <div class="product-img">
                                            <img src="./giao-dien/images/5-450x450.jpg" alt="Product" class="primary-image">
                                            <img src="./giao-dien/images/5-5-450x450.jpg" alt="Product" class="secondary-image">
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -7%
                                                </span>
                                                <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <span>Cartier</span>
                                            <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                            <div class="product-rating">
                                                <span>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                            <p class="product-desc">
                                              It is a long established fact that a reader will be distracted by the readable content...
                                            </p>
                                            <div class="product-price-wrapper">
                                                <span class="money">$550.00</span>
                                                <span class="product-price-old">
                                                    <span class="money">$700.00</span>
                                                </span>
                                            </div>
                                            <div class="product-action">
                                                <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                                <a class="same-action" href="wishlist.html" title="wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                    <div class="mirora-product mb-md--10">
                                        <div class="product-img">
                                            <img src="./giao-dien/images/5-450x450.jpg" alt="Product" class="primary-image">
                                            <img src="./giao-dien/images/5-5-450x450.jpg" alt="Product" class="secondary-image">
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -7%
                                                </span>
                                                <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <span>Cartier</span>
                                            <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                            <div class="product-price-wrapper">
                                                <span class="money">$550.00</span>
                                                <span class="product-price-old">
                                                    <span class="money">$700.00</span>
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
                                              It is a long established fact that a reader will be distracted by the readable content...
                                            </p>
                                            <div class="product-action">
                                                <a class="same-action" href="wishlist.html" title="wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                                <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mirora-product-list">
                                        <div class="product-img">
                                            <img src="./giao-dien/images/5-450x450.jpg" alt="Product" class="primary-image">
                                            <img src="./giao-dien/images/5-5-450x450.jpg" alt="Product" class="secondary-image">
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -7%
                                                </span>
                                                <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <span>Cartier</span>
                                            <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                            <div class="product-rating">
                                                <span>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                            <p class="product-desc">
                                              It is a long established fact that a reader will be distracted by the readable content...
                                            </p>
                                            <div class="product-price-wrapper">
                                                <span class="money">$550.00</span>
                                                <span class="product-price-old">
                                                    <span class="money">$700.00</span>
                                                </span>
                                            </div>
                                            <div class="product-action">
                                                <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                                <a class="same-action" href="wishlist.html" title="wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                    <div class="mirora-product mb-md--10">
                                        <div class="product-img">
                                            <img src="./giao-dien/images/5-450x450.jpg" alt="Product" class="primary-image">
                                            <img src="./giao-dien/images/5-5-450x450.jpg" alt="Product" class="secondary-image">
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -7%
                                                </span>
                                                <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <span>Cartier</span>
                                            <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                            <div class="product-price-wrapper">
                                                <span class="money">$550.00</span>
                                                <span class="product-price-old">
                                                    <span class="money">$700.00</span>
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
                                              It is a long established fact that a reader will be distracted by the readable content...
                                            </p>
                                            <div class="product-action">
                                                <a class="same-action" href="wishlist.html" title="wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                                <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mirora-product-list">
                                        <div class="product-img">
                                            <img src="./giao-dien/images/5-450x450.jpg" alt="Product" class="primary-image">
                                            <img src="./giao-dien/images/5-5-450x450.jpg" alt="Product" class="secondary-image">
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -7%
                                                </span>
                                                <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <span>Cartier</span>
                                            <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                            <div class="product-rating">
                                                <span>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                            <p class="product-desc">
                                              It is a long established fact that a reader will be distracted by the readable content...
                                            </p>
                                            <div class="product-price-wrapper">
                                                <span class="money">$550.00</span>
                                                <span class="product-price-old">
                                                    <span class="money">$700.00</span>
                                                </span>
                                            </div>
                                            <div class="product-action">
                                                <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                                <a class="same-action" href="wishlist.html" title="wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                    <div class="mirora-product mb-md--10">
                                        <div class="product-img">
                                            <img src="./giao-dien/images/5-450x450.jpg" alt="Product" class="primary-image">
                                            <img src="./giao-dien/images/5-5-450x450.jpg" alt="Product" class="secondary-image">
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -7%
                                                </span>
                                                <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <span>Cartier</span>
                                            <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                            <div class="product-price-wrapper">
                                                <span class="money">$550.00</span>
                                                <span class="product-price-old">
                                                    <span class="money">$700.00</span>
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
                                              It is a long established fact that a reader will be distracted by the readable content...
                                            </p>
                                            <div class="product-action">
                                                <a class="same-action" href="wishlist.html" title="wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                                <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mirora-product-list">
                                        <div class="product-img">
                                            <img src="./giao-dien/images/5-450x450.jpg" alt="Product" class="primary-image">
                                            <img src="./giao-dien/images/5-5-450x450.jpg" alt="Product" class="secondary-image">
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -7%
                                                </span>
                                                <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <span>Cartier</span>
                                            <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                            <div class="product-rating">
                                                <span>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                            <p class="product-desc">
                                              It is a long established fact that a reader will be distracted by the readable content...
                                            </p>
                                            <div class="product-price-wrapper">
                                                <span class="money">$550.00</span>
                                                <span class="product-price-old">
                                                    <span class="money">$700.00</span>
                                                </span>
                                            </div>
                                            <div class="product-action">
                                                <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                                <a class="same-action" href="wishlist.html" title="wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                    <div class="mirora-product mb-md--10">
                                        <div class="product-img">
                                            <img src="./giao-dien/images/5-450x450.jpg" alt="Product" class="primary-image">
                                            <img src="./giao-dien/images/5-5-450x450.jpg" alt="Product" class="secondary-image">
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -7%
                                                </span>
                                                <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <span>Cartier</span>
                                            <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                            <div class="product-price-wrapper">
                                                <span class="money">$550.00</span>
                                                <span class="product-price-old">
                                                    <span class="money">$700.00</span>
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
                                              It is a long established fact that a reader will be distracted by the readable content...
                                            </p>
                                            <div class="product-action">
                                                <a class="same-action" href="wishlist.html" title="wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                                <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mirora-product-list">
                                        <div class="product-img">
                                            <img src="./giao-dien/images/5-450x450.jpg" alt="Product" class="primary-image">
                                            <img src="./giao-dien/images/5-5-450x450.jpg" alt="Product" class="secondary-image">
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -7%
                                                </span>
                                                <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <span>Cartier</span>
                                            <h4><a href="product-details.html">Acer Aspire E 15</a></h4>
                                            <div class="product-rating">
                                                <span>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star theme-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                            <p class="product-desc">
                                              It is a long established fact that a reader will be distracted by the readable content...
                                            </p>
                                            <div class="product-price-wrapper">
                                                <span class="money">$550.00</span>
                                                <span class="product-price-old">
                                                    <span class="money">$700.00</span>
                                                </span>
                                            </div>
                                            <div class="product-action">
                                                <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist"><span>Add to cart</span></a>
                                                <a class="same-action" href="wishlist.html" title="wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html">
                                                    <i class="fa fa-sliders fa-rotate-90"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Main Shop wrapper End -->

                            <!-- Pagination Start -->
                            <div class="pagination-wrap mt--15 mt-md--10">
                                <p class="page-ammount">Showing 1 to 9 of 15 (2 Pages)</p>
                                <ul class="pagination">
                                    <li><a href="" class="first">|&lt;</a></li>
                                    <li><a href="" class="prev">&lt;</a></li>
                                    <li><a href="" class="current">1</a></li>
                                    <li><a href="">2</a></li>
                                    <li><a href="" class="next">&gt;</a></li>
                                    <li><a href="" class="next">&gt;|</a></li>
                                </ul>
                            </div>
                            <!-- Pagination End -->
                        </div>
                        <div class="col-lg-3 order-lg-1">
                            <aside class="shop-sidebar">
                                <div class="search-filter">
                                    <div class="filter-layered">
                                        <h3 class="filter-heading">Layered Navigation</h3>
                                       
                                    </div>
                                    <div class="filter-price">
                                        <h3 class="filter-heading">Price</h3>
                                        <ul class="filter-list">
                                            <li>
                                                <div class="filter-input filter-radio">
                                                    <input type="radio" name="pricerange" id="pricerange-1" checked="">
                                                    <label for="pricerange-1">$55 - $100 (3)</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-input filter-radio">
                                                    <input type="radio" name="pricerange" id="pricerange-2">
                                                    <label for="pricerange-2">$55 - $200 (2)</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-input filter-radio">
                                                    <input type="radio" name="pricerange" id="pricerange-3">
                                                    <label for="pricerange-3">$300 - $500 (6)</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-input filter-radio">
                                                    <input type="radio" name="pricerange" id="pricerange-4">
                                                    <label for="pricerange-4">$700 - $1000 (2)</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="filter-categories">
                                        <h3 class="filter-heading">Categories</h3>
                                        <ul class="filter-list">
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="category1" id="category1" checked="">
                                                    <label for="category1">Category1</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="category2" id="category2">
                                                    <label for="category2">Category2</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="category3" id="category3">
                                                    <label for="category3">Category3</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="category4" id="category4">
                                                    <label for="category4">Category4</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="category5" id="category5">
                                                    <label for="category5">Category5</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="filter-color">
                                        <h3 class="filter-heading">Color</h3>
                                        <ul class="filter-list">
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="black" id="black">
                                                    <label for="black">black (3)</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="blue" id="blue">
                                                    <label for="blue">blue (6)</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="brown" id="brown">
                                                    <label for="brown">brown (7)</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="white" id="white">
                                                    <label for="white">white (4)</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="red" id="red">
                                                    <label for="red">red (1)</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="filter-color">
                                        <h3 class="filter-heading">Manufacturer</h3>
                                        <ul class="filter-list">
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="ferragamo" id="ferragamo">
                                                    <label for="ferragamo">ferragamo (11)</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="hermes" id="hermes">
                                                    <label for="hermes">hermes (9)</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="louis" id="louis">
                                                    <label for="louis">louis vuitton (11)</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="christian" id="christian">
                                                    <label for="christian">Christian Dior (8)</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="banner-static">
                                    <a href="#">
                                        <img src="./giao-dien/images/img-sidebar.jpg" alt="Banner">
                                    </a>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
@section('js')

@endsection