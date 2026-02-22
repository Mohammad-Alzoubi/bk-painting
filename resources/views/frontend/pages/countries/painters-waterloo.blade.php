@extends('frontend.layouts.app')

@section('title')
Services @stop

{{--@section('description')
@stop--}}
{{--@section('meta_image')--}}
{{--{{asset('frontend/asset/logo/logo_jobsinjo.png')}} @stop--}}

@push('style')
    <style>
        .recent-top {
            padding: 0px !important;
        }
    </style>
@endpush

@section('content')

    <!--Service-area Section-->
    <section class="service-area">
        <div class="container">
            <div class="row">
                <h1 class="wow zoomIn" data-wow-delay=".3s">Our Service</h1>
            </div>
        </div>
    </section>
    <!--/Service-area Section-->

    <!--Our-service Section-->
    <section class="our-service">
        <div class="container">
            <div class="recent-top">
                <h3 class="text-center">Painting Service</h3>
                <p>
                    In Kitchener, Waterloo
                    Interior And Exterior Residential Painting
                </p>
            </div>

            <div class="Exclusive-service">
                <div class="row">
                    <div class="col-md-4">
                        <div class="s-2-single-service">
                            <div class="s-2-image wow fadeInUp" data-wow-delay=".5s">
                                <img class="border-radius-6" src="{{ asset('frontend/assets/images/alaa_project/image_8.png') }}" alt="">
                            </div>
                            <div class="ss-2-content wow fadeInDown" data-wow-delay=".5s">
                                <h3>Interior Painting</h3>
                                <p>
                                    • Comprehensive Interior Painting
                                    <br/>
                                    • Cabinet Painting and Refinishing
                                    <br/>
                                    • Popcorn Removal
                                </p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="s-2-single-service">
                            <div class="s-2-image wow fadeInUp" data-wow-delay="1s">
                                <img class="border-radius-6" src="{{ asset('frontend/assets/images/alaa_project/image_3.png') }}" alt="">
                            </div>
                            <div class="ss-2-content wow fadeInDown" data-wow-delay="1s">
                                <h3>Exterior Painting</h3>
                                <p>
                                    • Comprehensive Exterior Painting
                                    <br/>
                                    • Deck Painting and Staining
                                    <br/>
                                    • Fence Painting and Staining
                                </p>
                                <a href="#">Read More</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="s-2-single-service">
                            <div class="s-2-image wow fadeInUp" data-wow-delay="1.5s">
                                <img class="border-radius-6" src="{{ asset('frontend/assets/images/alaa_project/home.png') }}" alt="">
                            </div>
                            <div class="ss-2-content wow fadeInDown" data-wow-delay="1.5s">
                                <h3>Cabinet painting</h3>
                                <p>
                                    • Professional Cabinet Painting
                                    <br/>
                                    • Cabinet Refinishing and Restoration
                                    <br/>
                                    • High-quality finishes built to last
                                </p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Our-service Section-->

    <!-- Video Section-->
    <section class="video">
        <div class="video-overly">
            <div class="play-icon">
                <a href="#" data-toggle="modal" data-target="#myModal"><i class="fas fa-play"></i></a>
            </div>
        </div>

        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <button type="button" class="button ml-auto" id="pause-button" data-dismiss="modal"><i
                                class="fas fa-times v-close"></i></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div id="headerPopup">
                            <!-- Make sure ?enablejsapi=1 is on URL -->
                            <iframe id="video" src="https://www.youtube.com/embed/PrgwYuhqJM8?enablejsapi=1&amp;html5=1"
                                    allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Video Section-->

    <!--Our-gallery image Section-->
    <section class="our-service">
        <div class="container">
            <div class="recent-top">
                <h3 class="text-center">Our projects</h3>
            </div>

            <div class="Exclusive-service">
                <div class="row">
                    <div class="col-md-4">
                        <div class="s-2-single-service">
                            <div class="s-2-image wow fadeInUp" data-wow-delay=".5s">
                                <img class="border-radius-6" src="{{ asset('frontend/assets/images/alaa_project/8.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="s-2-single-service">
                            <div class="s-2-image wow fadeInUp" data-wow-delay="1s">
                                <img class="border-radius-6" src="{{ asset('frontend/assets/images/alaa_project/2.png') }}" alt="">
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="s-2-single-service">
                            <div class="s-2-image wow fadeInUp" data-wow-delay="1.5s">
                                <img class="border-radius-6" src="{{ asset('frontend/assets/images/alaa_project/3.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="s-2-single-service">
                            <div class="s-2-image wow fadeInUp" data-wow-delay=".5s">
                                <img class="border-radius-6" src="{{ asset('frontend/assets/images/alaa_project/4.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="s-2-single-service">
                            <div class="s-2-image wow fadeInUp" data-wow-delay="1s">
                                <img class="border-radius-6" src="{{ asset('frontend/assets/images/alaa_project/5.png') }}" alt="">
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="s-2-single-service">
                            <div class="s-2-image wow fadeInUp" data-wow-delay="1.5s">
                                <img class="border-radius-6" src="{{ asset('frontend/assets/images/alaa_project/6.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Our-gallery image Section-->

    @include('frontend.includes.project-ask-section')
@endsection
