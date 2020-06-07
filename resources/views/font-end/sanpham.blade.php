@extends('font-end.base')
@section('content')
<div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">Sản Phẩm</h1>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="{{asset('') . ''}}">Trang Chủ</a></li>
                            <li class="current"><a href="{{asset('') . 'giao-dien/sanpham'}}">Sản Phẩm</a></li>
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
                                
                                    <!-- Shop Toolbar Start -->
                                    <div class="shop-toolbar">
                                       
                                        <span class="product-pages">Hiển Thị Sản Phẩm</span>
                                      
                                        <div class="product-short">
                                            <label class="select-label">Lọc Theo:</label>
                                            <select class="short-select nice-select" style="display: none;">
                                                <option value="1">Mặc Định</option>
                                                <option value="2">Tên, A to Z</option>
                                                <option value="3">Tên, Z to A</option>
                                                <option value="4">Giá, Thấp đến Cao</option>
                                                <option value="5">Giá, Cao xuống Thấp</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Shop Toolbar End -->
                                </div>
                            </div>
                            
                            <!-- Main Shop wrapper Start -->
                            <div class="shop-product-wrap row no-gutters grid gridview-5">
                                @foreach($product as $showproduct)
                                <div class="col-xl-3 col-lg-4 col-md-6 col-12">


                                    <div class="mirora-product mb-md--10">
                                        <div class="product-img">
                                            <img src="{{asset('') .'giao-dien/images/product/'.$showproduct->images}}" alt="Product" class="primary-image">
                                            <img src="./giao-dien/images/1-1-450x450.jpg" alt="Product" class="secondary-image">
                                            <div class="product-img-overlay">
                                                <span class="product-label discount">
                                                    -7%
                                                </span>
                                                <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Xem Nhanh</a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <span>{{$showproduct->Trademark->name}}</span>
                                            <h4><a href="{{asset('') . 'giao-dien/ctsp/'.$showproduct->id}}">{{$showproduct->product_name}}</a></h4>
                                            <div class="product-price-wrapper">
                                                <span class="money">{{number_format($showproduct->price)}}. VNĐ</span>
                                                <span class="product-price-old">
                                                    <span class="money">{{number_format($showproduct->sale_price)}}. VNĐ</span>
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
                                            {{$showproduct->detail}}
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

                                  
                                </div>
                                @endforeach
                                
                            </div>

                            <!-- Main Shop wrapper End -->

                            <!-- Pagination Start -->
                            <div class="pagination-wrap mt--15 mt-md--10">
                                <p class="page-ammount">Show sản phẩm theo trang</p>
                                {{ $product->links() }}    
                            </div>
                            <!-- Pagination End -->
                        </div>
                        <div class="col-lg-3 order-lg-1">
                            <aside class="shop-sidebar">
                                <div class="search-filter">
                                    <div class="filter-layered">
                                        <h3 class="filter-heading">Lọc Sản Phẩm </h3>
                                       
                                    </div>
                                    <div class="filter-price">
                                        <h3 class="filter-heading">Giá</h3>
                                        <ul class="filter-list">
                                            <li>
                                                <div class="filter-input filter-radio">
                                                    <input type="radio" name="pricerange" id="pricerange-1" checked="">
                                                    <label for="pricerange-1">1.000.000 VNĐ - 2.000.000 VNĐ</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-input filter-radio">
                                                    <input type="radio" name="pricerange" id="pricerange-2">
                                                    <label for="pricerange-2">2.000.000 VNĐ - 3.000.000 VNĐ</label>
                                                </div>
                                            </li>
                                           
                                        </ul>
                                    </div>
                                    <div class="filter-categories">
                                        <h3 class="filter-heading">Danh Mục</h3>
                                        <ul class="filter-list">
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="category1" id="category1" >
                                                    <label for="category1">Category1</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="category2" id="category2">
                                                    <label for="category2">Category2</label>
                                                </div>
                                            </li>
                                           
                                        </ul>
                                    </div>
                                    <div class="filter-categories">
                                        <h3 class="filter-heading">Thương Hiệu</h3>
                                        <ul class="filter-list">
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="trademark1" id="trademark1" >
                                                    <label for="trademark1">Thương Hiệu 1</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="trademark2" id="trademark2">
                                                    <label for="trademark2">Thương Hiệu 2</label>
                                                </div>
                                            </li>
                                           
                                        </ul>
                                    </div>
                                    <div class="filter-color">
                                        <h3 class="filter-heading">Màu sắc</h3>
                                        <ul class="filter-list">
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="black" id="black">
                                                    <label for="black">Vàng (3)</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="blue" id="blue">
                                                    <label for="blue">Xanh (6)</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="brown" id="brown">
                                                    <label for="brown">Đen (7)</label>
                                                </div>
                                            </li>
                                           
                                        </ul>
                                    </div>
                                    <div class="filter-color">
                                        <h3 class="filter-heading">Xuất Sứ</h3>
                                        <ul class="filter-list">
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="ferragamo" id="ferragamo">
                                                    <label for="ferragamo">Pháp</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="hermes" id="hermes">
                                                    <label for="hermes">Nhật Bản</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="louis" id="louis">
                                                    <label for="louis">Thụy sĩ(11)</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="christian" id="christian">
                                                    <label for="christian">Anh (8)</label>
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