<!--footer-nav Section-->
<section class="footer-nav">
    <div class="container">
        <!-- Subscribe -->
        <div class="row">
            <div class="col-md-12">
                <div class="subscribe-top">
                    <div class="sp-logo">
                        <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="">
                    </div>
                    <div class="sp-subscription-form">
                        <div class="sp-input">
                            <h4>Subscribe Us Now :</h4>
                            <div class="input-group">
                                <input type="text" class="form-control sp-in" placeholder="Enter Your Email Address"
                                       onfocus="this.placeholder=''"
                                       onblur="this.placeholder='Enter Your Email Address'"
                                       aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">Subscribe</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer-content">
            <div class="row">
                <div class="col-md-4">
                    <div class="about-company">
                        <h4>About Company</h4>
                        <p>
                            Today, Bright King Painting is synonymous with exceptional quality,<br/> refined workmanship,
                            and an elevated client experience—standards we uphold in every project we deliver.
                            services in Waterloo, Kitchener, Cambridge, and Guelph, Ontario.
                            <br/>
                        </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="about-company">
                        <h4>Services</h4>
                        <ul class="single-footer-widget">
                            <li><a href="{{ route('frontend.service.service_details') }}">Interior Painting</a></li>
                            <li><a href="{{ route('frontend.service.service_details2') }}">Exterior Painting</a> </li>
                            <li><a href="#">Cabinet painting </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="about-company">
                        <h4>Company</h4>
                        <ul class="single-footer-widget">
                            <li><a href="{{ route('frontend.about') }}">About Us</a></li>
                            <li><a href="{{ route('frontend.contact') }}">Contact US</a></li>
{{--                            <li><a href="{{ route('frontend.blog.index') }}">Blogs</a></li>--}}
{{--                            <li><a href="#">Terms of Service</a></li>--}}
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="about-company">
                        <h4>Follow Us:</h4>
                        <div class="social-icon">
                            <ul class="sicon-frist">
                                <li><a target="_blank" href="https://wa.me/12265077986"><i class="fab fa-whatsapp sicon"></i></a></li>
                                <li><a target="_blank" href="https://www.facebook.com/profile.php?id=61577834210837"><i class="fab fa-facebook-f sicon"></i></a></li>
                                <li><a target="_blank" href="https://www.instagram.com/brightking.info"><i class="fab fa-instagram sicon"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--footer-nav Section-->
