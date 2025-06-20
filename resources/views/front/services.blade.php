@extends('layouts.app')

@section('content')

<section class="address" style="
    background: {{ isset($settings['work_with_us_background_enabled']) && $settings['work_with_us_background_enabled'] == '1' ? 'linear-gradient(60deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),' : '' }}
    url('{{ asset($settings['work_image'] ?? 'https://www.qodra-egy.net/img/about/ab_4.jpg') }}');">
    <div class="container" style="padding-top: 120px; padding-bottom: 60px;">
        <div class="col-lg-12 text-center">
            <h3 class="address-h3">{{ __('lang.our_work') }}</h3>
        </div>
    </div>
</section>


{{-- <section id="statistics" style="padding: 60px 0; background-color: #f8f9fa;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 style="font-size: 2.5rem; font-weight: bold; color: #333;">
                {{ __('lang.statistics_title') }}
            </h2>
            <p style="font-size: 1.1rem; color: #666;">
                {{ __('lang.statistics_subtitle') }}
            </p>
        </div>
        <div class="row g-4">
            <!-- Projects Card -->
            <div class="col-md-6 col-lg-3">
                <div class="stat-card text-center p-4" style="background: linear-gradient(135deg, #6a11cb, #2575fc); border-radius: 15px; box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2); color: #fff;">
                    <h3 class="fw-bold" style="font-size: 2.5rem;">{{ __('lang.projects_value') }}</h3>
                    <p style="font-size: 1.2rem;">{{ __('lang.projects_title') }}</p>
                </div>
            </div>
            <!-- Partners Card -->
            <div class="col-md-6 col-lg-3">
                <div class="stat-card text-center p-4" style="background: linear-gradient(135deg, #ff512f, #f09819); border-radius: 15px; box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2); color: #fff;">
                    <h3 class="fw-bold" style="font-size: 2.5rem;">{{ __('lang.partners_value') }}</h3>
                    <p style="font-size: 1.2rem;">{{ __('lang.partners_titles') }}</p>
                </div>
            </div>
            <!-- Beneficiaries Card -->
            <div class="col-md-6 col-lg-3">
                <div class="stat-card text-center p-4" style="background: linear-gradient(135deg, #43cea2, #185a9d); border-radius: 15px; box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2); color: #fff;">
                    <h3 class="fw-bold" style="font-size: 2.5rem;">{{ __('lang.beneficiaries_value') }}</h3>
                    <p style="font-size: 1.2rem;">{{ __('lang.beneficiaries_title') }}</p>
                </div>
            </div>
            <!-- Governorates Card -->
            <div class="col-md-6 col-lg-3">
                <div class="stat-card text-center p-4" style="background: linear-gradient(135deg, #ff7e5f, #feb47b); border-radius: 15px; box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2); color: #fff;">
                    <h3 class="fw-bold" style="font-size: 2.5rem;">{{ __('lang.governorates_value') }}</h3>
                    <p style="font-size: 1.2rem;">{{ __('lang.governorates_title') }}</p>
                </div>
            </div>
        </div>
    </div>
</section> --}}


    <section id="scope-of-work" class="section-background" style="padding: 60px 0;" data-aos="fade-up" data-aos-delay="200">
        <div class="container">
            <div class="text-center mb-5">
                <div class="section-header d-flex justify-content-center align-items-center mb-4">
                    <h2 class="section-title"><span>{{ __('lang.scope_work_title') }}</span></h2>
                </div>
                {{-- <h2 style="font-size: 2.5rem; font-weight: bold; color: #333;">
                    <strong>{{ __('lang.scope_work_title') }} {{ __('lang.scope_work_title_strong') }}</strong>
                </h2> --}}
                <p style="font-size: 1.1rem; color: #666;">
                    {{ __('lang.scope_subtitle') }}
                </p>
            </div>

            <div class="row g-4">
                @foreach ($scopes as $scope)

                    <div class="col-md-4">
                        <a href="{{ route('frontend.scope.show', Str::slug($scope->en_title)) }}" class="text-decoration-none">
                            <div class="custom-card">
                                <div class="card-image" style="background-image: url('{{ asset('storage/' . $scope->image) }}');">
                                </div>
                                <div class="card-overlay" style="background-color: #40537d;">
                                    <div class="overlay-content text-center text-white">
                                        <i class="{{ $scope->icon }} fa-3x mb-3"></i>
                                    </div>
                                </div>
                                <div class="card-footer text-white" style="background-color: #40537d;padding: 18px;">
                                    {{ app()->getLocale() === 'ar' ? $scope->ar_title : $scope->en_title }}
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

     <section class="partners-section section-background" style="margin-top: 10vh;">
        <div class="container">
            <!-- Title -->
            <div class="text-center mb-5 section-header">
                <h3 class="section-title">
                <span> {{ __('lang.partners_section_title') }} {{ __('lang.partners_section_strong') }}</span>
                </h3>
            </div>

            <!-- Dynamic Partners Section -->
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-12 mb-5">
                        <h4 class="category-title text-center mb-3">
                            {{ app()->getLocale() === 'ar' ? $category->ar_name : $category->en_name }}
                        </h4>
                        <div class="row">
                            @foreach ($category->partners as $partner)
                                <div class="col-md-3 col-sm-6 mb-4">
                                    <div class="card">
                                        <img src="{{ asset($partner->image_path) }}" class="card-img-top" alt="Partner">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- <section id="services" style="padding: 60px 0; background-color: #fff;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 style="font-size: 2.5rem; font-weight: bold; color: #333;">
                    {{ __('lang.services_title') }}
                </h2>
                <p style="font-size: 1.1rem; color: #666;">
                    {{ __('lang.services_subtitle') }}
                </p>
            </div>
            <div class="row g-4">
                @foreach($services as $service)
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card text-center p-4" style="background: #f9f9f9; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                            <h4 class="fw-bold">
                                {{ app()->getLocale() == 'ar' ? $service->ar_title : $service->en_title }}
                            </h4>
                            <p>
                                {{ app()->getLocale() == 'ar' ? $service->ar_description : $service->en_description }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section> --}}

@endsection
