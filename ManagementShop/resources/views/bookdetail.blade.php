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

    <link
        href="https://fonts.googleapis.com/css?family=Great+Vibes|Open+Sans:300,400,600,700,800|Raleway:200,300,400,500,600,700,900"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}" >

</head>

<body>
@include('banner')
    <div class="wrapper">
        <div class="neardiv">
            <div class="row bookdetail">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011236-mau3-1.jpg?_gl=1*1hwe8sf*_ga*MTI1MDc0NzQwNS4xNzE1MTMzNTE3*_ga_460L9JMC2G*MTcxNTU4MzcxMi4yNy4xLjE3MTU1ODQ4NzkuMTAuMC4xNTU1NzY1MjMw*_gcl_au*MTIwMzEyODAuMTcxNTEzMzUxNw.." class="img-thumbnail img-clickable" onclick="changeImage('https:https://cdn0.fahasa.com/media/catalog/product/b/_/b_a-in-g_c-nh_-c_-n_ng.jpg')">
                            <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011250-_21__2.jpg?_gl=1*v3131r*_ga*MTI1MDc0NzQwNS4xNzE1MTMzNTE3*_ga_460L9JMC2G*MTcxNTU4MzcxMi4yNy4xLjE3MTU1ODQ4NzkuMTAuMC4xNTU1NzY1MjMw*_gcl_au*MTIwMzEyODAuMTcxNTEzMzUxNw.." class="img-thumbnail img-clickable" onclick="changeImage('https:https://cdn0.fahasa.com/media/catalog/product/b/_/b_a-in-g_c-nh_-c_-n_ng.jpg')">
                            <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011250-_22__2.jpg?_gl=1*v3131r*_ga*MTI1MDc0NzQwNS4xNzE1MTMzNTE3*_ga_460L9JMC2G*MTcxNTU4MzcxMi4yNy4xLjE3MTU1ODQ4NzkuMTAuMC4xNTU1NzY1MjMw*_gcl_au*MTIwMzEyODAuMTcxNTEzMzUxNw.." class="img-thumbnail img-clickable" onclick="changeImage('https:https://cdn0.fahasa.com/media/catalog/product/b/_/b_a-in-g_c-nh_-c_-n_ng.jpg')">
                            <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011250-_20__2.jpg?_gl=1*v3131r*_ga*MTI1MDc0NzQwNS4xNzE1MTMzNTE3*_ga_460L9JMC2G*MTcxNTU4MzcxMi4yNy4xLjE3MTU1ODQ4NzkuMTAuMC4xNTU1NzY1MjMw*_gcl_au*MTIwMzEyODAuMTcxNTEzMzUxNw.." class="img-thumbnail img-clickable" onclick="changeImage('https:https://cdn0.fahasa.com/media/catalog/product/b/_/b_a-in-g_c-nh_-c_-n_ng.jpg')">
                            <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011250-_24__2.jpg" class="img-thumbnail img-clickable" onclick="changeImage('https:https://cdn0.fahasa.com/media/catalog/product/b/_/b_a-in-g_c-nh_-c_-n_ng.jpg')">
                        </div>
                        <div class="col-md-9 image-container">
                            <img src="https://cdn0.fahasa.com/media/catalog/product/8/9/8934986011236-mau3-1.jpg" class="img-responsive" style="width: 100%; height: auto;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <button class="shopping add" type="submit">
                                <p><i class="fa-solid fa-cart-shopping notification-icon-2" style="color: #CC0000"></i> Thêm vào giỏ hàng</p>
                            </button>
                        </div>
                        <div class="col-md-6">
                            <button class="shopping buy" type="submit">
                                <b>Mua ngay</b>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 information-book">
                    <h1 class="header-title">Tập Học Sinh Fluffy Panda - Miền Nam - 4 Ô Ly - 96 Trang 80gsm - The Sun 01</h1>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="content-bookdetail supplier">Nhà cung cấp: <b class="anser-supplier" style="color: #3399FF; font-size: 13px;">Fahasa Print</b></p>
                                <p class="content-bookdetail publishing-company">Nhà xuất bản: <b class="anser" style="font-size: 13px;">Việt Nam</b></p>
                            </div>
                            <div class="col-md-6 more-detail-book">
                                <p class="content-bookdetail author">Tác giả: <b class="anser" style="font-size: 13px;">FAHASA</b></p>
                                <p class="content-bookdetail cover-form">Hình thức bìa: <b class="anser" style="font-size: 13px;">Bìa cứng</b></p>
                            </div>
                        </div>
                        <div class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="review-no">(0 đánh giá)</span>
                        </div>
                        <div class="price-section">
                            <span class="newprice"><strong>10.450 đ</strong></span>
                            <span class="oddprice"><strike>12.500 đ</strike></span>
                            <div class="discount-price">-16%</div>
                        </div>
                        <div class="row purchasing-policy">
                            <div class="col-md-3">
                                <p class="content-bookdetail policy">Chính sách đổi trả</p>
                                <p style="font-size: 15px;"><strong style="color: #5B5656">Số lượng: </strong></p>
                            </div>
                            <div class="col-md-5">
                                <span class="content-bookdetail ans-policy">Đổi trả sản phẩm trong 30 ngày<span class="see-more" style="color: #3399FF; font-size: 13px;"> Xem thêm</span></span>
                                <div class="order-number">
                                    <button class="decrease">-</button>
                                    <input type="text" class="quantity" value="1" readonly>
                                    <button class="increase">+</button>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="neardiv">
            <div>
                <span><img src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/event_cart_2/ico_coupon_red.svg?q=105643">
                <strong style="font-size: 17px;">ƯU ĐÃI LIÊN QUAN</strong></span>
            </div>

            <div class="promo-tabs">
                <button class="tab" onclick="showTab(event, 'all')">Tất cả</button>
                <button class="tab" onclick="showTab(event, 'discount')">Mã giảm giá</button>
                <button class="tab" onclick="showTab(event, 'ship')">Mã vận chuyển</button>
                <button class="tab" onclick="showTab(event, 'order')">Mã thanh toán</button>
            </div>
            <div id="all" class="content">
                <!-- Content for All tab -->
                <p>This is the content for the All tab.</p>
            </div>
            <div id="featured" class="content">
                <!-- Content for Featured tab -->
                <p>This is the content for the Featured tab.</p>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="neardiv">
            <b style="font-size: 17px;">FAHASA GIỚI THIỆU</b>
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
    <div class="wrapper">
        <div class="neardiv">
            <div style="padding-bottom: 15px;">
                <b style="font-size: 20px;">Thông tin sản phẩm</b>
            </div>
            <div class="iformation-pro-one">
                <div class="row">
                    <div class="col-md-3">
                        <div class="ifor-product-one contentmain">Mã Hàng</div>
                        <div class="ifor-product-one contentmain">Tên Nhà Cung Cấp</div>
                        <div class="ifor-product-one contentmain">Thương Hiệu</div>
                        <div class="ifor-product-one contentmain">Xuất Xứ Thương Hiệu</div>
                        <div class="ifor-product-one contentmain">Nơi Gia Công & Sản Xuất</div>
                        <div class="ifor-product-one contentmain">Màu Sắc</div>
                        <div class="ifor-product-one contentmain">Chất Liệu</div>
                        <div class="ifor-product-one contentmain">Trọng Lượng (gr)</div>
                        <div class="ifor-product-one contentmain">Kích Thước Bao Bì</div>
                        <div class="ifor-product-one contentmain">Sản phẩm bán chạy nhất</div>
                    </div>
                    <div class="col-md-9">
                        <div class="ifor-product-one">8934986011403-mau3</div>
                        <div class="ifor-product-one"><a href="#" style="color: #3399FF; text-decoration: none;">Fahasa Print</a></div>
                        <div class="ifor-product-one"><a href="#" style="color: #3399FF; text-decoration: none;">The Sun</a></div>
                        <div class="ifor-product-one">Việt Nam</div>
                        <div class="ifor-product-one">Việt Nam</div>
                        <div class="ifor-product-one"><a href="#" style="color: #3399FF; text-decoration: none;">Nhiều màu</a></div>
                        <div class="ifor-product-one">Giấy</div>
                        <div class="ifor-product-one">120</div>
                        <div class="ifor-product-one">24 x 17 x 0.5 cm</div>
                        <div><a href="#" style="color: #3399FF; text-decoration: none;">Top 100 sản phẩm Tập - Vở bán chạy của tháng</a></div>
                    </div>
                </div>
                <div>
                    Giá sản phẩm trên Fahasa.com đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như Phụ phí đóng gói, phí vận chuyển, phụ phí hàng cồng kềnh,...
                </div>
                <div style="color: #CC0000; ">
                    Chính sách khuyến mãi trên Fahasa.com không áp dụng cho Hệ thống Nhà sách Fahasa trên toàn quốc
                </div>
            </div>
            <div class="iformation-pro-second" style="padding-top: 18px;">
                <div class="ifor-product-second"><b>Tập Học Sinh Chống Lóa Fluffy Panda - 4 Ô Ly - 48 Trang 100gsm - The Sun </b>với mặt giấy láng mịn, viết êm tay, tạo nét chữ đẹp. Giấy viết không bị lem, độ trắng không làm hại mắt, ăn mực hầu hết các loại bút, giấy viết không nhòe, không thấm mực ra trang sau.</div>
                <div class="ifor-product-second">Quyển tập có đường kẻ ô ly rõ ràng, đều đặn giúp các em học sinh viết chữ đẹp hơn, nắn nót hơn.</div>
                <div class="ifor-product-second">Bìa vở trang trí hình ảnh dễ thương, màu sắc nổi bật, tạo cảm hứng cho các em trong quá trình học tập.</div>
                <div class="ifor-product-second">Sản phẩm sẽ là người bạn đồng hành giúp các bạn nhỏ học tốt hơn, góp phần đưa các em vươn tới sức mạnh của tri thức.</div>
            </div>
            <div>
                    <button class="watch-more"><b>Xem thêm</b></button>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="neardiv">
            <div class="">
                <b style="font-size: 1.45em; font-weight: 700;">Đánh giá sản phẩm</b>
            </div>
            <div class="row" style="padding-top: 10px;">
                <div class="col-md-6">
                    <div class="columb">
                        <div class="col-md-3">
                            <span style="margin-left: 10px; font-weight: bold; font-size: 50px;">0</span><span style="font-weight: bold; font-size: 30px;">/5</span>
                            <div class="star_rate" style="padding-top: 10px;">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <p style="font-size: 12px; margin-top: 5px;">(0 đánh giá)</p>
                        </div>
                        </div>
                        <div class="col-md-7 star-rating">
                            <div class="rating-bar" id="rating-5-star">
                                <span class="number-star">5 sao</span>
                                <div class="bar-container">
                                    <div class="bar" style="width: 0%;" id="bar-5"></div>
                                </div>
                                <span id="percent-5" class="percent number-star">0%</span>
                            </div>
                            <div class="rating-bar" id="rating-4-star">
                                <span class="number-star">4 sao</span>
                                <div class="bar-container">
                                    <div class="bar" style="width: 0%;" id="bar-4"></div>
                                </div>
                                <span id="percent-4" class="percent number-star">0%</span>
                            </div>
                            <div class="rating-bar" id="rating-3-star">
                                <span class="number-star">3 sao</span>
                                <div class="bar-container">
                                    <div class="bar" style="width: 0%;" id="bar-3"></div>
                                </div>
                                <span id="percent-3" class="percent number-star">0%</span>
                            </div>
                            <div class="rating-bar" id="rating-2-star">
                                <span class="number-star">2 sao</span>
                                <div class="bar-container">
                                    <div class="bar" style="width: 0%;" id="bar-2"></div>
                                </div>
                                <span id="percent-2" class="percent number-star">0%</span>
                            </div>
                            <div class="rating-bar" id="rating-1-star">
                                <span class="number-star">1 sao</span>
                                <div class="bar-container">
                                    <div class="bar" style="width: 0%;" id="bar-1"></div>
                                </div>
                                <span id="percent-1" class="percent number-star">0%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 login-signup">
                Chỉ có thành viên mới có thể viết nhận xét.Vui lòng <a href="#" style="color: #3399FF; text-decoration: none;"> đăng nhập</a> hoặc <a href="#" style="color: #3399FF; text-decoration: none;"> đăng ký</a>.
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="neardiv">
            <div class="product-view-policy">
                <div class="row product-attribute" style="display: flex; text-align: center; justify-content: center;">
                    <div class="item col-md-4">
                        <div class="item-content" data-toggle="modal" data-target="#policyModal1">
                            <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-1-2020/icon/ico_shop_1.png">
                            <span>
                                <a>Chính Sách Khách Sỉ</a>
                            </span>
                        </div>
                    </div>
                    <div class="item col-md-4">
                        <div class="item-content" data-toggle="modal" data-target="#policyModal2">
                            <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-1-2020/icon/ico_truck.png">
                            <span>
                                <a>Thời Gian Giao Hàng</a>
                            </span>
                        </div>
                    </div>
                    <div class="item col-md-4">
                        <div class="item-content" data-toggle="modal" data-target="#policyModal3">
                            <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-1-2020/icon/ico_transfer.png">
                            <span>
                                <a>Chính Sách Đổi Trả</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="policyModal1" tabindex="-1" role="dialog" aria-labelledby="policyModalLabel1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="policyModalLabel1" style="text-align: center; color: blue; font-weight: bold;">Chính Sách Khách Sỉ</h4>
                </div>
                <div class="modal-body" style="font-size: 12px">
                    <div style="padding-bottom: 30px;">Hiện nay, do mức chiết khấu trên Fahasa.com rất cao, đặc biệt vào các thời điểm chạy chương trình. Do đó đối với mỗi chương trình số lượng sản phẩm giảm sốc có giới hạn nhất định, vì vậy để đảm bảo quyền lợi của từng khách hàng, chúng tôi xin thông báo tiêu chí xét “Đơn Hàng Sỉ” và chính sách như sau:</div>
                    <div style="padding-bottom: 5px;">1. Đơn hàng được gọi là “đơn hàng sỉ” khi có tổng giá trị các đơn hàng trong 1 ngày có giá trị: từ 3.000.000 đồng (Ba triệu đồng) trở lên.</div>
                    <div>- Các đơn hàng có cùng thông tin người mua hàng (cùng số điện thoại, cùng email hoặc cùng địa chỉ nhận hàng) thì được tính là đơn hàng của 1 khách hàng.</div>
                    <div style="padding-bottom: 5px;">2. Chính sách giá (% chiết khấu giảm giá). Đây là chính sách chung chỉ mang tính tương đối. Xin quý khách vui lòng liên lạc với Fahasa để có chính sách giá chính xác nhất:</div>
                    <div>- Đối với Nhóm hàng sách kinh tế, Văn học: áp dụng mức giảm giá trên web tối đa không vượt quá 30%.</div>
                    <div>- Đối với Nhóm hàng sách thiếu nhi và tâm lý kỹ năng: áp dụng mức giảm giá trên web tối đa không vượt quá 20%.</div>
                    <div>- Đối với Nhóm hàng sách từ điển và sách ngoại văn : áp dụng mức giảm giá trên web tối đa không vượt quá 10%.</div>
                    <div>- Đối với Nhóm hàng văn phòng phẩm, đồ chơi, dụng cụ học sinh: áp dụng mức giảm giá trên web tối đa không vượt quá 15%.</div>
                    <div style="padding-bottom: 30px;">- Đối với Nhóm hàng giấy photo, sản phẩm điện tử, văn hóa phẩm: áp dụng mức giảm giá trên web tối đa không vượt quá 5%.</div>
                    <div>Quý khách có nhu cầu mua sỉ, vui lòng liên hệ phòng kinh doanh Fahasa.com: 1900 63 64 67 hoặc Email: info@fahasa.com.vn.</div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="policyModal2" tabindex="-1" role="dialog" aria-labelledby="policyModalLabel2" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="policyModalLabel1" style="text-align: center; color: blue; font-weight: bold;">Thời Gian Giao Hàng</h4>
                </div>
                <div class="modal-body" style="font-size: 12px">
                    <div style="padding-bottom: 10px;">THÔNG TIN ĐÓNG GÓI, VẬN CHUYỂN HÀNG</div>
                    <div style="padding-bottom: 10px;">Với đa phần đơn hàng, Fahasa.com cần vài giờ làm việc để kiểm tra thông tin và đóng gói hàng. Nếu các sản phẩm đều có sẵn hàng, Fahasa.com sẽ nhanh chóng bàn giao cho đối tác vận chuyển. Nếu đơn hàng có sản phẩm sắp phát hành, Fahasa.com sẽ ưu tiên giao những sản phẩm có hàng trước cho Quý khách hàng.</div>
                    <div style="padding-bottom: 10px;">Trong một số trường hợp, hàng nằm không có sẵn tại kho gần nhất, thời gian giao hàng có thể chậm hơn so với dự kiến do điều hàng. Các phí vận chuyển phát sinh, Fahasa.com sẽ hỗ trợ hoàn toàn.</div>
                    <div style="padding-bottom: 10px;">Thời gian giao hàng không tính thứ 7, Chủ nhật, các ngày Lễ, Tết và không bao gồm tuyến huyện đảo xa.</div>
                    <div style="padding-bottom: 10px;">THỜI GIAN VÀ CHI PHÍ GIAO HÀNG TẠI TỪNG KHU VỰC TRONG LÃNH THỔ VIỆT NAM:</div>
                    <div style="padding-bottom: 10px;">1. Nội thành TP.HCM và Hà Nội</div>
                    <div>Thời gian: 1-2 ngày</div>
                    <div style="padding-bottom: 10px;">Chi phí: 15.000đ/ đơn hàng (không giới hạn giá trị, áp dụng từ 02.11.2021)</div>
                    <div style="padding-bottom: 10px;">2. Các tỉnh thành khác</div>
                    <div>Thời gian: 2-3 ngày</div>
                    <div style="padding-bottom: 10px;">Chi phí: 30.000đ/ đơn hàng (không giới hạn giá trị, áp dụng từ 02.11.2021)</div>
                    <div>Lưu ý: Từ ngày 20/06/2022, Fahsa.com sẽ phụ thu thêm 5.000đ cho đơn hàng chứa sản phẩm Tập học sinh (số lượng từ 5 cuốn trở lên) hoặc Sách Giáo Khoa, cộng trực tiếp vào chi phí giao hàng thông thường.</div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="policyModal3" tabindex="-1" role="dialog" aria-labelledby="policyModalLabel3" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="policyModalLabel3" style="text-align: center; color: blue; font-weight: bold;">Chính Sách Đổi Trả</h4>
                </div>
                <div class="modal-body" style="font-size: 12px">
                    <!-- Nội dung Chính Sách Đổi Trả -->
                    <div style="padding-bottom: 10px;">CHÍNH SÁCH ĐỔI TRẢ SẢN PHẨM</div>
                    <div style="padding-bottom: 10px;">Fahasa cam kết bảo vệ quyền lợi của khách hàng khi mua hàng trên Fahasa.com. Trong trường hợp sản phẩm Quý khách nhận được không đúng với đơn đặt hàng hoặc có vấn đề về chất lượng, Quý khách có thể đổi trả sản phẩm theo các điều kiện sau:</div>

                    <div style="padding-bottom: 10px;">1. ĐIỀU KIỆN ĐỔI TRẢ:</div>
                    <div>- Sản phẩm còn nguyên vẹn, chưa qua sử dụng, đầy đủ tem mác, hóa đơn mua hàng.</div>
                    <div>- Thời gian yêu cầu đổi trả không quá 7 ngày kể từ ngày nhận hàng.</div>
                    <div>- Sản phẩm không nằm trong danh mục hàng không được đổi trả (đã được ghi chú rõ ràng trong phần mô tả sản phẩm).</div>

                    <div style="padding-bottom: 10px;">2. QUY TRÌNH ĐỔI TRẢ:</div>
                    <div>- Bước 1: Quý khách liên hệ với bộ phận chăm sóc khách hàng qua số điện thoại 1900 63 64 67 hoặc gửi email về địa chỉ info@fahasa.com.vn để thông báo về việc đổi trả hàng.</div>
                    <div>- Bước 2: Fahasa xác nhận thông tin và hướng dẫn Quý khách gửi sản phẩm cần đổi trả về địa chỉ của công ty.</div>
                    <div>- Bước 3: Sau khi nhận và kiểm tra sản phẩm, Fahasa sẽ tiến hành đổi sản phẩm mới hoặc hoàn tiền cho Quý khách trong thời gian sớm nhất.</div>

                    <div style="padding-bottom: 10px;">3. CHI PHÍ ĐỔI TRẢ:</div>
                    <div>- Fahasa chịu hoàn toàn chi phí vận chuyển đổi trả hàng trong trường hợp lỗi phát sinh từ phía Fahasa.</div>
                    <div>- Trong các trường hợp khác, Quý khách vui lòng chịu phí vận chuyển đổi trả hàng.</div>

                    <div style="padding-bottom: 10px;">4. THỜI GIAN XỬ LÝ:</div>
                    <div>- Thời gian xử lý yêu cầu đổi trả hàng là từ 5-7 ngày làm việc kể từ ngày Fahasa nhận được sản phẩm.</div>

                    <div style="padding-bottom: 10px;">Mọi thắc mắc hoặc cần hỗ trợ thêm, Quý khách vui lòng liên hệ bộ phận chăm sóc khách hàng của Fahasa qua số điện thoại hoặc email để được giải đáp.</div>
                </div>
            </div>
        </div>
    </div>

    @include('footer')

    <script>
