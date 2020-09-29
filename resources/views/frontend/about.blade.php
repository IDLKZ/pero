@extends('layout.layout')

@section("content")


    <!-- breadcrumb-area start -->
    <div class="creative_breadcrumb-area start_up_service-bg bg-img" data-bg="../../assets/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_box text-left">
                        <h3 class="breadcrumb-title text-color-primary mb-10">О нас</h3>
                        <p class="">Pero Intenational Agency <br>
                          обучаем, давая только практичные знания <br>
                           Все занятия проводим онлайн! </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <!--============ About Area Start ============-->
    <!--============ Personal Skill Area Start ============-->
    <div class="personal-skill-area" style="padding: 50px 0">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-7 order-2 order-lg-1">
                    <div class="personal-skill-content-box-two small-mt__30 tablet-mt__30">
                        <div class="section-title-wrap">
                            <h6 class="section-sub-title">Pero International Agency</h6>
                            <h3 class="mb-20 section-title">В чем мы сильны!</h3>
                        </div>

                        <div class="personal-skill-progress section-space--mt_60">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="progress-bar--one section-space--mb_40">
                                        <!-- Start Single Progress Charts -->
                                        <div class="progress-charts">
                                            <h6 class="heading ">Английский язык</h6>
                                            <div class="progress">
                                                <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <!-- End Single Progress Charts -->

                                        <!-- Start Single Progress Charts -->
                                        <div class="progress-charts">
                                            <h6 class="heading ">Подготовка к международным экзаменам</h6>
                                            <div class="progress">
                                                <div class="progress-bar wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay=".5s" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <!-- End Single Progress Charts -->

                                        <!-- Start Single Progress Charts -->
                                        <div class="progress-charts ">
                                            <h6 class="heading ">Естественные науки</h6>
                                            <div class="progress">
                                                <div class="progress-bar wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".8s" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <!-- End Single Progress Charts -->
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="progress-bar--two section-space--mb_40">
                                        <!-- Start Single Progress Charts -->
                                        <div class="progress-charts">
                                            <h6 class="heading ">Гуманитарные науки</h6>
                                            <div class="progress">
                                                <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <!-- End Single Progress Charts -->

                                        <!-- Start Single Progress Charts -->
                                        <div class="progress-charts">
                                            <h6 class="heading ">Подготовка к поступлению</h6>
                                            <div class="progress">
                                                <div class="progress-bar wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay=".5s" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <!-- End Single Progress Charts -->

                                        <!-- Start Single Progress Charts -->
                                        <div class="progress-charts ">
                                            <h6 class="heading ">IELTS</h6>
                                            <div class="progress">
                                                <div class="progress-bar wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".8s" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <!-- End Single Progress Charts -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="personal-info-box-two">
                            <h4 class="theme-color-default">
                                <span class="theme-color-secondary">Напишите нам по WhatsApp! Мы онлайн  -  </span><br>
                                <span>WhatsApp<a href="https://api.whatsapp.com/send?phone=77783558165">+77783558165</a></span>
                            </h4>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 order-1 order-lg-2">
                    <div class="personal-skill-right-images ml-auto text-center mr-auto  float-lg-right float-md-none personal-box-skill">
                        <div class="img-box">
                            <img src="../../assets/img/team.jpg" class="img-fluid" alt="About Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============ Personal Skill Area End ============-->
    <!--============ About Area End ============-->


    <div class="site-wrapper-reveal pt-5">

        <!--=========== Team Area Start ==========-->
        <div class="team-area section-space--pt_10 section-space--pb_90">
            <div class="container text-center">
                <h3 class="mb-20 section-title">Наша команда!</h3>
                <div class="row pt-5 justify-content-center">
                    @foreach($data as $item)
                        <div class="col-lg-3 col-md-6 col-sm-6">
                        <!-- single-team-box Start -->
                        <div class="single-team-box style-01">
                            <div class="team-image">
                                <img class="img-fluid" src="{{$item['img']}}" alt="Team Image">
                            </div>
                            <div class="team-content">
                                <div class="text-box">
                                    <h4>{{$item['name']}}</h4>
                                    <p>{{$item['position']}}</p>
                                </div>
                            </div>
                            <div class="social-creative-box">
                                <div class="social-share-wrap">
                                    <ul class="list ht-social-networks style-three">
                                        <li class="item">
{{--                                            <a href="https://www.instagram.com/a.abilbayeva/" target="_blank" class="social-link"> <i class="fa fa-instagram social-link-icon"></i></a>--}}
                                            <a data-toggle="modal" data-target="#exampleModal{{$item['id']}}" class="social-link"><i class="fa fa-eye social-link-icon"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single-team-box Start -->
                    </div>
                        <div class="modal fade" id="exampleModal{{$item['id']}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">О преподавателе</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>{{$item['description']}}</p>
                                        <hr>
                                        <b>Основная деятельность в команде:</b>
                                        <p>{{$item['main_position']}}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
{{--                                        <button type="button" class="btn btn-primary"></button>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!--=========== Team Area Start ==========-->

    </div>


    <!--=========== Personal Service Area Start ==========-->
        <div class="container pt-5 pb-5">


            <div class="row">
                <div class="col-lg-5">
                    <div class="personal-service-left-images ml-auto text-center mr-auto  float-lg-left float-md-none personal-service-box-wrap">
                        <div class="img-box">
                            <img src="assets/img/team.jpg" class="img-fluid" alt="Service Image">
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title-wrap text-left section-space--mb_40">
                                <h6 class="section-sub-title">Pero International Agency</h6>
                                <h3 class="section-title">Самые лучшие условия <br> только для Вас!</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flexible-image-slider-wrap">
                        <div class="swiper-container auto--right-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!-- Service Box Start -->
                                    <div class="ht-service-box style-2" style="padding-left: 75px;padding-right: 75px">
                                       <img src="assets/img/review1.jpg" height="340px" width="220px">
                                    </div>
                                    <!-- Service Box End -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Service Box Start -->
                                    <div class="ht-service-box style-2" style="padding-left: 75px;padding-right: 75px">
                                       <img src="assets/img/review2.jpg" height="340px" width="220px">
                                    </div>
                                    <!-- Service Box End -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Service Box Start -->
                                    <div class="ht-service-box style-2" style="padding-left: 75px;padding-right: 75px">
                                       <img src="assets/img/review3.jpg" height="340px" width="220px">
                                    </div>
                                    <!-- Service Box End -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Service Box Start -->
                                    <div class="ht-service-box style-2" style="padding-left: 75px;padding-right: 75px">
                                       <img src="assets/img/review4.jpg" height="340px" width="220px">
                                    </div>
                                    <!-- Service Box End -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Service Box Start -->
                                    <div class="ht-service-box style-2" style="padding-left: 75px;padding-right: 75px">
                                       <img src="assets/img/review5.jpg" height="340px" width="220px">
                                    </div>
                                    <!-- Service Box End -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Service Box Start -->
                                    <div class="ht-service-box style-2" style="padding-left: 75px;padding-right: 75px">
                                       <img src="assets/img/review6.jpg" height="340px" width="220px">
                                    </div>
                                    <!-- Service Box End -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Service Box Start -->
                                    <div class="ht-service-box style-2" style="padding-left: 75px;padding-right: 75px">
                                       <img src="assets/img/review7.jpg" height="340px" width="220px">
                                    </div>
                                    <!-- Service Box End -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Service Box Start -->
                                    <div class="ht-service-box style-2" style="padding-left: 75px;padding-right: 75px">
                                       <img src="assets/img/review8.jpg" height="340px" width="220px">
                                    </div>
                                    <!-- Service Box End -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Service Box Start -->
                                    <div class="ht-service-box style-2" style="padding-left: 75px;padding-right: 75px">
                                       <img src="assets/img/review9.jpg" height="340px" width="220px">
                                    </div>
                                    <!-- Service Box End -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Service Box Start -->
                                    <div class="ht-service-box style-2" style="padding-left: 75px;padding-right: 75px">
                                       <img src="assets/img/review10.jpg" height="340px" width="220px">
                                    </div>
                                    <!-- Service Box End -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Service Box Start -->
                                    <div class="ht-service-box style-2" style="padding-left: 75px;padding-right: 75px">
                                       <img src="assets/img/review11.jpg" height="340px" width="220px">
                                    </div>
                                    <!-- Service Box End -->
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    <!--=========== Personal Service Area End ==========-->

@endsection



