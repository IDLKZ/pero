@extends('layout.layout')

@section("content")

    <div class="site-wrapper-reveal">

        <div class="error-wrapper section-space--ptb_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 ml-auto mr-auto text-center">
                        <div class="error-wrapper">
                            <h3 class="text-color-primary">Упс!</h3>
                            <h5 class="font-weight--light">404 Страница не найдена!</h5>

                            <div class="error-link section-space--ptb_100">
                                <img src="../../assets/img/404.png" class="img-fluid" alt="Error Images">
                            </div>

                            <a href="/" class="ht-btn ht-btn-sm home-bacck-button">Домой!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
