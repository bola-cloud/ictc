@extends('layouts.app')

@section('content')

<section class="address" style="background: linear-gradient(60deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset($settings->cover_image ?? 'https://www.qodra-egy.net/img/about/ab_4.jpg') }}'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="col-lg-12 text-center">
            <h3 class="address-h3">{{ __('lang.projects') }}</h3>
        </div>
    </div>
</section>

<section class="section-background py-5">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="section-title">
                <span>{{ app()->getLocale() === 'ar' ? $project->ar_name : $project->en_name }}</span>
            </h2>
            <p class="text-muted">
                <i class="{{ $scope->icon }}"></i> {{ app()->getLocale() === 'ar' ? $scope->ar_title : $scope->en_title }}
            </p>
        </div>

        <div class="text-center mb-5">
            @if ($project->image)
                <img src="{{ $project->image_url }}" class="img-fluid rounded" style="max-height: 400px;">
            @endif
        </div>

        <div class="project-description">
            {!! app()->getLocale() === 'ar' ? $project->ar_description : $project->en_description !!}
        </div>
    </div>
</section>
@endsection
