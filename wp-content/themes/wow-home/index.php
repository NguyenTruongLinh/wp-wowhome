<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wow-home
 */

get_header();
?>

<section class="section-banner pt-24 pb-10 text-center xl:px-0 px-4">
    <h1 class="relative text-center text-white md:text-4xl text-2xl font-bold tracking-widest color-primary" data-aos="fade-down" data-aos-duration="1000">BẠN ĐANG TÌM KIẾM</h1>
    <ul class="relative flex md:flex-row flex-col justify-center items-center mt-6 mb-12" data-aos="zoom-in" data-aos-duration="1000">
        <li class="md:mr-20 md:mb-0 mb-8">
            <p class="text-white text-center md:mb-4 mb-2 md:text-base text-sm">NGUUỒN SẢN PHẨM MINH BẠCH</p>
            <div class="img-cover">
                <img src="<?php echo get_template_directory_uri() ?>/images/icon/note-check.png" alt="note-check">
            </div>
        </li>
        <li class="md:mr-20 md:mb-0 mb-8">
            <p class="text-white text-center md:mb-4 mb-2 md:text-base text-sm">MỨC PHÍ MÔI GIỚI HẤP DẪN</p>
            <div class="img-cover">
                <img src="<?php echo get_template_directory_uri() ?>/images/icon/dolla-cent.png" alt="dolla">
            </div>
        </li>
        <li>
            <p class="text-white text-center md:mb-4 mb-2 md:text-base text-sm">HOA HỒNG LŨY TIẾN THEO CẤP BẬC</p>
            <div class="img-cover">
                <img src="<?php echo get_template_directory_uri() ?>/images/icon/market-growup.png" alt="market">
            </div>
        </li>
    </ul>
    <a href="javascript:void(0);" class="btn btn-primary btn-shine b24-web-form-popup-btn-15" data-aos="fade-up" data-aos-duration="1000">Gia nhập WOWHOMES</a>
</section>

<section class="section-introduce text-center py-6 xl:px-0 px-4">
    <h2 class="md:text-3xl text-2xl tracking-wider font-medium" data-aos="fade-down" data-aos-duration="1000">GIỚI THIỆU WOWHOMES</h2>
    <p class="md:text-base text-sm max-w-6xl mx-auto text-justify mt-4 mb-4" data-aos="zoom-in-up" data-aos-duration="1000">Định vị trở thành đơn vị phát triển, hệ thống phân phối bất động sản hàng đầu tại Việt Nam, WOWHOMES tự hào là thương hiệu tiên phong và uy tín trong phân khúc nghỉ dưỡng, đất nền ven biển và mô hình đầu tư xanh bền vững có sự cam kết nhất quán
        cùng chính sách bán hàng hấp dẫn nhất thị trường. Với chiến lược kinh doanh rõ ràng ngay từ những ngày đầu thành lập, WowHomes tự tin mang đến cho quý đối tác những cơ hội hợp tác lâu dài, cùng mô hình BROKER hiện đại nhất, nhằm tạo ra giá
        trị gia tăng thu nhập tốt nhất, thăng hoa sự nghiệp từ chính những sản phẩm Bất động sản ưu Việt.</p>
    <a class="btn btn-white-outline" href="#" data-aos="fade-up" data-aos-duration="1000">Tìm hiểu thêm</a>
</section>

