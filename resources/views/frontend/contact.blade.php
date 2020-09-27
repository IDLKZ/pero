@extends('layout.layout')

@section('content')
    <!-- breadcrumb-area start -->
    <div class="creative_breadcrumb-area start_up_service-bg bg-img" data-bg="assets/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb_box text-left">
                        <h2 class="breadcrumb-title text-color-primary mb-10">Наши контакты</h2>
                        <p class="">
                            Pero International Agency онлайн 24/7! <br>
                            Остались вопросы? <br>
                            Задавайте нам, мы всегда готовы Вам ответить
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="breadcrumb_inner-img text-right">
                        <img src="../../assets/img/contact.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->


    <div class="site-wrapper-reveal">

        <!--============ Personal Contact Us Area Start ============-->
        <div class="personal-contact-us-area  section-space--ptb_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrap text-center section-space--mb_60">
                            <h4 class="mb-20 theme-color-default font-weight--bold">Наша контактная информация</h4>
                            <p class="mb-30 font-weight--light">Всегда рады будем выслушать Ваши идеи и предложения <br>
                               Работаем онлайн!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row section-space--mb_60">
                            <div class="col-lg-5">
                                <div class="single-contact-info-wrap d-flex mb-30">
                                    <div class="icon-box">
                                        <img src="../../assets/images/icons/contact-map.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="content">
                                        <h5 class="mb-10 theme-color-default">Работаем онлайн!</h5>
                                        <a href="https://www.instagram.com/pero.agency/"><i class="fa fa-instagram"></i> Мы в инстаграмме!</a><br>
                                        <a href="https://api.whatsapp.com/send?phone=77783558165"><i class="fa fa-whatsapp"></i> Мы в WhatsApp!</a><br>
                                        <a href=""><i class="fa fa-linkedin"></i> Мы в Linkedin!</a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4  pl-lg-1">
                                <div class="single-contact-info-wrap d-flex mb-30">
                                    <div class="icon-box">
                                        <img src="../../assets/images/icons/contact-call.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="content">
                                        <h5 class="mb-10 theme-color-default">Мы в WhatsApp</h5>
                                        <p> +7 778 355 8165</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single-contact-info-wrap d-flex mb-30">
                                    <div class="icon-box">
                                        <img src="../../assets/images/icons/contact-world.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="content">
                                        <h5 class="mb-10 theme-color-default">Web</h5>
                                        <p>
                                            <a href="#">info@example.com</a> <br>
                                            <a href="#">www.pero.kz</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="contact-us-form">
                            <form  action="{{route("sendmail")}}" method="post">
                                <div class="contact-form__three mr-lg-5">

                                    <div class="contact-title section-space--mb_30">
                                        <h4 class="theme-color-default">Отправить сообщение</h4>
                                    </div>

                                    <div class="contact-input input-row">
                                        <div class="contact-inner input-col-5">
                                            <input name="name" type="text" placeholder="Ваше имя *" required>
                                        </div>
                                        <div class="contact-inner input-col-5">
                                            <input name="email" type="email" placeholder="Email *" required>
                                        </div>
                                    </div>
                                    <div class="contact-input">
                                        <div class="contact-inner">
                                            <input name="subject" type="text" placeholder="Тема" required>
                                        </div>
                                    </div>
                                    <div class="contact-inner contact-message">
                                        <textarea name="message" placeholder="Сообщение*"></textarea>
                                    </div>
                                    <div class="comment-submit-btn text-right">
                                        <button class="ht-btn ht-btn-sm personal-contact-btn" type="submit">Отправить</button>
                                        <p class="form-messege"></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-images text-center small-mt__30 tablet-mt__30">
                            <img src="../../assets/img/contact1.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--============ Personal Contact Us Area End ============-->


    </div>
@stop