//         $(document).ready(function () {
//             $('.dropdown-submenu a.dropdown-toggle').on("mouseenter", function (e) {
//                 $(this).next('ul').toggle();
//                 e.stopPropagation();
//                 e.preventDefault();
//             });

//             $('.dropdown-submenu').on("mouseleave", function (e) {
//                 $(this).find('.dropdown-menu').hide();
//                 e.stopPropagation();<div class="container mt-3 mb-3">
//             });
//         });

        $(document).ready(function() {
            $('.navbar-nav > li > a, .btn').hover(function() {
                $(this).css('background-color', 'transparent');
            });
        });

        $(document).ready(function() {
            var quantity = 1;
            $('.increase').click(function () {
                quantity++;
                $('.order-number').text(quantity);
            });

            $('.decrease').click(function () {
                if (quantity > 1) {
                    quantity--;
                    $('.order-number').text(quantity);
                }
            });
        });
        //mã giảm giá
        function showTab(event, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("content");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tab");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabName).style.display = "block";
            event.currentTarget.className += " active";
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Initialize the first tab to be visible
            document.getElementById("all").style.display = "block";
            document.getElementsByClassName("tab")[0].className += " active";
        });

        //
        $jq(window).on('myInfo_loaded', function(){
            if(fhs_account.isLoggined()){
                $jq('.footer-static-content .login_link').parent().append('<li class="last"><a href="https://www.fahasa.com//tryout/seriesbook/">Sách theo bộ</a></li>');
                $jq('.footer-static-content .login_link').remove();
            }
            });
        //
        $(document).ready(function() {
            $('.item-content').each(function(index) {
            $(this).on('click', function() {
                $('#policyModal' + (index + 1)).modal('show');
            });
            });
        });

    </script>
    <script type="text/javascript" src="./Mobile_shop/js/slick.min.js"></script>
    <script src="./Mobile_shop/js/venobox.min.js"></script>
    <script type="text/javascript" src="./Mobile_shop/js/custom.js"></script>
</body>

</html>
