@extends('font-end.base')
@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Chi Tiết Tin</h1>
                <ul class="breadcrumb justify-content-center">
                    <li><a href="index.html">Trang Chủ</a></li>
                    <li class="current"><a href="{{asset('') . 'giao-dien/block'}}">Chi Tiết Tin</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="main-content-wrapper">
    <div class="single-post-area pt--40 pb--80 pt-md--30 pb-md--60">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-lg-2 order-1 mb-md--30">
                    <div class="single-post-wrapper">
                        <article class="post post-details mb--30">

                            <div class="post-info">
                                <h2 class="post-title"> {!! $blog->CateBlog->cate_name!!} </h2>
                                <header class="entry-header">
                                    <div class="entry-meta">
                                        <span class="post-author">
                                            <span class="post-by my-2">Đăng Bởi:</span>
                                            {!! $blog->user!!}
                                        </span>

                                        <!-- <span class="post-date">20-12-2020</span> -->
                                    </div>

                                </header>
                                <div class="post-content">
                                    <p> {!! $blog->content!!}</p>
                                </div>
                                <div class="footer-meta">
                                    <a class="comment-count" href="#">0 bình luận</a>

                                </div>
                                <div class="social__sharing mb--30">
                                    <h3>Chia Sẻ Qua</h3>
                                    <ul class="social social-round">
                                        <li class="social__item">
                                            <a href="facebook.com" class="social__link"><i
                                                    class="fa fa-facebook"></i></a>
                                        </li>
                                        <li class="social__item">
                                            <a href="twitter.com" class="social__link"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li class="social__item">
                                            <a href="pinterest.com" class="social__link"><i
                                                    class="fa fa-pinterest"></i></a>
                                        </li>
                                        <li class="social__item">
                                            <a href="google.plus.com" class="social__link"><i
                                                    class="fa fa-google-plus"></i></a>
                                        </li>
                                        <li class="social__item">
                                            <a href="linkedin.com" class="social__link"><i
                                                    class="fa fa-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                            <div class="related-posts-wrap">
                                <h3>Bài Viết Liên Quan</h3>
                                <div class="row">
                                    @foreach($queryData as $showbvlq)
                                    <div class="col-lg-4 mb-md--30">
                                        <div class="related-post">
                                            <a href="{{asset('') . 'giao-dien/block'}}" class="related-post__thumb">
                                                <img src="{{asset('') .'giao-dien/images/blog/'.$showbvlq->images}}"
                                                    alt="portfolio">
                                            </a>
                                            <h4><a href="">{!! $showbvlq->name_blog !!}</a></h4>
                                            <span>Đăng Bởi {!! $showbvlq->user !!}</span>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </article>
                        <div class="comment">
                            <div class="comment-respond">
                                <h3 class="comment-reply-title">Bình Luận</h3>
                                <ul class="comment-list">
                                    <li>
                                        @foreach($commentbl as $showcommentbl)

                                        <div class="single-comment">
                                            <div class="comment-avatar">
                                                <img src="{{asset('') .'giao-dien/images/user/'.$showcommentbl->User->logo}}" alt="comment">
                                            </div>
                                            <div class="comment-info">
                                                <div class="comment-meta">
                                                    <h5 class="comment-author"><a href="#">{!! $showcommentbl->User->username !!}</a></h5>
                                                    <!-- <span class="comment-date">{!! $showcommentbl->User->created_at !!}</span> -->
                                                    <a href="" class="reply">Xóa</a>
                                                </div>
                                                <div class="comment-content">
                                                    <p>{!! $showcommentbl->content !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </li>
                                </ul>
                                <form id="add-comment-form" action="{{ asset('') . 'giao-dien/save-add/'.$blog->id}}"
                                    class="form comment-form" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-row mb--20">
                                        <div class="col-12">
                                            <div class="form__group">
                                                <label class="form__label" for="comment">Nội Dung *</label>
                                                <textarea name="comment" id="comment"
                                                    class="form__input form__input--3 form__input--textarea"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-12">
                                            <button type="submit" id="submit" class="form__submit">Bình Luận</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 order-lg-1 order-2">
                    <aside class="blog-sidebar">
                        <!-- Search Widget Start -->
                        <div class="sidebar-widget search-widget">
                            <h3 class="widget-title">Tìm Kiếm</h3>
                            <div class="widget_conent">
                                <form action="#" class="searchform">
                                    <input type="text" class="searchform__input" name="search" id="blog_search"
                                        placeholder="Search...">
                                    <button class="searchform__submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- Search Widget End -->

                        <!-- Facebook Like Box Widget Start -->
                        <div class="sidebar-widget widget_fb_like_box">
                            <h3 class="widget-title">Facebook fanpage</h3>
                            <div class="fb-page">
                                <iframe
                                    src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FPlasst-109368310789515%2F&amp;tabs=timeline&amp;width=270&amp;height=200&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId=2156461077774666"
                                    width="270" height="200" style="border:none;overflow:hidden" scrolling="no"
                                    frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                            </div>
                        </div>
                        <!-- Facebook Like Box Widget End -->



                        <!-- Tags Widget Start -->
                        <div class="sidebar-widget tags-widget">
                            <h3 class="widget-title">Tags</h3>
                            <div class="widget_conent">
                                <div class="tagcloud">
                                    <a href="http://127.0.0.1:8000/giao-dien/block">Đồng Hồ</a>
                                    <a href="http://127.0.0.1:8000/giao-dien/block">Đồng Hồ Nam</a>
                                    <a href="http://127.0.0.1:8000/giao-dien/block">Đồng Hồ Cơ</a>
                                    <a href="http://127.0.0.1:8000/giao-dien/block">Đồng Hồ Thời Trang</a>
                                </div>
                            </div>
                        </div>
                        <!-- Tags Widget End -->
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')

@endsection