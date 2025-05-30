@extends('layouts.app')

@section('content')

<!-- Hero Section (Address Style) -->
<section class="address" style="
    background: {{ isset($settings['work_with_us_background_enabled']) && $settings['work_with_us_background_enabled'] == '1' ? 'linear-gradient(60deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),' : '' }}
    url('{{ asset($settings['work_with_us_image'] ?? 'https://www.qodra-egy.net/img/about/ab_4.jpg') }}');">
    <div class="container" style="padding-top: 120px; padding-bottom: 60px;">
        <div class="col-lg-12 text-center">
            <h3 class="address-h3">{{ __('lang.work_with_us') }}</h3>
        </div>
    </div>
</section>


<!-- Join Us Section -->
<section id="join-us" class="section-background" style="padding: 60px 0; background-color: #fefbe9;" data-aos="fade-up" data-aos-delay="200">
    <div class="container">
        <div class="text-center mb-5">
            <div class="section-header d-flex justify-content-center align-items-center mb-4">
                <h2 class="section-title" style="font-family: 'Georgia', serif; font-weight: bold; font-size: 2.8rem;">
                    <span style="padding-bottom: 5px;">{{ __('lang.join_us') }}</span>
                </h2>
            </div>
        </div>

        <div class="row g-4">
            <!-- Card 1: Employment Opportunities -->
            <div class="col-md-4">
                <a href="{{ route('work-withus.employment') }}" class="text-decoration-none">
                    <div class="work-withus-card">
                        <div class="card-image" style="background-image: url('{{ asset('img/image1.png') }}');">
                        </div>
                        <div class="card-footer text-white" style="background-color: #40537d; padding: 18px;">
                            {{ __('lang.employment_opportunities') }}
                        </div>
                    </div>
                </a>
            </div>

            <!-- Card 2: Consultancy -->
            <div class="col-md-4">
                <a href="{{ route('work-withus.consultancy') }}" class="text-decoration-none">
                    <div class="work-withus-card">
                        <div class="card-image" style="background-image: url('{{ asset('img/image2.png') }}');">
                        </div>
                        <div class="card-footer text-white" style="background-color: #40537d; padding: 18px;">
                            {{ __('lang.consultancy') }}
                        </div>
                    </div>
                </a>
            </div>

            <!-- Card 3: Internship Programs -->
            <div class="col-md-4">
                <a href="{{ route('work-withus.internship') }}" class="text-decoration-none">
                    <div class="work-withus-card">
                        <div class="card-image" style="background-image: url('{{ asset('img/image3.png') }}');">
                        </div>
                        <div class="card-footer text-white" style="background-color: #40537d; padding: 18px;">
                            {{ __('lang.internship_programs') }}
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
