@extends('layouts.app')

@section('content')

<!-- Address Section -->
<section class="page-header address" style="
    background: {{ isset($settings['contact_background_enabled']) && $settings['contact_background_enabled'] == '1' ? 'linear-gradient(60deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),' : '' }}
    url('{{ asset($settings['contact_image'] ?? 'https://www.qodra-egy.net/img/about/ab_4.jpg') }}');">
    <div class="container text-center" style="padding-top: 120px; padding-bottom: 60px;">
        <h3 class="address-h3" style="font-size: 2.5rem; font-weight: bold;">
            {{ __('lang.contact_us_title') }}
        </h3>
        <p style="font-size: 1.2rem; margin-top: 10px;">
            {{ __('lang.contact_us_subtitle') }}
        </p>
    </div>
</section>


<section class="partners-section section-background">
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
                                <div class="card dark-custom-card">
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

@endsection
