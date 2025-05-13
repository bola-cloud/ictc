@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card p-4">
        <h1 class="mb-3">{{ __('lang.add_program') }} to {{ $scope->en_title }}</h1>

        <form action="{{ route('admin.programs.store', $scope->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label>{{ __('lang.en_title') }}</label>
                <input type="text" name="en_title" class="form-control @error('en_title') is-invalid @enderror" value="{{ old('en_title') }}" required>
                @error('en_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>{{ __('lang.ar_title') }}</label>
                <input type="text" name="ar_title" class="form-control @error('ar_title') is-invalid @enderror" value="{{ old('ar_title') }}" required>
                @error('ar_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>{{ __('lang.en_description') }}</label>
                <textarea name="en_description" class="form-control @error('en_description') is-invalid @enderror" id="en_description" required>{{ old('en_description') }}</textarea>
                @error('en_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>{{ __('lang.ar_description') }}</label>
                <textarea name="ar_description" class="form-control @error('ar_description') is-invalid @enderror" id="ar_description" required>{{ old('ar_description') }}</textarea>
                @error('ar_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>{{ __('lang.image') }}</label>
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

@push('js')
<!-- jQuery 3.5.1 (compatible with Bootstrap 4) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<!-- Summernote CDN -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

<!-- Bootstrap 4 -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function() {
        // Initialize Summernote for description fields
        $('#en_description').summernote({
            height: 300,  // Set height for better visibility
            codemirror: {
                theme: 'monokai' // Optional: only if you want dark mode
            },
            callbacks: {
                onChange: function(contents, $editable) {
                    // Dynamically bind the content to the form field
                    $('textarea[name="en_description"]').val(contents);
                }
            }
        });

        $('#ar_description').summernote({
            height: 300,  // Set height for better visibility
            callbacks: {
                onChange: function(contents, $editable) {
                    // Dynamically bind the content to the form field
                    $('textarea[name="ar_description"]').val(contents);
                }
            }
        });
    });
</script>
@endpush
