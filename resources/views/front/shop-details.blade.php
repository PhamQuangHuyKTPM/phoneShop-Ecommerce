@extends('front.layout.master')

    @section('title','Chi tiết sản phẩm')

    @section('body')
   
    @include("front.layout.bottom-header");

    <!-- Hero Section Begin -->
    {{-- <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Danh mục</span>
                        </div>
                        <ul>
                            <li><a href="#">IPHONE</a></li>
                            <li><a href="#">SAMSUNG</a></li>
                            <li><a href="#">OPPO</a></li>
                            <li><a href="#">VIVO</a></li>
                            <li><a href="#">REALME</a></li>
                            <li><a href="#">NOKIA</a></li>
                            <li><a href="#">XIAOMI</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                            <div class="hero__search__form" style="border: 1px">
                                <form action="#">
                                    <div class="hero__search__categories">
                                        Tất cả
                                        <span class="arrow_carrot-down"></span>
                                    </div>
                                    <input type="text" placeholder="Hôm nay bạn cần tìm gì ?">
                                    <button type="submit" class="site-btn">SEARCH</button>
                                </form>
                            </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>hỗ trợ 24/7</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="front/img/ip.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Điện Thoại</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Uy tín</a>
                            <a href="./index.html">Chất lượng</a>
                            <span><b>Giá hợp lý</b></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="front/img/product/details/oppo_a78_1.jpg" alt="">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                            <img data-imgbigurl="front/img/product/details/oppo_a78_2.jpg"
                                src="front/img/product/details/oppo_a78_5.jpg" alt="">
                            <img data-imgbigurl="front/img/product/details/oppo_a78_3.jpg"
                                src="front/img/product/details/oppo_a78_2.jpg" alt="">
                            <img data-imgbigurl="front/img/product/details/oppo_a78_5.jpg"
                                src="front/img/product/details/oppo_a78_3.jpg" alt="">
                            <img data-imgbigurl="front/img/product/details/oppo_a78_4.jpg"
                                src="front/img/product/details/oppo_a78_4.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>Điện thoại di động OPPO A78 - 8GB/256GB - Chính hãng</h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 đánh giá)</span>
                        </div>
                        <a><b>Lựa chọn phiên bản</b></a>
                        <form>
                            <label class="rounder-radius">
                                <input type="radio" name="color" value="red">
                                <span><label><strong>128GB</strong></label></span><br>
                                <strong>6,290,000 ₫</strong>
                            </label>
                        </form>
                        <a><b>Lựa chọn màu</b></a>
                        <form>
                            <label class="rounder-radius">
                                <input type="radio" name="color" value="red">
                                <span><label><strong>Đen</strong></label></span><br>
                                <strong>6,290,000 ₫</strong>
                            </label>
                            <label class="rounder-radius">
                                <input type="radio" name="color" value="red">
                                <span><label><strong>Xanh</strong></label></span><br>
                                <strong>6,290,000 ₫</strong>
                            </label>
                        </form>
                        
                        <div class="product__details__price">6.290.000 VNĐ</div>
                        <a>Công nghệ màn hình: 90Hz, AMOLED</a><br>
                        <a>Độ phân giải: 1080 x 2400 (FHD+)</a><br>
                        <a>Màn hình rộng: 6.4 inch, màn hình đục lỗ</a><br>
                        <a>Độ phân giải: 50 MP (chính) + 2 MP (Xóa phông) - (F/1.8 + F/2.4), 8 MP (F/2.0)</a><br>
                        <a>Hệ điều hành: ColorOS 13.1.1, nền tảng Android 13</a><br>
                        <a>Chip xử lý (CPU): Qualcomm Snapdragon 680, tối đa 2.4GHz</a><br>
                        <a>Bộ nhớ trong (ROM): 256GB, RAM: 8GB</a><br>
                        <a>Mạng di động: GSM: 850/900/1800/1900, WCDMA: 850/900/2100, LTE: Band 1/3/5/7/8/20/28/38/40/41</a><br>
                        <a>Số khe sim: Dual nano-SIM + 1 thẻ nhớ</a><br>
                        <a>Dung lượng pin: 5000mAh</a>






 (Typ)</p>
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">MUA NGAY</a>
                        <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                        <ul>
                            <li><b>Tình trạng:</b> <span>Còn hàng</span></li>
                            <li><b>Vận chuyển:</b> <span>01 ngày vận chuyển. <samp>Miễn phí </samp>vận chuyển</span></li>
                            <li><b>Trọng lượng:</b> <span>250 g</span></li>
                            <li><b>Chia sẻ: </b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Mô tả sản phẩm</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                    aria-selected="false">Đánh giá <span>(1)</span></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Thông tin sản phẩm</h6>
                                    <blockquote>Đầu năm nay, OPPO đã ra mắt OPPO A78 phiên bản 5G, và sắp đến đây OPPO A78 4G sẽ được ra mắt nối tiếp. 
                                     Thiết bị gây ấn tượng bởi thiết kế trẻ trung nhưng không kém phần sang trọng so với một smartphone tầm trung.
                                     Điện thoại chỉ nặng 180g, còn nhẹ hơn phiên bản 5G và dày chỉ 7,99 mm, có kiểu dáng đẹp mắt và khá “trendy”. 
                                     OPPO A78 4G sở hữu màn hình AMOLED 6.4 inch có độ phân giải FHD+ và hỗ trợ tần số quét 90Hz.</blockquote>
                                        <blockquote>Nhà sản xuất cung cấp hai tùy chọn màu sắc cho thiết bị là Misty Black và Aqua Green.
                                            Vi xử lý Qualcomm Snapdragon 68 mạnh mẽ cùng hệ thống camera tiên tiến
                                            Qualcomm Snapdragon 680 là vi xử lý sẽ được trang bị trên OPPO A78 4G. 
                                            Đi kèm với nó là 8GB RAM LPDDR4x, bộ nhớ trong 256GB, có thể mở rộng lên tới 1TB. 
                                            Người dùng cũng có thể mở rộng thêm 8GB RAM ảo, nâng cao khả năng đa nhiệm của thiết bị. 
                                            Thiết bị đã trải qua bài kiểm tra điểm chuẩn Geekbench 6, trong đó nó đạt được số điểm là 411 điểm ở vòng đơn lõi và 1263 điểm ở vòng đa lõi.
                                            Khi nói đến khả năng nhiếp ảnh, Oppo A78 4G sở hữu thiết lập camera kép ở phía sau, bao gồm cảm biến chính 50MP cùng với camera phụ 2MP tích hợp AI. 
                                            Phía trước màn hình đục lỗ là nơi chứa camera selfie và thực hiện cuộc gọi video có độ phân giải 8MP.
                                            Trang bị công nghệ sạc nhanh SuperVOOC 67W.</blockquote>
                                            <blockquote>Về thời lượng pin, OPPO A78 4G sở hữu viên pin 5000mAh mạnh mẽ, được hỗ trợ bởi công nghệ sạc nhanh SuperVOOC 67W. 
                                            Giải pháp sạc nhanh này có thể sạc đầy 76% pin chỉ trong vòng 30 phút. 
                                            Ngoài ra, thiết bị còn được tích hợp hệ thống sinh trắc học là máy quét vân tay ẩn dưới màn hình. 
                                            Hệ thống loa kép cho trải nghiệm âm thanh sống động và ColorOS 13.1.1 của Oppo, dựa trên hệ điều hành Android 13 mới nhất.
                                            Mua Điện thoại di động OPPO A78 - 8GB/256GB chính hãng tại Hoàng Hà Mobile để nhận được mức giá tốt nhất thị trường.</blockquote>
                                </div>
                            </div>
                            
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h2>Đánh giá sản phẩm</h2>
                                    @csrf
                                    <select name="rating" id="rating">
                                        <option value="1">1⭐</option>
                                        <option value="2">2⭐⭐</option>
                                        <option value="3">3⭐⭐⭐</option>
                                        <option value="4">4⭐⭐⭐⭐</option>
                                        <option value="5">5⭐⭐⭐⭐⭐</option>
                                    </select>
                                    
                                </div>
                                
                                <input type="text" size="100" placeholder="Đánh giá của bạn..." style="margin-left: 10px">
                                <button type="submit" style="background: rgb(143, 125, 224)" style="color: white">Gửi đánh giá</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Sản phẩm tương tự</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="front/img/product/realme_note12.jpg">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Điện thoại di động Redmi Note 12 (8GB/128GB) - Chính hãng</a></h6>
                            <h5>5.090.000 VNĐ</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="front/img/product/iphone_11G.jpg">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Điện thoại di động iPhone 11 (64GB) - Chính hãng VN/A</a></h6>
                            <h5>10,390,000 VNĐ</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="front/img/product/iphone_14.jpg">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">iPhone 14 (128GB) - Chính hãng VN/A</a></h6><br>
                            <h5>18.790.000 VNĐ</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="front/img/product/iphone_13.jpg">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Điện thoại di động iPhone 13 (128GB) - Chính hãng VN/A</a></h6>
                            <h5>16,390,000 VNĐ</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->
@endsection