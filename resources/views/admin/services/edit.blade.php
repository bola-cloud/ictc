@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card p-4">
        <h2>{{ __('lang.edit_service') }}</h2>
        <form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')

            <div class="mb-3">
                <label class="form-label">{{ __('lang.title_en') }}</label>
                <input type="text" name="en_title" class="form-control" value="{{ old('en_title', $service->en_title) }}" required>
                @error('en_title') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">{{ __('lang.title_ar') }}</label>
                <input type="text" name="ar_title" class="form-control" value="{{ old('ar_title', $service->ar_title) }}" required>
                @error('ar_title') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">{{ __('lang.image') }}</label>
                <input type="file" name="image" class="form-control" accept="image/*">
                @error('image') <small class="text-danger">{{ $message }}</small> @enderror
                @if($service->image)
                    <div class="mt-2">
                        <img src="{{ asset($service->image) }}" alt="Current Image" style="max-height: 100px;">
                    </div>
                @endif
            </div>

            <button type="submit" class="btn btn-success">{{ __('lang.update') }}</button>
        </form>
    </div>
</div>
@endsection
