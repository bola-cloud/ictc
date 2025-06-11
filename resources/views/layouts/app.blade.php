<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">

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
    <link href="{{asset('css/about.css')}}" rel="stylesheet" />
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
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Add Google Fonts -->
    @if(app()->getLocale() === 'ar')
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap" rel="stylesheet">
        <link href="{{asset('css/ar.css')}}" rel="stylesheet" />
    @else
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    @endif

    <style>
        #chatbot-container {
            position: fixed;
            bottom: 93px;
            @if(app()->getLocale() == 'ar') left: 70px; @else right: 70px; @endif
            width: 320px;
            max-height: 500px;
            background:  #F3EED4;
            border-radius: 20px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.2);
            z-index: 9999;
            display: none;
            flex-direction: column;
            overflow: hidden;
            font-family: 'Cairo', sans-serif !important;
        }

        #chatbot-header {
            background: #40537d;
            color:  #F3EED4;
            padding: 12px 16px;
            font-weight: bold;
        }

        #chatbot-body {
            flex: 1;
            overflow-y: auto;
            padding: 10px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            background:  #F3EED4;
            min-height: 31vh;
        }

        .chatbot-msg {
            background: #40537d;
            padding: 8px 12px;
            border-radius: 12px;
            max-width: 80%;
            align-self: flex-start;
            color:  #F3EED4;
        }

        .user-msg {
            background: #40537dbf;
            align-self: flex-end;
            color:  #F3EED4;
        }

        #chatbot-footer {
            padding: 10px;
            border-top: 1px solid #ddd;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .suggested-btn {
            background: #40537d;
            border: none;
            padding: 6px 10px;
            border-radius: 10px;
            font-size: 14px;
            cursor: pointer;
            margin-right: 5px;
            color:  #F3EED4;
            margin-top: 6px;
        }

        #chat-input {
            padding: 6px 10px;
            border: 1px solid #ccc;
            border-radius: 10px;
            width: 100%;
        }

        #chatbot-toggle {
            position: fixed;
            bottom: 30px;
            @if(app()->getLocale() == 'ar') left: 70px; @else right: 70px; @endif
            background: white;
            border-radius: 50%;
            width: 70px;
            height: 70px;
            border: none;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            z-index: 10000;
        }

        #chatbot-toggle img {
            width: 36px;
        }

        .chatbot-msg ul {
            padding-left: 20px;
            margin: 0;
        }

        .chatbot-msg li {
            margin-bottom: 6px;
            list-style-type: disc;
            font-size: 14px;
            line-height: 1.4;
        }
        .chatbot-msg p {
            margin-bottom: 6px;
            font-size: 14px;
            line-height: 1.6;
        }
        .chatbot-msg small {
            display: block;
            font-size: 12px;
            color: #e6dfc5;
            margin-top: 2px;
            line-height: 1.4;
        }


        .side-nav.open {
            background:  #F3EED4 !important;
            color: #404b62 !important;
        }
        i.fa.fa-bars {
            color:  #F3EED4 !important;
        }
        body {
            /* font-family: {{ app()->getLocale() === 'ar' ? "'Tajawal', sans-serif" : "'Roboto', sans-serif" }};
            direction: {{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }};
            text-align: {{ app()->getLocale() === 'ar' ? 'right' : 'left' }};
            font-size: {{ app()->getLocale() === 'ar' ? '1.1rem' : '1rem' }}; */
            color:  #F3EED4;
            font-family: '{{ app()->getLocale() == "ar" ? "29LT Bukra" : "Yu Mincho" }}', sans-serif !important;
            font-weight: 400;
        }

        h1, h2, h3, h4, h5, h6 {
            font-weight: {{ app()->getLocale() === 'ar' ? '700' : '500' }};
            letter-spacing: {{ app()->getLocale() === 'ar' ? '0.5px' : 'normal' }};
            word-spacing: {{ app()->getLocale() === 'ar' ? '2px' : 'normal' }};
            font-size: {{ app()->getLocale() === 'ar' ? '1.2em' : '1em' }};
            font-family: '{{ app()->getLocale() == "ar" ? "29LT Bukra" : "Yu Mincho" }}', sans-serif;
        }

        p {
            font-weight: {{ app()->getLocale() === 'ar' ? '500' : '400' }};
            letter-spacing: {{ app()->getLocale() === 'ar' ? '0.5px' : 'normal' }};
            line-height: 1.8;
            word-spacing: {{ app()->getLocale() === 'ar' ? '1.5px' : 'normal' }};
            font-size: {{ app()->getLocale() === 'ar' ? '1.05rem' : '1rem' }};
        }
    </style>


