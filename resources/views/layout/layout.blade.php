<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$title = isset($title) ? $title : "Pero International Agency"}}</title>
    <meta name="description" content="{{$description = isset($description) ? $description : "Pero - готовим к поступлению в международные вузы, НИШ,КТЛ, английский язык и Ielts в Астане!"}}">
    <meta name="keywords" content="{{$keywords = isset($keywords) ? $keywords : "Pero,Поступление за границу и в НУ,English/IELTS/SAT/NUFYPET/GRE/ЕНТ,Стипендии на обучение по всему миру,Международные стажировки и конференции"}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.ico">

    <!-- CSS
        ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="assets/css/vendor/fontawesome-all.min.css">
    <!-- Swiper slider CSS -->
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">
    <!-- Animate text CSS -->
    <link rel="stylesheet" href="assets/css/plugins/animate-text.css">
    <!-- AOS CSS -->
    <link href="assets/css/plugins/aos.css" rel="stylesheet">
    <!-- Some Plugins CSS -->
    <link href="assets/css/plugins/some-plugins.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->
    <!--
        <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
        <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
        -->
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/mystyle.css">

</head>

<body>

<div class="preloader-activate preloader-active open_tm_preloader">
    <div class="preloader-area-wrap">
        <div class="spinner d-flex justify-content-center align-items-center h-100">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
</div>


