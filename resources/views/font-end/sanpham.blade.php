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


        <div class="row no-gutters">
    <div class="col-12">
        <div class="product-carousel nav-top js-product-carousel-2 slick-initialized slick-slider">
            <span class="slick-btn slick-prev slick-arrow" style=""><i class="fa fa-angle-left"></i></span>
            <div class="slick-list draggable">
                <div class="slick-track">
                <h2 class = "ml-4 mb-5">Thương Hiệu</h2>
                
                @foreach($trade_product as $show_trade_product)
                    <div class="product-carousel-group slick-slide slick-current slick-active" data-slick-index="0"
                        aria-hidden="false" style="width: 240px;" tabindex="0">
                        
                        <div class="mirora-product mx-5 mb-5" style="background-color: white; ">
                            <div class="product-img">
                                <img src="{{asset('') .$show_trade_product->logo}}" alt="Product"
                                    class="primary-image">
                                <img src="{{asset('') .$show_trade_product->logo}}" alt="Product" class="secondary-image">
                                <div class="product-img-overlay">
                                    
                                    <a href="giao-dien/sanpham/?thuonghieusp={{$show_trade_product->id}}"
                                        class="btn btn-transparent btn-fullwidth btn-medium btn-style-1"
                                        tabindex="0" style ="font-size: 10px;">Thương Hiệu</a>
                                </div>
                            </div>           
                        </div>
                    </div>
                    @endforeach
                </div>
                {{$trade_product->links()}}
            </div>

            <span class="slick-btn slick-next slick-arrow" style=""><i class="fa fa-angle-right"></i></span>
        </div>
    </div>