</head>

<body>

    <div id="wrapper">
        <!-- start header -->
        <header>
            <div class="container">
                <div class="row nomargin">
                    <div class="col-md-3 d-flex justify-content-center">
                        <div class="logo">
                            <a href="{{ route('home') }}" class="d-flex">
                                <img src="{{ asset($settings['logo'] ?? 'img/white logo.png') }}" alt="Logo" style="max-height: 60px;">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8 d-none d-md-flex">
                        <!-- Regular Navigation (Visible on Desktop) -->
                        <div class="navbar navbar-static-top navigation">
                            <nav>
                                <ul class="nav topnav" style="display: flex; gap: 10px; list-style: none; padding: 0; margin: 0;">
                                    {{-- <li class="dropdown {{ request()->routeIs('home') ? 'active' : '' }}">
                                        <a href="{{ route('home') }}" class="nav-btn {{ request()->routeIs('home') ? 'btn-highlight' : '' }}">
                                            <i class="icon-home"></i> {{ __('lang.home') }}
                                        </a>
                                    </li> --}}
                                    <li class="dropdown {{ request()->routeIs('about') ? 'active' : '' }}">
                                        <a href="{{ route('about') }}" class="nav-btn {{ request()->routeIs('about') ? 'btn-highlight' : '' }}">
                                            {{ __('lang.about') }}
                                        </a>
                                    </li>
                                    <li class="dropdown {{ request()->routeIs('services') ? 'active' : '' }}">
                                        <a href="{{ route('services') }}" class="nav-btn {{ request()->routeIs('services') ? 'btn-highlight' : '' }}">
                                            {{ __('lang.our_work') }}
                                        </a>
                                    </li>
                                    {{-- <li class="dropdown {{ request()->routeIs('all-projects') ? 'active' : '' }}">
                                        <a href="{{ route('all-projects') }}" class="nav-btn {{ request()->routeIs('all-projects') ? 'btn-highlight' : '' }}">
                                            {{ __('lang.projects') }}
                                        </a>
                                    </li> --}}
                                    <li class="dropdown {{ request()->routeIs('work-withus') ? 'active' : '' }}">
                                        <a href="{{ route('work-withus') }}" class="nav-btn {{ request()->routeIs('work-withus') ? 'btn-highlight' : '' }}">
                                            {{ __('lang.work_with_us') }}
                                        </a>
                                    </li>
                                    <li class="dropdown {{ request()->routeIs(['image-gallery', 'video-gallery','latest.news']) ? 'active' : '' }}">
                                        <a href="#" class="nav-btn">{{ __('lang.media') }} <i class="icon-angle-down"></i></a>
                                        <ul class="dropdown-menu" style="top: 60% !important;">
                                            <li><a href="{{ route('image-gallery') }}">{{ __('lang.photos_gallery') }}</a></li>
                                            <li><a href="{{ route('video-gallery') }}">{{ __('lang.videos_gallery') }}</a></li>
                                            <li><a href="{{ route('latest.news') }}">{{ __('lang.latest_news') }}</a></li>
                                        </ul>
                                    </li>
                                    {{-- <li class="dropdown {{ request()->routeIs('partners') ? 'active' : '' }}">
                                        <a href="{{ route('partners') }}" class="nav-btn">{{ __('lang.partners') }}</a>
                                    </li> --}}
                                    <li class="dropdown {{ request()->routeIs('contact') ? 'active' : '' }}">
                                        <a href="{{ route('contact') }}" class="nav-btn">{{ __('lang.contact') }}</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="col-md-1 d-flex align-items-center justify-content-end lang">
                        <!-- Language Dropdown -->
                        <div class="dropdown dropdown-responsive">
                            <button
                                class="btn btn-light dropdown-toggle p-2"
                                type="button" style="background:  #F3EED4!important; color: #000 !important;"
                                id="languageDropdown"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                                style="border-radius: 12px; min-width: 80px;"
                            >
                                <i class="fa-solid fa-globe"></i>
                                {{ App::getLocale() == 'ar' ? 'AR' : 'EN' }}
                            </button>
                            <ul
                                class="dropdown-menu dropdown-menu-end custom-dropdown"
                                aria-labelledby="languageDropdown"
                            >
                                <li>
                                    <a
                                        class="dropdown-item"
                                        href="{{ LaravelLocalization::getLocalizedURL('en') }}"
                                    >
                                        English
                                    </a>
                                </li>
                                <li>
                                    <a
                                        class="dropdown-item"
                                        href="{{ LaravelLocalization::getLocalizedURL('ar') }}"
                                    >
                                        العربية
                                    </a>
                                </li>
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
                        {{-- <li class="dropdown {{ request()->routeIs('home') ? 'active' : '' }}">
                            <a href="{{ route('home') }}">{{ __('lang.home') }}</a>
                        </li> --}}
                        <li class="dropdown {{ request()->routeIs('about') ? 'active' : '' }}">
                            <a href="{{ route('about') }}">{{ __('lang.about') }}</a>
                        </li>
                        <li class="dropdown {{ request()->routeIs('services') ? 'active' : '' }}">
                            <a href="{{ route('services') }}">{{ __('lang.our_work') }}</a>
                        </li>
                        <li class="dropdown {{ request()->routeIs('work-withus') ? 'active' : '' }}">
                            <a href="{{ route('work-withus') }}">{{ __('lang.work_with_us') }}</a>
                        </li>
                        {{-- <li class="dropdown {{ request()->routeIs('all-projects') ? 'active' : '' }}">
                            <a href="{{ route('all-projects') }}">{{ __('lang.projects') }}</a>
                        </li> --}}
                        <li class="dropdown {{ request()->routeIs(['image-gallery', 'video-gallery','latest.news']) ? 'active' : '' }}">
                            <a href="#" class="nav-btn">{{ __('lang.media') }} <i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('image-gallery') }}">{{ __('lang.photos_gallery') }}</a></li>
                                <li><a href="{{ route('video-gallery') }}">{{ __('lang.videos_gallery') }}</a></li>
                                <li><a href="{{ route('latest.news') }}">{{ __('lang.latest_news') }}</a></li>
                            </ul>
                        </li>
                        {{-- <li class="dropdown {{ request()->routeIs('partners') ? 'active' : '' }}">
                            <a href="{{ route('partners') }}">{{ __('lang.partners') }}</a>
                        </li> --}}
                        <li class="dropdown {{ request()->routeIs('contact') ? 'active' : '' }}">
                            <a href="{{ route('contact') }}">{{ __('lang.contact') }}</a>
                        </li>
                        <div>
                            <!-- Language Dropdown -->
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle p-2" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-globe"></i> {{ App::getLocale() == 'ar' ? 'AR' : 'EN' }}
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown" style="border-radius: 12px; min-width: 100px;">
                                    <li>
                                        <a
                                            class="dropdown-item"
                                            href="{{ LaravelLocalization::getLocalizedURL('en') }}"
                                        >
                                            English
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            class="dropdown-item"
                                            href="{{ LaravelLocalization::getLocalizedURL('ar') }}"
                                        >
                                            العربية
                                        </a>
                                    </li>
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
            {{-- <button class="share__button">
                <i class="fa-solid fa-share-nodes"></i>
            </button> --}}

            <div class="social-media-sidebar">
                <a href="{{ !empty($settings['youtube']) ? $settings['youtube'] : '#' }}" target="_blank" class="social-icon instagram">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="{{ !empty($settings['facebook']) ? $settings['facebook'] : '#' }}" target="_blank" class="social-icon facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="{{ !empty($settings['whatsapp']) ? 'https://wa.me/' . $settings['whatsapp'] : '#' }}" target="_blank" class="social-icon twitter">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="{{ !empty($settings['linkedin']) ? $settings['linkedin'] : '#' }}" target="_blank" class="social-icon linkedin">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>



            <!-- Social Icons -->
            <ul class="share__icons">
                <!-- Facebook -->
                <li style="--rotate: -18deg;">
                    <a href="{{ !empty($settings->facebook) ? $settings->facebook : '#' }}" target="_blank" style="background-color: #1877F2;">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </li>

                <!-- LinkedIn -->
                <li style="--rotate: 27deg;">
                    <a href="{{ !empty($settings->linkedin) ? $settings->linkedin : '#' }}" target="_blank" style="background-color: #0077b5;">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                </li>

                <!-- WhatsApp -->
                <li style="--rotate: 72deg;">
                    <a href="{{ !empty($settings->whatsapp) ? 'https://wa.me/' . $settings->whatsapp : '#' }}" target="_blank" style="background-color: #25D366;">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </li>

                <!-- YouTube -->
                <li style="--rotate: 117deg;">
                    <a href="{{ !empty($settings->youtube) ? $settings->youtube : '#' }}" target="_blank" style="background-color: #FF0000;">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Floating Chatbot Toggle Button -->
        <button id="chatbot-toggle">
            <img src="{{ asset('img/chatbot-icon.png') }}" alt="Chatbot">
        </button>

        <!-- Chatbot Panel -->
        <div id="chatbot-container" style="display: none;">
            <div id="chatbot-header">{{ __('lang.our_mission') }}</div>
            <div id="chatbot-body">
                <div class="chatbot-msg">{{ app()->getLocale() === 'ar' ? 'مرحباً! كيف يمكنني مساعدتك؟' : 'Hello! How can I help you?' }}</div>
            </div>
            <div id="chatbot-footer">
                <div>
                    <button class="suggested-btn" onclick="handleQuestion('about')">{{ __('lang.our_history') }}</button>
                    <button class="suggested-btn" onclick="handleQuestion('vision')">{{ __('lang.our_vision') }}</button>
                    <button class="suggested-btn" onclick="handleQuestion('mission')">{{ __('lang.our_mission') }}</button>
                    <button class="suggested-btn" onclick="handleQuestion('services')">{{ app()->getLocale() == 'ar' ? 'خدماتنا' : 'Our Services' }}</button>
                    <button class="suggested-btn" onclick="handleQuestion('contact')">{{ app()->getLocale() == 'ar' ? 'تواصل معنا' : 'Contact' }}</button>
                    <button class="suggested-btn" onclick="handleQuestion('projects')">{{ app()->getLocale() == 'ar' ? 'مشروعاتنا' : 'Our Projects' }}</button>
                </div>
                <input type="text" id="chat-input" placeholder="{{ app()->getLocale() == 'ar' ? 'اكتب هنا...' : 'Type here...' }}" disabled />
            </div>
        </div>

        <footer style="background-color:#1a2333; color: #fff; padding: 40px 0;">
            <div class="container">
                <div class="row d-flex justify-content-between align-items-center">

                    <!-- Left Column: Logo and Description -->
                    <div class="col-md-4">
                        <div>
                            <a href="{{route('dashboard')}}">
                                <img src="{{ asset($settings['logo'] ?? 'img/white logo.png') }}" alt="Logo" style="max-height: 60px; margin-bottom: 15px;">
                            </a>
                            <p style="margin: 0; color:  #F3EED4;">
                                {{ __('lang.company_name') }}
                            </p>
                        </div>
                    </div>

                    <!-- Center Column: Useful Links -->
                    {{-- <div class="col-md-4">
                        <h5 style="color: #fff; font-weight: bold;">{{ __('lang.useful_links') }}</h5>
                        <div style="display: flex; flex-wrap: wrap; gap: 10px;">
                            <a href="{{ route('about') }}"
                                style="color: #fff; background-color: {{ Request::routeIs('about') ? '#0d6efd' : '#2f2f2f' }}; border-radius: 20px; padding: 5px 15px; text-decoration: none;">
                                {{ __('lang.about_us') }}
                            </a>
                            <a href="{{ route('services') }}"
                                style="color: #fff; background-color: {{ Request::routeIs('services') ? '#0d6efd' : '#2f2f2f' }}; border-radius: 20px; padding: 5px 15px; text-decoration: none;">
                                {{ __('lang.working_area') }}
                            </a>
                            <a href="{{ route('partners') }}"
                                style="color: #fff; background-color: {{ Request::routeIs('partners') ? '#0d6efd' : '#2f2f2f' }}; border-radius: 20px; padding: 5px 15px; text-decoration: none;">
                                {{ __('lang.partners') }}
                            </a>
                            <a href="{{ route('image-gallery') }}"
                                style="color: #fff; background-color: {{ Request::routeIs('image-gallery') ? '#0d6efd' : '#2f2f2f' }}; border-radius: 20px; padding: 5px 15px; text-decoration: none;">
                                {{ __('lang.photos_gallery') }}
                            </a>
                            <a href="{{ route('all-projects') }}"
                                style="color: #fff; background-color: {{ Request::routeIs('all-projects') ? '#0d6efd' : '#2f2f2f' }}; border-radius: 20px; padding: 5px 15px; text-decoration: none;">
                                {{ __('lang.projects') }}
                            </a>
                            <a href="{{ route('video-gallery') }}"
                                style="color: #fff; background-color: {{ Request::routeIs('video-gallery') ? '#0d6efd' : '#2f2f2f' }}; border-radius: 20px; padding: 5px 15px; text-decoration: none;">
                                {{ __('lang.videos_gallery') }}
                            </a>
                            <a href="{{ route('latest.news') }}"
                                style="color: #fff; background-color: {{ Request::routeIs('latest.news') ? '#0d6efd' : '#2f2f2f' }}; border-radius: 20px; padding: 5px 15px; text-decoration: none;">
                                {{ __('lang.latest_news') }}
                            </a>
                            <a href="{{ route('contact') }}"
                                style="color: #fff; background-color: {{ Request::routeIs('contact') ? '#0d6efd' : '#2f2f2f' }}; border-radius: 20px; padding: 5px 15px; text-decoration: none;">
                                {{ __('lang.contact_us') }}
                            </a>
                        </div>
                    </div> --}}

                    <!-- Right Column: Contact Info -->
                    <div class="col-md-4">
                        <h5 style="color:  #F3EED4; font-weight: bold;">{{ __('lang.contact') }}</h5>
                        <p style="color:  #F3EED4;">
                            <i class="fa fa-phone"></i> {{ __('lang.support') }}&nbsp; :&nbsp; 020000000<br>
                            <i class="fa fa-envelope"></i> {{ __('lang.email') }}&nbsp; : &nbsp;contact@ictc-egy.com
                        </p>
                        <div class="social-media-inline d-flex justify-content-start align-items-center mt-3">
                            @php
                                $contacts = [
                                    'facebook' => ['icon' => 'fa-brands fa-facebook', 'prefix' => '', 'class' => 'facebook'],
                                    'whatsapp' => ['icon' => 'fa-brands fa-whatsapp', 'prefix' => 'https://wa.me/', 'class' => 'whatsapp'],
                                    'email' => ['icon' => 'fa fa-envelope', 'prefix' => 'mailto:', 'class' => 'email'],
                                    'linkedin' => ['icon' => 'fa-brands fa-linkedin', 'prefix' => '', 'class' => 'linkedin'],
                                    'youtube' => ['icon' => 'fa-brands fa-youtube', 'prefix' => '', 'class' => 'youtube'],
                                ];
                            @endphp

                            @foreach ($contacts as $key => $data)
                                @php
                                    $value = $settings[$key] ?? null;
                                    $url = $value ? $data['prefix'] . $value : '#';
                                @endphp
                                <a href="{{ $url }}" target="_blank" class="social-icon {{ $data['class'] }}">
                                    <i class="{{ $data['icon'] }}"></i>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Footer Bottom -->
                <div style="border-top: 1px solid #333; margin-top: 20px; padding-top: 15px; text-align: center;">
                    {{-- <p style="margin: 0; color: #ccc;">{{ __('lang.copyright') }}</p> --}}
                    <p style="margin: 5px 0 0; color:  #F3EED4;">
                        {{ __('lang.developed_by') }}
                        <a href="https://wa.me/201555622169" target="_blank" style="color: #e0cda7; text-decoration: none;">
                            <strong>Eng: Bola Eshaq</strong>
                        </a>
                    </p>
                </div>
            </div>
        </footer>

    </div>
    <a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bglight icon-2x" style="background: #40537d;color:  #F3EED4;"></i></a>

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
            slidesPerView: 5, // Number of visible logos
            spaceBetween: 20, // Space between slides
            loop: true, // Continuous looping
            autoplay: {
                delay: 0, // No delay for continuous scroll
                disableOnInteraction: false,
            },
            speed: 3000, // Adjust speed for smoother scrolling
            allowTouchMove: false, // Disable manual sliding
            breakpoints: {
                768: {
                slidesPerView: 4, // Adjust for tablet
                },
                480: {
                slidesPerView: 2, // Adjust for mobile
                },
            },
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

            // Show spinner initially (for direct entry)
            spinner.classList.add('active');

            // Hide spinner after full load or on bfcache restore
            window.addEventListener('pageshow', (event) => {
                spinner.classList.remove('active');
            });

            // Handle internal link clicks
            document.addEventListener('click', (e) => {
                const target = e.target.closest('a');
                if (
                    target &&
                    target.href &&
                    target.target !== '_blank' &&
                    !target.href.startsWith('javascript:') &&
                    target.getAttribute('href') !== '#' &&
                    !target.hasAttribute('data-no-spinner') &&
                    target.origin === location.origin
                ) {
                    spinner.classList.add('active');
                }
            });

            // Ensure spinner appears during unload (just in case)
            window.addEventListener('beforeunload', () => {
                spinner.classList.add('active');
            });
        });

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
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true, // animation happens only once
        });
    </script>
    <script>
        const botToggle = document.getElementById('chatbot-toggle');
        const chatContainer = document.getElementById('chatbot-container');
        const chatBody = document.getElementById('chatbot-body');

        botToggle.addEventListener('click', () => {
            chatContainer.style.display = chatContainer.style.display === 'none' ? 'flex' : 'none';
        });

        function handleQuestion(key) {
            const userMsg = document.createElement('div');
            userMsg.className = 'chatbot-msg user-msg';
            userMsg.innerText = keyToLabel(key);
            chatBody.appendChild(userMsg);
            chatBody.scrollTop = chatBody.scrollHeight;

            const botTyping = document.createElement('div');
            botTyping.className = 'chatbot-msg';
            botTyping.innerText = '...';
            chatBody.appendChild(botTyping);
            chatBody.scrollTop = chatBody.scrollHeight;

            setTimeout(() => {
                botTyping.remove();
                const botReply = document.createElement('div');
                botReply.className = 'chatbot-msg';
                botReply.innerHTML = getReply(key);
                chatBody.appendChild(botReply);
                chatBody.scrollTop = chatBody.scrollHeight;
            }, 1000);
        }

        function keyToLabel(key) {
            switch (key) {
                case 'about': return '{{ __("lang.our_history") }}';
                case 'vision': return '{{ __("lang.our_vision") }}';
                case 'mission': return '{{ __("lang.our_mission") }}';
                case 'services': return '{{ app()->getLocale() == "ar" ? "خدماتنا" : "Our Services" }}';
                case 'contact': return '{{ app()->getLocale() == "ar" ? "تواصل معنا" : "Contact" }}';
                case 'projects': return '{{ app()->getLocale() == "ar" ? "مشروعاتنا" : "Our Projects" }}';
            }
        }

        function getReply(key) {
            switch (key) {
                case 'about': return `{{ __('lang.our_history_description') }}<br>{{ __('lang.our_history_description_two') }}`;
                case 'vision': return `{{ __('lang.our_vision_description') }}`;
                case 'mission': return `{{ __('lang.our_mission_description') }}`;
                case 'services': return `<ul>@foreach(\App\Models\Service::all() as $service)<li>{{ app()->getLocale() == 'ar' ? $service->ar_title : $service->en_title }}</li>@endforeach</ul>`;
                case 'contact': return `<b>Email:</b> contact@ictc-egy.com/<br><b>Phone:</b> +20123456789<br><b>Location:</b> Cairo, Egypt`;
                case 'projects': return `<ul>
                    @foreach(\App\Models\Project::limit(5)->get() as $project)
                        <li>
                            <b> - {{ app()->getLocale() == 'ar' ? $project->ar_name : $project->en_name }}</b><br>
                            <small>{{ Str::limit(strip_tags(app()->getLocale() == 'ar' ? $project->ar_description : $project->en_description), 80) }}</small>
                        </li>
                    @endforeach
                    </ul>`;

            }
            return '';
        }
    </script>

    @stack('js')
</body>
</html>
