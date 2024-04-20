@extends('layouts.app')

@section('Show','Show page')


@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{route('page')}}">Bosh sahifa</a></li>
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
@endsection