<section class="section-policy md:py-24 py-16 xl:px-0 px-4">
    <div class="container mx-auto">
        <div class="lg:flex block">
            <div class="lg:w-5/12 lg:pr-5" data-aos="fade-right" data-aos-duration="1000">
                <img class="w-full" src="<?php echo get_template_directory_uri() ?>/images/bg-policy.png" alt="policy">
            </div>
            <div class="lg:w-7/12 lg:pl-5 lg:mt-0 mt-6 text-center" data-aos="zoom-in-up" data-aos-duration="1000">
                <h3 class="md:text-3xl text-2xl font-medium">CHÍNH SÁCH BROKER HIỆN ĐẠI</h3>
                <ul class="flex md:flex-nowrap flex-wrap items-center justify-around mt-5">
                    <li class="md:w-4/12 w-6/12 border-r">
                        <p class="md:text-base text-sm">Tổng phí môi giới 6% cao nhất thị trường </p>
                        <span class="md:text-5xl text-2xl font-bold color-primary">6%</span>
                    </li>
                    <li class="md:w-4/12 w-6/12 md:border-r">
                        <p class="md:text-base text-sm">Mô hình Broker Thu nhập không giới hạn </p>
                        <span class="md:text-6xl text-2xl leading-none font-bold color-primary">∞</span>
                    </li>
                    <li class="md:w-4/12 w-6/12 md:mt-0 mt-4">
                        <p class="md:text-base text-sm">Hoa hồng lũy tiến theo từng cấp bậc lên đến </p>
                        <span class="md:text-5xl text-2xl font-bold color-primary">79%</span>
                    </li>
                </ul>
                <p class="mt-6">Thưởng nóng hấp dẫn trị giá đến </p>
                <h2 class="md:text-5xl text-2xl font-bold color-primary">50 Triệu VNĐ</h2>
                <ul class="flex justify-around mb-6 md:mt-3 mt-1">
                    <li class="md:w-4/12 w-6/12 md:text-base text-sm pr-4 border-r">Nhận ngay món quà sức khỏe BHNT khi thăng cấp </li>
                    <li class="md:w-4/12 w-6/12 md:text-base text-sm pl-4">Sở hữu bộ Vest đẳng cấp đạt chuẩn WowHomes </li>
                </ul>
                <a href="javascript:void(0);" class="btn btn-primary btn-shine b24-web-form-popup-btn-15">Gia nhập WOWHOMES</a>
            </div>
        </div>
    </div>
</section>

<section class="section-new_direction py-10">
    <div class="container mx-auto xl:px-0 px-4 md:text-left text-center">
        <h2 class="md:text-3xl text-2xl font-medium mb-4" data-aos="fade-down" data-aos-duration="1000">HƯỚNG ĐI MỚI TẠO NÊN <br> THƯƠNG HIỆU TIÊN PHONG</h2>
        <p class="text-justify max-w-2xl md:text-base text-sm mb-2" data-aos="fade-right" data-aos-duration="1000">Bất động sản là một loại tài sản toàn cầu mang giá trị hàng nghìn tỷ đô la, nhưng phần lớn nó vẫn chưa được sử dụng bởi công nghệ. Quyết định mua và bán là một trong những quyết định quan trọng nhất mà một người có thể đưa ra trong cuộc sống.
            Nhưng ngày nay, phần lớn các quyết định đó đang dựa trên bản năng cảm tính hoặc những thông tin lỗi thời.
        </p>
        <p class="text-justify max-w-2xl md:text-base text-sm mb-6" data-aos="fade-right" data-aos-duration="1000">Tại WowHomes, với bộ máy vận hành chuyên nghiệp, kết hợp với công nghệ quản lý tiên tiến, chúng tôi tin rằng các đại lý và đối tác xứng đáng trải nghiệm những cách thức kinh doanh hiện đại trong lĩnh vực này. Chúng tôi xây dựng hệ thống công
            nghệ cho bất động sản, thay đổi tư duy bản thân, giúp đối tác dễ dàng hơn trong hành trình nâng tầm thương hiệu cá nhân.
        </p>
        <a href="javascript:void(0);" class="btn btn-primary btn-shine b24-web-form-popup-btn-15" data-aos="fade-up" data-aos-duration="1000">Gia nhập WOWHOMES</a>
    </div>
    <div class="reason-choose-wow mt-10 py-10">
        <div class="container-fluid mx-auto flex lg:flex-row flex-col-reverse items-center">
            <ul class="lg:w-8/12 w-full flex md:flex-nowrap flex-wrap justify-around" data-aos="fade-up" data-aos-duration="1000">
                <li class="md:w-unset w-6/12 mb-4">
                    <div class="img-cover w-24 mx-auto">
                        <img class="w-full" src="<?php echo get_template_directory_uri() ?>/images/icon/like-box.png" alt="like">
                    </div>
                    <p class="text-center text-white font-medium md:mt-4 mt-2">UY TÍN</p>
                </li>
                <li class="md:w-unset w-6/12 mb-4">
                    <div class="img-cover w-24 mx-auto">
                        <img class="w-full" src="<?php echo get_template_directory_uri() ?>/images/icon/growup-box.png" alt="growup">
                    </div>
                    <p class="text-center text-white font-medium md:mt-4 mt-2">KINH NGHIỆM</p>
                </li>
                <li class="md:w-unset w-6/12 mb-4">
                    <div class="img-cover w-24 mx-auto">
                        <img class="w-full" src="<?php echo get_template_directory_uri() ?>/images/icon/heart-box.png" alt="heart">
                    </div>
                    <p class="text-center text-white font-medium md:mt-4 mt-2">TẬN TÂM</p>
                </li>
                <li class="md:w-unset w-6/12 mb-4">
                    <div class="img-cover w-24 mx-auto">
                        <img class="w-full" src="<?php echo get_template_directory_uri() ?>/images/icon/multiple-box.png" alt="multiple">
                    </div>
                    <p class="text-center text-white font-medium md:mt-4 mt-2">ĐA DẠNG</p>
                </li>
                <li class="md:w-unset w-6/12">
                    <div class="img-cover w-24 mx-auto">
                        <img class="w-full" src="<?php echo get_template_directory_uri() ?>/images/icon/check-mark-box.png" alt="check-mark">
                    </div>
                    <p class="text-center text-white font-medium mt-4">CHUYÊN NGHIỆP</p>
                </li>
            </ul>
            <div class="lg:w-4/12 w-full lg:text-right text-center">
                <h3 class="lg:pr-10 text-2xl font-bold text-white relative z-10 lg:mb-0 mb-6" data-aos="fade-down" data-aos-duration="1000">Tại sao khách hàng <br> chọn WOWHOMES?</h3>
            </div>
        </div>
    </div>
