@extends('font-end.base')
@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Bài Viết</h1>
                <ul class="breadcrumb justify-content-center">
                    <li><a href="index.html">Trang Chủ</a></li>
                    <li class="current"><a href="blog.html">Danh Mục Bài Viết</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="main-content-wrapper">
    <div class="blog-area pt--40 pb--80 pt-md--30 pb-md--60">
        <div class="container">
            <div class="row">

                <div class="col-12 pb--50">
                    <div class="section-title mb--15">
                        <h2 class="color--white">Danh Mục Bài Viết</h2>
                    </div>
                </div>

              
                <div class="col-lg-9 order-lg-2 order-1 mb-md--30">
                    <div class="row">
                        @foreach($blog as $showblog)

                        

                        <div class="col-lg-6 mb--30">
                            <article class="post sticky single-post format-image">
                                <div class="post-media">
                                    <div class="image">
                                        <a href="{{asset('') . 'giao-dien/ctbl/'.$showblog->id}}">
                                            <img src="{{asset('') .'giao-dien/images/blog/'.$showblog->images}}"
                                                alt="blog">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-info">
                                    <header class="entry-header">
                                        <div class="entry-meta">
                                            <span class="post-author">
                                                <span class="post-by">Post By:</span>
                                                {!! $showblog->User->username!!}
                                            </span>


                                        </div>
                                        <h2 class="post-title"><a
                                                href="{{asset('') . 'giao-dien/ctbl/'.$showblog->id}}">{{ $showblog->name_blog}}</a>
                                        </h2>
                                    </header>
                                    <div class="post-content">
                                        <p> {!! $showblog->meta !!}</p>
                                    </div>
                                    <a href="{{asset('') . 'giao-dien/ctbl/'.$showblog->id}}"
                                        class="btn btn-read-more btn-style-2">Chi Tiết</a>
                                </div>
                            </article>
                        </div>
                        @endforeach

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="pagination-wrap">
                                <p class="page-ammount">Show sản phẩm theo trang</p>
                                <ul class="pagination">
                                    {{$blog->links()}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
@section('js')

@endsection