@extends('frontend.layouts.app')

@push('style')
    <style>
        .c-a-image::after {
            background: none !important;
        }
    </style>
@endpush

@section('content')

    <!--Hero Section-->
    <section class="hero-slider">

        <rs-module-wrap id="rev_slider_26_1_wrapper" data-alias="Wepaint" data-source="gallery" style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
            <rs-module id="rev_slider_26_1" style="display:none;" data-version="6.2.2">
                <rs-slides>
                    <rs-slide data-key="rs-49" data-title="Slide" data-anim="ei:d,d;eo:d,d;s:d,d;r:0,0;t:zoomout,scaledownfromright;sl:d,d;">
                        <img src="{{ asset('frontend/assets/slider/img/image1.jpg') }}" title="image2" width="1920" height="800" data-parallax="off" data-panzoom="d:10000;e:power0.inOut;ss:100%;se:120%;re:0deg;bs:0px;be:0px;os:200px/0px;oe:-200px/0px;" class="rev-slidebg" data-no-retina>
                        <!---->						</rs-slide>
                    <rs-slide data-key="rs-50" data-title="Slide" data-anim="ei:d;eo:d;s:d;r:0;t:parallaxhorizontal;sl:d;">
                        <img src="{{ asset('frontend/assets/images/alaa_project/image_1.png') }}" title="image4" width="1920" height="800" data-parallax="off" data-panzoom="d:10000;ss:130%;se:100%;re:0deg;bs:0px;be:0px;os:0px/0px;oe:-200px/-200px;" class="rev-slidebg" data-no-retina>
                        <!---->						</rs-slide>
                    <rs-slide data-key="rs-51" data-title="Slide" data-anim="ei:d;eo:d;s:d;r:0;t:zoomout;sl:d;" data-sloop="s:1500;e:4500;" data-mediafilter="toaster">
                        <img src="{{ asset('frontend/assets/images/alaa_project/image_3.png') }}" title="image1" width="1920" height="800" data-parallax="off" data-panzoom="d:10000;ss:100%;se:120%;re:0deg;bs:0px;be:0px;os:0px/0px;oe:-300px/0px;" class="rev-slidebg" data-no-retina>
                        <!---->						</rs-slide>
                    <rs-slide data-key="rs-51" data-title="Slide" data-anim="ei:d;eo:d;s:d;r:0;t:zoomout;sl:d;" data-sloop="s:1500;e:4500;" data-mediafilter="toaster">
                        <img src="{{ asset('frontend/assets/images/alaa_project/image_8.png') }}" title="image1" width="1920" height="800" data-parallax="off" data-panzoom="d:10000;ss:100%;se:120%;re:0deg;bs:0px;be:0px;os:0px/0px;oe:-300px/0px;" class="rev-slidebg" data-no-retina>
                        <!---->						</rs-slide>
                </rs-slides>
            </rs-module>
        </rs-module-wrap>
        <!-- END REVOLUTION SLIDER -->
    </section>
    <!--/Hero Section-->

    <!--Service Section-->
    <section class="service">
        <div class="container">
            <div class="paints-service">
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-service wow fadeInUp border-radius-13" data-wow-delay=".5s">
                            <span class="flaticon-paint ficon-bg-1"></span>
                            <div class="icon-inner">
                                <span class="flaticon-paint"></span>
                            </div>
                            <div class="ss-content">
                                <h3>Interior Painting Services</h3>
                                <p>
                                    Experience elevated interiors where skilled craftsmanship transforms walls into
                                    refined statements of luxury.<br/>Our premium painting services deliver bespoke colours
                                    and impeccable finishes for exclusive residential and commercial spaces.

                                </p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-service ss-2 wow fadeInUp border-radius-13" data-wow-delay="1s">
                            <span class="flaticon-paint-1 ficon-bg-2"></span>
                            <div class="icon-inner">
                                <span class="flaticon-paint-1"></span>
                            </div>
                            <div class="ss-content">
                                <h3>Exterior Painting Services</h3>
                                <p>Our exterior painting services deliver durable, high-quality finishes for upscale
                                    residential and commercial properties, combining expert workmanship with premium
                                    materials for lasting visual appeal.</p>
                                <br/>
                                <a href="#">Read More</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="single-service wow fadeInUp border-radius-13" data-wow-delay="1.5s">
                            <span class="flaticon-paint-roller ficon-bg-3"></span>
                            <div class="icon-inner">
                                <span class="flaticon-paint-roller"></span>
                            </div>
                            <div class="ss-content">
                                <h3>Cabinet painting and refinishing</h3>
                                <p>Experience refined interiors where expert craftsmanship transforms walls into elegant
                                    statements of luxury. Our premium painting services offer curated colours, bespoke
                                    designs, and flawless execution for high-end residential and commercial spaces.</p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
 {{--                   <div class="col-md-4">
                        <div class="single-service ss-2 wow fadeInUp border-radius-13" data-wow-delay=".5s">
                            <span class="flaticon-pantone ficon-bg-1"></span>
                            <div class="icon-inner">
                                <span class="flaticon-pantone"></span>
                            </div>
                            <div class="ss-content">
                                <h3>FLOOR COATING</h3>
                                <p>A great novel concerned primarily with
                                    the interior lives its characters as they
                                    respond the inconvenient narratives
                                    that fate imposes ono them adaptations
                                    these monumental fictions often fail.</p>
                                <a href="service-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-service wow fadeInUp border-radius-13" data-wow-delay="1s">
                            <span class="flaticon-art ficon-bg-5"></span>
                            <div class="icon-inner">
                                <span class="flaticon-art"></span>
                            </div>
                            <div class="ss-content">
                                <h3>GRAFFITI REMIVAL</h3>
                                <p>There is societ ever discovered remotest
                                    corner of the world that has something
                                    that we would consider the arts. Visual
                                    arts - decoration of surfaces and bodies
                                    - appears to be a human universal.</p>
                                <a href="service-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-service ss-2 wow fadeInUp border-radius-13" data-wow-delay="1.5s">
                            <span class="flaticon-graphic-tool ficon-bg-6"></span>
                            <div class="icon-inner">
                                <span class="flaticon-graphic-tool"></span>
                            </div>
                            <div class="ss-content">
                                <h3>CRAFT DESIGNING</h3>
                                <p>A great novel concerned primarily with
                                    the interior lives its characters as they
                                    respond the inconvenient narratives
                                    that fate imposes ono them adaptations
                                    these monumental fictions often fail.</p>
                                <a href="service-details.html">Read More</a>
                            </div>
                        </div>
                    </div>--}}
                </div>
            </div>
        </div>
    </section>
    <!--/Service Section-->

    <!--About-us Section-->
    <section class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-6">
                    <div class="about wow fadeInRight border-radius-13" data-wow-delay=".3s">
                        <div class="ab-ficon">
                            <span class="flaticon-paint-3 ficon-ab-1"></span>
                        </div>
                        <div class="au-tittle">
                            <p>About Us</p>
                            <h2>Doing Painting is Our Big Passion</h2>
                        </div>


                        <p>
                            Founded on family talent and a passion for craftsmanship, Bright King Painting is led by owner Alaa, who began his painting journey at just 17 years old. What started as hands-on experience alongside his father evolved into a full-time career.                        </p>
                        <p>
                            Today, Bright King Painting is synonymous with exceptional quality, refined workmanship, and an elevated client experience—standards we uphold in every project we deliver.                        </p>

                        <div class="btn-learn">
                            <span class="learn-ab"><a href="{{ route("frontend.about") }}">Learn More</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/About-us Section-->

    <!--Recent Section-->
    <section class="completed-project">
        <div class="container">
            <div class="recent-top">
                <p>Recent Project</p>
                <h3>Our Recent Completed Projects</h3>
                <p>
                    We believe in results you can see and feel every day. Our craftsmanship brings lasting beauty to
                    your space, creating finishes that truly belong in your home.
                </p>
            </div>

            <div class="recent-project">
                <div class="row">
                    <div class="col-md-4">
                        <div class="project-1 border-radius-6">
                            <img src="{{ asset('frontend/assets/images/alaa_project/5.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="project-1 border-radius-6">
                            <img src="{{ asset('frontend/assets/images/alaa_project/9.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="project-1 border-radius-6">
                            <img src="{{ asset('frontend/assets/images/alaa_project/8.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="project-1 border-radius-6">
                            <img src="{{ asset('frontend/assets/images/alaa_project/3.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="project-1 border-radius-6">
                            <img src="{{ asset('frontend/assets/images/alaa_project/4.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="project-1 border-radius-6">
                            <img src="{{ asset('frontend/assets/images/alaa_project/10.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="project-1 border-radius-6">
                            <img src="{{ asset('frontend/assets/images/alaa_project/image_1.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="project-1 border-radius-6">
                            <img src="{{ asset('frontend/assets/images/alaa_project/image_3.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="project-1 border-radius-6">
                            <img src="{{ asset('frontend/assets/images/alaa_project/image_5.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Recent Section-->

    <!--Client-feedback Section-->
{{--
    <section class="client-feedback">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="client-image wow fadeInLeft" data-wow-delay=".5s">
                        <img src="{{ asset('frontend/assets/images/client.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="client-content">
                        <p>Testimonials</p>
                        <h3 data-aos="zoom-in">Clients Feedbacks</h3>
                        <p>
                            There’s something special about a space that speaks for itself. The quality and care you
                            see on every wall makes it feel truly yours.
                        </p>
                        <div class="testimo-slide">
                            <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                                <!-- Carousel Slides / Quotes -->
                                <div class="carousel-inner">
                                    <!-- Quote 1 -->
                                    <div class="item active carousel-item">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>“ Some people think that the truth can hidden
                                                    with little cover-up and decoration. But as time
                                                    goes by, what is true is revealed, and what
                                                    is fake fades away. ”</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Quote 2 -->
                                    <div class="item carousel-item">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>“ Some people think that the truth can hidden
                                                    with little cover-up and decoration. But as time
                                                    goes by, what is true is revealed, and what
                                                    is fake fades away. ”</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Quote 3 -->
                                    <div class="item carousel-item">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>“ Some people think that the truth can hidden
                                                    with little cover-up and decoration. But as time
                                                    goes by, what is true is revealed, and what
                                                    is fake fades away. ”</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Quote 4 -->
                                    <div class="item carousel-item">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>“ Some people think that the truth can hidden
                                                    with little cover-up and decoration. But as time
                                                    goes by, what is true is revealed, and what
                                                    is fake fades away. ”</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Quote 5 -->
                                    <div class="item carousel-item">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>“ Some people think that the truth can hidden
                                                    with little cover-up and decoration. But as time
                                                    goes by, what is true is revealed, and what
                                                    is fake fades away. ”</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Bottom Carousel Indicators -->
                                <ol class="carousel-indicators testimo-indicat">
                                    <li data-target="#quote-carousel" data-slide-to="0" class="active">
                                        <img class="img-fluid " src="{{ asset('frontend/assets/images/slider/c-1.jpg') }}" alt="">
                                    </li>
                                    <li data-target="#quote-carousel" data-slide-to="1">
                                        <img class="img-fluid" src="{{ asset('frontend/assets/images/slider/c-2.jpg') }}" alt="">
                                    </li>
                                    <li data-target="#quote-carousel" data-slide-to="2">
                                        <img class="img-fluid" src="{{ asset('frontend/assets/images/slider/c-3.jpg') }}" alt="">
                                    </li>
                                    <li data-target="#quote-carousel" data-slide-to="3">
                                        <img class="img-fluid" src="{{ asset('frontend/assets/images/slider/c-4.jpg') }}" alt="">
                                    </li>
                                    <li data-target="#quote-carousel" data-slide-to="4">
                                        <img class="img-fluid" src="{{ asset('frontend/assets/images/slider/c-5.jpg') }}" alt="">
                                    </li>
                                </ol>
                                <!-- Carousel Buttons Next/Prev -->
                                <div class="testimonial-nav">
                                    <a data-slide="prev" href="#quote-carousel"
                                       class="left carousel-control btn-prev"><i class="fa fa-chevron-left"></i></a>
                                    <a data-slide="next" href="#quote-carousel"
                                       class="right carousel-control btn-next"><i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
--}}
    <!--/Client-feedback Section-->

    <!--Blog Section-->
{{--
    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="blog-one wow fadeInUp" data-wow-delay=".5s">
                        <div class="bo-hover-content">
                            <span class="flaticon-art-1 ficon-blg"></span>
                        </div>
                        <h3>Painting is an illusion, a
                            piece of magic, so what
                            you see is not.</h3>
                        <div class="blg-meta">
                            <ul>
                                <li>Posted: 04th April, 2019</li>
                                <li>Tag: Paint , ainting</li>
                            </ul>
                        </div>
                        <p>Do activities you passionate about which
                            make your heart and soul perky including
                            things like working out cooking, painting
                            writing, yoga, hiking, walking.</p>

                        <div class="btn-learn-2">
                            <span class="learn-li"><a href="blog-details.html">Learn More</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-one wow fadeInUp" data-wow-delay="1s">
                        <div class="bo-hover-content">
                            <span class="flaticon-art-1 ficon-blg"></span>
                        </div>
                        <h3>Painting is a blind man
                            profession. He paints
                            not what he sees.</h3>
                        <div class="blg-meta">
                            <ul>
                                <li>Posted: 04th April, 2019</li>
                                <li>Tag: Paint , ainting</li>
                            </ul>
                        </div>
                        <p>Blind man profession. He paints what he
                            sees, but what he feels, what he tells
                            himself about what he has seen painting
                            Do activities you passionate about.</p>

                        <div class="btn-learn-2">
                            <span class="learn-li"><a href="blog-details.html">Learn More</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-one wow fadeInUp" data-wow-delay="1.5s">
                        <div class="bo-hover-content">
                            <span class="flaticon-art-1 ficon-blg"></span>
                        </div>
                        <h3>Man's profession paints
                            not what he sees, but
                            what he feel what tell.</h3>
                        <div class="blg-meta">
                            <ul>
                                <li>Posted: 04th April, 2019</li>
                                <li>Tag: Paint , ainting</li>
                            </ul>
                        </div>
                        <p>Blind man profession. He paint not what
                            he sees, but what he feels, what he tells
                            himself about what he has seen. Do
                            activities passionate about which make.</p>

                        <div class="btn-learn-2">
                            <span class="learn-li"><a href="blog-details.html">Learn More</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-two wow fadeInUp" data-wow-delay=".5s">
                        <img src="{{ asset('frontend/assets/images/project/Ap-4.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-one wow fadeInUp" data-wow-delay="1s">
                        <div class="bo-hover-content">
                            <span class="flaticon-art-1 ficon-blg"></span>
                        </div>
                        <h3>Painting is an illusion, a
                            piece of magic, so what
                            you see is not.</h3>
                        <div class="blg-meta">
                            <ul>
                                <li>Posted: 04th April, 2019</li>
                                <li>Tag: Paint , ainting</li>
                            </ul>
                        </div>
                        <p>Do activities you passionate about which
                            make your heart and soul perky including
                            things like working out cooking, painting
                            writing, yoga, hiking, walking.</p>

                        <div class="btn-learn-2">
                            <span class="learn-li"><a href="blog-details.html">Learn More</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-one wow fadeInUp" data-wow-delay="1.5s">
                        <div class="bo-hover-content">
                            <span class="flaticon-art-1 ficon-blg"></span>
                        </div>
                        <h3>Man's profession paints
                            not what he sees, but
                            what he feel what tell.</h3>
                        <div class="blg-meta">
                            <ul>
                                <li>Posted: 04th April, 2019</li>
                                <li>Tag: Paint , ainting</li>
                            </ul>
                        </div>
                        <p>Blind man profession. He paint not what
                            he sees, but what he feels, what he tells
                            himself about what he has seen. Do
                            activities passionate about which make.</p>
                        <div class="btn-learn-2">
                            <span class="learn-li"><a href="blog-details.html">Learn More</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
--}}
    <!--/Blog Section-->

    @include('frontend.includes.project-ask-section')

    <!-- care-about Section-->
    <section class="care-about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="c-a-image">
                        <img class="border-radius-6" src="{{ asset('frontend/assets/images/alaa_project/home.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="c-a-content">
                        <p>We Care You</p>
                        <h2>Always We Care About!</h2>
                        <p>
                            We are a family-owned company that believes quality, integrity, and community service are
                            the foundation of our success. We put family first and are committed to delivering
                            exceptional craftsmanship and outstanding customer service while upholding the highest
                            standards of professionalism. We support our team by fostering a healthy, respectful work
                            environment and build long-term relationships based on trust and respect with our
                            clients and the community we serve.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="cap-1">
                                <div class="cap-text">
                                    <span class="cap-m"><span class="counterUp">140</span> K+</span>
                                    <p>Projects Completed</p>
                                </div>
                            </div>
                            <div class="cap-1 cap-2">
                                <div class="cap-text">
                                    <span class="cap-m"><span class="counterUp">212</span> &nbsp;K+</span>
                                    <p>Regular Users</p>
                                </div>
                            </div>
                            <div class="cap-1 cap-3">
                                <div class="cap-text ">
                                    <span class="cap-m"><span class="counterUp">121</span>&nbsp; +</span>
                                    <p>Awards</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /care-about Section-->

@endsection
