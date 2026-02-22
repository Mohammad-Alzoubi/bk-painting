<!DOCTYPE html>
<html lang="en">

<head>
    <!--- Basic Page Needs  -->
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', "Professional Painting Services in Waterloo, Kitchener, Cambridge & Guelph , Ontario | Bright King Painting")</title>
    <meta name="author" content="brightkingpainting">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
        /* Website is powered by Mohammad Alzoubi services (Web development, SEO) */
        /* https://MohammadAlzoubi.com/ */
        /* Development by: Mohammad Alzoubi */
    </style>
    <!-- SEO Meta Tags-->
    <meta name="description" content="@yield('description','Bright King Painting provides professional interior, exterior, and cabinet painting services in Waterloo, Kitchener, Cambridge, and Guelph, Ontario. Trusted local painters delivering exceptional quality, refined workmanship, and premium residential and commercial painting services.')">
    <meta name="keywords" content="Painters Waterloo Ontario, Painting services Kitchener, Cambridge Ontario painters, Guelph painting company, Interior painting Waterloo, Exterior painting Kitchener, Cabinet painting Cambridge, Residential painting Ontario, Commercial painters Waterloo region">
    <link rel="canonical" href="{{ url()->current() }}" />

    <meta property="og:url"           content="{{url()->current()}}" />
    <meta property="og:type"          content="article" />
    <meta property="og:title"         content="@yield('title', 'Professional Painting Services in Waterloo, Kitchener, Cambridge & Guelph , Ontario | Bright King Painting')" />
    <meta property="og:description"   content="@yield('description','Bright King Painting provides professional interior, exterior, and cabinet painting services in Waterloo, Kitchener, Cambridge, and Guelph, Ontario.')"/>
    <meta property="og:image"         content="@yield('meta_image', asset('frontend/assets/images/alaa_project/logo-bk.png'))" />
    <meta property="og:site_name"     content="Bright King Painting">


    <!-- Mobile Specific Meta  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Arvo:400,400i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli&amp;display=swap" rel="stylesheet">
    <!--Icon-->
    <link rel="shortcut icon" type="image/png" href="{{ asset('frontend/assets/images/alaa_project/favicon-bg.png') }}">
    <!-- CSS -->
    <!--Font-awesome icon-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awosome.css') }}">
    <!--Flaticon CSS-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/font/flaticon.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery.fancybox.min.css') }}">
    <!-- Jquery Ui CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery-ui.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">

    <!-- Revulation Slider -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/slider/css/rs6.css') }}">

    <!-- Main StyleSheet CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
    @stack('style')
    <style>
        .border-radius-13 {
            border-radius:13px;
        }
        .border-radius-6 {
            border-radius: 6px;
        }
    </style>
    @verbatim
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "PaintingContractor",
          "@id": "https://brightkingpainting.com/#business",
          "name": "Bright King Painting",
          "url": "https://brightkingpainting.com",
          "logo": "https://brightkingpainting.com/frontend/assets/images/alaa_project/logo-bk.png",
          "image": "https://brightkingpainting.com/frontend/assets/images/alaa_project/logo-bk.png",
          "description": "Premium interior painting, exterior painting, and cabinet painting services in Waterloo, Kitchener, Cambridge, and Guelph, Ontario.",
          "telephone": "+1-226-507-7986",
          "priceRange": "$$",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "250 Bridgeport Rd E",
            "addressLocality": "Waterloo",
            "addressRegion": "ON",
            "postalCode": "N2J 2K8",
            "addressCountry": "CA"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": 43.476,
            "longitude": -80.515
          },
          "areaServed": [
            {
              "@type": "City",
              "name": "Waterloo"
            },
            {
              "@type": "City",
              "name": "Kitchener"
            },
            {
              "@type": "City",
              "name": "Cambridge"
            },
            {
              "@type": "City",
              "name": "Guelph"
            }
          ],
          "openingHoursSpecification": [
            {
              "@type": "OpeningHoursSpecification",
              "dayOfWeek": [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday"
              ],
              "opens": "08:00",
              "closes": "18:00"
            }
          ],
          "serviceType": [
            "Interior Painting",
            "Exterior Painting",
            "Cabinet Painting",
            "Residential Painting",
            "Commercial Painting"
          ],
          "sameAs": [
            "https://maps.app.goo.gl/F4e12iMBELXExaqz6",
            "https://www.facebook.com/profile.php?id=61577834210837",
            "https://www.instagram.com/brightking.info"
          ],
          "keywords": "Painters Waterloo Ontario, Painting services Kitchener, Cambridge Ontario painters, Guelph painting company, Interior painting Waterloo, Exterior painting Kitchener, Cabinet painting Cambridge"
        }
        </script>
    @endverbatim



</head>

