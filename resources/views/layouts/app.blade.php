<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="author" content="http://servetechpro.com/" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {!! SEO::generate() !!}

    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#002c42">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/animate.css" />
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="../css/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="../css/themify-icons.css" />
    <link rel="stylesheet" type="text/css" href="../css/slick.css">
    <link rel="stylesheet" type="text/css" href="../css/prettyPhoto.css">
    <link rel="stylesheet" type="text/css" href="../css/shortcodes.css" />
    <link rel="stylesheet" type="text/css" href="../css/main.css" />
    <link rel="stylesheet" type="text/css" href="../css/megamenu.css" />
    <link rel="stylesheet" type="text/css" href="../css/responsive.css" />
</head>

<body class="ttm-one-page-site">
    <div id="ttm-home" class="ttm-one-page-site">

        @if(Session::has('msg'))
        <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="commentLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="row p-4">
                            <p class="text-3 mb-0">Your message is well received. We will get back to you shortly.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <!-- Inquiry Modal -->
        <div class="modal fade" id="inquiryModal" tabindex="-1" role="dialog" aria-labelledby="inquiryModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="inquiryModalLabel">Inquiry Modal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form id='inquiry_form' method="post" action="{{route('inquiryStore')}}" class='request_qoute_form wrap-form clearfix'>
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <span class="text-input"><input name="name" type="text" value="" placeholder="Your Name" required="required"></span>
                            </div>
                           
                            <div class="col-md-6">
                                <span class="text-input"><input name="phone" type="number" value="" placeholder="Phone Number" required="required"></span>
                            </div> 
                            <div class="col-md-12">
                                <span class="text-input"><input name="email" type="email" value="" placeholder="Email Address" required="required"></span>
                            </div>
                            <div class="col-md-12">
                                <span class="text-input"><input name="product" type="text" id="productName" value="" placeholder=""  readonly></span>
                            </div>
                            <div class="col-lg-12">
                                <span class="text-input"><textarea name="message" rows="3" placeholder="Your Message" required="required"></textarea></span>
                            </div>
                            <div class="col-lg-12">
                                <button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" type="submit" rel=noopener noreferrer>Send Message!</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>

        <!--page start-->
        <div class="page">
            <!--header start-->
            <header id="masthead" class="header ttm-header-style-03">
                <!-- topbar -->
                <div class="top_bar ttm-bgcolor-white clearfix">
                    <div class="container-fluid">
                        <div class="row no-gutters">
                            <div class="col-xl-12 d-flex flex-row align-items-center">
                                <div class="">
                                    <div class="top_bar_icon ttm-icon_element-fill ttm-icon_element-color-skincolor"><i class="fa fa-phone"></i></div>
                                    <a href="tel:{{ app('contact')->phone_one }}">{{ app('contact')->phone_one }}</a> | <a href="tel:{{ app('contact')->phone_two }}">{{ app('contact')->phone_two }}</a>
                                </div>
                                <div class="ml-auto p-0">
                                    <div class="top_bar_contact_item">
                                        <div class="top_bar_icon"><i class="ti ti-email"></i></div>
                                        Email:<a href="mailto:{{ app('contact')->email }}">{{ app('contact')->email }}</a>
                                    </div>
                                    <div class="top_bar_contact_item">
                                        <div class="top_bar_icon"><i class="ti ti-location-pin"></i></div>
                                        {{ app('contact')->address }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- topbar end -->

                <!-- site-header-menu -->
                <div id="site-header-menu" class="site-header-menu ttm-bgcolor-darkgrey">
                    <div class="site-header-menu-inner ttm-stickable-header">
                        <div class="container-fluid fullwide">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!--site-navigation -->
                                    <div id="site-navigation" class="site-navigation d-flex flex-row align-items-center justify-content-between" data-sticky-height="60">
                                        <!-- site-branding -->
                                        <a class="home-link" href="/" title="{{ app('contact')->name }}" rel="home">
                                            <img id="logo-img" class="img-fluid auto_size float-left" src="../assets/{{ app('contact')->logo }}" alt="{{ app('contact')->name }}" width="50" height="60">
                                            <h1 class="text-uppercase">{{ app('contact')->name }}</h1>
                                        </a>
                                        <!-- site-branding end -->
                                        <div class="d-flex flex-row m-auto">
                                            <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                                <span class="menubar-box">
                                                    <span class="menubar-inner"></span>
                                                </span>
                                            </div>
                                            <!-- menu -->
                                            <nav class="main-menu menu-mobile" id="menu">
                                                <ul class="menu">
                                                    <li><a data-scroll href="{{ route('home_path') }}#home">Home</a></li>
                                                    <li><a data-scroll href="{{ route('home_path') }}#about">About Us</a></li>
                                                    <li><a data-scroll href="{{ route('home_path') }}#services">Services</a></li>
                                                    <li><a data-scroll href="{{ route('home_path') }}#products">Products</a></li>
                                                    <li><a data-scroll href="{{ route('home_path') }}#portfolio">Portfolio</a></li>
                                                    <li><a data-scroll href="{{ route('home_path') }}#contact">Contact Us</a></li>
                                                </ul>
                                            </nav>
                                            <!-- menu end -->
                                        </div>
                                        <div class="header_extra d-flex flex-row align-items-center">
                                            <a href="../assets/{{ app('contact')->brochure }}" target="_blank" class="ttm-btn ttm-btn-style-fill ttm-btn-shape-square ttm-btn-color-white">Download Brochure</a>
                                        </div>
                                    </div>
                                    <!-- site-navigation end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- site-header-menu end-->
            </header>
            <!--header end-->

            @yield('content')
        </div><!-- page end -->

        <!--footer start-->
        <footer id="footer" class="footer widget-footer ttm-bgcolor-darkgrey ttm-bgimage-yes bg-img3 ttm-textcolor-white  clearfix">
            @include('front.footer')
        </footer>
        <!--footer end-->

        <!--back-to-top start-->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!--back-to-top end-->
    </div>

    <!-- Javascript -->
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/jquery-migrate-3.3.2.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.easing.js"></script>
    <script src="../js/jquery-waypoints.js"></script>
    <script src="../js/jquery-validate.js"></script>
    <script src="../js/jquery.prettyPhoto.js"></script>
    <script src="../js/slick.min.js"></script>
    <script src="../js/numinate.min.js"></script>
    <script src="../js/imagesloaded.min.js"></script>
    <script src="../js/jquery-isotope.js"></script>
    <script src="../js/main.js"></script>
    <!-- Javascript end-->

    <script src="../js/jquery.validate.min.js"></script>
    <script type="text/javascript">
        $("#contact_form").validate();
        $("#inquiry_form").validate();

        $(window).on('load', function() {
            $('#myModal').modal('show');
        });
    </script>

<script>
    $(document).ready(function() {
        $('#inquiryModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var productName = button.data('product-name');
            var modal = $(this);
            modal.find('#productName').attr('placeholder', '' + productName + '').attr('value', '' + productName + '');
         
          
        });
    });
</script>
</body>

</html>