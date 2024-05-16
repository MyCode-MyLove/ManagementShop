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
        <div class="header-breadcrumbs background-menu-homepage row" style="padding-top: 10px; margin-left: 2px;">
            <div class="swiper-container col-md-8 no-padding-left">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="https://www.fahasa.com/happy-summer-2024?fhs_campaign=homepage_smallbanner_1">
                            <img src="https://cdn0.fahasa.com/media/magentothem/banner7/Diamond_0524_Ver2_LeMaySlide_840x320.jpg"
                                style="max-width: 100%; height: auto; border-radius: 8px;">
                        </a>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <div class="swiper-container col-md-4 no-padding-right">
                <div class="swiper-wrapper" style="margin-bottom: 5px;">
                    <div class="swiper-slide">
                        <a href="https://www.fahasa.com/happy-summer-2024?fhs_campaign=homepage_smallbanner_1">
                        <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-05-2024/392x156_pnj_thang_5.jpg"
                                style="max-width: 100%; height: auto; border-radius: 8px;">
                        </a>
                    </div>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="https://www.fahasa.com/happy-summer-2024?fhs_campaign=homepage_smallbanner_1">
                        <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-05-2024/392x156_pnj_thang_5.jpg"
                                style="max-width: 100%; height: auto;border-radius: 8px;">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="std">
        <div id="fhs-homebanner">
            <div class="fhs-banner-image-block mainbody row">
                <div class="col-sm-3 col-md-3 col-xs-6 block-item no-padding hidden-xs">
                    <div class="banner-home-inner">
                        <a class="cursor-pointer" href="https://www.fahasa.com/happy-summer-2024?fhs_campaign=homepage_smallbanner_1">
                            <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-05-2024/SieeuSale_Week2_T524_Banner_SmallBanner_310x210.jpg" style="max-width: 100%; height: auto;">
                        </a>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 col-xs-6 block-item no-padding hidden-xs">
                    <div class="banner-home-inner">
                        <a class="cursor-pointer" href="https://www.fahasa.com/dinh-ti?fhs_campaign=homepage_smallbanner_2">
                            <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-05-2024/Silver_0524_Ver2_dinhtiSmallBanner_310x210.jpg" style="max-width: 100%; height: auto;">
                        </a>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 col-xs-6 block-item no-padding hidden-xs">
                    <div class="banner-home-inner">
                        <a class="cursor-pointer" href="https://www.fahasa.com/vpp-si?fhs_campaign=homepage_smallbanner_3">
                            <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-05-2024/VPPSiT424_Small_310x210PNG.jpg" style="max-width: 100%; height: auto;">
                        </a>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 col-xs-6 block-item no-padding hidden-xs">
                    <div class="banner-home-inner">
                        <a class="cursor-pointer" href="https://www.fahasa.com/tan-viet?fhs_campaign=homepage_smallbanner_4">
                            <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-05-2024/TanVietT524_BannerSmallBanner_310x210.jpg" style="max-width: 100%; height: auto;">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $jq(document).ready(function(){
                let ww = window.innerWidth;
                var dataBanner = [
                    {
                        "webClass": "col-sm-3 col-md-3 col-xs-6 block-item no-padding hidden-xs",
                        "urlWebImg": "wysiwyg/Thang-05-2024/SieeuSale_Week2_T524_Banner_SmallBanner_310x210.jpg",
                        "urlMobileImg": "wysiwyg/Thang-05-2024/SieeuSale_Week2_T524_Banner_Slide_840x320_1.jpg",
                        "urlLink": "happy-summer-2024?fhs_campaign=homepage_smallbanner_1"
                    },
                    {
                        "webClass": "col-sm-3 col-md-3 col-xs-6 block-item no-padding hidden-xs",
                        "urlWebImg": "wysiwyg/Thang-05-2024/Silver_0524_Ver2_dinhtiSmallBanner_310x210.jpg",
                        "urlMobileImg": "wysiwyg/Thang-05-2024/Silver_0524_Ver2_dinhtiSlide_840x320_2.jpg",
                        "urlLink": "dinh-ti?fhs_campaign=homepage_smallbanner_2"
                    },
                    {
                        "webClass": "col-sm-3 col-md-3 col-xs-6 block-item no-padding hidden-xs",
                        "urlWebImg": "wysiwyg/Thang-05-2024/VPPSiT424_Small_310x210PNG.jpg",
                        "urlMobileImg": "wysiwyg/Thang-05-2024/VPPSiT424_Slide_840x320_2.jpg",
                        "urlLink": "vpp-si?fhs_campaign=homepage_smallbanner_3"
                    },
                    {
                        "webClass": "col-sm-3 col-md-3 col-xs-6 block-item no-padding hidden-xs no-margin-right-important",
                        "urlWebImg": "wysiwyg/Thang-05-2024/TanVietT524_BannerSmallBanner_310x210.jpg",
                        "urlMobileImg": "wysiwyg/Thang-05-2024/TanVietT524_BannerSlide_840x320_2.jpg",
                        "urlLink": "tan-viet?fhs_campaign=homepage_smallbanner_4"
                    }
                ];
                let urlLoadingIcon = "https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/ring_loader.gif";
                let path = "https://cdn0.fahasa.com/media/";
                if (typeof inivoslider !== 'undefined' && ww <= 992) {
                    dataBanner.forEach(addSliderOneBaner);
                    inivoslider.update();
                }

                function addSliderOneBaner(item){
                    let count = inivoslider.slides.length + 1;
                    let string = "<div class='swiper-slide'>"
                                    + "<a href='"+item.urlLink+"'>"
                                    + "<img class='swiper-lazy' src='" + path + item.urlMobileImg + "' title='#banner7-caption"+ count +"'/>"
                                    + "<div class='swiper-lazy-preloader'><img style='padding-bottom:0' src='" + urlLoadingIcon + "'/></div>"
                                    + "</a>"
                                + "</div>";
                    inivoslider.appendSlide(string)
                }
            })
            var swiper = new Swiper('.swiper-container', {
                    autoplay: {
                        delay: 3000, // Thời gian giữa mỗi lần chuyển đổi (miligiây)
                        disableOnInteraction: false, // Không tắt autoplay sau khi người dùng tương tác với slider
                    },
                    loop: true,
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                });

        </script>
    </div>
    <div class="fs_bg">
        <div class="wrapper" style="padding: 15px">
            <div id="flashsale-slider" style="display: flex; justify-content: space-between;">
                <div class="flashsale_header fhs_center_space" style="display: flex; align-items: center;">
                    <div class="fhs_center_left">
                        <a style="position: relative; display: flex; align-items: center;" class="flashsale-slider-title" href="flashsale">
                            <img style="max-width: 100%; height: auto; border: 0; vertical-align: top; margin-right: 10px;" src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/flashsale/label-flashsale.svg?q=">
                            <div class="margin-left-big" style="margin-right: 10px;">
                                <span class="flashsale-page-countdown-label" style="color: black; margin-top: 2px; font-weight: 400;">
                                    Kết thúc trong
                                </span>
                            </div>
                            <div class="flashsale-countdown margin_left_normal">
                                <span class="flashsale-countdown-temp"></span>
                                <span class="flashsale-countdown-number">00</span>
                                <span>:</span>
                                <span class="flashsale-countdown-number">00</span>
                                <span>:</span>
                                <span class="flashsale-countdown-number">00</span>
                            </div>
                        </a>
                    </div>
                </div>
                <a style="position: relative; padding-right: 5px;" class="fhs_center_right padding_left_big" href="flashsale">
                    <span class="fhs_btn_default_text blue desktop_only" style="margin-right: -5px;">Xem tất cả</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" style="color: #1478FC; margin-top: 3px;" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10.354 7.646a.5.5 0 0 0 0-.708L6.707 3.293a.5.5 0 1 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 1 1-.708-.708l3.647-3.647z"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="mainbody">
            <div id="flashsale_slider_142580" class="fhs-product-slider-content" style="position:relative;">
                <!-- <div id="flashsale_slider142580" class="swiper-container swiper-container-horizontal">
                    <ul id="flashsale_grid_item142580" class="swiper-wrapper fhs-product-slider-list" style="transform: translate3d(0px, 0px, 0px);">
                        <li class="fhs_product_basic swiper-slide flashsale-item swiper-slide-active" style="width: 140.4px; margin-right: 12px;">
                            <div class="item-inner">
                                <div class="ma-box-content">
                                    <div class="product clear">
                                        <div class="product images-container">
                                            <a href="https://www.fahasa.com/nhung-noi-buon-cung-can-duoc-yeu-thuong-to-binh-yen-ve-hanh-phuc-2.html?fhs_campaign=FLASHSALE" title="Những Nỗi Buồn Cũng Cần Được Yêu Thương - Tô Bình Yên Vẽ Hạnh Phúc 2" class="product-image">
                                                <div class="product-image">
                                                    <img class="lazyloaded" src="https://cdn0.fahasa.com/media/catalog/product/b/_/b_a-1_5_3.jpg" data-src="https://cdn0.fahasa.com/media/catalog/product/b/_/b_a-1_5_3.jpg" alt="Những Nỗi Buồn Cũng Cần Được Yêu Thương - Tô Bình Yên Vẽ Hạnh Phúc 2">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <h2 class="product-name-no-ellipsis">
                                            <a href="https://www.fahasa.com/nhung-noi-buon-cung-can-duoc-yeu-thuong-to-binh-yen-ve-hanh-phuc-2.html?fhs_campaign=FLASHSALE" title="Những Nỗi Buồn Cũng Cần Được Yêu Thương - Tô Bình Yên Vẽ Hạnh Phúc 2">Những Nỗi Buồn Cũng Cần Được Yêu Thương - Tô Bình Yên Vẽ Hạnh Phúc 2</a>
                                        </h2>
                                    </div>
                                    <div class="price-label">
                                        <span class="price m-price-font fhs_center_left">93.840 đ</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div> -->
                <div class="row introduction">
                <div class="col-custom col-sm-5 col-xs-5 wow card_box">
                    <div class="">
                        <div class="image">
                            <a href=""><img
                                    src="https://cdn0.fahasa.com/media/catalog/product/8/9/8934986009400.jpg"
                                    style="width: 180px; height:180px;" alt="Samsung Galaxy S23 Ultra"></a>
                            <p style="margin-top: 23px;">Tập Học Sinh Fluffy Panda - Miền Nam - 4 Ô Ly - 96 Trang 80gsm - The Sun 03</p>
                        </div>
                        <div class="price-c">
                        <div class="giamoi">
                                <b>17.100đ</b>
                            </div>
                            <div class="giacu">
                                <s>19.000 đ</s>
                            </div>
                        </div>
                        <div class="star_rate" style="padding-top: 10px;">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span style="font-size: 10px;">(0)</span>
                        </div>
                        <div class="install-0-tag">
                                10%
                    </div>
                    </div>
                </div>
                <!-- 2 -->
                <div class="col-custom col-sm-5 col-xs-5 wow card_box">
                    <div class="">
                        <div class="image">
                            <a href=""><img
                                    src="https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011236-mau4.jpg"
                                    style="width: 180px; height:180px;" alt="Samsung Galaxy S23 Ultra"></a>
                            <p style="margin-top: 23px;">Tập Học Sinh Fluffy Panda - Miền Nam - 4 Ô Ly - 96 Trang 80gsm - The Sun 03</p>
                        </div>
                        <div class="price-c">
                        <div class="giamoi">
                                <b>10.450đ</b>
                            </div>
                            <div class="giacu">
                                <s>12.500 đ</s>
                            </div>
                        </div>
                        <div class="star_rate" style="padding-top: 10px;">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span style="font-size: 10px;">(0)</span>
                        </div>
                    </div>
                    <div class="install-0-tag">
                                10%
                    </div>
                </div>
                <!-- 3 -->
                <div class="col-custom col-sm-5 col-xs-5 wow card_box">
                    <div class="">
                        <div class="image">
                            <a href=""><img
                                    src="https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011403-mau3.jpg"
                                    style="width: 180px; height:180px;"></a>
                            <p style="margin-top: 23px;">Tập Học Sinh Fluffy Panda - Miền Nam - 4 Ô Ly - 96 Trang 80gsm - The Sun 03</p>
                        </div>
                        <div class="price-c">
                        <div class="giamoi">
                                <b>7.650đ</b>
                            </div>
                            <div class="giacu">
                                <s>8.500 đ</s>
                            </div>
                        </div>
                        <div class="star_rate" style="padding-top: 10px;">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span style="font-size: 10px;">(0)</span>
                        </div>
                    </div>
                    <div class="install-0-tag">
                                10%
                    </div>
                </div>
                <div class="col-custom col-sm-5 col-xs-5 wow card_box">
                    <div class="">
                        <div class="image">
                            <a href=""><img
                                    src="https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011304.jpg"
                                    style="width: 180px; height:180px;" alt="Samsung Galaxy S23 Ultra"></a>
                            <p style="margin-top: 23px;">Tập Học Sinh Fluffy Panda - Miền Nam - 4 Ô Ly - 96 Trang 80gsm - The Sun 03</p>
                        </div>
                        <div class="price-c">
                        <div class="giamoi">
                                <b>16.000đ</b>
                            </div>
                            <div class="giacu">
                                <s>14.000 đ</s>
                            </div>
                        </div>
                        <div class="star_rate" style="padding-top: 10px;">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span style="font-size: 10px;">(0)</span>
                        </div>
                    </div>
                    <div class="install-0-tag">
                                10%
                    </div>
                </div>
                <div class="col-custom col-sm-5 col-xs-5 wow card_box">
                    <div class="">
                        <div class="image">
                            <a href=""><img
                                    src="https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011236-mau1-1.jpg"
                                    style="width: 180px; height:180px;" alt="Samsung Galaxy S23 Ultra"></a>
                            <p style="margin-top: 23px;">Tập Học Sinh Fluffy Panda - Miền Nam - 4 Ô Ly - 96 Trang 80gsm - The Sun 03</p>
                        </div>
                        <div class="price-c">
                            <div class="giamoi">
                                <b>12.600đ</b>
                            </div>
                            <div class="giacu">
                                <s>14.000 đ</s>
                            </div>
                        </div>
                        <div class="star_rate" style="padding-top: 10px;">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span style="font-size: 10px;">(0)</span>
                        </div>
                    </div>
                    <div class="install-0-tag">
                                10%
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</body>