<body>

    <div class="preloader">
        <div class="p-wrapper">
            <div class="spinner">
                <i></i>
                <i></i>
                <i></i>
                <i></i>
                <i></i>
                <i></i>
                <i></i>
            </div>
        </div>
    </div>

    <!--Header Section-->
    @include('frontend.includes.header')
    <!--/Header Section-->

    <!-- Modal -->
    <div class="modal animated fadeIn" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content e-m-contents">
                <div class="modal-body">
                    <button type="button" class="close es-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="card estimate-card es-card-2">
                        <span class="flaticon-paint esc-paint"></span>
                        <h2>Get An Estimate</h2>
                        <article class="card-body">
                            <form>
                                <span class="e-ctl"> 1. What are the wall dimensions?</span>
                                <div class="form-row pt-2">
                                    <div class="col form-group">
                                        <label>Height (m) </label>
                                        <input type="text" class="form-control" placeholder="0.00" id="wd-height" required>
                                    </div> <!-- form-group end.// -->
                                    <div class="col form-group">
                                        <label>Width (m)</label>
                                        <input type="text" class="form-control" placeholder="0.00" id="wd-width" required>
                                    </div> <!-- form-group end.// -->
                                </div> <!-- form-row end.// -->

                                <span class="e-ctl">2. What are the dimensions of the windows/areas
                                        that you don't want to cover in metres?</span>
                                <div class="form-row pt-2">
                                    <div class="form-group col">
                                        <label>Height (m)</label>
                                        <input type="text" class="form-control" placeholder="0.00" id="wnd-height" value="00.00">
                                    </div> <!-- form-group end.// -->
                                    <div class="form-group col">
                                        <label>Width (m)</label>
                                        <input type="text" class="form-control" placeholder="0.00" id="wnd-width" value="00.00">
                                    </div> <!-- form-group end.// -->
                                </div> <!-- form-row.// -->

                                <span class="e-ctl">3. What are the dimensions of the doors
                                            that you don't want to cover in metres?</span>
                                <div class="form-row pt-2">
                                    <div class="form-group col">
                                        <label>Height (m)</label>
                                        <input type="text" class="form-control" placeholder="0" id="doord-height" value="00.00">
                                    </div> <!-- form-group end.// -->
                                    <div class="form-group col">
                                        <label>Width (m)</label>
                                        <input type="text" class="form-control" placeholder="0" id="doord-width" value="00.00">
                                    </div> <!-- form-group end.// -->
                                </div> <!-- form-row.// -->

                                <span class="e-ctl">4. How many coats of paint do you want?</span>
                                <div class="form-group p-2">
                                    <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="coat-qty-check" value="1" checked>
                                        <span class="form-check-label"> 1 coat</span>
                                    </label>
                                    <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="coat-qty-check" value="2">
                                        <span class="form-check-label"> 2 coat</span>
                                    </label>
                                    <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="coat-qty-check" value="3">
                                        <span class="form-check-label"> 3 coat</span>
                                    </label>
                                </div> <!-- form-group end.// -->
                                <div class="e-result">
                                    <div class="e-tottle me-tottle">
                                        <h3 id="litre-result">00.00</h3>
                                        <span>litres of paint</span>
                                    </div>
                                    <div class="er-text">
                                        <p>This is based on a coverage of
                                            <span id="mitresquireperlitre">12</span>m² per litre of paint. Always
                                            check the coverage on the side
                                            of the tin before buying.</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn-block ebtn" id="estimate-btn">Get Estimate Now</button>
                                </div> <!-- form-group// -->
                                <div class="form-group">
                                    <button type="button" class="btn-block ebtn-r" id="estimate-reset-btn">Reset Estimate</button>
                                </div> <!-- form-group// -->

                            </form>
                        </article> <!-- card-body end .// -->
                    </div> <!-- card.// -->
                </div>
            </div>
        </div>
    </div>
    <!--/Model-->

    @yield('content')


    <!-- footer area function start -->
    @include('frontend.includes.footer')

    <!--Footer Section-->
    <footer>
        <p>© {{ date('Y') }} All Rights Reserved By BrightKingPainting</p>
    </footer>
    <!--/Footer Section-->

    <!--Script-->
    <!--Main JS -->
    <script src="{{ asset('frontend/assets/js/jquery-3.4.1.min.js') }}"></script>
    <!-- Animation plugin JS -->
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <!-- Countdown plugin JS -->
    <script src="{{ asset('frontend/assets/js/countdown.js') }}"></script>
    <!-- Counterup plugin JS -->
    <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Shuffle plugin JS -->
    <script src="{{ asset('frontend/assets/js/shuffle.js') }}"></script>
    <!-- Waypoint plugin JS -->
    <script src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script>
    <!-- jquery Ui plugin JS -->
    <script src="{{ asset('frontend/assets/js/jquery-ui.js') }}"></script>
    <!-- Fancybox plugin JS -->
    <script src="{{ asset('frontend/assets/js/jquery.fancybox.min.js') }}"></script>


    <!-- Revulotion Slider -->
    <script src="{{ asset('frontend/assets/slider/js/rbtools.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/slider/js/rs6.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/slider/js/slider-active.js') }}"></script>
    <!--Bootstrap JS-->
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <!--Custom JS-->
    <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"7554c8fb782b4b55873c30e6c068287d","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
    @stack('js')
</body>

</html>
