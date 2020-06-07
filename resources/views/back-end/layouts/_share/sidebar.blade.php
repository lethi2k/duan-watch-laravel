<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="quan-tri/admin/dist/img/AdminLTELogo.png" alt=" Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Thildph07746</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview ">
                    <a href="{{asset('') . 'admin/index'}}" class="nav-link ">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Trang Chủ
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-trademark"></i>
                        <p>
                            Thương Hiệu
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{asset('') . 'admin/trademark/index'}}" class="nav-link">
                                <i class="fa fa-list-alt nav-icon"></i>
                                <p>Danh sách thương hiệu</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{asset('') . 'admin/trademark/add'}}" class="nav-link">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Thêm thương hiệu</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-list-ol"></i>
                        <p>
                            Danh mục sản phẩm
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{asset('') . 'admin/category-product/index'}}" class="nav-link">
                                <i class="fa fa-list-alt nav-icon"></i>
                                <p>Danh sách danh mục</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{asset('') . 'admin/category-product/add'}}" class="nav-link">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Thêm danh mục</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{asset('') . 'admin/product/index'}}" class="nav-link">
                        <i class="nav-icon fa fa-truck"></i>
                        <p>
                            Sản phẩm
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{asset('') . 'admin/product/index'}}" class="nav-link">
                                <i class="fa fa-list-alt nav-icon"></i>
                                <p>Danh sách sản phẩm</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{asset('') . 'admin/product/add'}}" class="nav-link">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Thêm sản phẩm</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item has-treeview">
                    <a href="{{asset('') . 'admin/donhang/index'}}" class="nav-link">
                        <i class="nav-icon fa fa-file-powerpoint-o"></i>
                        <p>
                            Đơn Hàng
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{asset('') . 'admin/donhang/index'}}" class="nav-link">
                                <i class="fa fa-list-alt nav-icon"></i>
                                <p>Danh sách Đơn Hàng</p>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item has-treeview">
                    <a href="{{asset('') . 'admin/hoadon/index'}}" class="nav-link">
                        <i class="nav-icon fa  fa-list-alt"></i>
                        <p>
                            Hóa Đơn
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{asset('') . 'admin/donhang/index'}}" class="nav-link">
                                <i class="fa fa-list-alt nav-icon"></i>
                                <p>Danh sách Hóa Đơn</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{asset('') . 'admin/category-blog/index'}}" class="nav-link">
                        <i class="nav-icon fa fa-book"></i>
                        <p>
                            Danh mục bài viết
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{asset('') . 'admin/category-blog/index'}}" class="nav-link">
                                <i class="fa fa-list-alt nav-icon"></i>
                                <p>Danh sách danh mục</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{asset('') . 'admin/category-blog/add'}}" class="nav-link">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Thêm danh mục </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{asset('') . 'admin/blog/index'}}" class="nav-link">
                        <i class="nav-icon fa fa-copy"></i>
                        <p>
                            Bài viết
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{asset('') . 'admin/blog/index'}}" class="nav-link">
                                <i class="fa fa-list-alt nav-icon"></i>
                                <p>Danh sách bài viết</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{asset('') . 'admin/blog/add'}}" class="nav-link">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Thêm bài viết</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{asset('') . 'admin/slider/index'}}" class="nav-link">
                        <i class="nav-icon fa fa-image"></i>
                        <p>
                            Slider
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{asset('') . 'admin/slider/index'}}" class="nav-link">
                                <i class="fa fa-list-alt nav-icon"></i>
                                <p>Danh sách slider</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{asset('') . 'admin/slider/add'}}" class="nav-link">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Thêm sldier</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{asset('') . 'admin/advertisement/index'}}" class="nav-link">
                        <i class="nav-icon fa fa-plus-square"></i>
                        <p>
                            Quảng Cáo
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{asset('') . 'admin/advertisement/index'}}" class="nav-link">
                                <i class="fa fa-list-alt nav-icon"></i>
                                <p>Danh sách quảng cáo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{asset('') . 'admin/advertisement/add'}}" class="nav-link">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Thêm quảng cáo</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{asset('') . 'admin/comment/index'}}" class="nav-link">
                        <i class="nav-icon fa fa-comments"></i>
                        <p>
                            bình luận sản phẩm
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{asset('') . 'admin/comment/index'}}" class="nav-link">
                                <i class="fa fa-list-alt nav-icon"></i>
                                <p>Danh sách bình luận</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{asset('') . 'admin/commentbl/index'}}" class="nav-link">
                        <i class="nav-icon fa fa-comments"></i>
                        <p>
                            bình luận bài viết
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{asset('') . 'admin/commentbl/index'}}" class="nav-link">
                                <i class="fa fa-list-alt nav-icon"></i>
                                <p>Danh sách bình luận</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{asset('') . 'admin/member/index'}}" class="nav-link">
                        <i class="nav-icon fa fa-user"></i>
                        <p>
                            Thành viên
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{asset('') . 'admin/member/index'}}" class="nav-link">
                                <i class="fa fa-list-alt nav-icon"></i>
                                <p>Danh sách thành viên</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{asset('') . 'admin/member/add'}}" class="nav-link">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Thêm thành viên</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{asset('') . 'admin/company/index'}}" class="nav-link">
                        <i class="nav-icon fa fa-suitcase"></i>
                        <p>
                            Công ty
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{asset('') . 'admin/company/index'}}" class="nav-link">
                                <i class="fa fa-list-alt nav-icon"></i>
                                <p>Thông tin công ty</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{asset('') . 'admin/company/add'}}" class="nav-link">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Thêm công ty</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{asset('') . 'admin/phanhoi/index'}}" class="nav-link">
                        <i class="nav-icon fa fa-th"></i>
                        <p>
                            Ý Kiến Phản Hồi
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{asset('') . 'admin/phanhoi/index'}}" class="nav-link">
                                <i class="fa fa-list-alt nav-icon"></i>
                                <p>Danh sách ý kiến</p>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item has-treeview">
                    <a href="{{asset('')}}" class="nav-link">
                        <i class="nav-icon fa fa-sign-in"></i>
                        <p>
                            Về Giao Diện

                        </p>
                    </a>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>