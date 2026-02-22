@extends('frontend.layouts.app')

@section('title')
service details @stop

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
                <h1 class="wow zoomIn" data-wow-delay=".5s">Interior Painting Services</h1>
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
                        <p class="paint-about-service">Interior Painting Services</p>
                        <p>
                            Step into elevated interiors where skilled artistry transforms walls into refined
                            expressions of luxury. Our high-end interior painting services are tailored for discerning
                            residential and commercial clients,
                            delivering curated colour schemes, custom design solutions, and meticulous attention to detail.
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
                        <p>We offer tailored interior painting services designed to deliver a seamless experience and
                            exceptional finishes throughout your home. From enhancing a grand two-story foyer to
                            refreshing bedroom spaces, the Bright King Painting team brings precision, care, and
                            attention to detail to every project.
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
                            Step into elevated interiors where skilled artistry transforms walls into refined expressions of luxury. Our high-end interior painting services are tailored for discerning residential and commercial clients, delivering curated colour schemes, custom design solutions, and meticulous attention to detail.
                        </p>
                    </div>
                    <div class="wp-services wow fadeInLeft border-radius-6" data-wow-delay=".3s">
                        <h3>Interior Painting Services</h3>
                        <ul>
                            <li><a>- Comprehensive Interior Painting</a></li>
                            <li><a>- Cabinet Painting and Refinishing</a></li>
                            <li><a>- Popcorn Removal</a></li>
                            <li><a>- Plastering</a></li>
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
