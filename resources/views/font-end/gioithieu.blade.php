@extends('font-end.base')
@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Về Chúng Tôi</h1>
                <ul class="breadcrumb justify-content-center">
                    <li><a href="{{asset('') . ''}}">Trang Chủ</a></li>
                    <li class="current"><a href="{{asset('') . 'giao-dien/gt'}}">Về Chúng Tôi</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="main-content-wrapper">
    <div class="about-area bg--dark-3 mt--40 mt-sm--30 my--50">
        <div class="container-fluid p-0">
            <div class="row no-gutters align-items-center">
                <div class="col-xl-6">
                    <div class="img-box text-center">
                        <img src="./giao-dien/images/about-us-img1.jpg" alt="about">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-10 offset-1">
                            <div class="about-text text-center">
                                <h2 class="heading-secondary mb--40 mb-sm--30">
                                    Về Chúng Tôi
                                </h2>
                                <p class="mb--40 mb-sm--30">Theo cách nói chính thống nhất, Xwatch là một hệ thống phân
                                    phối đồng hồ chính hãng tại Việt Nam, chuyên phân phối các thương hiệu đồng hồ Thụy
                                    Sĩ, Nhật Bản, Hoa Kỳ như: Seiko, Citizen, Orient, Casio, OP (Olympianus, Olympia
                                    Star), Ogival, Elixa và Bulova. Ngoài ra, Xwatch còn có một thương hiệu cao cấp hơn
                                    là Xwatch Luxury - chuyên phân phối các thương hiệu đồng hồ Thụy Sĩ cao cấp như:
                                    Frederique Constant, Tissot, Emile Chouriet, Calvin Klein.

                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="skill-area bg--dark-3 my--50">
        <div class="container-fluid p-0">
            <div class="row no-gutters align-items-center">
                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-sm-9 offset-sm-2 col-10 offset-1">
                            <div class="skill-progress">
                                <h2 class="heading-secondary heading-secondary--2 mb--40">
                                    Đánh Giá Cửa Hàng Xwatch Về Chất Lượng Sản Phẩm
                                </h2>
                                Ngược dòng thời gian từ những ngày đầu thành lập, thời điểm Xwatch lần đầu chập chững
                                bước chân vào thị trường đồng hồ Việt Nam. Sau quá trình tìm hiểu và thực nghiệm thị
                                trường, chúng tôi nhận thấy một thực trạng đáng buồn: tại Việt Nam, đồng hồ fake (giả)
                                được bày bán công khai, tràn lan trên thị trường bất chấp pháp luật; các đơn vị buôn
                                đồng hồ giả sử dụng hàng trăm mánh khóe lừa đảo, trà trộn hàng giả vào hàng thật và bán
                                cho người tiêu dùng với giá cắt cổ.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="img-box text-center">
                        <img src="./giao-dien/images/about-us-img2.jpg" alt="about image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')

@endsection