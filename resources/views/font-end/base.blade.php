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
    <style>
    a.active {
        color: #a8741a;
    }
    </style>
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


    </div>
    @include('font-end.layouts.script')
    @yield('js')
   <!-- Load Facebook SDK for JavaScript -->
 <div id="fb-root"></div>
    <script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml: true,
            version: 'v7.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat" attribution=setup_tool page_id="109368310789515"
        logged_in_greeting="Xin chào tôi có thể giúp gì cho bạn"
        logged_out_greeting="Xin chào tôi có thể giúp gì cho bạn">
    </div>
    
</body>

</html>