</div>





            <div class="row">
                <div class="col-lg-9 order-lg-2 mb-md--30">
                    <div class="row">
                        <div class="col-12">

                            <!-- Shop Toolbar Start -->
                            <div class="shop-toolbar">

                                <span class="product-pages">Hiển Thị Sản Phẩm</span>
                                
                                <form method ="get" id ="form_oder">
                                <div class="product-short" >
                                    <label class="select-label">Lọc Theo:</label>
                                    <select class="short-select nice-select orderby" style="display: block;" name = "order_by">
                                        <option {{Request::get('order_by') == "1" || !Request::get('order_by') ? "selected ='selected'" : ""}} value="1">Mặc Định</option>
                                        <option {{Request::get('order_by') == "2" ? "selected ='selected'" : ""}} value="2">Tên, A to Z</option>
                                        <option {{Request::get('order_by') == "3" ? "selected ='selected'" : ""}} value="3">Tên, Z to A</option>
                                        <option {{Request::get('order_by') == "4" ? "selected ='selected'" : ""}} value="4">Giá, Cao đến Thấp</option>
                                        <option {{Request::get('order_by') == "5" ? "selected ='selected'" : ""}} value="5">Giá, Thấp xuống Cao</option>
                                    </select>
                                </div>
                                </form>
                               
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
                                    <img src="{{asset('') .'giao-dien/images/product/'.$showproduct->images}}"
                                        alt="Product" class="primary-image">
                                    <img src="./giao-dien/images/1-1-450x450.jpg" alt="Product" class="secondary-image">
                                    <?php $sale = ceil((($showproduct->sale_price - $showproduct->price)/$showproduct->sale_price)*100) ?>
                                    <div class="product-img-overlay">
                                        <span class="product-label discount">
                                        {{round($sale,1)}}%
                                        </span>
                                        <a data-toggle="modal" data-target="#productModal"
                                            class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Xem
                                            Nhanh</a>
                                    </div>
                                </div>
                                <div class="product-content text-center">
                                    <span>{{$showproduct->Trademark->name}}</span>
                                    <h4><a
                                            href="{{asset('') . 'giao-dien/ctsp/'.$showproduct->id}}">{{$showproduct->product_name}}</a>
                                    </h4>
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
                                        {!!$showproduct->detail!!}
                                    </p>

                                    <div class="product-action">
                                        <a class="same-action" href="wishlist.html" title="wishlist">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                        <a class="add_cart cart-item action-cart"
                                            href="{{asset('') . 'giao-dien/addcart/' . $showproduct->id }}"
                                            title="wishlist"><span>Add to cart</span></a>
                                        <a class="same-action compare-mrg" data-toggle="modal"
                                            data-target="#productModal" href="compare.html">
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
                        {{$product->links()}}
                    </div>
                    <!-- Pagination End -->
                </div>
                <div class="col-lg-3 order-lg-1">
                    <aside class="shop-sidebar">
                        <div class="search-filter">
                            <div class="filter-layered">
                                <h3 class="filter-heading">Lọc Theo Giá Sản Phẩm </h3>

                            </div>
                            <div class="filter-price">
                                <h3 class="filter-heading">Giá</h3>
                                <ul class="filter-list">
                                <li>
                                        <a class = "{{Request::get('price') == 6 ? 'active' : ''}}" href="{{request()->fullUrlWithQuery(['price'=>6])}}">
                                        <div>
                                            <label for="pricerange-1">Dưới 1.000.000 VNĐ </label>
                                        </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class = "{{Request::get('price') == 1 ? 'active' : ''}}" href="{{request()->fullUrlWithQuery(['price'=>1])}}">
                                        <div>
                                            
                                            <label for="pricerange-1">1.000.000 VNĐ - 2.000.000 VNĐ</label>
                                        </div>
                                        </a>
                                    </li>
                                    <li>
                                    <a class = "{{Request::get('price') == 2 ? 'active' : ''}}" href="{{request()->fullUrlWithQuery(['price'=>2])}}">
                                        <div>
                                            
                                            <label for="pricerange-2">2.000.000 VNĐ - 3.000.000 VNĐ</label>
                                        </div>
                                    </a>
                                    </li>
                                    <li>
                                    <a class = "{{Request::get('price') == 3 ? 'active' : ''}}" href="{{request()->fullUrlWithQuery(['price'=>3])}}">
                                        <div>
                                            
                                            <label for="pricerange-3">3.000.000 VNĐ - 4.000.000 VNĐ</label>
                                        </div>
                                        </a>
                                    </li>

                                    <li>
                                    <a class = "{{Request::get('price') == 4 ? 'active' : ''}}" href="{{request()->fullUrlWithQuery(['price'=>4])}}">
                                        <div>
                                            
                                            <label for="pricerange-4">4.000.000 VNĐ - 5.000.000 VNĐ</label>
                                        </div>
                                    </a>
                                    </li>

                                    <li>
                                    <a class = "{{Request::get('price') == 5 ? 'active' : ''}}" href="{{request()->fullUrlWithQuery(['price'=>5])}}">
                                        <div>
                                            
                                            <label for="pricerange-4">Trên 5.000.000 VNĐ</label>
                                        </div>
                                    </a>
                                    </li>

                                </ul>
                            </div>
                            <!-- <div class="filter-categories">
                                <h3 class="filter-heading">Danh Mục</h3>
                                <ul class="filter-list">
                                    <?php $i = 1 ?>
                                    @foreach($category_product as $show_category_product)
                                    <li>
                                        <div class="filter-input filter-checkbox">
                                            <input type="checkbox" name="category{{$i}}" id="category {{$i}}">
                                            <label for="category{{$i}}">{{$show_category_product->name}}</label>
                                        </div>
                                    </li>
                                    <?php $i++ ?>
                                    @endforeach

                                </ul>
                            </div> -->
                            <!-- <div class="filter-categories">
                                <h3 class="filter-heading">Thương Hiệu</h3>
                                <ul class="filter-list">
                                    @foreach($trade_product as $show_trade_product)
                                    <li>
                                        <div class="filter-input filter-checkbox">
                                            <input type="checkbox" name="trademark1" id="trademark1">
                                            <label for="trademark1">{{$show_trade_product->name}}</label>
                                        </div>
                                    </li>
                                    @endforeach

                                </ul>
                            </div> -->

                            <!-- <div class="filter-color">
                                        <h3 class="filter-heading">Xuất Sứ</h3>
                                        <ul class="filter-list">
                                        @foreach($trade_product as $show_trade_product)
                                            <li>
                                                <div class="filter-input filter-checkbox">
                                                    <input type="checkbox" name="ferragamo" id="ferragamo">
                                                    <label for="ferragamo">{{$show_trade_product->country}}</label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div> -->
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
$(function(){
    $('.orderby').change(function(){
        $('#form_oder').submit();
    })
})
</script>
@endsection