@extends('layouts.app')

@section('content')
    <div class="container-fluid p-0">
        <!-- Address Section -->
        <section class="address" style="
            background: {{ isset($settings['news_background_enabled']) && $settings['news_background_enabled'] == '1' ? 'linear-gradient(60deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),' : '' }}
            url('{{ asset($settings['news_image'] ?? 'https://www.qodra-egy.net/img/about/ab_4.jpg') }}');">
            <div class="container" style="padding-top: 120px; padding-bottom: 60px;">
                <div class="col-lg-12 text-center">
                    <h3 class="address-h3">{{ __('lang.latest_news') }}</h3>
                </div>
            </div>
        </section>



        <!-- Page Header -->
        {{-- <section id="inner-headline" class="section-background" style="background-color: #f8f9fa; padding: 20px 0;color:#404b62 !important">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="inner-heading">
                            <ul class="breadcrumb">
                                <li>
                                    <a href="{{ route('home') }}">{{ __('lang.breadcrumb_home') }}</a>
                                    <i class="icon-angle-right"></i>
                                </li>
                                <li class="active">&nbsp; {{ __('lang.latest_news') }}</li>
                            </ul>
                            <h2 class="mt-3" style="padding: 20px 0;color:#404b62 !important">{{ __('lang.latest_news') }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <!-- News Section -->
        <section class="news-section section-background py-5">
            <div class="container">
                <!-- Section Title -->
                <div class="row">
                    <div class="col-12 text-center section-header mb-4">
                        <h2 class="section-title" style="font-size: 2.5rem; font-weight: bold;">
                            <span>{{ __('lang.latest_news') }}</span>
                        </h2>
                    </div>
                </div>

                <!-- News Cards -->
                <div class="row justify-content-center">
                    @forelse ($news as $item)
                        <div class="col-lg-6 col-md-6 mb-4 d-flex align-items-stretch mt-3">
                            <div class="card news-card p-2 shadow-sm dark-custom-card">
                                <div class="news-images">
                                    <img src="{{ asset('storage/' . $item->image1_path) }}" alt="{{ $item->ar_title }}" style="width: 100%; height: 300px; object-fit: cover; margin-bottom: 10px;">
                                    {{-- @if ($item->image2_path)
                                        <img src="{{ asset('storage/' . $item->image2_path) }}" alt="{{ $item->ar_title }}" style="width: 100%; height: 200px; object-fit: cover;">
                                    @endif --}}
                                </div>
                                <div class="card-body news-card-body">
                                    <h3 class="news-card-title" style="font-size: 1.5rem; font-weight: bold; color:  #F3EED4;">
                                        <strong style="color:  #F3EED4 !important;">{{ app()->getLocale() === 'ar' ? $item->ar_title : $item->en_title }}</strong>
                                    </h3>
                                    <p class="news-card-text" style="font-size: 1rem; color:  #F3EED4;">
                                        {{ app()->getLocale() === 'ar' ? $item->ar_subtitle : $item->en_subtitle }}
                                    </p>
                                    <a href="{{ route('news-details', ['id' => $item->id]) }}" class="news-read-more" style="color:  #F3EED4; text-decoration: none; font-weight: bold;">
                                        {{ __('lang.read_more') }} &raquo;
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <p class="text-muted">{{ __('lang.no_news_available') }}</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>

    </div>
@endsection
