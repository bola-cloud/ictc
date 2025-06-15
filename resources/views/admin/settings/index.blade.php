@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="card p-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2 class="fw-bold">{{ __('lang.website_settings') }}</h2>
        </div>

        @if(session('success'))
            <div class="alert alert-success mt-3">{{ session('success') }}</div>
        @endif

        <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Logo --}}
            <div class="form-group mt-3">
                <label>{{ __('lang.logo') }}</label><br>
                @if(!empty($settings['logo']))
                    <div style="display: inline-block; padding: 10px; background-color: #f1f1f1; border-radius: 8px;">
                        <img src="{{ asset($settings['logo']) }}" width="150" alt="Logo">
                    </div>
                @endif
                <input type="file" name="logo" class="form-control mt-2" accept=".jpeg,.jpg,.png,.gif,.webp">
                @error('logo') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            {{-- Cover Image --}}
            <div class="form-group mt-3">
                <label>{{ __('lang.cover_image') }}</label><br>
                @if(!empty($settings['cover_image']))
                    <div style="display: inline-block; padding: 10px; background-color: #222; border-radius: 8px;">
                        <img src="{{ asset($settings['cover_image']) }}" width="300" alt="Cover">
                    </div>
                @endif
                <input type="file" name="cover_image" class="form-control mt-2" accept=".jpeg,.jpg,.png,.gif,.webp">
                @error('cover_image') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            {{-- Section-specific images --}}
            @php
                $sections = [
                    'about' => __('lang.about_image'),
                    'news' => __('lang.news_image'),
                    'work' => __('lang.work_image'),
                    'work_with_us' => __('lang.work_with_us_image'),
                    'gallery' => __('lang.gallery_image'),
                    'partners' => __('lang.partners_image'),
                    'contact' => __('lang.contact_image'),
                ];
            @endphp

            @foreach($sections as $key => $label)
                <div class="form-group mt-4">
                    <label>{{ $label }}</label><br>
                    @if(!empty($settings[$key . '_image']))
                        <div style="display: inline-block; padding: 10px; background-color: #f1f1f1; border-radius: 8px;">
                            <img src="{{ asset($settings[$key . '_image']) }}" width="300">
                        </div>
                    @endif
                    <input type="file" name="{{ $key }}_image" class="form-control mt-2" accept=".jpeg,.jpg,.png,.gif,.webp">
                    @error($key . '_image') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="form-check mt-2">
                    <input type="checkbox" name="{{ $key }}_background_enabled" class="form-check-input"
                        {{ !empty($settings[$key . '_background_enabled']) && $settings[$key . '_background_enabled'] == '1' ? 'checked' : '' }}>
                    <label class="form-check-label">
                        {{ __('lang.enable_background_overlay') }} ({{ ucfirst(str_replace('_', ' ', $key)) }})
                    </label>
                </div>
            @endforeach

            {{-- Social Media & Contact --}}
            <div class="form-group mt-4">
                <label>{{ __('lang.facebook_link') }}</label>
                <input type="url" name="facebook" class="form-control" value="{{ $settings['facebook'] ?? '' }}">
                @error('facebook') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="form-group mt-3">
                <label>{{ __('lang.linkedin_link') }}</label>
                <input type="url" name="linkedin" class="form-control" value="{{ $settings['linkedin'] ?? '' }}">
                @error('linkedin') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="form-group mt-3">
                <label>{{ __('lang.youtube_link') }}</label>
                <input type="url" name="youtube" class="form-control" value="{{ $settings['youtube'] ?? '' }}">
                @error('youtube') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="form-group mt-3">
                <label>{{ __('lang.whatsapp_number') }}</label>
                <input type="text" name="whatsapp" class="form-control" value="{{ $settings['whatsapp'] ?? '' }}">
                @error('whatsapp') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="form-group mt-3">
                <label>{{ __('lang.email_address') }}</label>
                <input type="email" name="email" class="form-control" value="{{ $settings['email'] ?? '' }}">
                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <hr class="my-4">
            <h4 class="fw-bold">{{ __('lang.statistics_section') }}</h4>

            @php
                $statistics = ['projects', 'partners', 'beneficiaries', 'governorates'];
            @endphp

            <div class="row">
                @foreach($statistics as $stat)
                    <div class="col-md-6 mt-3">
                        <label for="{{ $stat }}_value">{{ __('lang.' . $stat . '_title') }} ({{ __('lang.count') }})</label>
                        <input
                            type="number"
                            name="{{ $stat }}_value"
                            id="{{ $stat }}_value"
                            class="form-control"
                            value="{{ $settings[$stat . '_value'] ?? 0 }}"
                            min="0"
                        >
                        @error($stat . '_value') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                @endforeach
            </div>



            <button type="submit" class="btn btn-primary mt-4">{{ __('lang.save_settings') }}</button>
        </form>
    </div>
</div>
@endsection
