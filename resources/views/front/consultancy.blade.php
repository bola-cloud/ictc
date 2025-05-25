@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="address" style="background: linear-gradient(60deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset($settings->cover_image ?? 'https://www.qodra-egy.net/img/about/ab_4.jpg') }}'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="col-lg-12 text-center">
            <h3 class="address-h3">{{ __('lang.consultancy') }}</h3>
        </div>
    </div>
</section>

<!-- Content Section -->
<section class="section-background" style="padding: 60px 0; background-color: #fefbe9;" data-aos="fade-up" data-aos-delay="200">
    <div class="container">
        <div class="text-center mb-5">
            <div class="section-header d-flex justify-content-center align-items-center mb-4">
                <h2 class="section-title" style="font-family: 'Georgia', serif; font-weight: bold; font-size: 2.8rem; color: #333;">
                    <span style="border-bottom: 4px solid #3e4756; padding-bottom: 5px;">{{ __('lang.consultancy_opportunities') }}</span>
                </h2>
            </div>
        </div>

        <div class="row g-5 justify-content-center">

            <!-- Express Your Interest -->
            <div class="col-md-5">
                <a href="{{ route('work-withus.consultancy.interest') }}" class="text-decoration-none">
                    <div class="work-withus-card">
                        <div class="card-image" style="background-image: url('{{ asset('img/image4.png') }}');">
                        </div>
                        <div class="card-footer text-white" style="background-color: #40537d; padding: 18px;">
                            {{ __('lang.express_interest') }}
                        </div>
                    </div>
                </a>
            </div>

            <!-- Available Vacancies -->
            <div class="col-md-5">
                <a href="{{ route('frontend.consultancies.index') }}" class="text-decoration-none">
                    <div class="work-withus-card">
                        <div class="card-image" style="background-image: url('{{ asset('img/image2.png') }}');">
                        </div>
                        <div class="card-footer text-white" style="background-color: #40537d; padding: 18px;">
                            {{ __('lang.available_consultancies') }}
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>

@endsection
