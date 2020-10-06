@extends('layout.layout')

@section("content")




        <!--============ Hero Start ============-->
        <div class="hero-slider-wrap start-up-hero-wrap">
            <div class="swiper-container hero-flexible__container main-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"  >
                        <div class="start-up-hero bg-img" style="background-size: cover" data-bg="assets/img/bg.png">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-xl-12 col-lg-12 col-md-12">

                                        <div class="hero-text text-center text-center text-white layer-animation-1">
                                            <h4 class="text-white mb-10 text-color-secondary">Pero International Agency</h4>
                                            <h1 class="font-weight--bold mb-15 section-title text-white">Поможем Вам достичь Ваших целей</h1>
                                            <h4 class="text-white mb-10 mt-md-5">Школа для изучения английского языка и подготовки к международным экзаменам</h4>
                                            <div class="hero-button mt-30">
                                                <a href="{{route("contact")}}" class="ht-btn ht-btn-lg font-weight--bold">Записаться</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
{{--                    <div class="swiper-slide" >--}}
{{--                        <div class="start-up-hero bg-img" style="background-size: cover" data-bg="assets/img/bg2.jpg">--}}
{{--                            <div class="container">--}}
{{--                                <div class="row align-items-center">--}}
{{--                                    <div class="col-xl-6 col-lg-8 col-md-9">--}}

{{--                                        <div class="hero-text text-center text-md-left layer-animation-1">--}}
{{--                                            <h4 class="text-color-secondary mb-10">Pero International Agency</h4>--}}
{{--                                            <h1 class="font-weight--bold mb-15 section-title">Учись  <br>собственном темпе <br> Онлайн</h1>--}}
{{--                                            <div class="hero-button mt-30">--}}
{{--                                                <a href="{{route("service")}}" class="ht-btn ht-btn-lg font-weight--bold">Наши курсы</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="swiper-slide" >--}}
{{--                        <div class="start-up-hero bg-img" style="background-size: cover" data-bg="assets/img/bg3.jpg">--}}
{{--                            <div class="container">--}}
{{--                                <div class="row align-items-center">--}}
{{--                                    <div class="col-xl-6 col-lg-8 col-md-9">--}}

