@extends('frontend.layouts.app')

@section('title')
Exterior Painting Services @stop

@section('description')
@stop
{{--@section('meta_image')--}}
{{--{{asset('frontend/asset/logo/logo_jobsinjo.png')}} @stop--}}

@push('style')
    <style>
        .paint-about-service {
            padding-top: 0px !important;
            font-size: 23px;
            line-height: 50px;
            letter-spacing: 0px;
            margin-bottom: 0px;
            font-family: 'Arvo', serif;
            font-weight: 700;
            color: #000;
        }
    </style>
@endpush

@section('content')
    <section class="service-area ser-2">
        <div class="container">
            <div class="row">
                <h1 class="wow zoomIn" data-wow-delay=".5s">Exterior Painting Services</h1>
            </div>
        </div>
    </section>
    <!--/Service-area Section-->

    <!--Wall Painting Section-->
    <section class="wall-painting">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="painting wow fadeInLeft" data-wow-delay=".3s">
                        <img class="border-radius-13" src="{{ asset('frontend/assets/images/service/Service-Details1.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="paint-about wow fadeInLeft border-radius-6" data-wow-delay="1s">
                        <h1>Details About</h1>
                        <p class="paint-about-service">Exterior Painting Services</p>
                        <p>
                            Our exterior painting services offer a comprehensive solution for discerning homeowners and
                            commercial property owners who value durability and refined visual appeal.
                            Whether preserving an upscale residence or enhancing a commercial exterior,
                            we deliver reliable, professional results through industry-leading methods and premium materials.
                        </p>
                        <p>
                            From initial consultation to final finish, every project is handled with precision,
                            professionalism, and respect for your space. The result is a timeless interior that reflects
                            quality, elegance, and lasting value.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Wall Painting Section-->

    <section class="wall-p-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="w-p-text border-radius-6">
                        <p>We offer tailored residential exterior painting services designed to enhance and protect
                            your home with long-lasting, refined finishes. From full exterior repaints to detailed
                            touch-ups, the Bright King Painting team delivers precise workmanship, quality materials,
                            and careful attention to every detail.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Wall Painting Content Section-->

    <section class="well-painting-service">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="wps-text">
                        <p>
                            Our exterior painting services are designed for premium residential and commercial properties that demand lasting performance and standout curb appeal. From luxury homes to prominent commercial buildings, we deliver high-quality results using advanced techniques and top-tier materials.                        </p>
                    </div>
                    <div class="wp-services wow fadeInLeft border-radius-6" data-wow-delay=".3s">
                        <h3>Exterior Painting Services</h3>
                        <ul>
                            <li><a>- Comprehensive Exterior Painting</a></li>
                            <li><a>- Deck Painting and Staining</a></li>
                            <li><a>- Fence Painting and Staining</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-serv-image">
                        <img class="border-radius-6" src="{{ asset('frontend/assets/images/alaa_project/home.png') }}" alt="">

                        <div class="psi-bg wow bounceInRight" data-wow-delay=".5s">

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

    @include('frontend.includes.project-ask-section')

@endsection