</section>

<section class="section-benefit md:py-16 py-10 xl:px-0 px-4">
    <div class="container mx-auto">
        <div class="lg:flex items-center">
            <div class="lg:w-6/12 lg:pr-4">
                <h2 class="md:text-3xl text-2xl font-medium mb-6" data-aos="fade-right" data-aos-duration="1000">LỢI ÍCH KHI ĐỒNG HÀNH CÙNG WOWHOMES</h2>
                <div class="md:flex mb-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="md:w-6/12 md:pr-5">
                        <div class="flex items-center pb-3">
                            <div class="cover-img mr-6">
                                <img class="" src="<?php echo get_template_directory_uri() ?>/images/icon/benefit/book.png" alt="book">
                            </div>
                            <p class="text-sm text-justify">Được đào tạo bài bản, chuyên nghiệp về kỹ năng bán hàng.</p>
                        </div>
                        <div class="flex items-center border-t pb-3 pt-3">
                            <div class="cover-img mr-5">
                                <img class="" src="<?php echo get_template_directory_uri() ?>/images/icon/benefit/person-growup.png" alt="person">
                            </div>
                            <p class="text-sm text-justify">Lộ trình thăng tiến rõ ràng.</p>
                        </div>
                        <div class="flex items-center border-t pb-3 pt-3">
                            <div class="cover-img mr-5">
                                <img class="" src="<?php echo get_template_directory_uri() ?>/images/icon/benefit/check-note.png" alt="check-note">
                            </div>
                            <p class="text-sm text-justify">Có chính sách phúc lợi, quyền lợi cụ thể.</p>
                        </div>
                        <div class="flex items-center border-t pt-3">
                            <div class="cover-img mr-5">
                                <img class="" src="<?php echo get_template_directory_uri() ?>/images/icon/benefit/person-group.png" alt="person">
                            </div>
                            <p class="text-sm text-justify">Đội ngũ hỗ trợ Sale chuyên nghiệp, nhiệt tình.</p>
                        </div>
                    </div>
                    <div class="md:w-6/12 md:pl-6">
                        <div class="flex items-center md:border-t-0 border-t md:pt-0 pt-3 pb-3">
                            <div class="cover-img mr-5">
                                <img class="" src="<?php echo get_template_directory_uri() ?>/images/icon/benefit/market.png" alt="market">
                            </div>
                            <p class="text-sm text-justify">Thu nhập không giới hạn tùy vào kỹ năng và kinh nghiệm bán hàng.</p>
                        </div>
                        <div class="flex items-center border-t pb-3 pt-3">
                            <div class="cover-img mr-5">
                                <img class="" src="<?php echo get_template_directory_uri() ?>/images/icon/benefit/hand-dolla.png" alt="hand-dolla">
                            </div>
                            <p class="text-sm text-justify">Phí môi giới cao - trả phí nhanh.</p>
                        </div>
                        <div class="flex items-center border-t pb-3 pt-3">
                            <div class="cover-img mr-5">
                                <img class="" src="<?php echo get_template_directory_uri() ?>/images/icon/benefit/multiple.png" alt="multiple">
                            </div>
                            <p class="text-sm text-justify">Sản phẩm đa dạng <br><strong>Rừng vàng - Biển bạc</strong>.</p>
                        </div>
                        <div class="flex items-center border-t pt-3">
                            <div class="cover-img mr-5">
                                <img class="" src="<?php echo get_template_directory_uri() ?>/images/icon/benefit/connect-person.png" alt="connect-person">
                            </div>
                            <p class="text-sm text-justify">Môi trường làm việc nghiêm túc - năng động - thân thiện - hỗ trợ lẫn nhau.</p>
                        </div>
                    </div>
                </div>
                <div class="text-left text-center">
                    <a href="javascript:void(0);" class="btn btn-primary btn-shine b24-web-form-popup-btn-15" data-aos="fade-up" data-aos-duration="1000">Gia nhập WOWHOMES</a>
                </div>
            </div>
            <div class="lg:w-6/12 lg:pl-8 lg:mt-0 mt-8" data-aos="zoom-in-up" data-aos-duration="1000">
                <div class="owl-benefit owl-carousel owl-theme">
                    <a href="<?php echo get_template_directory_uri() ?>/images/company-img.png" class="item">
                        <img src="<?php echo get_template_directory_uri() ?>/images/company-img.png">
                    </a>
                    <a href="<?php echo get_template_directory_uri() ?>/images/company-img.png" class="item">
                        <img src="<?php echo get_template_directory_uri() ?>/images/company-img.png">
                    </a>
                    <a href="<?php echo get_template_directory_uri() ?>/images/company-img.png" class="item">
                        <img src="<?php echo get_template_directory_uri() ?>/images/company-img.png">
                    </a>
                    <a href="<?php echo get_template_directory_uri() ?>/images/company-img.png" class="item">
                        <img src="<?php echo get_template_directory_uri() ?>/images/company-img.png">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-top_reason md:py-16 py-10 xl:px-0 px-4">
    <div class="container mx-auto relative">
        <h2 class="md:text-3xl text-2xl font-medium mb-6 text-center mb-10" data-aos="zoom-in" data-aos-duration="1000">TOP 6 LÝ DO THAM GIA CHƯƠNG TRÌNH HỢP TÁC KINH DOANH CÙNG WOWHOMES (BROKER)</h2>
        <div class="flex flex-wrap py-4 border-2 border-primary bg-white" data-aos="fade-up" data-aos-duration="1000">
            <div class="lg:w-4/12 md:w-6/12 border-b-2 md:border-r-2 border-primary pb-4 pr-4 pl-4">
                <div class="flex md:items-start items-center">
                    <div class="w-6/12 cover-img">
                        <img src="<?php echo get_template_directory_uri() ?>/images/top-reason/maps.png" alt="maps">
                    </div>
                    <div class="w-6/12 pl-4">
                        <h4 class="text-sm font-medium mb-2">VỊ TRÍ CHIẾN LƯỢC</h4>
                        <p class="text-xs text-justify">Cách thủ đô Hà Nội khoảng 150km phía Đông Bắc, là điểm đầu tiên của Việt Nam có 2 tuyến hành lang kinh tế Nam Ninh (Trung Quốc) và hành lang Xuyên Á Nam Ninh - Singapore, kết nối Lạng Sơn với Hà Nội, Hải Phòng, Quảng Ninh</p>
                    </div>
                </div>
            </div>
            <div class="lg:w-4/12 md:w-6/12 border-b-2 lg:border-r-2 border-primary md:pt-0 pt-4 pb-4 pr-4 pl-4">
                <div class="flex md:items-start items-center md:flex-row flex-row-reverse">
                    <div class="w-6/12 cover-img">
                        <img src="<?php echo get_template_directory_uri() ?>/images/top-reason/high-way.png" alt="high-way">
                    </div>
                    <div class="w-6/12 md:pl-4 pr-4">
                        <h4 class="text-sm font-medium mb-2">HẠ TẦNG GIAO THÔNG ĐƯỢC QUY HOẠCH BÀI BẢN</h4>
                        <p class="text-xs text-justify">Các tuyến đường liên tỉnh như quốc lộ 1A hữu nghị Lạng Sơn 170km kết nối cao tốc Nam Hữu qua cửa khẩu Hữu Nghị đi Quảng Ninh, Trung Quốc và nhiều tuyến đường sắt liên tỉnh</p>
                    </div>
                </div>
            </div>
            <div class="lg:w-4/12 md:w-6/12 border-b-2 border-primary lg:border-r-0 md:border-r-2 lg:pt-0 pt-4 pb-4 pl-4 pr-4">
                <div class="flex md:items-start items-center">
                    <div class="w-6/12 cover-img">
                        <img src="<?php echo get_template_directory_uri() ?>/images/top-reason/signature.png" alt="signature">
                    </div>
                    <div class="w-6/12 pl-4">
                        <h4 class="text-sm font-medium mb-2">TIỀM NĂNG TĂNG GIÁ VÔ HẠN</h4>
                        <p class="text-xs text-justify">Theo các chuyên gia dự báo, khi các dự án lớn đang triển khai thu hút nhiều dòng vốn FDI về đây sẽ giúp đất đai tại khu vực này tăng trưởng mạnh từ 50% - 300% thậm chí 500% trong vòng 1 đến 3 năm tới đây</p>
                    </div>
                </div>
            </div>

            <div class="lg:w-4/12 md:w-6/12 pt-4 pr-4 md:pb-0 pb-4 lg:border-r-2 lg:border-b-0 border-b-2 border-primary pl-4">
                <div class="flex md:items-start items-center">
                    <div class="w-6/12 pr-4">
                        <h4 class="text-sm font-medium mb-2">LỢI TỨC HẤP DẪN CHO NHÀ ĐẦU TƯ</h4>
                        <p class="text-xs text-justify">Tỉnh Lạng Sơn có diện tích: 8310 km2, trong đó 512,559 đất rừng lâm nghiệp, chiếm 61% tổng diện tích đất. Mức lợi tức ít nhất từ việc khai thác gỗ chu kỳ 5 năm, doanh thu ước tính đạt 200 triệu/ha trong năm thứ 3</p>
                    </div>
                    <div class="w-6/12 cover-img">
                        <img src="<?php echo get_template_directory_uri() ?>/images/top-reason/invest.png" alt="invest">
                    </div>
                </div>
            </div>
            <div class="lg:w-4/12 md:w-6/12 pt-4 pl-4 pr-4 md:pb-0 pb-4 md:border-r-2 md:border-b-0 border-b-2 border-primary">
                <div class="flex md:items-start items-center md:flex-row flex-row-reverse">
                    <div class="w-6/12 md:pr-4 pl-4">
                        <h4 class="text-sm font-medium mb-2">PHÁP LÝ RÕ RÀNG MINH BẠCH</h4>
                        <p class="text-xs text-justify">Có sổ đổ cho từng hecta</p>
                    </div>
                    <div class="w-6/12 cover-img">
                        <img src="<?php echo get_template_directory_uri() ?>/images/top-reason/juridical.png" alt="juridical">
                    </div>
                </div>
            </div>
            <div class="lg:w-4/12 md:w-6/12 pt-4 pl-4 pr-4">
                <div class="flex md:items-start items-center">
                    <div class="w-6/12 pr-4">
                        <h4 class="text-sm font-medium mb-2">MỨC GIÁ ĐẦU TƯ HẤP DẪN</h4>
                        <p class="text-xs text-justify">Hiện tại giá đất còn thấp so với tiềm năng khu vực và đây là cơ hội để nhiều nhà đầu tư ngày càng quan tâm khu vực này nhiều hơn</p>
                    </div>
                    <div class="w-6/12 cover-img">
                        <img src="<?php echo get_template_directory_uri() ?>/images/top-reason/coin.png" alt="coin">
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-5xl mx-auto mt-16">
            <div class="md:flex">
                <div class="md:w-6/12" data-aos="fade-right" data-aos-duration="1000">
                    <img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri() ?>/images/top-reason/manager.png" alt="manager">
                </div>
                <div class="md:w-6/12 lg:p-8 p-6 text-white bg-primary" data-aos="zoom-in" data-aos-duration="1000">
                    <h3 class="md:text-2xl text-lg font-medium">THÔNG ĐIỆP TỔNG GIÁM ĐỐC</h3>
                    <h3 class="md:text-2xl text-lg font-medium mb-2">Ông: Võ Hải</h3>
                    <p class="text-justify md:text-base text-sm">WowHomes hoạt động tập trung chính trong lĩnh vực Bất động sản Rừng và Biển, là những giải pháp đầu tư hiệu quả với tiềm năng tăng giá rất lớn khi tọa lạc tại các vùng ven Thành phố Hồ Chí Minh và Hà Nội. Là những khu vực đang
                        được đầu tư mạnh mẽ về hạ tầng giao thông hoặc thuộc thị trường ngách chưa được quan tâm. Đồng thời, những lợi tức hấp dẫn từ việc khai thác giá trị trên đất tạo ra cơ hội thị trường tiên phong.
                    </p>
                    <p class="text-justify md:text-base text-sm">Với chiến lược kinh doanh rõ ràng cùng đội ngũ quản lý, WowHomes cam kết mang đến những lợi ích vượt trội và cơ hội hợp tác bền vững dành cho nhà đầu tư, quý đối tác đại lý của công ty.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sectoin-qoute py-20 md:mt-0 mt-8">
    <div class="cloud"></div>
    <div class="container mx-auto lg:px-0 px-4">
        <div class="max-w-2xl mx-auto">
            <h2 class="text-white md:text-3xl text-xl font-medium relative z-10 text-center" data-aos="zoom-in" data-aos-duration="1000">Cùng gia nhập WOWHOMES để thay đổi định nghĩa ngành bất động sản</h2>
        </div>
    </div>
