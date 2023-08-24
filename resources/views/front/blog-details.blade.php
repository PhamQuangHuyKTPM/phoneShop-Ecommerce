@extends('front.layout.master')

    @section('title','Chi tiết bài viết')

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

    <!-- Blog Details Hero Begin -->
    <section class="blog-details-hero set-bg" data-setbg="front/img/blog/details/banner.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog__details__hero__text">
                        <h2>Ra mắt sản phẩm Z Flip5 tại Hàn Quốc</h2>
                        <ul>
                            <li>BlackTeam</li>
                            <li>August 10, 2023</li>
                            <li>5 Bình luận</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                @include("front.layout.SideBar_Blog")
                <div class="col-lg-8 col-md-7 order-md-1 order-1">
                    <div class="blog__details__text">
                        <img src="front/img/blog/details/Flip_5_01.jpg" alt="">
                        <p style="font-family: Arial, Helvetica, sans-serif">Theo đó, sự kiện Galaxy Unpacked thứ hai của Samsung trong năm 2023 đánh dấu việc khổng lồ 
                            công nghệ Hàn Quốc ra mắt Galaxy Z Flip 5 và Galaxy Z Fold 5, cùng với sự làm mới của các 
                            dòng đồng hồ thông minh Watch6 và máy tính bảng Galaxy Tab S9..</p>
                        <h3 style="font-family: Arial, Helvetica, sans-serif">Samsung đã tạo nên di sản trong việc đổi mới và cống hiến trong danh mục thiết bị gập, mang đến 
                            các sản phẩm với tính linh hoạt vượt trội.</h3>
                        <p>Sản phẩm đầu tiên được Samsung giới thiệu tại sự kiện là Galaxy Z Flip5. Sản phẩm có thiết kế mỏng nhẹ với màn hình gập theo chiều dọc. Bên trong 
                            là màn hình 6,7 inch linh hoạt, cũng hoạt động ở tần số 120Hz.</p>
                        <p>Thay đổi lớn của mẫu điện thoại “vỏ sò” này là màn hình ngoài 3,4 inch lớn hơn, có thể được sử dụng để thực hiện các tác vụ mà không cần mở điện thoại thông minh.
                             Đây cũng là một bước nhảy đáng kể so với phiên bản 1,9 inch được sử dụng trong Z Flip 4.</p>
                        <img src="front/img/blog/details/Z_Flip5_02.jpg" alt="">
                        <p>Bên trong sản phẩm được trang bị chip Qualcomm Snapdragon 8 Gen 2, dung lượng lưu trữ 128GB, RAM 8GB và cả tuỳ chọn dung lượng 256GB và 512GB đều cung cấp 12GB RAM.<br>
                            Ở bên ngoài, sản phẩm có một camera chính 12 megapixel và một camera siêu rộng 12 megapixel, với góc rộng bao gồm lấy nét tự động pixel kép và OIS.<br>
                            Samsung cho biết sẽ bán ra Galaxy Z Flip 5 với giá từ 999 USD. Tại Việt Nam, Galaxy Z Flip5 8+256GB: 25.990.000 đồng và phiên bản Galaxy Z Flip5 8+512GB có giá 29.990.000 đồng.<br>
                            </p>
                           
                    </div>
                    <div class="blog__details__content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="blog__details__author">
                                    <div class="blog__details__author__pic">
                                        <img src="front/img/blog/details/details-author.jpg" alt="">
                                    </div>
                                    <div class="blog__details__author__text">
                                        <h6>BlackTeam</h6>
                                        <span>Admin</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="blog__details__widget">
                                    <ul>
                                        <li><span>Thể loại:</span> SAMSUNG</li>
                                        
                                    </ul>
                                    <div class="blog__details__social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-envelope"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    <!-- Related Blog Section Begin -->
    <section class="related-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related-blog-title">
                        <h2>Post You May Like</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/blog-1.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Cooking tips make cooking simple</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/blog-2.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/blog-3.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Visit the clean farm in the US</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Blog Section End -->

@endsection;

  