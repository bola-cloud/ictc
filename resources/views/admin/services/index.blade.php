@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold">{{ __('lang.services') }}</h2>
            <a href="{{ route('admin.services.create') }}" class="btn btn-primary">{{ __('lang.add_service') }}</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="row">
            @foreach($services as $service)
                <div class="col-md-6 col-lg-4 d-flex mt-3">
                    <div class="card shadow-sm border-0 w-100 h-100 d-flex flex-column">
                        <div class="card-body d-flex flex-column text-center">
                            @if($service->image)
                                <img src="{{ asset($service->image) }}" alt="Service Image" class="mb-3" style="max-height: 120px; object-fit: contain;">
                            @endif
                            <h5 class="card-title fw-bold">{{ $service->en_title }} / {{ $service->ar_title }}</h5>
                            <div class="mt-3 d-flex justify-content-between">
                                <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-warning">{{ __('lang.edit') }}</a>
                                <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('{{ __('lang.confirm_delete') }}')">{{ __('lang.delete') }}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-4 d-flex justify-content-center">
            {{ $services->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
@endsection
