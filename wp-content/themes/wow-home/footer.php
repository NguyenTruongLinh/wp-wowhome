<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wow-home
 */

?>

<footer class="py-16">
    <div class="container mx-auto xl:px-0 px-4">
        <ul class="flex flex-wrap relative z-10 text-white border-b border-white pb-6" data-aos="zoom-in-up" data-aos-duration="1000">
            <li class="lg:w-3/12 w-6/12 text-center">
                <i class="icon phone"></i>
                <div>
                    <a class="block sm:text-base text-sm" href="tel:028 226 2727">028 226 2727</a>
                    <a class="block sm:text-base text-sm" href="tel:034 605 2727">034 605 2727</a>
                </div>
            </li>
            <li class="lg:w-3/12 w-6/12 text-center">
                <i class="icon mail"></i>
                <div>
                    <a href="mailto:hr.saigon@wowhomes.vn" class="sm:text-base text-sm">hr.saigon@wowhomes.vn</a>
                </div>
            </li>
            <li class="lg:w-3/12 w-6/12 lg:mt-0 mt-6 text-center">
                <i class="icon website"></i>
                <div>
                    <a href="http://wowhomes.vn" class="sm:text-base text-sm">www.wowhomes.vn</a>
                </div>
            </li>
            <li class="lg:w-3/12 w-6/12 lg:mt-0 mt-6 text-center">
                <i class="icon location"></i>
                <div class="sm:text-base text-sm">F-09, Tầng 1, Tòa Nhà The Manor Officetel, số 89 Nguyễn Hữu Cảnh, Phường 22, Quận Bình Thạnh, Tp. Hồ Chí Minh</div>
            </li>
        </ul>
        <div class="md:flex items-center justify-between relative mt-10">
            <div class="lg:w-4/12 md:w-6/12 lg:pr-0 pr-4 relative z-10 md:mb-0 mb-5" data-aos="fade-down" data-aos-duration="1000">
                <div class="logo w-7/12 mx-auto">
                    <img src="<?php echo get_template_directory_uri() ?>/images/logo/logo-white.png" alt="logo">
                </div>
                <h4 class="mt-4 lg:text-2xl text-lg text-white text-center">CÔNG TY CỔ PHẦN WOWHOMES</h4>
            </div>
            <div class="lg:w-5/12 md:w-6/12 lg:pl-0 pl-4 link">
                <div class="flex justify-end text-white relative z-10" data-aos="fade-up" data-aos-duration="1000">
                    <div class="lg:w-4/12 w-6/12 md:text-left text-center">
                        <div class="mb-5"><a class="py-1 inline-block" href="#">TRANG CHỦ</a></div>
                        <div class="mb-5"><a class="py-1 inline-block" href="#">GIỚI THIỆU</a></div>
                        <div><a class="py-1 inline-block" href="#">TẦM NHÌN</a></div>
                    </div>
                    <div class="lg:w-4/12 w-6/12 md:text-left text-center">
                        <div class="mb-5"><a class="py-1 inline-block" href="#">CHÍNH SÁCH</a></div>
                        <div class="mb-5"><a class="py-1 inline-block" href="#">TIN TỨC</a></div>
                        <div><a class="py-1 inline-block" href="#">LIÊN HỆ</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script id="bx24_form_button" data-skip-moving="true">
    (function(w,d,u,b){w['Bitrix24FormObject']=b;w[b] = w[b] || function(){arguments[0].ref=u;
        (w[b].forms=w[b].forms||[]).push(arguments[0])};
        if(w[b]['forms']) return;
        var s=d.createElement('script');s.async=1;s.src=u+'?'+(1*new Date());
        var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
    })(window,document,'https://hethongwowhomes.bitrix24.com/bitrix/js/crm/form_loader.js','b24form');

    b24form({"id":"15","lang":"vn","sec":"3sln7y","type":"button","click":""});
</script>
<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@1.7.2/dist/js/lightgallery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@1.7.2/modules/lg-thumbnail.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/main.js"></script>
</body>

</html>
