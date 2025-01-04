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
    {{-- <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('css/bootstrap-responsive.css')}}" rel="stylesheet" /> --}}
    <link href="{{asset('css/flexslider.css')}}" rel="stylesheet" />
    <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet" />
    <link href="{{asset('css/camera.css')}}" rel="stylesheet" />
    <link href="{{asset('css/jquery.bxslider.css')}}" rel="stylesheet" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Theme skin -->
    <link href="{{asset('color/default.css')}}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('ico/apple-touch-icon-144-precomposed.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('ico/apple-touch-icon-114-precomposed.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('ico/apple-touch-icon-72-precomposed.png')}}" />
    <link rel="apple-touch-icon-precomposed" href="{{asset('ico/apple-touch-icon-57-precomposed.png')}}" />
    <link rel="shortcut icon" href="{{asset('img/ictc.jpeg')}}" />

    <style>

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
            <div class="container">
                <div class="row nomargin">
                    <div class="col-md-4">
                        <div class="logo">
                            <a href="{{route('home')}}" class="d-flex">
                                <img src="{{asset('img/461161.png')}}" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-7 d-none d-md-flex">
                        <!-- Regular Navigation (Visible on Desktop) -->
                        <div class="navbar navbar-static-top navigation">
                            <nav>
                                <ul class="nav topnav" style="display: flex; gap: 10px; list-style: none; padding: 0; margin: 0;">
                                    <li class="dropdown {{ request()->routeIs('home') ? 'active' : '' }}">
                                        <a href="{{ route('home') }}" class="nav-btn {{ request()->routeIs('home') ? 'btn-highlight' : '' }}">
                                            <i class="icon-home"></i> Home
                                        </a>
                                    </li>
                                    <li class="dropdown {{ request()->routeIs('about') ? 'active' : '' }}">
                                        <a href="{{ route('about') }}" class="nav-btn {{ request()->routeIs('about') ? 'btn-highlight' : '' }}">
                                            About
                                        </a>
                                    </li>
                                    <li class="dropdown {{ request()->routeIs('services') ? 'active' : '' }}">
                                        <a href="{{ route('services') }}" class="nav-btn {{ request()->routeIs('about') ? 'btn-highlight' : '' }}">
                                            Working area
                                        </a>
                                    </li>
                                    <li class="dropdown {{ request()->routeIs(['image-gallery', 'video-gallery']) ? 'active' : '' }}">
                                        <a href="#" class="nav-btn">Media <i class="icon-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ route('image-gallery') }}">Photos Gallery</a></li>
                                            <li><a href="{{ route('video-gallery') }}">Videos Gallery</a></li>
                                        </ul>
                                    </li>                                                                      
                                    <li class="dropdown">
                                        <a href="#" class="nav-btn">Partners </a>
                                    </li>
                                    <li class="dropdown {{ request()->routeIs('contact') ? 'active' : '' }}">
                                        <a href="{{route('contact')}}" class="nav-btn">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-1 d-flex align-items-center justify-content-end lang">
                        <!-- Language Dropdown -->
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle p-2" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-globe"></i> En
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown" style="border-radius: 12px; min-width: 100px; position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(-130px, 75px);" data-popper-placement="bottom-end">
                                <li><a class="dropdown-item" href="#">English</a></li>
                                <li><a class="dropdown-item" href="#">العربية</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Hamburger Menu for Mobile -->
                    <div class="col-md-1 d-flex align-items-center justify-content-end d-md-none">
                        <div class="hamburger-menu">
                            <button class="hamburger-btn">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Side Navigation (Visible on Mobile) -->
            <div class="side-nav">
                <nav>
                    <ul class="nav topnav">
                        <li class="dropdown {{ request()->routeIs('home') ? 'active' : '' }}">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="dropdown {{ request()->routeIs('about') ? 'active' : '' }}">
                            <a href="{{ route('about') }}">About</a>
                        </li>
                        <li class="dropdown">
                            <a href="#">Portfolio</a>
                        </li>
                        <li class="dropdown">
                            <a href="#">Blog</a>
                        </li>
                        <li class="dropdown">
                            <a href="#">Contact</a>
                        </li>
                        <div class="">
                            <!-- Language Dropdown -->
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle p-2" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-globe"></i> En
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown" style="border-radius: 12px; min-width: 100px; position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(-130px, 75px);" data-popper-placement="bottom-end">
                                    <li><a class="dropdown-item" href="#">English</a></li>
                                    <li><a class="dropdown-item" href="#">العربية</a></li>
                                </ul>
                            </div>
                        </div>
                    </ul>
                </nav>
            </div>
                      
        </header>
        
        
        <!-- end header -->
        <div class="spinner-overlay" id="loadingSpinner">
            <div class="grow-pulse"></div>
        </div>
        <div>
            @yield('content')
        </div>
        <div class="share-container">
            <!-- Share Icon -->
            <button class="share__button">
                <i class="fa-solid fa-share-nodes"></i>
            </button>
        
            <!-- Social Icons -->
            <ul class="share__icons">
                <!-- Facebook -->
                <li style="--rotate: -18deg;">
                    <a href="#" style="background-color: #1877F2;">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </li>
                <!-- TikTok -->
                <li style="--rotate: 27deg;">
                    <a href="#" style="background-color: #000;">
                        <i class="fa-brands fa-tiktok"></i>
                    </a>
                </li>
                <!-- WhatsApp -->
                <li style="--rotate: 72deg;">
                    <a href="#" style="background-color: #25D366;">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </li>
                <!-- YouTube -->
                <li style="--rotate: 117deg;">
                    <a href="#" style="background-color: #FF0000;">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </li>

            </ul>
        </div>
        
        
        <footer style="background-color:#1a2333; color: #fff; padding: 40px 0;">
            <div class="container">
              <div class="row">
          
                <!-- Left Column: Logo and Description -->
                <div class="col-md-4">
                  <div>
                    <img src="{{asset('img/ictc.jpeg')}}" alt="Logo" style="max-height: 60px; margin-bottom: 15px;">
                    <p style="margin: 0;">
                      ICTC for Development and Technological Solutions for Education
                    </p>
                  </div>
                </div>
          
                <!-- Center Column: Useful Links -->
                <div class="col-md-4">
                  <h5 style="color: #fff; font-weight: bold;">Useful Links</h5>
                  <div style="display: flex; flex-wrap: wrap; gap: 10px;">
                    <a href="#" style="color: #fff; background-color: #0d6efd !important; border-radius: 20px; padding: 5px 15px; text-decoration: none;">About Us</a>
                    <a href="#" style="color: #fff; background-color: #2f2f2f; border-radius: 20px; padding: 5px 15px; text-decoration: none;">Directors Board</a>
                    <a href="#" style="color: #fff; background-color: #2f2f2f; border-radius: 20px; padding: 5px 15px; text-decoration: none;">Partners</a>
                    <a href="#" style="color: #fff; background-color: #2f2f2f; border-radius: 20px; padding: 5px 15px; text-decoration: none;">Projects</a>
                    <a href="#" style="color: #fff; background-color: #2f2f2f; border-radius: 20px; padding: 5px 15px; text-decoration: none;">Media</a>
                    <a href="#" style="color: #fff; background-color: #2f2f2f; border-radius: 20px; padding: 5px 15px; text-decoration: none;">Latest News</a>
                    <a href="#" style="color: #fff; background-color: #2f2f2f; border-radius: 20px; padding: 5px 15px; text-decoration: none;">Fields Of Works</a>
                    <a href="#" style="color: #fff; background-color: #2f2f2f; border-radius: 20px; padding: 5px 15px; text-decoration: none;">Contact Us</a>
                  </div>
                </div>
          
                <!-- Right Column: Contact Info -->
                <div class="col-md-4">
                  <h5 style="color: #fff; font-weight: bold;">Contact Us</h5>
                  <p>
                    <i class="fa fa-phone"></i> Support : 020000000<br>
                    <i class="fa fa-envelope"></i> Email : contact@ictc-egy.com
                  </p>
                  <div style="display: flex; gap: 10px;">
                    <a href="#" style="color: #fff; background-color: #2f2f2f; border-radius: 50%; width: 35px; height: 35px; display: flex; align-items: center; justify-content: center;">
                      <i class="fa fa-facebook"></i>
                    </a>
                    <a href="#" style="color: #fff; background-color: #2f2f2f; border-radius: 50%; width: 35px; height: 35px; display: flex; align-items: center; justify-content: center;">
                      <i class="fa fa-whatsapp"></i>
                    </a>
                    <a href="#" style="color: #fff; background-color: #2f2f2f; border-radius: 50%; width: 35px; height: 35px; display: flex; align-items: center; justify-content: center;">
                      <i class="fa fa-envelope"></i>
                    </a>
                    <a href="#" style="color: #fff; background-color: #2f2f2f; border-radius: 50%; width: 35px; height: 35px; display: flex; align-items: center; justify-content: center;">
                      <i class="fa fa-linkedin"></i>
                    </a>
                  </div>
                </div>
              </div>
          
              <!-- Footer Bottom -->
              <div style="border-top: 1px solid #333; margin-top: 20px; padding-top: 15px; text-align: center;">
                <p style="margin: 0; color: #ccc;">Copyright © 2025 ICTC</p>
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
    {{-- <script src="{{asset('js/jquery.easing.1.3.js')}}"></script> --}}
    {{-- <script src="{{asset('js/bootstrap.js')}}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap 5 JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
       
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
 

    <script>
        // Initialize the thumbs gallery first
        document.addEventListener("DOMContentLoaded", () => {
            const swiperThumbs = new Swiper(".thumbs-gallery", {
                spaceBetween: 10,
                slidesPerView: 5,
                freeMode: true,
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
            });
    
            // Initialize the main gallery, linking to the thumbs gallery
            const swiperMain = new Swiper(".main-gallery", {
                spaceBetween: 10,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                thumbs: {
                    swiper: swiperThumbs, // Link the thumbs swiper here
                },
            });
        });
    
        // Partners slider
        document.addEventListener("DOMContentLoaded", () => {
            const partnersSwiper = new Swiper(".partners-slider-unique", {
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
    
        // Share button toggle
        document.addEventListener("DOMContentLoaded", () => {
            const shareButton = document.querySelector(".share__button");
            const shareContainer = document.querySelector(".share-container");
    
            if (shareButton && shareContainer) {
                shareButton.addEventListener("click", () => {
                    shareContainer.classList.toggle("active");
                });
            }
        });
    
        // Header scroll effect
        document.addEventListener("DOMContentLoaded", () => {
            const header = document.querySelector("header");
            window.addEventListener("scroll", () => {
                if (window.scrollY > 50) {
                    header.classList.add("scrolled");
                } else {
                    header.classList.remove("scrolled");
                }
            });
        });
    
        // Text slider
        document.addEventListener("DOMContentLoaded", () => {
            const textSwiper = new Swiper(".text-slider", {
                loop: true,
                autoplay: {
                    delay: 4000, // Auto-slide every 4 seconds
                    disableOnInteraction: false,
                },
                effect: "fade", // Smooth fade effect
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                    bulletClass: "swiper-pagination-bullet",
                    bulletActiveClass: "swiper-pagination-bullet-active",
                },
                allowTouchMove: false, // Disable manual swipe
            });
        });
    
        // Photo Gallery Lightbox
        document.addEventListener('DOMContentLoaded', () => {
            // Initialize Swiper
            const swiper = new Swiper('.swiper-container', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });

            // Open modal and navigate to the clicked image
            const galleryItems = document.querySelectorAll('.gallery-item');
            const modal = document.getElementById('lightbox-modal');
            const modalInstance = new bootstrap.Modal(modal);

            galleryItems.forEach((item, index) => {
                item.addEventListener('click', (e) => {
                    e.preventDefault();
                    swiper.slideTo(index, 0); // Go to the clicked image
                    modalInstance.show(); // Open the modal
                });
            });
        });

        // Show spinner on page load
        document.addEventListener('DOMContentLoaded', () => {
            const spinner = document.getElementById('loadingSpinner');
            spinner.classList.add('active');

            // Hide spinner after page loads
            window.addEventListener('load', () => {
                spinner.classList.remove('active');
            });
        });

        // Show spinner on route changes for SPAs (if applicable)
        if (window.history.pushState) {
            document.addEventListener('click', (e) => {
                const target = e.target.closest('a');
                if (target && target.href && target.target !== '_blank') {
                    const spinner = document.getElementById('loadingSpinner');
                    spinner.classList.add('active');
                }
            });
        }

        // Toggle the side navigation 
        $(document).ready(function () {
            // Toggle the side navigation
            $(".hamburger-btn").on("click", function () {
                $(".side-nav").toggleClass("open");
            });

            // Close side navigation when clicking outside
            $(document).on("click", function (e) {
                if (!$(e.target).closest(".side-nav, .hamburger-btn").length) {
                    $(".side-nav").removeClass("open");
                }
            });
        });

    </script>

</body>
</html>
  