@extends('front.layout.master')

    @section('title','Blog')

    @section('body')

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Danh mục</span>
                        </div>
                        <ul>
                            <li><a href="#">Iphone</a></li>
                            <li><a href="#">Samsung</a></li>
                            <li><a href="#">Opple</a></li>
                            <li><a href="#">ViVo</a></li>
                            <li><a href="#">Realmy</a></li>
                            <li><a href="#">Nokia</a></li>
                            <li><a href="#">Masstel</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                
                                <input type="text" placeholder="Nhập sản phẩm....">
                                <button type="submit" class="site-btn"><i class="fa fa-search"></i> Tìm kiếm</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="front/img/banner_blog02.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2 style="color: rgb(226, 242, 7)">Tin tức</h2>
                        <div class="breadcrumb__option" style="color: black">
                            <a style="color: black" href="./">Trang chủ</a>
                            <span style="color: black"><b>Tin tức</b></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Tìm kiếm...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Thể loại</h4>
                            <ul>
                                <li><a href="#">TIN MỚI</a></li>
                                <li><a href="#">IPHONE</a></li>
                                <li><a href="#">SAMSUNG</a></li>
                                <li><a href="#">REALME</a></li>
                                <li><a href="#">OPPO</a></li>
                            </ul>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Tin tức gần đây</h4>
                            <div class="blog__sidebar__recent">
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="img/blog/sidebar/sr-1.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Điện thoại công nghệ mới<br />sản phẩm chất lượng</h6>
                                        <span>Aug 07, 2023</span>
                                    </div>
                                </a>
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="img/blog/sidebar/sr-2.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Iphone 15 sắp ra mắt<br /> với màu sắc mới</h6>
                                        <span>Aug 08, 2023</span>
                                    </div>
                                </a>
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="img/blog/sidebar/sr-3.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Samsung Galaxy S23 Ultra<br/>ưa chuộng với người dùng</h6>
                                        <span>Aug 09, 2023</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Tìm kiếm gần đây</h4>
                            <div class="blog__sidebar__item__tags">
                                <a href="#">Iphone 15 Promax</a>
                                <a href="#">SamSung Galaxy S23 Ultra</a>
                                <a href="#">Oppo</a>
                                <a href="#">SamSung S20</a>
                                <a href="#">Iphone 13</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="front/img/categories/Z_Flip5.jpg" alt="" width="400px" height="360px">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> Aug 10,2023</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">SAMSUNG</a></h5>
                                    <p>Ra mắt sản phẩm Z Flip5 tại Hàn Quốc</p>
                                    <a href="{{ route('blog-details') }}" class="blog__btn">Xem thêm <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="/front/img/categories/xiaomi.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> Aug 4,2023</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">REALME</a></h5>
                                    <p>Sự Kiện Ra Mắt Realme 11 Pro Series 5G Tại Dĩ An</p>
                                    <a href="#" class="blog__btn">XEM THÊM <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="/front/img/categories/iphone.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> Aug 10,2023</li>
                                        <li><i class="fa fa-comment-o"></i> 4</li>
                                    </ul>
                                    <h5><a href="#">IPHONE</a></h5>
                                    <p>Lộ diện hình ảnh mới nhất của Iphone 15 Concept</p><br>
                                    <a href="#" class="blog__btn">XEM THÊM <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="/front/img/categories/nokia.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> Aug 06,2023</li>
                                        <li><i class="fa fa-comment-o"></i> 9</li>
                                    </ul>
                                    <h5><a href="#">NOKIA</a></h5>
                                    <p>Trình làng Nokia 310 5G và Nokia C210, giá chỉ từ 2,6 triệu</p>
                                    <a href="#" class="blog__btn">XEM THÊM <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="product__pagination blog__pagination">
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
@endsection