<!--====================  header area ====================-->
<div class="header-area header-area--default">

    <!-- Header Top Wrap Start -->
{{--    <div class="header-top-wrap theme-bg-three">--}}
{{--        <div class="container">--}}
{{--            <div class="row align-items-center">--}}
{{--                <div class="col-md-4 col-9">--}}
{{--                    <p class="text-md-left top-message">Телефоны: <a href="tel:+77783558165 ">+7 778 355 8165  </a></p>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 col-6  d-md-block d-none">--}}
{{--                    <p class="top-message text-md-center"><a href="mailto:info@example.com">info@example.com</a> </p>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 col-3">--}}
{{--                    <!-- header right box -->--}}
{{--                    <div class="header-right-box">--}}
{{--                        <div class="header-right-inner" id="hidden-icon-wrapper">--}}
{{--                            <p class="mobile-top-message d-block d-md-none"><a href="mailto:info@example.com">info@example.com</a> </p>--}}
{{--                            <!-- language-menu -->--}}
{{--                            <div class="language-menu">--}}
{{--                                <ul>--}}
{{--                                    <li>--}}
{{--                                        <a href="#" class="">--}}
{{--                                            Напишите нам!--}}
{{--                                        </a>--}}

{{--                                        <ul class="ls-sub-menu">--}}
{{--                                            <li class="">--}}
{{--                                                <a href="https://api.whatsapp.com/send?phone=77783558165"><span>WhatsApp</span>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="">--}}
{{--                                                <a href="https://www.instagram.com/pero.agency/"><span>Instagram</span>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}

{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- hidden icons menu -->--}}
{{--                        <div class="hidden-icons-menu d-block d-md-none" id="hidden-icon-trigger">--}}
{{--                            <a href="javascript:void(0)">--}}
{{--                                <i class="fa fa-ellipsis-h"></i>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- Header Top Wrap End -->

    <!-- Header Bottom Wrap Start -->
    <div class="header-bottom-wrap header-area--absolute  header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header default-menu-style position-relative">

                        <!-- brand logo -->
                        <div class="header__logo">
                            <a href="index.html">
                                <img src="assets/images/logo/logo.jpg" width="75px" height="75px" class="img-fluid" alt="">
                            </a>
                        </div>

                        <!-- header midle box  -->
                        <div class="header-midle-box" style="justify-content: flex-start!important;">
                            <div class="header-bottom-wrap d-md-block d-none">
                                <div class="header-bottom-inner">
                                    <div class="header-bottom-left-wrap">
                                        <!-- navigation menu -->
                                        <div class="header__navigation d-none d-lg-block">
                                            <nav class="navigation-menu primary--menu">
                                                <ul>
                                                    <li class="has-children has-children--multilevel-submenu">
                                                        <a href="/"><span>Главная</span></a>
                                                    </li>
                                                    <li class="has-children">
                                                        <a href="{{route("about")}}"><span>О нас</span></a>
                                                    </li>

                                                    <li class="has-children has-children--multilevel-submenu">
                                                        <a href="{{route("service")}}"><span>Курсы</span></a>
                                                    </li>
                                                    <li class="has-children has-children--multilevel-submenu">
                                                        <a href="{{route("product")}}"><span>Продукты</span></a>
                                                    </li>
                                                    <li class="has-children has-children--multilevel-submenu">
                                                        <a href="{{route("pricing")}}"><span>Цены</span></a>
                                                    </li>
                                                    <li class="has-children has-children--multilevel-submenu">
                                                        <a href="{{route("contact")}}"><span>Контакты</span></a></li>


{{--                                                    <li class="has-children has-children--multilevel-submenu">--}}
{{--                                                        <a href=""><span>Записаться</span></a>--}}
{{--                                                    </li>--}}


                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="mobile-navigation-icon d-block d-lg-none" id="mobile-menu-trigger">
                            <i></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Bottom Wrap End -->

</div>
<!--====================  End of header area  ====================-->



<div class="site-wrapper-reveal overflow-hiden">
@yield('content')
</div>



<div class="rc-button"></div>


<!-- RedConnect -->
<script id="rhlpscrtg" type="text/javascript" charset="utf-8" async="async"
        src="https://web.redhelper.ru/service/main.js?c=idlkz"></script>
<div style="display: none"><a class="rc-copyright"
                              href="http://redconnect.ru">Сервис обратного звонка RedConnect</a></div>
<!--/RedConnect -->



<!--====================  footer area ====================-->
<div class="footer-area-wrapper ">
    <div class="footer-area section-space--ptb_120 bg-img footer-bg--overlay" data-bg="assets/img/footer.jpg">
        <div class="container">
            <div class="row footer-widget-wrapper">
                <div class="col-lg-4 col-md-12 col-sm-12 footer-widget">
                    <div class="footer-widget__logo mb-30">
                        <img src="assets/images/logo/logo.jpg" height="75px" width="75px" class="img-fluid" alt="">
                    </div>
                    <div class="footer-widget-dic">

                        <p class="footer-dec">
                            Pero International Agency <br>
                            ▪️Поступление за границу и в НУ
                            ▪️English/IELTS/SAT/NUFYPET/GRE/ЕНТ
                            ▪️Стипендии на обучение по всему миру
                            ▪️Международные стажировки и конференции
                        </p>

                        <ul class="list ht-social-networks mt-30">

                            <li class="item">
                                <a href="https://www.instagram.com/pero.agency/" target="_blank">
                                    <i class="fa fa-instagram link-icon social-icon"></i>
                                </a>
                            </li>
                            <li class="item">
                                <a href="https://api.whatsapp.com/send?phone=77783558165" target="_blank">
                                    <i class="fa fa-whatsapp link-icon social-icon"></i>
                                </a>
                            </li>

                        </ul>

                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="coustom-row-in-footer">
                        <div class="footer-widget-coustom-col footer-widget">
                            <h4 class="footer-widget__title mb-20 text-white">Полезные ссылки</h4>
                            <ul class="footer-widget__item-list">
                                <li class="has-children has-children--multilevel-submenu">
                                    <a href="/"><span>Главная</span></a>
                                </li>
                                <li class="has-children">
                                    <a href="{{route("about")}}"><span>О нас</span></a>
                                </li>
                                <li class="has-children has-children--multilevel-submenu">
                                    <a href="{{route("service")}}"><span>Курсы</span></a>
                                </li>
                                <li class="has-children has-children--multilevel-submenu">
                                    <a href="{{route("pricing")}}"><span>Цены</span></a>
                                </li>
                                <li class="has-children has-children--multilevel-submenu">
                                    <a href="{{route("contact")}}"><span>Контакты</span></a>


                            </ul>

                        </div>
                        <div class="footer-widget-coustom-col footer-widget">
                            <h4 class="footer-widget__title mb-20 text-white">Наши контакты</h4>
                            <div class="footer-widget__list">
                                <div class="single-footer-widger">
                                    <h5>Контакты</h5>
                                    <p>Работаем онлайн</p>
                                </div>
                                <div class="single-footer-widger">
                                    <h5>Телефон</h5>
                                    <p>+7 778 355 8165 <br></p>
                                </div>
                                <div class="single-footer-widger">
                                    <h5>Почта</h5>
                                    <p>
                                        <a href="#">info@example.com</a> <br>
                                        <a href="#">www.example.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-md-4 col-sm-6 footer-widget">

                </div>-->
            </div>
        </div>
    </div>
    <div class="footer-copyright-area mt-25 mb-25">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <span class="copyright-text">Команда фрилансеров <a href="https://idl.kz/" target="_blank" >IDL</a> {{\Carbon\Carbon::now()->year}}</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====================  End of footer area  ====================-->
<!--====================  scroll top ====================-->
<a href="#" class="scroll-top" id="scroll-top">
    <i class="arrow-top fa fa-angle-double-up"></i>
    <i class="arrow-bottom fa fa-angle-double-up"></i>
</a>
<!--====================  End of scroll top  ====================-->

<!--====================  mobile menu overlay ====================-->
<div class="mobile-menu-overlay" id="mobile-menu-overlay">
    <div class="mobile-menu-overlay__inner">
        <div class="mobile-menu-overlay__header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8">
                        <!-- logo -->
                        <div class="logo">
                            <a href="index.html">
                                <img src="assets/images/logo/logo.jpg" height="75px" width="75px" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-4">
                        <!-- mobile menu content -->
                        <div class="mobile-menu-content text-right">
                            <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu-overlay__body">
            <nav class="offcanvas-navigation">
                <ul>
                    <li class="has-children has-children--multilevel-submenu">
                        <a href="/"><span>Главная</span></a>
                    </li>
                    <li class="has-children">
                        <a href="{{route("about")}}"><span>О нас</span></a>
                    </li>
                    <li class="has-children has-children--multilevel-submenu">
                        <a href="{{route("service")}}"><span>Курсы</span></a>
                    </li>
                    <li class="has-children has-children--multilevel-submenu">
                        <a href="{{route("pricing")}}"><span>Цены</span></a>
                    </li>
                    <li class="has-children has-children--multilevel-submenu">
                        <a href="{{route("contact")}}"><span>Контакты</span></a>

{{--                    <li class="has-children has-children--multilevel-submenu">--}}
{{--                        <a href=""><span>Записаться</span></a>--}}
{{--                    </li>--}}


                </ul>
            </nav>
        </div>
    </div>
</div>
<!--====================  End of mobile menu overlay  ====================-->













<!-- JS
============================================ -->
<!-- Modernizer JS -->
<script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
<!-- jQuery JS -->
<script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/js/vendor/bootstrap.min.js"></script>
<!-- Swiper Slider JS -->
<script src="assets/js/plugins/swiper.min.js"></script>
<!-- Waypoints JS -->
<script src="assets/js/plugins/waypoints.min.js"></script>
<!-- Counter down JS -->
<script src="assets/js/plugins/countdown.min.js"></script>
<!-- Isotope JS -->
<script src="assets/js/plugins/isotope.min.js"></script>
<!-- Masonry JS -->
<script src="assets/js/plugins/masonry.min.js"></script>
<!-- ImagesLoaded JS -->
<script src="assets/js/plugins/images-loaded.min.js"></script>
<!-- Counterup JS -->
<script src="assets/js/plugins/counterup.min.js"></script>
<!-- WOW JS -->
<script src="assets/js/plugins/wow.min.js"></script>
<!-- AOS JS -->
<script src="assets/js/plugins/aos.js"></script>
<!-- Some plugins JS -->
<script src="assets/js/plugins/some-plugins.js"></script>
<!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->

<!--
<script src="assets/js/plugins/plugins.min.js"></script>
-->
<!-- Main JS -->
<script src="assets/js/main.js"></script>




</body>

</html>
