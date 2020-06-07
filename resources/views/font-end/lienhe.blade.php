@extends('font-end.base')
@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Liên hệ chúng tôi</font>
                    </font>
                </h1>
                <ul class="breadcrumb justify-content-center">
                    <li><a href="{{asset('') . ''}}">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Trang Chủ</font>
                            </font>
                        </a></li>
                    <li class="current"><a href="{{asset('') . 'giao-dien/lienhe'}}">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Liên Hệ</font>
                            </font>
                        </a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="main-content-wrapper">
    <!-- Google Map Start -->
    <div class="container">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0981060516933!2d105.7666319153663!3d21.028760185998326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454ba97edf351%3A0xfdc0344804139ff0!2zODkgxJDGsOG7nW5nIEzDqiDEkOG7qWMgVGjhu40sIE3hu7kgxJDDrG5oLCBU4burIExpw6ptLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1590165629335!5m2!1svi!2s"
            width="100%" height="550" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe></div>
    <!-- Google Map End -->

    <!-- Contact Area Start -->
    <div class="contact-area ptb--80 ptb-md--60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="heading-secondary border-bottom mb--30">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">ĐỂ LẠI LỜI NHẮN VỚI CHÚNG TÔI</font>
                        </font>
                    </h2>
                    <form class="form form--contact" id="contact-form" action="giao-dien/lienhe" method="POST">
                        @csrf
                        <div class="form-row mb--20">
                            <div class="col-md-2 text-md-right">
                                <label for="contact_name">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Tên của bạn </font>
                                    </font><sup>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">*</font>
                                        </font>
                                    </sup>
                                </label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="contact_name" id="contact_name"
                                    class="form__input form__input--3">
                            </div>
                        </div>
                        <div class="form-row mb--20">
                            <div class="col-md-2 text-md-right">
                                <label for="contact_name">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Email của bạn </font>
                                    </font><sup>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">*</font>
                                        </font>
                                    </sup>
                                </label>
                            </div>
                            <div class="col-md-10">
                                <input type="email" name="contact_email" id="contact_email"
                                    class="form__input form__input--3">
                            </div>
                        </div>
                        <div class="form-row mb--20">
                            <div class="col-md-2 text-md-right">
                                <label for="contact_name">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Thắc mắc </font>
                                    </font><sup>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">*</font>
                                        </font>
                                    </sup>
                                </label>
                            </div>
                            <div class="col-md-10">
                                <textarea name="contact_message" id="contact_message"
                                    class="form__input form__input--3 form__input--textarea"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 text-right">
                                <button type="submit" class="form__submit">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Gửi Đi</font>
                                    </font>
                                </button>
                            </div>
                        </div>
                        <div class="form__output">
                            <br><br>
                            @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                {{$err}}<br>
                                @endforeach
                            </div>
                            @endif
                            @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Area End -->
</div>
@endsection
@section('js')

@endsection