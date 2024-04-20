@extends('layouts.app')

@section('Show','Show page')


@section('content')
    <!-- ======= Header ======= -->

    <!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="index.html">Bosh sahifa</a></li>
                    <li>{{$project_type->content}}</li>
                </ol>
                <h2>{{$project_type->content}}</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8 mx-auto">
                        <div class="portfolio-details-slider swiper mySwiper2">
                            <div class="swiper-wrapper align-items-center">


                                @foreach($show_images as $image)
                                    <div class="swiper-slide">
                                        <img src="{{asset($image)}}" alt="" >
                                    </div>
                                @endforeach


                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-8 mx-auto">

                        <div class="portfolio-description mt-5 text-center">
                            <h2>{{$project_type->content}}</h2>
                            <p class="mt-3">
                                {{$project_type->description}}
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-top">
            <div class="container">
                @foreach($network as $net)
                    <div class="row gy-2">
                        <div class="col-lg-6 col-md-12 footer-info">
                            <a href="index.html" class="logo d-flex align-items-center">
                                <img src="assets/img/logo.png" alt="">
                            </a>
                            <p class="w-50">
                                {{$net->name}}
                            </p>
                        </div>

                        <div class="col-lg-6 col-6 footer-links">

                            <div class="social-links mt-3 ">
                                <h4>Ijtimoiy tarmoqlar:</h4>
                                <div class="mx-5">
                                    <a href="{{$net->telegram}}" class="linkedin"><i class="bi bi-telegram"></i></a>
                                    <a href="{{$net->facebook}}" class="facebook"><i class="bi bi-facebook"></i></a>
                                    <a href="{{$net->instagram}}" class="instagram"><i class="bi bi-instagram"></i></a>
                                </div>

                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Ilm-u ziyo</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
            </div>
        </div>
    </footer>
    <!-- End Footer -->
@endsection
