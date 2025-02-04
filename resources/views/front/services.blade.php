@extends('layouts.app')

@section('content')

<section class="address">
    <div class="container">
        <div class="col-lg-12 text-center">
            <h3 class="address-h3">{{ __('lang.services') }}</h3>
        </div>
    </div>
</section>

<section id="statistics" style="padding: 60px 0; background-color: #f8f9fa;">
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
</section>


<section id="services" style="padding: 60px 0; background-color: #fff;">
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
            <!-- Research Services -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card text-center p-4" style="background: #f9f9f9; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                    <h4 class="fw-bold">{{ __('lang.market_analysis_title') }}</h4>
                    <p>{{ __('lang.market_analysis_description') }}</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card text-center p-4" style="background: #f9f9f9; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                    <h4 class="fw-bold">{{ __('lang.impact_assessment_title') }}</h4>
                    <p>{{ __('lang.impact_assessment_description') }}</p>
                </div>
            </div>

            <!-- Training Services -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card text-center p-4" style="background: #f9f9f9; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                    <h4 class="fw-bold">{{ __('lang.skill_development_title') }}</h4>
                    <p>{{ __('lang.skill_development_description') }}</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card text-center p-4" style="background: #f9f9f9; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                    <h4 class="fw-bold">{{ __('lang.leadership_training_title') }}</h4>
                    <p>{{ __('lang.leadership_training_description') }}</p>
                </div>
            </div>

            <!-- Technology Services -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card text-center p-4" style="background: #f9f9f9; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                    <h4 class="fw-bold">{{ __('lang.custom_software_title') }}</h4>
                    <p>{{ __('lang.custom_software_description') }}</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card text-center p-4" style="background: #f9f9f9; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                    <h4 class="fw-bold">{{ __('lang.automation_title') }}</h4>
                    <p>{{ __('lang.automation_description') }}</p>
                </div>
            </div>

            <!-- Institutional Development Services -->
            <div class="col-md-6 col-lg-4">
                <div class="service-card text-center p-4" style="background: #f9f9f9; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                    <h4 class="fw-bold">{{ __('lang.governance_frameworks_title') }}</h4>
                    <p>{{ __('lang.governance_frameworks_description') }}</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card text-center p-4" style="background: #f9f9f9; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                    <h4 class="fw-bold">{{ __('lang.change_management_title') }}</h4>
                    <p>{{ __('lang.change_management_description') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<style>


</style>
@endsection
