@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <h2>{{ __('lang.internship_interests') }}</h2>

    <!-- Search -->
    <form method="GET" action="{{ route('admin.interests.internships.index') }}" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" value="{{ $search }}" class="form-control" placeholder="{{ __('lang.search_placeholder') }}">
            <button type="submit" class="btn btn-primary">{{ __('lang.search') }}</button>
            <a href="{{ route('admin.interests.internships.export') }}" class="btn btn-success ms-2 me-2">{{ __('lang.export_excel') }}</a>
        </div>
    </form>

    <!-- Table -->
    <div class="table-responsive">
        <table class="table table-striped table-bordered align-middle">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{ __('lang.full_name') }}</th>
                    <th>{{ __('lang.email') }}</th>
                    <th>{{ __('lang.field') }}</th>
                    <th>{{ __('lang.brief') }}</th>
                    <th>{{ __('lang.cv') }}</th>
                    <th>{{ __('lang.submitted_at') }}</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($interests as $index => $item)
                    <tr>
                        <td>{{ $index + 1 + ($interests->currentPage() - 1) * $interests->perPage() }}</td>
                        <td>{{ $item->full_name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->field }}</td>
                        <td>{{ Str::limit($item->brief, 50) }}</td>
                        <td>
                            @if($item->cv_path)
                                <a href="{{ asset('storage/' . $item->cv_path) }}" target="_blank">{{ __('lang.download') }}</a>
                            @endif
                        </td>
                        <td>{{ $item->created_at->format('Y-m-d H:i') }}</td>
                    </tr>
                @empty
                    <tr><td colspan="7" class="text-center">{{ __('lang.no_data_found') }}</td></tr>
                @endforelse
            </tbody>
        </table>

        {{ $interests->withQueryString()->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection
