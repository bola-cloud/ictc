@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="card p-4">
        <h1 class="mb-3">{{ __('lang.edit_partner') }}</h1>

        <form action="{{ route('admin.partners.update', $partner->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>{{ __('lang.category') }}</label>
                <select name="category" class="form-control" required>
                    <option value="governmental" {{ $partner->category == 'governmental' ? 'selected' : '' }}>
                        {{ __('lang.governmental') }}
                    </option>
                    <option value="ngo" {{ $partner->category == 'ngo' ? 'selected' : '' }}>
                        {{ __('lang.ngo') }}
                    </option>
                    <option value="international" {{ $partner->category == 'international' ? 'selected' : '' }}>
                        {{ __('lang.international') }}
                    </option>
                </select>
            </div>

            <div class="form-group">
                <label>{{ __('lang.image') }}</label>
                <input type="file" name="image" class="form-control">
                <small>{{ __('lang.upload_new_image') }}</small>
                <br>
                <img src="{{ asset($partner->image_path) }}" width="80">
            </div>

            <button type="submit" class="btn btn-primary">{{ __('lang.save') }}</button>
        </form>
    </div>
</div>
@endsection
