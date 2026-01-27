<!doctype html>
<html lang="en">

<head>
    <!-- META -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- FAVICONS ICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/site.webmanifest">
    <!-- PAGE TITLE HERE -->
    <title>Moto Nowa</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" />
    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.min.css') }}" />
    <!-- WOW ANIMATION STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}" />
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lc_lightbox.css') }}" />
    <!-- LC LIGHT BOX POPUP -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/feather.css') }}" />
    <!-- FEATHER ICON SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.min.css') }}" />
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.min.css') }}" />
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/swiper-bundle.min.css') }}" />

    <!-- SWIPER Slider -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.min.css" />
    <!-- DATETIMEPICKER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <!-- MAIN STYLE SHEET -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- REMIX ICON -->
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css" />
    <!-- CUSTOM SCROLLBAR -->
</head>

<body>
    <!-- LOADING AREA START ===== -->
    <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <img class="loader-gif" src="{{asset('images/loader-car.gif')}}" alt="loader Image">
        </div>
    </div>
    <!-- LOADING AREA  END ====== -->

    <div class="page-wraper">
        <!-- HEADER START -->
        <header
            class="site-header header-style-1 mobile-sider-drawer-menu light-hdr">
            <div class="header-middle-wraper sticky-header">
                <div class="header-middle main-bar">
                    <div class="logo-header">
                        <div class="logo-header-inner logo-header-one">
                            <a href="/">
                                <img src="{{asset('images/logo/logo-transparent.png')}}" alt="Logo" style="width: 100%; height: 100%;" />
                            </a>
                        </div>
                    </div>

                    <div class="header-info-wraper">
                        <div class="main-bar-wraper navbar-expand-lg">
                            <div class="header-bottom">
                                <div class="container-block clearfix">
                                    <div class="navigation-bar">
                                        <!-- NAV Toggle Button -->
                                        <button
                                            id="mobile-side-drawer"
                                            data-target=".header-nav"
                                            data-toggle="collapse"
                                            type="button"
                                            class="navbar-toggler collapsed">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar icon-bar-first"></span>
                                            <span class="icon-bar icon-bar-two"></span>
                                            <span class="icon-bar icon-bar-three"></span>
                                        </button>


                                        <!-- MAIN Vav -->
                                        <div
                                            class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-between">
                                            <ul class="nav navbar-nav">
                                                <li class="{{ request()->is('/') ? 'active' : '' }}"><a
                                                        href="/">Home</a></li>
                                                <li class="{{ request()->is('pricing') ? 'active' : '' }}"><a
                                                        href="/pricing">Pricing</a></li>
                                                <li class="{{ request()->is('portfolio') ? 'active' : '' }}"><a
                                                        href="/portfolio">Portfolio</a></li>
                                                <li class="{{ request()->is('about-us') ? 'active' : '' }}"><a
                                                        href="/about-us">About Us</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Header Right Section-->
                    <div class="extra-nav header-1-nav">
                        <div class="extra-cell one">
                            <ul class="wt-topbar-left-info">
                                <li>
                                    <a href="tel:+923162126865">
                                        <span><i class="ri-mail-line"></i></span>0316 21 26 865
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:[EMAIL_ADDRESS]">
                                        <span><i class="ri-phone-line"></i></span>fossphorus@gmail.com
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER END -->

        <!-- CONTENT START -->
        <div class="page-content">

            <!--BANNER START-->
            <div class="twm-home2-bnr" style="background-image: url('images/main-slider/slider1/car.jpg');">
                <div class="twm-banner-overlay">
                    <div class="container">
                        <div class="mask-circle-shape zoom-in-out-element"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="twm-banner-left-content-section">
                        <div class="twm-banner-left-content">
                            <div class="twm-sm-title left">Premium</div>
                            <h2 class="twm-banner-title">
                                <em>Your<span class="txt-type" data-wait="3000"
                                        data-words='["Choice", "Car"]'></span></em>
                                <span>Buy</span>Sell & Invest
                            </h2>
                            <div class="twm-bnr-discription">
                                You can also buy or sell a vehicle of your choice and enjoy the freedom to travel
                                wherever you want.
                            </div>
                            <div class="twm-bnr-buttons">
                                <a href="/portfolio" class="site-button-secondry btn-large">
                                    <em>View Full Detail</em>
                                </a>
                                <a href="/pricing" class="site-button btn-large">
                                    <em>Invest Now</em>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="twm-banner-product-price">
                        <div class="twm-product-name">harley davidson</div>
                        <div class="twm-price-section">
                            <div class="v-price">$800</div>
                            <div class="v-duration">/ Day</div>
                        </div>
                    </div> -->
                </div>
                <div class="twm-bnr-lg-text">
                    <span>For Invest</span>
                </div>
            </div>
            <!--BANNER END-->

            {{ $slot }}
        </div>
        <!-- CONTENT END -->

        <!-- FOOTER START -->
        <footer class="footer-dark">
            <div class="container">
                <!-- FOOTER BLOCKES START -->
                <div class="footer-top">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <div class="widget widget_about">
                                <div class="logo-footer clearfix">
                                    <a href="/"><img src="{{asset('images/logo/logo-transparent.png')}}" alt="Image" /></a>
                                </div>
                                <div class="f-about-info">
                                    We offer a range of the finest and most premium cars and
                                    bikes on rent.
                                </div>
                                <ul class="ftr-list">
                                    <li>
                                        <i class="ri-phone-line"></i><a href="tel:+923162126865">0316 21 26 865</a>
                                    </li>
                                    <li>
                                        <i class="ri-mail-line"></i>fossphorus@gmail.com
                                    </li>
                                    <li>
                                        <i class="ri-map-pin-line"></i>Civic Center - Azade Trade center
                                    </li>
                                </ul>
                                <div class="twm-social">
                                    <ul>
                                        <li>
                                            <a href="/"><i class="ri-twitter-line"></i></a>
                                        </li>
                                        <li>
                                            <a href="/"><i class="ri-facebook-line"></i></a>
                                        </li>
                                        <li>
                                            <a href="/"><i class="ri-global-line"></i></a>
                                        </li>
                                        <li>
                                            <a href="/"><i class="ri-linkedin-line"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-8 col-lg-8">
                            <div class="ftr-right-section">
                                <div class="row">
                                    <div class="col-lg-5 col-md-6 col-6 m-b20">
                                        <div class="widget widget_time-duraion">
                                            <h3 class="widget-title">Quick Links</h3>
                                            <ul>
                                                <li>
                                                    <span>Monday - Friday:</span>09:00 AM - 09:00 PM
                                                </li>
                                                <li><span>Saturday:</span>09:00 AM - 07:00PM</li>
                                                <li><span>Sunday:</span>Closed</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-6 m-b20">
                                        <div class="widget widget_services">
                                            <h3 class="widget-title">Quick Links</h3>
                                            <ul>
                                                <li><a href="/about-us">About us</a></li>
                                                <li><a href="/pricing">Pricing</a></li>
                                                <li><a href="/portfolio">Portfolio</a></li>
                                                <li><a href="/contact-us">Contact</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-12 col-sm-12 m-b20">
                                        <div class="widget widget_services">
                                            <h3 class="widget-title">Vehicles Type</h3>
                                            <ul class="gris-2-column">
                                                <li><a href="cars-detail.html">SUVs</a></li>
                                                <li><a href="cars-detail.html">Sport Coupe</a></li>
                                                <li><a href="cars-detail.html">Convertible</a></li>
                                                <li><a href="cars-detail.html">Wagon</a></li>
                                                <li><a href="cars-detail.html">Sedan</a></li>
                                                <li><a href="cars-detail.html">Yamaha R15</a></li>
                                                <li><a href="cars-detail.html">BMW S 1000 RR</a></li>
                                                <li><a href="/portfolio">Portfolio</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="twm-subscribe-nl">
                                    <div class="twm-nl-title">
                                        Subscribe To Our Newsletter Today!
                                    </div>
                                    <div class="twm-nl-section">
                                        <form>
                                            <div class="ftr-nw-form">
                                                <input name="news-letter" class="form-control"
                                                    placeholder="Email address..." type="text" />
                                                <button class="ftr-nw-subcribe-btn">
                                                    <i class="ri-arrow-right-up-line"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FOOTER COPYRIGHT -->
            <div class="footer-bottom">
                <div class="footer-bottom-info">
                    <div class="footer-copy-right">
                        <span class="copyrights-text">© 2025<span class="site-text-primary">Moto Nova</span> All rights
                            reserved.</span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
        <button class="scroltop" id="scrollToTop" aria-label="Scroll to top">
            <span class="ri-arrow-up-line" id="btn-vibrate"></span>
        </button>
    </div>

    <!-- JAVASCRIPT  FILES ========================================= -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- JQUERY.MIN JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js"></script>
    <!-- POPPER.MIN JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <!-- BOOTSTRAP.MIN JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- MAGNIFIC-POPUP JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <!-- WAYPOINTS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/shortcuts/sticky.min.js"></script>
    <!-- STICKY HEADER -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <!-- COUNTERUP JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
    <!-- MASONRY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/5.0.0/imagesloaded.pkgd.min.js"></script>
    <!-- MASONRY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- OWL SLIDER -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/theia-sticky-sidebar/1.7.0/ResizeSensor.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/theia-sticky-sidebar/1.7.0/theia-sticky-sidebar.min.js"></script>
    <!-- STICKY SIDEBAR  -->
    <script src="{{ asset('js/lc_lightbox.lite.js') }}"></script>
    <!-- IMAGE POPUP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.3.1/swiper-bundle.min.js"></script>
    <!-- SWIPER JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <!-- WOW ANIMATION JS -->
    <script src="{{ asset('js/custom.js') }}"></script>
    <!-- CUSTOM FUCTIONS -->

    <script>
        // Initialize Testimonial Carousel
        jQuery(document).ready(function($) {
            if ($('.twm-blog-carousel').length) {
                $('.twm-blog-carousel').owlCarousel({
                    loop: true,
                    margin: 30,
                    nav: true,
                    dots: false,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    navText: ['<i class="ri-arrow-left-wide-line"></i>', '<i class="ri-arrow-right-wide-line"></i>'],
                    responsive: {
                        0: {
                            items: 1
                        },
                        640: {
                            items: 1
                        },
                        768: {
                            items: 2
                        },
                        991: {
                            items: 2
                        },
                        1200: {
                            items: 3
                        }
                    }
                });
            }

            // Enhanced Scroll to Top Functionality
            const scrollToTopBtn = $('#scrollToTop');

            // Show/hide button based on scroll position
            $(window).scroll(function() {
                if ($(this).scrollTop() > 300) {
                    scrollToTopBtn.addClass('show');
                } else {
                    scrollToTopBtn.removeClass('show');
                }
            });

            // Smooth scroll to top on click
            scrollToTopBtn.on('click', function(e) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: 0
                }, 100, 'swing');
            });
        });
    </script>
</body>

</html>