@extends('back-end.layouts.admin')
@section('content')
<div class="card card-success" style="min-height:700px">
    <div class="card-header">
        <h3 class="card-title">Trang Chủ - Được thực hiện bởi Lê Đình Thi</h3>
    </div>
    <div class="col-md-12 my-5">
        <!-- Widget: user widget style 1 -->
        <div class="card card-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header text-white"
                style="background: url('quan-tri/admin/dist/img/slider1.jpg') center center;">
                <h3 class="widget-user-username text-right">Đồng Hồ Nam</h3>
                <h5 class="widget-user-desc text-right">Web Designer</h5>
            </div>
            <div class="widget-user-image">
                <img class="img-circle" src="quan-tri/admin/dist/img/user2-160x160.jpg" alt="User Avatar">
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-sm-4 border-right">
                        <div class="description-block">
                            <h5 class="description-header">{{$count_comment}}</h5>
                            <span class="description-text">comment</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 border-right">
                        <div class="description-block">
                            <h5 class="description-header">Lê Đình Thi</h5>
                            <span class="description-text">Nhà Sáng Lập</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4">
                        <div class="description-block">
                            <h5 class="description-header">{{$count_product}}</h5>
                            <span class="description-text">PRODUCTS</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </div>
        <!-- /.widget-user -->
    </div>

    <div class="card bg-gradient-success mb-5">
        <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

            <h3 class="card-title">
                <i class="far fa-calendar-alt"></i>
                Calendar
            </h3>
            <!-- tools card -->
            <div class="card-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                        <i class="fas fa-bars"></i></button>
                    <div class="dropdown-menu float-right" role="menu">
                        <a href="#" class="dropdown-item">Add new event</a>
                        <a href="#" class="dropdown-item">Clear events</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                </div>
                <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <!-- /. tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body pt-0">
            <!--The calendar -->
            <div id="calendar" style="width: 100%">
                <div class="bootstrap-datetimepicker-widget usetwentyfour">
                    <ul class="list-unstyled">
                        <li class="show">
                            <div class="datepicker">
                                <div class="datepicker-days" style="">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th class="prev" data-action="previous"><span class="fa fa-chevron-left"
                                                        title="Previous Month"></span></th>
                                                <th class="picker-switch" data-action="pickerSwitch" colspan="5"
                                                    title="Select Month">March 2020</th>
                                                <th class="next" data-action="next"><span class="fa fa-chevron-right"
                                                        title="Next Month"></span></th>
                                            </tr>
                                            <tr>
                                                <th class="dow">Su</th>
                                                <th class="dow">Mo</th>
                                                <th class="dow">Tu</th>
                                                <th class="dow">We</th>
                                                <th class="dow">Th</th>
                                                <th class="dow">Fr</th>
                                                <th class="dow">Sa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td data-action="selectDay" data-day="03/01/2020" class="day weekend">1
                                                </td>
                                                <td data-action="selectDay" data-day="03/02/2020" class="day">2</td>
                                                <td data-action="selectDay" data-day="03/03/2020" class="day">3</td>
                                                <td data-action="selectDay" data-day="03/04/2020" class="day">4</td>
                                                <td data-action="selectDay" data-day="03/05/2020" class="day">5</td>
                                                <td data-action="selectDay" data-day="03/06/2020" class="day">6</td>
                                                <td data-action="selectDay" data-day="03/07/2020" class="day weekend">7
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-action="selectDay" data-day="03/08/2020" class="day weekend">8
                                                </td>
                                                <td data-action="selectDay" data-day="03/09/2020" class="day">9</td>
                                                <td data-action="selectDay" data-day="03/10/2020" class="day">10</td>
                                                <td data-action="selectDay" data-day="03/11/2020" class="day">11</td>
                                                <td data-action="selectDay" data-day="03/12/2020" class="day">12</td>
                                                <td data-action="selectDay" data-day="03/13/2020" class="day">13</td>
                                                <td data-action="selectDay" data-day="03/14/2020" class="day weekend">14
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-action="selectDay" data-day="03/15/2020" class="day weekend">15
                                                </td>
                                                <td data-action="selectDay" data-day="03/16/2020" class="day">16</td>
                                                <td data-action="selectDay" data-day="03/17/2020" class="day">17</td>
                                                <td data-action="selectDay" data-day="03/18/2020" class="day">18</td>
                                                <td data-action="selectDay" data-day="03/19/2020" class="day">19</td>
                                                <td data-action="selectDay" data-day="03/20/2020" class="day">20</td>
                                                <td data-action="selectDay" data-day="03/21/2020" class="day weekend">21
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-action="selectDay" data-day="03/22/2020" class="day weekend">22
                                                </td>
                                                <td data-action="selectDay" data-day="03/23/2020" class="day">23</td>
                                                <td data-action="selectDay" data-day="03/24/2020" class="day">24</td>
                                                <td data-action="selectDay" data-day="03/25/2020" class="day">25</td>
                                                <td data-action="selectDay" data-day="03/26/2020" class="day">26</td>
                                                <td data-action="selectDay" data-day="03/27/2020"
                                                    class="day active today">27</td>
                                                <td data-action="selectDay" data-day="03/28/2020" class="day weekend">28
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-action="selectDay" data-day="03/29/2020" class="day weekend">29
                                                </td>
                                                <td data-action="selectDay" data-day="03/30/2020" class="day">30</td>
                                                <td data-action="selectDay" data-day="03/31/2020" class="day">31</td>
                                                <td data-action="selectDay" data-day="04/01/2020" class="day new">1</td>
                                                <td data-action="selectDay" data-day="04/02/2020" class="day new">2</td>
                                                <td data-action="selectDay" data-day="04/03/2020" class="day new">3</td>
                                                <td data-action="selectDay" data-day="04/04/2020"
                                                    class="day new weekend">4</td>
                                            </tr>
                                            <tr>
                                                <td data-action="selectDay" data-day="04/05/2020"
                                                    class="day new weekend">5</td>
                                                <td data-action="selectDay" data-day="04/06/2020" class="day new">6</td>
                                                <td data-action="selectDay" data-day="04/07/2020" class="day new">7</td>
                                                <td data-action="selectDay" data-day="04/08/2020" class="day new">8</td>
                                                <td data-action="selectDay" data-day="04/09/2020" class="day new">9</td>
                                                <td data-action="selectDay" data-day="04/10/2020" class="day new">10
                                                </td>
                                                <td data-action="selectDay" data-day="04/11/2020"
                                                    class="day new weekend">11</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="datepicker-months" style="display: none;">
                                    <table class="table-condensed">
                                        <thead>
                                            <tr>
                                                <th class="prev" data-action="previous"><span class="fa fa-chevron-left"
                                                        title="Previous Year"></span></th>
                                                <th class="picker-switch" data-action="pickerSwitch" colspan="5"
                                                    title="Select Year">2020</th>
                                                <th class="next" data-action="next"><span class="fa fa-chevron-right"
                                                        title="Next Year"></span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td colspan="7"><span data-action="selectMonth"
                                                        class="month">Jan</span><span data-action="selectMonth"
                                                        class="month">Feb</span><span data-action="selectMonth"
                                                        class="month active">Mar</span><span data-action="selectMonth"
                                                        class="month">Apr</span><span data-action="selectMonth"
                                                        class="month">May</span><span data-action="selectMonth"
                                                        class="month">Jun</span><span data-action="selectMonth"
                                                        class="month">Jul</span><span data-action="selectMonth"
                                                        class="month">Aug</span><span data-action="selectMonth"
                                                        class="month">Sep</span><span data-action="selectMonth"
                                                        class="month">Oct</span><span data-action="selectMonth"
                                                        class="month">Nov</span><span data-action="selectMonth"
                                                        class="month">Dec</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="datepicker-years" style="display: none;">
                                    <table class="table-condensed">
                                        <thead>
                                            <tr>
                                                <th class="prev" data-action="previous"><span class="fa fa-chevron-left"
                                                        title="Previous Decade"></span></th>
                                                <th class="picker-switch" data-action="pickerSwitch" colspan="5"
                                                    title="Select Decade">2020-2029</th>
                                                <th class="next" data-action="next"><span class="fa fa-chevron-right"
                                                        title="Next Decade"></span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td colspan="7"><span data-action="selectYear"
                                                        class="year old">2019</span><span data-action="selectYear"
                                                        class="year active">2020</span><span data-action="selectYear"
                                                        class="year">2021</span><span data-action="selectYear"
                                                        class="year">2022</span><span data-action="selectYear"
                                                        class="year">2023</span><span data-action="selectYear"
                                                        class="year">2024</span><span data-action="selectYear"
                                                        class="year">2025</span><span data-action="selectYear"
                                                        class="year">2026</span><span data-action="selectYear"
                                                        class="year">2027</span><span data-action="selectYear"
                                                        class="year">2028</span><span data-action="selectYear"
                                                        class="year">2029</span><span data-action="selectYear"
                                                        class="year old">2030</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="datepicker-decades" style="display: none;">
                                    <table class="table-condensed">
                                        <thead>
                                            <tr>
                                                <th class="prev" data-action="previous"><span class="fa fa-chevron-left"
                                                        title="Previous Century"></span></th>
                                                <th class="picker-switch" data-action="pickerSwitch" colspan="5">
                                                    2000-2090</th>
                                                <th class="next" data-action="next"><span class="fa fa-chevron-right"
                                                        title="Next Century"></span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td colspan="7"><span data-action="selectDecade" class="decade old"
                                                        data-selection="2006">1990</span><span
                                                        data-action="selectDecade" class="decade"
                                                        data-selection="2006">2000</span><span
                                                        data-action="selectDecade" class="decade active"
                                                        data-selection="2016">2010</span><span
                                                        data-action="selectDecade" class="decade"
                                                        data-selection="2026">2020</span><span
                                                        data-action="selectDecade" class="decade"
                                                        data-selection="2036">2030</span><span
                                                        data-action="selectDecade" class="decade"
                                                        data-selection="2046">2040</span><span
                                                        data-action="selectDecade" class="decade"
                                                        data-selection="2056">2050</span><span
                                                        data-action="selectDecade" class="decade"
                                                        data-selection="2066">2060</span><span
                                                        data-action="selectDecade" class="decade"
                                                        data-selection="2076">2070</span><span
                                                        data-action="selectDecade" class="decade"
                                                        data-selection="2086">2080</span><span
                                                        data-action="selectDecade" class="decade"
                                                        data-selection="2096">2090</span><span
                                                        data-action="selectDecade" class="decade old"
                                                        data-selection="2106">2100</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                        <li class="picker-switch accordion-toggle"></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>

    <div class="row ">
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fa fa-comments"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Bình Luận</span>
                    <span class="info-box-number">{{$count_comment}}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Quảng Cáo</span>
                    <span class="info-box-number">{{$count_trade}}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Danh Mục Bài viết</span>
                    <span class="info-box-number">{{$count_cate_blog}}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-danger"><i class="fa fa-list-ol"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Danh mục sản phẩm</span>
                    <span class="info-box-number">{{$count_cate}}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <div class="row py-5">
        <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{$count_product}}</h3>

                    <p>Sản Phẩm</p>
                </div>
                <div class="icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <a href="admin/product/index" class="small-box-footer">
                    Xem thêm <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{$count_blog}}<sup style="font-size: 20px"></sup></h3>

                    <p>Bài Viết</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="admin/blog/index" class="small-box-footer">
                    Xem thêm <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{$count_user}}</h3>

                    <p>Thành Viên</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-plus"></i>
                </div>
                <a href="admin/member/index" class="small-box-footer">
                    Xem thêm <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{$count_bill}}</h3>

                    <p>Đơn hàng</p>
                </div>
                <div class="icon">
                    <i class="fas fa-chart-pie"></i>
                </div>
                <a href="admin/donhang/index" class="small-box-footer">
                    Xem thêm <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
    </div>
</div>
@endsection