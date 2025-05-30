@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="address" style="background: linear-gradient(60deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset($settings->cover_image ?? 'https://www.qodra-egy.net/img/about/ab_4.jpg') }}'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="col-lg-12 text-center">
            <h3 class="address-h3">{{ __('lang.consultancy_interest') }}</h3>
        </div>
    </div>
</section>

<!-- Form Section -->
<section class="section-background" style="padding: 60px 0; background-color: #fefbe9;" data-aos="fade-up" data-aos-delay="200">
    <div class="container">

        @if(session('success'))
            <div class="alert alert-success text-center" style="background-color: #d4edda; color: #155724; border-radius: 10px;">
                {{ session('success') }}
            </div>
        @endif

        <div class="text-center mb-5">
            <div class="section-header d-flex justify-content-center align-items-center mb-4">
                <h2 class="section-title" style="font-family: 'Georgia', serif; font-weight: bold; font-size: 2.8rem;">
                    <span style="border-bottom: 4px solid #3e4756; padding-bottom: 5px;">{{ __('lang.fill_form') }}</span>
                </h2>
            </div>
        </div>

        <form method="POST" action="{{ route('work-withus.consultancy.submit') }}" enctype="multipart/form-data" class="p-4" style="background-color: #404b62; border-radius: 50px;">
            @csrf
            <div class="row g-4">

                <div class="col-md-6">
                    <input type="text" name="full_name" value="{{ old('full_name') }}" placeholder="{{ __('lang.full_name_placeholder') }}"
                        class="form-control" style="background-color: #fefbe9; border: none; padding: 15px;" required>
                    @error('full_name') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="col-md-6">
                    <input type="file" name="cv" class="form-control" style="background-color: #fefbe9; border: none; padding: 15px;" required>
                    <div class="mt-2 text-white">{{ __('lang.upload_cv_label') }}</div>
                    @error('cv') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="col-md-6">
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="{{ __('lang.email_placeholder') }}"
                        class="form-control" style="background-color: #fefbe9; border: none; padding: 15px;" required>
                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="col-md-6">
                    <input type="text" name="field" value="{{ old('field') }}" placeholder="{{ __('lang.field_placeholder') }}"
                        class="form-control" style="background-color: #fefbe9; border: none; padding: 15px;" required>
                    @error('field') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="col-12">
                    <textarea name="brief" rows="5" placeholder="{{ __('lang.brief_placeholder') }}"
                        class="form-control" style="background-color: #fefbe9; border: none; padding: 15px;" required>{{ old('brief') }}</textarea>
                    @error('brief') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="col-12 text-center mt-3">
                    <button type="submit" class="btn btn-light" style="background-color: transparent; border: 1px solid #fefbe9; color: #fefbe9; padding: 10px 30px; border-radius: 8px;">
                        {{ __('lang.submit') }}
                    </button>
                </div>

            </div>
        </form>
    </div>
</section>

@endsection
