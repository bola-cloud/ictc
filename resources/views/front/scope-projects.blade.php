@extends('layouts.app')

@section('content')

<section class="address" style="background: linear-gradient(60deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset($settings->cover_image ?? 'https://www.qodra-egy.net/img/about/ab_4.jpg') }}'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="col-lg-12 text-center">
            <h3 class="address-h3">{{ __('lang.projects') }}</h3>
        </div>
    </div>
</section>


<section class="section-background py-5" data-aos="fade-up" data-aos-delay="200">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">
                <span>{{ $scope->title }}</span>
            </h2>
            <p style="font-size: 1.1rem; color: #666;">
                {{ $scope->description }}
            </p>
        </div>

        <div class="row g-4 section-margin">
            @forelse ($projects as $project)
                <div class="col-md-4">
                    <a href="{{ $project->slug_url }}" class="text-decoration-none">
                        <div class="custom-card">
                            <div class="card-image"
                                style="background-image: url('{{ $project->image_url }}');">
                            </div>

                            {{-- Hover Scope Icon --}}
                            <div class="card-overlay" style="background-color: #40537d;">
                                <div class="overlay-content text-center text-white">
                                    <i class="{{ $project->scope->icon }} fa-3x text-white"></i>
                                </div>
                            </div>

                            <div class="card-footer text-white" style="background-color: #40537d;padding: 18px;">
                                {{ app()->getLocale() === 'ar' ? $project->ar_name : $project->en_name }}
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert text-center" style="color:#003366; ">
                        {{ __('lang.no_projects_found') }}
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</section>
@endsection
