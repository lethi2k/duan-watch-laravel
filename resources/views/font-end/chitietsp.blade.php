@extends('font-end.base')
@section('content')
<div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">Product Detalis</h1>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="shop.html">Shop</a></li>
                            <li class="current"><a href="product-details.html">Product Detalis Tab Style One</a></li>
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
                                            <a class="popup-btn" href="./giao-dien/images/3-900x900.jpg">
                                                <img src="./giao-dien/images/3-900x900.jpg" alt="product">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="product-large-two">
                                        <div class="product-details-img easyzoom">
                                            <a class="popup-btn" href="./giao-dien/images/4-900x900.jpg">
                                                <img src="./giao-dien/images/4-900x900.jpg" alt="product">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="product-large-three">
                                        <div class="product-details-img easyzoom">
                                            <a class="popup-btn" href="./giao-dien/images/5-900x900.jpg">
                                                <img src="./giao-dien/images/5-900x900.jpg" alt="product">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="product-large-four">
                                        <div class="product-details-img easyzoom">
                                            <a class="popup-btn" href="./giao-dien/images/6-900x900.jpg">
                                                <img src="./giao-dien/images/6-900x900.jpg" alt="product">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="product-large-five">
                                        <div class="product-details-img easyzoom">
                                            <a class="popup-btn" href="./giao-dien/images/10-900x900.jpg">
                                                <img src="./giao-dien/images/10-900x900.jpg" alt="product">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tab Content End -->
                                
                                <!-- Product Thumbnail Carousel Start -->
                                <div class="product-details-thumbnail">
                                    <div class="thumb-menu product-details-thumb-menu nav-vertical-center slick-initialized slick-slider" id="thumbmenu-horizontal"><i class="fa fa-angle-left slick-prev slick-btn slick-arrow" style=""></i>
                                        <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 2072px; transform: translate3d(-592px, 0px, 0px);"><div class="thumb-menu-item slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" style="width: 128px;" tabindex="-1">
                                            <a href="#product-large-two" data-toggle="tab" class="nav-link" tabindex="-1">
                                                <img src="./giao-dien/images/4-450x450.jpg" alt="product thumb">
                                            </a>
                                        </div><div class="thumb-menu-item slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" style="width: 128px;" tabindex="-1">
                                            <a href="#product-large-three" data-toggle="tab" class="nav-link" tabindex="-1">
                                                <img src="./giao-dien/images/5-450x450.jpg" alt="product thumb">
                                            </a>
                                        </div><div class="thumb-menu-item slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" style="width: 128px;" tabindex="-1">
                                            <a href="#product-large-four" data-toggle="tab" class="nav-link" tabindex="-1">
                                                <img src="./giao-dien/images/6-450x450.jpg" alt="product thumb">
                                            </a>
                                        </div><div class="thumb-menu-item slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 128px;" tabindex="-1">
                                            <a href="#product-large-five" data-toggle="tab" class="nav-link" tabindex="-1">
                                                <img src="./giao-dien/images/10-450x450.jpg" alt="product thumb">
                                            </a>
                                        </div><div class="thumb-menu-item slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 128px;" tabindex="0">
                                            <a href="#product-large-one" data-toggle="tab" class="nav-link active" tabindex="0">
                                                <img src="./giao-dien/images/3-450x450.jpg" alt="product thumb">
                                            </a>
                                        </div><div class="thumb-menu-item slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 128px;" tabindex="0">
                                            <a href="#product-large-two" data-toggle="tab" class="nav-link" tabindex="0">
                                                <img src="./giao-dien/images/4-450x450.jpg" alt="product thumb">
                                            </a>
                                        </div><div class="thumb-menu-item slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 128px;" tabindex="0">
                                            <a href="#product-large-three" data-toggle="tab" class="nav-link" tabindex="0">
                                                <img src="./giao-dien/images/5-450x450.jpg" alt="product thumb">
                                            </a>
                                        </div><div class="thumb-menu-item slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 128px;" tabindex="0">
                                            <a href="#product-large-four" data-toggle="tab" class="nav-link" tabindex="0">
                                                <img src="./giao-dien/images/6-450x450.jpg" alt="product thumb">
                                            </a>
                                        </div><div class="thumb-menu-item slick-slide" data-slick-index="4" aria-hidden="true" style="width: 128px;" tabindex="-1">
                                            <a href="#product-large-five" data-toggle="tab" class="nav-link" tabindex="-1">
                                                <img src="./giao-dien/images/10-450x450.jpg" alt="product thumb">
                                            </a>
                                        </div><div class="thumb-menu-item slick-slide slick-cloned" data-slick-index="5" aria-hidden="true" style="width: 128px;" tabindex="-1">
                                            <a href="#product-large-one" data-toggle="tab" class="nav-link active" tabindex="-1">
                                                <img src="./giao-dien/images/3-450x450.jpg" alt="product thumb">
                                            </a>
                                        </div><div class="thumb-menu-item slick-slide slick-cloned" data-slick-index="6" aria-hidden="true" style="width: 128px;" tabindex="-1">
                                            <a href="#product-large-two" data-toggle="tab" class="nav-link" tabindex="-1">
                                                <img src="./giao-dien/images/4-450x450.jpg" alt="product thumb">
                                            </a>
                                        </div><div class="thumb-menu-item slick-slide slick-cloned" data-slick-index="7" aria-hidden="true" style="width: 128px;" tabindex="-1">
                                            <a href="#product-large-three" data-toggle="tab" class="nav-link" tabindex="-1">
                                                <img src="./giao-dien/images/5-450x450.jpg" alt="product thumb">
                                            </a>
                                        </div><div class="thumb-menu-item slick-slide slick-cloned" data-slick-index="8" aria-hidden="true" style="width: 128px;" tabindex="-1">
                                            <a href="#product-large-four" data-toggle="tab" class="nav-link" tabindex="-1">
                                                <img src="./giao-dien/images/6-450x450.jpg" alt="product thumb">
                                            </a>
                                        </div><div class="thumb-menu-item slick-slide slick-cloned" data-slick-index="9" aria-hidden="true" style="width: 128px;" tabindex="-1">
                                            <a href="#product-large-five" data-toggle="tab" class="nav-link" tabindex="-1">
                                                <img src="./giao-dien/images/10-450x450.jpg" alt="product thumb">
                                            </a>
                                        </div></div></div>
                                        
                                        
                                        
                                        
                                    <i class="fa fa-angle-right slick-next slick-btn slick-arrow" style=""></i></div>
                                </div>
                                <!-- Product Thumbnail Carousel End -->
                            </div>
                            <div class="col-lg-6">
                                <!-- Single Product Content Start -->
                                <div class="product-details-content"> 
                                    <div class="product-details-top">
                                        <h2 class="product-details-name">Aliquam lobortis</h2>
                                        <div class="ratings-wrap">
                                            <div class="ratings">
                                                <i class="fa fa-star rated"></i>
                                                <i class="fa fa-star rated"></i>
                                                <i class="fa fa-star rated"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <span>
                                                <a class="review-btn" href="#singleProductTab">1 Reviews</a>
                                                <a class="review-btn" href="#singleProductTab">write a review</a>
                                            </span>
                                        </div>
                                        <ul class="product-details-list list-unstyled">
                                            <li>Brand: <a href="">Apple</a></li>
                                            <li>Product Code: Watches</li>
                                            <li>Reward Points: 600</li>
                                            <li>Availability: In Stock</li>
                                        </ul>
                                        <div class="product-details-price-wrapper">
                                            <span class="money">$550.00</span>
                                            <span class="product-price-old">
                                                <span class="money">$700.00</span>
                                            </span>
                                        </div>                                      
                                    </div>  

                                    <div class="product-details-bottom">

                                        <p class="product-details-availability"><i class="fa fa-check-circle"></i>200 In Stock</p> 
                                        <div class="product-details-action-wrapper mb--20">
                                            <div class="product-details-action-top d-flex align-items-center mb--20">
                                                <div class="quantity">
                                                    <span>Qty: </span>
                                                    <input type="number" class="quantity-input" name="qty" id="pro_qty" value="1" min="1">
                                                <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div><div class="inc qtybutton"><i class="fa fa-angle-up"></i></div></div>
                                                <button type="button" class="btn btn-medium btn-style-2 add-to-cart">
                                                    Add To Cart
                                                </button>
                                            </div>
                                            <div class="product-details-action-bottom">
                                                <a href="wishlist.html">+Add to wishlist</a>
                                                <a href="compare.html">+Add to compare</a>
                                            </div>
                                        </div>  
                                        <p class="product-details-tags">
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
                                        <a class="nav-link product-details-tab-link active" id="nav-desc-tab" data-toggle="tab" href="#nav-desc" role="tab" aria-controls="nav-desc" aria-selected="true">Description</a>
                                    </li>
                                    <li class="nav-item product-details-tab-item">
                                        <a class="nav-link product-details-tab-link" id="nav-details-tab" data-toggle="tab" href="#nav-details" role="tab" aria-controls="nav-details" aria-selected="true">Additional Information</a>
                                    </li>

                                    <li class="nav-item product-details-tab-item">
                                        <a class="nav-link product-details-tab-link" id="nav-review-tab" data-toggle="tab" href="#nav-review" role="tab" aria-controls="nav-review" aria-selected="true">review (2)</a>
                                    </li>
                                </ul>
                                <div class="product-details-tab-content tab-content">
                                    <div class="tab-pane fade show active" id="nav-desc" role="tabpanel" aria-labelledby="nav-desc-tab">
                                        <p class="product-details-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero.</p>
                                        <p class="product-details-description">
                                            Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi.
                                        </p>
                                    </div>
                                    <div class="tab-pane" role="tabpanel" id="nav-details" aria-labelledby="nav-details-tab">
                                        <div class="product-details-additional-info">
                                            <h3>Additional Information</h3>
                                            <div class="table-content table-responsive">
                                                <table class="shop_attributes">
                                                    <tbody><tr>
                                                        <th>Color: </th>
                                                        <td><p>Black, Blue, Gold</p></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Size: </th>
                                                        <td><p>XXL, XL, L, M</p></td>
                                                    </tr>
                                                </tbody></table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" role="tabpanel" id="nav-review" aria-labelledby="nav-review-tab">
                                        <div class="product-details-review-wrap">
                                            <h2 class="mb--20">2 REVIEWS FOR ALIQUAM LOBORTIS</h2>
                                            <div class="review mb--40">
                                                <div class="review__single">
                                                    <div class="review__meta">
                                                        <p class="review__author">HasTech</p>
                                                        <p class="review__date">October 12, 2014</p>
                                                    </div>
                                                    <div class="review__content">
                                                        <p class="review__text">
                                                            It’s both good and bad. If Nikon had achieved a high-quality wide lens camera with a 1 inch sensor, that would have been a very competitive product. So in that sense, it’s good for us. But actually, from the perspective of driving the 1 inch sensor market, we want to stimulate this market and that means multiple manufacturers.
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
                                                <div class="review__single">
                                                    <div class="review__meta">
                                                        <p class="review__author">HasTech</p>
                                                        <p class="review__date">October 12, 2014</p>
                                                    </div>
                                                    <div class="review__content">
                                                        <p class="review__text">
                                                            It’s both good and bad. If Nikon had achieved a high-quality wide lens camera with a 1 inch sensor, that would have been a very competitive product. So in that sense, it’s good for us. But actually, from the perspective of driving the 1 inch sensor market, we want to stimulate this market and that means multiple manufacturers.
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
                                            </div>
                                            <h2 class="mb--20">Add a Review</h2>
                                            <form class="form form--review">
                                                <div class="form__group clearfix mb--20">
                                                    <label class="form__label d-block">Your Ratings</label>
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
                                                    <label class="form__label d-block" for="review_name">Name <sup>*</sup></label>
                                                    <input id="review_name" name="review_name" class="form__input">
                                                </div>
                                                <div class="form__group clearfix mb--20">
                                                    <label class="form__label d-block" for="review_email">Email <sup>*</sup></label>
                                                    <input id="review_email" name="review_email" class="form__input">
                                                </div>
                                                <div class="form__group clearfix mb--20">
                                                    <label class="form__label d-block" for="review">Your Review <sup>*</sup></label>
                                                    <textarea id="review" name="review" class="form__input form__input--textarea"></textarea>
                                                    <div class="help-block">
                                                        <span>Note: </span>
                                                        HTML is not translated!
                                                    </div>
                                                </div>
                                                <div class="form__group text-right">
                                                    <button type="submit" class="btn btn-medium btn-style-1">Continue</button>
                                                </div>
                                            </form>
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
                                    <h2>Related Products</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="product-carousel nav-top js-product-carousel-2 slick-initialized slick-slider"><span class="slick-btn slick-prev slick-arrow" style=""><i class="fa fa-angle-left"></i></span>
                                <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 4560px; transform: translate3d(-1200px, 0px, 0px);"><div class="mirora-product slick-slide slick-cloned" data-slick-index="-5" aria-hidden="true" style="width: 232px;" tabindex="-1">
                                    <div class="product-img">
                                        <img src="./giao-dien/images/6-450x450.jpg" alt="Product" class="primary-image">
                                        <img src="./giao-dien/images/6-6-450x450.jpg" alt="Product" class="secondary-image">
                                        <div class="product-img-overlay">
                                            <span class="product-label discount">
                                                -7%
                                            </span>
                                            <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1" tabindex="-1">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <span>Cartier</span>
                                        <h4><a href="product-details.html" tabindex="-1">Acer Aspire E 15</a></h4>
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
                                            <a class="same-action" href="wishlist.html" title="wishlist" tabindex="-1">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist" tabindex="-1"><span>Add to cart</span></a>
                                            <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html" tabindex="-1">
                                                <i class="fa fa-sliders fa-rotate-90"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><div class="mirora-product slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" style="width: 232px;" tabindex="-1">
                                    <div class="product-img">
                                        <img src="./giao-dien/images/8-450x450.jpg" alt="Product" class="primary-image">
                                        <img src="./giao-dien/images/8-8-450x450.jpg" alt="Product" class="secondary-image">
                                        <div class="product-img-overlay">
                                            <span class="product-label discount">
                                                -7%
                                            </span>
                                            <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1" tabindex="-1">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <span>Cartier</span>
                                        <h4><a href="product-details.html" tabindex="-1">Acer Aspire E 15</a></h4>
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
                                            <a class="same-action" href="wishlist.html" title="wishlist" tabindex="-1">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist" tabindex="-1"><span>Add to cart</span></a>
                                            <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html" tabindex="-1">
                                                <i class="fa fa-sliders fa-rotate-90"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><div class="mirora-product slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" style="width: 232px;" tabindex="-1">
                                    <div class="product-img">
                                        <img src="./giao-dien/images/10-450x450.jpg" alt="Product" class="primary-image">
                                        <img src="./giao-dien/images/10-10-450x450.jpg" alt="Product" class="secondary-image">
                                        <div class="product-img-overlay">
                                            <span class="product-label discount">
                                                -7%
                                            </span>
                                            <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1" tabindex="-1">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <span>Cartier</span>
                                        <h4><a href="product-details.html" tabindex="-1">Acer Aspire E 15</a></h4>
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
                                            <a class="same-action" href="wishlist.html" title="wishlist" tabindex="-1">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist" tabindex="-1"><span>Add to cart</span></a>
                                            <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html" tabindex="-1">
                                                <i class="fa fa-sliders fa-rotate-90"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><div class="mirora-product slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" style="width: 232px;" tabindex="-1">
                                    <div class="product-img">
                                        <img src="./giao-dien/images/12-450x450.jpg" alt="Product" class="primary-image">
                                        <img src="./giao-dien/images/12-12-450x450.jpg" alt="Product" class="secondary-image">
                                        <div class="product-img-overlay">
                                            <span class="product-label discount">
                                                -7%
                                            </span>
                                            <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1" tabindex="-1">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <span>Cartier</span>
                                        <h4><a href="product-details.html" tabindex="-1">Acer Aspire E 15</a></h4>
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
                                            <a class="same-action" href="wishlist.html" title="wishlist" tabindex="-1">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist" tabindex="-1"><span>Add to cart</span></a>
                                            <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html" tabindex="-1">
                                                <i class="fa fa-sliders fa-rotate-90"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><div class="mirora-product slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 232px;" tabindex="-1">
                                    <div class="product-img">
                                        <img src="./giao-dien/images/14-450x450.jpg" alt="Product" class="primary-image">
                                        <img src="./giao-dien/images/14-14-450x450.jpg" alt="Product" class="secondary-image">
                                        <div class="product-img-overlay">
                                            <span class="product-label discount">
                                                -7%
                                            </span>
                                            <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1" tabindex="-1">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <span>Cartier</span>
                                        <h4><a href="product-details.html" tabindex="-1">Acer Aspire E 15</a></h4>
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
                                            <a class="same-action" href="wishlist.html" title="wishlist" tabindex="-1">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist" tabindex="-1"><span>Add to cart</span></a>
                                            <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html" tabindex="-1">
                                                <i class="fa fa-sliders fa-rotate-90"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><div class="mirora-product slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 232px;" tabindex="0">
                                    <div class="product-img">
                                        <img src="./giao-dien/images/2-450x450.jpg" alt="Product" class="primary-image">
                                        <img src="./giao-dien/images/2-2-450x450.jpg" alt="Product" class="secondary-image">
                                        <div class="product-img-overlay">
                                            <span class="product-label discount">
                                                -7%
                                            </span>
                                            <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1" tabindex="0">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <span>Cartier</span>
                                        <h4><a href="product-details.html" tabindex="0">Acer Aspire E 15</a></h4>
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
                                            <a class="same-action" href="wishlist.html" title="wishlist" tabindex="0">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist" tabindex="0"><span>Add to cart</span></a>
                                            <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html" tabindex="0">
                                                <i class="fa fa-sliders fa-rotate-90"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><div class="mirora-product slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 232px;" tabindex="0">
                                    <div class="product-img">
                                        <img src="./giao-dien/images/4-450x450.jpg" alt="Product" class="primary-image">
                                        <img src="./giao-dien/images/4-4-450x450.jpg" alt="Product" class="secondary-image">
                                        <div class="product-img-overlay">
                                            <span class="product-label discount">
                                                -7%
                                            </span>
                                            <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1" tabindex="0">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <span>Cartier</span>
                                        <h4><a href="product-details.html" tabindex="0">Acer Aspire E 15</a></h4>
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
                                            <a class="same-action" href="wishlist.html" title="wishlist" tabindex="0">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist" tabindex="0"><span>Add to cart</span></a>
                                            <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html" tabindex="0">
                                                <i class="fa fa-sliders fa-rotate-90"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><div class="mirora-product slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 232px;" tabindex="0">
                                    <div class="product-img">
                                        <img src="./giao-dien/images/6-450x450.jpg" alt="Product" class="primary-image">
                                        <img src="./giao-dien/images/6-6-450x450.jpg" alt="Product" class="secondary-image">
                                        <div class="product-img-overlay">
                                            <span class="product-label discount">
                                                -7%
                                            </span>
                                            <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1" tabindex="0">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <span>Cartier</span>
                                        <h4><a href="product-details.html" tabindex="0">Acer Aspire E 15</a></h4>
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
                                            <a class="same-action" href="wishlist.html" title="wishlist" tabindex="0">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist" tabindex="0"><span>Add to cart</span></a>
                                            <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html" tabindex="0">
                                                <i class="fa fa-sliders fa-rotate-90"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><div class="mirora-product slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 232px;" tabindex="0">
                                    <div class="product-img">
                                        <img src="./giao-dien/images/8-450x450.jpg" alt="Product" class="primary-image">
                                        <img src="./giao-dien/images/8-8-450x450.jpg" alt="Product" class="secondary-image">
                                        <div class="product-img-overlay">
                                            <span class="product-label discount">
                                                -7%
                                            </span>
                                            <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1" tabindex="0">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <span>Cartier</span>
                                        <h4><a href="product-details.html" tabindex="0">Acer Aspire E 15</a></h4>
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
                                            <a class="same-action" href="wishlist.html" title="wishlist" tabindex="0">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist" tabindex="0"><span>Add to cart</span></a>
                                            <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html" tabindex="0">
                                                <i class="fa fa-sliders fa-rotate-90"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><div class="mirora-product slick-slide slick-active" data-slick-index="4" aria-hidden="false" style="width: 232px;" tabindex="0">
                                    <div class="product-img">
                                        <img src="./giao-dien/images/10-450x450.jpg" alt="Product" class="primary-image">
                                        <img src="./giao-dien/images/10-10-450x450.jpg" alt="Product" class="secondary-image">
                                        <div class="product-img-overlay">
                                            <span class="product-label discount">
                                                -7%
                                            </span>
                                            <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1" tabindex="0">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <span>Cartier</span>
                                        <h4><a href="product-details.html" tabindex="0">Acer Aspire E 15</a></h4>
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
                                            <a class="same-action" href="wishlist.html" title="wishlist" tabindex="0">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist" tabindex="0"><span>Add to cart</span></a>
                                            <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html" tabindex="0">
                                                <i class="fa fa-sliders fa-rotate-90"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><div class="mirora-product slick-slide" data-slick-index="5" aria-hidden="true" style="width: 232px;" tabindex="-1">
                                    <div class="product-img">
                                        <img src="./giao-dien/images/12-450x450.jpg" alt="Product" class="primary-image">
                                        <img src="./giao-dien/images/12-12-450x450.jpg" alt="Product" class="secondary-image">
                                        <div class="product-img-overlay">
                                            <span class="product-label discount">
                                                -7%
                                            </span>
                                            <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1" tabindex="-1">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <span>Cartier</span>
                                        <h4><a href="product-details.html" tabindex="-1">Acer Aspire E 15</a></h4>
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
                                            <a class="same-action" href="wishlist.html" title="wishlist" tabindex="-1">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist" tabindex="-1"><span>Add to cart</span></a>
                                            <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html" tabindex="-1">
                                                <i class="fa fa-sliders fa-rotate-90"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><div class="mirora-product slick-slide" data-slick-index="6" aria-hidden="true" style="width: 232px;" tabindex="-1">
                                    <div class="product-img">
                                        <img src="./giao-dien/images/14-450x450.jpg" alt="Product" class="primary-image">
                                        <img src="./giao-dien/images/14-14-450x450.jpg" alt="Product" class="secondary-image">
                                        <div class="product-img-overlay">
                                            <span class="product-label discount">
                                                -7%
                                            </span>
                                            <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1" tabindex="-1">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <span>Cartier</span>
                                        <h4><a href="product-details.html" tabindex="-1">Acer Aspire E 15</a></h4>
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
                                            <a class="same-action" href="wishlist.html" title="wishlist" tabindex="-1">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist" tabindex="-1"><span>Add to cart</span></a>
                                            <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html" tabindex="-1">
                                                <i class="fa fa-sliders fa-rotate-90"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><div class="mirora-product slick-slide slick-cloned" data-slick-index="7" aria-hidden="true" style="width: 232px;" tabindex="-1">
                                    <div class="product-img">
                                        <img src="./giao-dien/images/2-450x450.jpg" alt="Product" class="primary-image">
                                        <img src="./giao-dien/images/2-2-450x450.jpg" alt="Product" class="secondary-image">
                                        <div class="product-img-overlay">
                                            <span class="product-label discount">
                                                -7%
                                            </span>
                                            <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1" tabindex="-1">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <span>Cartier</span>
                                        <h4><a href="product-details.html" tabindex="-1">Acer Aspire E 15</a></h4>
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
                                            <a class="same-action" href="wishlist.html" title="wishlist" tabindex="-1">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist" tabindex="-1"><span>Add to cart</span></a>
                                            <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html" tabindex="-1">
                                                <i class="fa fa-sliders fa-rotate-90"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><div class="mirora-product slick-slide slick-cloned" data-slick-index="8" aria-hidden="true" style="width: 232px;" tabindex="-1">
                                    <div class="product-img">
                                        <img src="./giao-dien/images/4-450x450.jpg" alt="Product" class="primary-image">
                                        <img src="./giao-dien/images/4-4-450x450.jpg" alt="Product" class="secondary-image">
                                        <div class="product-img-overlay">
                                            <span class="product-label discount">
                                                -7%
                                            </span>
                                            <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1" tabindex="-1">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <span>Cartier</span>
                                        <h4><a href="product-details.html" tabindex="-1">Acer Aspire E 15</a></h4>
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
                                            <a class="same-action" href="wishlist.html" title="wishlist" tabindex="-1">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist" tabindex="-1"><span>Add to cart</span></a>
                                            <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html" tabindex="-1">
                                                <i class="fa fa-sliders fa-rotate-90"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><div class="mirora-product slick-slide slick-cloned" data-slick-index="9" aria-hidden="true" style="width: 232px;" tabindex="-1">
                                    <div class="product-img">
                                        <img src="./giao-dien/images/6-450x450.jpg" alt="Product" class="primary-image">
                                        <img src="./giao-dien/images/6-6-450x450.jpg" alt="Product" class="secondary-image">
                                        <div class="product-img-overlay">
                                            <span class="product-label discount">
                                                -7%
                                            </span>
                                            <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1" tabindex="-1">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <span>Cartier</span>
                                        <h4><a href="product-details.html" tabindex="-1">Acer Aspire E 15</a></h4>
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
                                            <a class="same-action" href="wishlist.html" title="wishlist" tabindex="-1">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist" tabindex="-1"><span>Add to cart</span></a>
                                            <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html" tabindex="-1">
                                                <i class="fa fa-sliders fa-rotate-90"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><div class="mirora-product slick-slide slick-cloned" data-slick-index="10" aria-hidden="true" style="width: 232px;" tabindex="-1">
                                    <div class="product-img">
                                        <img src="./giao-dien/images/8-450x450.jpg" alt="Product" class="primary-image">
                                        <img src="./giao-dien/images/8-8-450x450.jpg" alt="Product" class="secondary-image">
                                        <div class="product-img-overlay">
                                            <span class="product-label discount">
                                                -7%
                                            </span>
                                            <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1" tabindex="-1">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <span>Cartier</span>
                                        <h4><a href="product-details.html" tabindex="-1">Acer Aspire E 15</a></h4>
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
                                            <a class="same-action" href="wishlist.html" title="wishlist" tabindex="-1">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist" tabindex="-1"><span>Add to cart</span></a>
                                            <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html" tabindex="-1">
                                                <i class="fa fa-sliders fa-rotate-90"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><div class="mirora-product slick-slide slick-cloned" data-slick-index="11" aria-hidden="true" style="width: 232px;" tabindex="-1">
                                    <div class="product-img">
                                        <img src="./giao-dien/images/10-450x450.jpg" alt="Product" class="primary-image">
                                        <img src="./giao-dien/images/10-10-450x450.jpg" alt="Product" class="secondary-image">
                                        <div class="product-img-overlay">
                                            <span class="product-label discount">
                                                -7%
                                            </span>
                                            <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1" tabindex="-1">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <span>Cartier</span>
                                        <h4><a href="product-details.html" tabindex="-1">Acer Aspire E 15</a></h4>
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
                                            <a class="same-action" href="wishlist.html" title="wishlist" tabindex="-1">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist" tabindex="-1"><span>Add to cart</span></a>
                                            <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html" tabindex="-1">
                                                <i class="fa fa-sliders fa-rotate-90"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><div class="mirora-product slick-slide slick-cloned" data-slick-index="12" aria-hidden="true" style="width: 232px;" tabindex="-1">
                                    <div class="product-img">
                                        <img src="./giao-dien/images/12-450x450.jpg" alt="Product" class="primary-image">
                                        <img src="./giao-dien/images/12-12-450x450.jpg" alt="Product" class="secondary-image">
                                        <div class="product-img-overlay">
                                            <span class="product-label discount">
                                                -7%
                                            </span>
                                            <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1" tabindex="-1">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <span>Cartier</span>
                                        <h4><a href="product-details.html" tabindex="-1">Acer Aspire E 15</a></h4>
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
                                            <a class="same-action" href="wishlist.html" title="wishlist" tabindex="-1">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist" tabindex="-1"><span>Add to cart</span></a>
                                            <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html" tabindex="-1">
                                                <i class="fa fa-sliders fa-rotate-90"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><div class="mirora-product slick-slide slick-cloned" data-slick-index="13" aria-hidden="true" style="width: 232px;" tabindex="-1">
                                    <div class="product-img">
                                        <img src="./giao-dien/images/14-450x450.jpg" alt="Product" class="primary-image">
                                        <img src="./giao-dien/images/14-14-450x450.jpg" alt="Product" class="secondary-image">
                                        <div class="product-img-overlay">
                                            <span class="product-label discount">
                                                -7%
                                            </span>
                                            <a data-toggle="modal" data-target="#productModal" class="btn btn-transparent btn-fullwidth btn-medium btn-style-1" tabindex="-1">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <span>Cartier</span>
                                        <h4><a href="product-details.html" tabindex="-1">Acer Aspire E 15</a></h4>
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
                                            <a class="same-action" href="wishlist.html" title="wishlist" tabindex="-1">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="add_cart cart-item action-cart" href="cart.html" title="wishlist" tabindex="-1"><span>Add to cart</span></a>
                                            <a class="same-action compare-mrg" data-toggle="modal" data-target="#productModal" href="compare.html" tabindex="-1">
                                                <i class="fa fa-sliders fa-rotate-90"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div></div></div>
                                <span class="slick-btn slick-next slick-arrow" style=""><i class="fa fa-angle-right"></i></span></div>
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