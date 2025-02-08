@extends('layouts.app')

@section('content')

<!-- Address Section -->
<section class="address">
    <div class="container">
        <div class="col-lg-12 text-center">
            <h3 class="address-h3">
                {{ __('lang.partners_heading') }}
            </h3>
        </div>
    </div>
</section>

<section class="partners-section">
    <div class="container">
        <!-- Title -->
        <div class="text-center mb-4">
            <h3 class="title">
                {{ __('lang.partners_section_title') }} <strong>{{ __('lang.partners_section_strong') }}</strong>
            </h3>
        </div>

        <!-- Dynamic Partners Section -->
        <div class="row">
            @foreach ($partners as $category => $categoryPartners)
                <div class="col-12 mb-5">
                    <h4 class="category-title text-center mb-3">
                        {{ __('lang.' . $category) }}
                    </h4>
                    <div class="row">
                        @foreach ($categoryPartners as $partner)
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

@endsection
