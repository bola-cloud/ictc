@extends('layouts.app')

@section('content')
    <!-- Page Header -->
    <section class="address" style="
        background: {{ isset($settings['news_background_enabled']) && $settings['news_background_enabled'] == '1' ? 'linear-gradient(60deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),' : '' }}
        url('{{ asset($settings['news_image'] ?? 'https://www.qodra-egy.net/img/about/ab_4.jpg') }}');">
        <div class="container text-center">
            <h2 class="address-h3" style="font-size: 2.5rem; font-weight: bold;">
                {{ __('lang.news_details_title') }}
            </h2>
            <p style="font-size: 1.2rem; margin-top: 10px;">
                {{ __('lang.news_details_subtitle') }}
            </p>
        </div>

    </section>

    <section class="news-section section-background py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4" style="text-align: {{ app()->getLocale() === 'ar' ? 'right' : 'left' }};">
                    <h1 class="fw-bolder fs-4" style="color: #404b62 !important; font-weight: 900;">
                        {{ app()->getLocale() === 'ar' ? $news->ar_title : $news->en_title }}
                    </h1>
                    <p class="text-muted">
                        {{ app()->getLocale() === 'ar' ? $news->ar_subtitle : $news->en_subtitle }}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mb-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header text-center fs-4 fw-bold baige-news-card">
                            {{ app()->getLocale() === 'ar' ? $news->ar_head : $news->en_head }}
                        </div>
                        <div class="card-body section-background baige-news-card-body">
                            <p class="fs-5 text-{{ app()->getLocale() === 'ar' ? 'end' : 'start' }}">
                                {{ app()->getLocale() === 'ar' ? $news->ar_content : $news->en_content }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-2">
                        <div class="col-12">
                            <img src="{{ asset('storage/' . $news->image1_path) }}" alt="News Image 1" class="img-fluid rounded shadow-sm">
                        </div>
                        <div class="col-12">
                            <img src="{{ asset('storage/' . $news->image2_path) }}" alt="News Image 2" class="img-fluid rounded shadow-sm">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
