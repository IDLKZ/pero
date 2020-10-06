@extends('layout.layout')

@section('content')
    <!-- breadcrumb-area start -->
    <div class="creative_breadcrumb-area start_up_service-bg bg-img" data-bg="../../assets/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb_box text-left">
                        <h2 class="breadcrumb-title text-color-primary mb-10">Наши Продукты</h2>
                        <p class="">Гайды для поступления в ВУЗы всего мира <br>
                            Поступайте за границу вместе с нами <br>
                            Предлагаем гайд для поступления в лучшие в вузы в мире </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="breadcrumb_inner-img text-right p-5">
                        <img src="/assets/img/bg4.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->
    <!--============ About Area Start ============-->
    <div class="about-wrapper section-space--pb_120 section-space--pt_90 start-up-patterns-image-01">
        <div class="container">
            <div class="row align-items-center">


                <div class="col-lg-6">
                    <div class="about-us-content about-us-offset-right position-relative x-index-1 small-mt__40 tablet-mt__40">
                        <div class="section-title-wrap">
                            <h6 class="section-sub-title">Pero International Agency</h6>
                            <h3 class="mb-20 section-title">Готовы представить Вам гайды и консультацию по поступлению в топовые ВУЗы мира</h3>
                            <h4 class="mb-20 font-weight--light"><span class="text-size-lg font-weight-bold text-color-secondary">Pero </span> - анализируем, создаем, практикуем</h4>
                            <p class="mb-20 font-weight--light">
                                1)Гайд из стипендий и университетов. Гайд включает себя 150+ стипендий и больше 400 университетов в странах Азии, Европы, Канаде, США а также в Австралии!
                                📍Гайд включает стипендии как для бакалавров, также для магистратуры и phD
                                <br>
                                Цена: <b>3000тг</b><br>
                                Для заказа и получения дополнительной информации, пишите на WhatsApp.
                            </p>
                            <p class="mb-20 font-weight--light">
                                2)Мы предоставляем услуги поступления за границу на бакалавр, магистратуру и PhD
                                Вы можете записаться на консультацию для оценки шансов, подбора университетов, стипендий, по международным стажировкам, подготовка к экзаменам GRE, GMAT, редактирование мотивационного письма и других вопросов.

                            </p>

                            <div class="about-us-btn-box">
                                <a href="{{route("about")}}" class="ht-btn ht-btn-sm">О нас</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 dots-offset">
                    <div class="about-image" data-aos="fade-right">
                        <div class="inner-images">
                            <img class="about-img img-fluid" src="/assets/img/product.jpg" alt="About Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============ About Area End ============-->


@stop