{{--                                        <div class="hero-text text-center text-md-left layer-animation-1">--}}
{{--                                            <h4 class="text-color-secondary mb-10">Pero International Agency</h4>--}}
{{--                                            <h1 class="font-weight--bold mb-15 section-title">Только <br> лучшие учителя <br></h1>--}}
{{--                                            <div class="hero-button mt-30">--}}
{{--                                                <a href="{{route("about")}}" class="ht-btn ht-btn-lg font-weight--bold">О нас</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <!-- Add Arrows -->
            </div>

{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-12">--}}
{{--                        <div class="hero-swiper-pagination-number swiper-pagination__left"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
        <!--============ Hero End ============-->

        <!--============ Service Area Start ============-->
        <div class="start-up-service-area section-space--pt_120 ">
            <div class="container">
                <div class="row">
                <div class="col-12 text-center">
                    <h3 class="mb-20 section-title">Наши курсы</h3>
                    <h4 class="mb-20 font-weight--light"><span class="text-size-lg font-weight-bold text-color-secondary">Pero </span> - поможем вам с поступлением в зарубежные ВУЗы</h4>
                </div>



                    <!-- service-area Start -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="ht-service-box style-05 text-center">
                            <div class="service-icon" data-aos="zoom-in-down">
                                <img style="height: 150px; width: 150px" src="assets/img/service.jpg" alt="">
                            </div>
                            <div class="service-content">
                                <h4 class="section-title mb-10">SAT</h4>
                                <p>Стандартизированный тест для приема в высшие учебные заведения в США.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="ht-service-box style-05 text-center">
                            <div class="service-icon" data-aos="zoom-in-down">
                                <img style="height: 150px; width: 150px" src="assets/img/logo2.png" alt="">
                            </div>
                            <div class="service-content">
                                <h4 class="section-title mb-10">NUFYPET</h4>
                                <p>Предметный тест на английском для поступления в Nazarbayev University
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="ht-service-box style-05 text-center">
                            <div class="service-icon" data-aos="zoom-in-down">
                                <img style="height: 150px; width: 150px" src="assets/img/logo3.png" alt="">
                            </div>
                            <div class="service-content">
                                <h4 class="section-title mb-10">IELTS</h4>
                                <p>Международная система оценки знания английского языка</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="ht-service-box style-05 text-center">
                            <div class="service-icon" data-aos="zoom-in-down">
                                <img style="height: 150px; width: 150px" src="assets/img/logo4.png" alt="">
                            </div>
                            <div class="service-content">
                                <h4 class="section-title mb-10">General English</h4>
                                <p>Общий курс английского языка для усовершенствования своих навыков
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="ht-service-box style-05 text-center">
                            <div class="service-icon" data-aos="zoom-in-down">
                                <img style="height: 150px; width: 150px" src="assets/img/logo5.png" alt="">
                            </div>
                            <div class="service-content">
                                <h4 class="section-title mb-10"> NIS, БИЛ, РФМШ,КТЛ</h4>
                                <p>Подготовка к вступительным экзаменам в школы, лицеи и вузы
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="ht-service-box style-05 text-center">
                            <div class="service-icon" data-aos="zoom-in-down">
                                <img style="height: 150px; width: 150px" src="assets/img/logo6.png" alt="">
                            </div>
                            <div class="service-content">
                                <h4 class="section-title mb-10">ЕНТ и школьные предметы</h4>
                                <p>Подготовка к ЕНТ и подтянем школьные предметы
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- service-area End -->

                </div>
            </div>
        </div>
        <!--============ Service Area End ============-->

        <!--============ Service Area Start ============-->
        <div class="start-up-service-area section-space--pt_120 ">
            <div class="container">
                <div class="row">
                    <!-- service-area Start -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="ht-service-box style-05 text-center">
                            <div class="service-icon" data-aos="zoom-in-down">
                                <img style="height: 150px; width: 150px" src="assets/img/img1.jpg" alt="">
                            </div>
                            <div class="service-content">
                                <h4 class="section-title mb-10">Качественные знания</h4>
                                <p>Наши учителя настоящие профессионалы своего дела
                                    Мы даем только реальные результаты
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- service-area End -->
                    <!-- service-area Start -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="ht-service-box style-05 active text-center">
                            <div class="service-icon" data-aos="zoom-in-down">
                                <img style="height: 150px; width: 150px" src="/assets/img/img2.jpg" alt="">
                            </div>
                            <div class="service-content">
                                <h4 class="section-title mb-10">Практика</h4>
                                <p>Даем возможность применить свои знания на практике
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- service-area End -->
                    <!-- service-area Start -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="ht-service-box style-05 text-center">
                            <div class="service-icon" data-aos="zoom-in-down">
                                <img style="height: 150px; width: 150px" src="/assets/img/img3.jpg" alt="">
                            </div>
                            <div class="service-content">
                                <h4 class="section-title mb-10">Анализируй</h4>
                                <p>Мы анализируем и понимаем информацию,
                                     а не просто заучиваем
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- service-area End -->
                    <!-- service-area Start -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="ht-service-box style-05 text-center">
                            <div class="service-icon" data-aos="zoom-in-down">
                                <img style="height: 150px; width: 150px" src="/assets/img/img4.jpg" alt="">
                            </div>
                            <div class="service-content">
                                <h4 class="section-title mb-10">Готовность</h4>
                                <p>Даем знания которые дают уверенность в своей готовности к любым экзаменам
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- service-area End -->
                </div>
            </div>
        </div>
        <!--============ Service Area End ============-->

        <!--============ About Area Start ============-->
{{--        <div class="about-wrapper section-space--pb_120 section-space--pt_90 start-up-patterns-image-01">--}}
{{--            <div class="container">--}}
{{--                <div class="row align-items-center">--}}

{{--                    <div class="col-lg-6 dots-offset">--}}
{{--                        <div class="about-image" data-aos="fade-right">--}}
{{--                            <div class="inner-images">--}}
{{--                                <img class="about-img img-fluid" src="/assets/img/pero.jpg" alt="About Image">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="about-us-content about-us-offset-right position-relative x-index-1 small-mt__40 tablet-mt__40">--}}
{{--                            <div class="section-title-wrap">--}}
{{--                                <h6 class="section-sub-title">Pero International Agency</h6>--}}
{{--                                <h3 class="mb-20 section-title">Поможем осуществить Вашу мечту</h3>--}}
{{--                                <h4 class="mb-20 font-weight--light"><span class="text-size-lg font-weight-bold text-color-secondary">Pero </span> - анализируем, создаем, практикуем</h4>--}}
{{--                                <p class="mb-20 font-weight--light">--}}
{{--                                    Pero - занимается широким спектром обучения. Мы готовим к поступлению в РФМШ,НИШ,КТЛ.--}}
{{--                                    Подготовка к международным экзаменам на английском языке SAT,NUFYPET,ACT.--}}
{{--                                    Готовим к ЕНТ, помогаем закрыть пробелы школьных знаний--}}
{{--                                </p>--}}
{{--                                <p class="mb-15 font-weight--normal font-italic">--}}
{{--                                   Курсы английского языка от Beginner до Advanced.--}}
{{--                                    Готовим к международному экзамену IELTS--}}
{{--                                </p>--}}
{{--                                <p class="mb-40 font-weight--light">--}}
{{--                                    Все занятия проходят в онлайн режиме, где ты можешь выбрать свой темп обучения!--}}
{{--                                    А наш центр сделает все, чтобы ты успешно достиг своих целей!--}}
{{--                                </p>--}}

{{--                                <div class="about-us-btn-box">--}}
{{--                                    <a href="{{route("about")}}" class="ht-btn ht-btn-sm">О нас</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!--============ About Area End ============-->


        <!--============ Business Solutions Area Start ============-->
        <div class="business-solutions-area section-space--pb_120 start-up-patterns-image-02">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrap text-left mb-20">
                            <h6 class="section-sub-title">Что мы предлагаем?</h6>
                            <h3 class="section-title">Лучшие знания  <br>только для Вас</h3>
                        </div>
                    </div>
                </div>

            </div>
            <div class="container-fluid cou-container-device">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="row col-06__left float-lg-right ">
                            <!-- service-area Start -->
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="ht-service-box style-solutions">
                                    <div class="service-icon" data-aos="zoom-in-up">
                                        <img style="height: 150px; width: 150px" src="assets/img/offer1.jpg" alt="">
                                    </div>
                                    <div class="service-content">
                                        <h4 class="section-title mb-10">Подготовка к поступлению</h4>
                                        <p>
                                            Готовим к поступлению в НИШ,РФМШ,КТЛ,
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- service-area End -->
                            <!-- service-area Start -->
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="ht-service-box style-solutions">
                                    <div class="service-icon" data-aos="zoom-in-up">
                                        <img style="height: 150px; width: 150px" src="assets/img/offer2.jpg" alt="">
                                    </div>
                                    <div class="service-content">
                                        <h4 class="section-title mb-10">Английский язык</h4>
                                        <p>
                                            Уровни от Beginner до Advanced
                                            Подготовка к сдаче IELTS
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- service-area End -->
                            <!-- service-area Start -->
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="ht-service-box style-solutions">
                                    <div class="service-icon" data-aos="zoom-in-up">
                                        <img style="height: 150px; width: 150px" src="assets/img/offer3.jpg" alt="">
                                    </div>
                                    <div class="service-content">
                                        <h4 class="section-title mb-10">Экзамены</h4>
                                        <p>
                                            Сдача международных экзаменов NYFYPET,SAT,ACT
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- service-area End -->
                            <!-- service-area Start -->
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="ht-service-box style-solutions">
                                    <div class="service-icon" data-aos="zoom-in-up">
                                        <img style="height: 150px; width: 150px" src="assets/img/offer4.jpg" alt="">
                                    </div>
                                    <div class="service-content">
                                        <h4 class="section-title mb-10">ЕНТ</h4>
                                        <p>
                                            Подготовка к сдаче ЕНТ.
                                            Поможем покрыть школьные пробелы в знаниях.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- service-area End -->
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="features-images tablet-mt__40 small-mt__40" data-aos="fade-left">
                            <img class="img-fluid" src="assets/img/offer.jpg" alt="Start up image">
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!--============ Business Solutions Area End ============-->

        <!--============ project Area Start ============-->
{{--        <div class="start-up-project-area section-space--ptb_120 start-up-bg startup-project-section-bg">--}}
{{--            <div class="container-fluid cou-container-device">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-xl-5 col-lg-5">--}}
{{--                        <div class="features-images text-right  tablet-mt__40 small-mt__40" data-aos="fade-right">--}}
{{--                            <img class="img-fluid" src="assets/img/result.jpg" alt="Start up image">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-xl-7 col-lg-7">--}}
{{--                        <div class="start-up-right-740 float-left">--}}

{{--                            <div class="row">--}}
{{--                                <div class="col-lg-12">--}}
{{--                                    <div class="section-title-wrap text-left mb-20">--}}
{{--                                        <h6 class="section-sub-title">Наши результаты</h6>--}}
{{--                                        <h3 class="section-title">Результаты и наша работа <br> </h3>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-lg-12 slider-wrap ">--}}
{{--                                    <div class="swiper-container statup-slider__container">--}}
{{--                                        <div class="swiper-wrapper">--}}
{{--                                            <div class="swiper-slide">--}}
{{--                                                <div class="startup-project-wrap">--}}
{{--                                                    <a href="#">--}}
{{--                                                        <img  style="width: 200px;height: 240px" src="assets/img/result1.jpg" alt="">--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="swiper-slide">--}}
{{--                                                <div class="startup-project-wrap">--}}
{{--                                                    <a href="#">--}}
{{--                                                        <img style="width: 200px;height: 240px" src="assets/img/result2.jpg" alt="">--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="swiper-slide">--}}
{{--                                                <div class="startup-project-wrap">--}}
{{--                                                    <a href="#">--}}
{{--                                                        <img style="width: 200px;height: 240px" src="assets/img/result3.jpg" alt="">--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!-- Add Arrows -->--}}
{{--                                    </div>--}}

{{--                                    <div class="swiper-pagination mt-30 pagination-project-1"></div>--}}
{{--                                </div>--}}
{{--                                <!--============ Hero End ============-->--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
        <!--============ project Area End ============-->


{{--        <!--============ Team Area Start ============-->--}}
{{--        <div class="container">--}}
{{--            <div class="row align-items-center">--}}
{{--                <div class="col-lg-5 pr-xl-0">--}}
{{--                    <div class="about-us-content about-us-offset-right position-relative x-index-1">--}}
{{--                        <div class="section-title-wrap">--}}
{{--                            <h6 class="section-sub-title">Наша команда</h6>--}}
{{--                            <h3 class="mb-20 section-title">Команда <br> профессионалов</h3>--}}
{{--                            <p class="mb-20 font-weight--light">--}}
{{--                                У нас работают люди, любящие свое дело - настоящие профессионалы и энтузиасты своего дела--}}
{{--                            </p>--}}
{{--                            <p class="mb-40 font-weight--normal font-italic">--}}
{{--                                Учитель - инженер человеческой души <br>--}}
{{--                                М.И.Калинин--}}
{{--                            </p>--}}

{{--                            <div class="about-us-btn-box">--}}
{{--                                <a href="#" class="ht-btn ht-btn-sm">Наша команда</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-7 pl-xl-0">--}}

{{--                    <div class="tab-content ht-tab__content-two section-space--mt_80">--}}

{{--                        <div class="tab-pane active">--}}
{{--                            <!-- single-team-box Start -->--}}
{{--                            <div class="single-team-box style-02 mt-30">--}}
{{--                                <div class="team-image">--}}
{{--                                    <img src="assets/img/team.jpg" style="width:281px;height:302px"  class="img-fluid" alt="Team Image">--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <!-- single-team-box Start -->--}}
{{--                        </div>--}}


{{--                    </div>--}}

{{--                    <div class="col-05__right-two float-right">--}}
{{--                        <div class="text-center">--}}
{{--                            <ul class="nav justify-content-center ht-tab-menu-team-two" role="tablist">--}}
{{--                                <li class="tab__item nav-item active">--}}
{{--                                    <a class="nav-link active" id="nav-tab1" data-toggle="tab" href="#tab_list_06" role="tab" aria-selected="true">--}}
{{--                                        <img src="assets/img/teacher1.jpg" class="img-fluid" alt="Team Image">--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="tab__item nav-item">--}}
{{--                                    <a class="nav-link" id="nav-tab2" data-toggle="tab" href="#tab_list_07" role="tab" aria-selected="false">--}}
{{--                                        <img src="assets/img/teacher2.jpg" class="img-fluid" alt="Team Image">--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="tab__item nav-item ">--}}
{{--                                    <a class="nav-link" id="nav-tab3" data-toggle="tab" href="#tab_list_08" role="tab" aria-selected="false">--}}
{{--                                        <img src="assets//img/teacher3.jpg" class="img-fluid" alt="Team Image">--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="tab__item nav-item ">--}}
{{--                                    <a class="nav-link" id="nav-tab5" data-toggle="tab" href="#tab_list_09" role="tab" aria-selected="false">--}}
{{--                                        <img src="assets/img/teacher4.jpg" class="img-fluid" alt="Team Image">--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!--============ Team Area End ============-->--}}




        <!--=========== Fun fact Area Start ==========-->
        <div class="fun-fact-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="fun-fact-style-two pl-5 pr-5 section-space--pt_60 mb-30 section-space--pb_30 personal-fun-fact-bg bg-img" data-bg="assets/images/patterns/startup-countert-bg.png">
                            <div class="single-fun-fact wow move-up">
                                <div class="fun-fact--one">
                                    <h3 class="fun-fact__count"><span class="counter">12</span></h3>
                                    <span class="fun-fact__text">Различных направлений</span>
                                </div>
                            </div>
                            <div class="single-fun-fact wow move-up">
                                <div class="fun-fact--one">
                                    <h3 class="fun-fact__count"><span class="counter">128</span>+</h3>
                                    <span class="fun-fact__text">Счастливых студентов</span>
                                </div>
                            </div>
                            <div class="single-fun-fact wow move-up">
                                <div class="fun-fact--one">
                                    <h3 class="fun-fact__count"><span class="counter">100</span>%</h3>
                                    <span class="fun-fact__text">Результат</span>
                                </div>
                            </div>
                            <div class="single-fun-fact wow move-up">
                                <div class="fun-fact--one">
                                    <h3 class="fun-fact__count"><span class="counter">7</span>+</h3>
                                    <span class="fun-fact__text">Учителей</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=========== Fun fact Area End ==========-->


        <!--=========== Personal info Area Start ==========-->
        <div class="personal-info-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="personal-info-box start-up-bg box-shadow--default">
{{--                            <h4 class="theme-color-default ">Заинтересовались, тогда пишите по Whatsapp:<a href="https://api.whatsapp.com/send?phone=77783558165">+77783558165</a></h4>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=========== Personal info Area End ==========-->


        <!--================= Testimonial Area Start ====================-->
        <div class="testimonial-counter-area section-space--ptb_120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="testimonials-content-right-box tablet-mt__60 small-mt__60">
                            <div class="section-title-wrap section-space--mb_60">
                                <h6 class="section-sub-title">Отзывы</h6>
                                <h4 class="mb-20 section-title">Отзывы <br>наших клиентов</h4>
                                <h5 class="mb-20 font-weight--light">
                                    Работаем ради лучшего результата
                                </h5>
                            </div>

                            <!--====================  Testimonial Section Start ====================-->
                            <div class="testimonial-slider-area">
                                <div class="testimonial-slider">
                                    <div class="swiper-container testimonial-slider__container-two">
                                        <div class="swiper-wrapper testimonial-slider__wrapper">
                                            <div class="swiper-slide">
                                                <div class="testimonial-slider__single wow move-up">
                                                    <div class="testimonial-slider--box">
                                                        <div class="testimonial-slider__text"><span class="start-block">“</span>
                                                            Репетитор Айнура преподает математику и готовит к тесту Nufypet. Занимаюсь с Айнурой с марта месяца, знала лишь базовый уровень.
                                                            Определившись с целями и задачами, Айнура предложила определенную систему занятий.
                                                            После обучения продолжительностью в 3 месяца чуствуется большой прогресс.
                                                            Появилось уверенность в решении задач
                                                            <span class="end-block">”</span></div>
                                                        <div class="author-info">
                                                            <div class="testimonial-slider__author">
{{--                                                                <h6 class="name">Ученица - <span class="designation">Ученица</span></h6>--}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="testimonial-slider__single wow move-up">
                                                    <div class="testimonial-slider--box">
                                                        <div class="testimonial-slider__text"><span class="start-block">“</span>
                                                           Очень рада что прохожу курсы по математике у вас. За такой маленький промежуток времени, я получила большое количество информации.
                                                            Вы объясняете простым и легким языком. Я в таком восторге от ваших объяснений, а также благодарна за вашу поддержку и большую мотивацию к обучению.
                                                            Могу сказать что вы одна из лучших репетиторов по математике, который не только объяснит тему, но и даст советы при любых проблемах!

                                                            <span class="end-block">”</span></div>
                                                        <div class="author-info">
                                                            <div class="testimonial-slider__author">
                                                                <h6 class="name">Зарина - <span class="designation">Ученица</span></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="testimonial-slider__single wow move-up">
                                                    <div class="testimonial-slider--box">
                                                        <div class="testimonial-slider__text"><span class="start-block">“</span>
                                                               Занятия на курсе по подготовке к Nufypet  мне понравились. Айнур использовала очень хорошие материалы и давала понятные объяснения.
                                                                Уроки проходили в теплой и дружеской обстановке.
                                                                Уже на первом уроке я поняла, что нашла отличного учителя по математике и теперь советую пойти именно к ней.
                                                            <span class="end-block">”</span></div>
                                                        <div class="author-info">
                                                            <div class="testimonial-slider__author">
                                                                <h6 class="name">Зарина - <span class="designation">Ученица</span></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="testimonial-slider__single wow move-up">
                                                    <div class="testimonial-slider--box">
                                                        <div class="testimonial-slider__text"><span class="start-block">“</span>
                                                            Что мне понравилось у вас: Вы рассказывали как решать задачи, даже при большом их количестве, описывали действия при решении даже самых сложных задач.
                                                            Вы всегда были энергичны и быстро решали задачи, какими сложными бы они не были !
                                                            <span class="end-block">”</span></div>
                                                        <div class="author-info">
                                                            <div class="testimonial-slider__author">
                                                                <h6 class="name">Дана - <span class="designation">Ученица</span></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="testimonial-slider__single wow move-up">
                                                    <div class="testimonial-slider--box">
                                                        <div class="testimonial-slider__text"><span class="start-block">“</span>
                                                           Айнур, спасибо вам большое! Вы так быстро меня подготовили меня к экзамену! Все доходчиво объяснили мне на 3 языках.
                                                            Я очень давно искала такого репетитора, я с вами не прощаюсь. Мне еще нужно подятнуть математику!
                                                            <span class="end-block">”</span></div>
                                                        <div class="author-info">
                                                            <div class="testimonial-slider__author">
                                                                <h6 class="name">Наташа - <span class="designation">Ученица</span></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="testimonial-slider__single wow move-up">
                                                    <div class="testimonial-slider--box">
                                                        <div class="testimonial-slider__text"><span class="start-block">“</span>
                                                            Айнур, үлкен рахмет! Сабақтар тусінікті, уақыты да ыңғайлы және  мықты результат.
                                                            4-5 сабақта өзімнің есеп шығару  жылдамдығым артып, білмеген тақырыптарды түсіндім. Ал енді әлсіз жақтарымды жұмыс істеудеміз.
                                                            Оқушымен оңай  қатынас процессті жеңілдетеді екен. Рахмет!
                                                            <span class="end-block">”</span></div>
                                                        <div class="author-info">
                                                            <div class="testimonial-slider__author">
{{--                                                                <h6 class="name">Наша - <span class="designation">Ученица</span></h6>--}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="testimonial-slider__single wow move-up">
                                                    <div class="testimonial-slider--box">
                                                        <div class="testimonial-slider__text"><span class="start-block">“</span>
                                                           Здравствуйте! Сегодня я прошла консультацию у Айнур, хотела бы выразить ей свою благодарность.
                                                            Вы всегда можете получить точные ответы на ваши вопросы и будете очень довольны! Я получила огромное количество информации из различных источников!
                                                            Это было очень полезно и информативно!
                                                            Обязательно к ней записывайтесь и вы получите от нее отличную информацию о которой не пожалеете!
                                                            <span class="end-block">”</span></div>
                                                        <div class="author-info">
                                                            <div class="testimonial-slider__author">
                                                                <h6 class="name">Аружан - <span class="designation">Ученица</span></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- Add Arrows -->
                                        <div class="swiper-nav-button swiper-button-next"><img src="assets/images/icons/testimonials-left-arrow.png" alt=""></div>
                                        <div class="swiper-nav-button swiper-button-prev"><img src="assets/images/icons/testimonials-right-arrow.png" alt=""></div>

                                    </div>
                                </div>
                            </div>
                            <!--==================== Testimonial Section End  ====================-->
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="startup-features text-center" data-aos="fade-right">
                            <img src="assets/img/review.png" class="img-fluid" alt="Startup image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================= Testimonial Area End ====================-->









@endsection
