@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="card p-4">
        <h1 class="mb-3">{{ __('lang.add_partner') }}</h1>

        <form action="{{ route('admin.partners.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label>{{ __('lang.category') }}</label>
                <select name="category" class="form-control" required>
                    <option value="governmental">{{ __('lang.governmental') }}</option>
                    <option value="ngo">{{ __('lang.ngo') }}</option>
                    <option value="international">{{ __('lang.international') }}</option>
                </select>
            </div>

            <div class="form-group">
                <label>{{ __('lang.image') }}</label>
                <input type="file" name="image" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">{{ __('lang.save') }}</button>
        </form>
    </div>
</div>
@endsection
