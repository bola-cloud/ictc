@extends('layouts.app')

@section('content')

    <!-- Hero Section -->
    <section class="head-video position-relative">
        <!-- Background Media (unchanged) -->
        @if ($mainBanner && $mainBanner->media_path)
            @if ($mainBanner->media_type == "video")
                <video autoplay muted loop preload="auto" title="Hero Background Video" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                    <source src="{{ asset('storage/' . $mainBanner->media_path) }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            @elseif ($mainBanner->media_type == "image")
                <img src="{{ asset('storage/' . $mainBanner->media_path) }}" alt="{{ $mainBanner->alt_text ?? 'Hero Banner' }}" loading="lazy" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
            @endif
        @else
            <img src="{{ asset('img/default-banner.jpg') }}" alt="Default Hero Banner" loading="lazy" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
        @endif

        <!-- Typewriter Content Overlay -->
        <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 10; display: flex; align-items: center; justify-content: center;">
            <div class="container text-center">
                <h1 class="text-primary display-2 fw-bold mb-4" style="font-size: 4rem;">
                    <i id="typewriter-icon" class="fa-solid fa-2x me-2" role="img" aria-label="ICTC icon"></i>
                    <span id="typewriter-text"></span>
                </h1>
            </div>
        </div>
    </section>

    <!-- Custom CSS for Typewriter Effect -->
    <style>
        #typewriter-text {
            display: inline-block;
            white-space: nowrap;
            overflow: hidden;
        }

        /* Fix for small screens */
        @media (max-width: 576px) {
            #typewriter-text {
                white-space: normal; /* Allow wrapping */
                word-break: break-word;
            }

            .display-2 {
                font-size: 2.2rem !important; /* Smaller headline */
            }

            .fa-2x {
                font-size: 1.2rem !important;
            }
        }

    </style>


    <section id="gallery" class="section-background" style="padding: 50px 0;" data-aos="fade-left" data-aos-delay="200">
        <div class="container">
            <div class="section-title text-center" style="margin-bottom: 30px;">
                <h2 style="font-size: 2.5rem; font-weight: bold; color: #333;">
                    <strong> {{ __('lang.gallery_title') }} {{ __('lang.gallery_title_strong') }}</strong>
                </h2>
                <p style="font-size: 1rem; color: #666;">
                    {{ __('lang.gallery_subtitle') }}
                </p>
            </div>
            <div class="row">
                <!-- Latest Image -->
                <div class="col-md-6">
                    <a href="{{ route('image-gallery') }}" class="d-block">
                        <div class="gallery-item position-relative mt-3">
                            @if($latestImage)
                                <img src="{{ asset('storage/' . $latestImage->image_path) }}" class="img-fluid" alt="Latest Image">
                            @else
                                <img src="https://via.placeholder.com/600x400?text=No+Image+Available" class="img-fluid" alt="No Image Available">
                            @endif
                            <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.6); color: #fff; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">
                                <h2>{{ __('lang.photo_gallery') }}</h2>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Latest Video Thumbnail -->
                <div class="col-md-6">
                    <a href="{{ route('video-gallery') }}" class="d-block">
                        <div class="gallery-item position-relative mt-3">
                            @if($latestVideo)
                                <video id="video-source" class="d-none">
                                    <source src="{{ asset('storage/' . $latestVideo->image_path) }}" type="video/mp4">
                                </video>
                                <img id="video-thumbnail" class="img-fluid" alt="Video Thumbnail">
                            @else
                                <img src="https://via.placeholder.com/600x400?text=No+Video+Available" class="img-fluid" alt="No Video Available">
                            @endif
                            <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.6); color: #fff; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">
                                <h2>{{ __('lang.video_gallery') }}</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="scope-of-work" class="section-background" style="padding: 60px 0;" data-aos="fade-left" data-aos-delay="200">
        <div class="container">
            <div class="text-center mb-5">
                <h2 style="font-size: 2.5rem; font-weight: bold; color: #333;">
                    <strong> {{ __('lang.scope_work_title') }} {{ __('lang.scope_work_title_strong') }}</strong>
                </h2>
                <p style="font-size: 1.1rem; color: #666;">
                    {{ __('lang.scope_subtitle') }}
                </p>
            </div>

            <div class="row g-4">
                @foreach ($scopes as $scope)
                    <div class="col-md-4">
                        <div class="service-card text-center p-4 h-100" style="background: #fff; border: 1px solid #ddd; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s;">
                            <i class="ico icon-circled icon-bg{{ $scope->color }} {{ $scope->icon }} icon-4x mb-3"></i>
                            <h4 class="fw-bold mb-3" style="color: #333;">
                                {{ app()->getLocale() === 'ar' ? $scope->ar_title : $scope->en_title }}
                            </h4>
                            <p style="color: #555;">
                                {{ app()->getLocale() === 'ar' ? $scope->ar_description : $scope->en_description }}
                            </p>
                            <a href="{{ route('scope.projects', $scope->id) }}" class="btn btn-{{ $scope->color }} mt-3">
                                {{ __('lang.show_projects') }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about-section" class="section-background" class="content" data-aos="fade-left" data-aos-delay="200">
        <div class="container">
            <div class="row">
                <!-- Image Section -->
                <div class="col-md-5 animate-fade-in-left">
                    <div class="about-image">
                        <img src="img/dummies/blog/img1.jpg" alt="{{ __('lang.about_title') }}" class="img-fluid" />
                    </div>
                </div>

                <!-- Text Content Section -->
                <div class="col-md-7 animate-fade-in-right">
                    <div class="about-text">
                        <h3>{{ __('lang.about_title') }}</h3>
                        <p>
                            {{ __('lang.about_description') }}
                        </p>
                        <div class="about-features">
                            <div class="feature-item">
                                <i class="icon-bullhorn"></i>
                                <span>
                                    <h5>{{ __('lang.feature_1_title') }}</h5>
                                    <p>{{ __('lang.feature_1_description') }}</p>
                                </span>
                            </div>
                            <div class="feature-item">
                                <i class="icon-sitemap"></i>
                                <span>
                                    <h5>{{ __('lang.feature_2_title') }}</h5>
                                    <p>{{ __('lang.feature_2_description') }}</p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @php
        $icons = [
            'fa-award',        // Proven Expertise
            'fa-cogs',         // Customized Solutions
            'fa-lightbulb',    // Innovative Approach
            'fa-layer-group',  // Comprehensive Services
            'fa-leaf',         // Focus on Sustainability
            'fa-user-check',   // Client-Centric Philosophy
            'fa-chart-line',   // Track Record of Success
            'fa-star'          // Commitment to Excellence
        ];
    @endphp
    <!-- Why ICTC Section -->
    <section id="why-ictc" class="section-background" style="padding: 50px 0;" data-aos="fade-left" data-aos-delay="200">
        <div class="container">
            <div class="text-center mb-5">
                <h2 style="font-size: 2.5rem; font-weight: bold; color: #333;">
                    <strong> {{ __('lang.why_ictc_title') }} {{ __('lang.why_ictc_title_strong') }}</strong>
                </h2>
                <p style="font-size: 1.1rem; color: #666;">
                    {{ __('lang.why_ictc_subtitle') }}
                </p>
            </div>
            <div class="row text-center">
                @for ($i = 1; $i <= 8; $i++)
                    <div class="col-md-3 mb-4">
                        <div class="feature-box h-100 d-flex flex-column justify-content-between p-4" style="background: #fff; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <i class="fa {{ $icons[$i-1] }} fa-3x text-primary mb-3"></i>
                            <h4 class="mb-2" style="font-weight: bold;">
                                {{ __('lang.feature_' . $i . '_title') }}
                            </h4>
                            <p style="font-size: 0.9rem; color: #555;">
                                {{ __('lang.feature_' . $i . '_description') }}
                            </p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <section class="news-section section-background" data-aos="fade-left" data-aos-delay="200">
        <div class="container">
            <div class="row">
            <div class="col-12 text-center mb-2">
                <h2 style="font-size: 2.5rem; font-weight: bold; color: #333;">
                    <strong> {{ __('lang.latest_news_title') }} {{ __('lang.latest_news_title_strong') }}</strong>
                </h2>
            </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    @if(!empty($news))
                        <div class="card news-card p-2">
                            <div class="news-images">
                                @if(!empty($news->image1_path))
                                    <img src="{{ asset('storage/' . $news->image1_path) }}" alt="{{ __('lang.news_title') }}">
                                @else
                                    <img src="https://via.placeholder.com/300x200?text=No+Image+Available" alt="No Image Available">
                                @endif

                                @if(!empty($news->image2_path))
                                    <img src="{{ asset('storage/' . $news->image2_path) }}" alt="{{ __('lang.news_title') }}">
                                @else
                                    <img src="https://via.placeholder.com/300x200?text=No+Image+Available" alt="No Image Available">
                                @endif
                            </div>
                            <div class="card-body news-card-body">
                                <h3 class="news-card-title">
                                    {{ app()->getLocale() === 'ar' ? ($news->ar_title ?? __('lang.no_title_available')) : ($news->en_title ?? __('lang.no_title_available')) }}
                                </h3>
                                <p class="news-card-text">
                                    {{ app()->getLocale() === 'ar' ? ($news->ar_subtitle ?? __('lang.no_subtitle_available')) : ($news->en_subtitle ?? __('lang.no_subtitle_available')) }}
                                </p>
                                @if(!empty($news->id))
                                    <a href="{{ route('news-details', $news->id) }}" class="news-read-more">
                                        {{ __('lang.read_more') }} &raquo;
                                    </a>
                                @else
                                    <span class="news-read-more disabled" style="color: #aaa; cursor: not-allowed;">
                                        {{ __('lang.no_details_available') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                    @else
                        <p>{{ __('lang.no_news_available') }}</p>
                    @endif
                </div>
            </div>
        </div>
    </section>


    {{-- <section id="content">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <div class="title-container">
                <h3 class="title">Our <strong>Services</strong></h3>
                </div>
                <div class="row">
                <!-- Service 1: Website -->
                <div class="col-md-4 mt-4">
                    <div class="box">
                    <div class="icon">
                        <i class="ico icon-circled icon-bgdark icon-desktop icon-3x"></i>
                    </div>
                    <div class="text">
                        <h4><p>Website</p></h4>
                        <p>
                        We provide high-quality web development services tailored to your needs.
                        </p>
                        <a href="{{route('services')}}">Learn More</a>
                    </div>
                    </div>
                </div>

                <!-- Service 2: Education -->
                <div class="col-md-4 mt-4">
                    <div class="box">
                    <div class="icon">
                        <i class="icon-circled icon-bgsuccess icon-briefcase icon-3x"></i> <!-- Correct icon class -->
                    </div>
                    <div class="text">
                        <h4><p>Education</p></h4>
                        <p>
                        Offering education services with a focus on capacity building and skill development.
                        </p>
                        <a href="{{route('services')}}">Learn More</a>
                    </div>
                    </div>
                </div>

                <!-- Service 3: Community Research and Project Evaluation -->
                <div class="col-md-4 mt-4">
                    <div class="box">
                    <div class="icon">
                        <i class="ico icon-circled icon-bgdanger icon-search icon-3x"></i>
                    </div>
                    <div class="text">
                        <h4><p>Community Research & Project Evaluation</p></h4>
                        <p>
                        We conduct in-depth research and evaluations to help your projects thrive.
                        </p>
                        <a href="{{route('services')}}">Learn More</a>
                    </div>
                    </div>
                </div>
                </div>

                <div class="row">
                <!-- Service 4: Technological Solutions -->
                <div class="col-md-4 mt-4">
                    <div class="box">
                    <div class="icon">
                        <i class="ico icon-circled icon-bglight icon-cogs icon-3x"></i>
                    </div>
                    <div class="text">
                        <h4><p>Technological Solutions</p></h4>
                        <p>
                        Providing cutting-edge tech solutions to optimize your business operations.
                        </p>
                        <a href="{{route('services')}}">Learn More</a>
                    </div>
                    </div>
                </div>

                <!-- Service 5: Training and Capacity Building -->
                <div class="col-md-4 mt-4">
                    <div class="box">
                    <div class="icon">
                        <i class="ico icon-circled icon-bgsuccess icon-briefcase icon-3x"></i>
                    </div>
                    <div class="text">
                        <h4><p>Training & Capacity Building</p></h4>
                        <p>
                        Our training programs help enhance skills and build p professional capacities.
                        </p>
                        <a href="{{route('services')}}">Learn More</a>
                    </div>
                    </div>
                </div>

                <!-- Service 6: Institutional Development -->
                <div class="col-md-4 mt-4">
                    <div class="box">
                    <div class="icon">
                        <i class="ico icon-circled icon-bgdark icon-building icon-3x"></i>
                    </div>
                    <div class="text">
                        <h4><p>Institutional Development</p></h4>
                        <p>
                        Strengthening organizational structures to improve performance and sustainability.
                        </p>
                        <a href="{{route('services')}}">Learn More</a>
                    </div>
                    </div>
                </div>
                </div>

                <div class="row">
                <!-- Service 7: Implementation of Development Projects -->
                <div class="col-md-4 mt-4">
                    <div class="box">
                    <div class="icon">
                        <i class="ico icon-circled icon-bgdanger icon-cogs icon-3x"></i>
                    </div>
                    <div class="text">
                        <h4><p>Implementation of Development Projects</p></h4>
                        <p>
                        We specialize in executing development projects from concept to completion.
                        </p>
                        <a href="{{route('services')}}">Learn More</a>
                    </div>
                    </div>
                </div>

                <!-- Service 8: Economic Development -->
                <div class="col-md-4 mt-4">
                    <div class="box">
                    <div class="icon">
                        <i class="ico icon-circled icon-bgprimary icon-money icon-3x"></i>
                    </div>
                    <div class="text">
                        <h4><p>Economic Development</p></h4>
                        <p>
                        We offer strategies to foster sustainable economic growth and community prosperity.
                        </p>
                        <a href="{{route('services')}}">Learn More</a>
                    </div>
                    </div>
                </div>

                </div>
            </div>
            </div>
        </div>
    </section> --}}

    {{-- <section id="works">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="title-container">
                <h3 class="title">Recent <strong>Works</strong></h3>
            </div>
            <div class="row">
                <div class="grid cs-style-4 d-flex">
                <div class="col-md-3 m-3">
                    <div class="item">
                    <figure>
                        <div><img src="img/dummies/works/1.jpg" alt="" /></div>
                        <figcaption>
                        <div>
                            <span>
                <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
                </span>
                            <span>
                <a href="{{route('services')}}"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
                </span>
                        </div>
                        </figcaption>
                    </figure>
                    </div>
                </div>
                <div class="col-md-3 m-3">
                    <div class="item">
                    <figure>
                        <div><img src="img/dummies/works/2.jpg" alt="" /></div>
                        <figcaption>
                        <div>
                            <span>
                <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
                </span>
                            <span>
                <a href="{{route('services')}}"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
                </span>
                        </div>
                        </figcaption>
                    </figure>
                    </div>
                </div>
                <div class="col-md-3 m-3">
                    <div class="item">
                    <figure>
                        <div><img src="img/dummies/works/3.jpg" alt="" /></div>
                        <figcaption>
                        <div>
                            <span>
                <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
                </span>
                            <span>
                <a href="{{route('services')}}"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
                </span>
                        </div>
                        </figcaption>
                    </figure>
                    </div>
                </div>
                <div class="col-md-3 m-3">
                    <div class="item">
                    <figure>
                        <div><img src="img/dummies/works/4.jpg" alt="" /></div>
                        <figcaption>
                        <div>
                            <span>
                <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
                </span>
                            <span>
                <a href="{{route('services')}}"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
                </span>
                        </div>
                        </figcaption>
                    </figure>
                    </div>
                </div>
                </div>

            </div>
            </div>
        </div>
        </div>
    </section> --}}

    <section id="partners" class="partners-section">
        <div class="container">
            <div class="title-container">
                <h3 class="title">
                    <strong>{{ __('lang.partners_title') }} {{ __('lang.partners_title_strong') }}</strong>
                </h3>
            </div>
            <div class="swiper partners-slider-unique">
                <div class="swiper-wrapper">
                    @foreach($partners as $partner)
                        <div class="swiper-slide">
                            <img src="{{ asset($partner->image_path) }}" alt="Partner">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
@push('js')
    <!-- Include Video Thumbnail Generation Script -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let video = document.getElementById("video-source");
            if (video) {
                let canvas = document.createElement("canvas");
                let context = canvas.getContext("2d");
                let thumbnail = document.getElementById("video-thumbnail");

                video.addEventListener("loadeddata", function() {
                    video.currentTime = 2; // Capture at 2 seconds
                });

                video.addEventListener("seeked", function() {
                    canvas.width = video.videoWidth / 2;
                    canvas.height = video.videoHeight / 2;
                    context.drawImage(video, 0, 0, canvas.width, canvas.height);
                    thumbnail.src = canvas.toDataURL("image/png"); // Convert to base64
                });

                video.load();
            }
        });
    </script>
    <!-- JavaScript for Typewriter Effect -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const items = [
                { letter: 'I', meaning: '{{ __("lang.i_meaning") }}', icon: 'fa-lightbulb' },
                { letter: 'C', meaning: '{{ __("lang.c1_meaning") }}', icon: 'fa-users' },
                { letter: 'T', meaning: '{{ __("lang.t_meaning") }}', icon: 'fa-cogs' },
                { letter: 'C', meaning: '{{ __("lang.c2_meaning") }}', icon: 'fa-rocket' }
            ];

            const textElement = document.getElementById('typewriter-text');
            const iconElement = document.getElementById('typewriter-icon');
            let currentIndex = 0;

            function typeWriter(text, element, speed, callback) {
                let i = 0;
                element.textContent = '';
                function type() {
                    if (i < text.length) {
                        element.textContent += text.charAt(i);
                        i++;
                        setTimeout(type, speed);
                    } else {
                        callback();
                    }
                }
                type();
            }

            function animateItem() {
                const current = items[currentIndex];
                const fullText = `${current.letter}: ${current.meaning}`;

                // Update icon
                iconElement.className = `fa-solid ${current.icon} fa-2x me-2 text-primary`;
                iconElement.setAttribute('aria-label', `${current.letter} icon`);

                // Type full text (letter + meaning)
                typeWriter(fullText, textElement, 50, () => {
                    // Pause before moving to next item
                    setTimeout(() => {
                        currentIndex = (currentIndex + 1) % items.length;
                        animateItem();
                    }, 2000); // Pause for 2 seconds
                });
            }

            // Start the animation
            animateItem();
        });
    </script>
@endpush
