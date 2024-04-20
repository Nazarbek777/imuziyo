@extends('layouts.app')
@section('title', 'Home Page')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            @foreach($home as $ts)
                <div class="row">
                    <div class="col-lg-6 d-flex flex-column justify-content-center">
                        <h1 data-aos="fade-up">{{$ts->name}}</h1>
                        <h2 data-aos="fade-up" data-aos-delay="400">{{$ts->content}}</h2>

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
                    <p>Bizning ta'lim muassasalarimiz</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-box blue">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Ilm-u ziyo tibbiyot kolleji</h3>
                            <a href="https://college-ilmuziyo.vercel.app/" class="read-more"><span>Ko'rish</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-box orange">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Ilm-u ziyo school</h3>
                            <a href="#" class="read-more"><span>Ko'rish</span> <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-box green">
                            <i class="ri-discuss-line icon"></i>
                            <h3>"ilm-u ziyo" o'quv markazi</h3>
                            @foreach($show as $tm)
                                <a href="{{route('main' , $tm->id)}}" class="read-more"><span>Ko'rish</span> <i class="bi bi-arrow-right"></i></a>
                            @endforeach                        </div>
                    </div>

                </div>

            </div>

        </section>


        <!-- ======= Team Section ======= -->
        <section class="team">
            <div class="container">
                <header class="section-header">
                    <p>Ilm-u ziyo jamoasi</p>
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
                                            <a href="#"><h4>{{$tm->name}}</h4></a>
                                            <span>{{$tm->position}}</span>
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
                    <p>Bizning loyihalarimiz</p>
                </header>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <a href="{{route('sort.all')}}/#projects"><li data-filter="*"  >Barchasi</li></a>
                            <a href="{{route('sort.technical')}}/#projects" ><li data-filter=".filter-app">Tibbiyot texnikumlari</li></a>
                            <a href="{{route('sort.school')}}/#projects" ><li data-filter=".filter-web">Xususiy maktablar</li></a>
                            <a href="{{route('sort.university')}}/#projects"> <li data-filter=".filter-app"   class="filter-active">Universitetlar</li></a>
                            <a href="{{route('sort.education')}}/#projects" ><li data-filter=".filter-web">O'quv markazlari</li></a>
                        </ul>
                    </div>
                </div>

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    @foreach($project_type_select    as $tex)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="{{asset($tex->image)}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>{{$tex->name}}</h4>
                                    <div class="portfolio-links">
                                        <a href="{{route('sort.show', $tex->id)}}" title="More Details"><i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach




                </div>

            </div>

        </section>




        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>Biz bilan bog'lanish</p>
                </header>

                <div class="row gy-1">
                    <div class="col-lg-12">
                        <div class="row gy-4">
                            @foreach($connection as $tk)
                                <div class="col-md-4">
                                    <div class="info-box">
                                        <!-- <i class="bi bi-building"></i> -->
                                        <h3>{{$tk->crm_name}}</h3>
                                        <div class="row">
                                            <div class="col-2">
                                                <i class="bi bi-telephone fs-5">
                                                </i>
                                            </div>
                                            <div class="col-10  ">
                                                <p>{{$tk->crm_number}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <i class="bi bi-geo fs-5">
                                                </i>
                                            </div>
                                            <div class="col-10  ">
                                                <p>{{$tk->crm_location}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>

            </div>

        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->

@endsection
