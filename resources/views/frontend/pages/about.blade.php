@extends('frontend.layouts.app')

@section('title')
About Us @stop

@section('description')
@stop
{{--@section('meta_image')--}}
{{--{{asset('frontend/asset/logo/logo_jobsinjo.png')}} @stop--}}

@push('style')
    <style>
        .c-a-image::after {
            background: none !important;
        }
    </style>
@endpush

@section('content')
    <!--About Us-Hero Section-->
    <section class="service-area">
        <div class="container">
            <div class="row">
                <h1>About Us</h1>
            </div>
        </div>
    </section>
    <!--/About Us-Hero Section-->

    <!--About-team Section-->
    <section class="About-team">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="team-image">
{{--                        <img src="{{ asset('frontend/assets/images/team-members/member-01.png') }}" alt="">--}}
                        <img class="border-radius-6" src="{{ asset('frontend/assets/images/alaa_project/logo-bk.png') }}" alt="">
                        <div class="n-of-members">
                            <div class="t-members">
                                <span class="cap-m"><span class="counterUp">102</span>K+</span>
                                <p>Dedicated
                                    Team Member</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="colo-content ab-us">
                        <p>Dedicated Team</p>
                        <h2>We Are Dedicated In Our Work!</h2>
                        <p>
                            We are committed to delivering high-quality work supported by professional customer service,
                            with a strong focus on attention to detail and consistently exceeding our clients’
                            expectations on every project. We operate with honesty, reliability,
                            and professionalism in all our interactions, prioritizing clear communication
                            and on-time delivery. Through these values, we aim to build long-term relationships based
                            on trust and mutual respect with our clients, team, and community.
                        </p>

                        <div class="btn-learn">
                            <span class="learn-ab"><a href="{{ route('frontend.service.index') }}">Our Services</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/About-team Section-->

    <!--Our-experience Section-->
    <section class="our-experience">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="o-e-content">
                        <p>Why Choose Us</p>
                        <h1>We Are Experienced To Help
                            You For Your Paints!</h1>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="expart">
                                <div class="expart-icon">
                                    <span class="flaticon-paint ex-1"></span>
                                </div>
                                <div class="expart-content">
                                    <h4>FAMILY FIRST</h4>
                                    <p>For people like book something
                                        real, whereas digital stuff is
                                        bit more ethereal like the troph.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="expart">
                                <div class="expart-icon">
                                    <span class="flaticon-paint-1 ex-1"></span>
                                </div>
                                <div class="expart-content">
                                    <h4>EXCELLENCE</h4>
                                    <p>For people like book something
                                        real, whereas digital stuff is
                                        bit more ethereal like the troph.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="expart">
                                <div class="expart-icon">
                                    <span class="flaticon-pantone ex-1"></span>
                                </div>
                                <div class="expart-content">
                                    <h4>PROFESSIONALISM</h4>
                                    <p>For people like book something
                                        real, whereas digital stuff is
                                        bit more ethereal like the troph.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--/Our-experience Section-->

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

    <!-- Our-team Section-->
    <section class="our-team">
        <div class="container">
            <div class="os-content">
                <p>Our Team</p>
                <h2>Meet The Team</h2>
            </div>
            <div class="row">
                <div class="col-md-4 wow fadeInUp" data-wow-delay=".5s">
                    <div class="st-member">
                        <img src="{{ asset('frontend/assets/images/team-members/member1.jpg') }}" alt="">
                        <div class="st-s-icon">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f sicon sticon"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p sicon sticon"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <h3 class="wow fadeInDown" data-wow-delay="1s">Alaa BK</h3>
                    <p class="wow fadeInDown" data-wow-delay="1.5s">CEO & Founder</p>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="1s">
                    <div class="st-member">
                        <img src="{{ asset('frontend/assets/images/team-members/member1.jpg') }}" alt="">
                        <div class="st-s-icon">
                        </div>

                    </div>
                    <h3 class="wow fadeInDown" data-wow-delay="1s">Name</h3>
                    <p class="wow fadeInDown" data-wow-delay="1.5s">CO Founder</p>

                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="1.5s">
                    <div class="st-member">
                        <img src="{{ asset('frontend/assets/images/team-members/member1.jpg') }}" alt="">
                        <div class="st-s-icon">
                        </div>

                    </div>
                    <h3 class="wow fadeInDown" data-wow-delay="1s">Mohammad Alzoubi</h3>
                    <p class="wow fadeInDown" data-wow-delay="1.5s">Developers</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /Our-team Section-->

    @include('frontend.includes.project-ask-section')

@endsection
