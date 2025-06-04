@extends('layouts.app')

@section('content')


    <div class="container-fluid m-0 p-0">
        <!-- Address Section -->
        <section class="address" style="
            background: {{ isset($settings['about_background_enabled']) && $settings['about_background_enabled'] == '1' ? 'linear-gradient(60deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),' : '' }}
            url('{{ asset($settings['about_image'] ?? 'https://www.qodra-egy.net/img/about/ab_4.jpg') }}');">
            <div class="container" style="padding-top: 120px; padding-bottom: 60px;">
                <div class="col-lg-12 text-center">
                    <h3 class="address-h3">{{ __('lang.about_us') }}</h3>
                </div>
            </div>
        </section>



        <nav class="custom-navbar">
            <ul class="nav-menu">
                <li class="nav-item"><a href="#history">{{ __('lang.nav_history') }}</a></li>
                <li class="nav-item"><a href="#vision-mission">{{ __('lang.nav_vision_mission') }}</a></li>
                <li class="nav-item"><a href="#philosophy">{{ __('lang.nav_philosophy') }}</a></li>
                <li class="nav-item"><a href="#strategy">{{ __('lang.nav_strategy') }}</a></li>
                <li class="nav-item"><a href="#team">{{ __('lang.nav_our_team') }}</a></li>
            </ul>
        </nav>

        <section id="history" class="mt-5 mb-5 section-margin scroll-section">
            <div class="history-section">
                <div class="container">
                    <div class="section-header d-flex justify-content-center align-items-center mb-4">
                        <h2 class="section-title"><span>{{ __('lang.our_history') }}</span></h2>
                    </div>

                    <p class="section-description">
                        {{ __('lang.our_history_description') }}
                    </p>

                    <p class="section-description">
                        {{ __('lang.our_history_description_two') }}
                    </p>
                    
                </div>
            </div>
        </section>

        <section id="vision-mission" class="section-margin scroll-section">
            <div class="vision-mission container">
                <div class="vision">
                    <h3 class="vision-title">{{ __('lang.our_vision') }}</h3>
                    <p class="vision-text">
                        {{ __('lang.our_vision_description') }}
                    </p>
                </div>

                <div class="mission">
                    <h3 class="mission-title">{{ __('lang.our_mission') }}</h3>
                    <p class="mission-text">
                        {{ __('lang.our_mission_description') }}
                    </p>
                </div>
            </div>
        </section>

        <!-- OUR PHILOSOPHY Section -->
        <section id="philosophy" class="section-spacing section-margin scroll-section">
            <div class="history-section">
                <div class="container">
                    <div class="section-header d-flex justify-content-center align-items-center mb-4">
                        <h2 class="section-title"><span>{{ __('lang.our_philosophy') }}</span></h2>
                    </div>

                    <p class="section-description text-center mb-5">
                        {{ __('lang.our_philosophy_description') }}
                    </p>

                    <div class="row g-4 justify-content-center">
                        @foreach ([
                            ['icon' => 'integrity.png', 'label' => 'integrity'],
                            ['icon' => 'development.png', 'label' => 'development'],
                            ['icon' => 'empowerment.png', 'label' => 'empowerment'],
                            ['icon' => 'responsibility.png', 'label' => 'responsibility'],
                            ['icon' => 'innovation.png', 'label' => 'innovation'],
                            ['icon' => 'teamwork.png', 'label' => 'team_work'],
                            ['icon' => 'quality.png', 'label' => 'quality'],
                            ['icon' => 'commitment.png', 'label' => 'commitment'],
                        ] as $item)
                            <div class="col-md-3 col-sm-6">
                                <div class="work-withus-card text-center h-100">
                                    <div class="card-image d-flex justify-content-center align-items-center"
                                        style="background-image: url('{{ asset('img/icons/' . $item['icon']) }}'); height: 13vh !important; background-size: contain; background-repeat: no-repeat; background-position: center;">
                                    </div>
                                    <div class="card-footer text-white" style="background-color: #40537d; padding: 18px;">
                                        {{ __('lang.' . $item['label']) }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- OUR SERVICES Section -->
        <section id="strategy" class="section-spacing section-margin scroll-section">
            <div class="history-section">
                <div class="container">
                    <div class="section-header d-flex justify-content-center align-items-center mb-4">
                        <h2 class="section-title">
                            <span>{{ __('lang.our_services') }}</span>
                        </h2>
                    </div>

                    <p class="section-description text-center mb-5">
                        {{ __('lang.our_services_description') }}
                    </p>

                    <div class="row g-4 justify-content-center">
                        @foreach ($services as $service)
                            <div class="col-md-3 col-sm-6">
                                <div class="work-withus-card text-center h-100">
                                    <div class="card-image d-flex justify-content-center align-items-center"
                                        style="
                                            height: 13vh !important;
                                            background-size: contain;
                                            background-repeat: no-repeat;
                                            background-position: center;
                                            background-image: url('{{ asset($service->image) }}');
                                        ">
                                    </div>
                                    <div class="card-footer text-white" style="background-color: #40537d; padding: 18px;">
                                        {{ app()->getLocale() === 'ar' ? $service->ar_title : $service->en_title }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>


        <section id="team" class="team-section section-spacing section-margin scroll-section">
            <div class="container">
                @foreach ($teamSections as $section)
                    <div class="mb-5">
                        <div class="d-flex justify-content-center align-items-center mb-5">
                            <h2 class="section-title text-center">
                                <span>
                                    {{ app()->getLocale() === 'ar' ? $section->ar_title : $section->en_title }}
                                </span>
                            </h2>
                        </div>


                        @php
                            $members = $section->members;
                            $layout = $section->layout;
                            $index = 0;
                            $rowSize = 1;
                        @endphp

                        @if ($layout === 'pyramid')
                            @while ($index < $members->count())
                                <div class="row justify-content-center mb-4 team-margin">
                                    @for ($i = 0; $i < $rowSize && $index < $members->count(); $i++, $index++)
                                        @php $member = $members[$index]; @endphp
                                        <div class="col-md-{{ 12 / $rowSize }} col-sm-6 mb-4 d-flex justify-content-center" style="margin-top: 5vh;">
                                            <div class="team-member text-center">
                                                <div class="image-wrapper position-relative">
                                                    <img src="{{ $member->image ? asset('storage/' . $member->image) : asset('img/default-avatar.png') }}"
                                                        class="member-img rounded"
                                                        alt="{{ $member->en_name }}">

                                                    <div class="overlay d-flex align-items-center justify-content-center">
                                                        <span class="text-white text-center px-2">
                                                            {{ app()->getLocale() === 'ar' ? $member->ar_position : $member->en_position }}
                                                        </span>
                                                    </div>
                                                </div>
                                                <h6 class="fw-bold mt-3" style="color: #003366;">
                                                    {{ app()->getLocale() === 'ar' ? $member->ar_name : $member->en_name }}
                                                </h6>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                                @php $rowSize += 2; @endphp
                            @endwhile
                        @else
                            <div class="row d-flex justify-content-center mb-4">
                                @foreach ($members as $member)
                                    <div class="col-md-3 col-sm-6 mb-4 d-flex justify-content-center" style="margin-top: 5vh;">
                                        <div class="team-member text-center">
                                            <div class="image-wrapper position-relative">
                                                <img src="{{ $member->image ? asset('storage/' . $member->image) : asset('img/default-avatar.png') }}"
                                                    class="member-img rounded"
                                                    alt="{{ $member->en_name }}">

                                                <div class="overlay d-flex align-items-center justify-content-center">
                                                    <span class="text-white text-center px-2">
                                                        {{ app()->getLocale() === 'ar' ? $member->ar_position : $member->en_position }}
                                                    </span>
                                                </div>
                                            </div>
                                            <h6 class="fw-bold mt-3" style="color: #003366;">
                                                {{ app()->getLocale() === 'ar' ? $member->ar_name : $member->en_name }}
                                            </h6>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </section>

    </div>
@endsection
@push('js')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const sections = document.querySelectorAll(".scroll-section");
        const navLinks = document.querySelectorAll(".nav-menu a");

        const options = {
            root: null,
            rootMargin: "0px",
            threshold: 0.4 // Section is considered "active" if 40% visible
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                const id = entry.target.getAttribute("id");
                const link = document.querySelector(`.nav-menu a[href="#${id}"]`);

                if (entry.isIntersecting) {
                    link.parentElement.classList.add("active");
                } else {
                    link.parentElement.classList.remove("active");
                }
            });
        }, options);

        sections.forEach(section => {
            observer.observe(section);
        });
    });
</script>

@endpush
