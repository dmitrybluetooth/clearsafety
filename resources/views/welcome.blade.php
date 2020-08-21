<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta property="og:image" content="public/img/118058ee9b1133bad39b0c4e5c731698.jpg">

    <title>@lang('main.title')</title>
    <meta content="Прозрачные защитные решетки на окна из поликарбоната" name="descriptison">
    <meta content="Прозрачные защитные решетки на окна из поликарбоната, поликарбонатные решетки, защитные решетки, решетки от выпадения детей" name="keywords">

    <!-- Favicons -->
    <link href="public/img/favicon.png" rel="icon">
    <link href="public/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="public/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="public/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="public/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="public/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="public/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="public/css/style.css" rel="stylesheet">

</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo" style="font-size: 24px"><a href="/">CLEAR<br/>SAFETY</a></h1>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="#hero">@lang('main.header.home')</a></li>
                <li><a href="#about">@lang('main.header.about')</a></li>
                <li><a href="#services">@lang('main.header.why_us')</a></li>
                <li><a href="#portfolio">@lang('main.header.portfolio')</a></li>
                <li><a href="#contact">@lang('main.header.contacts')</a></li>
                <li class="nav-item">
                    <a href="{{ route('locale', __('main.header.set_lang')) }}">@lang('main.header.set_lang')</a>
                </li>
            </ul>
        </nav><!-- .nav-menu -->

        <a href="tel:+375336216262" class="get-started-btn scrollto">+375 (33) 621 62 62</a>
    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <div class="col-xl-6 col-lg-8">
                <h1>@lang('main.hero.center')</h1>
            </div>
        </div>

        <div class="row mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
            <div class="col-xl-2 col-md-4 col-6">
                <div class="icon-box">
                    <i class="ri-store-line"></i>
                    <h3><a>@lang('main.hero.1')</a></h3>
                </div>
            </div>
            <div class="col-xl-2 col-md-4 col-6 ">
                <div class="icon-box">
                    <i class="bx bx-lock"></i>
                    <h3><a>@lang('main.hero.2')</a></h3>
                </div>
            </div>
            <div class="col-xl-2 col-md-4 col-6 mt-4 mt-md-0">
                <div class="icon-box">
                    <i class="bx bx-shield"></i>
                    <h3><a>@lang('main.hero.3')</a></h3>
                </div>
            </div>
            <div class="col-xl-2 col-md-4 col-6 mt-4 mt-xl-0">
                <div class="icon-box">
                    <i class="bx bx-data"></i>
                    <h3><a>@lang('main.hero.4')</a></h3>
                </div>
            </div>
            <div class="col-xl-2 col-md-4 col-7 mt-4 mt-xl-0">
                <div class="icon-box">
                    <i class="ri-bar-chart-box-line"></i>
                    <h3><a>@lang('main.hero.5')</a></h3>
                </div>
            </div>
        </div>

    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img src="public/img/3.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                    <h3>@lang('main.about.h3_1')</h3>
                    <p class="font-italic">
                        @lang('main.about.p_1')
                    </p>
                    <h3>@lang('main.about.h3_2')</h3>
                    <p class="font-italic">
                        @lang('main.about.p_2')</p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="image col-lg-6" style='background-image: url("public/img/118058ee9b1133bad39b0c4e5c731698.jpg");' data-aos="fade-right"></div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                    <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                        <i class="bx bx-receipt"></i>
                        <h4>@lang('main.features.h4_1')</h4>
                        <p>
                            •	@lang('main.features.p_1_1')<br>
                            •	@lang('main.features.p_1_2')<br>
                            •	@lang('main.features.p_1_3')
                        </p>
                    </div>
                    <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                        <i class="bx bx-lock"></i>
                        <h4>@lang('main.features.h4_2')</h4>
                        <p>
                            •	@lang('main.features.p_2_1')<br>
                            •	@lang('main.features.p_2_2')<br>
                            •	@lang('main.features.p_2_3')
                        </p>
                    </div>
                    <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                        <i class="bx bx-wrench"></i>
                        <h4>@lang('main.features.h4_3')</h4>
                        <p>
                            •	@lang('main.features.p_3_1')<br>
                            •	@lang('main.features.p_3_2')<br>
                            •	@lang('main.features.p_3_3')
                        </p>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 30px">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                        <i class="bx bx-images"></i>
                        <h4>@lang('main.features.h4_4')</h4>
                        <p>
                            •	@lang('main.features.p_4_1')<br>
                            •	@lang('main.features.p_4_2')<br>
                            •	@lang('main.features.p_4_3')<br>
                            •	@lang('main.features.p_4_4')<br>
                            •	@lang('main.features.p_4_5')<br>
                            •	@lang('main.features.p_4_6')<br>
                            •	@lang('main.features.p_4_7')<br>
                            •	@lang('main.features.p_4_8')<br>
                            •	@lang('main.features.p_4_9')<br>
                            •	@lang('main.features.p_4_10')<br>
                            •	@lang('main.features.p_4_11')<br>
                        </p>
                    </div>
                    <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                        <i class="bx bx-ruler"></i>
                        <h4>@lang('main.features.h4_5')</h4>
                        <p>
                            •	@lang('main.features.p_5_1')<br>
                            •	@lang('main.features.p_5_2')<br>
                            •	@lang('main.features.p_5_3')<br>
                            •	@lang('main.features.p_5_4')
                        </p>
                    </div><br>
                </div>
                <div class="image col-lg-6" style='background-image: url("public/img/head_pic03.jpg");' data-aos="fade-left"></div>

            </div>
        </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>@lang('main.services.pochemy')</h2>
                <p>@lang('main.services.vibirajot_nas')</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4><a href="">@lang('main.services.h4_a_1')</a></h4>
                        <p>@lang('main.services.p_1')</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4><a href="">@lang('main.services.h4_a_2')</a></h4>
                        <p>@lang('main.services.p_2')</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4><a href="">@lang('main.services.h4_a_3')</a></h4>
                        <p>@lang('main.services.p_3')</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

            <div class="text-center">
                <h3>@lang('main.cta.h3_1')</h3>
                <p>@lang('main.cta.p')</p>
                <h3>@lang('main.cta.h3_2')</h3>
            </div>

        </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>@lang('main.portfolio.h2')</h2>
                <p>@lang('main.portfolio.p')</p>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="public/img/portfolio/imgonline-com-ua-Resize-Z2RvgKN4eW.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="public/img/portfolio/imgonline-com-ua-Resize-Z2RvgKN4eW.jpg" data-gall="portfolioGallery" class="venobox" title=""><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="public/img/portfolio/1570541665_head_pic04.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="public/img/portfolio/1570541665_head_pic04.jpg" data-gall="portfolioGallery" class="venobox" title=""><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="public/img/portfolio/24c036e51983259b1c7317c42a83a209.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="public/img/portfolio/24c036e51983259b1c7317c42a83a209.jpg" data-gall="portfolioGallery" class="venobox" title=""><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="public/img/portfolio/b_polyprotect_44.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="public/img/portfolio/b_polyprotect_44.jpg" data-gall="portfolioGallery" class="venobox" title=""><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="public/img/portfolio/full_skX9TYQT.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="public/img/portfolio/full_skX9TYQT.jpg" data-gall="portfolioGallery" class="venobox" title=""><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="public/img/portfolio/full_Wp7o3PkU.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="public/img/portfolio/full_Wp7o3PkU.jpg" data-gall="portfolioGallery" class="venobox" title=""><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="public/img/portfolio/reshetka-polycarbonat-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="public/img/portfolio/reshetka-polycarbonat-2.jpg" data-gall="portfolioGallery" class="venobox" title=""><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="public/img/portfolio/imgonline-com-ua-Resize-h42uRQgbHN.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="public/img/portfolio/imgonline-com-ua-Resize-h42uRQgbHN.jpg" data-gall="portfolioGallery" class="venobox" title=""><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="public/img/portfolio/Vertikalnaya-recshetka.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <div class="portfolio-links">
                                <a href="public/img/portfolio/Vertikalnaya-recshetka.jpg" data-gall="portfolioGallery" class="venobox" title=""><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="zoom-in">

            <div class="owl-carousel testimonials-carousel">

                <div class="testimonial-item">
                    <img src="public/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                    <h3>@lang('main.testimonials.h3_1')</h3>
                    <h4>@lang('main.testimonials.h4_1')</h4>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        @lang('main.testimonials.p_1')
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                </div>

                <div class="testimonial-item">
                    <img src="public/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                    <h3>@lang('main.testimonials.h3_2')</h3>
                    <h4>@lang('main.testimonials.h4_2')</h4>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        @lang('main.testimonials.p_2')
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                </div>

                <div class="testimonial-item">
                    <img src="public/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                    <h3>@lang('main.testimonials.h3_3')</h3>
                    <h4>@lang('main.testimonials.h4_3')</h4>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        @lang('main.testimonials.p_3')
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                </div>

            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>@lang('main.contact.h2')</h2>
                <p>@lang('main.contact.p')</p>
            </div>

            <div class="row mt-1">
                <div class="col-lg-8 mt-5 mt-lg-0">
                    <div style="position:relative;overflow:hidden;"><a href="https://yandex.by/maps/10274/grodno/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Гродно</a><a href="https://yandex.by/maps/10274/grodno/house/ZkoYfwZiTkIBQFtpfXpycn1qZA==/?ll=23.916146%2C53.633190&utm_medium=mapframe&utm_source=maps&z=15" style="color:#eee;font-size:12px;position:absolute;top:14px;">Олимпийская улица, 21 на карте Гродно — Яндекс.Карты</a><iframe src="https://yandex.by/map-widget/v1/-/CCQlnMxWKD" style="border:0; width: 100%; height: 270px;"></iframe></div>
                </div>

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bx bx-map"></i>
                            <p>@lang('main.contact.address')</p>
                        </div>

                        <div class="email">
                            <i class="bx bx-envelope"></i>
                            <p><a href="mailto:info@clearsafety.by">info@clearsafety.by</a></p>
                        </div>

                        <div class="phone">
                            <i class="bx bx-phone"></i>
                            <p><a href="tel:+375336216262">+375 (33) 621 62 62</a></p>
                        </div>

                        <div class="phone">
                            <i class="bx bxl-instagram"></i>
                            <p><a href="https://www.instagram.com/clearsafety.by/">clearsafety.by</a></p>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>clearsafety.by</span></strong>. @lang('main.copyright')
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="public/vendor/jquery/jquery.min.js"></script>
<script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="public/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="public/vendor/php-email-form/validate.js"></script>
<script src="public/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="public/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="public/vendor/venobox/venobox.min.js"></script>
<script src="public/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="public/vendor/counterup/counterup.min.js"></script>
<script src="public/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="public/js/main.js"></script>

</body>

</html>
