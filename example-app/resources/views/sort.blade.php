@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">

            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Bosh sahifa</a></li>
                    <li><a class="nav-link scrollto" href="#services">Tashkilotlarimiz</a></li>
                    <li><a class="nav-link scrollto" href="#team">Bizning jamoa</a></li>
                    <li><a class="nav-link scrollto" href="#projects">Loyihalarimiz</a></li>
                    <li><a class="getstarted scrollto" href="#contact">Bog'lanish</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="index.html">Bosh sahifa</a></li>
                    <li>Qarshi Xalqaro Universiteti</li>
                </ol>
                <h2>Qarshi Xalqaro Universiteti</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">

                                <div class="swiper-slide">
                                    <img src="assets/img/portfolio/kiu.jpg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/portfolio/kiu.jpg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/portfolio/kiu.jpg" alt="">
                                </div>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Project information</h3>
                            <ul>
                                <li><strong>Category</strong>: Web design</li>
                                <li><strong>Client</strong>: ASU Company</li>
                                <li><strong>Project date</strong>: 01 March, 2020</li>
                                <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
                            </ul>
                        </div>
                        <div class="portfolio-description">
                            <h2>This is an example of portfolio detail</h2>
                            <p>
                                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-2">
                    <div class="col-lg-6 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <img src="assets/img/logo.png" alt="">
                        </a>
                        <p>Ta'lim sifatini yaxshilagan holda xalqimizning <br>yashash sharoitini yaxshilash yo'lida birgamiz</p>
                    </div>

                    <div class="col-lg-6 col-6 footer-links">

                        <div class="social-links mt-3 ">
                            <h4>Ijtimoiy tarmoqlar:</h4>
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Ilm-u ziyo</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
@endsection
