@extends('layout.layout')

@section('content')
    <!-- breadcrumb-area start -->
    <div class="creative_breadcrumb-area start_up_service-bg bg-img" data-bg="../../assets/images/bg/start-up-breadcrumb_bg-02.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb_box text-left">
                        <h2 class="breadcrumb-title text-color-primary mb-10">Contact</h2>
                        <p class="">Most popular typesetting, remaining are essentially <br>
                            was pop ularised in the 1960s with the release of uncover <br>
                            many web sites still in their fancy pesetting </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="breadcrumb_inner-img text-right">
                        <img src="../../assets/images/bg/start-up-breadcrumb_inner-service.png" class="img-fluid" alt="">
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
                            <h4 class="mb-20 theme-color-default font-weight--bold">Our Contact Informations</h4>
                            <p class="mb-30 font-weight--light">Most popular typesetting, remaining are essentially was popu <br>
                                larised in the 1960s with the release of uncov er many
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
                                        <h5 class="mb-10 theme-color-default">Address</h5>
                                        <p>275 South Poal, 4th Floor Central Plaza, <br> Main Town, New Yourk, USA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4  pl-lg-1">
                                <div class="single-contact-info-wrap d-flex mb-30">
                                    <div class="icon-box">
                                        <img src="../../assets/images/icons/contact-call.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="content">
                                        <h5 class="mb-10 theme-color-default">Phone</h5>
                                        <p>01254 879 658, 65987 456 987 <br> 01256 879 857, 01458 658 985</p>
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
                                            <a href="#">www.example.com</a>
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
                            <form id="contact-form" action="../../assets/php/mail.php" method="post">
                                <div class="contact-form__three mr-lg-5">

                                    <div class="contact-title section-space--mb_30">
                                        <h4 class="theme-color-default">Send us a message</h4>
                                    </div>

                                    <div class="contact-input input-row">
                                        <div class="contact-inner input-col-5">
                                            <input name="con_name" type="text" placeholder="Name *">
                                        </div>
                                        <div class="contact-inner input-col-5">
                                            <input name="con_email" type="email" placeholder="Email *">
                                        </div>
                                    </div>
                                    <div class="contact-input">
                                        <div class="contact-inner">
                                            <input name="con_email" type="text" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="contact-inner contact-message">
                                        <textarea name="con_message" placeholder="Message*"></textarea>
                                    </div>
                                    <div class="comment-submit-btn text-right">
                                        <button class="ht-btn ht-btn-sm personal-contact-btn" type="submit">Submit</button>
                                        <p class="form-messege"></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-images text-center small-mt__30 tablet-mt__30">
                            <img src="../../assets/images/bg/start-up-contact.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--============ Personal Contact Us Area End ============-->


    </div>
@stop
