@extends('layout.layout')

@section('content')
    <!-- breadcrumb-area start -->
    <div class="creative_breadcrumb-area start_up_service-bg bg-img" data-bg="/assets/images/bg/pricing_bg.jpg" style="background-size: cover;background-position: bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb_box text-left">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->
    <div class="site-wrapper-reveal">

        <!--=========== Pricing Package Area Start ==========-->
        <div class="pricing-package-area section-space--pt_120 section-space--pb_90">
            <div class="container">
                <div class="row pricing-table-two">

                    <!-- Pricing Table Start -->
                    @foreach($data as $item)
                        <div class="col-lg-4 col-md-6 mb-3">
                        <div class="pricing-table__inner" style="height: 640px">
                            <h5 class="price price__three">{{$item['price']}}</h5>
                            <div class="pricing-table__header">
                                <h4 class="pricing-table__title">{{$item['title']}}<br><small>{{$item['sub_title']}}</small></h4>
                            </div>
                            <div class="pricing-table__price-wrap">
                                <div class="pricing-table__body">
                                    <ul class="pricing-table__list">
                                        @foreach($item['description'] as $li)
                                        <li><img src="../../assets/images/icons/check-icon-sm.png" alt="">{{$li}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="pricing-table__footer ft">
                                    <a href="#" class="ht-btn-icon-two">Записаться</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach
                    <!-- Pricing Table End -->

                </div>
            </div>
        </div>
        <!--=========== Pricing Package Area Start ==========-->

    </div>
@stop
