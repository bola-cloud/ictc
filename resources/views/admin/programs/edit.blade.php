@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card p-4">
        <h1 class="mb-3">{{ __('lang.edit_program') }}: {{ $program->en_title }}</h1>

        <form action="{{ route('admin.programs.update', [$scope->id, $program->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>{{ __('lang.en_title') }}</label>
                <input type="text" name="en_title" class="form-control @error('en_title') is-invalid @enderror" value="{{ old('en_title', $program->en_title) }}" required>
                @error('en_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>{{ __('lang.ar_title') }}</label>
                <input type="text" name="ar_title" class="form-control @error('ar_title') is-invalid @enderror" value="{{ old('ar_title', $program->ar_title) }}" required>
                @error('ar_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>{{ __('lang.en_description') }}</label>
                <textarea name="en_description" class="form-control @error('en_description') is-invalid @enderror" id="en_description" required>{{ old('en_description', $program->en_description) }}</textarea>
                @error('en_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>{{ __('lang.ar_description') }}</label>
                <textarea name="ar_description" class="form-control @error('ar_description') is-invalid @enderror" id="ar_description" required>{{ old('ar_description', $program->ar_description) }}</textarea>
                @error('ar_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>{{ __('lang.image') }}</label>
                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" accept="image/*">
                @if($program->image)
                    <img src="{{ asset('storage/' . $program->image) }}" class="img-fluid mt-2" style="max-height: 150px;" alt="Current Image">
                @endif
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">{{ __('lang.update') }}</button>
        </form>
    </div>
</div>

<script>
    // Initialize TinyMCE for description fields
    tinymce.init({
        selector: '#en_description, #ar_description',
        height: 400,
        menubar: false,
        plugins: 'advlist autolink lists link image charmap print preview anchor',
        toolbar: 'undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
    });
</script>
@endsection
