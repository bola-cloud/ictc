@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="address" style="background: linear-gradient(60deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset($settings->cover_image ?? 'https://www.qodra-egy.net/img/about/ab_4.jpg') }}'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="col-lg-12 text-center">
            <h3 class="address-h3">{{ __('lang.available_vacancies') }}</h3>
        </div>
    </div>
</section>

<!-- Consultancy Vacancies Section -->
<section class="section-background" style="padding: 60px 0; background-color: #fefbe9;">
    <div class="container">
        <div class="text-center mb-5">
            <div class="section-header d-flex justify-content-center align-items-center mb-4">
                <h2 class="section-title" style="font-family: 'Georgia', serif; font-weight: bold; font-size: 2.8rem;">
                    <span style="  padding-bottom: 5px;">{{ __('lang.consultancy_vacancies') }}</span>
                </h2>
            </div>
        </div>

        @forelse($vacancies as $vacancy)
            <div class="mb-5 p-5" style="background-color: #404b62; border-radius: 60px;">
                <div style="background-color:  #F3EED4; padding: 40px; border-radius: 10px; font-size: 1rem; font-family: Georgia, serif;">
                    <p><strong>{{ __('lang.job_title') }}:</strong> {{ app()->getLocale() === 'ar' ? $vacancy->ar_title : $vacancy->en_title }}</p>
                    <p><strong>{{ __('lang.location') }}:</strong> {{ $vacancy->location ?? __('lang.not_specified') }}</p>
                    <p><strong>{{ __('lang.job_type') }}:</strong> {{ $vacancy->job_type ?? __('lang.not_specified') }}</p>
                    <p><strong>{{ __('lang.application_deadline') }}:</strong> {{ $vacancy->deadline ? \Carbon\Carbon::parse($vacancy->deadline)->format('F d, Y') : __('lang.not_specified') }}</p>
                    <p><strong>{{ __('lang.job_description') }}:</strong></p>
                    {!! app()->getLocale() === 'ar' ? $vacancy->ar_description : $vacancy->en_description !!}
                    <p style="font-weight: bold; color: #000; margin-top: 30px;">
                        {{ __('lang.deadline_final') }}
                        {{ $vacancy->deadline ? \Carbon\Carbon::parse($vacancy->deadline)->format('F d, Y') : __('lang.not_specified') }}
                        <br>{{ __('lang.equal_opportunity_note') }}
                    </p>
                </div>
            </div>
        @empty
            <p class="text-center">{{ __('lang.no_data_found') }}</p>
        @endforelse
    </div>
</section>

@endsection
