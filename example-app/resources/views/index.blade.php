@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

    <body>

    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <img src="{{asset('img/logo.png')}}" alt="">

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
    </header>
    <!-- End Header -->
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Ilm-u Ziyo akademiyasi</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Ta'lim sifatini yaxshilagan holda xalqimizning yashash
                        sharoitini yaxshilash yo'lida birgamiz</h2>

                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{asset('img/hero-img.png')}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        {{--      <section id="about" class="about">--}}

        {{--          <div class="container" data-aos="fade-up">--}}
        {{--            <div class="row gx-0 content">--}}

        {{--              <div class="col-lg-8 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">--}}
        {{--                <div>--}}
        {{--                  <h2>Ilm-u ziyo akademiyasi</h2>--}}
        {{--                  <p>--}}
        {{--                    2010-yilda tashkil etilgan “Ilm-u ziyo akademiyasi”--}}
        {{--                    Oʻzbekistonda intellektual oʻsish va akademik mukammallikni--}}
        {{--                    qoʻllab-quvvatlashga qaratilgan yetakchi taʼlim muassasasi hisoblanadi.--}}
        {{--                    Biz boshlang'ich maktabdan oliy ta'limgacha bo'lgan keng qamrovli ta'lim dasturlarini taklif etamiz,--}}
        {{--                    ular turli xil ta'lim ehtiyojlari va intilishlariga javob beradi.--}}
        {{--                  </p>--}}
        {{--                  <strong>Ilm-u ziyo tarixi:</strong>--}}
        {{--                  <p>--}}
        {{--                    2010 yil: O'quv markazi sifatida tashkil etilgan bo'lib, "Ilm-u ziyo akademiyasiga asos solingan".<br>--}}
        {{--                    2019 yil: Boshlangʻich taʼlim uchun tarbiyalovchi va ragʻbatlantiruvchi muhitni taʼminlovchi “Ilm-u ziyo school” maktabi tashkil etildi.<br>--}}
        {{--                    2021-yil: O'zbekiston tarixida birinchi bo'lgan "Ilm-u ziyo tibbiyot kolleji" xususiy tibbiyot texnikumiga asos solindi, u bilim va malakaning eng yuqori standartlariga ega bo'lgan sogʻliqni saqlash mutaxassislarini tayyorlashni maqsad qilgan.<br>--}}
        {{--                    Hozirda: Shahrisabz shahrida tashkil etilgan "Ilm-u ziyo tibbiyot kollejining filiali" kengroq talabalarni qamrab olgan holda kengayishda davom etmoqdamiz..<br>--}}
        {{--                  </p>--}}
        {{--                </div>--}}
        {{--              </div>--}}
        {{--              <div class="col-lg-1">--}}

        {{--              </div>--}}
        {{--              <div class="col-lg-3 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">--}}
        {{--                <div>--}}
        {{--                  <img src="assets/img/about.jpg" class="img-fluid" alt="">--}}
        {{--                </div>--}}

        {{--              </div>--}}

        {{--            </div>--}}
        {{--          </div>--}}

        {{--        </section> -->--}}
        <!-- End About Section -->

        <!-- ======= Values Section ======= -->
        {{--       <section id="values" class="values">--}}

        {{--          <div class="container" data-aos="fade-up">--}}

        {{--            <header class="section-header">--}}
        {{--              <p>Nima uchun aynan Ilm-u ziyo?</p>--}}
        {{--            </header>--}}

        {{--            <div class="row">--}}

        {{--              <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">--}}
        {{--                <div class="box">--}}
        {{--                  <img src="assets/img/values-1.png" class="img-fluid" alt="">--}}
        {{--                  <h3>Sifatli ta'lim</h3>--}}
        {{--       <p>--}}
        {{--          O'quvchilarni globallashgan dunyoda muvaffaqiyatga erishish uchun zarur bo'lgan bilimlar,--}}
        {{--          tanqidiy fikrlash qobiliyatlari va muammolarni hal qilish qobiliyatlari bilan--}}
        {{--          shakllantiradigan qat'iy akademik dasturlarni taqdim etish--}}
        {{--        </p>--}}
        {{--        </div>--}}
        {{--      </div>--}}

        {{--      <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">--}}
        {{--        <div class="box">--}}
        {{--          <img src="assets/img/values-2.png" class="img-fluid" alt="">--}}
        {{--          <h3>Kuchli jamoaviy muhit</h3>--}}
        {{--     <p>--}}
        {{--          Turli xil tadbirlar va tajribalar orqali talabalarimizning intellektual,--}}
        {{--          ijtimoiy va hissiy farovonligini oshirish. O'z safimizda va undan tashqarida ochiq muloqot,--}}
        {{--          jamoaviy ish va o'zaro hurmat madaniyatini rag'batlantirish--}}
        {{--        </p>--}}
        {{--         </div>--}}
        {{--      </div>--}}

        {{--      <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">--}}
        {{--        <div class="box">--}}
        {{--          <img src="assets/img/values-3.png" class="img-fluid" alt="">--}}
        {{--          <h3>Professor-o'qituvchilar</h3>--}}
        {{--        <p>--}}
        {{--          O'quvchilarni ilhomlantirish va o'qish yo'lida yo'naltirishga sodiq bo'lgan yuqori--}}
        {{--          malakali va ishtiyoqli o'qituvchilarni ishga olib, O'quvchilarning sifatli ta'lim olishlarini ta'minlab berish--}}
        {{--        </p>--}}
        {{--         </div>--}}
        {{--      </div>--}}

        {{--    </div>--}}

        {{--    </div>--}}

        {{--    </section>--}}
        <!-- End Values Section -->

        <!-- ======= Counts Section ======= -->
        <!-- <section id="counts" class="counts">
          <div class="container" data-aos="fade-up">

            <div class="row gy-4">

              <div class="col-lg-3 col-md-6">
                <div class="count-box">
                  <i class="bi bi-emoji-smile"></i>
                  <div>
                    <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Bititruvchilar soni</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6">
                <div class="count-box">
                  <i class="bi bi-person" style="color: #ee6c20;"></i>
                  <div>
                    <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                    <p>O'quvchilar soni</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6">
                <div class="count-box">
                  <i class="bi bi-book" style="color: #15be56;"></i>
                  <div>
                    <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Professor o'qituvchilar</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6">
                <div class="count-box">
                  <i class="bi bi-people" style="color: #bb0852;"></i>
                  <div>
                    <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Top menejerlar</p>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </section>End Counts Section -->

        <!-- ======= Testimonials Section ======= -->
        <!-- <section id="testimonials" class="testimonials">

         <div class="container" data-aos="fade-up">

           <header class="section-header">
             <p>O'quvchilarimizning fikrlari</p>
           </header>

           <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
             <div class="swiper-wrapper">

               <div class="swiper-slide">
                 <div class="testimonial-item">
                   <div class="stars">
                     <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                   </div>
                   <p>
                     Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                   </p>
                   <div class="profile mt-auto">
                     <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                     <h3>Saul Goodman</h3>
                     <h4>Ceo &amp; Founder</h4>
                   </div>
                 </div>
               </div>End testimonial item -->

        <!-- <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
            </p>
            <div class="profile mt-auto">
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
            </div>
          </div>
        </div>End testimonial item -->

        <!-- <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
            </p>
            <div class="profile mt-auto">
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
            </div>
          </div>
        </div>End testimonial item -->

        <!-- <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
            </p>
            <div class="profile mt-auto">
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
            </div>
          </div>
        </div>End testimonial item -->

        <!-- <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
            </p>
            <div class="profile mt-auto">
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
            </div>
          </div>
        </div>End testimonial item -->

        <!-- </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>

    </section>End Testimonials Section -->


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
                            <a href="#" class="read-more"><span>Ko'rish</span> <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                </div>

            </div>

        </section>
        <!-- End Services Section -->

        <!-- ======= Pricing Section ======= -->
        <!-- <section id="pricing" class="pricing">

          <div class="container" data-aos="fade-up">

            <header class="section-header">
              <h2>Pricing</h2>
              <p>Check our Pricing</p>
            </header>

            <div class="row gy-4" data-aos="fade-left">

              <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="box">
                  <h3 style="color: #07d5c0;">Free Plan</h3>
                  <div class="price"><sup>$</sup>0<span> / mo</span></div>
                  <img src="assets/img/pricing-free.png" class="img-fluid" alt="">
                  <ul>
                    <li>Aida dere</li>
                    <li>Nec feugiat nisl</li>
                    <li>Nulla at volutpat dola</li>
                    <li class="na">Pharetra massa</li>
                    <li class="na">Massa ultricies mi</li>
                  </ul>
                  <a href="#" class="btn-buy">Buy Now</a>
                </div>
              </div>

              <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="box">
                  <span class="featured">Featured</span>
                  <h3 style="color: #65c600;">Starter Plan</h3>
                  <div class="price"><sup>$</sup>19<span> / mo</span></div>
                  <img src="assets/img/pricing-starter.png" class="img-fluid" alt="">
                  <ul>
                    <li>Aida dere</li>
                    <li>Nec feugiat nisl</li>
                    <li>Nulla at volutpat dola</li>
                    <li>Pharetra massa</li>
                    <li class="na">Massa ultricies mi</li>
                  </ul>
                  <a href="#" class="btn-buy">Buy Now</a>
                </div>
              </div>

              <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="box">
                  <h3 style="color: #ff901c;">Business Plan</h3>
                  <div class="price"><sup>$</sup>29<span> / mo</span></div>
                  <img src="assets/img/pricing-business.png" class="img-fluid" alt="">
                  <ul>
                    <li>Aida dere</li>
                    <li>Nec feugiat nisl</li>
                    <li>Nulla at volutpat dola</li>
                    <li>Pharetra massa</li>
                    <li>Massa ultricies mi</li>
                  </ul>
                  <a href="#" class="btn-buy">Buy Now</a>
                </div>
              </div>

              <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                <div class="box">
                  <h3 style="color: #ff0071;">Ultimate Plan</h3>
                  <div class="price"><sup>$</sup>49<span> / mo</span></div>
                  <img src="assets/img/pricing-ultimate.png" class="img-fluid" alt="">
                  <ul>
                    <li>Aida dere</li>
                    <li>Nec feugiat nisl</li>
                    <li>Nulla at volutpat dola</li>
                    <li>Pharetra massa</li>
                    <li>Massa ultricies mi</li>
                  </ul>
                  <a href="#" class="btn-buy">Buy Now</a>
                </div>
              </div>

            </div>

          </div>

        </section> -->
        <!-- End Pricing Section -->

        <!-- ======= F.A.Q Section ======= -->
        <!-- <section id="faq" class="faq">

          <div class="container" data-aos="fade-up">

            <header class="section-header">
              <h2>F.A.Q</h2>
              <p>Frequently Asked Questions</p>
            </header>

            <div class="row">
              <div class="col-lg-6"> -->
        <!-- F.A.Q List 1-->
        <!-- <div class="accordion accordion-flush" id="faqlist1">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                Non consectetur a erat nam at lectus urna duis?
              </button>
            </h2>
            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
              <div class="accordion-body">
                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
              </button>
            </h2>
            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
              <div class="accordion-body">
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
              </button>
            </h2>
            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
              <div class="accordion-body">
                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="col-lg-6"> -->

        <!-- F.A.Q List 2-->
        <!-- <div class="accordion accordion-flush" id="faqlist2">

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
              </button>
            </h2>
            <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
              <div class="accordion-body">
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
              </button>
            </h2>
            <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
              <div class="accordion-body">
                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                Varius vel pharetra vel turpis nunc eget lorem dolor?
              </button>
            </h2>
            <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
              <div class="accordion-body">
                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>

    </div>

    </section> -->
        <!-- End F.A.Q Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>Ilm-u ziyo jamoasi</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{asset('img/team/ur.png')}}" class="img-fluid" alt="" style="height: 100%;">
                                <div class="social">
                                    <a href=""><i class="bi bi-telegram"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <a href="#"><h4>Uchqun Raxmanov</h4></a>
                                <span>Ilm-u ziyo akademiyasi asoschisi</span>
                                <!-- <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{'img/team/bfy.png'}}" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Bobirjon Yo'ldoshev</h4>
                                <span>Bosh ijrochi direktor</span>
                                <!-- <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{'img/team/bfy.png'}}" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                                <!-- <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro aspernatur molestiae modi.</p> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{'img/team/bfy.png'}}" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Amanda Jepson</h4>
                                <span>Accountant</span>
                                <!-- <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid doloremque ut possimus ipsum officia.</p> -->
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Team Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="projects" class="portfolio">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>Bizning loyihalarimiz</p>
                </header>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">Barchasi</li>
                            <li data-filter=".filter-app">Tibbiyot texnikumlari</li>
                            <li data-filter=".filter-web">Xususiy maktablar</li>
                            <li data-filter=".filter-app">Universitetlar</li>
                            <li data-filter=".filter-web">O'quv markazlari</li>
                        </ul>
                    </div>
                </div>

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{'img/portfolio/kiu.jpg'}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Qarshi Xalqaro Universiteti</h4>
                                <div class="portfolio-links">
                                    <a href="#" title="More Details"><i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{'img/portfolio/kiu.jpg'}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Qarshi Xalqaro Universiteti</h4>
                                <div class="portfolio-links">
                                    <a href="{{asset('img/portfolio/kiu.jpg')}}" data-gallery="portfolioGallery"
                                       class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                                    <a href="#" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{asset('img/portfolio/kiu.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Qarshi Xalqaro Universiteti</h4>
                                <div class="portfolio-links">
                                    <a href="{{asset('img/portfolio/kiu.jpg')}}" data-gallery="portfolioGallery"
                                       class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                                    <a href="#" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{asset('img/portfolio/kiu.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Qarshi Xalqaro Universiteti</h4>
                                <div class="portfolio-links">
                                    <a href="{{asset('img/portfolio/kiu.jpg')}}" data-gallery="portfolioGallery"
                                       class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                                    <a href="#" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{asset('img/portfolio/kiu.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Qarshi Xalqaro Universiteti</h4>
                                <div class="portfolio-links">
                                    <a href="{{asset('img/portfolio/kiu.jpg')}}" data-gallery="portfolioGallery"
                                       class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{asset('img/portfolio/kiu.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Qarshi Xalqaro Universiteti</h4>
                                <div class="portfolio-links">
                                    <a href="{{asset('img/portfolio/kiu.jpg')}}" data-gallery="portfolioGallery"
                                       class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{asset('img/portfolio/kiu.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Qarshi Xalqaro Universiteti</h4>
                                <div class="portfolio-links">
                                    <a href="{{asset('img/portfolio/kiu.jpg')}}" data-gallery="portfolioGallery"
                                       class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{asset('img/portfolio/kiu.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Qarshi Xalqaro Universiteti</h4>
                                <div class="portfolio-links">
                                    <a href="{{asset('img/portfolio/kiu.jpg')}}" data-gallery="portfolioGallery"
                                       class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{asset('img/portfolio/kiu.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Qarshi Xalqaro Universiteti</h4>
                                <div class="portfolio-links">
                                    <a href="{{asset('img/portfolio/kiu.jpg')}}" data-gallery="portfolioGallery"
                                       class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>
        <!-- End Portfolio Section -->

        <!-- ======= Recent Blog Posts Section ======= -->
        <!-- <section id="recent-blog-posts" class="recent-blog-posts">

          <div class="container" data-aos="fade-up">

            <header class="section-header">
              <p>Eng oxirgi yangiliklari</p>
            </header>

            <div class="row">

              <div class="col-lg-4">
                <div class="post-box">
                  <div class="post-img"><img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt=""></div>
                  <span class="post-date">Tue, September 15</span>
                  <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit</h3>
                  <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="post-box">
                  <div class="post-img"><img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt=""></div>
                  <span class="post-date">Fri, August 28</span>
                  <h3 class="post-title">Et repellendus molestiae qui est sed omnis voluptates magnam</h3>
                  <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="post-box">
                  <div class="post-img"><img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt=""></div>
                  <span class="post-date">Mon, July 11</span>
                  <h3 class="post-title">Quia assumenda est et veritatis aut quae</h3>
                  <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                </div>
              </div>

            </div>

          </div>

        </section> -->
        <!-- End Recent Blog Posts Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>Biz bilan bog'lanish</p>
                </header>

                <div class="row gy-1">
                    <div class="col-lg-12">
                        <div class="row gy-4">
                            <div class="col-md-4">
                                <div class="info-box">
                                    <!-- <i class="bi bi-building"></i> -->
                                    <h3>Ilm-u ziyo tibbiyot kolleji</h3>
                                    <div class="row">
                                        <div class="col-2">
                                            <i class="bi bi-telephone fs-5">
                                            </i>
                                        </div>
                                        <div class="col-10  ">
                                            <p>+998 78 113 26 64</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <i class="bi bi-geo fs-5">
                                            </i>
                                        </div>
                                        <div class="col-10  ">
                                            <p>Qashqadaryo viloyati, Qarshi sh. Maxallot mahallasi, Olimlar ko'chasi</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info-box">
                                    <!-- <i class="bi bi-building"></i> -->
                                    <h3>Ilm-u ziyo school</h3>
                                    <div class="row">
                                        <div class="col-2">
                                            <i class="bi bi-telephone fs-5">
                                            </i>
                                        </div>
                                        <div class="col-10  ">
                                            <p>+998 78 113 71 01</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <i class="bi bi-geo fs-5">
                                            </i>
                                        </div>
                                        <div class="col-10  ">
                                            <p>Qashqadaryo viloyati, Qarshi sh. A.Navoiy mahallasi, Olimlar ko'chasi,
                                                1a-uy</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info-box">
                                    <!-- <i class="bi bi-building"></i> -->
                                    <h3>Ilm-u ziyo o'quv markazi</h3>
                                    <div class="row">
                                        <div class="col-2">
                                            <i class="bi bi-telephone fs-5">
                                            </i>
                                        </div>
                                        <div class="col-10  ">
                                            <p>+998 91 450 96 16</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <i class="bi bi-geo fs-5">
                                            </i>
                                        </div>
                                        <div class="col-10  ">
                                            <p>Qashqadaryo viloyati, Qarshi sh. Olimlar ko'chasi, 1-uy</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- End Contact Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-2">
                    <div class="col-lg-6 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <img src="assets/img/logo.png" alt="">
                        </a>
                        <p>Ta'lim sifatini yaxshilagan holda xalqimizning <br>yashash sharoitini yaxshilash yo'lida birgamiz
                        </p>
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
    </footer>
    <!-- End Footer -->
    </body>
@endsection
