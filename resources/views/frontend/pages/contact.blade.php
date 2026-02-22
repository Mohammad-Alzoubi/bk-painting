@extends('frontend.layouts.app')

@section('title')
Contact Us @stop

@section('description')
@stop
{{--@section('meta_image')--}}
{{--{{asset('frontend/asset/logo/logo_jobsinjo.png')}} @stop--}}

@push('style')
    <style>
        .message-box select.form-control:focus {
            box-shadow: none;
            outline-style: none;
            border-color: #fec73c;
        }
        .form-control:focus {
            border-color: #fec73c !important;
        }

        /*.message-box select.form-control {*/
        /*    padding: 23px 15px;*/
        /*    border-radius: inherit;*/
        /*}*/
    </style>
@endpush

@section('content')
    <!--Contact Us-Hero Section-->
    <section class="service-area">
        <div class="container">
            <div class="row">
                <h1 class="wow zoomIn" data-wow-delay=".5s">Contact Us</h1>
            </div>
        </div>
    </section>
    <!--/Contact Us-Hero Section-->

    <!--Contact Us Section-->
    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-contact border-radius-13">
                        <span class="flaticon-envelope bg-envelope"></span>
                        <div class="sc-icon-inner">
                            <span class="flaticon-envelope"></span>
                        </div>
                        <h5>Send Email Us:</h5>
                        <p><a href="mailto:info@brightkingpainting.com?subject=Contact%20Us" class="__cf_email__" data-cfemail="info@brightkingpainting.com">info@brightkingpainting.com</a></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-contact border-radius-13">
                        <span class="flaticon-phone bg-phone"></span>
                        <div class="sc-icon-inner">
                            <span class="flaticon-phone"></span>
                        </div>
                        <h5>Call Use</h5>
                        <p>
                            <a href="tel:+12265077986">
                                Call : +1 (226) 507-7986
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-contact border-radius-13">
                        <span class="flaticon-placeholder bg-placeholder"></span>
                        <div class="sc-icon-inner">
                            <span class="flaticon-placeholder"></span>
                        </div>
                        <h5>Our Location</h5>
                        <p>
                            <a target="_blank" href="https://maps.app.goo.gl/TU9KVhw2uL2LHsBU9">
                                250 Bridgeport, Waterloo,Canada
                            </a>
                        </p>

                    </div>
                </div>
                {{-- form send email --}}
                <div class="col-md-8 offset-md-2">
                    <div class="message">
                        <h1>Drop Us A Message Now:</h1>

                    </div>
                    <div class="message-box">
                        <form method="post" action="{{ route('frontend.contact.send') }}">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Your Name*</label>
                                    <input type="text" class="form-control" id="firstName" name="name" placeholder="Your Name Here">
                                    @error('name')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Email Address*</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email Address Here">
                                    @error('email')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Select Service*</label>
{{--                                    <input type="text" class="form-control" id="subjectName" name="subjectName" placeholder="Subject Of Massage">--}}
                                    <select class="form-control" name="services" id="services">
                                        <option value="interior_painting">Interior Painting</option>
                                        <option value="exterior_painting">Exterior Painting</option>
                                        <option value="cabinet_painting">Cabinet painting</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Phone*</label>
                                    <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone Number">
                                    @error('phone')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Your Message</label>
                                    <div>
                                        <textarea rows="6" class="form-control" id="msg" name="message" placeholder="Write Your Message"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <button type="submit" id="submit" name="submit" class="cf-btn btn btn-dark">Send Now</button>
                                    </div>

                                </div>
                                <div class="col-md-12 text-center">
                                    <div class="cf-msg"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Contact Us Section-->

    @include('frontend.includes.project-ask-section')
@endsection

@push('js')
@endpush
