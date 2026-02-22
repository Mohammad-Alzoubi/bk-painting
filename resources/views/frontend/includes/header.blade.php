<header class="header-area">
    <div class="container">
        <div class="paint-nav nav-fixed">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="{{ route('frontend.index') }}"><img src="{{ asset('frontend/assets/images/alaa_project/logo-bk.png') }}" alt=""></a>
{{--                <a class="navbar-brand" href="#"><img src="{{ asset('frontend/assets/images/logo.png') }}" alt=""></a>--}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav hp-1-nav ml-auto mt-2">
                        <li class="nav-item  dropdown">
                            <a href="{{ route('frontend.index') }}" class="nav-link">Home</a>
{{--                                <ul class="dropdown-menu" aria-labelledby="dropdown1-1">--}}
{{--                                    <li class="dropdown-item"><a href="index.html">Home 1</a></li>--}}
{{--                                    <li class="dropdown-item"><a href="index-2.html">Home 2</a></li>--}}
{{--                                    <li class="dropdown-item"><a href="index-3.html">Home 3</a></li>--}}
{{--                                    <li class="dropdown-item"><a href="slider-index.html">Slider Homepage</a></li>--}}
{{--                                </ul>--}}
                        </li>
                        <li class="nav-item  dropdown">
                            <a class="nav-link" href="{{ route('frontend.service.index') }}">Service</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                                <li class="dropdown-item"><a href="{{ route('frontend.service.service_details') }}">Interior Painting Services</a></li>
                                <li class="dropdown-item"><a href="{{ route('frontend.service.service_details2') }}">Exterior Painting Services</a></li>
                                <li class="dropdown-item"><a href="#">Cabinet Painting and Refinishing</a></li>
                            </ul>
                        </li>
                        <li class="nav-item  dropdown">
                            <a href="{{ route('frontend.about') }}" class="nav-link">About</a>
                        </li>
                        <li class="nav-item  dropdown">
                            <a href="{{ route('frontend.contact') }}" class="nav-link">Contact</a>
                        </li>
{{--                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{ route('frontend.blog.index') }}">Blogs</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown1">
                                <li class="dropdown-item"><a href="{{ route('frontend.blog.blog_details') }}">Blogs1</a></li>
                                <li class="dropdown-item"><a href="#">Blog2</a></li>
                            </ul>
                        </li>--}}

{{--
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="dropdown5" data-toggle="dropdown">Page</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown1">
                                <li class="dropdown-item dropdown"><a id="dropdown1-1" data-toggle="dropdown">Portfolio</a></li>
                                <li class="dropdown-item"><a href="our-team.html">Team</a></li>
                                <li class="dropdown-item"><a href="blog-main.html">Blog Main</a></li>
                                <li class="dropdown-item dropdown"><a>Blog Details</a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                                        <li class="dropdown-item"><a href="blog-details.html">Blog Details 1</a></li>
                                        <li class="dropdown-item"><a href="blog-details-2.html">Blog Details 2</a></li>
                                        <li class="dropdown-item"><a href="blog-details-3.html">Blog Details 3</a></li>
                                        <li class="dropdown-item"><a href="blog-details-4.html">Blog Details 4</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-item"><a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                                </li>
                                <li class="dropdown-item"><a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                                </li>

                            </ul>
                        </li>
--}}
                        <li class="nav-item">
{{--                            <a class="nav-link mest" data-toggle="modal" data-target="#exampleModalCenter">Estimate</a>--}}
                            <a href="{{ route('frontend.contact') }}" class="nav-link">Estimate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link last-child" href="tel:+12265077986">
                                Call : +1 (226) 507-7986
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
