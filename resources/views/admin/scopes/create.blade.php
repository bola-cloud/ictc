@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card p-4">
        <h1 class="mb-3">{{ __('lang.add_scope') }}</h1>

        <form action="{{ route('admin.scopes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group mb-3">
                <label>{{ __('lang.ar_title') }}</label>
                <input type="text" name="ar_title" class="form-control @error('ar_title') is-invalid @enderror" value="{{ old('ar_title') }}" required>
                @error('ar_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label>{{ __('lang.en_title') }}</label>
                <input type="text" name="en_title" class="form-control @error('en_title') is-invalid @enderror" value="{{ old('en_title') }}" required>
                @error('en_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label>{{ __('lang.ar_description') }}</label>
                <textarea name="ar_description" class="form-control @error('ar_description') is-invalid @enderror" required>{{ old('ar_description') }}</textarea>
                @error('ar_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label>{{ __('lang.en_description') }}</label>
                <textarea name="en_description" class="form-control @error('en_description') is-invalid @enderror" required>{{ old('en_description') }}</textarea>
                @error('en_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label>{{ __('lang.icon') }}</label>
                <input type="text" name="icon" class="form-control @error('icon') is-invalid @enderror" value="{{ old('icon') }}" placeholder="e.g., fas fa-search" required>
                @error('icon')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label>{{ __('lang.color') }}</label>
                <select name="color" class="form-control @error('color') is-invalid @enderror" id="colorSelect" required>
                    <option value="">{{ __('lang.select_color') }}</option>

                    <option value="#0d6efd" class="text-primary" {{ old('color') == '#0d6efd' ? 'selected' : '' }}>
                        {{ __('lang.primary') }}
                    </option>
                    <option value="#198754" class="text-success" {{ old('color') == '#198754' ? 'selected' : '' }}>
                        {{ __('lang.success') }}
                    </option>
                    <option value="#ffc107" class="text-warning" {{ old('color') == '#ffc107' ? 'selected' : '' }}>
                        {{ __('lang.warning') }}
                    </option>
                    <option value="#dc3545" class="text-danger" {{ old('color') == '#dc3545' ? 'selected' : '' }}>
                        {{ __('lang.danger') }}
                    </option>
                    <option value="#0dcaf0" class="text-info" {{ old('color') == '#0dcaf0' ? 'selected' : '' }}>
                        {{ __('lang.info') }}
                    </option>
                    <option value="#6c757d" class="text-secondary" {{ old('color') == '#6c757d' ? 'selected' : '' }}>
                        {{ __('lang.secondary') }}
                    </option>
                    <option value="#212529" class="text-dark" {{ old('color') == '#212529' ? 'selected' : '' }}>
                        {{ __('lang.dark') }}
                    </option>
                    <option value="#f7941d" style="color: #f7941d;" {{ old('color') == '#f7941d' ? 'selected' : '' }}>
                        {{ __('lang.custom_orange') }}
                    </option>
                </select>

                @error('color')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label class="form-label">{{ __('lang.image') }}</label>
                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" accept="image/*">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">{{ __('lang.save') }}</button>
        </form>
    </div>
</div>
@endsection
