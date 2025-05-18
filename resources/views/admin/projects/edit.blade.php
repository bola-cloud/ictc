@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card p-4">
        <h1 class="mb-3">{{ __('lang.edit_project') }}</h1>

        <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>{{ __('lang.scope') }}</label>
                <select name="scope_id" class="form-control" required>
                    <option value="">{{ __('lang.select_scope') }}</option>
                    @foreach($scopes as $scope)
                        <option value="{{ $scope->id }}" {{ old('scope_id', $project->scope_id) == $scope->id ? 'selected' : '' }}>
                            {{ $scope->en_title }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>{{ __('lang.en_name') }}</label>
                <input type="text" name="en_name" class="form-control @error('en_name') is-invalid @enderror"
                       value="{{ old('en_name', $project->en_name) }}" required>
                @error('en_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>{{ __('lang.ar_name') }}</label>
                <input type="text" name="ar_name" class="form-control @error('ar_name') is-invalid @enderror"
                       value="{{ old('ar_name', $project->ar_name) }}" required>
                @error('ar_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>{{ __('lang.en_description') }}</label>
                <textarea name="en_description" class="form-control @error('en_description') is-invalid @enderror"
                          id="en_description" required>{!! old('en_description', $project->en_description) !!}</textarea>
                @error('en_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>{{ __('lang.ar_description') }}</label>
                <textarea name="ar_description" class="form-control @error('ar_description') is-invalid @enderror"
                          id="ar_description" required>{!! old('ar_description', $project->ar_description) !!}</textarea>
                @error('ar_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>{{ __('lang.image') }}</label>
                <input type="file" name="image" class="form-control-file">
                @if($project->image)
                    <img src="{{ asset('storage/' . $project->image) }}" width="100" alt="Project Image" class="mt-2">
                @endif
            </div>

            <button type="submit" class="btn btn-primary">{{ __('lang.save') }}</button>
        </form>
    </div>
</div>
@endsection

@push('js')
<!-- jQuery + Bootstrap 4 + Summernote -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

<script>
    $(document).ready(function () {
        $('#en_description').summernote({
            height: 300,
            callbacks: {
                onChange: function(contents) {
                    $('textarea[name="en_description"]').val(contents);
                }
            }
        });

        $('#ar_description').summernote({
            height: 300,
            callbacks: {
                onChange: function(contents) {
                    $('textarea[name="ar_description"]').val(contents);
                }
            }
        });
    });
</script>
@endpush
