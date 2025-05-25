@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <div class="card p-5">
        <div class="d-flex justify-content-center align-items-center p-4">
            <h2>{{ __('lang.add_new_vacancy') }}</h2>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('admin.jobs.store') }}">
            @csrf

            <div class="mb-3">
                <label>{{ __('lang.en_title') }}</label>
                <input type="text" name="en_title" class="form-control" value="{{ old('en_title') }}" required>
                @error('en_title') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label>{{ __('lang.ar_title') }}</label>
                <input type="text" name="ar_title" class="form-control" value="{{ old('ar_title') }}" required>
                @error('ar_title') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label>{{ __('lang.location') }}</label>
                <input type="text" name="location" class="form-control" value="{{ old('location') }}">
                @error('location') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label>{{ __('lang.job_type') }}</label>
                <input type="text" name="job_type" class="form-control" value="{{ old('job_type') }}">
                @error('job_type') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label>{{ __('lang.deadline') }}</label>
                <input type="date" name="deadline" class="form-control" value="{{ old('deadline') }}">
                @error('deadline') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label>{{ __('lang.en_description') }}</label>
                <textarea name="en_description" id="en_description" class="form-control">{{ old('en_description') }}</textarea>
                @error('en_description') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label>{{ __('lang.ar_description') }}</label>
                <textarea name="ar_description" id="ar_description" class="form-control">{{ old('ar_description') }}</textarea>
                @error('ar_description') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <button type="submit" class="btn btn-primary">{{ __('lang.save') }}</button>
        </form>
    </div>
</div>

@push('js')

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<!-- Summernote CDN -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

<!-- Bootstrap 4 -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script>
    $(function () {
        $('#en_description').summernote({ height: 300 });
        $('#ar_description').summernote({ height: 300 });
    });
</script>
@endpush
@endsection
