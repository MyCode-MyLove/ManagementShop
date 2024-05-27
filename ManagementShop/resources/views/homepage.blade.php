<!DOCTYPE html>
<html lang="en">

<head>
    <title>BookDetail</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.5.4/swiper-bundle.min.js"></script>


    <link
        href="https://fonts.googleapis.com/css?family=Great+Vibes|Open+Sans:300,400,600,700,800|Raleway:200,300,400,500,600,700,900"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/homepage.css') }}">
</head>

<body>

@include('banner')
    <div class="container">
        <div class="row" style="padding-top: 15px;">
            <div class="col-md-8" style="padding-left: 0px !important; padding-right: 0px !important; padding-bottom: 0px;">
                <div class="header-breadcrumbs background-menu-homepage">
                    <div class="swiper-container">
                        <div class="swiper-slide">
                            <a href="https://www.fahasa.com/happy-summer-2024?fhs_campaign=homepage_smallbanner_1">
                                <img class="small-banner" src="https://cdn0.fahasa.com/media/magentothem/banner7/Diamond_0524_Ver2_LeMaySlide_840x320.jpg" style="border-radius: 8px;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="swiper-container no-padding-right">
                    <div class="swiper-slide" style="padding-bottom: 9px;">
                        <a href="https://www.fahasa.com/happy-summer-2024?fhs_campaign=homepage_smallbanner_1">
                        <img class="small-banner" src="https://cdn0.fahasa.com/media/wysiwyg/Thang-05-2024/392x156_pnj_thang_5.jpg"
                            style="border-radius: 8px;">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.fahasa.com/happy-summer-2024?fhs_campaign=homepage_smallbanner_1">
                        <img class="small-banner" src="https://cdn0.fahasa.com/media/wysiwyg/Thang-05-2024/KoTienMat_T424_Sub_392x156.jpg"
                            style="border-radius: 8px;">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-3 col-xs-6 block-item no-padding hidden-xs">
                <div class="banner-home-inner">
                    <a class="cursor-pointer" href="https://www.fahasa.com/happy-summer-2024?fhs_campaign=homepage_smallbanner_1">
                        <img class="small-banner" src="https://cdn0.fahasa.com/media/wysiwyg/Thang-05-2024/SieeuSale_Week2_T524_Banner_SmallBanner_310x210.jpg">
                    </a>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-xs-6 block-item no-padding hidden-xs">
                <div class="banner-home-inner">
                    <a class="cursor-pointer" href="https://www.fahasa.com/dinh-ti?fhs_campaign=homepage_smallbanner_2">
                        <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-05-2024/Silver_0524_Ver2_dinhtiSmallBanner_310x210.jpg">
                    </a>
                </div>
            </div>
            <div class="col-md-3 block-item no-padding hidden-xs">
                <div class="banner-home-inner">
                    <a class="cursor-pointer" href="https://www.fahasa.com/vpp-si?fhs_campaign=homepage_smallbanner_3">
                        <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-05-2024/VPPSiT424_Small_310x210PNG.jpg">
                    </a>
                </div>
            </div>
            <div class="col-md-3 block-item no-padding hidden-xs">
                <div class="banner-home-inner">
                    <a class="cursor-pointer" href="https://www.fahasa.com/tan-viet?fhs_campaign=homepage_smallbanner_4">
                        <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-05-2024/TanVietT524_BannerSmallBanner_310x210.jpg">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="fs_bg">
            <div class="container">
                <div class="time-flashsale" style="margin-top: 15px">
                    <div class="row">
                        <div class="col-md-4" style="display: flex;flex-wrap: wrap;justify-content: space-between;">
                            <div class="col-md-4" style="padding-right: 0px;">
                                <img style="border: 0; vertical-align: top;" src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/flashsale/label-flashsale.svg?q=">
                            </div>
                            <div class="col-md-4" style="padding-right: 0px; margin-top: 3px;">
                                    <span class="flashsale-page-countdown-label" style="color: black;font-weight: 600;">
                                        Kết thúc trong
                                    </span>
                            </div>
                            <div class="col-md-4" style="padding: 0px;">
                                <div class="flashsale-countdown margin_left_normal">
                                    <span class="flashsale-countdown-number" style="margin-left: 2px;">00</span>
                                    <span>:</span>
                                    <span class="flashsale-countdown-number">00</span>
                                    <span>:</span>
                                    <span class="flashsale-countdown-number">00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8" style="padding-bottom: 5px;">
                            <a style="position: relative; padding-right: 5px;" class="fhs_center_right padding_left_big" href="flashsale">
                                <span class="fhs_btn_default_text blue desktop_only" style="margin-right: -5px;">Xem tất cả</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" style="color: #1478FC; margin-top: 3px;" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M10.354 7.646a.5.5 0 0 0 0-.708L6.707 3.293a.5.5 0 1 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 1 1-.708-.708l3.647-3.647z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" style="padding-top: 10px; padding-bottom: 15px;">
                <div class="row" style="margin-left: 0px; margin-right: 0px;">
                    <div class="product-flashsale">
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/to-binh-yen-ve-hanh-phuc-tai-ban-2022.html?fhs_campaign=FLASHSALE">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8935325006289.jpg" data-src="https://cdn0.fahasa.com/media/catalog/product/8/9/8935325006289.jpg" alt="Tô Bình Yên Vẽ Hạnh Phúc (Tái Bản 2022)">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/to-binh-yen-ve-hanh-phuc-tai-ban-2022.html?fhs_campaign=FLASHSALE" title="Flow - Dòng Chảy">Tô Bình Yên Vẽ Hạnh Phúc (Tái Bản 2022)</a>
                                        </span>
                                    </div>
                                    <div class="price-discount">
                                        <div>
                                            <span class="price-new-flashsale">59.840 đ</span>
                                        </div>
                                        <div>
                                            <span class="sale">-32%</span>
                                        </div>
                                    </div>
                                    <div>
                                        <s style="color: #808080">88.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/999-la-thu-gui-cho-chinh-minh-to-mau-cuoc-song.html?fhs_campaign=bxh-fahasa">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/9/9/999-l_-th_-g_i-cho-ch_nh-m_nh-_-t_-m_u-cu_c-s_ng.jpg" data-src="https://www.fahasa.com/999-la-thu-gui-cho-chinh-minh-to-mau-cuoc-song.html?fhs_campaign=bxh-fahasa" alt="999 Lá Thư Gửi Cho Chính Mình - Tô Màu Cuộc Sống">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/999-la-thu-gui-cho-chinh-minh-to-mau-cuoc-song.html?fhs_campaign=bxh-fahasa" title="999 Lá Thư Gửi Cho Chính Mình - Tô Màu Cuộc Sống">999 Lá Thư Gửi Cho Chính Mình - Tô Màu Cuộc Sống</a>
                                        </span>
                                    </div>
                                    <div class="price-discount">
                                        <div>
                                            <span class="price-new-flashsale">64.350 đ</span>
                                        </div>
                                        <div>
                                            <span class="sale">-32%</span>
                                        </div>
                                    </div>
                                    <div>
                                        <s style="color: #808080">99.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/minh-chi-la-nguoi-binh-thuong.html?fhs_campaign=RELATED_PRODUCT_2">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/b/i/bia_minhchilanguoibinhthuong.jpg" data-src="https://www.fahasa.com/minh-chi-la-nguoi-binh-thuong.html?fhs_campaign=RELATED_PRODUCT_2" alt="Flow - Dòng Chảy">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/minh-chi-la-nguoi-binh-thuong.html?fhs_campaign=RELATED_PRODUCT_2" title="Mình Chỉ Là Người Bình Thường">Mình Chỉ Là Người Bình Thường</a>
                                        </span>
                                    </div>
                                    <div class="price-discount">
                                        <div>
                                            <span class="price-new-flashsale">124.200 đ</span>
                                        </div>
                                        <div>
                                            <span class="sale">-32%</span>
                                        </div>
                                    </div>
                                    <div>
                                        <s style="color: #808080">138.000 đ</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/nhung-noi-buon-cung-can-duoc-yeu-thuong-to-binh-yen-ve-hanh-phuc-2.html?fhs_campaign=RELATED_PRODUCT_2">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/b/_/b_a-1_5_3.jpg" data-src="https://www.fahasa.com/nhung-noi-buon-cung-can-duoc-yeu-thuong-to-binh-yen-ve-hanh-phuc-2.html?fhs_campaign=RELATED_PRODUCT_2" alt="Những Nỗi Buồn Cũng Cần Được Yêu Thương - Tô Bình Yên Vẽ Hạnh Phúc 2">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/nhung-noi-buon-cung-can-duoc-yeu-thuong-to-binh-yen-ve-hanh-phuc-2.html?fhs_campaign=RELATED_PRODUCT_2" title="Những Nỗi Buồn Cũng Cần Được Yêu Thương - Tô Bình Yên Vẽ Hạnh Phúc 2">Những Nỗi Buồn Cũng Cần Được Yêu Thương - Tô Bình Yên Vẽ Hạnh Phúc 2</a>
                                        </span>
                                    </div>
                                    <div class="price-discount">
                                        <div>
                                            <span class="price-new-flashsale">93.840 đ</span>
                                        </div>
                                        <div>
                                            <span class="sale">-32%</span>
                                        </div>
                                    </div>
                                    <div>
                                        <s style="color: #808080">113.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011427.jpg" data-src="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html" alt="Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html" title="Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng">Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">155.040 đ</span>
                                        <span class="sale">-32%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">228.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 40px;">
        <div class="category-book">
            <div class="menucategory">
                <i class="fa-solid fa-qrcode cate-book"></i>
                <h4>Danh mục sản phẩm</h4>
            </div>
            <div class="container">
                <div class="row image-categoy-book body-container">
                    <div class="col-md-2 no-padding">
                        <img src="https://cdn0.fahasa.com/media/wysiwyg/tuan-test-css/nuoi-con-khong-phai-cuoc-chien_resize100.jpg" alt="">
                        <div class="name-book-category">Bé Khỏe - Ba Mẹ Thảnh Thơi</div>
                    </div>
                    <div class="col-md-2 no-padding">
                        <img src="https://cdn0.fahasa.com/media/wysiwyg/Long-KD/resized_100.jpg" alt="">
                        <div class="name-book-category">Đam Mỹ</div>
                    </div>
                    <div class="col-md-2 no-padding">
                        <img src="https://cdn0.fahasa.com/media/wysiwyg/tuan-test-css/thuong-resize.jpg" alt="">
                        <div class="name-book-category">Văn Học</div>
                    </div>
                    <div class="col-md-2 no-padding">
                        <img src="https://cdn0.fahasa.com/media/wysiwyg/hieu_kd/2023-08-frame/TLKN.png" alt="">
                        <div class="name-book-category">Tâm Lý Kỹ Năng</div>
                    </div>
                    <div class="col-md-2 no-padding">
                        <img src="https://cdn0.fahasa.com/media/wysiwyg/Duy-VHDT/Danh-muc-san-pham/8934986006454-100.jpg" alt="">
                        <div class="name-book-category">Thiếu Nhi</div>
                    </div>
                    <div class="col-md-2 no-padding">
                        <img src="https://cdn0.fahasa.com/media/wysiwyg/Duy-VHDT/ngoai-van-t1-24(1).jpg" alt="">
                        <div class="name-book-category">Ngoại Văn</di>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="shop-trend">
            <div class="shop-trend-main">
                <img src="https://cdn0.fahasa.com/media/wysiwyg/icon-menu/icon_dealhot_new.png" style="width: 33px; height: 33px; margin-right: 10px;">
                <h4>Xu Hướng Mua Sắm</h4>
            </div>
            <div class="body-container">
                <div class="item-trend">
                    <li class="item-trend-title active" data-target="day-trend" style="margin-left: 25px;">Xu Hướng Theo Ngày</li>
                    <li class="item-trend-title" data-target="hot-sale-trend">Sách HOT - Giảm Sốc</li>
                    <li class="item-trend-title" data-target="bestseller-trend">Bestseller Ngoại Văn</li>
                </div>
                <div class="container" style="padding-top: 10px; padding-bottom: 15px;">
                    <div class="row product-list active" style="margin-left: 0px; margin-right: 0px;" id="day-trend">
                        <div class="product-flashsale">
                            <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                                <div class="item-inner">
                                    <div class="ma-box-content">
                                        <div class="product clear">
                                            <div class="product images-container">
                                                <a href="https://www.fahasa.com/atomic-habits-an-easy-proven-way-to-build-good-habits-break-bad-ones.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                    <img src="https://cdn0.fahasa.com/media/catalog/product/9/7/9780593189641.jpg" data-src="https://www.fahasa.com/atomic-habits-an-easy-proven-way-to-build-good-habits-break-bad-ones.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="name-book">
                                            <span class="product-name-no-ellipsis">
                                                    <a href="https://www.fahasa.com/atomic-habits-an-easy-proven-way-to-build-good-habits-break-bad-ones.html?fhs_campaign=DEAL_HOT_PAGES_HOME" title="Atomic Habits: An Easy & Proven Way To Build Good Habits & Break Bad Ones">Atomic Habits: An Easy & Proven Way To Build Good Habits & Break Bad Ones</a>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="price-new-flashsale">302.400 đ</span>
                                            <span class="sale">-10%</span>
                                        </div>
                                        <div>
                                            <s style="color: #808080">336.000</s>
                                        </div>
                                        <div class="progress-container">
                                            <div class="progress-bar" style="width: 35%;"></div>
                                            <span class="progress-text">Đã bán 22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                                <div class="item-inner">
                                    <div class="ma-box-content">
                                        <div class="product clear">
                                            <div class="product images-container">
                                                <a href="https://www.fahasa.com/violet-bent-backwards-over-the-grass.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                    <img src="https://cdn0.fahasa.com/media/catalog/product/9/7/9781982167288.jpg" data-src="https://www.fahasa.com/violet-bent-backwards-over-the-grass.html?fhs_campaign=DEAL_HOT_PAGES_HOME" alt="999 Lá Thư Gửi Cho Chính Mình - Tô Màu Cuộc Sống">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="name-book">
                                            <span class="product-name-no-ellipsis">
                                                    <a href="https://www.fahasa.com/violet-bent-backwards-over-the-grass.html?fhs_campaign=DEAL_HOT_PAGES_HOME" title="Violet Bent Backwards Over The Grass">Violet Bent Backwards Over The Grass</a>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="price-new-flashsale">441.000 đ</span>
                                            <span class="sale">-10%</span>
                                        </div>
                                        <div>
                                            <s style="color: #808080">490.000</s>
                                        </div>
                                        <div class="progress-container">
                                            <div class="progress-bar" style="width: 35%;"></div>
                                            <span class="progress-text">Đã bán 22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                                <div class="item-inner">
                                    <div class="ma-box-content">
                                        <div class="product clear">
                                            <div class="product images-container">
                                                <a href="https://www.fahasa.com/100-ky-nang-sinh-ton.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                    <img src="https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_46272.jpg" data-src="https://www.fahasa.com/100-ky-nang-sinh-ton.html?fhs_campaign=DEAL_HOT_PAGES_HOME" alt="Flow - Dòng Chảy">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="name-book">
                                            <span class="product-name-no-ellipsis">
                                                    <a href="https://www.fahasa.com/100-ky-nang-sinh-ton.html?fhs_campaign=DEAL_HOT_PAGES_HOME" title="100 kỹ năng sinh tồn">100 kỹ năng sinh tồn</a>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="price-new-flashsale">69.300 đ</span>
                                            <span class="sale">-30%</span>
                                        </div>
                                        <div>
                                            <s style="color: #808080">99.000 đ</s>
                                        </div>
                                        <div class="progress-container">
                                            <div class="progress-bar" style="width: 35%;"></div>
                                            <span class="progress-text">Đã bán 22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                                <div class="item-inner">
                                    <div class="ma-box-content">
                                        <div class="product clear">
                                            <div class="product images-container">
                                                <a href="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                    <img src="https://cdn0.fahasa.com/media/catalog/product/n/g/ngh_-thu_t-k_-chuy_n-b_ng-h_nh-_nh-b_a-1.jpg" data-src="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="name-book">
                                            <span class="product-name-no-ellipsis">
                                                    <a href="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME" title="Những Nỗi Buồn Cũng Cần Được Yêu Thương - Tô Bình Yên Vẽ Hạnh Phúc 2">Những Nỗi Buồn Cũng Cần Được Yêu Thương - Tô Bình Yên Vẽ Hạnh Phúc 2</a>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="price-new-flashsale">93.840 đ</span>
                                            <span class="sale">-32%</span>
                                        </div>
                                        <div>
                                            <s style="color: #808080">113.000</s>
                                        </div>
                                        <div class="progress-container">
                                            <div class="progress-bar" style="width: 35%;"></div>
                                            <span class="progress-text">Đã bán 22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                                <div class="item-inner">
                                    <div class="ma-box-content">
                                        <div class="product clear">
                                            <div class="product images-container">
                                                <a href="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html">
                                                    <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011427.jpg" data-src="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html" alt="Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="name-book">
                                            <span class="product-name-no-ellipsis">
                                                    <a href="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html" title="Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng">Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng</a>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="price-new-flashsale">155.040 đ</span>
                                            <span class="sale">-32%</span>
                                        </div>
                                        <div>
                                            <s style="color: #808080">228.000</s>
                                        </div>
                                        <div class="progress-container">
                                            <div class="progress-bar" style="width: 35%;"></div>
                                            <span class="progress-text">Đã bán 22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-flashsale">
                            <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                                <div class="item-inner">
                                    <div class="ma-box-content">
                                        <div class="product clear">
                                            <div class="product images-container">
                                                <a href="https://www.fahasa.com/atomic-habits-an-easy-proven-way-to-build-good-habits-break-bad-ones.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                    <img src="https://cdn0.fahasa.com/media/catalog/product/9/7/9780593189641.jpg" data-src="https://www.fahasa.com/atomic-habits-an-easy-proven-way-to-build-good-habits-break-bad-ones.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="name-book">
                                            <span class="product-name-no-ellipsis">
                                                    <a href="https://www.fahasa.com/atomic-habits-an-easy-proven-way-to-build-good-habits-break-bad-ones.html?fhs_campaign=DEAL_HOT_PAGES_HOME" title="Atomic Habits: An Easy & Proven Way To Build Good Habits & Break Bad Ones">Atomic Habits: An Easy & Proven Way To Build Good Habits & Break Bad Ones</a>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="price-new-flashsale">302.400 đ</span>
                                            <span class="sale">-10%</span>
                                        </div>
                                        <div>
                                            <s style="color: #808080">336.000</s>
                                        </div>
                                        <div class="progress-container">
                                            <div class="progress-bar" style="width: 35%;"></div>
                                            <span class="progress-text">Đã bán 22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                                <div class="item-inner">
                                    <div class="ma-box-content">
                                        <div class="product clear">
                                            <div class="product images-container">
                                                <a href="https://www.fahasa.com/violet-bent-backwards-over-the-grass.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                    <img src="https://cdn0.fahasa.com/media/catalog/product/9/7/9781982167288.jpg" data-src="https://www.fahasa.com/violet-bent-backwards-over-the-grass.html?fhs_campaign=DEAL_HOT_PAGES_HOME" alt="999 Lá Thư Gửi Cho Chính Mình - Tô Màu Cuộc Sống">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="name-book">
                                            <span class="product-name-no-ellipsis">
                                                    <a href="https://www.fahasa.com/violet-bent-backwards-over-the-grass.html?fhs_campaign=DEAL_HOT_PAGES_HOME" title="Violet Bent Backwards Over The Grass">Violet Bent Backwards Over The Grass</a>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="price-new-flashsale">441.000 đ</span>
                                            <span class="sale">-10%</span>
                                        </div>
                                        <div>
                                            <s style="color: #808080">490.000</s>
                                        </div>
                                        <div class="progress-container">
                                            <div class="progress-bar" style="width: 35%;"></div>
                                            <span class="progress-text">Đã bán 22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                                <div class="item-inner">
                                    <div class="ma-box-content">
                                        <div class="product clear">
                                            <div class="product images-container">
                                                <a href="https://www.fahasa.com/100-ky-nang-sinh-ton.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                    <img src="https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_46272.jpg" data-src="https://www.fahasa.com/100-ky-nang-sinh-ton.html?fhs_campaign=DEAL_HOT_PAGES_HOME" alt="Flow - Dòng Chảy">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="name-book">
                                            <span class="product-name-no-ellipsis">
                                                    <a href="https://www.fahasa.com/100-ky-nang-sinh-ton.html?fhs_campaign=DEAL_HOT_PAGES_HOME" title="100 kỹ năng sinh tồn">100 kỹ năng sinh tồn</a>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="price-new-flashsale">69.300 đ</span>
                                            <span class="sale">-30%</span>
                                        </div>
                                        <div>
                                            <s style="color: #808080">99.000 đ</s>
                                        </div>
                                        <div class="progress-container">
                                            <div class="progress-bar" style="width: 35%;"></div>
                                            <span class="progress-text">Đã bán 22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                                <div class="item-inner">
                                    <div class="ma-box-content">
                                        <div class="product clear">
                                            <div class="product images-container">
                                                <a href="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                    <img src="https://cdn0.fahasa.com/media/catalog/product/n/g/ngh_-thu_t-k_-chuy_n-b_ng-h_nh-_nh-b_a-1.jpg" data-src="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="name-book">
                                            <span class="product-name-no-ellipsis">
                                                    <a href="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME" title="Những Nỗi Buồn Cũng Cần Được Yêu Thương - Tô Bình Yên Vẽ Hạnh Phúc 2">Những Nỗi Buồn Cũng Cần Được Yêu Thương - Tô Bình Yên Vẽ Hạnh Phúc 2</a>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="price-new-flashsale">93.840 đ</span>
                                            <span class="sale">-32%</span>
                                        </div>
                                        <div>
                                            <s style="color: #808080">113.000</s>
                                        </div>
                                        <div class="progress-container">
                                            <div class="progress-bar" style="width: 35%;"></div>
                                            <span class="progress-text">Đã bán 22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                                <div class="item-inner">
                                    <div class="ma-box-content">
                                        <div class="product clear">
                                            <div class="product images-container">
                                                <a href="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html">
                                                    <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011427.jpg" data-src="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html" alt="Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="name-book">
                                            <span class="product-name-no-ellipsis">
                                                    <a href="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html" title="Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng">Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng</a>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="price-new-flashsale">155.040 đ</span>
                                            <span class="sale">-32%</span>
                                        </div>
                                        <div>
                                            <s style="color: #808080">228.000</s>
                                        </div>
                                        <div class="progress-container">
                                            <div class="progress-bar" style="width: 35%;"></div>
                                            <span class="progress-text">Đã bán 22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row product-list" style="margin-left: 0px; margin-right: 0px;" id="hot-sale-trend">
                        <div class="product-flashsale">
                            <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                                <div class="item-inner">
                                    <div class="ma-box-content">
                                        <div class="product clear">
                                            <div class="product images-container">
                                                <a href="https://www.fahasa.com/destination-b2-grammar-vocabulary-with-answer-key.html">
                                                    <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8935246937136.jpg" data-src="https://www.fahasa.com/destination-b2-grammar-vocabulary-with-answer-key.html">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="name-book">
                                            <span class="product-name-no-ellipsis">
                                                    <a href="https://www.fahasa.com/destination-b2-grammar-vocabulary-with-answer-key.html" title="Destination B2 - Grammar And Vocabulary with Answer Key">Destination B2 - Grammar And Vocabulary with Answer Key</a>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="price-new-flashsale">302.400 đ</span>
                                            <span class="sale">-10%</span>
                                        </div>
                                        <div>
                                            <s style="color: #808080">336.000</s>
                                        </div>
                                        <div class="progress-container">
                                            <div class="progress-bar" style="width: 35%;"></div>
                                            <span class="progress-text">Đã bán 22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                                <div class="item-inner">
                                    <div class="ma-box-content">
                                        <div class="product clear">
                                            <div class="product images-container">
                                                <a href="https://www.fahasa.com/violet-bent-backwards-over-the-grass.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                    <img src="https://cdn0.fahasa.com/media/catalog/product/9/7/9781982167288.jpg" data-src="https://www.fahasa.com/violet-bent-backwards-over-the-grass.html?fhs_campaign=DEAL_HOT_PAGES_HOME" alt="Violet Bent Backwards Over The Grass">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="name-book">
                                            <span class="product-name-no-ellipsis">
                                                    <a href="https://www.fahasa.com/violet-bent-backwards-over-the-grass.html?fhs_campaign=DEAL_HOT_PAGES_HOME" title="Violet Bent Backwards Over The Grass">Violet Bent Backwards Over The Grass</a>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="price-new-flashsale">441.000 đ</span>
                                            <span class="sale">-10%</span>
                                        </div>
                                        <div>
                                            <s style="color: #808080">490.000</s>
                                        </div>
                                        <div class="progress-container">
                                            <div class="progress-bar" style="width: 35%;"></div>
                                            <span class="progress-text">Đã bán 22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                                <div class="item-inner">
                                    <div class="ma-box-content">
                                        <div class="product clear">
                                            <div class="product images-container">
                                                <a href="https://www.fahasa.com/khi-ban-dang-mo-thi-nguoi-khac-dang-no-luc-2022.html">
                                                    <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8936067606317.jpg" data-src="https://www.fahasa.com/khi-ban-dang-mo-thi-nguoi-khac-dang-no-luc-2022.html" alt="Khi Bạn Đang Mơ Thì Người Khác Đang Nỗ Lực (2022)">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="name-book">
                                            <span class="product-name-no-ellipsis">
                                                    <a href="https://www.fahasa.com/khi-ban-dang-mo-thi-nguoi-khac-dang-no-luc-2022.html" title="Khi Bạn Đang Mơ Thì Người Khác Đang Nỗ Lực (2022)">Khi Bạn Đang Mơ Thì Người Khác Đang Nỗ Lực (2022)</a>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="price-new-flashsale">69.300 đ</span>
                                            <span class="sale">-30%</span>
                                        </div>
                                        <div>
                                            <s style="color: #808080">99.000 đ</s>
                                        </div>
                                        <div class="progress-container">
                                            <div class="progress-bar" style="width: 35%;"></div>
                                            <span class="progress-text">Đã bán 22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                                <div class="item-inner">
                                    <div class="ma-box-content">
                                        <div class="product clear">
                                            <div class="product images-container">
                                                <a href="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                    <img src="https://cdn0.fahasa.com/media/catalog/product/n/g/ngh_-thu_t-k_-chuy_n-b_ng-h_nh-_nh-b_a-1.jpg" data-src="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="name-book">
                                            <span class="product-name-no-ellipsis">
                                                    <a href="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME" title="Những Nỗi Buồn Cũng Cần Được Yêu Thương - Tô Bình Yên Vẽ Hạnh Phúc 2">Những Nỗi Buồn Cũng Cần Được Yêu Thương - Tô Bình Yên Vẽ Hạnh Phúc 2</a>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="price-new-flashsale">93.840 đ</span>
                                            <span class="sale">-32%</span>
                                        </div>
                                        <div>
                                            <s style="color: #808080">113.000</s>
                                        </div>
                                        <div class="progress-container">
                                            <div class="progress-bar" style="width: 35%;"></div>
                                            <span class="progress-text">Đã bán 22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                                <div class="item-inner">
                                    <div class="ma-box-content">
                                        <div class="product clear">
                                            <div class="product images-container">
                                                <a href="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html">
                                                    <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011427.jpg" data-src="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html" alt="Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="name-book">
                                            <span class="product-name-no-ellipsis">
                                                    <a href="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html" title="Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng">Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng</a>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="price-new-flashsale">155.040 đ</span>
                                            <span class="sale">-32%</span>
                                        </div>
                                        <div>
                                            <s style="color: #808080">228.000</s>
                                        </div>
                                        <div class="progress-container">
                                            <div class="progress-bar" style="width: 35%;"></div>
                                            <span class="progress-text">Đã bán 22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-flashsale">
                            <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                                <div class="item-inner">
                                    <div class="ma-box-content">
                                        <div class="product clear">
                                            <div class="product images-container">
                                                <a href="https://www.fahasa.com/destination-b2-grammar-vocabulary-with-answer-key.html">
                                                    <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8935246937136.jpg" data-src="https://www.fahasa.com/destination-b2-grammar-vocabulary-with-answer-key.html">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="name-book">
                                            <span class="product-name-no-ellipsis">
                                                    <a href="https://www.fahasa.com/destination-b2-grammar-vocabulary-with-answer-key.html" title="Destination B2 - Grammar And Vocabulary with Answer Key">Destination B2 - Grammar And Vocabulary with Answer Key</a>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="price-new-flashsale">302.400 đ</span>
                                            <span class="sale">-10%</span>
                                        </div>
                                        <div>
                                            <s style="color: #808080">336.000</s>
                                        </div>
                                        <div class="progress-container">
                                            <div class="progress-bar" style="width: 35%;"></div>
                                            <span class="progress-text">Đã bán 22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                                <div class="item-inner">
                                    <div class="ma-box-content">
                                        <div class="product clear">
                                            <div class="product images-container">
                                                <a href="https://www.fahasa.com/violet-bent-backwards-over-the-grass.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                    <img src="https://cdn0.fahasa.com/media/catalog/product/9/7/9781982167288.jpg" data-src="https://www.fahasa.com/violet-bent-backwards-over-the-grass.html?fhs_campaign=DEAL_HOT_PAGES_HOME" alt="Violet Bent Backwards Over The Grass">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="name-book">
                                            <span class="product-name-no-ellipsis">
                                                    <a href="https://www.fahasa.com/violet-bent-backwards-over-the-grass.html?fhs_campaign=DEAL_HOT_PAGES_HOME" title="Violet Bent Backwards Over The Grass">Violet Bent Backwards Over The Grass</a>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="price-new-flashsale">441.000 đ</span>
                                            <span class="sale">-10%</span>
                                        </div>
                                        <div>
                                            <s style="color: #808080">490.000</s>
                                        </div>
                                        <div class="progress-container">
                                            <div class="progress-bar" style="width: 35%;"></div>
                                            <span class="progress-text">Đã bán 22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                                <div class="item-inner">
                                    <div class="ma-box-content">
                                        <div class="product clear">
                                            <div class="product images-container">
                                                <a href="https://www.fahasa.com/khi-ban-dang-mo-thi-nguoi-khac-dang-no-luc-2022.html">
                                                    <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8936067606317.jpg" data-src="https://www.fahasa.com/khi-ban-dang-mo-thi-nguoi-khac-dang-no-luc-2022.html" alt="Khi Bạn Đang Mơ Thì Người Khác Đang Nỗ Lực (2022)">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="name-book">
                                            <span class="product-name-no-ellipsis">
                                                    <a href="https://www.fahasa.com/khi-ban-dang-mo-thi-nguoi-khac-dang-no-luc-2022.html" title="Khi Bạn Đang Mơ Thì Người Khác Đang Nỗ Lực (2022)">Khi Bạn Đang Mơ Thì Người Khác Đang Nỗ Lực (2022)</a>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="price-new-flashsale">69.300 đ</span>
                                            <span class="sale">-30%</span>
                                        </div>
                                        <div>
                                            <s style="color: #808080">99.000 đ</s>
                                        </div>
                                        <div class="progress-container">
                                            <div class="progress-bar" style="width: 35%;"></div>
                                            <span class="progress-text">Đã bán 22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                                <div class="item-inner">
                                    <div class="ma-box-content">
                                        <div class="product clear">
                                            <div class="product images-container">
                                                <a href="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                    <img src="https://cdn0.fahasa.com/media/catalog/product/n/g/ngh_-thu_t-k_-chuy_n-b_ng-h_nh-_nh-b_a-1.jpg" data-src="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="name-book">
                                            <span class="product-name-no-ellipsis">
                                                    <a href="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME" title="Những Nỗi Buồn Cũng Cần Được Yêu Thương - Tô Bình Yên Vẽ Hạnh Phúc 2">Những Nỗi Buồn Cũng Cần Được Yêu Thương - Tô Bình Yên Vẽ Hạnh Phúc 2</a>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="price-new-flashsale">93.840 đ</span>
                                            <span class="sale">-32%</span>
                                        </div>
                                        <div>
                                            <s style="color: #808080">113.000</s>
                                        </div>
                                        <div class="progress-container">
                                            <div class="progress-bar" style="width: 35%;"></div>
                                            <span class="progress-text">Đã bán 22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                                <div class="item-inner">
                                    <div class="ma-box-content">
                                        <div class="product clear">
                                            <div class="product images-container">
                                                <a href="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html">
                                                    <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011427.jpg" data-src="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html" alt="Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="name-book">
                                            <span class="product-name-no-ellipsis">
                                                    <a href="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html" title="Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng">Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng</a>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="price-new-flashsale">155.040 đ</span>
                                            <span class="sale">-32%</span>
                                        </div>
                                        <div>
                                            <s style="color: #808080">228.000</s>
                                        </div>
                                        <div class="progress-container">
                                            <div class="progress-bar" style="width: 35%;"></div>
                                            <span class="progress-text">Đã bán 22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row product-list" style="margin-left: 0px; margin-right: 0px;" id="bestseller-trend">
                        <div class="product-flashsale">
                            <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                                <div class="item-inner">
                                    <div class="ma-box-content">
                                        <div class="product clear">
                                            <div class="product images-container">
                                                <a href="https://www.fahasa.com/atomic-habits-an-easy-proven-way-to-build-good-habits-break-bad-ones.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                    <img src="https://cdn0.fahasa.com/media/catalog/product/9/7/9780593189641.jpg" data-src="https://www.fahasa.com/atomic-habits-an-easy-proven-way-to-build-good-habits-break-bad-ones.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="name-book">
                                            <span class="product-name-no-ellipsis">
                                                    <a href="https://www.fahasa.com/atomic-habits-an-easy-proven-way-to-build-good-habits-break-bad-ones.html?fhs_campaign=DEAL_HOT_PAGES_HOME" title="Atomic Habits: An Easy & Proven Way To Build Good Habits & Break Bad Ones">Atomic Habits: An Easy & Proven Way To Build Good Habits & Break Bad Ones</a>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="price-new-flashsale">302.400 đ</span>
                                            <span class="sale">-10%</span>
                                        </div>
                                        <div>
                                            <s style="color: #808080">336.000</s>
                                        </div>
                                        <div class="progress-container">
                                            <div class="progress-bar" style="width: 35%;"></div>
                                            <span class="progress-text">Đã bán 22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                                <div class="item-inner">
                                    <div class="ma-box-content">
                                        <div class="product clear">
                                            <div class="product images-container">
                                                <a href="https://www.fahasa.com/violet-bent-backwards-over-the-grass.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                    <img src="https://cdn0.fahasa.com/media/catalog/product/9/7/9781982167288.jpg" data-src="https://www.fahasa.com/violet-bent-backwards-over-the-grass.html?fhs_campaign=DEAL_HOT_PAGES_HOME" alt="999 Lá Thư Gửi Cho Chính Mình - Tô Màu Cuộc Sống">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="name-book">
                                            <span class="product-name-no-ellipsis">
                                                    <a href="https://www.fahasa.com/violet-bent-backwards-over-the-grass.html?fhs_campaign=DEAL_HOT_PAGES_HOME" title="Violet Bent Backwards Over The Grass">Violet Bent Backwards Over The Grass</a>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="price-new-flashsale">441.000 đ</span>
                                            <span class="sale">-10%</span>
                                        </div>
                                        <div>
                                            <s style="color: #808080">490.000</s>
                                        </div>
                                        <div class="progress-container">
                                            <div class="progress-bar" style="width: 35%;"></div>
                                            <span class="progress-text">Đã bán 22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                                <div class="item-inner">
                                    <div class="ma-box-content">
                                        <div class="product clear">
                                            <div class="product images-container">
                                                <a href="https://www.fahasa.com/100-ky-nang-sinh-ton.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                    <img src="https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_46272.jpg" data-src="https://www.fahasa.com/100-ky-nang-sinh-ton.html?fhs_campaign=DEAL_HOT_PAGES_HOME" alt="Flow - Dòng Chảy">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="name-book">
                                            <span class="product-name-no-ellipsis">
                                                    <a href="https://www.fahasa.com/100-ky-nang-sinh-ton.html?fhs_campaign=DEAL_HOT_PAGES_HOME" title="100 kỹ năng sinh tồn">100 kỹ năng sinh tồn</a>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="price-new-flashsale">69.300 đ</span>
                                            <span class="sale">-30%</span>
                                        </div>
                                        <div>
                                            <s style="color: #808080">99.000 đ</s>
                                        </div>
                                        <div class="progress-container">
                                            <div class="progress-bar" style="width: 35%;"></div>
                                            <span class="progress-text">Đã bán 22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                                <div class="item-inner">
                                    <div class="ma-box-content">
                                        <div class="product clear">
                                            <div class="product images-container">
                                                <a href="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                    <img src="https://cdn0.fahasa.com/media/catalog/product/n/g/ngh_-thu_t-k_-chuy_n-b_ng-h_nh-_nh-b_a-1.jpg" data-src="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="name-book">
                                            <span class="product-name-no-ellipsis">
                                                    <a href="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME" title="Những Nỗi Buồn Cũng Cần Được Yêu Thương - Tô Bình Yên Vẽ Hạnh Phúc 2">Những Nỗi Buồn Cũng Cần Được Yêu Thương - Tô Bình Yên Vẽ Hạnh Phúc 2</a>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="price-new-flashsale">93.840 đ</span>
                                            <span class="sale">-32%</span>
                                        </div>
                                        <div>
                                            <s style="color: #808080">113.000</s>
                                        </div>
                                        <div class="progress-container">
                                            <div class="progress-bar" style="width: 35%;"></div>
                                            <span class="progress-text">Đã bán 22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                                <div class="item-inner">
                                    <div class="ma-box-content">
                                        <div class="product clear">
                                            <div class="product images-container">
                                                <a href="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html">
                                                    <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011427.jpg" data-src="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html" alt="Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="name-book">
                                            <span class="product-name-no-ellipsis">
                                                    <a href="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html" title="Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng">Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng</a>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="price-new-flashsale">155.040 đ</span>
                                            <span class="sale">-32%</span>
                                        </div>
                                        <div>
                                            <s style="color: #808080">228.000</s>
                                        </div>
                                        <div class="progress-container">
                                            <div class="progress-bar" style="width: 35%;"></div>
                                            <span class="progress-text">Đã bán 22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-flashsale">
                            <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                                <div class="item-inner">
                                    <div class="ma-box-content">
                                        <div class="product clear">
                                            <div class="product images-container">
                                                <a href="https://www.fahasa.com/atomic-habits-an-easy-proven-way-to-build-good-habits-break-bad-ones.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                    <img src="https://cdn0.fahasa.com/media/catalog/product/9/7/9780593189641.jpg" data-src="https://www.fahasa.com/atomic-habits-an-easy-proven-way-to-build-good-habits-break-bad-ones.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="name-book">
                                            <span class="product-name-no-ellipsis">
                                                    <a href="https://www.fahasa.com/atomic-habits-an-easy-proven-way-to-build-good-habits-break-bad-ones.html?fhs_campaign=DEAL_HOT_PAGES_HOME" title="Atomic Habits: An Easy & Proven Way To Build Good Habits & Break Bad Ones">Atomic Habits: An Easy & Proven Way To Build Good Habits & Break Bad Ones</a>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="price-new-flashsale">302.400 đ</span>
                                            <span class="sale">-10%</span>
                                        </div>
                                        <div>
                                            <s style="color: #808080">336.000</s>
                                        </div>
                                        <div class="progress-container">
                                            <div class="progress-bar" style="width: 35%;"></div>
                                            <span class="progress-text">Đã bán 22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                                <div class="item-inner">
                                    <div class="ma-box-content">
                                        <div class="product clear">
                                            <div class="product images-container">
                                                <a href="https://www.fahasa.com/violet-bent-backwards-over-the-grass.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                    <img src="https://cdn0.fahasa.com/media/catalog/product/9/7/9781982167288.jpg" data-src="https://www.fahasa.com/violet-bent-backwards-over-the-grass.html?fhs_campaign=DEAL_HOT_PAGES_HOME" alt="999 Lá Thư Gửi Cho Chính Mình - Tô Màu Cuộc Sống">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="name-book">
                                            <span class="product-name-no-ellipsis">
                                                    <a href="https://www.fahasa.com/violet-bent-backwards-over-the-grass.html?fhs_campaign=DEAL_HOT_PAGES_HOME" title="Violet Bent Backwards Over The Grass">Violet Bent Backwards Over The Grass</a>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="price-new-flashsale">441.000 đ</span>
                                            <span class="sale">-10%</span>
                                        </div>
                                        <div>
                                            <s style="color: #808080">490.000</s>
                                        </div>
                                        <div class="progress-container">
                                            <div class="progress-bar" style="width: 35%;"></div>
                                            <span class="progress-text">Đã bán 22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                                <div class="item-inner">
                                    <div class="ma-box-content">
                                        <div class="product clear">
                                            <div class="product images-container">
                                                <a href="https://www.fahasa.com/100-ky-nang-sinh-ton.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                    <img src="https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_46272.jpg" data-src="https://www.fahasa.com/100-ky-nang-sinh-ton.html?fhs_campaign=DEAL_HOT_PAGES_HOME" alt="Flow - Dòng Chảy">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="name-book">
                                            <span class="product-name-no-ellipsis">
                                                    <a href="https://www.fahasa.com/100-ky-nang-sinh-ton.html?fhs_campaign=DEAL_HOT_PAGES_HOME" title="100 kỹ năng sinh tồn">100 kỹ năng sinh tồn</a>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="price-new-flashsale">69.300 đ</span>
                                            <span class="sale">-30%</span>
                                        </div>
                                        <div>
                                            <s style="color: #808080">99.000 đ</s>
                                        </div>
                                        <div class="progress-container">
                                            <div class="progress-bar" style="width: 35%;"></div>
                                            <span class="progress-text">Đã bán 22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                                <div class="item-inner">
                                    <div class="ma-box-content">
                                        <div class="product clear">
                                            <div class="product images-container">
                                                <a href="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                    <img src="https://cdn0.fahasa.com/media/catalog/product/n/g/ngh_-thu_t-k_-chuy_n-b_ng-h_nh-_nh-b_a-1.jpg" data-src="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="name-book">
                                            <span class="product-name-no-ellipsis">
                                                    <a href="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME" title="Những Nỗi Buồn Cũng Cần Được Yêu Thương - Tô Bình Yên Vẽ Hạnh Phúc 2">Những Nỗi Buồn Cũng Cần Được Yêu Thương - Tô Bình Yên Vẽ Hạnh Phúc 2</a>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="price-new-flashsale">93.840 đ</span>
                                            <span class="sale">-32%</span>
                                        </div>
                                        <div>
                                            <s style="color: #808080">113.000</s>
                                        </div>
                                        <div class="progress-container">
                                            <div class="progress-bar" style="width: 35%;"></div>
                                            <span class="progress-text">Đã bán 22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                                <div class="item-inner">
                                    <div class="ma-box-content">
                                        <div class="product clear">
                                            <div class="product images-container">
                                                <a href="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html">
                                                    <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011427.jpg" data-src="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html" alt="Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="name-book">
                                            <span class="product-name-no-ellipsis">
                                                    <a href="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html" title="Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng">Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng</a>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="price-new-flashsale">155.040 đ</span>
                                            <span class="sale">-32%</span>
                                        </div>
                                        <div>
                                            <s style="color: #808080">228.000</s>
                                        </div>
                                        <div class="progress-container">
                                            <div class="progress-bar" style="width: 35%;"></div>
                                            <span class="progress-text">Đã bán 22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button class="watch-more"><b>Xem thêm</b></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="body-container featured-brands">
            <div class="shop-trend-main">
                <img src="https://cdn0.fahasa.com/media/wysiwyg/icon-menu/icon_dealhot_new.png" style="width: 30px; height: 30  px; margin-right: 10px;">
                <h4>Thương hiệu nổi bật</h4>
            </div>
            <div class="item-trend">
                <li class="item-featured-brands active" data-target="Mcbooks" style="margin-left: 25px;">Mcbooks</li>
                <li class="item-featured-brands" data-target="Đinh Tị">Đinh Tị</li>
            </div>
            <div class="container" style="padding-top: 10px; padding-bottom: 15px;">
                <div class="row featured-brands-list active" style="margin-left: 0px; margin-right: 0px;" id="Mcbooks">
                    <div class="product-flashsale">
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/38-la-thu-rockefeller-gui-cho-con-trai.html">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8935246938126_1.jpg" data-src="https://www.fahasa.com/38-la-thu-rockefeller-gui-cho-con-trai.html">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/38-la-thu-rockefeller-gui-cho-con-trai.html" title="38 Lá Thư Rockefeller Gửi Cho Con Trai">38 Lá Thư Rockefeller Gửi Cho Con Trai</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">302.400 đ</span>
                                        <span class="sale">-10%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">336.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/360-dong-tu-bat-quy-tac-va-12-thi-co-ban-trong-tieng-anh-tai-ban-2018.html">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/3/6/360-_ng-t_-b_t-quy-t_c-v_-12-th_-ti_ng-anh-c_-b_n-1.jpg" data-src="https://www.fahasa.com/360-dong-tu-bat-quy-tac-va-12-thi-co-ban-trong-tieng-anh-tai-ban-2018.html">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/360-dong-tu-bat-quy-tac-va-12-thi-co-ban-trong-tieng-anh-tai-ban-2018.html" title="360 Động Từ Bất Quy Tắc Và 12 Thì Cơ Bản Trong Tiếng Anh (Tái Bản 2018)">360 Động Từ Bất Quy Tắc Và 12 Thì Cơ Bản Trong Tiếng Anh (Tái Bản 2018)</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">441.000 đ</span>
                                        <span class="sale">-10%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">490.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/tu-hoc-2000-tu-vung-tieng-anh-theo-chu-de-182109.html">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/2/4/24df17f9bab58ba053c6c08c3af2f470.jpg" data-src="https://www.fahasa.com/tu-hoc-2000-tu-vung-tieng-anh-theo-chu-de-182109.html" alt="Tự Học 2000 Từ Vựng Tiếng Anh Theo Chủ Đề (Tái Bản)">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/tu-hoc-2000-tu-vung-tieng-anh-theo-chu-de-182109.html" title="Tự Học 2000 Từ Vựng Tiếng Anh Theo Chủ Đề (Tái Bản)">Tự Học 2000 Từ Vựng Tiếng Anh Theo Chủ Đề (Tái Bản)</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">69.300 đ</span>
                                        <span class="sale">-30%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">99.000 đ</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8935246917176.jpg" data-src="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME" title="Những Nỗi Buồn Cũng Cần Được Yêu Thương - Tô Bình Yên Vẽ Hạnh Phúc 2">Những Nỗi Buồn Cũng Cần Được Yêu Thương - Tô Bình Yên Vẽ Hạnh Phúc 2</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">93.840 đ</span>
                                        <span class="sale">-32%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">113.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8935246937143.jpg" data-src="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html" alt="Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html" title="Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng">Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">155.040 đ</span>
                                        <span class="sale">-32%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">228.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row featured-brands-list" style="margin-left: 0px; margin-right: 0px;" id="Đinh Tị">
                    <div class="product-flashsale">
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/38-la-thu-rockefeller-gui-cho-con-trai.html">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_46272.jpg" data-src="https://www.fahasa.com/38-la-thu-rockefeller-gui-cho-con-trai.html">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/38-la-thu-rockefeller-gui-cho-con-trai.html" title="38 Lá Thư Rockefeller Gửi Cho Con Trai">38 Lá Thư Rockefeller Gửi Cho Con Trai</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">302.400 đ</span>
                                        <span class="sale">-10%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">336.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/360-dong-tu-bat-quy-tac-va-12-thi-co-ban-trong-tieng-anh-tai-ban-2018.html">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8935212358279.jpg" data-src="https://www.fahasa.com/360-dong-tu-bat-quy-tac-va-12-thi-co-ban-trong-tieng-anh-tai-ban-2018.html">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/360-dong-tu-bat-quy-tac-va-12-thi-co-ban-trong-tieng-anh-tai-ban-2018.html" title="360 Động Từ Bất Quy Tắc Và 12 Thì Cơ Bản Trong Tiếng Anh (Tái Bản 2018)">360 Động Từ Bất Quy Tắc Và 12 Thì Cơ Bản Trong Tiếng Anh (Tái Bản 2018)</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">441.000 đ</span>
                                        <span class="sale">-10%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">490.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/tu-hoc-2000-tu-vung-tieng-anh-theo-chu-de-182109.html">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8935212361910.jpg" data-src="https://www.fahasa.com/tu-hoc-2000-tu-vung-tieng-anh-theo-chu-de-182109.html" alt="Tự Học 2000 Từ Vựng Tiếng Anh Theo Chủ Đề (Tái Bản)">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/tu-hoc-2000-tu-vung-tieng-anh-theo-chu-de-182109.html" title="Tự Học 2000 Từ Vựng Tiếng Anh Theo Chủ Đề (Tái Bản)">Tự Học 2000 Từ Vựng Tiếng Anh Theo Chủ Đề (Tái Bản)</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">69.300 đ</span>
                                        <span class="sale">-30%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">99.000 đ</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8935212362429.jpg" data-src="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME" title="Những Nỗi Buồn Cũng Cần Được Yêu Thương - Tô Bình Yên Vẽ Hạnh Phúc 2">Những Nỗi Buồn Cũng Cần Được Yêu Thương - Tô Bình Yên Vẽ Hạnh Phúc 2</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">93.840 đ</span>
                                        <span class="sale">-32%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">113.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/i/m/image_188430.jpg" data-src="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html" alt="Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html" title="Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng">Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">155.040 đ</span>
                                        <span class="sale">-32%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">228.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <button class="watch-more"><b>Xem thêm</b></button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="body-container featured-brands">
            <div class="item-trend">
                <li class="item-featured-brands-second active" data-target="Tân Việt" style="margin-left: 25px;">Tân Việt</li>
                <li class="item-featured-brands-second" data-target="Văn Lang">Văn Lang</li>
                <li class="item-featured-brands-second" data-target="Sbooks">Sbooks</li>
            </div>
            <div class="container" style="padding-top: 10px; padding-bottom: 15px;">
                <div class="row featured-brands-second-list active" style="margin-left: 0px; margin-right: 0px;" id="Tân Việt">
                    <div class="product-flashsale">
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/38-la-thu-rockefeller-gui-cho-con-trai.html">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8935210305497.jpg" data-src="https://www.fahasa.com/38-la-thu-rockefeller-gui-cho-con-trai.html">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/38-la-thu-rockefeller-gui-cho-con-trai.html" title="38 Lá Thư Rockefeller Gửi Cho Con Trai">38 Lá Thư Rockefeller Gửi Cho Con Trai</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">302.400 đ</span>
                                        <span class="sale">-10%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">336.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/360-dong-tu-bat-quy-tac-va-12-thi-co-ban-trong-tieng-anh-tai-ban-2018.html">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8935210289285.jpg" data-src="https://www.fahasa.com/360-dong-tu-bat-quy-tac-va-12-thi-co-ban-trong-tieng-anh-tai-ban-2018.html">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/360-dong-tu-bat-quy-tac-va-12-thi-co-ban-trong-tieng-anh-tai-ban-2018.html" title="360 Động Từ Bất Quy Tắc Và 12 Thì Cơ Bản Trong Tiếng Anh (Tái Bản 2018)">360 Động Từ Bất Quy Tắc Và 12 Thì Cơ Bản Trong Tiếng Anh (Tái Bản 2018)</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">441.000 đ</span>
                                        <span class="sale">-10%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">490.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/tu-hoc-2000-tu-vung-tieng-anh-theo-chu-de-182109.html">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8935210306104.jpg" data-src="https://www.fahasa.com/tu-hoc-2000-tu-vung-tieng-anh-theo-chu-de-182109.html" alt="Tự Học 2000 Từ Vựng Tiếng Anh Theo Chủ Đề (Tái Bản)">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/tu-hoc-2000-tu-vung-tieng-anh-theo-chu-de-182109.html" title="Tự Học 2000 Từ Vựng Tiếng Anh Theo Chủ Đề (Tái Bản)">Tự Học 2000 Từ Vựng Tiếng Anh Theo Chủ Đề (Tái Bản)</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">69.300 đ</span>
                                        <span class="sale">-30%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">99.000 đ</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/i/m/image_181017.jpg" data-src="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME" title="Những Nỗi Buồn Cũng Cần Được Yêu Thương - Tô Bình Yên Vẽ Hạnh Phúc 2">Những Nỗi Buồn Cũng Cần Được Yêu Thương - Tô Bình Yên Vẽ Hạnh Phúc 2</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">93.840 đ</span>
                                        <span class="sale">-32%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">113.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/i/m/image_181017.jpg" data-src="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html" alt="Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html" title="Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng">Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">155.040 đ</span>
                                        <span class="sale">-32%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">228.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row featured-brands-second-list" style="margin-left: 0px; margin-right: 0px;" id="Văn Lang">
                    <div class="product-flashsale">
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/38-la-thu-rockefeller-gui-cho-con-trai.html">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8935074125606_1.jpg" data-src="https://www.fahasa.com/38-la-thu-rockefeller-gui-cho-con-trai.html">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/38-la-thu-rockefeller-gui-cho-con-trai.html" title="38 Lá Thư Rockefeller Gửi Cho Con Trai">38 Lá Thư Rockefeller Gửi Cho Con Trai</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">302.400 đ</span>
                                        <span class="sale">-10%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">336.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/360-dong-tu-bat-quy-tac-va-12-thi-co-ban-trong-tieng-anh-tai-ban-2018.html">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8935074128874.jpg" data-src="https://www.fahasa.com/360-dong-tu-bat-quy-tac-va-12-thi-co-ban-trong-tieng-anh-tai-ban-2018.html">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/360-dong-tu-bat-quy-tac-va-12-thi-co-ban-trong-tieng-anh-tai-ban-2018.html" title="360 Động Từ Bất Quy Tắc Và 12 Thì Cơ Bản Trong Tiếng Anh (Tái Bản 2018)">360 Động Từ Bất Quy Tắc Và 12 Thì Cơ Bản Trong Tiếng Anh (Tái Bản 2018)</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">441.000 đ</span>
                                        <span class="sale">-10%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">490.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/tu-hoc-2000-tu-vung-tieng-anh-theo-chu-de-182109.html">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/i/m/image_189655.jpg" data-src="https://www.fahasa.com/tu-hoc-2000-tu-vung-tieng-anh-theo-chu-de-182109.html" alt="Tự Học 2000 Từ Vựng Tiếng Anh Theo Chủ Đề (Tái Bản)">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/tu-hoc-2000-tu-vung-tieng-anh-theo-chu-de-182109.html" title="Tự Học 2000 Từ Vựng Tiếng Anh Theo Chủ Đề (Tái Bản)">Tự Học 2000 Từ Vựng Tiếng Anh Theo Chủ Đề (Tái Bản)</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">69.300 đ</span>
                                        <span class="sale">-30%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">99.000 đ</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/1/9/19646.jpg" data-src="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME" title="Những Nỗi Buồn Cũng Cần Được Yêu Thương - Tô Bình Yên Vẽ Hạnh Phúc 2">Những Nỗi Buồn Cũng Cần Được Yêu Thương - Tô Bình Yên Vẽ Hạnh Phúc 2</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">93.840 đ</span>
                                        <span class="sale">-32%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">113.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_37437.jpg" data-src="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html" alt="Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html" title="Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng">Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">155.040 đ</span>
                                        <span class="sale">-32%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">228.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row featured-brands-second-list" style="margin-left: 0px; margin-right: 0px;" id="Sbooks">
                    <div class="product-flashsale">
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/38-la-thu-rockefeller-gui-cho-con-trai.html">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/9/7/9786044742250.jpg" data-src="https://www.fahasa.com/38-la-thu-rockefeller-gui-cho-con-trai.html">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/38-la-thu-rockefeller-gui-cho-con-trai.html" title="38 Lá Thư Rockefeller Gửi Cho Con Trai">38 Lá Thư Rockefeller Gửi Cho Con Trai</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">302.400 đ</span>
                                        <span class="sale">-10%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">336.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/360-dong-tu-bat-quy-tac-va-12-thi-co-ban-trong-tieng-anh-tai-ban-2018.html">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/c/h/chien-thang-con-quy-trong-ban-sbooks.jpg" data-src="https://www.fahasa.com/360-dong-tu-bat-quy-tac-va-12-thi-co-ban-trong-tieng-anh-tai-ban-2018.html">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/360-dong-tu-bat-quy-tac-va-12-thi-co-ban-trong-tieng-anh-tai-ban-2018.html" title="360 Động Từ Bất Quy Tắc Và 12 Thì Cơ Bản Trong Tiếng Anh (Tái Bản 2018)">360 Động Từ Bất Quy Tắc Và 12 Thì Cơ Bản Trong Tiếng Anh (Tái Bản 2018)</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">441.000 đ</span>
                                        <span class="sale">-10%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">490.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/tu-hoc-2000-tu-vung-tieng-anh-theo-chu-de-182109.html">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/i/m/image_189655.jpg" data-src="https://www.fahasa.com/tu-hoc-2000-tu-vung-tieng-anh-theo-chu-de-182109.html" alt="Tự Học 2000 Từ Vựng Tiếng Anh Theo Chủ Đề (Tái Bản)">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://cdn0.fahasa.com/media/catalog/product/9/7/9786044742243.jpg" title="Tự Học 2000 Từ Vựng Tiếng Anh Theo Chủ Đề (Tái Bản)">Tự Học 2000 Từ Vựng Tiếng Anh Theo Chủ Đề (Tái Bản)</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">69.300 đ</span>
                                        <span class="sale">-30%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">99.000 đ</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/9/7/9786043654370.jpg" data-src="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME" title="Những Nỗi Buồn Cũng Cần Được Yêu Thương - Tô Bình Yên Vẽ Hạnh Phúc 2">Những Nỗi Buồn Cũng Cần Được Yêu Thương - Tô Bình Yên Vẽ Hạnh Phúc 2</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">93.840 đ</span>
                                        <span class="sale">-32%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">113.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/9/7/9786043491654_1.jpg" data-src="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html" alt="Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html" title="Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng">Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">155.040 đ</span>
                                        <span class="sale">-32%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">228.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <button class="watch-more"><b>Xem thêm</b></button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="body-container featured-brands">
            <div class="item-trend">
                <li class="item-featured-brands-third active" data-target="Fluffy Panda" style="margin-left: 25px;">Fluffy Panda</li>
                <li class="item-featured-brands-third" data-target="Cute Panda">Cute Panda</li>
                <li class="item-featured-brands-third" data-target="Bánh Việt">Bánh Việt</li>
                <li class="item-featured-brands-third" data-target="Việt Nam Trong Tôi Là">Việt Nam Trong Tôi Là</li>
            </div>
            <div class="container" style="padding-top: 10px; padding-bottom: 15px;">
                <div class="row featured-brands-third-list active" style="margin-left: 0px; margin-right: 0px;" id="Fluffy Panda">
                    <div class="product-flashsale">
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/38-la-thu-rockefeller-gui-cho-con-trai.html">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011236-mau3-1.jpg" data-src="https://www.fahasa.com/38-la-thu-rockefeller-gui-cho-con-trai.html">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/38-la-thu-rockefeller-gui-cho-con-trai.html" title="38 Lá Thư Rockefeller Gửi Cho Con Trai">38 Lá Thư Rockefeller Gửi Cho Con Trai</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">302.400 đ</span>
                                        <span class="sale">-10%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">336.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/360-dong-tu-bat-quy-tac-va-12-thi-co-ban-trong-tieng-anh-tai-ban-2018.html">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011236-mau1-1.jpg" data-src="https://www.fahasa.com/360-dong-tu-bat-quy-tac-va-12-thi-co-ban-trong-tieng-anh-tai-ban-2018.html">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/360-dong-tu-bat-quy-tac-va-12-thi-co-ban-trong-tieng-anh-tai-ban-2018.html" title="360 Động Từ Bất Quy Tắc Và 12 Thì Cơ Bản Trong Tiếng Anh (Tái Bản 2018)">360 Động Từ Bất Quy Tắc Và 12 Thì Cơ Bản Trong Tiếng Anh (Tái Bản 2018)</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">441.000 đ</span>
                                        <span class="sale">-10%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">490.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/tu-hoc-2000-tu-vung-tieng-anh-theo-chu-de-182109.html">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011403-mau1.jpg  " data-src="https://www.fahasa.com/tu-hoc-2000-tu-vung-tieng-anh-theo-chu-de-182109.html" alt="Tự Học 2000 Từ Vựng Tiếng Anh Theo Chủ Đề (Tái Bản)">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/tu-hoc-2000-tu-vung-tieng-anh-theo-chu-de-182109.html" title="Tự Học 2000 Từ Vựng Tiếng Anh Theo Chủ Đề (Tái Bản)">Tự Học 2000 Từ Vựng Tiếng Anh Theo Chủ Đề (Tái Bản)</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">69.300 đ</span>
                                        <span class="sale">-30%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">99.000 đ</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011403-mau2.jpg" data-src="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME" title="Những Nỗi Buồn Cũng Cần Được Yêu Thương - Tô Bình Yên Vẽ Hạnh Phúc 2">Những Nỗi Buồn Cũng Cần Được Yêu Thương - Tô Bình Yên Vẽ Hạnh Phúc 2</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">93.840 đ</span>
                                        <span class="sale">-32%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">113.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011236-mau2-1.jpg" data-src="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html" alt="Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html" title="Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng">Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">155.040 đ</span>
                                        <span class="sale">-32%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">228.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row featured-brands-third-list" style="margin-left: 0px; margin-right: 0px;" id="Cute Panda">
                    <div class="product-flashsale">
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/38-la-thu-rockefeller-gui-cho-con-trai.html">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011229-mau3.jpg" data-src="https://www.fahasa.com/38-la-thu-rockefeller-gui-cho-con-trai.html">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/38-la-thu-rockefeller-gui-cho-con-trai.html" title="38 Lá Thư Rockefeller Gửi Cho Con Trai">38 Lá Thư Rockefeller Gửi Cho Con Trai</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">302.400 đ</span>
                                        <span class="sale">-10%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">336.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/360-dong-tu-bat-quy-tac-va-12-thi-co-ban-trong-tieng-anh-tai-ban-2018.html">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011229_2.jpg" data-src="https://www.fahasa.com/360-dong-tu-bat-quy-tac-va-12-thi-co-ban-trong-tieng-anh-tai-ban-2018.html">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/360-dong-tu-bat-quy-tac-va-12-thi-co-ban-trong-tieng-anh-tai-ban-2018.html" title="360 Động Từ Bất Quy Tắc Và 12 Thì Cơ Bản Trong Tiếng Anh (Tái Bản 2018)">360 Động Từ Bất Quy Tắc Và 12 Thì Cơ Bản Trong Tiếng Anh (Tái Bản 2018)</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">441.000 đ</span>
                                        <span class="sale">-10%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">490.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/tu-hoc-2000-tu-vung-tieng-anh-theo-chu-de-182109.html">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011229-mau4.jpg" data-src="https://www.fahasa.com/tu-hoc-2000-tu-vung-tieng-anh-theo-chu-de-182109.html" alt="Tự Học 2000 Từ Vựng Tiếng Anh Theo Chủ Đề (Tái Bản)">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/tu-hoc-2000-tu-vung-tieng-anh-theo-chu-de-182109.html" title="Tự Học 2000 Từ Vựng Tiếng Anh Theo Chủ Đề (Tái Bản)">Tự Học 2000 Từ Vựng Tiếng Anh Theo Chủ Đề (Tái Bản)</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">69.300 đ</span>
                                        <span class="sale">-30%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">99.000 đ</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011373-mau3.jpg" data-src="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME" title="Những Nỗi Buồn Cũng Cần Được Yêu Thương - Tô Bình Yên Vẽ Hạnh Phúc 2">Những Nỗi Buồn Cũng Cần Được Yêu Thương - Tô Bình Yên Vẽ Hạnh Phúc 2</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">93.840 đ</span>
                                        <span class="sale">-32%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">113.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011229-mau2.jpg" data-src="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html" alt="Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html" title="Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng">Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">155.040 đ</span>
                                        <span class="sale">-32%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">228.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row featured-brands-second-list" style="margin-left: 0px; margin-right: 0px;" id="Bánh Việt">
                    <div class="product-flashsale">
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/38-la-thu-rockefeller-gui-cho-con-trai.html">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011243-mau3.jpg" data-src="https://www.fahasa.com/38-la-thu-rockefeller-gui-cho-con-trai.html">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/38-la-thu-rockefeller-gui-cho-con-trai.html" title="38 Lá Thư Rockefeller Gửi Cho Con Trai">38 Lá Thư Rockefeller Gửi Cho Con Trai</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">302.400 đ</span>
                                        <span class="sale">-10%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">336.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/360-dong-tu-bat-quy-tac-va-12-thi-co-ban-trong-tieng-anh-tai-ban-2018.html">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011243-mau1.jpg" data-src="https://www.fahasa.com/360-dong-tu-bat-quy-tac-va-12-thi-co-ban-trong-tieng-anh-tai-ban-2018.html">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/360-dong-tu-bat-quy-tac-va-12-thi-co-ban-trong-tieng-anh-tai-ban-2018.html" title="360 Động Từ Bất Quy Tắc Và 12 Thì Cơ Bản Trong Tiếng Anh (Tái Bản 2018)">360 Động Từ Bất Quy Tắc Và 12 Thì Cơ Bản Trong Tiếng Anh (Tái Bản 2018)</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">441.000 đ</span>
                                        <span class="sale">-10%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">490.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/tu-hoc-2000-tu-vung-tieng-anh-theo-chu-de-182109.html">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011236-mau4_1.jpg" data-src="https://www.fahasa.com/tu-hoc-2000-tu-vung-tieng-anh-theo-chu-de-182109.html" alt="Tự Học 2000 Từ Vựng Tiếng Anh Theo Chủ Đề (Tái Bản)">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://cdn0.fahasa.com/media/catalog/product/9/7/9786044742243.jpg" title="Tự Học 2000 Từ Vựng Tiếng Anh Theo Chủ Đề (Tái Bản)">Tự Học 2000 Từ Vựng Tiếng Anh Theo Chủ Đề (Tái Bản)</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">69.300 đ</span>
                                        <span class="sale">-30%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">99.000 đ</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011236-mau2_2.jpg" data-src="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME" title="Những Nỗi Buồn Cũng Cần Được Yêu Thương - Tô Bình Yên Vẽ Hạnh Phúc 2">Những Nỗi Buồn Cũng Cần Được Yêu Thương - Tô Bình Yên Vẽ Hạnh Phúc 2</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">93.840 đ</span>
                                        <span class="sale">-32%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">113.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011380-mau2.jpg" data-src="https://www.fahasa.com/tap-hoc-sinh-co-tien-xanh-chong-loa-4-o-ly-48-trang-100gsm-spa-thu-cung.html" alt="Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011380-mau2.jpg">Tập Học Sinh Cô Tiên Xanh Chống Lóa - Miền Bắc - 4 Ô Ly - 48 Trang 100gsm - Spa Thú Cưng</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">155.040 đ</span>
                                        <span class="sale">-32%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">228.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row featured-brands-second-list" style="margin-left: 0px; margin-right: 0px;" id="Việt Nam Trong Tôi Là">
                    <div class="product-flashsale">
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/38-la-thu-rockefeller-gui-cho-con-trai.html">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011236-mau3.jpg" data-src="https://www.fahasa.com/38-la-thu-rockefeller-gui-cho-con-trai.html">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/38-la-thu-rockefeller-gui-cho-con-trai.html" title="38 Lá Thư Rockefeller Gửi Cho Con Trai">38 Lá Thư Rockefeller Gửi Cho Con Trai</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">302.400 đ</span>
                                        <span class="sale">-10%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">336.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/360-dong-tu-bat-quy-tac-va-12-thi-co-ban-trong-tieng-anh-tai-ban-2018.html">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011236-mau4.jpg" data-src="https://www.fahasa.com/360-dong-tu-bat-quy-tac-va-12-thi-co-ban-trong-tieng-anh-tai-ban-2018.html">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/360-dong-tu-bat-quy-tac-va-12-thi-co-ban-trong-tieng-anh-tai-ban-2018.html" title="360 Động Từ Bất Quy Tắc Và 12 Thì Cơ Bản Trong Tiếng Anh (Tái Bản 2018)">360 Động Từ Bất Quy Tắc Và 12 Thì Cơ Bản Trong Tiếng Anh (Tái Bản 2018)</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">441.000 đ</span>
                                        <span class="sale">-10%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">490.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/tu-hoc-2000-tu-vung-tieng-anh-theo-chu-de-182109.html">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011236-mau2.jpg" data-src="https://www.fahasa.com/tu-hoc-2000-tu-vung-tieng-anh-theo-chu-de-182109.html" alt="Tự Học 2000 Từ Vựng Tiếng Anh Theo Chủ Đề (Tái Bản)">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://cdn0.fahasa.com/media/catalog/product/9/7/9786044742243.jpg" title="Tự Học 2000 Từ Vựng Tiếng Anh Theo Chủ Đề (Tái Bản)">Tự Học 2000 Từ Vựng Tiếng Anh Theo Chủ Đề (Tái Bản)</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">69.300 đ</span>
                                        <span class="sale">-30%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">99.000 đ</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="imgproduct col-xs-12 col-sm-6 col-md-2 custom-col">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                                <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011236-mau2.jpg" data-src="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="name-book">
                                        <span class="product-name-no-ellipsis">
                                                <a href="https://www.fahasa.com/nghe-thuat-ke-chuyen-bang-hinh-anh.html?fhs_campaign=DEAL_HOT_PAGES_HOME" title="Những Nỗi Buồn Cũng Cần Được Yêu Thương - Tô Bình Yên Vẽ Hạnh Phúc 2">Những Nỗi Buồn Cũng Cần Được Yêu Thương - Tô Bình Yên Vẽ Hạnh Phúc 2</a>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="price-new-flashsale">93.840 đ</span>
                                        <span class="sale">-32%</span>
                                    </div>
                                    <div>
                                        <s style="color: #808080">113.000</s>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 35%;"></div>
                                        <span class="progress-text">Đã bán 22</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div>
                    <button class="watch-more"><b>Xem thêm</b></button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="weekly-leaderboard">
            <b>Bảng xếp hạng bán chạy tuần</b>
        </div>
        <div class="body-container">
            <div class="item-weekly-leaderboard">
                <li class="item-featured-brands-third active" data-target="Fluffy Panda" style="margin-left: 25px;">Fluffy Panda</li>
                <li class="item-featured-brands-third" data-target="Cute Panda">Cute Panda</li>
                <li class="item-featured-brands-third" data-target="Bánh Việt">Bánh Việt</li>
                <li class="item-featured-brands-third" data-target="Việt Nam Trong Tôi Là">Việt Nam Trong Tôi Là</li>
            </div>
            <div class="row">
            <div class="col-md-6" style="padding-right: 0px;">
                <div class="product-weekly-leaderboard-main">
                    <a href="https://www.fahasa.com/goc-nho-co-nang.html?fhs_campaign=bxh-fahasa">
                        <div class="product-weekly-leaderboard">
                            <div class="product-weekly-leaderboard-item">
                                <div><b>01</b></div>
                                <i class="fa fa-arrow-up" style="color: green; font-size: 10px;font-weight: 600px;"></i>
                            </div>
                            <div class="product-weekly-leaderboard-item">
                                <img src="https://cdn0.fahasa.com/media/catalog/product/b/_/b_a-in-g_c-nh_-c_-n_ng.jpg" alt="Góc nhỏ có nắng" style="width: 100px; height: 100px;">
                            </div>
                            <div class="product-weekly-leaderboard-item-ifo">
                                <div class="product-weekly-leaderboard-title">Góc Nhỏ Có Nắng</div>
                                <div class="product-weekly-leaderboard-author">Little Rainbow</div>
                                <div class="product-weekly-leaderboard-buy-number">250 lượt mua</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="product-weekly-leaderboard-main">
                    <a href="https://www.fahasa.com/goc-nho-co-nang.html?fhs_campaign=bxh-fahasa">
                        <div class="product-weekly-leaderboard">
                            <div class="product-weekly-leaderboard-item">
                                <div><b>02</b></div>
                                <i class="fa fa-arrow-up" style="color: green; font-size: 10px;font-weight: 600px;"></i>
                            </div>
                            <div class="product-weekly-leaderboard-item">
                                <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8935325006289.jpg" alt="Tô Bình Yên Vẽ Hạnh Phúc (Tài Bản 2022)" style="width: 100px; height: 100px;">
                            </div>
                            <div class="product-weekly-leaderboard-item-ifo">
                                <div class="product-weekly-leaderboard-title">Tô Bình Yên Vẽ Hạnh Phúc (Tài Bản 2022)</div>
                                <div class="product-weekly-leaderboard-author">Kulzsc</div>
                                <div class="product-weekly-leaderboard-buy-number">200 lượt mua</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-lg-4 col-sm-4">
                    <img src="https://cdn0.fahasa.com/media/catalog/product/b/_/b_a-in-g_c-nh_-c_-n_ng.jpg" alt="Góc nhỏ có nắng" style="width: 250px; height: 250px;">
                </div>
            </div>
        </div>
    </div>
    <script>
            document.addEventListener('DOMContentLoaded', function () {
            const trendTitles = document.querySelectorAll('.item-trend-title');
            const trendContents = document.querySelectorAll('.product-list');

            trendTitles.forEach(title => {
                title.addEventListener('click', function () {
                    // Remove active class from all titles and contents
                    trendTitles.forEach(item => item.classList.remove('active'));
                    trendContents.forEach(content => content.classList.remove('active'));

                    // Add active class to the clicked title and corresponding content
                    title.classList.add('active');
                    document.getElementById(title.getAttribute('data-target')).classList.add('active');
                });
            });
        });


    document.addEventListener('DOMContentLoaded', function () {
        const trendTitles = document.querySelectorAll('.item-featured-brands');
        const trendContents = document.querySelectorAll('.featured-brands-list');

        trendTitles.forEach(title => {
            title.addEventListener('click', function () {
                // Remove active class from all titles and contents
                trendTitles.forEach(item => item.classList.remove('active'));
                trendContents.forEach(content => content.classList.remove('active'));

                // Add active class to the clicked title and corresponding content
                title.classList.add('active');
                document.getElementById(title.getAttribute('data-target')).classList.add('active');
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        const trendTitles = document.querySelectorAll('.item-featured-brands-third');
        const trendContents = document.querySelectorAll('.featured-brands-third-list');

        trendTitles.forEach(title => {
            title.addEventListener('click', function () {
                // Remove active class from all titles and contents
                trendTitles.forEach(item => item.classList.remove('active'));
                trendContents.forEach(content => content.classList.remove('active'));

                // Add active class to the clicked title and corresponding content
                title.classList.add('active');
                document.getElementById(title.getAttribute('data-target')).classList.add('active');
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        const trendTitles = document.querySelectorAll('.item-featured-brands-second');
        const trendContents = document.querySelectorAll('.featured-brands-second-list');

        trendTitles.forEach(title => {
            title.addEventListener('click', function () {
                // Remove active class from all titles and contents
                trendTitles.forEach(item => item.classList.remove('active'));
                trendContents.forEach(content => content.classList.remove('active'));

                // Add active class to the clicked title and corresponding content
                title.classList.add('active');
                document.getElementById(title.getAttribute('data-target')).classList.add('active');
            });
        });
    });

</script>

</body>