</section>

<section class="section-form_register py-16 lg:px-0 px-4">
    <div class="container mx-auto">
        <div class="logo md:w-3/12 w-5/12 mx-auto md:mb-8 mb-4 line-height-normal" data-aos="fade-down" data-aos-duration="1000">
            <img src="<?php echo get_template_directory_uri() ?>/images/logo/logo-2.png" alt="logo">
        </div>
        <div class="max-w-3xl mx-auto" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="md:text-3xl text-2xl font-medium relative z-10 text-center">Đồng hành cùng WOWHOMES để tạo ra những giá trị đích thực</h2>
            <p class="text-center md:mt-6 mt-3 text-xs">Nếu bạn vẫn đang băn khoăn về một nơi có thể giúp bạn phát triển bản thân, cùng bạn tạo nên các giá trị đích thực và biến mục tiêu nghề nghiệp của bạn thành hiện thực thì WOWHOMES là sự lựa chọn lý tưởng dành cho bạn.</p>
        </div>
        <div data-aos="fade-up" data-aos-duration="1000">
            <script id="bx24_form_inline" data-skip-moving="true">
                (function(w,d,u,b){w['Bitrix24FormObject']=b;w[b] = w[b] || function(){arguments[0].ref=u;
                    (w[b].forms=w[b].forms||[]).push(arguments[0])};
                    if(w[b]['forms']) return;
                    var s=d.createElement('script');s.async=1;s.src=u+'?'+(1*new Date());
                    var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
                })(window,document,'https://hethongwowhomes.bitrix24.com/bitrix/js/crm/form_loader.js','b24form');

                b24form({"id":"15","lang":"vn","sec":"3sln7y","type":"inline"});
            </script>
        </div>
    </div>
</section>

<?php
get_footer();
