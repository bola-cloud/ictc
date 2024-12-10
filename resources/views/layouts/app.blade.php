<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ICTC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Your page description here" />
    <meta name="author" content="" />

    <!-- css -->
    <link href="https://fonts.googleapis.com/css?family=Handlee|Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('css/bootstrap-responsive.css')}}" rel="stylesheet" />
    <link href="{{asset('css/flexslider.css')}}" rel="stylesheet" />
    <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet" />
    <link href="{{asset('css/camera.css')}}" rel="stylesheet" />
    <link href="{{asset('css/jquery.bxslider.css')}}" rel="stylesheet" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Theme skin -->
    <link href="{{asset('color/default.css')}}" rel="stylesheet" />

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('ico/apple-touch-icon-144-precomposed.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('ico/apple-touch-icon-114-precomposed.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('ico/apple-touch-icon-72-precomposed.png')}}" />
    <link rel="apple-touch-icon-precomposed" href="{{asset('ico/apple-touch-icon-57-precomposed.png')}}" />
    <link rel="shortcut icon" href="{{asset('img/ictc.jpeg')}}" />

    <style>
        header .logo img {
            height: 53px;
            width: 73px;
        }
    </style>
    <!-- =======================================================
        Theme Name: Eterna
        Theme URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
        Author: BootstrapMade.com
        Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>

    <div id="wrapper">

        <!-- start header -->
        <header>
        <div class="top">
            <div class="container">
            <div class="row">
                <div class="span6">
                <p class="topcontact"><i class="icon-phone"></i> +20100100000</p>
                </div>
                <div class="span6">

                <ul class="social-network">
                    <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-white"></i></a></li>
                    <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-white"></i></a></li>
                    <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-white"></i></a></li>
                    <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest  icon-white"></i></a></li>
                    <li><a href="#" data-placement="bottom" title="Google +"><i class="icon-google-plus icon-white"></i></a></li>
                    <li><a href="#" data-placement="bottom" title="Dribbble"><i class="icon-dribbble icon-white"></i></a></li>
                </ul>

                </div>
            </div>
            </div>
        </div>
        <div class="container">


            <div class="row nomargin">
            <div class="span4">
                <div class="logo">
                <a href="{{route('home')}}"><img src="{{asset('img/ictc.jpeg')}}" alt="" /></a>
                </div>
            </div>
            <div class="span8">
                <div class="navbar navbar-static-top">
                <div class="navigation">
                    <nav>
                    <ul class="nav topnav">
                        <li class="dropdown active">
                        <a href="{{route('home')}}"><i class="icon-home"></i> Home </a>
                        </li>
                        <li class="dropdown">
                        <a href="#">About <i class="icon-angle-down"></i></a>
                        </li>
                        <li class="dropdown">
                        <a href="#">Portfolio <i class="icon-angle-down"></i></a>
                        </li>
                        <li class="dropdown">
                        <a href="#">Blog <i class="icon-angle-down"></i></a>
                        </li>
                        <li>
                        <a href="#">Contact </a>
                        </li>
                    </ul>
                    </nav>
                </div>
                <!-- end navigation -->
                </div>
            </div>
            </div>
        </div>
        </header>
        <!-- end header -->
        <div>
            @yield('content')
        </div>
        <footer>
            <div class="container">
            <div class="row">
                <div class="span4">
                <div class="widget">
                    <h5 class="widgetheading">Browse pages</h5>
                    <ul class="link-list">
                    <li><a href="#">Our company</a></li>
                    <li><a href="#">Terms and conditions</a></li>
                    <li><a href="#">Privacy policy</a></li>
                    <li><a href="#">Press release</a></li>
                    <li><a href="#">What we have done</a></li>
                    <li><a href="#">Our support forum</a></li>
                    </ul>
    
                </div>
                </div>
                <div class="span4">
                <div class="widget">
                    <h5 class="widgetheading">Get in touch</h5>
                    <address>
                                <strong>Eterna company Inc.</strong><br>
                                Somestreet 200 VW, Suite Village A.001<br>
                                Jakarta 13426 Indonesia
                            </address>
                    <p>
                    <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
                    <i class="icon-envelope-alt"></i> email@domainname.com
                    </p>
                </div>
                </div>
                <div class="span4">
                <div class="widget">
                    <h5 class="widgetheading">Subscribe newsletter</h5>
                    <p>
                    Keep updated for new releases and freebies. Enter your e-mail and subscribe to our newsletter.
                    </p>
                    <form class="subscribe">
                    <div class="input-append">
                        <input class="span2" id="appendedInputButton" type="text">
                        <button class="btn btn-theme" type="submit">Subscribe</button>
                    </div>
                    </form>
                </div>
                </div>
            </div>
            </div>
            <div id="sub-footer">
            <div class="container">
                <div class="row">
                <div class="span6">
                    <div class="copyright">
                    <p><span>&copy; ICTC. All right reserved</span></p>
                    </div>
    
                </div>
    
                <div class="span6">
                    <div class="credits">
                    <!--
                        All the links in the footer should remain intact.
                        You can delete the links only if you purchased the pro version.
                        Licensing information: https://bootstrapmade.com/license/
                        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Eterna
                    -->
                    Designed by <a href="#">Eng:Bola Eshaq</a>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </footer>
    </div>
    <a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bglight icon-2x active"></i></a>
  
    <!-- javascript
      ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
  
    <script src="{{asset('js/modernizr.custom.js')}}"></script>
    <script src="{{asset('js/toucheffects.js')}}"></script>
    <script src="{{asset('js/google-code-prettify/prettify.js')}}"></script>
    <script src="{{asset('js/jquery.bxslider.min.js')}}"></script>
    <script src="{{asset('js/camera/camera.js')}}"></script>
    <script src="{{asset('js/camera/setting.js')}}"></script>
  
    <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('js/portfolio/jquery.quicksand.js')}}"></script>
    <script src="{{asset('js/portfolio/setting.js')}}"></script>
  
    <script src="{{asset('js/jquery.flexslider.js')}}"></script>
    <script src="{{asset('js/animate.js')}}"></script>
    <script src="{{asset('js/inview.js')}}"></script>
  
    <!-- Template Custom JavaScript File -->
    <script src="{{asset('js/custom.js')}}"></script>
    <!-- Bootstrap 5 JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script>
        // Initialize the thumbs gallery first
        var swiperThumbs = new Swiper('.thumbs-gallery', {
            spaceBetween: 10,
            slidesPerView: 5,
            freeMode: true,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
        });

        // Initialize the main gallery, linking to the thumbs gallery
        var swiperMain = new Swiper('.main-gallery', {
            spaceBetween: 10,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            thumbs: {
                swiper: swiperThumbs, // Link the thumbs swiper here
            }
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
        var partnersSwiper = new Swiper(".partners-slider-unique", {
            slidesPerView: 5, // Show 5 logos at a time
            spaceBetween: 20, // Space between slides
            loop: true, // Infinite loop
            autoplay: {
            delay: 0, // Continuous scrolling
            disableOnInteraction: false,
            },
            speed: 5000, // Speed of scrolling (higher = slower)
            allowTouchMove: false, // Disable manual swiping
        });
        });
    </script>
      
</body>
</html>
  