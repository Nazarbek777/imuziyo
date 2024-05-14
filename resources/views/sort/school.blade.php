@php
    use Illuminate\Support\Facades\App;
    $lan = App::getLocale()
@endphp

@extends('layouts.app')
@section('title', 'Home Page')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            @foreach($home as $ts)
                <div class="row">
                    <div class="col-lg-6 d-flex flex-column justify-content-center">
                        <h1 data-aos="fade-up">{{$ts['name_'.__('messages.lang')]}}</h1>
                        <h2 data-aos="fade-up" data-aos-delay="400">{{$ts['content_'.__('messages.lang')]}}</h2>

                    </div>
                    <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{asset($ts->image)}}" class="img-fluid" alt="">
                    </div>
                </div>
            @endforeach
        </div>

    </section>
    <!-- End Hero -->

    <main id="main">


        <!-- ======= Services Section ======= -->
        <section id="services" class="services">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>@lang('messages.6')</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-box blue">
                            <i class="ri-discuss-line icon"></i>
                            <h3>@lang('messages.7')</h3>
                            <a href="https://college-ilmuziyo.vercel.app/" class="read-more"><span>@lang('messages.10')</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-box orange">
                            <i class="ri-discuss-line icon"></i>
                            <h3>@lang('messages.8')</h3>
                            <a href="#" class="read-more"><span>@lang('messages.10')</span> <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-box green">
                            <i class="ri-discuss-line icon"></i>
                            <h3>@lang('messages.9')</h3>
                            @foreach($show as $tm)
                                <a href="{{route('main' ,['locale' => app()->getLocale(),'id' => $tm->id])}}" class="read-more"><span>@lang('messages.10')</span> <i class="bi bi-arrow-right"></i></a>
                            @endforeach
                        </div>
                    </div>

                </div>

            </div>

        </section>


        <!-- ======= Team Section ======= -->
        <section class="team">
            <div class="container">
                <header class="section-header">
                    <p>@lang('messages.11')</p>
                </header>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach($tame as $tm)
                            <div class="swiper-slide">
                                <div class=" slide-track">
                                    <div class="member ">
                                        <div class="member-img">
                                            <img src="{{asset($tm->image)}}" class="img-fluid" alt=""
                                                 style="height: 100%;">
                                            <div class="social">
                                                <a href="{{$tm->twitter}}"><i class="bi bi-telegram"></i></a>
                                                <a href="{{$tm->instagram}}"><i class="bi bi-instagram"></i></a>
                                                <a href="{{$tm->facebook}}"><i class="bi bi-facebook"></i></a>
                                            </div>
                                        </div>
                                        <div class="member-info">
                                            <a href="#"><h4>{{$tm['name_'.__('messages.lang')]}}</h4></a>
                                            <span>{{$tm['position_'.__('messages.lang')]}}</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section id="projects" class="portfolio">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>@lang('messages.12')</p>
                </header>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <a href="{{route('sort.all', ['locale' => app()->getLocale()])}}/#projects"><li data-filter="*"  >@lang('messages.13')</li></a>
                            <a href="{{route('sort.technical', ['locale' => app()->getLocale()])}}/#projects"><li data-filter=".filter-app">@lang('messages.14')</li></a>
                            <a href="{{route('sort.school', ['locale' => app()->getLocale()])}}/#projects"><li data-filter=".filter-web" class="filter-active">@lang('messages.15')</li></a>
                            <a href="{{route('sort.university', ['locale' => app()->getLocale()])}}/#projects"> <li data-filter=".filter-app">@lang('messages.16')</li></a>
                            <a href="{{route('sort.education', ['locale' => app()->getLocale()])}}/#projects"><li data-filter=".filter-web" >@lang('messages.17')</li></a>
                        </ul>
                    </div>
                </div>

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach($project_type_select     as $tex)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="{{asset($tex->image)}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>{{$tex['name_'.__('messages.lang')]}}</h4>
                                    <div class="portfolio-links">
                                        <a href="{{ route('sort.show', ['locale' => app()->getLocale(), 'id' => $tex->id]) }}" title="More Details"><i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->

@endsection
